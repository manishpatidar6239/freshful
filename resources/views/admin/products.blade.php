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
                                    <h4 class="content-title">Products</h4><!-- /.content-title -->
                                    <a href="add_product.php" class="btn btn-primary btn-sm" style="float:right;">
                                        <i class="fa fa-dot-circle-o"></i> Add Product
                                    </a>
                                    <a href="import_product.php" class="btn btn-primary btn-sm mr-3" style="float:right;">
                                        <i class="fa fa-file"></i> Import Product
                                    </a>
                                    <a href="update_product.php" class="btn btn-primary btn-sm mr-3" style="float:right;">
                                        <i class="fa fa-file"></i> Update Products
                                    </a>
                                    <!--<a href="add_product.php" class="btn btn-primary btn-sm" style="">
					  <i class="fa fa-dot-circle-o"></i> Upload Product
					</a>-->
                                </div><!-- /.content-head -->

                                <div class="content-details show">
                                    <div class="order-content">
                                        <form class="form-horizontal" action="" method="">
                                            <div class="row" >
                                                <div class="col-md-3" style="margin-bottom: 10px;">
                                                    <select name="main_cat" id="main_category_id" class="form-control">
                                                        <option value="">Select Main Category</option>
                                                        <option data-cat_name="Meat &amp; Seafood" value="1">Meat &amp; Seafood</option>
                                                        <option data-cat_name="Fruits &amp; Vegetables" value="2">Fruits &amp; Vegetables</option>
                                                        <option data-cat_name="Fresh Dairy" value="3">Fresh Dairy</option>
                                                        <option data-cat_name="horeca" value="34">horeca</option>
                                                        <option data-cat_name="new category" value="35">new category</option>
                                                        <option data-cat_name="ascasc" value="36">ascasc</option>
                                                        <option data-cat_name="ascascasc" value="37">ascascasc</option>
                                                        <option data-cat_name="ascasc" value="38">ascasc</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3" style="margin-bottom: 10px;">
                                                    <select name="category" id="category_id" class="form-control">
                                                        <option value="">Select Category</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3" style="margin-bottom: 10px;">
                                                    <select name="product" id="item_id" class="form-control">
                                                        <option value="">Select Product</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3" style="margin-bottom: 10px;">
                                                    <button type="submit" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="col-4">
                                            <div class="">
                                                <a class="disabled btn ripple btn-danger" id="deleteProducts" href="#">Delete Seleted</a>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <div id="data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                <div class="dataTables_length" id="data-table_length"><label>Show <select name="data-table_length" aria-controls="data-table" class="form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label></div>
                                                <div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Copy</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="data-table" href="#"><span>Excel</span></a></div>
                                                <div id="data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table"></label></div>
                                                <table id="data-table" class="table data-table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" rowspan="1" colspan="1" aria-label=" Select All" style="width: 80.2746px;"><input type="checkbox" id="selectAll"> Select All</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Product Rank: activate to sort column ascending" style="width: 94.375px;">Product Rank</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Product ID: activate to sort column ascending" style="width: 73.7879px;">Product ID</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Product name: activate to sort column ascending" style="width: 309.934px;">Product name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 110.777px;">Category</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="MRP: activate to sort column ascending" style="width: 51.714px;">MRP</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Main price: activate to sort column ascending" style="width: 73.7311px;">Main price</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending" style="width: 50px;">Image</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 50px;">Status</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 31.2027px;">Edit</th>
                                                            <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 45.5303px;">Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>













































































































































                                                        <tr role="row" class="odd">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1955" type="checkbox"></td>
                                                            <td>3</td>
                                                            <td>PRD00162</td>
                                                            <td>Beans Indian</td>
                                                            <td>Beans</td>
                                                            <td>30.00</td>
                                                            <td>25.00</td>
                                                            <td><img src="../uploads/images/products/no-image.jpg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1955" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1955')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1957" type="checkbox"></td>
                                                            <td>4</td>
                                                            <td>PRD00164</td>
                                                            <td>Apple Red Delicious</td>
                                                            <td>Apple</td>
                                                            <td>170.00</td>
                                                            <td>150.00</td>
                                                            <td><img src="../uploads/images/products/XRxXw1713790870.jpg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1957" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1957')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1950" type="checkbox"></td>
                                                            <td>5</td>
                                                            <td>PRD00157</td>
                                                            <td>Chicken Thigh - (Skinless)</td>
                                                            <td>Chicken</td>
                                                            <td>180.00</td>
                                                            <td>170.00</td>
                                                            <td><img src="../uploads/images/products/no-image.jpg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1950" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1950')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1952" type="checkbox"></td>
                                                            <td>7</td>
                                                            <td>PRD00159</td>
                                                            <td>Chicken Breast Boneless</td>
                                                            <td>Chicken</td>
                                                            <td>200.00</td>
                                                            <td>180.00</td>
                                                            <td><img src="../uploads/images/products/ckhOi1666978961.jpg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1952" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }} "><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1952')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1960" type="checkbox"></td>
                                                            <td>8</td>
                                                            <td>PRD00167</td>
                                                            <td>Brinjal Round Green</td>
                                                            <td>Fresh Vegetables</td>
                                                            <td>60.00</td>
                                                            <td>50.00</td>
                                                            <td><img src="../uploads/images/products/6iJMJ1713793511.jpg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1960" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1960')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1961" type="checkbox"></td>
                                                            <td>12</td>
                                                            <td>PRD00168</td>
                                                            <td>Cabbage</td>
                                                            <td>Fresh Vegetables</td>
                                                            <td>60.00</td>
                                                            <td>50.00</td>
                                                            <td><img src="../uploads/images/products/guBMQ1713793790.jpg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1961" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1961')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1943" type="checkbox"></td>
                                                            <td>17</td>
                                                            <td>PRD00150</td>
                                                            <td>Chicken Mini Bites (Boneless)</td>
                                                            <td>Chicken</td>
                                                            <td>230</td>
                                                            <td>200</td>
                                                            <td><img src="../uploads/images/products/6DqSD1713780393.jpg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1943" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1943')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1954" type="checkbox"></td>
                                                            <td>19</td>
                                                            <td>PRD00161</td>
                                                            <td>Chicken Curry Cut (Small - 13 to 16 Pcs</td>
                                                            <td>Chicken</td>
                                                            <td>200.00</td>
                                                            <td>177</td>
                                                            <td><img src="../uploads/images/products/fTy9S1713783488.jpeg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1954" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1954')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1947" type="checkbox"></td>
                                                            <td>21</td>
                                                            <td>PRD00154</td>
                                                            <td>Beef Boneless &amp; Fatless Kheema</td>
                                                            <td>Buff</td>
                                                            <td>180.00</td>
                                                            <td>160</td>
                                                            <td><img src="../uploads/images/products/76S9l1713795798.webp" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1947" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1947')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <!--<td></td>-->
                                                            <td class="sorting_1"><input name="check" value="1953" type="checkbox"></td>
                                                            <td>22</td>
                                                            <td>PRD00160</td>
                                                            <td>Chicken Thigh (Boneless)</td>
                                                            <td>Chicken</td>
                                                            <td>190.00</td>
                                                            <td>170.00</td>
                                                            <td><img src="../uploads/images/products/3Pn181713782683.jpg" width="50px" height="50px"></td>
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" name="status" class="status_enable switch-warning change_status" data-table="products" checked="" data-id="1953" value="active">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </td>
                                                            <td><span><a class="btn btn-sm btn-info" href="{{ url('/admin/edit_product') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></td>
                                                            <td><span onclick="deleteFunction('1953')"><a class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 141 entries</div>
                                                <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                        <li class="paginate_button page-item disabled" id="data-table_ellipsis"><a href="#" aria-controls="data-table" data-dt-idx="6" tabindex="0" class="page-link">…</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="7" tabindex="0" class="page-link">15</a></li>
                                                        <li class="paginate_button page-item next" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
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