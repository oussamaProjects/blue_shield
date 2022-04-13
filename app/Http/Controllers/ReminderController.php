<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Reminder;
use Illuminate\Http\Request;

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
        if (!$invoice->isSent()) {
            session()->flash('flash_message_warning', __("Can't add reminder record on Invoice"));
            return redirect()->route('invoices.show', $invoice->external_id);
        }

        // if ($invoice->reminders->contains($request->reminder_id))
        //     $invoice->reminders()->detach( );

        $invoice->reminders()->attach($request->reminder_id, [
            'note' => $request->note,
            'conform' => $request->conform ?? 1,
            'attachments' => $request->attachments ?? array(),
        ]);


        $invoice->reporting_date = $request->reporting_date;
        $invoice->save();

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
