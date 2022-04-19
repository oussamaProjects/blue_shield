<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Invoice;
use App\Reminder;
use App\Services\Storage\GetStorageProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Ramsey\Uuid\Uuid;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function addReminder(Request $request, Invoice $invoice)
    {

        // dd($request->file('attachments_files'));
        if (!$invoice->isSent()) {
            session()->flash('flash_message_warning', __("Can't add reminder record on Invoice"));
            return redirect()->route('invoices.show', $invoice->external_id);
        }

        // dd($request);
        // if ($invoice->reminders->contains($request->reminder_id))
        //     $invoice->reminders()->detach( );

        $invoice->reminders()->attach($request->reminder_id, [
            'note' => $request->note,
            'conform' => $request->conform ?? 1,
            'attachments' => $request->attachments_files,
        ]);

        $invoice->reporting_date = $request->reporting_date;
        $invoice->save();


        // handle file upload 
        if ($request->file('attachments_files') )
        foreach ($request->file('attachments_files') as $key => $attachment) {
            // filename with extension
            $fileNameWithExt = $attachment->getClientOriginalName();
            // filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // extension
            $extension = $attachment->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            // upload file
            // dd($attachment);
            try {
                // $path = $attachment->storeAs('public/invoices/client_' . $invoice->client_id . '/invoice_' . $invoice->id, $fileNameToStore);
                $path = $attachment->move('invoices/client_' . $invoice->client_id . '/invoice_' . $invoice->id, $fileNameToStore);
            } catch (\Throwable $th) {
                dd($th);
            }

            // $size = Storage::size($path);
            $size = $path->getSize();
            if ($size >= 1000000) {
                $filesize = round($size / 1000000) . 'MB';
            } elseif ($size >= 1000) {
                $filesize = round($size / 1000) . 'KB';
            } else {
                $filesize = $size;
            }

            $folder = $invoice->external_id;
            $fileSystem = GetStorageProvider::getStorage();
            $fileData = $fileSystem->upload($folder, $filename, $attachment);

            Document::create([
                'external_id' => Uuid::uuid4()->toString(),
                'path' => $path,
                'size' => $filesize,
                'original_filename' => $fileNameWithExt,
                'source_id' => $invoice->id,
                'source_type' => Invoice::class,
                'mime' => $path->getMimeType(),
                // 'mime' => Storage::mimeType($path),
                'integration_id' => isset($fileData['id']) ? $fileData['id'] : null,
                'integration_type' => get_class($fileSystem)
            ]);
        }


        // foreach ($variable as $key => $value) {  }
        session()->flash('flash_message', __('Reminder successfully added to invoice'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function show(Reminder $reminder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function edit(Reminder $reminder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reminder $reminder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reminder $reminder)
    {
        //
    }
}
