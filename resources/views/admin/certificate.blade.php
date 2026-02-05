@extends('admin.layout.master')

@section('content')
<div class="dashboard-contents">
  <div class="contents-inner">
    <div class="row">
      <div class="full-wdt">

        <div class="contents-inner">
          <div class="row">
            <div class="col-md-12">
              <div class="section-content">
                <div class="content-head">
                  <h4 class="content-title">Add certificate</h4><!-- /.content-title -->
                </div><!-- /.content-head -->

                <div class="content-details show">
                  <div id="pay-invoice" class="card pay-invoice">
                    <div class="card-body">
                      <form class="" id="add_certificate_form" name="add_certificate_form" action="ajax/add_certificate.php" onsubmit="return false;" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        <input type="hidden" name="table" value="certificates">
                        <div class="row form-certificate">
                          <div class="col col-md-3"><label for="name" class="form-control-label">Title</label></div>
                          <div class="col-md-6"><input type="text" id="title" name="title" placeholder="certificate Name" class="form-control"></div>
                        </div>

                        <div class="row form-certificate">
                          <div class="col col-md-3"><label for="image" class="form-control-label">Image</label></div>
                          <div class="col-md-6"><input type="file" id="image" name="image" class="form-control"></div>
                        </div>

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Add
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="section-content">
                <div class="content-head">
                  <h4 class="content-title">certificate List</h4><!-- /.content-title -->
                </div><!-- /.content-head -->

                <div class="content-details show">
                  <div id="data-table_wrapper" class="dataTables_wrapper no-footer">

                    <table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 46.8229px;">ID</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 84.7188px;">Title</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Icon: activate to sort column ascending" style="width: 383.052px;">Icon</th>
                          <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 276.74px;">Actions</th>
                        </tr>
                      </thead>
                      <tbody>




                        <tr role="row" class="odd">
                          <td class="sorting_1">3</td>
                          <td>ys</td>
                          <td><img src="https://freshful.in/uploads/images/certificates/" height="60px" width="180px"></td>
                          <td>
                            <a href="certificate.php?id=3"><button class="btn btn-outline-primary">Edit</button></a>
                            <button class="btn btn-outline-danger delete_certificate" data-id="3">Delete</button>
                          </td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">4</td>
                          <td>th</td>
                          <td><img src="https://freshful.in/uploads/images/certificates/jlXHA1597418313.png" height="60px" width="180px"></td>
                          <td>
                            <a href="certificate.php?id=4"><button class="btn btn-outline-primary">Edit</button></a>
                            <button class="btn btn-outline-danger delete_certificate" data-id="4">Delete</button>
                          </td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">22</td>
                          <td>small</td>
                          <td><img src="https://freshful.in/uploads/images/certificates/" height="60px" width="180px"></td>
                          <td>
                            <a href="certificate.php?id=22"><button class="btn btn-outline-primary">Edit</button></a>
                            <button class="btn btn-outline-danger delete_certificate" data-id="22">Delete</button>
                          </td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">23</td>
                          <td>asdf</td>
                          <td><img src="https://freshful.in/uploads/images/certificates/" height="60px" width="180px"></td>
                          <td>
                            <a href="certificate.php?id=23"><button class="btn btn-outline-primary">Edit</button></a>
                            <button class="btn btn-outline-danger delete_certificate" data-id="23">Delete</button>
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