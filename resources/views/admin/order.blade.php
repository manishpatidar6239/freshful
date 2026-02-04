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
                  <h4 class="content-title">Orders</h4><!--.content-title-->
                </div><!--.content-head -->

                <div class="content-details show">
                  <div class="order-content">

                    <div class="col-md-6" style="margin-bottom: 10px;">
                    </div>

                    <div id="order-listing_wrapper" class="dataTables_wrapper no-footer">
                      <div class="dataTables_length" id="order-listing_length"><label>Show <select name="order-listing_length" aria-controls="order-listing" class="">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> entries</label></div>
                      <div id="order-listing_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="order-listing"></label></div>
                      <table id="order-listing" class="table table-striped dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" style="width: 98.1534px;">Order #</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 164.896px;">Purchased On</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 113.428px;">Customer</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 105.54px;">Price</th>
                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order: activate to sort column ascending" style="width: 187.737px;">Order</th>
                          </tr>
                        </thead>
                        <tbody>


























                          <tr role="row" class="odd">
                            <td class="sorting_1">ORD200086</td>
                            <td>2024-04-24 10:37:58</td>
                            <td>Ahmed</td>
                            <!--<td>Chicken Cu....</td>-->
                            <td>27</td>
                            <td>
                              <select class="change_status" data-id="100" data-order_id="ORD200086" data-status_name="order_status">
                                <option value="Order Pending">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered" selected="">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">ORD200096</td>
                            <td>2024-05-08 00:54:17</td>
                            <td>Ahmed</td>
                            <!--<td>Beans Indi....</td>-->
                            <td>40</td>
                            <td>
                              <select class="change_status" data-id="110" data-order_id="ORD200096" data-status_name="order_status">
                                <option value="Order Pending">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered" selected="">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">ORD200111</td>
                            <td>2024-05-20 17:34:35</td>
                            <td>Prakash </td>
                            <!--<td>Chicken Mi....</td>-->
                            <td>39.75</td>
                            <td>
                              <select class="change_status" data-id="128" data-order_id="ORD200111" data-status_name="order_status">
                                <option value="Order Pending" selected="">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">ORD200112</td>
                            <td>2024-05-20 18:01:12</td>
                            <td>Prakash </td>
                            <!--<td>Chicken Mi....</td>-->
                            <td>200.0</td>
                            <td>
                              <select class="change_status" data-id="131" data-order_id="ORD200112" data-status_name="order_status">
                                <option value="Order Pending" selected="">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">ORD200114</td>
                            <td>2024-06-14 08:48:38</td>
                            <td>Ahmed</td>
                            <!--<td>Chicken Th....</td>-->
                            <td>185.0</td>
                            <td>
                              <select class="change_status" data-id="133" data-order_id="ORD200114" data-status_name="order_status">
                                <option value="Order Pending">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">ORD200115</td>
                            <td>2024-07-25 12:54:09</td>
                            <td>Ahmed</td>
                            <!--<td>Chicken Th....</td>-->
                            <td>185.0</td>
                            <td>
                              <select class="change_status" data-id="134" data-order_id="ORD200115" data-status_name="order_status">
                                <option value="Order Pending">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered" selected="">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">ORD200116</td>
                            <td>2024-12-10 09:42:57</td>
                            <td>tragg</td>
                            <!--<td>Beans Indi....</td>-->
                            <td>25</td>
                            <td>
                              <select class="change_status" data-id="135" data-order_id="ORD200116" data-status_name="order_status">
                                <option value="Order Pending" selected="">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">ORD200117</td>
                            <td>2024-12-10 13:04:09</td>
                            <td>tragg</td>
                            <!--<td>Beans Indi....</td>-->
                            <td>25</td>
                            <td>
                              <select class="change_status" data-id="136" data-order_id="ORD200117" data-status_name="order_status">
                                <option value="Order Pending" selected="">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">ORD200118</td>
                            <td>2024-12-15 19:02:15</td>
                            <td>Ahmed</td>
                            <!--<td>Chicken Mi....</td>-->
                            <td>33.5</td>
                            <td>
                              <select class="change_status" data-id="137" data-order_id="ORD200118" data-status_name="order_status">
                                <option value="Order Pending">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">ORD200119</td>
                            <td>2025-01-25 08:23:23</td>
                            <td>Ahmed</td>
                            <!--<td>Chicken Ch....</td>-->
                            <td>20.0</td>
                            <td>
                              <select class="change_status" data-id="139" data-order_id="ORD200119" data-status_name="order_status">
                                <option value="Order Pending" selected="">Order Pending</option>
                                <option value="Order Cancel">Order Cancel</option>
                                <option value="Order Placed">Order Placed</option>
                                <option value="Order Processed">Order Processed</option>
                                <option value="Order Shipped">Order Shipped</option>
                                <option value="Order Delivered">Order Delivered</option>
                              </select>
                            </td>

                            <!--<td>
                          <button class="btn btn-outline-primary">View</button>
                        </td>-->
                          </tr>
                        </tbody>
                      </table>
                      <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 26 entries</div>
                      <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate"><a class="paginate_button previous disabled" aria-controls="order-listing" data-dt-idx="0" tabindex="0" id="order-listing_previous">Previous</a><span><a class="paginate_button current" aria-controls="order-listing" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="order-listing" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="order-listing" data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next" aria-controls="order-listing" data-dt-idx="4" tabindex="0" id="order-listing_next">Next</a></div>
                    </div>
                  </div><!-- /.order-content -->
                </div><!-- /.content-details -->
              </div>
            </div>
          </div>
        </div><!-- /.contents-inner -->
      </div>

    </div>
  </div><!-- /.contents-inner -->



</div><!-- /.dashboard-contents -->














@endsection