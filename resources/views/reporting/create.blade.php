@extends('layouts.master')

@section('heading')
    {{ __('Create Report') }}
@stop

@section('content')


    <div class="row">

        <form method="post" id="uploadForm" action="controls/upload.php" class="kt-form kt-form--label-right">
            <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                <div class="row">

                    <div class="col-lg-6">
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
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
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

                                            <select class="form-control kt_selectpicker" data-live-search="true"
                                                name="assetid" onChange="subassetsidg(this);" id="subassetid1g">
                                                <option value="" selected="">Select QC ID</option>
                                                <option data-subtext="QC" value="QC">QC</option>

                                            </select>

                                            <span class="form-text text-muted">Select Asset Number.</span>
                                        </div>
                                        <div class="RTG box" style="display:none;">
                                            <label class="form-control-label">AssetID</label>

                                            <select class="form-control kt_selectpicker" data-live-search="true"
                                                name="assetid" onChange="subassetsidm(this);" id="subassetid1m">
                                                <option value="" selected="">Select RTG ID</option>
                                                <option data-subtext="RTG" value="rtg">rtg</option>
                                            </select>

                                            <span class="form-text text-muted">Select Asset Number.</span>
                                        </div>
                                        <div class="YARDGROUND box" style="display:none;">
                                            <label class="form-control-label">AssetID</label>
                                            <select class="form-control kt_selectpicker" data-live-search="true"
                                                name="assetid" onChange="subassetsidp(this);" id="subassetid1p">
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
                                            <select onChange="subassets(this);" name="subasset"
                                                onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                <option value="" selected="">Select RTG ID</option>
                                                <option data-subtext="RTG" value="RTG">RTG</option>
                                                <option data-subtext="RTG" value="none">No Asset!</option>
                                            </select>
                                            <span class="form-text text-muted">Select Sub-Asset.</span>
                                        </div>
                                        <div class="subYARDGROUND box" style="display:none;">
                                            <label class="form-control-label">SubAsset</label>
                                            <select name="subasset" id="choose-subasset"
                                                onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
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

                        <div class="kt-portlet" id="toolsused">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">3- Tools
                                        Used</h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="form-group row">
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                        <label class="form-control-label">Contact
                                            Clamp</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">

                                        <select id="eqpn" class="form-control kt_selectpicker" data-live-search="true"
                                            name="equip">
                                            <option value="">Select Equipment</option>

                                            <option data-subtext="" value="eqpn">eqpn</option>

                                            <option value="neweqp">New</option>
                                        </select>


                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                        <label class="form-control-label">UV
                                            Light</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <select class="form-control kt_selectpicker" data-live-search="true" name="uv">
                                            <option value="" selected="">Select UV Light</option>
                                            <option data-subtext="" value="uv">uv</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                        <label class="form-control-label">Current
                                            Type *</label>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group-sub">
                                        <select id="Units" class="form-control kt_selectpicker" required="required"
                                            name="currenttype">
                                            <option value="">Select Type
                                            </option>
                                            <option value="AC">Alternative
                                                Current </option>
                                            <option selected value="DC">Direct
                                                Current</option>
                                        </select>
                                        <span class="form-text text-muted">Please
                                            select an option.</span>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 form-group-sub">

                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                <input type="radio" class="dissable" value="48" onclick="check();"
                                                    name="currentt">
                                                48V
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox kt-checkbox--solid kt-checkbox--warning">
                                                <input type="radio" class="dissable" value="110" onclick="check();"
                                                    name="currentt">
                                                110V
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox kt-checkbox--solid kt-checkbox--danger">
                                                <input type="radio" class="enable" checked="checked" value="220"
                                                    onclick="check();" name="currentt">
                                                220V
                                                <span></span>
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">When
                                            Direct Choosed 48V & 110V
                                            Disabled</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">5-
                                        Results</h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">

                                <div class="row">
                                    <label class="col-3 col-form-label">Marks /
                                        Repères</label>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <select class="form-control kt_selectpicker" name="" role="combobox" tabindex="0"
                                            aria-label="Drop-down List" id="marksopt">
                                            <option id="emptyValue" role="option" value="Options" style="">Options
                                            </option>
                                            <option role="option" data-user-option="" value="show alpha">Alphabets
                                            </option>
                                            <option role="option" data-user-option="" value="decimals">Dicemal
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-6">


                                        <div class="showalpha" style="display:none;">
                                            <div class="kt-checkbox-list">
                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="marka" value="A" id="watch-me-marka"> A
                                                    <span></span>
                                                </label>
                                                <div id="show-me-marka">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdicta" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdicta" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsa" value=""
                                                            id="watch-me-obsa">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsa">
                                                        <input type="text" class="form-text" name="">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsa" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="markb" value="B" id="watch-me-markb"> B
                                                    <span></span>
                                                </label>
                                                <div id="show-me-markb">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdictb" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdictb" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsb" value=""
                                                            id="watch-me-obsb">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsb">
                                                        <input type="text" class="form-text" name="">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsb" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="markc" value="C" id="watch-me-markc"> C
                                                    <span></span>
                                                </label>
                                                <div id="show-me-markc">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdictc" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdictc" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsc" value=""
                                                            id="watch-me-obsc">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsc">
                                                        <input type="text" class="form-text" name="observationc">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsc" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>





                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="markd" value="D" id="watch-me-markd"> D
                                                    <span></span>
                                                </label>
                                                <div id="show-me-markd">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdictd" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdictd" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsd" value=""
                                                            id="watch-me-obsd">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsd">
                                                        <input type="text" class="form-text" name="observationd">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsd" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="marke" value="E" id="watch-me-marke"> E
                                                    <span></span>
                                                </label>
                                                <div id="show-me-marke">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdicte" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdicte" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obse" value=""
                                                            id="watch-me-obse">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obse">
                                                        <input type="text" class="form-text" name="observatione">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obse" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="markf" value="F" id="watch-me-markf"> F
                                                    <span></span>
                                                </label>
                                                <div id="show-me-markf">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdictf" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdictf" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsf" value=""
                                                            id="watch-me-obsf">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsf">
                                                        <input type="text" class="form-text" name="observationf">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsf" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="markg" value="G" id="watch-me-markg"> G
                                                    <span></span>
                                                </label>
                                                <div id="show-me-markg">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdictg" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdictg" value="NACC" id="">
                                                        <span></span>
                                                    </label>

                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsg" value=""
                                                            id="watch-me-obsg">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsg">
                                                        <input type="text" class="form-text" name="observationg">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsg" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="markh" value="H" id="watch-me-markh"> H
                                                    <span></span>
                                                </label>
                                                <div id="show-me-markh">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdicth" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdicth" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsh" value=""
                                                            id="watch-me-obsh">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsh">
                                                        <input type="text" class="form-text" name="observationh">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsh" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="marki" value="I" id="watch-me-marki"> I
                                                    <span></span>
                                                </label>
                                                <div id="show-me-marki">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdicti" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdicti" value="NACC" id="">
                                                        <span></span>
                                                    </label>

                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsi" value=""
                                                            id="watch-me-obsi">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsi">
                                                        <input type="text" class="form-text" name="observationi">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsi" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="markj" value="J" id="watch-me-markj"> J
                                                    <span></span>
                                                </label>
                                                <div id="show-me-markj">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdictj" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdictj" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsj" value=""
                                                            id="watch-me-obsj">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsj">
                                                        <input type="text" class="form-text" name="observationj">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsj" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="markk" value="K" id="watch-me-markk"> K
                                                    <span></span>
                                                </label>
                                                <div id="show-me-markk">

                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdictk" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdictk" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obsk" value=""
                                                            id="watch-me-obsk">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obsk">
                                                        <input type="text" class="form-text" name="observationk">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obsk" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="showdecim" style="display:none;">
                                            <div class="kt-checkbox-list">
                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark1" value="1" id="watch-me-mark1"> 1
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark1">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict1" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict1" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs1" value=""
                                                            id="watch-me-obs1">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs1">
                                                        <input type="text" class="form-text" name="">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs1" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark2" value="2" id="watch-me-mark2"> 2
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark2">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict2" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict2" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs2" value=""
                                                            id="watch-me-obs2">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs2">
                                                        <input type="text" class="form-text" name="">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs2" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark3" value="3" id="watch-me-mark3"> 3
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark3">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict3" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict3" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs3" value=""
                                                            id="watch-me-obs3">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs3">
                                                        <input type="text" class="form-text" name="observation3">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs3" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>





                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark4" value="4" id="watch-me-mark4"> 4
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark4">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict4" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict4" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs4" value=""
                                                            id="watch-me-obs4">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs4">
                                                        <input type="text" class="form-text" name="observation4">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs4" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark5" value="5" id="watch-me-mark5"> 5
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark5">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict5" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict5" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs5" value=""
                                                            id="watch-me-obs5">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs5">
                                                        <input type="text" class="form-text" name="observation5">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs5" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark6" value="6" id="watch-me-mark6"> 6
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark6">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict6" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict6" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs6" value=""
                                                            id="watch-me-obs6">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs6">
                                                        <input type="text" class="form-text" name="observation6">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs6" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark7" value="7" id="watch-me-mark7"> 7
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark7">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict7" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict7" value="NACC" id="">
                                                        <span></span>
                                                    </label>

                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs7" value=""
                                                            id="watch-me-obs7">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs7">
                                                        <input type="text" class="form-text" name="observation7">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs7" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark8" value="8" id="watch-me-mark8"> 8
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark8">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict8" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict8" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs8" value=""
                                                            id="watch-me-obs8">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs8">
                                                        <input type="text" class="form-text" name="observation8">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs8" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>



                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark9" value="9" id="watch-me-mark9"> 9
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark9">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict9" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict9" value="NACC" id="">
                                                        <span></span>
                                                    </label>

                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs9" value=""
                                                            id="watch-me-obs9">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs9">
                                                        <input type="text" class="form-text" name="observation9">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs9" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark10" value="10" id="watch-me-mark10">
                                                    10
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark10">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict10" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict10" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs10" value=""
                                                            id="watch-me-obs10">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs10">
                                                        <input type="text" class="form-text" name="observation10">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs10" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>

                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
                                                    <input type="checkbox" name="mark11" value="11" id="watch-me-mark11">
                                                    11
                                                    <span></span>
                                                </label>
                                                <div id="show-me-mark11">
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        ACC <input type="radio" name="verdict11" value="ACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                                        NACC <input type="radio" name="verdict11" value="NACC" id="">
                                                        <span></span>
                                                    </label>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        Observation <input type="radio" name="obs11" value=""
                                                            id="watch-me-obs11">
                                                        <span></span>
                                                    </label>
                                                    <div id="show-me-obs11">
                                                        <input type="text" class="form-text" name="observation11">
                                                    </div>
                                                    <br>
                                                    <label class="kt-radio kt-radio--bold kt-radio--default">
                                                        None <input type="radio" name="obs11" value="none" id="">
                                                        <span></span>
                                                    </label>
                                                </div>




                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <br>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="submit" name="saverep" class="btn btn-brand" value="Save">
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
        </form>
    </div>

    <div id="kt_quick_panel" class="kt-offcanvas-panel">
        <div class="kt-offcanvas-panel__nav">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications"
                        role="tab">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_actions" role="tab">Actions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
                </li>
            </ul>
            <button class="kt-offcanvas-panel__close" id="kt_quick_panel_close_btn">
                <i class="flaticon2-delete"></i>
            </button>
        </div>
        <div class="kt-offcanvas-panel__body">
            <div class="tab-content">
                <div class="tab-pane fade show kt-offcanvas-panel__content kt-scroll active"
                    id="kt_quick_panel_tab_notifications" role="tabpanel">
                </div>
            </div>
        </div>
    </div>

@stop


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
