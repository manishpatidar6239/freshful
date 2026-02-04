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
									<h4 class="content-title">Edit Product</h4><!-- /.content-title -->
								</div><!-- /.content-head -->

								<div class="content-details show">
									<div id="pay-invoice" class="card pay-invoice">
										<div class="card-body">
											<form class="form-horizontal" action="../production/ajax/update_product.php" method="post" onsubmit="return false;" name="update_product_form" id="update_product_form" enctype="multipart/form-data" novalidate="novalidate">

												<input type="hidden" name="table" value="products">
												<input type="hidden" name="id" value="1955">

												<fieldset class="row p-3">

													<!-- Select Basic -->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="main_category_id">Product Main Category</label>
														<div class="col-md-12">
															<select id="main_category_id" name="main_category_id" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-main_category_id" tabindex="-1" aria-hidden="true">
																<option value="0">Select Main Category</option>
																<option value="Meat &amp; Seafood">Meat &amp; Seafood</option>
																<option value="Fruits &amp; Vegitables" selected="" data-select2-id="select2-data-2-2pas">Fruits &amp; Vegetables</option>
																<option value="Fresh Dairy">Fresh Dairy</option>
															</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-fvqp" style="width: 303.248px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-main_category_id-container" aria-controls="select2-main_category_id-container"><span class="select2-selection__rendered" id="select2-main_category_id-container" role="textbox" aria-readonly="true" title="Fruits &amp; Vegetables">Fruits &amp; Vegetables</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														</div>
													</div>

													<!-- Select Basic -->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="category_id">Product Category</label>
														<div class="col-md-12">
															<select id="category_id" name="category_id" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-category_id" tabindex="-1" aria-hidden="true">
																<option value="0">Select Category</option>
																<option value="9">Apple</option>
																<option value="10">Berry</option>
																<option value="11">Citrus</option>
																<option value="12">Mangoes</option>
																<option value="13">Melon</option>
																<option value="14">Fresh Fruits</option>
																<option value="15">Plantain</option>
																<option value="16">Seasonal Fruits</option>
																<option value="17">Exotic Fruit</option>
																<option value="18">Cut Fruits</option>
																<option value="19">Cut Vegetable</option>
																<option value="20">Other Processed Fruit Products</option>
																<option value="21" selected="" data-select2-id="select2-data-4-56ea">Beans</option>
																<option value="22">Flower</option>
																<option value="23">Gourds</option>
																<option value="24">Leafy</option>
																<option value="25">Fresh Vegetables</option>
																<option value="26">Spices &amp; Condiments</option>
																<option value="27">Sprouts</option>
																<option value="28">Stem &amp; Shoots</option>
																<option value="30">Vega-Fruits</option>
																<option value="31">Exotic Vegetables</option>
																<option value="32">Mushrooms</option>
																<option value="33">Special Vegetables</option>
															</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-chqh" style="width: 303.248px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-category_id-container" aria-controls="select2-category_id-container"><span class="select2-selection__rendered" id="select2-category_id-container" role="textbox" aria-readonly="true" title="Beans">Beans</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														</div>
													</div>

													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="item_id">Item Name</label>
														<div class="col-md-12">
															<select id="item_id" name="item_id" class="form-control select2 select2-hidden-accessible" required="" data-select2-id="select2-data-item_id" tabindex="-1" aria-hidden="true">
																<option value="0">Select Item</option>
																<option value="286">Beans Cowpea Karamani</option>
																<option value="287">Beans Chikadi</option>
																<option value="288" selected="" data-select2-id="select2-data-6-r114">Beans Indian</option>
																<option value="289">Beans Cluster</option>
																<option value="290">French Bean</option>
																<option value="291">Beans French</option>
																<option value="292">Beans Local</option>
																<option value="293">Surti Papdi</option>
																<option value="294">DU Beans Cow Pea Karamani</option>
															</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-ad32" style="width: 303.248px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-item_id-container" aria-controls="select2-item_id-container"><span class="select2-selection__rendered" id="select2-item_id-container" role="textbox" aria-readonly="true" title="Beans Indian">Beans Indian</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														</div>
													</div>

													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="tag">Product Tag</label>
														<div class="col-md-12">
															<select id="tag" name="tag[]" class="form-control select2 select2-hidden-accessible" multiple="" data-select2-id="select2-data-tag" tabindex="-1" aria-hidden="true">
																<option value="0">Select Tag</option>
																<option value="Meat &amp; Seafood">Meat &amp; Seafood</option>
																<option value="Fruits &amp; Vegetables" selected="" data-select2-id="select2-data-8-x9ks">Fruits &amp; Vegetables</option>
																<option value="Fresh Dairy ">Fresh Dairy </option>
																<option value="Todays Deal">Todays Deal</option>
																<option value="Best Sellers">Best Sellers</option>
																<option value="May Offers" selected="" data-select2-id="select2-data-9-c2dy">May Offers</option>
																<option value="Ready to Cook">Ready to Cook</option>
															</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-7-pfq8" style="width: 303.248px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
																		<ul class="select2-selection__rendered" id="select2-tag-container">
																			<li class="select2-selection__choice" title="Fruits &amp; Vegetables" data-select2-id="select2-data-10-bf0x"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-tag-container-choice-civ3-Fruits &amp; Vegetables"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-tag-container-choice-civ3-Fruits &amp; Vegetables">Fruits &amp; Vegetables</span></li>
																			<li class="select2-selection__choice" title="May Offers" data-select2-id="select2-data-11-82dp"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-tag-container-choice-wt9o-May Offers"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-tag-container-choice-wt9o-May Offers">May Offers</span></li>
																		</ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-tag-container" placeholder="" style="width: 0.75em;"></textarea></span>
																	</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														</div>
													</div>

													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="tag">Product Unit</label>
														<div class="col-md-12">
															<select id="product_unit" name="product_unit" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-product_unit" tabindex="-1" aria-hidden="true">
																<option value="0">Select Product Unit</option>
																<option value="Box">Box</option>
																<option value="cm">cm</option>
																<option value="Dozen">Dozen</option>
																<option value="Gram" selected="" data-select2-id="select2-data-13-en3c">Gram</option>
																<option value="KG">KG</option>
																<option value="Liter ">Liter </option>
																<option value="ML">ML</option>
																<option value="PCS">PCS</option>
																<option value="Qty">Qty</option>
															</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-12-4z76" style="width: 303.248px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-product_unit-container" aria-controls="select2-product_unit-container"><span class="select2-selection__rendered" id="select2-product_unit-container" role="textbox" aria-readonly="true" title="Gram">Gram</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														</div>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="unit_quantity">Unit Quantity</label>
														<div class="col-md-12">
															<input id="unit_quantity" name="unit_quantity" placeholder="Product unit quantity" value="500" class="form-control input-md" required="" type="number">
														</div>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="gross_quantity">Gross Quantity</label>
														<div class="col-md-12">
															<input id="gross_quantity" name="gross_quantity" placeholder="Product Gross quantity" value="500" class="form-control input-md" required="" type="number">
														</div>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="MRP">Product MRP</label>
														<div class="col-md-12">
															<input id="MRP" name="MRP" placeholder="Product MRP" value="30.00" class="form-control input-md" required="" type="number">
														</div>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="main_price">Main Price</label>
														<div class="col-md-12">
															<input id="main_price" name="main_price" placeholder="Main Price" value="25.00" class="form-control input-md" required="" type="number">
														</div>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="stock">Stock</label>
														<div class="col-md-12">
															<input id="stock" name="stock" placeholder="Stock" value="99" class="form-control input-md" required="" type="number">
														</div>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="pieces">No of Pieces</label>
														<div class="col-md-12">
															<input id="pieces" name="pieces" placeholder="No of Pieces" value="20-22" class="form-control input-md" required="" type="text">
														</div>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="serves">Serves</label>
														<div class="col-md-12">
															<input id="serves" name="serves" placeholder="No of serves" value="2-3" class="form-control input-md" required="" type="text">
														</div>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="cooking_time">Cooking time(Minutes)</label>
														<div class="col-md-12">
															<input id="cooking_time" name="cooking_time" placeholder="Cooking time" value="45 Min" class="form-control input-md" required="" type="text">
														</div>
													</div>
													<!-- Textarea -->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="description">Product Description</label>
														<div class="col-md-12">
															<textarea class="form-control" id="description" name="description" placeholder="Product Description">Baby beans are tender and fleshy with soft velvety pods, boasting a sweet-tender taste and crispy texture. Harvested when small, they serve as a main ingredient in various dishes or as an addition to savory recipes. Enjoy them in stir-fries, veg pulao, veg biryani, Chinese cuisine, soups, and more.</textarea>
														</div>
													</div>

													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="product_image">Product Image</label>
														<div class="col-md-6">
															<input type="file" id="product_image" name="product_image" class="form-control" style="position: absolute;">
														</div>
														<div class="col-md-10">
															<img src="../uploads/images/products/no-image.jpg" class="pull-right" width="50px" height="50px">
														</div>
													</div>

													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="product_image">Product Ranking</label>
														<select name="ranking" class="form-control" required="">
															<option value="" selected="" disabled="">Select Project Ranking</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3" selected="">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
															<option value="16">16</option>
															<option value="17">17</option>
															<option value="18">18</option>
															<option value="19">19</option>
															<option value="20">20</option>
															<option value="21">21</option>
															<option value="22">22</option>
															<option value="23">23</option>
															<option value="24">24</option>
															<option value="25">25</option>
															<option value="26">26</option>
															<option value="27">27</option>
															<option value="28">28</option>
															<option value="29">29</option>
															<option value="30">30</option>
															<option value="31">31</option>
															<option value="32">32</option>
															<option value="33">33</option>
															<option value="34">34</option>
															<option value="35">35</option>
															<option value="36">36</option>
															<option value="37">37</option>
															<option value="38">38</option>
															<option value="39">39</option>
															<option value="40">40</option>
															<option value="41">41</option>
															<option value="42">42</option>
															<option value="43">43</option>
															<option value="44">44</option>
															<option value="45">45</option>
															<option value="46">46</option>
															<option value="47">47</option>
															<option value="48">48</option>
															<option value="49">49</option>
															<option value="50">50</option>
															<option value="51">51</option>
															<option value="52">52</option>
															<option value="53">53</option>
															<option value="54">54</option>
															<option value="55">55</option>
															<option value="56">56</option>
															<option value="57">57</option>
															<option value="58">58</option>
															<option value="59">59</option>
															<option value="60">60</option>
															<option value="61">61</option>
															<option value="62">62</option>
															<option value="63">63</option>
															<option value="64">64</option>
															<option value="65">65</option>
															<option value="66">66</option>
															<option value="67">67</option>
															<option value="68">68</option>
															<option value="69">69</option>
															<option value="70">70</option>
															<option value="71">71</option>
															<option value="72">72</option>
															<option value="73">73</option>
															<option value="74">74</option>
															<option value="75">75</option>
															<option value="76">76</option>
															<option value="77">77</option>
															<option value="78">78</option>
															<option value="79">79</option>
															<option value="80">80</option>
															<option value="81">81</option>
															<option value="82">82</option>
															<option value="83">83</option>
															<option value="84">84</option>
															<option value="85">85</option>
															<option value="86">86</option>
															<option value="87">87</option>
															<option value="88">88</option>
															<option value="89">89</option>
															<option value="90">90</option>
															<option value="91">91</option>
															<option value="92">92</option>
															<option value="93">93</option>
															<option value="94">94</option>
															<option value="95">95</option>
															<option value="96">96</option>
															<option value="97">97</option>
															<option value="98">98</option>
															<option value="99">99</option>
															<option value="100">100</option>
															<option value="101">101</option>
															<option value="102">102</option>
															<option value="103">103</option>
															<option value="104">104</option>
															<option value="105">105</option>
															<option value="106">106</option>
															<option value="107">107</option>
															<option value="108">108</option>
															<option value="109">109</option>
															<option value="110">110</option>
															<option value="111">111</option>
															<option value="112">112</option>
															<option value="113">113</option>
															<option value="114">114</option>
															<option value="115">115</option>
															<option value="116">116</option>
															<option value="117">117</option>
															<option value="118">118</option>
															<option value="119">119</option>
															<option value="120">120</option>
															<option value="121">121</option>
															<option value="122">122</option>
															<option value="123">123</option>
															<option value="124">124</option>
															<option value="125">125</option>
															<option value="126">126</option>
															<option value="127">127</option>
															<option value="128">128</option>
															<option value="129">129</option>
															<option value="130">130</option>
															<option value="131">131</option>
															<option value="132">132</option>
															<option value="133">133</option>
															<option value="134">134</option>
															<option value="135">135</option>
															<option value="136">136</option>
															<option value="137">137</option>
															<option value="138">138</option>
															<option value="139">139</option>
															<option value="140">140</option>
															<option value="141">141</option>
														</select>
													</div>

													<!-- Text input-->
													<div class="form-group col-md-6">
														<label class="col-md-12 control-label" for="property">Product Property</label>
														<div class="col-md-12 add_new_property">
															<span class="add_property"><i class="fa fa-plus-circle"></i></span>
															<div class="rmv_cls_55">
																<input id="" name="property[]" placeholder="Product Property" value="Fiber" class="form-control input-md" required="" type="text">
																<span class="remove_property" onclick="remove_property_function('rmv_cls_55')"><i class="fa fa-minus-circle"></i></span><br>
															</div>
															<div class="rmv_cls_98">
																<input id="" name="property[]" placeholder="Product Property" value="Vitamins" class="form-control input-md" required="" type="text">
																<span class="remove_property" onclick="remove_property_function('rmv_cls_98')"><i class="fa fa-minus-circle"></i></span><br>
															</div>
															<div class="rmv_cls_11">
																<input id="" name="property[]" placeholder="Product Property" value="Minerals:" class="form-control input-md" required="" type="text">
																<span class="remove_property" onclick="remove_property_function('rmv_cls_11')"><i class="fa fa-minus-circle"></i></span><br>
															</div>
														</div>
													</div>



													<!-- Button -->
													<div class="form-group col-md-12">
														<label class="col-md-12 control-label" for="singlebutton"></label>
														<div class="col-md-12">
															<button type="submit" id="singlebutton" class="btn btn-primary">Update</button>
															<a href="products.php" class="btn btn-primary">Back</a>
														</div>
													</div>

												</fieldset>
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