<footer id="footer" class="footer mt-5">
    <div class="container-fluid container-xl">
        <div class="row row-cols-lg-4 row-cols-md-4 row-cols-1">

            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="mb-2">
                    <img src="{{ asset('assets/image/logo.png') }}" alt="Logo" class="img-fluid logo-footer">
                </div>
                <div style="max-width: 80%;">
                    <h6 class="fw-bolder mb-2 fs-6">FRESHFUL DIGITAL FOODS (OPC) PRIVATE LIMITED</h6>
                    <p class="text-left fs-7 lh-1">Freshful means ‘freshness’. We measure ourselves in terms of the customer delight delivered, staying true to our values of quality, compassion, and innovation .</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 mt-5">
                <div class="row row-cols-lg-3 row-cols-md-3 row-cols-1">
                    <div class="col ps-lg-4">
                        <div class="mb-2">
                            <h6 class="fw-bolder fs-6 mb-2">Navigation</h6>
                            <ul class="list-unstyled">
                                <li class="mb-1"><a class="fs-7" href="{{ url('/') }}">Home</a></li>
                                <li class="mb-1"><a class="fs-7" href="{{ url('/why-freshful') }}">Why us?</a></li>
                                <li class="mb-1"><a class="fs-7" href="{{ url('/') }}">Certificate</a></li>
                                <li class="mb-1"><a class="fs-7" href="{{ url('/franchisee') }}">Franchise</a></li>
                                <li class="mb-1"><a class="fs-7" href="{{ url('/about') }}">About us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="fw-bolder fs-6 mb-2">Policies</h6>
                        <ul class="list-unstyled">
                            <li class="mb-1"><a class="fs-7" href="{{ url('/privacypolicy') }}">Privacy policy</a></li>
                            <li class="mb-1"><a class="fs-7" href="{{ url('/shipping-policy') }}">Shipping policy</a></li>
                            <li class="mb-1"><a class="fs-7" href="{{ url('/terms') }}">Terms & Condition</a></li>
                            <li class="mb-1"><a class="fs-7" href="{{ url('/refund_policy') }}">Refund Policy</a></li>
                            <li class="mb-1"><a class="fs-7" href="{{ url('/faq') }}">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h6 class="fw-bolder fs-6 mb-3">Follow us on social media</h6>
                        <div class="d-flex gap-lg-2 gap-1">
                            <a href="{{ url('/') }}" class="btn btn-outline-primary rounded-1"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="{{ url('/') }}" class="btn btn-outline-primary rounded-1"><i class="bi bi-twitter fs-5"></i></a>
                            <a href="{{ url('/') }}" class="btn btn-outline-primary rounded-1"><i class="bi bi-instagram fs-5"></i></a>
                            <a href="{{ url('/') }}" class="btn btn-outline-primary rounded-1"><i class="bi bi-youtube fs-5"></i></a>
                        </div>
                        <h6 class="fw-bolder fs-6 mt-3 mb-1">Service center helpline time</h6>
                        <p class="fs-7">Sat-Friday, 10:00 AM-9:00 PM</p>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <p class="text-end fs-8 text-muted mb-0">© {{ date('Y') }} Freshful Digital Foods (OPC) Private Limited, Copyright, All rights reserved.</p>
            </div>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script>

</script>

<!-- Main JS File -->
<!-- <script src="{{ url('assets/js/main.js')}}"></script> -->
<script src="{{ url('assets/js/slider.js')}}"></script>
<script>
    // Optional: Add sticky header effect with smooth animation
    window.addEventListener('scroll', function() {
        const header = document.getElementById('myHeader');
        if (header) {
            if (window.scrollY > 100) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const button = document.getElementById("open-location");
        const collapseTarget = document.getElementById("location-dropdown");

        const bsCollapse = new bootstrap.Collapse(collapseTarget, {
            toggle: false // prevent auto toggle on init
        });

        button.addEventListener("click", function() {
            bsCollapse.toggle();
        });
    });
</script>
