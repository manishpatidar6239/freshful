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
                  <h4 class="content-title">Production User</h4><!-- /.content-title -->
                  <a href="{{url('admin/add_production_user')}}" class="btn btn-primary btn-sm" style="float:right;">
                    <i class="fa fa-dot-circle-o"></i> Add Production User
                  </a>
                </div><!-- /.content-head -->

                <div class="content-details show table-responsive">
                  <div id="data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Copy</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Excel</span></a></div>

                    <table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 79.6042px;">ID</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 456.25px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 514.438px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 286.354px;">Phone</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 190.833px;">Status</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 433.854px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr role="row" class="odd">
                          <td class="sorting_1">1</td>
                          <td>Production Manager</td>
                          <td>production@gmail.com</td>
                          <td>3785589207</td>
                          <td>
                            <label class="switch">
                              <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="production" checked="" data-id="1" value="active">
                              <span class="slider round"></span>
                            </label>
                          </td>
                          <td>
                            <a href="{{url('admin/view_production_user')}}"><button class="btn btn-sm btn-info">View</button></a>
                            <button type="button" data-table="production" data-id="1" class="btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>


                  </div>
                </div><!-- /.content-details -->
              </div>
            </div>

          </div>
        </div><!-- /.contents-inner -->

      </div>
    </div>

  </div>
</div>

@endsection