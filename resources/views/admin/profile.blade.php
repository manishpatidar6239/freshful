@extends('admin.layout.master')

@section('content')
<div class="dashboard-contents">
  <div class="contents-inner">
    <div class="row">
      <div class="full-wdt">

        <div class="contents-inner">
          <div class="row">
            <div class="col-12">
              <div class="section-content">
                <div class="">
                  <div class="col-md-12">
                    <div class="section-content">
                      <div class="card pb-3">
                        <div class="card-header content-head mb-3">
                          <strong class="card-title mb-3">Profile</strong>
                        </div>
                        <div class="card-body">
                          <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" src="images/avatar/" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1">Admin</h5>
                            <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Indira Nagar, Bangalore</div>
                          </div>
                          <hr>
                          <div class="card-text text-sm-center">
                            <a href="{{url('admin/edit_profile')}}"><button class="btn app-btn btn-primary" style="color: #fff;"><i class="fa fa-edit"></i> Edit Profile</button></a>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.section-content -->
                  </div>
                </div>

              </div>
            </div><!-- /.contents-inner -->

          </div>

        </div>
      </div>
    </div>

  </div>
</div>

@endsection