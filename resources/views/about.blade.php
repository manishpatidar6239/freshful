@extends('layout.master')
@section('content')

<main>
    <div class="container py-3">
        <div class="info-box  shadow-sm">
            <div class="row g-4">
                <!-- Product Info -->
                <div class="col-lg-12">
                    <div class="h-100">

                        <h2 class="fw-bold mb-3 text-decoration-underline">About Freshful</h2>
                        <p>Freshful is a fresh produce delivery company that is dedicated to providing our customers with the highest quality and freshest products. We are passionate about offering a diverse selection of fresh meat &amp; seafood, fresh fruits &amp; vegetables, and fresh dairy products that are completely natural and healthy.</p>

                        <p>At Freshful, we believe that everyone deserves access to fresh and nutritious food. That's why we work hard to source our products from the best suppliers and farmers in the country. Our commitment to quality and compassion is reflected in every aspect of our business.</p>

                        <p>With our easy-to-use online store, you can conveniently order from your smart phone or laptop and enjoy our fresh products in no time. We take pride in our fast and reliable delivery services, ensuring that your order arrives at your doorstep within 60 minutes in hygienic, food-grade packing that maintains the freshness and quality of your products.</p>

                        <p>•Whether you are a busy professional, a parent, or someone who simply values the importance of fresh, healthy food, Freshful is the perfect choice for you. We are committed to serving you the best of fresh and making your shopping experience easy and enjoyable. Try Freshful today and discover the difference!</p>

                        <p>Freshful products include:</p>

                        <p>• Fresh Mutton, Chicken, Fish &amp; Seafood, Prawn, Ready to Cook, Cold Cuts, Kababs &amp; Tandoor Organic Vegetables, Cut &amp; Sanitized Vegetables</p>

                        <p>• Fresh Vegetables - Cut Vegetables, &amp; Exotic Vegetables</p>

                        <p>• Fresh Fruits - Cut Fruits &amp; Exotic Fruit</p>

                        <p>• Dairy &amp; Eggs</p>

                        <p>• Snacks and more!</p>

                        <p>Join us on our mission to provide the freshest and healthiest food products to your doorstep. Order now from your smart phone or your laptop and enjoy our diverse selection of meat &amp; seafood, fresh fruits &amp; vegetables, dairy &amp; dairy products, snacks, and more. Experience the joy of eating fresh, healthy, and delicious food with Freshful.</p>
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