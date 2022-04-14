<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">1- Asset
                Targeted</h3>
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
                <select id="choose-asset" name="asset" class="form-control kt_selectpicker">
                    {{-- <select onChange="aassets(this);" id="choose-asset" name="asset" class="form-control kt_selectpicker"> --}}
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

                    </select>

                    <span class="form-text text-muted">Select Asset Number.</span>
                </div>
                <div class="RTG box" style="display:none;">
                    <label class="form-control-label">AssetID</label>

                    <select class="form-control kt_selectpicker" data-live-search="true" name="assetid"
                        onChange="subassetsidm(this);" id="subassetid1m">
                        <option value="" selected="">Select RTG ID</option>
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
                        <option data-subtext="RTG" value="RTG">RTG</option>
                        <option data-subtext="RTG" value="none">No Asset!</option>
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
