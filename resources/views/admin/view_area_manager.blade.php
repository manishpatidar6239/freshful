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
              <h4 class="content-title">View Area Manager</h4><!-- /.content-title -->

            </div><!-- /.content-head -->

            <div class="content-details show">
              <div id="pay-invoice" class="card pay-invoice">
                <div class="card-body">
                  <form class="" id="view_area_manager_form" name="view_area_manager_form" action="ajax/update_area_manager.php" onsubmit="return false;" method="post" novalidate="novalidate">
                    <input type="hidden" name="id" value="7">

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="name" class="form-control-label">Name</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="name" name="name" value="Suhail Ahmed" placeholder="Name" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                      <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="area@gmail.com" placeholder="Enter Email" class="form-control" readonly=""></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="phone" class=" form-control-label">Phone</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="phone" name="phone" value="8056006631" placeholder="Enter Phone" maxlength="10" minlength="10" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="city" class=" form-control-label">City</label></div>
                      <div class="col-12 col-md-9">
                        <select id="city_id" name="city_id" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-city_id" tabindex="-1" aria-hidden="true">
                          <option disabled="" selected="">Choose City</option>
                          <option value="1">Mumbai</option>
                          <option value="2">New Delhi</option>
                          <option value="3">Ambur</option>
                          <option value="4" selected="" data-select2-id="select2-data-2-mefm">Vaniyambadi</option>
                          <option value="5">Bengaluru</option>
                          <option value="6">Ambaji</option>
                          <option value="7">Chandigarh</option>
                          <option value="8">Vadodara</option>
                          <option value="9">Vellore</option>
                          <option value="10">Bhopal</option>
                          <option value="11">Mysore</option>
                          <option value="12">Jolarpet</option>
                          <option value="13">Thanjavur</option>
                          <option value="14">Indore</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-wbki" style="width: 648.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-city_id-container" aria-controls="select2-city_id-container"><span class="select2-selection__rendered" id="select2-city_id-container" role="textbox" aria-readonly="true" title="Vaniyambadi">Vaniyambadi</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="hub" class="form-control-label ">Hub Name</label></div>
                      <div class="col-12 col-md-9">
                        <select id="hub" name="hub_id[]" multiple="" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-hub" tabindex="-1" aria-hidden="true">
                          <option value="27" selected="" data-select2-id="select2-data-4-3us7">VNB</option>
                          <option value="33" selected="" data-select2-id="select2-data-5-ue2s">Fort</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-1672" style="width: 648.5px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                              <ul class="select2-selection__rendered" id="select2-hub-container">
                                <li class="select2-selection__choice" title="VNB" data-select2-id="select2-data-6-tiwt"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-hub-container-choice-mxqp-27"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-hub-container-choice-mxqp-27">VNB</span></li>
                                <li class="select2-selection__choice" title="Fort" data-select2-id="select2-data-7-6w5m"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-hub-container-choice-pzx7-33"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-hub-container-choice-pzx7-33">Fort</span></li>
                              </ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-hub-container" placeholder="" style="width: 0.75em;"></textarea></span>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="password" class="form-control-label">Password</label></div>
                      <div class="col-12 col-md-9"><input type="password" id="password" name="password" value="12345" placeholder="password" class="form-control"></div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                      </button>
                      <!--<button type="reset" id="delete_area_manager" class="btn btn-danger btn-sm">
						  <i class="fa fa-ban"></i> Delete
						</button>-->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
        </div>
      </div>
    </div>

  </div>
</div>

@endsection