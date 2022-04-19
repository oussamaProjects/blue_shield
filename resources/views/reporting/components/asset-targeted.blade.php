<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">1- Asset Targeted</h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="form-group form-group-last kt-hide">
            <div class="alert alert-danger" role="alert" id="kt_form_1_msg">
                <div class="alert-icon"><i class="flaticon-warning"></i>
                </div>
                <div class="alert-text">
                    Ops! You Should Fill The Required
                    Fields.
                </div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="form-group row">

            <div class="col-lg-4 col-md-4 col-sm-4">
                <label class="form-control-label">Subject</label>
                <select onChange="aassets(this);" id="choose-asset" name="asset" class="form-control kt_selectpicker">
                    <option value="choose">Choose Asset</option>
                    <option value="QC">QC</option>
                    <option value="RTG">RTG</option>
                </select>
                <span class="form-text text-muted">Select Asset Category.</span>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">

                <div class="QC box" style="display:none;">
                    <label class="form-control-label">AssetID</label>
                    <select class="form-control kt_selectpicker" data-live-search="true" name="assetid"
                        onChange="subassetsidg(this);" id="subassetid1g">
                        <option value="" selected="">Select QC ID</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                        <option data-subtext="QC" value="QC">QC</option>
                    </select>
                    <span class="form-text text-muted">Select Asset Number.</span>
                </div>

                <div class="RTG box" style="display:none;">
                    <label class="form-control-label">AssetID</label>
                    <select class="form-control kt_selectpicker" data-live-search="true" name="assetid"
                        onChange="subassetsidm(this);" id="subassetid1m">
                        <option value="" selected="">Select RTG ID</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                        <option data-subtext="RTG" value="rtg">rtg</option>
                    </select>
                    <span class="form-text text-muted">Select Asset Number.</span>
                </div>

                <div class="YARDGROUND box" style="display:none;">
                    <label class="form-control-label">AssetID</label>
                    <select class="form-control kt_selectpicker" data-live-search="true" name="assetid"
                        onChange="subassetsidp(this);" id="subassetid1p">
                        <option value="" selected="">Select YARD Or GROUND Aera</option>
                        <option data-subtext="YARDGROUND" value="YARD">YARD</option>
                    </select>
                    <span class="form-text text-muted">Select Asset Number.</span>
                </div>

            </div>

            <div class="col-lg-4 col-md-3 col-sm-3">

                <div class="subQC box" style="display:none;">
                    <label class="form-control-label">SubAsset</label>
                    <select onChange="subassets(this);" onselect="userTyped('skipID', this)"
                        class="form-control kt_selectpicker">
                        <option value="" selected="">Select QC ID</option>
                        <option data-subtext="QC" value="QC">QC</option>
                    </select>
                    <span class="form-text text-muted">Select Sub-Asset.</span>
                </div>

                <div class="subRTG box" style="display:none;">
                    <label class="form-control-label">SubAsset</label>
                    <select onChange="subassets(this);" name="subasset" onselect="userTyped('skipID', this)"
                        class="form-control kt_selectpicker">
                        <option value="" selected="">Select RTG ID</option>
                        <option data-subtext="RTG" value="RTG"> trolley </option>
                        <option data-subtext="RTG" value="RTG"> GIRDER</option>
                        <option data-subtext="RTG" value="RTG"> GIRDER : Welds on the side plates </option>
                        <option data-subtext="RTG" value="RTG"> GIRDER :Welds of the rail and rail and Top </option>
                        <option data-subtext="RTG" value="RTG"> GIRDER :Assembling welds on the frame </option>
                        <option data-subtext="RTG" value="RTG"> COLUMN </option>
                        <option data-subtext="RTG" value="RTG"> COLUMN: End Beams </option>
                        <option data-subtext="RTG" value="RTG"> Sill Beam </option>
                        <option data-subtext="RTG" value="RTG"> Sill Beam: Welding of wheel forks </option>
                        <option data-subtext="RTG" value="RTG"> Drum </option>
                        <option data-subtext="RTG" value="RTG"> Drum :Shaft and Flange </option>
                        <option data-subtext="RTG" value="RTG"> Rope adjustment screws </option>

                    </select>
                    <span class="form-text text-muted">Select Sub-Asset.</span>
                </div>

                <div class="subYARDGROUND box" style="display:none;">
                    <label class="form-control-label">SubAsset</label>
                    <select name="subasset" id="choose-subasset" onselect="userTyped('skipID', this)"
                        class="form-control kt_selectpicker">
                        {{-- <select onChange="subassets(this);" name="subasset" id="choose-subasset"  onselect="userTyped('skipID', this)" class="form-control kt_selectpicker"> --}}
                        <option value="">Select Sub-Aera</option>
                        <option data-subtext="YARDGROUND" value="Ground">Ground</option>
                    </select>
                    <span class="form-text text-muted">Select Sub-Asset.</span>
                </div>


            </div>



        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function(e) {
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
