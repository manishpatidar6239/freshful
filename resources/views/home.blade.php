@extends('layout.master')
@section('content')
<main>
    <!-- hero slider section  -->
    <div class="hero-slider">
        <div class="swiper heroSwiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a href="{{ url('/view_product') }}">
                        <img src="{{ asset('assets/image/slider/slide01.gif') }}" alt="Slider 1" class="img-fluid">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('/view_product') }}">
                        <img src="{{ asset('assets/image/slider/slide02.gif') }}" alt="Slider 2" class="img-fluid">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('/view_product') }}">
                        <img src="{{ asset('assets/image/slider/slide03.gif') }}" alt="Slider 3" class="img-fluid">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('/view_product') }}">
                        <img src="{{ asset('assets/image/slider/slide04.gif') }}" alt="Slider 4" class="img-fluid">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('/view_product') }}">
                        <img src="{{ asset('assets/image/slider/slide05.gif') }}" alt="Slider 5" class="img-fluid">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('/view_product') }}">
                        <img src="{{ asset('assets/image/slider/slide06.gif') }}" alt="Slider 6" class="img-fluid">
                    </a>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>


        </div>
    </div>

    <!-- Shop by Category  -->
    <div class="shop-category-section py-sm-5 py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h2 class="fs-2 fs-md-5  mb-sm-5 mb-2 ">Shop by Category?</h2>
                </div>
            </div>
            <div class="swiper categorySwiper py-sm-3 pt-2 pt-sm-0">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/01.jpg') }}" alt="Slider 1" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/02.jpg') }}" alt="Slider 2" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/03.jpg') }}" alt="Slider 3" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/04.jpg') }}" alt="Slider 4" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/05.jpg') }}" alt="Slider 5" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/06.png') }}" alt="Slider 6" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/07.jpg') }}" alt="Slider 7" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/08.jpg') }}" alt="Slider 8" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/09.jpg') }}" alt="Slider 9" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/04.jpg') }}" alt="Slider 4" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/05.jpg') }}" alt="Slider 5" class="img-fluid">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ url('/view_product') }}" class="category-view">
                            <img src="{{ asset('assets/image/category/06.png') }}" alt="Slider 6" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Why Freshful Section -->
    <div class="why-freshful-section pt-3 pt-sm-5 pb-3 pb-sm-5   my-sm-3" style="background-color: #fae4e482;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-2 fs-sm-1 mb-1">Why Freshful?</h2>
                    <p class='fs-6 text-muted fw-normal mb-0 mb-sm-1'>Quality you can trust, freshness you can taste</p>
                </div>
            </div>
            <!-- <div class="d-flex flex-wrap justify-content-between gap-1 align-items-center mt-3"> -->


            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 g-0 g-sm-3 mt-3">

                <div class="Freshi col d-flex justify-content-center flex-sm-row flex-column align-items-center gap-1">
                    <div class="Freshi-img">
                        <img src="{{ asset('assets/image/why/FreshlyCut.png') }}" alt="Freshly Cut" class="img-fluid">
                    </div>
                    <div class="Freshi-text">
                        <h6 class="fs-6 mb-0">Freshly Cut</h6>
                        <a href="{{ url('/why-freshful') }}" class="text-primary-alt">Know How</a>
                    </div>
                </div>
                <div class="Freshi col d-flex justify-content-center flex-sm-row flex-column align-items-center gap-1">
                    <div class="Freshi-img">
                        <img src="{{ asset('assets/image/why/FarmFreshEveryday.png') }}" alt="Freshly Cut" class="img-fluid">
                    </div>
                    <div class="Freshi-text">
                        <h6 class="fs-6 mb-0">Farm Fresh Everyday</h6>
                        <a href="{{ url('/why-freshful') }}" class="text-primary-alt">Know How</a>
                    </div>
                </div>
                <div class="Freshi col d-flex justify-content-center flex-sm-row flex-column align-items-center gap-1">
                    <div class="Freshi-img">
                        <img src="{{ asset('assets/image/why/SafeHealthy.png') }}" alt="Freshly Cut" class="img-fluid">
                    </div>
                    <div class="Freshi-text">
                        <h6 class="fs-6 mb-0">Safe & Healthy</h6>
                        <a href="{{ url('/why-freshful') }}" class="text-primary-alt">Know How</a>
                    </div>
                </div>
                <div class="Freshi col d-flex justify-content-center flex-sm-row flex-column align-items-center gap-1">
                    <div class="Freshi-img">
                        <img src="{{ asset('assets/image/why/AntibioticFree.png') }}" alt="Freshly Cut" class="img-fluid">
                    </div>
                    <div class="Freshi-text">
                        <h6 class="fs-6 mb-0">Antibiotic & Alcohol free</h6>
                        <a href="{{ url('/why-freshful') }}" class="text-primary-alt">Know How</a>
                    </div>
                </div>
                <div class="Freshi col d-flex justify-content-center flex-sm-row flex-column align-items-center gap-1">
                    <div class="Freshi-img">
                        <img src="{{ asset('assets/image/why/LocalyProduced.png') }}" alt="Freshly Cut" class="img-fluid">
                    </div>
                    <div class="Freshi-text">
                        <h6 class="fs-6 mb-0">Locally Produced</h6>
                        <a href="{{ url('/why-freshful') }}" class="text-primary-alt">Know How</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Best Sellers Section -->
    <div class="best-sellers-section pt-3 pt-sm-5 pb-3 pb-sm-5 my-sm-3" style="background-image: url('{{ asset('assets/image/food-parallax.jpg') }}')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-2 mb-1 text-white">Best Sellers</h2>
                </div>
            </div>
            <div class="swiper bestSellerSwiper py-3 px-2">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="swiper-slide">
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
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
    </div>
    <!-- Meat & Seafood Section -->
    <div class="meat-sellers-section pt-3 pt-sm-5 pb-3 pb-sm-5 my-sm-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-2 mb-1">Meat & Seafood ( * Delivery In 40 Minutes)</h2>
                </div>
            </div>
            <div class="py-3">
                <!-- Additional required wrapper -->
                <div class="row ">
                    <!-- Slides -->
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
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
    <!-- discount image section -->
    <div class="discount-image my-sm-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card">
                        <img src="{{ asset('assets/image/discount/2Zoi21745171217.jpg') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card">
                        <img src="{{ asset('assets/image/discount/tRBJI1745171232.jpg') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card">
                        <img src="{{ asset('assets/image/discount/XQfQH1745171289.jpg') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card">
                        <img src="{{ asset('assets/image/discount/2Zoi21745171217.jpg') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card">
                        <img src="{{ asset('assets/image/discount/nzsBL1745171179.jpg') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card">
                        <img src="{{ asset('assets/image/discount/byj9c1745171277.jpg') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- shop by category section -->
    <div class="cat-images-section my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-2 mb-1">Shop By Category</h2>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3 mt-3">
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/9pjlT1745076971.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Chicken</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/Mh2nU1663771866.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Mutton</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/xSsN51663771855.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Fish & Seafood</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/Sn6ri1675763286.png') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Buff</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/nGf8P1663771877.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Ready to Cook</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/kEhor1675854474.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Combo</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/dGyZy1663772162.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Prawns</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/nzfqc1663772022.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Kababs & Tandoor</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/77GTp1663771934.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Exotic</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="cat-card text-center">
                        <a href="{{ url('/product') }}">
                            <img src="{{ asset('assets/image/other/jP3Jw1675854486.jpeg') }}" alt="Discount" class="img-fluid ">
                        </a>
                        <h6 class="mb-0 fs-5 mt-2 fw-bold">Offal's</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- uniqid image section -->
    <div class="unique-images-section my-5">
        <div class="container-fluid">
            <div class="row g-3 g-sm-3 g-md-3 g-lg-3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="unique-card">
                        <img src="{{ asset('assets/image/other/2.png') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="unique-card">
                        <img src="{{ asset('assets/image/other/3.png') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="unique-card">
                        <img src="{{ asset('assets/image/other/Fl5od1667877499.png') }}" alt="Discount" class="img-fluid">
                    </div>
                </div>



            </div>
        </div>

    </div>

    <!-- our app section  -->
    <div class="ourapp-section">
        <div class="container-fluid  ">
            <div class="our-app-section  ">
                <div class="container">
                    <div class="row align-items-center g-3 g-sm-3 g-md-3 g-lg-3">
                        <div class="col-sm-12 col-md-6 col-lg-7">
                            <h1 class="our-app-text fw-bold text-left">Enjoy your best <br />
                                Experience with our app</h3>
                                <img src="{{ asset('assets/image/other/app_stroe.png') }}" alt="app_stroe" class="img-fluid app_stroe mt-sm-3 mt-md-5 mt-lg-5">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5">

                            <div class="our-app-images-card">
                                <img src="{{ asset('assets/image/other/Apple-iPhone-11-PNG-Image.png') }}" alt="Discount" class="img-fluid our-app-images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- SUBSCRIBE OUR  -->

    <div class="subscribe-section bg-primary py-3">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">

                <h4 class="text-white text-upparcase mb-0   ">SUBSCRIBE OUR NEWSLETTER FOR GET <br /> UPDATED WITH ALL NEW PRODUCT</h4>
                <form class="d-flex justify-content-center align-items-center w-sm-100 w-md-50">
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