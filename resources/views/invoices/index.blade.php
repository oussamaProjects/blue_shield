@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tablet tablet--tabs tablet--height-fluid">
                <div class="tablet__head ">
                    <div class="tablet__head-toolbar">
                        @lang('Overdue invoices')
                    </div>
                </div>
                <div class="tablet__body">
                    <table class="table table-hover" id="leads-table">
                        <thead>
                            <tr>
                                <th>{{ __('Invoice number') }}</th>
                                <th>{{ __('Invoice ID') }}</th>
                                <th>{{ __('Create') }}</th>
                                {{-- <th>{{ __('deadline') }}</th> --}}
                                {{-- <th>{{ __('sent date') }}</th> --}}
                                <th>{{ __('Invoice date') }}</th>
                                <th>{{ __('Due date') }}</th>
                                <th>{{ __('Delivery') }}</th>
                                <th>{{ __('Ask') }}</th>
                                <th>{{ __('Amount') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td>
                                        <a href="{{ route('invoices.show', $invoice->external_id) }}">{{ $invoice->invoice_number }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('invoices.show', $invoice->external_id) }}">{{ $invoice->external_id }}</a>
                                    </td>
                                    <td>
                                        @if (!empty($invoice->created_at))
                                            {{ $invoice->created_at->format(carbonDateWithText()) }}
                                        @endif
                                    </td>
                                    {{-- <td>
                                        @if (!empty($invoice->deadline))
                                            {{ $invoice->deadline->format(carbonDateWithText()) }}
                                        @endif
                                    </td> --}}
                                    {{-- <td>
                                        @if (!empty($invoice->sent_at))
                                            {{ $invoice->sent_at->format(carbonDateWithText()) }}
                                        @endif
                                    </td> --}}
                                    <td>
                                        @if (!empty($invoice->send_date))
                                            {{ $invoice->send_date->format(carbonDateWithText()) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (!empty($invoice->due_at))
                                            {{ $invoice->due_at->format(carbonDateWithText()) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (!empty($invoice->delivery_date))
                                            {{ $invoice->delivery_date->format(carbonDateWithText()) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (!empty($invoice->ack_date))
                                            {{ $invoice->ack_date->format(carbonDateWithText()) }}
                                        @endif
                                    </td>
                                    <td>{{ formatMoney($invoice->totalPrice) }}</td>
                                    <td><a href="{{ route('invoices.show', $invoice->external_id) }}">@lang('View')</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                    @if ($invoices->isEmpty())
                        <h3 style="text-align: center;">@lang('No invoices')</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
