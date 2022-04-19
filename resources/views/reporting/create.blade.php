@extends('layouts.master')


@section('content')
    <div class="row">

        <form method="post" id="uploadForm" action="controls/upload.php" class="kt-form kt-form--label-right">
            <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                <div class="row">

                    <div class="col-lg-6">
                        @include('reporting.components.asset-targeted')
                        @include('reporting.components.inspected-material')
                        @include('reporting.components.tools-used')
                    </div>

                    <div class="col-lg-6">
                        @include('reporting.components.examinated-conditions')
                        @include('reporting.components.results')
                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection
@push('scripts')
    <script>
        $(document).ready(function(e) {

            $("#uploadForm").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "controls/upload.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $('#thankyouModal').modal('show');
                    },
                    error: function() {}
                });
            }));
           
        });
       

        function aassets(element) {
            var ctp = element.options[element.selectedIndex].text;
            document.getElementById("assetss").value = ctp;

            document.getElementById("assetsss").innerHTML = ctp;
            document.getElementById("assetsssS").innerHTML = ctp;
        }

        function subassets(element) {
            var otp = element.options[element.selectedIndex].text;
            document.getElementById("subassetss").value = otp;
            document.getElementById("subassetsss").innerHTML = otp;

        }

        function subassetsidg(element) {
            var sdtg = document.getElementById("subassetid1g").value;

            document.getElementById("subassetid").value = sdtg;
            document.getElementById("subassetsid1").innerHTML = sdtg;
        }

        function subassetsidm(element) {
            var sdtm = document.getElementById("subassetid1m").value;

            document.getElementById("subassetid").value = sdtm;
            document.getElementById("subassetsid1").innerHTML = sdtm;
        }

        function subassetsidp(element) {
            var sdtp = document.getElementById("subassetid1p").value;

            document.getElementById("subassetid").value = sdtp;
            document.getElementById("subassetsid1").innerHTML = sdtp;
        }
    </script>
@endpush
