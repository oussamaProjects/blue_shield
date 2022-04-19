<div class="kt-portlet" id="toolsused">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">3- Tools Used</h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="form-group row">
            <div class="col-lg-5 col-md-5 col-sm-5">
                <label class="form-control-label">Contact Clamp</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <select id="eqpn" class="form-control kt_selectpicker" data-live-search="true" name="equip">
                    <option value="">Select Equipment</option>
                    <option data-subtext="" value="ELECTROAIMANT">ELECTROAIMANT</option>
                    <option data-subtext="" value="BABCCO">BABCCO</option>
                    {{-- <option value="neweqp">New</option> --}}
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-5 col-md-5 col-sm-5">
                <label class="form-control-label">UV Light</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <select class="form-control kt_selectpicker" data-live-search="true" name="uv">
                    <option value="" selected="">Select UV Light</option>
                    <option data-subtext="" value="uvl1">UV Lamp 1</option>
                    <option data-subtext="" value="uvl2">UV Lamp 2</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-5 col-md-5 col-sm-5">
                <label class="form-control-label">Current Type *</label>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 form-group-sub">
                <select id="Units" class="form-control kt_selectpicker" required="required" name="currenttype">
                    <option value="">Select Type</option>
                    <option value="AC">Alternative Current </option>
                    <option selected value="DC">Direct Current</option>
                </select>
                <span class="form-text text-muted">Please select an option.</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 form-group-sub">

                <div class="kt-checkbox-list">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                        <input type="radio" class="dissable" value="48" onclick="check();" name="currentt">
                        48V
                        <span></span>
                    </label>
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--warning">
                        <input type="radio" class="dissable" value="110" onclick="check();" name="currentt">
                        110V
                        <span></span>
                    </label>
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--danger">
                        <input type="radio" class="enable" checked="checked" value="220" onclick="check();"
                            name="currentt">
                        220V
                        <span></span>
                    </label>
                </div>
                <span class="form-text text-muted">When Direct Choosed 48V & 110V Disabled</span>

            </div>
        </div>
    </div>
</div>



@push('scripts')
    <script>
        $(document).ready(function(e) {



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



        });
    </script>
@endpush
