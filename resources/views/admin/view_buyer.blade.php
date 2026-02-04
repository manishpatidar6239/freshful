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
              <h4 class="content-title">View Buyer</h4><!-- /.content-title -->

            </div><!-- /.content-head -->

            <div class="content-details show">
              <div id="pay-invoice" class="card pay-invoice">
                <div class="card-body">
                  <form class="" id="view_buyer_form" name="view_buyer_form" action="ajax/update_buyer.php" onsubmit="return false;" method="post" novalidate="novalidate">
                    <input type="hidden" name="id" value="7">

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="name" class="form-control-label"> Name</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="name" name="name" value="Suhail Ahmed" placeholder=" Name" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                      <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="anaikar786@gmail.com" placeholder="Enter Email" class="form-control" readonly=""></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label class="form-control-label">Status</label></div>
                      <div class="col-12 col-md-9">
                        <select name="status" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-1-zz91" tabindex="-1" aria-hidden="true">
                          <option value="active" selected="" data-select2-id="select2-data-3-impk">Active</option>
                          <option value="disabled">Disabled</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-ergh" style="width: 562.273px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-c2-container" aria-controls="select2-status-c2-container"><span class="select2-selection__rendered" id="select2-status-c2-container" role="textbox" aria-readonly="true" title="Active">Active</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                      </button>
                      <button type="reset" id="delete_buyer" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Delete
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
  </div><!-- /.contents-inner -->



</div><!-- /.dashboard-contents -->

@endsection