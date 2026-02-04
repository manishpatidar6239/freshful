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
              <h4 class="content-title">View Marketing Manager</h4><!-- /.content-title -->

            </div><!-- /.content-head -->

            <div class="content-details show">
              <div id="pay-invoice" class="card pay-invoice">
                <div class="card-body">
                  <form class="" id="view_marketing_manager_form" name="view_marketing_manager_form" action="ajax/update_marketing_manager.php" onsubmit="return false;" method="post" novalidate="novalidate">
                    <input type="hidden" name="id" value="1">

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="name" class="form-control-label">Name</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="name" name="name" value="Marketing Manager" placeholder="Name" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                      <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="lokesh.laabhaa@gmail.com" placeholder="Enter Email" class="form-control" readonly=""></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="phone" class=" form-control-label">Phone</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="phone" name="phone" value="7776666666" placeholder="Enter Phone" maxlength="10" minlength="10" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="password" class="form-control-label">Password</label></div>
                      <div class="col-12 col-md-9"><input type="password" id="password" name="password" value="123456" placeholder="password" class="form-control"></div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                      </button>
                      <!--<button type="reset" id="delete_marketing_manager" class="btn btn-danger btn-sm">
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
  </div><!-- /.contents-inner -->



</div><!-- /.dashboard-contents -->

@endsection