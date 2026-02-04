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
									<h4 class="content-title">Filter</h4>
								</div>
								<!-- /.content-head -->

								<div class="content-details show">
									<div id="pay-invoice" class="card pay-invoice">
										<div class="card-body">
											<form class="form" method="get" action="" enctype="multipart/form-data">
												<div class="pb-4">
													<a id="today" data-date_from="2026-02-04" data-date_to="2026-02-04" href="#">Today</a>&nbsp;&nbsp;
													<a id="yesterday" data-date_from="2026-02-03" data-date_to="2026-02-03" href="#">Yesterday</a>&nbsp;&nbsp;
													<a id="current_week" data-date_from="2026-02-02" data-date_to="2026-02-08" href="#">Current Week</a>&nbsp;&nbsp;
													<a id="previous_week" data-date_from="2026-01-26" data-date_to="2026-02-01" href="#">Previous Week</a>&nbsp;&nbsp;
													<a id="current_month" data-date_from="2026-02-01" data-date_to="2026-02-28" href="#">Current Month</a>&nbsp;&nbsp;
													<a id="previous_month" data-date_from="2026-01-01" data-date_to="2026-01-31" href="#">Previous Month</a>&nbsp;&nbsp;
													<a id="current_year" data-date_from="2026-01-01" data-date_to="2026-12-31" href="#">Current Year</a>&nbsp;&nbsp;
													<a id="previous_year" data-date_from="2025-01-01" data-date_to="2025-12-31" href="#">Previous Year</a>&nbsp;&nbsp;
												</div>

												<div class="row p-15">
													<div class="col-md-3">
														<div class="form-group">
															<label for="example-date-input" class="">Date From</label> <!--class="col-form-label"-->
															<div class="">
																<input class="form-control" type="date" id="date_from" name="date_from" value="" id="example-date-input" />
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label for="example-date-input" class="">Date To</label>
															<div class="">
																<input class="form-control" type="date" id="date_to" name="date_to" value="" id="example-date-input" />
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label class="">City</label>
															<select id="city_id" name="city" class="form-control ">
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
													<!--</div>
                            <div class="row p-15">-->
													<div class="col-md-3">
														<div class="form-group">
															<label for="example-date-input" class="">Customer Name</label>
															<div class="">
																<input class="form-control" type="text" name="customer" placeholder="Enter customer name" value="" />
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label for="example-date-input" class="">Customer Mobile</label>
															<div class="">
																<input class="form-control" type="text" name="customer_mobile" maxlength="10" placeholder="Enter customer mobile" value="" />
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label>Status</label>
															<select name="order_status" class="form-control">
																<option value="">Select</option>
																<option value="Order Pending">Order Pending</option>
																<option value="Order Cancel">Order Cancel</option>
																<option value="Order Placed">Order Placed</option>
																<option value="Order Processed">Order Processed</option>
																<option value="Order Shipped">Order Shipped</option>
																<option value="Order Delivered">Order Delivered</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label>Delivery Type</label>
															<select name="delivery_type" class="form-control ">
																<option value="">Select Delivery Type</option>
																<option value="Express">Express</option>
																<option value="Scheduled">Scheduled</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row p-15">

													<div class="col-12 mt-25 text-center">
														<a href="all_orders.php" class="btn btn-rounded btn-warning btn-outline mr-1">
															Reset
														</a>
														<input type="submit" class="btn btn-rounded btn-primary btn-outline" />
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="section-content">
								<div class="content-head">
									<h4 class="content-title">All Orders</h4>

								</div>

								<div class="content-details show">
									<div class="order-content">

										<form class="form-horizontal"  method="post">


											<div class="row" >
												<div class="col-md-3" style="margin-bottom: 10px;">
													<input type="date" name="date" class="form-control" value="">

												</div>
												<div class="col-md-3" style="margin-bottom: 10px;">
													<button type="submit" class="btn btn-primary">Search</button>
												</div>


											</div>
										</form>

										<div class="table-responsive">
											<table id="data-table" class="table data-table table-striped table-bordered">
												<thead>
													<tr>
														<th>S.No.</th>
														<th>Date</th>
														<th>Order Id</th>
														<th>Delivery Type</th>
														<th>Hub</th>
														<th>Customer Name</th>
														<th>Customer Mobile</th>
														<th>Status</th>
														<th>Amount</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>22-05-2023</td>
														<td>ORD200000</td>
														<td>Express</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200000" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>2</td>
														<td>22-05-2023</td>
														<td>ORD200001</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200001" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>3</td>
														<td>22-05-2023</td>
														<td>ORD200002</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Delivered</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200002" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>4</td>
														<td>22-05-2023</td>
														<td>ORD200003</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Delivered</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200003" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>5</td>
														<td>22-05-2023</td>
														<td>ORD200004</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>20</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200004" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>6</td>
														<td>23-05-2023</td>
														<td>ORD200006</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200006" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>7</td>
														<td>23-05-2023</td>
														<td>ORD200007</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>20</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200007" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>8</td>
														<td>23-05-2023</td>
														<td>ORD200008</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200008" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>9</td>
														<td>23-05-2023</td>
														<td>ORD200009</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200009" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>10</td>
														<td>23-05-2023</td>
														<td>ORD200010</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200010" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>11</td>
														<td>23-05-2023</td>
														<td>ORD200011</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200011" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>12</td>
														<td>23-05-2023</td>
														<td>ORD200012</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>20</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200012" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>13</td>
														<td>23-05-2023</td>
														<td>ORD200013</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>20</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200013" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>14</td>
														<td>24-05-2023</td>
														<td>ORD200017</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200017" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>15</td>
														<td>24-05-2023</td>
														<td>ORD200018</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200018" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>16</td>
														<td>24-05-2023</td>
														<td>ORD200019</td>
														<td>Scheduled</td>
														<td>BAND</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Dispatched</span>
														</td>
														<td>38</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200019" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>17</td>
														<td>27-05-2023</td>
														<td>ORD200022</td>
														<td>Scheduled</td>
														<td>BAND</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Delivered</span>
														</td>
														<td>58</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200022" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>18</td>
														<td>31-05-2023</td>
														<td>ORD200026</td>
														<td>Scheduled</td>
														<td>HSR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-info" title="Reason : ">Order Placed</span>
														</td>
														<td>38</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200026" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>19</td>
														<td>31-05-2023</td>
														<td>ORD200027</td>
														<td>Scheduled</td>
														<td>BAND</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-info" title="Reason : ">Order Placed</span>
														</td>
														<td>38</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200027" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>20</td>
														<td>31-05-2023</td>
														<td>ORD200029</td>
														<td>Scheduled</td>
														<td>BAND</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>38</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200029" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>21</td>
														<td>31-05-2023</td>
														<td>ORD200030</td>
														<td>Scheduled</td>
														<td>BAND</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>240</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200030" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>22</td>
														<td>31-05-2023</td>
														<td>ORD200031</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200031" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>23</td>
														<td>31-05-2023</td>
														<td>ORD200032</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>238</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200032" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>24</td>
														<td>31-05-2023</td>
														<td>ORD200033</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200033" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>25</td>
														<td>31-05-2023</td>
														<td>ORD200034</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-info" title="Reason : ">Order Placed</span>
														</td>
														<td>220</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200034" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>26</td>
														<td>31-05-2023</td>
														<td>ORD200035</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>18</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200035" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>27</td>
														<td>01-06-2023</td>
														<td>ORD200039</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td></td>
														<td>7979997979</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Dispatched</span>
														</td>
														<td>33</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200039" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>28</td>
														<td>01-06-2023</td>
														<td>ORD200040</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-info" title="Reason : ">Order Placed</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200040" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>29</td>
														<td>01-06-2023</td>
														<td>ORD200041</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200041" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>30</td>
														<td>01-06-2023</td>
														<td>ORD200042</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200042" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>31</td>
														<td>01-06-2023</td>
														<td>ORD200043</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200043" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>32</td>
														<td>01-06-2023</td>
														<td>ORD200044</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200044" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>33</td>
														<td>01-06-2023</td>
														<td>ORD200045</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200045" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>34</td>
														<td>01-06-2023</td>
														<td>ORD200046</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200046" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>35</td>
														<td>02-06-2023</td>
														<td>ORD200047</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200047" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>36</td>
														<td>02-06-2023</td>
														<td>ORD200048</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200048" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>37</td>
														<td>02-06-2023</td>
														<td>ORD200049</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200049" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>38</td>
														<td>02-06-2023</td>
														<td>ORD200050</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200050" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>39</td>
														<td>02-06-2023</td>
														<td>ORD200051</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200051" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>40</td>
														<td>02-06-2023</td>
														<td>ORD200052</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200052" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>41</td>
														<td>02-06-2023</td>
														<td>ORD200053</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200053" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>42</td>
														<td>02-06-2023</td>
														<td>ORD200054</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200054" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>43</td>
														<td>02-06-2023</td>
														<td>ORD200055</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200055" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>44</td>
														<td>02-06-2023</td>
														<td>ORD200056</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200056" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>45</td>
														<td>02-06-2023</td>
														<td>ORD200057</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200057" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>46</td>
														<td>02-06-2023</td>
														<td>ORD200058</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200058" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>47</td>
														<td>02-06-2023</td>
														<td>ORD200059</td>
														<td>Scheduled</td>
														<td>NCR</td>
														<td>thanks</td>
														<td>7987737702</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>150</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200059" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>48</td>
														<td>27-06-2023</td>
														<td>ORD200060</td>
														<td>Scheduled</td>
														<td>KAM</td>
														<td>rajnish</td>
														<td>9393772121</td>
														<td>

															<span class="badge badge-info" title="Reason : ">Order Placed</span>
														</td>
														<td>2525</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200060" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>49</td>
														<td>25-01-2024</td>
														<td>ORD200069</td>
														<td>Express</td>
														<td>AMB</td>
														<td>lllll</td>
														<td>ambur</td>
														<td>

															<span class="badge badge-danger tip" title="Reason : Personal reasons">Order Cancel</span>
														</td>
														<td>-225</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200069" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>50</td>
														<td>25-01-2024</td>
														<td>ORD200070</td>
														<td>Express</td>
														<td>AMB</td>
														<td>ali</td>
														<td>tamil nadu</td>
														<td>

															<span class="badge badge-danger tip" title="Reason : Personal reasons">Order Cancel</span>
														</td>
														<td>-100</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200070" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>51</td>
														<td>25-01-2024</td>
														<td>ORD200071</td>
														<td>Express</td>
														<td>AMB</td>
														<td>ali</td>
														<td>tamil nadu</td>
														<td>

															<span class="badge badge-danger tip" title="Reason : Personal reasons">Order Cancel</span>
														</td>
														<td>-39945</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200071" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>52</td>
														<td>22-04-2024</td>
														<td>ORD200081</td>
														<td>Express</td>
														<td>AMB</td>
														<td>New User</td>
														<td>8269708389</td>
														<td>

															<span class="badge badge-danger tip" title="Reason : Personal reasons">Order Cancel</span>
														</td>
														<td>195.5</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200081" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>53</td>
														<td>23-04-2024</td>
														<td>ORD200085</td>
														<td>Scheduled</td>
														<td>AMB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-info" title="Reason : ">Order Placed</span>
														</td>
														<td>185</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200085" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>54</td>
														<td>24-04-2024</td>
														<td>ORD200086</td>
														<td>Scheduled</td>
														<td>AMB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Delivered</span>
														</td>
														<td>27</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200086" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>55</td>
														<td>08-05-2024</td>
														<td>ORD200096</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Delivered</span>
														</td>
														<td>40</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200096" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>56</td>
														<td>20-05-2024</td>
														<td>ORD200111</td>
														<td>Scheduled</td>
														<td>WAD</td>
														<td>Prakash </td>
														<td></td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>39.75</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200111" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>57</td>
														<td>20-05-2024</td>
														<td>ORD200112</td>
														<td>Scheduled</td>
														<td>WAD</td>
														<td>Prakash </td>
														<td></td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>200.0</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200112" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>58</td>
														<td>14-06-2024</td>
														<td>ORD200114</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Dispatched</span>
														</td>
														<td>185.0</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200114" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>59</td>
														<td>25-07-2024</td>
														<td>ORD200115</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Delivered</span>
														</td>
														<td>185.0</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200115" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>60</td>
														<td>10-12-2024</td>
														<td>ORD200116</td>
														<td>Express</td>
														<td>AMB</td>
														<td>tragg</td>
														<td>+120858103</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>25</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200116" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>61</td>
														<td>10-12-2024</td>
														<td>ORD200117</td>
														<td>Express</td>
														<td>AMB</td>
														<td>tragg</td>
														<td>+120858103</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>25</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200117" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>62</td>
														<td>15-12-2024</td>
														<td>ORD200118</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-success" title="Reason : ">Order Dispatched</span>
														</td>
														<td>33.5</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200118" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>63</td>
														<td>25-01-2025</td>
														<td>ORD200119</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>20.0</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200119" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>64</td>
														<td>07-02-2025</td>
														<td>ORD200120</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-danger tip" title="Reason : ">Order Cancel</span>
														</td>
														<td>175.0</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200120" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>65</td>
														<td>18-04-2025</td>
														<td>ORD200121</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>+918056006631</td>
														<td>

															<span class="badge badge-danger tip" title="Reason : ">Order Cancel</span>
														</td>
														<td>205.0</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200121" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>66</td>
														<td>10-05-2025</td>
														<td>ORD200126</td>
														<td>Express</td>
														<td>KAM</td>
														<td></td>
														<td>8056006631</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>180</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200126" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>67</td>
														<td>11-05-2025</td>
														<td>ORD200127</td>
														<td>Express</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>8056006631</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>1</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200127" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>68</td>
														<td>25-11-2025</td>
														<td>ORD200128</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed Suhail</td>
														<td></td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>17.80000000</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200128" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>69</td>
														<td>28-11-2025</td>
														<td>ORD200129</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>8056006631</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>21.80000000</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200129" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>70</td>
														<td>28-11-2025</td>
														<td>ORD200130</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>8056006631</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>100.0</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200130" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>71</td>
														<td>01-12-2025</td>
														<td>ORD200131</td>
														<td>Scheduled</td>
														<td>VNB</td>
														<td>Ahmed</td>
														<td>8056006631</td>
														<td>

															<span class="badge badge-secondary" title="Reason : ">Order Pending</span>
														</td>
														<td>190.0</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200131" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>72</td>
														<td>04-12-2025</td>
														<td>ORD200132</td>
														<td>Express</td>
														<td>AMB</td>
														<td></td>
														<td>9893625824</td>
														<td>

															<span class="badge badge-info" title="Reason : ">Order Placed</span>
														</td>
														<td>45</td>
														<td>
															<div class="actions">
																<a href="view_operation_order.php?order_id=ORD200132" id="view-btn" class="btn btn-primary btn-sm">View</a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
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