@extends('layouts.vertical', ['page_title' => 'Pricing', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Pricing</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Pricing</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <div class="col-xxl-10">

                <!-- Pricing Title-->
                <div class="text-center">
                    <h3 class="mb-2">Our <b>Plans</b></h3>
                    <p class="text-muted">
                        We have plans and prices that fit your business perfectly. Make your <br> client site a success with our products.
                    </p>
                </div>

                <div class="row mt-4">

                    <!--Pricing Column-->
                    <article class="pricing-column col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-3 text-center">
                                    <h3 class="text-primary text-uppercase fw-normal fs-16 mb-3">Basic</h3>
                                    <h2 class="display-6 text-dark fw-normal mb-2">$19</h2>
                                    <div class="text-muted fs-13">Per Month</div>
                                </div>
                                <ul class="d-flex flex-column gap-3 list-unstyled text-center p-3 mb-3">
                                    <li>5 Projects</li>
                                    <li>1 GB Storage</li>
                                    <li>No Domain</li>
                                    <li>1 User</li>
                                    <li>24x7 Support</li>
                                </ul>

                                <div class="text-center mb-3">
                                    <a href="#" class="btn btn-bordered-success btn-success rounded-pill waves-effect waves-light">Signup Now</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!--Pricing Column-->
                    <article class="pricing-column col-xl-3 col-md-6">
                        <div class="ribbon"><span>POPULAR</span></div>
                        <div class="card">
                            <div class="card-body">
                                <div class="p-3 text-center">
                                    <h3 class="text-primary text-uppercase fw-normal fs-16 mb-3">Premium</h3>
                                    <h2 class="display-6 text-dark fw-normal mb-2">$29</h2>
                                    <div class="text-muted fs-13">Per Month</div>
                                </div>
                                <ul class="d-flex flex-column gap-3 list-unstyled text-center p-3 mb-3">
                                    <li>5 Projects</li>
                                    <li>1 GB Storage</li>
                                    <li>No Domain</li>
                                    <li>1 User</li>
                                    <li>24x7 Support</li>
                                </ul>

                                <div class="text-center mb-3">
                                    <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                                </div>
                            </div>
                        </div>
                    </article>


                    <!--Pricing Column-->
                    <article class="pricing-column col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-3 text-center">
                                    <h3 class="text-primary text-uppercase fw-normal fs-16 mb-3">Developer</h3>
                                    <h2 class="display-6 text-dark fw-normal mb-2">$39</h2>
                                    <div class="text-muted fs-13">Per Month</div>
                                </div>
                                <ul class="d-flex flex-column gap-3 list-unstyled text-center p-3 mb-3">
                                    <li>5 Projects</li>
                                    <li>1 GB Storage</li>
                                    <li>No Domain</li>
                                    <li>1 User</li>
                                    <li>24x7 Support</li>
                                </ul>

                                <div class="text-center mb-3">
                                    <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!--Pricing Column-->
                    <article class="pricing-column col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-3 text-center">
                                    <h3 class="text-primary text-uppercase fw-normal fs-16 mb-3">Business</h3>
                                    <h2 class="display-6 text-dark fw-normal mb-2">$49</h2>
                                    <div class="text-muted fs-13">Per Month</div>
                                </div>
                                <ul class="d-flex flex-column gap-3 list-unstyled text-center p-3 mb-3">
                                    <li>5 Projects</li>
                                    <li>1 GB Storage</li>
                                    <li>No Domain</li>
                                    <li>1 User</li>
                                    <li>24x7 Support</li>
                                </ul>

                                <div class="text-center mb-3">
                                    <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                                </div>
                            </div>
                        </div>
                    </article>

                </div><!-- end row -->

            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
