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
									<h4 class="content-title">Add Product</h4><!-- /.content-title -->
								</div><!-- /.content-head -->

								<div class="content-details show">
									<div id="pay-invoice" class="card pay-invoice">
										<div class="card-body">
											<form class="" id="add_product_form" name="add_product_form" action="../production/ajax/add_product.php" onsubmit="return false;" method="post" enctype="multipart/form-data" novalidate="novalidate">
												<input type="hidden" name="table" value="products">
												<input type="hidden" name="product_id" value="pr_lglmPSs7wz">

												<!-- Select Basic -->
												<div class="form-group">
													<label class="col-md-3 control-label" for="main_category_id">Product Main Category</label>
													<div class="col-md-6">
														<select id="main_category_id" name="main_category_id" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-main_category_id" tabindex="-1" aria-hidden="true">
															<option value="0" data-select2-id="select2-data-2-aft0">Select Main Category</option>
															<option value="Meat &amp; Seafood">Meat &amp; Seafood</option>
															<option value="Fruits &amp; Vegetables">Fruits &amp; Vegetables</option>
															<option value="Fresh Dairy">Fresh Dairy</option>
														</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-dfzy" style="width: 334.848px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-main_category_id-container" aria-controls="select2-main_category_id-container"><span class="select2-selection__rendered" id="select2-main_category_id-container" role="textbox" aria-readonly="true" title="Select Main Category">Select Main Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="category_id">Product Category</label>
													<div class="col-md-6">
														<select id="category_id" name="category_id" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-category_id" tabindex="-1" aria-hidden="true">
															<option value="0" data-select2-id="select2-data-4-quq6">Select Category</option>
														</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-d7ak" style="width: 334.848px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-category_id-container" aria-controls="select2-category_id-container"><span class="select2-selection__rendered" id="select2-category_id-container" role="textbox" aria-readonly="true" title="Select Category">Select Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="item_id">Item Name</label>
													<div class="col-md-6">
														<select id="item_id" name="item_id" class="form-control select2 select2-hidden-accessible" required="" data-select2-id="select2-data-item_id" tabindex="-1" aria-hidden="true">
															<option value="0" data-select2-id="select2-data-6-1e8j">Select Item</option>
														</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-no6x" style="width: 334.848px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-item_id-container" aria-controls="select2-item_id-container"><span class="select2-selection__rendered" id="select2-item_id-container" role="textbox" aria-readonly="true" title="Select Item">Select Item</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="tag">Product Tag</label>
													<div class="col-md-6">
														<select id="tag" name="tag[]" class="form-control select2 select2-hidden-accessible" multiple="" data-select2-id="select2-data-tag" tabindex="-1" aria-hidden="true">
															<option value="0">Select Tag</option>
															<option value="Meat &amp; Seafood">Meat &amp; Seafood</option>
															<option value="Fruits &amp; Vegetables">Fruits &amp; Vegetables</option>
															<option value="Fresh Dairy ">Fresh Dairy </option>
															<option value="Todays Deal">Todays Deal</option>
															<option value="Best Sellers">Best Sellers</option>
															<option value="May Offers">May Offers</option>
															<option value="Ready to Cook">Ready to Cook</option>
														</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-7-93fb" style="width: 334.848px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
																	<ul class="select2-selection__rendered" id="select2-tag-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-tag-container" placeholder="" style="width: 0.75em;"></textarea></span>
																</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="tag">Product Unit</label>
													<div class="col-md-6">
														<select id="product_unit" name="product_unit" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-product_unit" tabindex="-1" aria-hidden="true">
															<option value="0" data-select2-id="select2-data-9-xj3q">Select Product Unit</option>
															<option value="Box">Box</option>
															<option value="cm">cm</option>
															<option value="Dozen">Dozen</option>
															<option value="Gram">Gram</option>
															<option value="KG">KG</option>
															<option value="Liter ">Liter </option>
															<option value="ML">ML</option>
															<option value="PCS">PCS</option>
															<option value="Qty">Qty</option>
														</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-0nmj" style="width: 334.848px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-product_unit-container" aria-controls="select2-product_unit-container"><span class="select2-selection__rendered" id="select2-product_unit-container" role="textbox" aria-readonly="true" title="Select Product Unit">Select Product Unit</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="unit_quantity">Unit Quantity</label>
													<div class="col-md-6">
														<input id="unit_quantity" name="unit_quantity" placeholder="Product unit quantity" class="form-control input-md" required="" type="number">
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="gross_quantity">Gross Quantity</label>
													<div class="col-md-6">
														<input id="gross_quantity" name="gross_quantity" placeholder="Product Gross quantity" class="form-control input-md" required="" type="number">
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="MRP">Product MRP</label>
													<div class="col-md-6">
														<input id="MRP" name="MRP" placeholder="Product MRP" class="form-control input-md" required="" type="number">
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="main_price">Main Price</label>
													<div class="col-md-6">
														<input id="main_price" name="main_price" placeholder="Main Price" class="form-control input-md" required="" type="number">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="cost_price">Cost Price (admin margin)</label>
													<div class="col-md-6">
														<input id="cost_price" name="cost_price" placeholder="Cost Price" class="form-control input-md" required="" type="number">
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="stock">Stock</label>
													<div class="col-md-6">
														<input id="stock" name="stock" placeholder="Stock" class="form-control input-md" required="" type="number">
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="pieces">No of Pieces</label>
													<div class="col-md-6">
														<input id="pieces" name="pieces" placeholder="No of Pieces" class="form-control input-md" required="" type="text">
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="serves">Serves</label>
													<div class="col-md-6">
														<input id="serves" name="serves" placeholder="No of serves" class="form-control input-md" required="" type="text">
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="cooking_time">Cooking time(Minutes)</label>
													<div class="col-md-6">
														<input id="cooking_time" name="cooking_time" placeholder="Cooking time" class="form-control input-md" required="" type="text">
													</div>
												</div>

												<!-- Text input-->
												<div class="form-group">
													<label class="col-md-3 control-label" for="property">Product Property</label>
													<div class="col-md-6 add_new_property">
														<input id="" name="property[]" placeholder="Product Property" class="form-control input-md" type="text">
														<span class="add_property"><i class="fa fa-plus-circle"></i></span>
													</div>
												</div>

												<!-- Textarea -->
												<div class="form-group">
													<label class="col-md-3 control-label" for="description">Product Description</label>
													<div class="col-md-6">
														<textarea class="form-control" id="description" name="description" placeholder="Product Description"></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label" for="product_image">Product Image</label>
													<div class="col-md-6">
														<input type="file" id="product_image" name="product_image" class="form-control">
													</div>
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
					</div>
				</div><!-- /.contents-inner -->

			</div>
		</div>
	</div>

</div>
@endsection