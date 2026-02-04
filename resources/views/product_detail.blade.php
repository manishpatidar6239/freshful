@extends('layout.master')
@section('content')

<main>



    <div class="container-fluid py-3">

        <!-- Breadcrumb -->
        <nav class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Fresh Vegetables</a></li>
                <li class="breadcrumb-item active">Cabbage</li>
            </ol>
        </nav>
        <div class="info-box  shadow-sm">


            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="position-relative product-image shadow-sm">
                        <span class="badge bg-danger product-badge">17% OFF</span>
                        <img src="{{ asset('assets/image/product/01.jpg') }}"
                            class="img-fluid w-100 h-100"
                            alt="Cabbage">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6">
                    <div class="h-100">

                        <h2 class="fw-bold mb-2">Fresh Green Cabbage</h2>
                        <p class="text-muted mb-3">Organic • Farm Fresh • Premium Quality</p>

                        <div class="mb-3">
                            <span class="price"><span class="fs-6">M.R.P</span> ₹350.00 </span>
                            <span class="old-price ms-2">₹380.00</span>
                        </div>

                        <p class="mb-4">
                            Cabbage is a crisp and nutritious leafy vegetable rich in fiber,
                            Vitamin C, and Vitamin K. Perfect for salads, stir-fries, soups,
                            and pickling.
                        </p>

                        <!-- Highlights -->
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="feature-pill">🥬 Fiber Rich</span>
                            <span class="feature-pill">🍊 Vitamin C</span>
                            <span class="feature-pill">🛡️ Vitamin K</span>
                            <span class="feature-pill">🔥 Low Calories</span>
                        </div>

                        <!-- Quantity + Actions -->
                        <div class="row align-items-center g-3">
                            <div class="col-md-4">
                                <label class="form-label">Quantity</label>
                                <input type="number" class="form-control" value="1" min="1">
                            </div>
                            <div class="col-md-4 d-grid gap-2">
                                <label class="form-label d-none d-sm-block">&nbsp;</label>
                                <button class="btn btn-danger  ">Add to Cart</button>
                            </div>
                            <div class="col-md-4 d-grid gap-2">
                                <label class="form-label d-none d-sm-block">&nbsp;</label>
                                <button class="btn btn-outline-secondary ">Add to Compare</button>
                            </div>
                        </div>
                        <hr class="my-3">

                        <!-- Extra Info -->
                        <div class="row text-left">
                            <div class="col text-center">
                                <small class="text-muted d-block">Cooking Time</small>
                                <strong>45 mins</strong>
                            </div>
                            <div class="col text-center">
                                <small class="text-muted d-block">Service</small>
                                <strong>2-3</strong>
                            </div>
                            <div class="col text-center">
                                <small class="text-muted d-block">Net Weight</small>
                                <strong>500 g</strong>
                            </div>
                            <div class="col text-center">
                                <small class="text-muted d-block">Pieces</small>
                                <strong>1</strong>
                            </div>
                        </div>
                        <hr class="my-3">


                        <div class="w-100 text-end mt-2">
                            <p class="fs-7 text-end text-muted mb-0">Available in <b>90 minutes</b> and for <b>Pre-Order</b> </p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Best Sellers Section -->
    <div class="best-sellers-section pt-5 pb-5   my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-2 mb-1">Meat & Seafood </h2>
                </div>
            </div>
            <div class="py-3">
                <!-- Additional required wrapper -->
                <div class="row ">
                    <!-- Slides -->
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="pro-card">
                            <div class="pro-card-img">
                                <a href="{{ url('/product_detail') }}">
                                <img src="{{ asset('assets/image/product/01.jpg') }}" alt="Product 1" class="img-fluid">
                                </a>
                            </div>
                            <div class="pro-card-category-btn">
                                <p class="text-white m-0">Fruits & Vegetables</p>
                            </div>
                            <div class="pro-card-item">
                                <a href="#" class="fs-5  fw-bold text-black w-full">
                                    Apple Golden Fuji
                                </a>
                                <p class="mb-0 text-black-50 fw-normal text-truncate   fs-6" style="max-width:350px;">Chicken Breast Boneless is a meatier cut sourced from the br...</p>
                                <div class="d-flex justify-content-start align-items-center gap-2 mt-2">
                                    <img src="{{ asset('assets/image/product/weight.png') }}" alt="weight" class="img-fluid pro-weight">
                                    <p class="text-muted fs-6 mb-0 text-body">500 Gram</p>
                                </div>

                                <div class="pro-card-price d-flex justify-content-between align-items-end mt-4">
                                    <div class=" d-flex justify-content-center align-items-end gap-3">
                                        <div>
                                            <p class="text-muted fs-8 mb-0 text-black-50 text-decoration-line-through">₹ 250.00</p>
                                            <h4 class="fs-5 m-0 text-primary">MRP ₹ 299.00</h4>
                                        </div>
                                        <h5 class="fs-5 mb-0 text-success">17% off</h5>
                                    </div>
                                    <a href="{{ url('/') }}" class="btn btn-primary fs-8 fw-bold" style="border-radius: 5px;">Add to Cart</a>
                                </div>
                                <div class="pro-card-footer border-top py-1 mt-2 d-flex justify-content-center align-items-center gap-2">
                                    <img src="{{ asset('assets/image/product/delivery_boy.png') }}" alt="weight" class="img-fluid pro-delivery-boy">
                                    <p class="m-0 fs-6">Today 06PM - 07PM</p>
                                </div>
                            </div>
                        </div>
                </div>
                @endfor
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <button class="btn btn-primary-alt lh-2 pb-2 px-3" style="border-radius: 50px;">view more</button>
                </div>
            </div>
        </div>

    </div>
    </div>


</main>

@endsection