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
                  <h4 class="content-title">Sales Summary</h4><!-- /.content-title -->
                </div><!-- /.content-head -->

                <div class="content-details show">
                  <div id="data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="data-table_length"><label>Show <select name="data-table_length" aria-controls="data-table" class="form-control form-control-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select> entries</label></div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div id="data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table"></label></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 150.458px;">Date</th>
                              <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Order Id: activate to sort column ascending" style="width: 238.312px;">Order Id</th>
                              <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 232.812px;">Amount</th>
                              <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Unit: activate to sort column ascending" style="width: 139.75px;">Unit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="odd">
                              <td valign="top" colspan="4" class="dataTables_empty">No data available in table</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                      </div>
                      <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">
                          <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item next disabled" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li>
                          </ul>
                        </div>
                      </div>
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