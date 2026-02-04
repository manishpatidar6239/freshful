@extends('layout.master')
@section('content')

<main>
    <div class="container py-3">
        <div class="info-box faq-box  shadow-sm">
            <div class="row">

                <div class="col-sm-12">
                    <h2 class="fw-bold mb-3 text-decoration-underline">FAQs</h2>
                </div>
                <p class="text-start fw-normal">
                    Freshful is your personal go-to Fresh brand. For an optimal experience with Freshful, please read through our FAQs.
                    If you have any queries, please reach out to us at:
                    <a href="mailto:talktous@freshful.in">talktous@freshful.in</a>
                    (8 AM to 9 PM - Monday to Sunday)
                </p>

                <div class="accordion" id="freshfulFAQ">

                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Is there GST?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                All our prices are inclusive of applicable Goods and Service Tax.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Am I entitled to Free Delivery while promotional offers are running?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                Delivery charges are extra (unless specified otherwise). Offers mentioned will be at a product level only.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Will I be able to order more than one of the same items?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                Yes, you will be able to order more than one of the same items. Simply change the numerical value in your shopping cart to your desired quantity.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                Why are the items in my shopping cart no longer available?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                Items will continue to appear in your cart until you’ve removed them or checked out. Make sure you are logged in to your Freshful Account. Your name will appear on the upper right side of the screen. If you are not logged in, do so by clicking the 'SIGN IN' button. If you are logged into your account and if you have not checked out or removed the items from your bag, the items may have been sold out.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                Is shopping at https://freshful.in secure?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                Yes, we have received the Global SSL certification that ensures all the payments made to https://freshful.in/ are secure.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                How do I place my order?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                You can place an order from our Mobile App, Website
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseCani">
                                Can I pre-book an order?
                            </button>
                        </h2>
                        <div id="collapseCani" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                Yes! You can pre-book and schedule delivery for the next day.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseguarantee">
                                What is the guarantee that you provide Halal and hygienic meat?
                            </button>
                        </h2>
                        <div id="collapseguarantee" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                We have our own in-house panel of Muftis and a team of Food Scientists and veterinarians to ensure that all our products are certified Halal and 100% safe for consumption. Freshful has its own microbiological testing labs, ensuring meat is properly check and is approved to be consumed by our customers.
                            </div>
                        </div>
                    </div>


                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                                What if I am not satisfied with the purchase?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                If you are unhappy with your purchase for any reason, just return it with packaging with invoice and get your money back or the Item is replaced! No questions asked!
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseProvide">
                                Is the items you provide fresh?
                            </button>
                        </h2>
                        <div id="collapseProvide" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                All our items reach the stores within 24 hrs of slaughtering and fram after going through all the quality checks, in a temperature-controlled van so it always reaches you FRESH and without any pollutants as the truck in sealed and temperature is maintained to prevent degradation. This process enables us to ensure maximum hygiene, and freshness and this helps us to retain the taste of items!
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTrimmed">
                                Is the items you provide clean and trimmed?
                            </button>
                        </h2>
                        <div id="collapseTrimmed" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                We do not charge you for any excess for the wastage. We weigh the items after clean them. Almost 10%-12% wastage is removed so your item more compared to others, giving you 100% value for your money!
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseDelivery">
                                Do you have home delivery service?
                            </button>
                        </h2>
                        <div id="collapseDelivery" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                Click https://freshful.in/ to get the freshest product delivered to your door in 60 minutes or less! The same excellent quality of items straight from our store – to your door!
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseCredentials">
                                What are Freshful credentials?
                            </button>
                        </h2>
                        <div id="collapseCredentials" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                Freshful is the star brand of Freshful digital Foods - the largest Fresh exporter of India. We export Meat & Fruits & Vegetables to African countries, in GCC including Kingdom of Saudi Arabia.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed  fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapsePure">
                                Is the Items you provide pure for sure?
                            </button>
                        </h2>
                        <div id="collapsePure" class="accordion-collapse collapse" data-bs-parent="#freshfulFAQ">
                            <div class="accordion-body">
                                Freshful commits to offer its customers pure Halal meat and fresh Items with no contaminants and pollutants.
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
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h6 class="text-white text-upparcase mb-0   ">SUBSCRIBE OUR NEWSLETTER FOR GET <br /> UPDATED WITH ALL NEW PRODUCT</h6>
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