@extends('layout.master')
@section('content')
<main>

    <!-- Shop by Category  -->
    <div class="shop-category-section bg-white py-sm-5 py-3">
        <div class="container-fluid">

            <div class="swiper viewProductSwiper py-3">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/01.jpg') }}" alt="Slider 1" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/02.jpg') }}" alt="Slider 2" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/03.jpg') }}" alt="Slider 3" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/04.jpg') }}" alt="Slider 4" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/05.jpg') }}" alt="Slider 5" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/06.png') }}" alt="Slider 6" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/07.jpg') }}" alt="Slider 7" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/08.jpg') }}" alt="Slider 8" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/09.jpg') }}" alt="Slider 9" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/04.jpg') }}" alt="Slider 4" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/05.jpg') }}" alt="Slider 5" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/') }}" class="view-product-swip text-center">
                            <img src="{{ asset('assets/image/category/06.png') }}" alt="Slider 6" class="img-fluid">
                            <h6 class="fs-7 fw-bold text-black mt-2 mb-0">Chicken</h6>
                        </a>
                    </div>
                </div>


                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>



    <!-- Meat & Seafood Section -->
    <div class="best-sellers-section    my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-2 mb-1">All Products</h2>
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
                                <img src="{{ asset('assets/image/product/01.jpg') }}" alt="Product 1" class="img-fluid">
                            </div>
                            <div class="pro-card-category-btn">
                                <p class="text-white m-0">Fruits & Vegetables</p>
                            </div>
                            <div class="pro-card-item">
                                <a href="{{ url('/product_detail') }}" class="fs-5  fw-bold text-black w-full">
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


    <!-- SUBSCRIBE OUR  -->

    <div class="subscribe-section bg-primary py-3">
        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h4 class="text-white text-upparcase mb-0   ">SUBSCRIBE OUR NEWSLETTER FOR GET <br /> UPDATED WITH ALL NEW PRODUCT</h4>
                <form class="d-flex justify-content-center align-items-center w-50">
                    <div class="input-group ">

                        <!-- Email input -->
                        <input
                            type="email"
                            class="form-control py-3 rounded-0 ps-4"
                            placeholder="Enter your email"
                            aria-label="Subscriber email"
                            required>

                        <!-- Send button with icon -->
                        <button class="btn btn-theme rounded-0 px-5" type="submit">
                            <i class="bi bi-send text-white fs-3"></i>
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>

</main>

@endsection