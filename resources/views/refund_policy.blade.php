@extends('layout.master')
@section('content')

<main>
    <div class="container py-3">
        <div class="info-box faq-box  shadow-sm">
            <div class="row">

                <div class="col-sm-12">
                    <h4 class="fw-bold mb-2 text-primary-alt">REFUND POLICY</h4>
                </div>
                <p class="text-start fw-normal">
                    The customer can also choose to have the amount paid refunded into the account by writing to cc@freshful.in. A refund shall be initiated and the amount shall be reflecting in the customer’s bank account in 7 working days.
                </p>


            </div>
            <div class="col-sm-12 mt-4">
                <h4 class="fw-bold mb-2 text-primary-alt">CANCELLATION POLICY</h4>
            </div> 
            <p class="text-start fw-normal">
                The customer can cancel the order that has been placed before 6 hours of the start of the commencement of the slot of which the order belongs to Freshful also reserves the right to cancel an order placed by the customer in case the order cannot be fulfilled due to reasons such as unavailability of the stock, address not serviceable, etc.,
            </p>
            <p>In both the cases mentioned above, the complete amount charged shall be credited into the customer’s Bank a/c. The customer can also choose to have the amount paid refunded into the account by writing to cc@freshful.in. A refund shall be initiated and the amount shall be reflecting in the customer’s bank account in 7 working days.</p>

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