@extends('admin.layout.master')

@section('content')
<div class="dashboard-contents">
  <div class="contents-inner">
    <div class="row">
      <div class="full-wdt">
        <div class="col-md-12">
          <div class="section-content">
            <div class="content-head">
              <h4 class="content-title">Change Password</h4><!-- /.content-title -->
            </div><!-- /.content-head -->

            <div class="content-details show">
              <div id="pay-invoice" class="card pay-invoice">
                <div class="card-body">
                  <form class="" id="change_password_form" name="change_password_form" action="ajax/change_password.php" onsubmit="return false;" method="post" novalidate="novalidate">
                    <input type="hidden" name="id" value="1">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" style="width: 100%;margin-left: 0px;">
                          <label class="control-label mb-1">Current Password</label>
                          <input id="current_password" name="current_password" type="password" aria-required="true" value="" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group" style="width: 100%;margin-left: 0px;">
                          <label class="control-label mb-1">New Password</label>
                          <input id="new_password" name="new_password" type="password" aria-required="true" value="" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group" style="margin-left: 0px;">
                      <label class="control-label mb-1">Confirm Password</label>
                      <input id="confirm_password" name="confirm_password" type="password" aria-required="true" value="" class="form-control">
                    </div>

                    <div style="float: left;width: 100%;">
                      <button id="payment-button" type="submit" class="btn">
                        <span id="payment-button-amount">send</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div><!-- /.content-details -->
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection