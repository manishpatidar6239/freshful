@extends('admin.layout.master')

@section('content')
<div class="dashboard-contents">
  <div class="contents-inner">
    <div class="row">
      <div class="full-wdt">
        <div class="col-md-3">
        </div>
        <div class="col-md-12">
          <div class="section-content">
            <div class="content-head">
              <h4 class="content-title">Add POS User</h4><!-- /.content-title -->

            </div><!-- /.content-head -->

            <div class="content-details show">
              <div id="pay-invoice" class="card pay-invoice">
                <div class="card-body">
                  <form class="" id="view_pos_user_form" name="view_pos_user_form" action="ajax/add_pos_user.php" onsubmit="return false;" method="post" novalidate="novalidate">

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="name" class="form-control-label">Name</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="name" name="name" value="" placeholder="Name" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                      <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="" placeholder="Enter Email" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="phone" class="form-control-label">Phone</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="phone" name="phone" value="" placeholder="Phone" maxlength="10" minlength="10" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="password" class="form-control-label">Password</label></div>
                      <div class="col-12 col-md-9"><input type="password" id="password" name="password" value="" placeholder="password" class="form-control"></div>
                    </div>


                    <div class="row form-group">
                      <div class="col col-md-3"><label class="form-control-label">HUB</label></div>
                      <div class="col-12 col-md-9">
                        <select name="hub_id" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-1-2hha" tabindex="-1" aria-hidden="true">
                          <option value="0" data-select2-id="select2-data-3-ajyk">Select HUB</option>
                          <option value="1">INE</option>
                          <option value="2">NCC</option>
                          <option value="3">AMB</option>
                          <option value="4">MUM</option>
                          <option value="7">KAM</option>
                          <option value="8">NCR</option>
                          <option value="9">TLP</option>
                          <option value="21">SHD</option>
                          <option value="18">BPL</option>
                          <option value="17">GWL</option>
                          <option value="20">JBL</option>
                          <option value="25">AMM</option>
                          <option value="28">BAND</option>
                          <option value="29">HSR</option>
                          <option value="27">VNB</option>
                          <option value="32">VRN</option>
                          <option value="33">Fort</option>
                          <option value="34">TJR</option>
                          <option value="35">WAD</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-glav" style="width: 562.273px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-hub_id-gm-container" aria-controls="select2-hub_id-gm-container"><span class="select2-selection__rendered" id="select2-hub_id-gm-container" role="textbox" aria-readonly="true" title="Select HUB">Select HUB</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Add
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div><!-- /.contents-inner -->



</div><!-- /.dashboard-contents -->

@endsection