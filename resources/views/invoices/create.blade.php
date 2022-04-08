@extends('layouts.master')

@section('heading')
    {{-- {{ __('Create invoice') }} <span class="small">{{ $client ? '(' . $client->company_name . ')' : '' }}</span> --}}
@stop

@section('content')

    <div class="row">
        <form action="{{ route('invoices.store') }}" method="POST" id="createInvoiceForm">
            <div class="col-sm-8">
                <div class="tablet">
                    <div class="tablet__body">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title" class="control-label thin-weight">@lang('Title')</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div> 
                            
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="external_id" class="control-label thin-weight">@lang('external_id')</label>
                                    <input type="text" name="external_id" id="external_id" class="form-control">
                                </div>
                            </div> 
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bd_id" class="control-label thin-weight">@lang('bd_id')</label>
                                    <input type="number" name="bd_id" id="bd_id" class="form-control">
                                </div>
                            </div> 

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total" class="control-label thin-weight">@lang('Total')</label>
                                    <input type="number" name="total" id="total" class="form-control">
                                </div>
                            </div> 

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description" class="control-label thin-weight">@lang('Description')</label>
                                    <textarea name="description" id="description" cols="50" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="tablet">
                    <div class="tablet__body">
                        <div class="form-group">
                            <label for="user_assigned_id" class="control-label thin-weight">@lang('Assign user')</label>
                            <select name="user_assigned_id" id="user_assigned_id" class="form-control">
                                @foreach ($users as $user => $userK)
                                    <option value="{{ $user }}">{{ $userK }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            @if (Request::get('client') != '' || $client)
                                <input type="hidden" name="client_external_id" value="{!! Request::get('client') ?: $client->external_id !!}">
                            @else
                                <label for="client_external_id" class="control-label thin-weight">@lang('Assign
                                    client')</label>

                                <select name="client_external_id" id="client_external_id" data-container="body"
                                    data-live-search="true" data-style-base="form-control" data-style="" data-width="100%">
                                    @if ($clients->isEmpty())
                                        <option value="" default></option>
                                        <option value="new_client">+ @lang('Create New Client')</option>
                                    @endif
                                    @foreach ($clients as $client => $clientK)
                                        <option value="{{ $client }}" data-tokens="{{ $clientK }}">
                                            {{ $clientK }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>

                        @if ($projects)
                            <div class="form-group">
                                <label for="project_external_id" class="control-label thin-weight">@lang('Assign
                                    project')</label>
                                <select name="project_external_id" id="project_external_id" class="form-control">
                                    <option value=""></option>
                                    @foreach ($projects as $projectLoop => $projectLoopK)
                                        <option value="{{ $projectLoop }}"
                                            {{ $projectLoop === optional($project)->external_id ? 'selected' : '' }}>
                                            {{ $projectLoopK }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="deadline" class="control-label thin-weight">@lang('Deadline')</label>
                            <input type="text" id="deadline" name="deadline" data-value="{{ now()->addDays(3) }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="create_at" class="control-label thin-weight">@lang('create_at')</label>
                            <input type="text" id="create_at" name="create_at" data-value="{{ now()->addDays(3) }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="sent_at" class="control-label thin-weight">@lang('sent_at')</label>
                            <input type="text" id="sent_at" name="sent_at" data-value="{{ now()->addDays(3) }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="due_at" class="control-label thin-weight">@lang('due_at')</label>
                            <input type="text" id="due_at" name="due_at" data-value="{{ now()->addDays(3) }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="status_id" class="control-label thin-weight">@lang('Status')</label>
                            <select name="status_id" id="status" class="form-control">
                                @foreach ($statuses as $status => $statusK)
                                    <option value="{{ $status }}">{{ $statusK }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="submit" class="btn btn-md btn-brand movedown" id="createTask"
                                value="{{ __('Create invoice') }}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="alert alert-danger title-alert" style="display: none;">
        {{ __('Title is required') }}
    </div>
    <div class="alert alert-danger description-alert" style="display: none;">
        {{ __('Description is required') }}
    </div>
    <div class="alert alert-danger client-alert" style="display: none;">
        {{ __('Client is required') }}
    </div>
@stop

@push('style')
    <style>
        .picker,
        .picker__holder {
            width: 91%;
        }

    </style>
@endpush
@push('scripts')
    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            $('#client_external_id').selectpicker()

            $('#client_external_id').on('changed.bs.select', function(e, clickedIndex, isSelected, previousValue) {
                var value = $("#client_external_id").val();
                if (value == "new_client") {
                    window.location.href = "/clients/create"
                }
            });

            $('#deadline').pickadate({
                hiddenName: true,
                format: "{{ frontendDate() }}",
                formatSubmit: 'yyyy/mm/dd',
                closeOnClear: false,
            });

            $('#sent_at').pickadate({
                hiddenName: true,
                format: "{{ frontendDate() }}",
                formatSubmit: 'yyyy/mm/dd',
                closeOnClear: false,
            });

            $('#create_at').pickadate({
                hiddenName: true,
                format: "{{ frontendDate() }}",
                formatSubmit: 'yyyy/mm/dd',
                closeOnClear: false,
            });

            $('#due_at').pickadate({
                hiddenName: true,
                format: "{{ frontendDate() }}",
                formatSubmit: 'yyyy/mm/dd',
                closeOnClear: false,
            });

            $('#description').summernote({
                toolbar: [
                    ['fontsize', ['fontsize']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ol', 'ul', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen']]
                ],
                height: 300,
                disableDragAndDrop: true

            });

            $('input[type="submit"]').on("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                if (myDropzone != null && myDropzone.getQueuedFiles().length > 0) {
                    myDropzone.processQueue();

                } else {
                    $.ajax({
                        type: 'post',
                        url: '{{ route('invoices.store') }}',
                        data: $("#createInvoiceForm").serialize(),
                        success: function(response) {
                            if (response.project_external_id) {
                                window.location.href = ("/projects/" + response
                                    .project_external_id)
                            } else {
                                window.location.href = ("/invoices/" + response
                                    .task_external_id)
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                            if (jqXHR.responseJSON.errors.title != undefined) {
                                $('.title-alert').show();
                            } else {
                                $('.title-alert').hide();
                            }
                            if (jqXHR.responseJSON.errors.description != undefined) {
                                $('.description-alert').show();
                            } else {
                                $('.description-alert').hide();
                            }
                            if (jqXHR.responseJSON.errors.client_external_id != undefined) {
                                $('.client-alert').show();
                            } else {
                                $('.client-alert').hide();
                            }

                        }
                    });
                }

            });



        });
    </script>
@endpush
