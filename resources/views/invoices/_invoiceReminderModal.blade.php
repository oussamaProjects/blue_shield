<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel">
        {{ $reminder->description }} -
        @if ($reminder->id == 1)
            {{ date(carbonDate(), strtotime($invoice->vddf_date())) }}
        @elseif ($reminder->id == 2)
            {{ date(carbonDate(), strtotime($invoice->cdef_date())) }}
        @elseif ($reminder->id == 3)
            {{ date(carbonDate(), strtotime($invoice->cap_date())) }}
        @elseif ($reminder->id == 4)
            {{ date(carbonDate(), strtotime($invoice->rp_date())) }}
        @endif
    </h4>
</div>

<form action="{{ route('reminder.add', [$invoice->external_id]) }}" method="POST" enctype="multipart/form-data">
    <div class="modal-body">

        <div class="row">
            <div class="col-lg-12">

                {!! Form::hidden('reminder_id', $reminder->id) !!}

                <div class="col-lg-12">
                    @if ($reminder->id == 1)
                        @include('invoices._attachments_upload', [
                            'attachments' => json_decode($invoice->attachments),
                        ])
                    @endif
                </div>

                {{ csrf_field() }}
                <div class="form-group col-lg-12">
                    <label for="source" class="thin-weight">@lang('Description')</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>

                @if ($reminder->id == 4)
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="reporting_date"
                                class="control-label thin-weight">@lang('reporting_date')</label>
                            <input type="text" id="reporting_date" name="reporting_date"
                                data-value="{{ $invoice->due_at->addDays(3) }}" class="form-control">
                        </div>
                    </div>
                @endif

                {{-- <div class="col-sm-3">
                    <label for="name" class="base-input-label">@lang('Settings')</label>
                </div>

                <div class="col-sm-9">
                    <div class="form-group col-sm-8">
                        <label class="radio-inline">
                            <input value="1" type="radio" name="conform">@lang('Conform')
                        </label>
                        <label class="radio-inline">
                            <input value="0" type="radio" name="conform" checked>@lang('No Conform')
                        </label>
                    </div>
                </div> --}}

                <div class="col-md-12">
                    <table class="table table-hover" style="font-size:11px;" id="reminders-table">
                        <thead>
                            <th>name</th>
                            {{-- <th>description</th> --}}
                            <th>note</th>
                            <th>conform</th>
                            <th>reporting date</th>
                        </thead>
                        <tbody>

                            @foreach ($invoiceReminders as $reminde)
                                @if ($loop->iteration < 10)
                                    @if ($reminder->id == $reminde->id)
                                        <tr>
                                            <td>{{ $reminde->name }}</td>
                                            {{-- <td>{{ $reminde->description }}</td> --}}
                                            <td>{{ $reminde->note }}</td>
                                            <td>{{ $reminde->conform == 1 ? 'conform' : '' }}</td>
                                            <td>{{ $reminde->reporting_date }}</td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer col-lg-12">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-default col-lg-6"
                        data-dismiss="modal">{{ __('Close') }}</button>
                </div>
                <div class="col-lg-6">
                    <input type="submit" value="{{ __('Register the reminder') }}"
                        class="btn btn-brand form-control closebtn">
                </div>
            </div>
        </div>
    </div>

</form>
