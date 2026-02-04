@extends('admin.layout.master')

@section('content')
<div class="dashboard-contents">
  <div class="contents-inner">
    <div class="row">
      <div class="full-wdt">

        <div class="contents-inner">
        
              <div class="section-content">
                <div class="content-head">
                  <h4 class="content-title">POS Users</h4><!-- /.content-title -->
                  <a href="{{url('admin/add_pos_user')}}" class="btn btn-primary btn-sm" style="float:right;">
                    <i class="fa fa-dot-circle-o"></i> Add POS User
                  </a>
                </div><!-- /.content-head -->

                <div class="content-details show table-responsive">
                  <div id="data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Copy</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Excel</span></a></div>

                    <table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 18.7027px;">ID</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 112.206px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 152.405px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 88.6553px;">Phone</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="HUB: activate to sort column ascending" style="width: 43.3712px;">HUB</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 55.8239px;">Status</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 136.127px;">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr role="row" class="odd">
                          <td class="sorting_1">9</td>
                          <td>SUHAIL AHMED</td>
                          <td>vnb@gmail.com</td>
                          <td>8056006631</td>
                          <td><a href="{{url('admin/hub')}}">VNB</a></td>
                          <td>
                            <!--<label class="badge badge-success">active</label>-->
                            <label class="switch">
                              <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="pos_user" checked="" data-id="9" value="active">
                              <span class="slider round"></span>
                            </label>
                          </td>
                          <td>
                            <a href="{{url('admin/view_pos_user')}}"><button class="btn btn-sm btn-info">View</button></a>
                            <button type="button" data-table="pos_user" data-id="9" class="btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> Delete</button>
                          </td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">11</td>
                          <td>AHMED</td>
                          <td>hsr@gmail.com</td>
                          <td></td>
                          <td><a href="{{url('admin/hub')}}">HSR</a></td>
                          <td>
                            <!--<label class="badge badge-success">active</label>-->
                            <label class="switch">
                              <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="pos_user" checked="" data-id="11" value="active">
                              <span class="slider round"></span>
                            </label>
                          </td>
                          <td>
                            <a href="{{url('admin/view_pos_user')}}"><button class="btn btn-sm btn-info">View</button></a>
                            <button type="button" data-table="pos_user" data-id="11" class="btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> Delete</button>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                    
                  
                  </div>
                </div><!-- /.content-details -->
              </div>
           
        </div><!-- /.contents-inner -->

      </div>

    </div>
  </div><!-- /.contents-inner -->



</div><!-- /.dashboard-contents -->

@endsection