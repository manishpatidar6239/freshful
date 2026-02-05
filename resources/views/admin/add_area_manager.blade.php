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
              <h4 class="content-title">Add Area manager</h4><!-- /.content-title -->

            </div><!-- /.content-head -->

            <div class="content-details show">
              <div id="pay-invoice" class="card pay-invoice">
                <div class="card-body">
                  <form class="" id="view_area_manager_form" name="view_area_manager_form" action="ajax/add_area_manager.php" onsubmit="return false;" method="post" novalidate="novalidate">

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="name" class="form-control-label">Name</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="name" name="name" value="" placeholder="Name" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                      <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="" placeholder="Enter Email" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="phone" class=" form-control-label">Phone</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="phone" name="phone" value="" placeholder="Enter Phone" maxlength="10" minlength="10" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="city" class=" form-control-label">City</label></div>
                      <div class="col-12 col-md-9">
                        <select id="city_id" name="city_id" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-city_id" tabindex="-1" aria-hidden="true">
                          <option disabled="" selected="" data-select2-id="select2-data-2-w1f8">Choose City</option>
                          <option value="1">Mumbai</option>
                          <option value="2">New Delhi</option>
                          <option value="3">Ambur</option>
                          <option value="4">Vaniyambadi</option>
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
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-wu5y" style="width: 648.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-city_id-container" aria-controls="select2-city_id-container"><span class="select2-selection__rendered" id="select2-city_id-container" role="textbox" aria-readonly="true" title="Choose City">Choose City</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="hub" class="form-control-label ">Hub Name</label></div>
                      <div class="col-12 col-md-9">
                        <select id="hub" name="hub_id[]" multiple="" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-hub" tabindex="-1" aria-hidden="true">
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-f62a" style="width: 648.5px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                              <ul class="select2-selection__rendered" id="select2-hub-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-hub-container" placeholder="" style="width: 0.75em;"></textarea></span>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="password" class="form-control-label">Password</label></div>
                      <div class="col-12 col-md-9"><input type="password" id="password" name="password" value="" placeholder="password" class="form-control"></div>
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
        <div class="col-md-3">
        </div>
      </div>
    </div>

  </div>
</div>

@endsection