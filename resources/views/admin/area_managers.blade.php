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
                  <h4 class="content-title">Area Managers</h4><!-- /.content-title -->
                  <a href="{{url('admin/add_area_manager')}}" class="btn btn-primary btn-sm" style="float:right;">
                    <i class="fa fa-dot-circle-o"></i> Add Area Manager
                  </a>
                </div><!-- /.content-head -->

                <div class="content-details show table-responsive">
                  <div id="data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Copy</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Excel</span></a></div>

                    <table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 28.7917px;">ID</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 140.562px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 168.385px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 125.521px;">Phone</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 80.8333px;">Status</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 190.573px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr role="row" class="odd">
                          <td class="sorting_1">7</td>
                          <td>Suhail Ahmed</td>
                          <td>area@gmail.com</td>
                          <td>8056006631</td>
                          <td>
                            <label class="switch">
                              <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="area_managers" checked="" data-id="7" value="active">
                              <span class="slider round"></span>
                            </label>
                          </td>
                          <td>
                            <a href="{{url('admin/view_area_manager')}}"><button class="btn btn-sm btn-info">View</button></a>
                            <button type="button" data-table="area_managers" data-id="7" class="btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> Delete</button>
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