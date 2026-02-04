@extends('layout.master')
@section('content')
<style>
    .form-icon {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        color: #6c757d;
        font-size: 1.2rem;
        z-index: 5;
    }

    .textarea-icon {
        top: 25px;
        transform: none;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #0d6efd;
    }
</style>

<main>
    <div class="container py-3">
        <div class="row ">
            <div class="col-lg-12">
                <div class="h-100">
                    <h2 class="fw-normal mb-3 mt-3 text-center text-decoration-underline">Contact Us </h2>
                    <p class="text-center text-muted fs-7">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>

                </div>
            </div>

        </div>
        <div class="info-box mt-4  info-contact shadow-sm">
            <div class="row g-4 pt-4">
                <div class="col-sm-12 col-mg-6 col-lg-6">
                    <!-- Name -->
                    <div class="form-floating mb-3 position-relative">
                        <i class="bi bi-person form-icon"></i>
                        <input type="text" class="form-control ps-5" id="name" placeholder="Enter your name">
                        <label for="name">Your Name</label>
                    </div>
                </div>
                <div class="col-sm-12 col-mg-6 col-lg-6">
                    <!--Last Name -->
                    <div class="form-floating mb-3 position-relative">
                        <i class="bi bi-person form-icon"></i>
                        <input type="text" class="form-control ps-5" id="lname" placeholder="Enter your last name">
                        <label for="lname">Last Name</label>
                    </div>
                </div>
                <div class="col-sm-12 col-mg-6 col-lg-6">

                    <!-- Email -->
                    <div class="form-floating mb-3 position-relative">
                        <i class="bi bi-envelope form-icon"></i>
                        <input type="email" class="form-control ps-5" id="email" placeholder="Email Address">
                        <label for="email">Email Address</label>
                    </div>
                </div>
                <div class="col-sm-12 col-mg-6 col-lg-6">
                    <!-- Subject -->
                    <div class="form-floating mb-3 position-relative">
                        <i class="bi bi-phone form-icon"></i>
                        <input type="tel" class="form-control ps-5" id="phone" placeholder="Enter your mobile number">
                        <label for="subject">Mobile Number</label>
                    </div>
                </div>
                <div class="col-sm-12 col-mg-12 col-lg-12">
                    <!-- Message -->
                    <div class="form-floating mb-4 position-relative">
                        <i class="bi bi-pencil form-icon textarea-icon"></i>
                        <textarea class="form-control ps-5" placeholder="Message" id="message" style="height: 120px"></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
            </div>

            <div class="w-100 text-center mx-auto">
                <!-- Button -->
                <button class="btn btn-primary w-auto rounded-pill py-2 mx-auto px-3 text-center">
                    <i class="bi bi-send me-2"></i> Send Message
                </button>
            </div>



            <div class="row contact-info-card ">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card text-center py-4">
                        <div class="icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <h6 class="fs-7 mb-2 mt-3">Visit Us</h6>
                        <p class="text-black-50 fs-7 mb-0">Indiranagar</p>
                        <p class="text-black-50 fs-7 mb-0">Bangalore-560038,Karnataka</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card text-center py-4">
                        <div class="icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <h6 class="fs-7 mb-2 mt-3">Call Us</h6>
                        <p class="text-black-50 fs-7 mb-0">+91-8124200242</p>
                        <p class="text-black-50 fs-7 mb-0">Mon - Sat: 9AM - 6PM</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="discount-card text-center py-4">
                        <div class="icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <h6 class="fs-7 mb-2 mt-3">Email Us</h6>
                        <p class="text-black-50 fs-7 mb-0">talktous@freshful.in</p>
                        <p class="text-black-50 fs-7 mb-0">We'll reply within 24 hours</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

@endsection