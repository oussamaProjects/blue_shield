<table class="table table-hover dataTable no-footer" id="reminders-table">
    <h3>{{ __('Reminders') }}</h3>
    <thead>
        <tr>
            <th>{{ __('name') }}</th>
            <th>{{ __('Description') }}</th>
            <th>{{ __('created_at') }}</th>
            <th>{{ __('Note') }}</th>
            <th>{{ __('conform') }}</th>
            <th>{{ __('attachments') }}</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <style type="text/css">
        .table>tbody>tr>td {
            border-top: none !important;
        }

        .table-actions {
            opacity: 0;
        }

        #reminders-table_wrapper {
            margin-bottom: 40px;
        }

        #reminders-table tbody tr:hover .table-actions {
            opacity: 1;
        }

    </style>
    <script>
        $(function() {
            var table = $('#reminders-table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                bFilter: false,
                bPaginate: false,
                ajax: '{!! route('invoice.remindersDataTable', $invoice->external_id) !!}',
                language: {
                    url: '{{ asset('lang/' . (in_array(\Lang::locale(), ['dk', 'en']) ? \Lang::locale() : 'en') . '/datatable.json') }}'
                },
                drawCallback: function() {
                    var length_select = $(".dataTables_length");
                    var select = $(".dataTables_length").find("select");
                    select.addClass("tablet__select");
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'description',
                        name: 'description',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'note',
                        name: 'note',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'conform',
                        name: 'conform',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'attachments',
                        name: 'attachments',
                        orderable: false,
                        searchable: false
                    },

                ]
            });

        });
    </script>
@endpush
