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
 									<h4 class="content-title">Inventory</h4><!-- /.content-title -->
 									<a href="{{url('admin/add-product')}}" class="btn btn-primary btn-sm" style="float:right;">
 										<i class="fa fa-dot-circle-o"></i> Add Product
 									</a>
 								</div><!-- /.content-head -->

 								<div class="content-details show">
 									<div class="order-content">

 										<div class="col-md-2" style="margin-bottom: 10px;">
 										</div>

 										<div id="data-table_wrapper" class="dataTables_wrapper no-footer">
 											<div class="dataTables_length" id="data-table_length"><label>Show <select name="data-table_length" aria-controls="data-table" class="">
 														<option value="10">10</option>
 														<option value="25">25</option>
 														<option value="50">50</option>
 														<option value="100">100</option>
 													</select> entries</label></div>
 											<div id="data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="data-table"></label></div>
 											<table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
 												<thead>
 													<tr role="row">
 														<th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No: activate to sort column descending" style="width: 43.7311px;">S.No</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending" style="width: 58.7689px;">Image</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 43.1061px;">Title</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 110.777px;">Category</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 87.803px;">Type</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 68.9867px;">Quantity</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Stock: activate to sort column ascending" style="width: 49.1572px;">Stock</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="M.P.: activate to sort column ascending" style="width: 42.2633px;">M.P.</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="S.P.: activate to sort column ascending" style="width: 38.3333px;">S.P.</th>
 														<th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 54.7633px;">Action</th>
 													</tr>
 												</thead>
 												<tbody>













































































































































 													<tr role="row" class="odd">
 														<td class="sorting_1">1</td>
 														<td><img src="../uploads/images/products/" width="50px" height="50px"></td>
 														<td></td>
 														<td>Fish &amp; Seafood</td>
 														<td>
 															<select name="product_unit" id="product_unit_2091">
 																<option value="KG">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen" selected="">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="23" id="unit_quantity_2091" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="57" id="stock_2091" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="56456" id="MRP_2091" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="234" id="main_price_2091" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2091')" id="edit_inventory_2091">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2091')" id="save_inventory_2091" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="even">
 														<td class="sorting_1">2</td>
 														<td><img src="../uploads/images/products/" width="50px" height="50px"></td>
 														<td></td>
 														<td>Fish &amp; Seafood</td>
 														<td>
 															<select name="product_unit" id="product_unit_2090">
 																<option value="KG">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box" selected="">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="3" id="unit_quantity_2090" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="3" id="stock_2090" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="3" id="MRP_2090" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="3" id="main_price_2090" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2090')" id="edit_inventory_2090">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2090')" id="save_inventory_2090" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="odd">
 														<td class="sorting_1">3</td>
 														<td><img src="../uploads/images/products/" width="50px" height="50px"></td>
 														<td></td>
 														<td>Fish &amp; Seafood</td>
 														<td>
 															<select name="product_unit" id="product_unit_2089">
 																<option value="KG">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box" selected="">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="3" id="unit_quantity_2089" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="3" id="stock_2089" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="3" id="MRP_2089" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="3" id="main_price_2089" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2089')" id="edit_inventory_2089">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2089')" id="save_inventory_2089" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="even">
 														<td class="sorting_1">4</td>
 														<td><img src="../uploads/images/products/NrqU01745071267.jpg" width="50px" height="50px"></td>
 														<td></td>
 														<td>Cold Cuts</td>
 														<td>
 															<select name="product_unit" id="product_unit_2084">
 																<option value="KG" selected="">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="3" id="unit_quantity_2084" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="10" id="stock_2084" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="444" id="MRP_2084" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="444" id="main_price_2084" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2084')" id="edit_inventory_2084">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2084')" id="save_inventory_2084" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="odd">
 														<td class="sorting_1">5</td>
 														<td><img src="../uploads/images/products/MAYWe1745071234.jpg" width="50px" height="50px"></td>
 														<td></td>
 														<td>Cold Cuts</td>
 														<td>
 															<select name="product_unit" id="product_unit_2083">
 																<option value="KG" selected="">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="3" id="unit_quantity_2083" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="10" id="stock_2083" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="444" id="MRP_2083" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="444" id="main_price_2083" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2083')" id="edit_inventory_2083">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2083')" id="save_inventory_2083" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="even">
 														<td class="sorting_1">6</td>
 														<td><img src="../uploads/images/products/" width="50px" height="50px"></td>
 														<td></td>
 														<td>Cold Cuts</td>
 														<td>
 															<select name="product_unit" id="product_unit_2082">
 																<option value="KG" selected="">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="3" id="unit_quantity_2082" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="10" id="stock_2082" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="444" id="MRP_2082" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="444" id="main_price_2082" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2082')" id="edit_inventory_2082">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2082')" id="save_inventory_2082" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="odd">
 														<td class="sorting_1">7</td>
 														<td><img src="../uploads/images/products/" width="50px" height="50px"></td>
 														<td></td>
 														<td>Cold Cuts</td>
 														<td>
 															<select name="product_unit" id="product_unit_2081">
 																<option value="KG" selected="">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="3" id="unit_quantity_2081" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="10" id="stock_2081" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="444" id="MRP_2081" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="444" id="main_price_2081" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2081')" id="edit_inventory_2081">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2081')" id="save_inventory_2081" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="even">
 														<td class="sorting_1">8</td>
 														<td><img src="../uploads/images/products/" width="50px" height="50px"></td>
 														<td></td>
 														<td>Ready to Cook</td>
 														<td>
 															<select name="product_unit" id="product_unit_2080">
 																<option value="KG" selected="">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="55" id="unit_quantity_2080" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="50" id="stock_2080" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="548" id="MRP_2080" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="500.00" id="main_price_2080" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2080')" id="edit_inventory_2080">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2080')" id="save_inventory_2080" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="odd">
 														<td class="sorting_1">9</td>
 														<td><img src="../uploads/images/products/L1kex1745073116.jpg" width="50px" height="50px"></td>
 														<td></td>
 														<td>Combo</td>
 														<td>
 															<select name="product_unit" id="product_unit_2079">
 																<option value="KG">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram" selected="">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="500" id="unit_quantity_2079" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="10" id="stock_2079" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="500" id="MRP_2079" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="450.00" id="main_price_2079" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2079')" id="edit_inventory_2079">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2079')" id="save_inventory_2079" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 													<tr role="row" class="even">
 														<td class="sorting_1">10</td>
 														<td><img src="../uploads/images/products/" width="50px" height="50px"></td>
 														<td></td>
 														<td>Fish &amp; Seafood</td>
 														<td>
 															<select name="product_unit" id="product_unit_2078">
 																<option value="KG">KG</option>
 																<option value="cm">cm</option>
 																<option value="Gram">Gram</option>
 																<option value="Dozen">Dozen</option>
 																<option value="Liter ">Liter </option>
 																<option value="ML">ML</option>
 																<option value="Qty">Qty</option>
 																<option value="Box" selected="">Box</option>
 																<option value="PCS">PCS</option>
 															</select>
 														</td>
 														<td><input type="number" class="form-control" name="unit_quantity" value="10" id="unit_quantity_2078" readonly=""></td>
 														<td><input type="number" class="form-control" name="stock" value="14" id="stock_2078" readonly=""></td>
 														<td><input type="number" class="form-control" name="MRP" value="500" id="MRP_2078" readonly=""></td>
 														<td><input type="number" class="form-control" name="main_price" value="399" id="main_price_2078" readonly=""></td>
 														<td>
 															<a href="javascript:void(0)" onclick="EditFunction('2078')" id="edit_inventory_2078">
 																<img src="../img/edit.png" border="0" alt="Click to edit" title="Click to edit">
 															</a>
 															<a href="javascript:void(0)" onclick="SaveFunction('2078')" id="save_inventory_2078" style="display: none;">
 																<img src="../img/Save.png" border="0" alt="Click to save" title="Click to save">
 															</a>
 														</td>
 													</tr>
 												</tbody>
 											</table>
 											<div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 141 entries</div>
 											<div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate"><a class="paginate_button previous disabled" aria-controls="data-table" data-dt-idx="0" tabindex="0" id="data-table_previous">Previous</a><span><a class="paginate_button current" aria-controls="data-table" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="data-table" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="data-table" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="data-table" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="data-table" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a class="paginate_button " aria-controls="data-table" data-dt-idx="6" tabindex="0">15</a></span><a class="paginate_button next" aria-controls="data-table" data-dt-idx="7" tabindex="0" id="data-table_next">Next</a></div>
 										</div>
 									</div><!-- /.order-content -->
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