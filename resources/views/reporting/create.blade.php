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


            $('#marksopt').change(function() {
                console.log($('option').val())
                if ($(this).val() == 'show alpha') {
                    $('.showalpha').show();
                    $('.showdecim').hide();
                } else {
                    $('.showalpha').hide();
                    $('.showdecim').show();
                }
                if ($(this).val() == 'decimals') {
                    $('.showalpha').hide();
                    $('.showdecim').show();
                } else {
                    $('.showalpha').show();
                    $('.showdecim').hide();
                }
            });

            $('#controltype').change(function() {
                console.log($('option').val())

                if ($(this).val() == 'MT') {
                    $('#toolsused').show();
                    $('#examcond').show();
                } else {
                    $('#toolsused').hide();
                    $('#examcond').hide();
                }
            });



            $(".dissable").attr("disabled", "disabled");

            $("#Units").on("change", function() {
                if ($(this).val() !== "AC") {
                    $(".dissable").attr("disabled", "disabled");
                } else {
                    $(".dissable").removeAttr("disabled");
                }
            });

            $("#eqpn").on("change", function() {
                $modal = $('#eqpmodal');
                if ($(this).val() === 'neweqp') {
                    $modal.modal('show');
                }
            });

            $("#type").on("change", function() {
                $modal = $('#witmodal');
                if ($(this).val() === 'newwt') {
                    $modal.modal('show');
                }
            });

            $("#matn").on("change", function() {
                $modal = $('#matmodal');
                if ($(this).val() === 'newmat') {
                    $modal.modal('show');
                }
            });

            $("#revn").on("change", function() {
                $modal = $('#revmodal');
                if ($(this).val() === 'newrev') {
                    $modal.modal('show');
                }
            });


            $('#memberModal').modal('show');

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

            $('input[name="obsa"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsa') {
                    $('#show-me-obsa').show();
                } else {
                    $('#show-me-obsa').hide();
                }
            });

            $('input[name="obsb"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsb') {
                    $('#show-me-obsb').show();
                } else {
                    $('#show-me-obsb').hide();
                }
            });

            $('input[name="obsc"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsc') {
                    $('#show-me-obsc').show();
                } else {
                    $('#show-me-obsc').hide();
                }
            });

            $('input[name="obsd"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsd') {
                    $('#show-me-obsd').show();
                } else {
                    $('#show-me-obsd').hide();
                }
            });

            $('input[name="obse"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obse') {
                    $('#show-me-obse').show();
                } else {
                    $('#show-me-obse').hide();
                }
            });

            $('input[name="obsf"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsf') {
                    $('#show-me-obsf').show();
                } else {
                    $('#show-me-obsf').hide();
                }
            });

            $('input[name="obsg"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsg') {
                    $('#show-me-obsg').show();
                } else {
                    $('#show-me-obsg').hide();
                }
            });

            $('input[name="obsh"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsh') {
                    $('#show-me-obsh').show();
                } else {
                    $('#show-me-obsh').hide();
                }
            });

            $('input[name="obsi"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsi') {
                    $('#show-me-obsi').show();
                } else {
                    $('#show-me-obsi').hide();
                }
            });

            $('input[name="obsj"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsj') {
                    $('#show-me-obsj').show();
                } else {
                    $('#show-me-obsj').hide();
                }
            });

            $('input[name="obsk"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obsk') {
                    $('#show-me-obsk').show();
                } else {
                    $('#show-me-obsk').hide();
                }
            });

            $('input[name="obs1"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs1') {
                    $('#show-me-obs1').show();
                } else {
                    $('#show-me-obs1').hide();
                }
            });

            $('input[name="obs2"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs2') {
                    $('#show-me-obs2').show();
                } else {
                    $('#show-me-obs2').hide();
                }
            });

            $('input[name="obs3"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs3') {
                    $('#show-me-obs3').show();
                } else {
                    $('#show-me-obs3').hide();
                }
            });

            $('input[name="obs4"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs4') {
                    $('#show-me-obs4').show();
                } else {
                    $('#show-me-obs4').hide();
                }
            });

            $('input[name="obs5"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs5') {
                    $('#show-me-obs5').show();
                } else {
                    $('#show-me-obs5').hide();
                }
            });

            $('input[name="obs6"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs6') {
                    $('#show-me-obs6').show();
                } else {
                    $('#show-me-obs6').hide();
                }
            });

            $('input[name="obs7"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs7') {
                    $('#show-me-obs7').show();
                } else {
                    $('#show-me-obs7').hide();
                }
            });

            $('input[name="obs8"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs8') {
                    $('#show-me-obs8').show();
                } else {
                    $('#show-me-obs8').hide();
                }
            });

            $('input[name="obs9"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs9') {
                    $('#show-me-obs9').show();
                } else {
                    $('#show-me-obs9').hide();
                }
            });
            $('input[name="obs10"]').click(function() {
                if ($(this).attr('id') == 'watch-me-obs10') {
                    $('#show-me-obs10').show();
                } else {
                    $('#show-me-obs10').hide();
                }
            });

            $('input[name="mark1"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark1') {
                    $('#show-me-mark1').show();
                } else {
                    $('#show-me-mark1').hide();
                }
            });

            $('input[name="mark2"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark2') {
                    $('#show-me-mark2').show();
                } else {
                    $('#show-me-mark2').hide();
                }
            });
            $('input[name="mark3"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark3') {
                    $('#show-me-mark3').show();
                } else {
                    $('#show-me-mark3').hide();
                }
            });
            $('input[name="mark4"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark4') {
                    $('#show-me-mark4').show();
                } else {
                    $('#show-me-mark4').hide();
                }
            });
            $('input[name="mark5"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark5') {
                    $('#show-me-mark5').show();
                } else {
                    $('#show-me-mark5').hide();
                }
            });
            $('input[name="mark6"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark6') {
                    $('#show-me-mark6').show();
                } else {
                    $('#show-me-mark6').hide();
                }
            });
            $('input[name="mark7"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark7') {
                    $('#show-me-mark7').show();
                } else {
                    $('#show-me-mark7').hide();
                }
            });
            $('input[name="mark8"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark8') {
                    $('#show-me-mark8').show();
                } else {
                    $('#show-me-mark8').hide();
                }
            });
            $('input[name="mark9"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark9') {
                    $('#show-me-mark9').show();
                } else {
                    $('#show-me-mark9').hide();
                }
            });
            $('input[name="mark10"]').click(function() {
                if ($(this).attr('id') == 'watch-me-mark10') {
                    $('#show-me-mark10').show();
                } else {
                    $('#show-me-mark10').hide();
                }
            });

            $("#watch-me-mark1").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark1").show();
                } else {
                    $("#show-me-mark1").hide();
                }
            });

            $("#watch-me-mark2").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark2").show();
                } else {
                    $("#show-me-mark2").hide();
                }
            });

            $("#watch-me-mark3").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark3").show();
                } else {
                    $("#show-me-mark3").hide();
                }
            });

            $("#watch-me-mark4").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark4").show();
                } else {
                    $("#show-me-mark4").hide();
                }
            });

            $("#watch-me-mark5").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark5").show();
                } else {
                    $("#show-me-mark5").hide();
                }
            });

            $("#watch-me-mark6").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark6").show();
                } else {
                    $("#show-me-mark6").hide();
                }
            });

            $("#watch-me-mark7").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark7").show();
                } else {
                    $("#show-me-mark7").hide();
                }
            });

            $("#watch-me-mark8").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark8").show();
                } else {
                    $("#show-me-mark8").hide();
                }
            });

            $("#watch-me-mark9").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark9").show();
                } else {
                    $("#show-me-mark9").hide();
                }
            });

            $("#watch-me-mark10").click(function() {
                if ($(this).is(":checked")) {
                    $("#show-me-mark10").show();
                } else {
                    $("#show-me-mark10").hide();
                }
            });

            $("select#choose-asset").change(function() {
                $("select#choose-asset option:selected").each(function() {

                    console.log($(this).attr("value"));
                    if ($(this).attr("value") == "QC") {
                        $(".box").hide();
                        $(".QC").show();
                        $(".subQC").show();
                    }
                    if ($(this).attr("value") == "RTG") {
                        $(".box").hide();
                        $(".RTG").show();
                        $(".subRTG").show();
                    }
                    if ($(this).attr("value") == "YARDGROUND") {
                        $(".box").hide();
                        $(".YARDGROUND").show();
                        $(".subYARDGROUND").show();
                    }

                    if ($(this).attr("value") == "choose") {
                        $(".box").hide();
                        $(".choose").show();
                    }


                });
            }).change();
        });

        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "metal": "#c4c5d6",
                    "light": "#ffffff",
                    "accent": "#00c5dc",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995",
                    "focus": "#9816f4"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };

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
