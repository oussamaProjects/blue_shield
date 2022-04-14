<div class="kt-portlet" id="examcond">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">4-
                Examinated Conditions</h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="form-group row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <label class="form-control-label">Witness
                    Type *</label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">

                <select id='type' class="form-control kt_selectpicker" data-live-search="true"
                    name="witnss">
                    <option value="">Select</option>

                    <option data-subtext="" value="witnss">witnss</option>

                    <option value="newwt">New</option>
                </select>

            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label class="form-control-label">MFV
                </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="kt-checkbox-list">
                    <label class="kt-checkbox">
                        <input type="radio" checked="checked" name="mfv" value="2400"> 2400 A/m
                        <span></span>
                    </label>
                    <label class="kt-checkbox">
                        <input type="radio" name="mfv" value="2000"> 2000 A/m
                        <span></span>
                    </label>
                    <label class="kt-checkbox">
                        <input type="radio" name="mfv" value="1800"> 1800 A/m
                        <span></span>
                    </label>
                </div>
                <span class="form-text text-muted">Please
                    Choose One option</span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-4 col-md-4 col-sm-3">
                <label class="form-control-label">Prod
                    Spacing</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="kt-checkbox-list">
                    <label class="kt-checkbox">
                        <input type="radio" value="100" name="prdspace"> 100 mm
                        <span></span>
                    </label>
                    <label class="kt-checkbox">
                        <input type="radio" value="150" checked="checked" name="prdspace">
                        150 mm
                        <span></span>
                    </label>
                    <label class="kt-checkbox">
                        <input type="radio" value="200" name="prdspace"> 200 mm
                        <span></span>
                    </label>
                </div>
                <span class="form-text text-muted">Please
                    Choose One option</span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="kt-checkbox-list">
                    <label class="kt-checkbox">
                        <input type="radio" value="Yes" checked="checked" name="demagnet">
                        Demagnetizing
                        <span></span>
                    </label>
                    <label class="kt-checkbox">
                        <input type="radio" value="No" name="demagnet"> No
                        <span></span>
                    </label>
                </div>
                <span class="form-text text-muted">Please
                    Choose One option</span>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-lg-4 col-md-4 col-sm-3">
                <label class="form-control-label">Magnetization
                    Delay</label>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row align-items-center">
                    <div class="col-4">
                        <input type="text" class="form-control" required="required"
                            id="kt_nouislider_1_input" name="magnitdelay" placeholder="Quantity">
                    </div>
                    <div class="col-8">
                        <div id="kt_nouislider_1" class="nouislider-drag-danger">
                        </div>
                    </div>
                </div>
                <span class="form-text text-muted">Slide
                    the Delay (Sec)</span>
            </div>
        </div>

        <div class="kt-separator kt-separator--border-dashed kt-separator--space-xl">
        </div>


        <div class="form-group row">

            <div class="col-lg-4 col-md-3 col-sm-3">
                <label class="form-control-label">Revealer</label>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <select id="revn" class="form-control kt_selectpicker" name="revealer">
                    <option value="">Select Type</option>

                    <option value="revealer">revealer</option>

                    <option value="newrev">New</option>
                </select>
                <span class="form-text text-muted">Please select Revealer.</span>
            </div>


        </div>
        <div class="form-group row">
            <div class="col-lg-4 col-md-4 col-sm-3">
                <label class="form-control-label">Light
                    Used </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="kt-radio-inline">
                    <label class="kt-radio">
                        <input type="radio" value="Natural" checked name="lightu"> Natural
                        Light
                        <span></span>
                    </label>
                    <label class="kt-radio">
                        <input type="radio" value="Black" name="lightu">
                        Black Light
                        <span></span>
                    </label>
                </div>
                <span class="form-text text-muted">Please
                    Choose Light Type</span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-4 col-md-4 col-sm-3">
                <label class="form-control-label">Artificial
                    Light</label>
            </div>
            <div class="col-lg-4 col-md-9 col-sm-12">
                <input id="kt_touchspin_4" type="text" required="required"
                    class="form-control bootstrap-touchspin-vertical-btn" value="300" name="lightt"
                    placeholder="40" type="text">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-4 col-md-4 col-sm-3">
                <label class="form-control-label">Brightness</label>
            </div>
            <div class="col-lg-4 col-md-9 col-sm-12">
                <input id="kt_touchspin_4" type="text" required="required"
                    class="form-control bootstrap-touchspin-vertical-btn" value="700"
                    name="brightt" placeholder="40" type="text">
            </div>
        </div>
    </div>

</div>