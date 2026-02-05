@extends('admin.layout.master')

@section('content')
<div class="dashboard-contents">
  <div class="contents-inner">
    <div class="row">
      <div class="full-wdt">
        <div class="col-md-12">
          <div class="section-content">
            <div class="content-head">
              <h4 class="content-title">Edit Profile</h4><!-- /.content-title -->
            </div><!-- /.content-head -->

            <div class="content-details show">
              <div id="pay-invoice" class="card pay-invoice">
                <div class="card-body">
                  <form class="" id="edit_profile_form" name="edit_profile_form" action="ajax/edit_profile.php" onsubmit="return false;" method="post" enctype="multipart/form-data" novalidate="novalidate">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="table" value="admins">
                    <div class="form-group">
                      <label class="control-label mb-1">Name</label>
                      <input id="name" name="name" type="text" aria-required="true" value="Admin" placeholder="Enter name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-1">Email</label>
                      <input id="email" name="email" type="text" aria-required="true" value="admin@gmail.com" placeholder="Enter email" class="form-control" readonly="">
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-1">Address</label>
                      <input id="address" name="address" type="text" aria-required="true" value="Indira Nagar, Bangalore" placeholder="Enter Address" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-1">Image</label>
                      <input id="profile_image" name="image" type="file" aria-required="true" class="form-control">
                    </div>
                    <div>
                      <button id="payment-button" type="submit" class="btn btn-primary">
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