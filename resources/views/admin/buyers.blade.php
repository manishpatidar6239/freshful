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
                <div class="content-head">
                  <h4 class="content-title">Buyers</h4><!-- /.content-title -->
                </div><!-- /.content-head -->

                <div class="content-details show">
                  <table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Orders</th>
                        <th>Wallet</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row">
                        <td>7</td>
                        <td>Suhail Ahmed</td>
                        <td>anaikar786@gmail.com</td>
                        <td><a href="{{url('admin/order')}}">Check order</a></td>
                        <td>0</td>
                        <td>
                          <!-- <label class="badge badge-success">active</label> -->
                          <label class="switch">
                            <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="buyers" checked="" data-id="7" value="active">
                            <span class="slider round"></span>
                          </label>
                        </td>
                        <td>
                          <a href="{{url('admin/view_buyer')}}"><button class="btn btn-outline-primary">View</button></a>
                        </td>
                      </tr>
                      <tr role="row">
                        <td>225</td>
                        <td>New User 2</td>
                        <td>abc123@gmail.com</td>
                        <td><a href="{{url('admin/order')}}">Check order</a></td>
                        <td>500</td>
                        <td>
                          <!--<label class="badge badge-success">active</label>-->
                          <label class="switch">
                            <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="buyers" checked="" data-id="225" value="active">
                            <span class="slider round"></span>
                          </label>
                        </td>
                        <td>
                          <a href="{{url('admin/view_buyer')}}"><button class="btn btn-outline-primary">View</button></a>
                        </td>
                      </tr>
                      <tr role="row">
                        <td>186</td>
                        <td>akash</td>
                        <td>akash@gmail.com</td>
                        <td><a href="{{url('admin/order')}}">Check order</a></td>
                        <td>0</td>
                        <td>
                          <!--<label class="badge badge-success">active</label>-->
                          <label class="switch">
                            <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="buyers" checked="" data-id="186" value="active">
                            <span class="slider round"></span>
                          </label>
                        </td>
                        <td>
                          <a href="{{url('admin/view_buyer')}}"><button class="btn btn-outline-primary">View</button></a>
                        </td>
                      </tr>
                      <tr role="row">
                        <td>187</td>
                        <td>akash</td>
                        <td>akash@gmail.com</td>
                        <td><a href="{{url('admin/order')}}">Check order</a></td>
                        <td>0</td>
                        <td>
                          <!--<label class="badge badge-success">active</label>-->
                          <label class="switch">
                            <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="buyers" checked="" data-id="187" value="active">
                            <span class="slider round"></span>
                          </label>
                        </td>
                        <td>
                          <a href="{{url('admin/view_buyer')}}"><button class="btn btn-outline-primary">View</button></a>
                        </td>
                      </tr>
                      <tr role="row">
                        <td>148</td>
                        <td>io</td>
                        <td>u@gmail.com</td>
                        <td><a href="{{url('admin/order')}}">Check order</a></td>
                        <td>0</td>
                        <td>
                          <!--<label class="badge badge-success">active</label>-->
                          <label class="switch">
                            <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="buyers" checked="" data-id="148" value="active">
                            <span class="slider round"></span>
                          </label>
                        </td>
                        <td>
                          <a href="{{url('admin/view_buyer')}}"><button class="btn btn-outline-primary">View</button></a>
                        </td>
                      </tr>


                    </tbody>
                  </table>
                </div><!-- /.content-details -->
              </div>
            </div>

          </div>
        </div><!-- /.contents-inner -->

      </div>

    </div>
  </div>


</div><!-- /.dashboard-contents -->


@endsection