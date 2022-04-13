<?php

namespace App\Http\Controllers;

use View;
use App\Billy;
use Datatables;
use Carbon\Carbon;
use App\Models\Lead;
use App\Models\Task;
use Ramsey\Uuid\Uuid;
use App\Http\Requests;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Setting;
use App\Models\Integration;
use App\Models\InvoiceLine;
use App\Enums\InvoiceStatus;
use App\Enums\OfferStatus;
use App\Enums\PaymentSource;
use Illuminate\Http\Request;
use App\Repositories\Tax\Tax;
use App\Repositories\Money\Money;
use App\Repositories\Currency\Currency;
use App\Repositories\Money\MoneyConverter;
use App\Services\Invoice\InvoiceCalculator;
use App\Http\Requests\Invoice\AddInvoiceLine;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Project;
use App\Models\Reminder;
use App\Models\Status;
use App\Models\User;
use App\Services\InvoiceNumber\InvoiceNumberService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class InvoicesController extends Controller
{


    const CREATED = 'created';
    const UPDATED_STATUS = 'updated_status';
    const UPDATED_TIME = 'updated_time';
    const UPDATED_ASSIGN = 'updated_assign';
    const UPDATED_DEADLINE = 'updated_deadline';

    protected $clients;
    protected $invoices;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!auth()->user()->can('invoice-view')) {
            session()->flash('flash_message_warning', __('You do not have permission to view those invoice'));
            return redirect()->route('dashboard');
        }

        $invoices = Invoice::all();
        return view('invoices.index')->withInvoices($invoices);
    }

    public function create($client_external_id = null, $project_external_id = null)
    {

        if (!auth()->user()->can('invoice-manage')) {
            session()->flash('flash_message_warning', __('You do not have permission to add this invoice'));
            return redirect()->route('dashboard');
        }

        $projects = null;
        $client =  Client::whereExternalId($client_external_id);
        $project = Project::whereExternalId($project_external_id)->first();
        if ($client) {
            $projects = $client->projects()->whereHas('status', function ($q) {
                return $q->where('title', '!=', 'Closed');
            })->pluck('title', 'external_id');
        }

        return view('invoices.create')
            ->withUsers(User::with(['department'])->get()->pluck('nameAndDepartmentEagerLoading', 'id'))
            ->withClients(Client::pluck('company_name', 'external_id'))
            ->withClient($client ?: null)
            ->withProjects($projects ?: null)
            ->withProject($project ?: null)
            ->withStatuses(Status::typeOfTask()->pluck('title', 'id'))
            ->with('filesystem_integration', Integration::whereApiType('file')->first());
    }

    /**
     * Store the specified resource.
     *
     * @param Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('invoice-manage')) {
            session()->flash('flash_message_warning', __('You do not have permission to create this invoice'));
            return redirect()->route('dashboard');
        }

        $project = null;
        if ($request->client_external_id) {
            $client = Client::whereExternalId($request->client_external_id);
        }

        if ($request->project_external_id) {
            $project = Project::whereExternalId($request->project_external_id)->first();
        }

        $input = array_merge(
            $request->all(),
            []
        );

        $invoice = Invoice::create(
            [
                'title' => $request->title,
                // 'external_id' => Uuid::uuid4()->toString(),
                'invoice_number' => app(InvoiceNumberService::class)->nextInvoiceNumber(),
                'external_id' => Uuid::uuid4()->toString(),
                'integration_invoice_id' => $request->external_id,
                // 'description' => clean($request->description),
                'db_id' => $request->bd_id,
                'total' => $request->total,
                'create_at' => Carbon::parse($request->create_at),
                'deadline' => Carbon::parse($request->deadline),
                'send_date' => Carbon::parse($request->send_date),
                'due_at' => Carbon::parse($request->due_at),
                'delivery_date' => Carbon::parse($request->delivery_date),
                'ack_date' => Carbon::parse($request->ack_date),
                'user_assigned_id' => auth()->id(),
                'user_created_id' => auth()->id(),
                'client_id' => $client->id,
                'project_id' => optional($project)->id,
                'status_id' => $request->status_id,
                'status' => 'draft',
            ]
        );

        $insertedExternalId = $invoice->external_id;

        Session()->flash('flash_message', __('Invoice successfully added'));
        event(new \App\Events\InvoiceAction($invoice, self::CREATED));

        // if (!is_null($request->images)) {
        //     foreach ($request->file('images') as $image) {
        //         $this->upload($image, $invoice);
        //     }
        // }
        //Hack to make dropzone js work, as it only called with AJAX and not form submit
        return response()->json(['invoice_external_id' => $invoice->external_id, 'project_external_id' => $project ? $project->external_id : null]);
        return redirect()->route("invoice.show", $insertedExternalId);
    }

    /**
     * Display the specified resource.
     *
     * @param Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        if (!auth()->user()->can('invoice-see')) {
            session()->flash('flash_message_warning', __('You do not have permission to view this invoice'));
            return redirect()->route('clients.index');
        }

        $apiConnected = false;
        $invoiceContacts = [];
        $primaryContact = null;

        $api = Integration::initBillingIntegration();

        if ($api) {
            $apiConnected = true;

            $invoiceContacts = $api->getContacts();
            if (empty($invoiceContacts)) {
                $apiConnected = false;
            } else {
                $primaryContact = $api->getPrimaryContact($invoice->client);
            }
        }

        $invoiceCalculator = new InvoiceCalculator($invoice);
        $totalPrice = $invoiceCalculator->getTotalPrice();
        $subPrice = $invoiceCalculator->getSubTotal();
        $vatPrice = $invoiceCalculator->getVatTotal();
        $amountDue = $invoiceCalculator->getAmountDue();

        // dd($vatPrice);

        $invoice_reminders = DB::table('invoices')
            ->select('reminders.id', 'reminders.name', 'reminders.description', 'invoice_reminder.note', 'invoice_reminder.conform', 'invoice_reminder.attachments', 'invoices.reporting_date')
            ->join('invoice_reminder', 'invoice_reminder.invoice_id', '=', 'invoices.id')
            ->join('reminders', 'invoice_reminder.reminder_id', '=', 'reminders.id')
            ->where('invoices.id', $invoice->id)
            ->get();

        return view('invoices.show')
            ->withInvoice($invoice)
            ->withApiconnected($apiConnected)
            ->withContacts($invoiceContacts)
            ->withfinalPrice(app(MoneyConverter::class, ['money' => $totalPrice])->format())
            ->withsubPrice(app(MoneyConverter::class, ['money' => $amountDue])->format())
            ->withVatPrice(app(MoneyConverter::class, ['money' => $vatPrice])->format())
            ->withAmountDueFormatted(app(MoneyConverter::class, ['money' => $amountDue])->format())
            ->withPrimaryContact(optional($primaryContact)[0])
            ->withPaymentSources(PaymentSource::values())
            ->withAmountDue($amountDue)
            ->withSource($invoice->source)
            ->withReminders(Reminder::all())
            ->withInvoiceReminders($invoice_reminders)
            ->withCompanyName(Setting::first()->company);
    }


    /**
     * Update the sent status
     * @param Request $request
     * @param $external_id
     * @return mixed
     */
    public function updateSentStatus(Request $request, $external_id)
    {
        if (!auth()->user()->can('invoice-send')) {
            session()->flash('flash_message_warning', __('You do not have permission to send an invoice'));
            return redirect()->route('invoices.show', $external_id);
        }
        /** @var Invoice $invoice */
        $invoice = $this->findByExternalId($external_id);
        if ($invoice->isSent()) {
            session()->flash('flash_message_warning', __('Invoice already sent'));
            return redirect()->route('invoices.show', $external_id);
        }

        $result = $invoice->invoice($request->invoiceContact);
        if ($request->sendMail && $request->invoiceContact) {
            $attachPdf = $request->attachPdf ? true : false;
            $invoice->sendMail($request->subject, $request->message, $request->recipientMail, $attachPdf);
        }

        $invoice->sent_at =  Carbon::now();
        $invoice->status  =  InvoiceStatus::unpaid()->getStatus();
        $invoice->due_at  =  $result["due_at"];
        $invoice->invoice_number = app(InvoiceNumberService::class)->setInvoiceNumber($result["invoice_number"]);
        $invoice->save();

        return redirect()->back();
    }

    /**
     * Add new invoice line
     * @param $external_id
     * @param AddInvoiceLine $request
     * @return mixed
     * @throws \Exception
     */
    public function newItem($external_id, AddInvoiceLine $request)
    {
        if (!auth()->user()->can('modify-invoice-lines')) {
            session()->flash('flash_message_warning', __('You do not have permission to modify invoice lines'));
            return redirect()->route('invoices.show', $external_id);
        }
        $invoice = $this->findByExternalId($external_id);

        if (!$invoice->canUpdateInvoice()) {
            Session::flash('flash_message_warning', __("Can't insert new invoice line, to already sent invoice"));
            return redirect()->back();
        }

        $product = null;
        if ($request->product_id) {
            $product = $request->product_id;
        } elseif ($request->product) {
            $product = Product::whereExternalId($request->product)->first()->id;
        }

        InvoiceLine::create([
            'external_id' => Uuid::uuid4()->toString(),
            'title' => $request->title,
            'comment' => $request->comment,
            'quantity' => $request->quantity,
            'type' => $request->type,
            'price' => $request->price * 100,
            'invoice_id' => $invoice->id,
            'product_id' => $product
        ]);

        return redirect()->back();
    }

    public function newItems($external_id, Request $request)
    {
        foreach ($request->all() as $invoiceLine) {
            $invoiceLine = new AddInvoiceLine($invoiceLine);
            $this->newItem($external_id, $invoiceLine);
        }
    }

    public function findByExternalId($external_id)
    {
        return Invoice::whereExternalId($external_id)->first();
    }

    public function paymentsDataTable(Invoice $invoice)
    {
        $payments = $invoice->payments()->select(
            ['external_id', 'amount', 'payment_date', 'description', 'payment_source']
        );

        return Datatables::of($payments)
            ->editColumn('amount', function ($payments) {
                return app(MoneyConverter::class, ['money' => $payments->price])->format();
            })
            ->editColumn('payment_date', function ($payments) {
                return $payments->payment_date ? with(new Carbon($payments->payment_date))
                    ->format(carbonDate()) : '';
            })
            ->editColumn('payment_source', function ($payments) {
                return __($payments->payment_source);
            })
            ->editColumn('description', function ($payments) {
                return substr($payments->description, 0, 80);
            })
            ->addColumn('delete', '
                <form action="{{ route(\'payment.destroy\', $external_id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="' . __('Delete') . '" class="btn btn-link" onClick="return confirm(\'Are you sure you want to delete the payment?\')"">
            {{csrf_field()}}
            </form>')
            ->rawColumns(['delete'])
            ->make(true);
    }

    public function remindersDataTable(Invoice $invoice)
    {
        $reminders = $invoice->reminders()->select(
            ['name', 'description', 'conform', 'note', 'attachments', 'invoice_reminder.created_at']
        );

        return Datatables::of($reminders)
            ->editColumn('name', function ($reminders) {
                return __($reminders->name);
            })
            ->editColumn('description', function ($reminders) {
                return __($reminders->description);
            })
            ->editColumn('created_at', function ($reminders) {
                return __($reminders->created_at);
            })
            ->editColumn('conform', function ($reminders) {
                return ($reminders->conform) ? 'Conform' : 'No Conform';
            })
            ->editColumn('note', function ($reminders) {
                return substr($reminders->note, 0, 80);
            })
            ->editColumn('attachments', function ($reminders) {
                $attachmentNames = '';
                if (isset($reminders->attachments)) {
                    $attachments = json_decode($reminders->attachments, true);
                    foreach ($attachments as $attachment) {
                        $attachmentNames .= ($attachment == 1) ? ' Attachements' : '';
                        $attachmentNames .= ($attachment == 2) ? ' Bon de Livraison' : '';
                        $attachmentNames .= ($attachment == 3) ? ' Ordre de Travail' : '';
                        $attachmentNames .= ($attachment == 4) ? ' Bon de commande' : '';
                        $attachmentNames .= ($attachment == 5) ? ' Fiche de controle' : '';
                        $attachmentNames .= ($attachment == 6) ? ' Fiche de pointage' : '';
                    }
                }
                return $attachmentNames;
            })
            ->addColumn('delete', '
                <form action=" " method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" name="submit" value="' . __('Delete') . '" class="btn btn-link" onClick="return confirm(\'Are you sure you want to delete the reminder?\')"">
                    {{csrf_field()}}
                </form>')
            ->rawColumns(['delete'])
            ->make(true);
    }

    public function DataTable(Invoice $invoice)
    {
        $payments = $invoice->payments()->select(
            ['external_id', 'amount', 'payment_date', 'description', 'payment_source']
        );

        return Datatables::of($payments)
            ->editColumn('amount', function ($payments) {
                return app(MoneyConverter::class, ['money' => $payments->price])->format();
            })
            ->editColumn('payment_date', function ($payments) {
                return $payments->payment_date ? with(new Carbon($payments->payment_date))
                    ->format(carbonDate()) : '';
            })
            ->editColumn('payment_source', function ($payments) {
                return __($payments->payment_source);
            })
            ->editColumn('description', function ($payments) {
                return substr($payments->description, 0, 80);
            })
            ->addColumn('delete', '
                <form action="{{ route(\'payment.destroy\', $external_id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="' . __('Delete') . '" class="btn btn-link" onClick="return confirm(\'Are you sure you want to delete the payment?\')"">
            {{csrf_field()}}
            </form>')
            ->rawColumns(['delete'])
            ->make(true);
    }


    public function moneyFormat()
    {
        $formats = [];
        $currency = app(Currency::class, ["code" => Setting::select("currency")->first()->currency]);
        $formats = array_merge($formats, $currency->toArray());
        $formats['vatPercentage'] = app(Tax::class)->multipleVatRate();
        $formats['vatRate'] = app(Tax::class)->vatRate();

        return $formats;
    }

    public function overdue()
    {
        $invoices = Invoice::pastDueAt()->get();

        return view('invoices.overdue')->withInvoices($invoices);
    }
}
