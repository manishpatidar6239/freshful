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
                  <h4 class="content-title">Account Managers</h4><!-- /.content-title -->
                  <a href="{{url('admin/add_account_manager')}}" class="btn btn-primary btn-sm" style="float:right;">
                    <i class="fa fa-dot-circle-o"></i> Add Account Manager
                  </a>
                </div><!-- /.content-head -->

                <div class="content-details show">
                  <div class="table-responsive">
                    <div id="data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                      <div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Copy</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Excel</span></a></div>
                      <table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 30.0417px;">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 86.3542px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 208.417px;">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 129.635px;">Phone</th>
                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 83.625px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 196.594px;">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr role="row" class="odd">
                            <td class="sorting_1">3</td>
                            <td>account</td>
                            <td>account@gmail.com</td>
                            <td>8124200242</td>
                            <td>
                              <label class="switch">
                                <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="account_managers" checked="" data-id="3" value="active">
                                <span class="slider round"></span>
                              </label>
                            </td>
                            <td>
                              <a href="{{url('admin/view_account_manager')}}"><button class="btn btn-sm btn-info">View</button></a>
                              <button type="button" data-table="account_managers" data-id="3" class="btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> Delete</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
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