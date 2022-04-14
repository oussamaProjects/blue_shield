
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">2-
                                        Inspected Material</h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="form-group row">
                                    <div class="col-lg-4 col-md-3 col-sm-3">
                                        <label class="form-control-label">Material</label>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <select id="matn" class="form-control kt_selectpicker" name="material">
                                            <option value="">Select Type</option>

                                            <option value="matn">matn</option>

                                            <option value="newmat">New</option>
                                        </select>
                                        <span class="form-text text-muted">Please select Material.</span>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="form-control-label">Surface
                                            Condition</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox">
                                                <input type="radio" name="pcondition" checked="checked" value="Brossee">
                                                Brossée
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="radio" name="pcondition" value="ST3">
                                                ST3
                                                <span></span>
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Please
                                            Choose One option</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="form-control-label">Part
                                            Temperature</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox">
                                                <input type="radio" name="temper" value="Ambiante"> Ambiante
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="radio" name="temper" value="50">
                                                -50°
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="radio" name="temper" value="30">
                                                +30°
                                                <span></span>
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Please
                                            Choose One option</span>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="form-control-label">Control
                                            Type</label>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group-sub">
                                        <select class="form-control kt_selectpicker" id="controltype" required="required"
                                            name="controltype">
                                            <option value="">Select Type
                                            </option>
                                            <option value="UT">Ultra Sonic
                                                Testing </option>
                                            <option selected value="VT">Visual
                                                Testing</option>
                                            <option value="MT">Magnetoscopie
                                                Testing</option>
                                        </select>
                                        <span class="form-text text-muted">Please
                                            select an option.</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" id="subassetid" name="assetid">
                                    <input type="hidden" id="subassetss" name="subasset">

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label>Picture 1</label>
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle"
                                            id="kt_profile_avatar_1">
                                            <div class="kt-avatar__holder"
                                                style="width: 50px; height: 50px;float: left; position: relative; overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);">
                                            </div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
                                                <i class="fa fa-plus"></i>
                                                <input type='file' accept=".png, .jpg, .jpeg" required="required"
                                                    name="userImage">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
                                                <i class="fa fa-times"></i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label>Picture 2</label>
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle"
                                            id="kt_profile_avatar_1">
                                            <div class="kt-avatar__holder"
                                                style="width: 50px; height: 50px;float: left; position: relative; overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);">
                                            </div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
                                                <i class="fa fa-plus"></i>
                                                <input type='file' accept=".png, .jpg, .jpeg" name="userImage1">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
                                                <i class="fa fa-times"></i>
                                            </span>
                                            <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true"></button>

                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Your Report
                                                                Successfully
                                                                Saved! </p>
                                                            <span>Go To </span>
                                                            <a href="http://mydadje.com/Reporting/EUROGATE/"
                                                                class="btn btn-brand">Dashboard</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label>Picture 3</label>
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle"
                                            id="kt_profile_avatar_1">
                                            <div class="kt-avatar__holder"
                                                style="width: 50px; height: 50px;float: left;position: relative;overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);">
                                            </div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
                                                <i class="fa fa-plus"></i>
                                                <input type='file' accept=".png, .jpg, .jpeg" name="userImage2">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                title="Cancel Picture">
                                                <i class="fa fa-times"></i>
                                            </span>
                                            <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true"></button>

                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Your Report
                                                                Successfully
                                                                Saved! </p>
                                                            <span>Go To </span>
                                                            <a href="http://mydadje.com/Reporting/EUROGATE/"
                                                                class="btn btn-brand">Dashboard</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label>Picture 4</label>
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle"
                                            id="kt_profile_avatar_1">
                                            <div class="kt-avatar__holder"
                                                style="width: 50px; height: 50px;float: left;position: relative; overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);">
                                            </div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
                                                <i class="fa fa-plus"></i>
                                                <input type='file' accept=".png, .jpg, .jpeg" name="userImage3">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                title="Cancel Picture">
                                                <i class="fa fa-times"></i>
                                            </span>
                                            <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true"></button>

                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Your Report Successfully
                                                                Saved! </p>
                                                            <span>Go To </span>
                                                            <a href="http://mydadje.com/Reporting/EUROGATE/"
                                                                class="btn btn-brand">Dashboard</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div
                                    class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg">
                                </div>
                                <div class="row">


                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label>1- Comment </label>
                                        <input class="form-control" type="text" name="comment1">

                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label>2- Comment </label>
                                        <input class="form-control" type="" name="comment2">

                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label>3- Comment </label>
                                        <input class="form-control" type="text" name="comment3">

                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label>4- Comment </label>
                                        <input class="form-control" type="text" name="comment4">

                                    </div>



                                </div>
                            </div>
                        </div>