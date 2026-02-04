@extends('layout.master')
@section('content')

<main class="py-3">
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-8">
                <div class="offer-dedicated-body-left">

                    <div class="bg-white rounded shadow-sm p-4 mb-4">
                        <h4 class="mb-1">Choose a delivery address</h4>
                        <h6 class="mb-3 text-black-50">Multiple addresses in this location</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-white card addresses-item mb-4 border border-success">
                                    <div class="gold-members p-4">
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-home icofont-3x"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1 text-black">Home</h6>
                                                <p class="text-black">876/5, Amreckan Tej, Ludhiana, Punjab 141002, India
                                                </p>
                                                <p class="mb-0 text-black font-weight-bold"><a class="btn btn-sm btn-success mr-2" href="#">
                                                        DELIVER HERE</a>
                                                    <span>30MIN</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white card addresses-item mb-4">
                                    <div class="gold-members p-4">
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1 text-secondary">Work</h6>
                                                <p>NCC, Model Town Rd Town, Ludhiana, Punjab 141002, India
                                                </p>
                                                <p class="mb-0 text-black font-weight-bold"><a class="btn btn-sm btn-secondary mr-2" href="#">
                                                        DELIVER HERE</a>
                                                    <span>40MIN</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-white card addresses-item">
                                    <div class="gold-members p-4">
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1 text-secondary">Other</h6>
                                                <p>Delhi Bypass Rd, Jawaddi Taksal, Ludhiana, Punjab 141002, India
                                                </p>
                                                <p class="mb-0 text-black font-weight-bold"><a class="btn btn-sm btn-secondary mr-2" href="#">
                                                        DELIVER HERE</a>
                                                    <span>45MIN</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white card addresses-item">
                                    <div class="gold-members p-4">
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1 text-secondary">Other</h6>
                                                <p>Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India
                                                </p>
                                                <p class="mb-0 text-black font-weight-bold"><a data-toggle="modal" data-target="#add-address-modal" class="btn btn-sm btn-primary mr-2" href="#"> ADD NEW
                                                        ADDRESS</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card order-card bg-white shadow-sm  sticky-sidebar">
                    <!-- Item -->
                    <div class="card-body ">

                        <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                            <div>
                                <div class="d-flex align-items-center  gap-2 mb-2">
                                    <span class="bg-accent p-1 text-center d-flex align-items-center justify-content-center " style="border-radius: 5px; width: 25px;height: 25px;">1</span>
                                    <h6 class="mb-0">Cabbage</h6>
                                </div>
                                <span class="badge bg-light text-dark border">500 Gram</span>
                                <span class="text-danger fw-bold ms-2">₹50</span>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <button class="btn btn-red qty-btn">−</button>
                                <span>1</span>
                                <button class="btn btn-red qty-btn">+</button>
                            </div>
                        </div>



                        <!-- Bill Details -->
                        <h6 class="fw-bold">BILL DETAILS</h6>

                        <div class="d-flex justify-content-between mt-1 pb-1 border-bottom ">
                            <span class="fs-7">Subtotal</span>
                            <span class="fs-7">₹50</span>
                        </div>
                        <div class="d-flex justify-content-between mt-1 pb-1 border-bottom">
                            <span class="fs-7">Delivery Charge</span>
                            <span class="fs-7">₹0</span>
                        </div>
                        <div class="d-flex justify-content-between mt-1 pb-1 border-bottom">
                            <span class="fs-7">Discount</span>
                            <span class="fs-7">₹0</span>
                        </div>



                        <div class="d-flex justify-content-between fw-bold mt-2">
                            <span>Total</span>
                            <span class="text-primary fs-6">₹50</span>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="p-3 total-bar d-flex card-footer shadow-sm justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold fs-5">Total : <span class="text-primary fs-4">₹50</span></h5>
                        <a href="{{ url('/checkout') }}" class="btn btn-primary py-2 fw-bold">
                         Checkout
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@endsection