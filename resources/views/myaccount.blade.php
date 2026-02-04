@extends('layout.master')
@section('content')

<main>
    <section class="section myaccount-section py-5">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-4">
                    <div class="d-flex align-items-center">
                        <img src="https://shreethemes.in/orderit/layouts/assets/images/client/1.jpg" class="avatar avatar-md-md rounded-circle" alt="">
                        <div class="ms-3">
                            <h6 class="text-muted mb-0">Hello,</h6>
                            <h5 class="mb-0">Calvin Carlo</h5>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-8 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-muted mb-0">We offer flexible delivery options tailored to your needs—whether it's urgent same-day supplies, or specialty products.</p>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <ul class="nav nav-pills nav-justified flex-column rounded-6 shadow p-3 mb-0" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-6 p-" id="dashboard" data-bs-toggle="pill" href="#dash" role="tab" aria-controls="dash" aria-selected="false" tabindex="-1">
                                <div class="text-start">
                                    <h6 class="mb-0"><i class="ri-dashboard-line h5 align-middle me-2 mb-0"></i> Dashboard</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2" role="presentation">
                            <a class="nav-link rounded-6 p- active" id="order-history" data-bs-toggle="pill" href="#orders" role="tab" aria-controls="orders" aria-selected="true">
                                <div class="text-start">
                                    <h6 class="mb-0"><i class="ri-list-check h5 align-middle me-2 mb-0"></i> Orders</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2" role="presentation">
                            <a class="nav-link rounded-6 p-" id="download" data-bs-toggle="pill" href="#down" role="tab" aria-controls="down" aria-selected="false" tabindex="-1">
                                <div class="text-start">
                                    <h6 class="mb-0"><i class="ri-download-line h5 align-middle me-2 mb-0"></i> Downloads</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2" role="presentation">
                            <a class="nav-link rounded-6 p-" id="addresses" data-bs-toggle="pill" href="#address" role="tab" aria-controls="address" aria-selected="false" tabindex="-1">
                                <div class="text-start">
                                    <h6 class="mb-0"><i class="ri-road-map-line h5 align-middle me-2 mb-0"></i> Addresses</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2" role="presentation">
                            <a class="nav-link rounded-6 p-" id="account-details" data-bs-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="false" tabindex="-1">
                                <div class="text-start">
                                    <h6 class="mb-0"><i class="ri-user-line h5 align-middle me-2 mb-0"></i> Account Details</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2" role="presentation">
                            <a class="nav-link rounded-6 p-" role="tab" href="{{ url('/myaccount') }}" aria-selected="false" tabindex="-1">
                                <div class="text-start">
                                    <h6 class="mb-0"><i class="ri-logout-circle-r-line h5 align-middle me-2 mb-0"></i> Logout</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                    </ul><!--end nav pills-->
                </div><!--end col-->

                <div class="col-md-8 col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade shadow-sm rounded-6 p-4" id="dash" role="tabpanel" aria-labelledby="dashboard">
                            <h6 class="text-muted fw-normal">Hello <span class="text-dark">calvin_carlo</span> (not <span class="text-dark">calvin_carlo</span>? <a href="javascript:void(0)" class="text-danger">Log out</a>)</h6>

                            <h6 class="text-muted fw-normal mb-0">From your account dashboard you can view your <a href="javascript:void(0)" class="text-danger">recent orders</a>, manage your <a href="javascript:void(0)" class="text-danger">shipping and billing addresses</a>, and <a href="javascript:void(0)" class="text-danger">edit your password and account details</a>.</h6>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade shadow rounded-6 p-4 active show" id="orders" role="tabpanel" aria-labelledby="order-history">
                            <div class="table-responsive bg-white   rounded-6">
                                <table class="table mb-0 table-center table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom fw-medium">Order no.</th>
                                            <th scope="col" class="border-bottom fw-medium">Date</th>
                                            <th scope="col" class="border-bottom fw-medium">Status</th>
                                            <th scope="col" class="border-bottom fw-medium">Total</th>
                                            <th scope="col" class="border-bottom fw-medium">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="fw-normal">7107</th>
                                            <td class="fw-normal">1st November 2021</td>
                                            <td class="text-success fw-normal">Delivered</td>
                                            <td class="fw-normal">$ 320 <span class="text-muted">for 2items</span></td>
                                            <td class="fw-normal"><a href="javascript:void(0)" class="text-primary">View <i class="ri-arrow-right-line"></i></a></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" class="fw-normal">8007</th>
                                            <td class="fw-normal">4th November 2021</td>
                                            <td class="text-muted fw-normal">Processing</td>
                                            <td class="fw-normal">$ 800 <span class="text-muted">for 1item</span></td>
                                            <td class="fw-normal"><a href="javascript:void(0)" class="text-primary">View <i class="ri-arrow-right-line"></i></a></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" class="fw-normal">8008</th>
                                            <td class="fw-normal">4th November 2021</td>
                                            <td class="text-danger fw-normal">Canceled</td>
                                            <td class="fw-normal">$ 800 <span class="text-muted">for 1item</span></td>
                                            <td class="fw-normal"><a href="javascript:void(0)" class="text-primary">View <i class="ri-arrow-right-line"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade shadow rounded-6 p-4" id="down" role="tabpanel" aria-labelledby="download">
                            <div class="table-responsive bg-white   ">
                                <table class="table mb-0 table-center table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-bottom fw-medium">Product Name</th>
                                            <th scope="col" class="border-bottom fw-medium">Description</th>
                                            <th scope="col" class="border-bottom fw-medium">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="fw-normal">Quick heal</th>
                                            <td class="text-muted fw-normal">It is said that song composers of the past <br> used dummy texts as lyrics when writing <br> melodies in order to have a 'ready-made' <br> text to sing with the melody.</td>
                                            <td class="text-success fw-normal">Downloaded</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade shadow rounded-6 p-4" id="address" role="tabpanel" aria-labelledby="addresses">
                            <h6 class="text-muted fw-normal mb-0">The following addresses will be used on the checkout page by default.</h6>

                            <div class="row">
                                <div class="col-lg-6 mt-4 pt-2">
                                    <div class="d-flex align-items-center mb-4 justify-content-between">
                                        <h5 class="mb-0 fw-medium">Billing Address:</h5>
                                        <a href="javascript:void(0)" class="text-primary h5 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"><i class="ri-edit-line align-middle"></i></a>
                                    </div>
                                    <div class="pt-4 border-top">
                                        <p class="h6">Calvin Carlo</p>
                                        <p class="h6 text-muted fw-normal">C/54 Northwest Freeway, </p>
                                        <p class="h6 text-muted fw-normal">Suite 558,</p>
                                        <p class="h6 text-muted fw-normal">Houston, USA 485</p>
                                        <p class="h6 text-muted fw-normal mb-0">+123 897 5468</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-4 pt-2">
                                    <div class="d-flex align-items-center mb-4 justify-content-between">
                                        <h5 class="mb-0 fw-medium">Shipping Address:</h5>
                                        <a href="javascript:void(0)" class="text-primary h5 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"><i class="ri-edit-line align-middle"></i></a>
                                    </div>
                                    <div class="pt-4 border-top">
                                        <p class="h6">Calvin Carlo</p>
                                        <p class="h6 text-muted fw-normal">C/54 Northwest Freeway, </p>
                                        <p class="h6 text-muted fw-normal">Suite 558,</p>
                                        <p class="h6 text-muted fw-normal">Houston, USA 485</p>
                                        <p class="h6 text-muted fw-normal mb-0">+123 897 5468</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade shadow rounded-6 p-4" id="account" role="tabpanel" aria-labelledby="account-details">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-normal">First Name</label>
                                            <div class="form-icon position-relative">
                                                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y ms-3 fs-6"></i>
                                                <input name="name" id="first-name" type="text" class="form-control ps-5" value="Calvin">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-normal">Last Name</label>
                                            <div class="form-icon position-relative">
                                                <i class="ri-user-follow-line icons position-absolute top-50 start-0 translate-middle-y ms-3 fs-6"></i>
                                                <input name="name" id="last-name" type="text" class="form-control ps-5" value="Carlo">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-normal">Your Email</label>
                                            <div class="form-icon position-relative">
                                                <i class="ri-mail-line icons position-absolute top-50 start-0 translate-middle-y ms-3 fs-6"></i>
                                                <input name="email" id="email" type="email" class="form-control ps-5" value="calvincarlo@gmail.com">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-normal">Display Name</label>
                                            <div class="form-icon position-relative">
                                                <i class="ri-shield-user-line icons position-absolute top-50 start-0 translate-middle-y ms-3 fs-6"></i>
                                                <input name="name" id="display-name" type="text" class="form-control ps-5" value="calvin_carlo">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 mt-2 mb-0">
                                        <button class="btn btn-primary">Save Changes</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>

                            <h5 class="mt-4">Change password :</h5>
                            <form>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-normal">Old password :</label>
                                            <div class="form-icon position-relative">
                                                <i class="ri-key-line icons position-absolute top-50 start-0 translate-middle-y ms-3 fs-6"></i>
                                                <input type="password" class="form-control ps-5" placeholder="Old password" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-normal">New password :</label>
                                            <div class="form-icon position-relative">
                                                <i class="ri-key-line icons position-absolute top-50 start-0 translate-middle-y ms-3 fs-6"></i>
                                                <input type="password" class="form-control ps-5" placeholder="New password" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-normal">Re-type New password :</label>
                                            <div class="form-icon position-relative">
                                                <i class="ri-key-line icons position-absolute top-50 start-0 translate-middle-y ms-3 fs-6"></i>
                                                <input type="password" class="form-control ps-5" placeholder="Re-type New password" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 mt-2 mb-0">
                                        <button class="btn btn-primary">Save Password</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div><!--end teb pane-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
</main>

@endsection