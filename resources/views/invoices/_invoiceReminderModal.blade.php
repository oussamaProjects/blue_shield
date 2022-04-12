<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel">
        {{ $reminder->name }} -
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

<form action="{{ route('reminder.add', [$invoice->external_id]) }}" method="POST">
    <div class="modal-body">

        <div class="row">
            <div class="col-lg-12">

                {!! Form::hidden('reminder_id', $reminder->id) !!}

                @if ($reminder->id == 1)
                    <div class="col-sm-3">
                        <label for="name" class="base-input-label">@lang('Docs')</label>
                    </div>
                    <div class="col-sm-9">

                        <div class="form-group col-sm-8">

                            <div class="checkbox">
                                <label><input type="checkbox" name="attachments[]" value="1">Attachement</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="attachments[]" value="2">Bon de Livraison</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="attachments[]" value="3">Ordre de Travail</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="attachments[]" value="4">Bon de commande</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="attachments[]" value="5">Fiche de controle</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="attachments[]" value="6">Fiche de pointage</label>
                            </div>
                        </div>
                    </div>
                @endif


                {{ csrf_field() }}
                <div class="form-group col-lg-12">
                    <label for="source" class="thin-weight">@lang('Description')</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>


                <div class="col-sm-3">
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
                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default col-lg-6" data-dismiss="modal">{{ __('Close') }}</button>
                <div class="col-lg-6">
                    <input type="submit" value="{{ __('Register the reminder') }}"
                        class="btn btn-brand form-control closebtn">
                </div>
            </div>
        </div>
    </div>

</form>

@push('scripts')
    <script>
        $('#payment_date').pickadate({
            hiddenName: true,
            format: "{{ frontendDate() }}",
            formatSubmit: 'yyyy/mm/dd',
            closeOnClear: false,
        });
    </script>
@endpush
