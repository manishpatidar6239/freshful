@extends('admin.layout.master')

@section('content')
<div class="dashboard-contents">
  <div class="contents-inner">
    <div class="row">
      <div class="full-wdt">
        <div class="contents-inner" style="width:1140px;">
          <!--/*FILTER*/-->
          <div class="row">
            <div class="col-md-12">
              <div class="section-content">
                <div class="content-head">
                  <h4 class="content-title">Filter</h4>
                </div>
                <!-- /.content-head -->

                <div class="content-details show">
                  <div id="pay-invoice" class="card pay-invoice">
                    <div class="card-body">
                      <form class="form" method="get" action="" enctype="multipart/form-data">
                        <div class="row p-15">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="">City</label>
                              <select id="city_id" name="city" class="form-control" ?="">&gt;
                                <option value="">Select City</option>
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
                                <option value="13">Thanjavur</option>
                                <option value="14">Indore</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="">Hub</label>
                              <select id="hub" name="hub" class="form-control ">
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row p-15">
                          <div class="col-12 mt-25 text-center">
                            <a href="inventory_report_detail.php" class="btn btn-rounded btn-warning btn-outline mr-1">
                              Reset
                            </a>
                            <input type="submit" class="btn btn-rounded btn-primary btn-outline">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/*FILTER*/-->
          <div class="row">
            <div class="col-12">
              <div class="section-content">
                <div class="content-head">
                  <h4 class="content-title">Inventory Report Details</h4>
                  <!-- /.content-title -->
                </div>
                <!-- /.content-head -->

                <div class="content-details show table-responsive">
                  <table id="data-table" class="table data-table table-striped table-bordered" style="width:400px;">
                    <thead>
                      <tr>
                        <th colspan="8"></th>
                        <th class="text-center" colspan="6">Total</th>
                        <!--<th></th>-->
                      </tr>
                      <tr>
                        <th>#</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>UOM</th>
                        <th>Cost</th>
                        <th>MRP</th>
                        <th class="text-center">Total Sold <br> Amt.</th>
                        <th style="background: rgb(183 222 232)" class="text-center">Total stock <br> In</th>
                        <th style="background: rgb(183 222 232)" class="text-center">Total stock <br> Sold</th>
                        <th style="background: rgb(183 222 232)" class="text-center">Total stock<br> Wastage</th>
                        <th style="background: rgb(183 222 232)" class="text-center">Total Transfer <br> In</th>
                        <th style="background: rgb(183 222 232)" class="text-center">Total Transfer <br> Out</th>
                        <!--<th class="text-center">Total stock <br> Bal.</th>-->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection