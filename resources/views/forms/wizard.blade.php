@extends('layouts.vertical', ['page_title' => 'Form Wizard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Form Wizard</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Wizard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-3"> Basic Wizard</h4>

                        <form>
                            <div id="basicwizard">

                                <ul class="nav nav-pills nav-justified form-wizard-header mb-4" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1 active" aria-selected="true" role="tab">
                                            <i class="ri-account-circle-line fw-normal fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Account</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1" aria-selected="false" role="tab" tabindex="-1">
                                            <i class="ri-profile-line fw-normal fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1" aria-selected="false" role="tab" tabindex="-1">
                                            <i class="ri-check-double-line fw-normal fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Finish</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0">
                                    <div class="tab-pane active show" id="basictab1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName">User name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="userName" name="userName" value="Jidox">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="password"> Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="password" name="password" class="form-control" value="123456789">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="confirm">Re Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="confirm" name="confirm" class="form-control" value="123456789">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <ul class="list-inline wizard mb-0">
                                            <li class="next list-inline-item float-end">
                                                <a href="javascript:void(0);" class="btn btn-info">Add More Info <i class="ri-arrow-right-line ms-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane" id="basictab2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name"> First name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="name" name="name" class="form-control" value="Francis">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="surname"> Last name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="surname" name="surname" class="form-control" value="Brinkman">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="email">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="email" name="email" class="form-control" value="cory1979@hotmail.com">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <ul class="pager wizard mb-0 list-inline">
                                            <li class="previous list-inline-item disabled">
                                                <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Back to Account</button>
                                            </li>
                                            <li class="next list-inline-item float-end">
                                                <button type="button" class="btn btn-info">Add More Info <i class="ri-arrow-right-line ms-1"></i></button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane" id="basictab3" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <h2 class="mt-0"><i class="ri-check-double-line"></i></h2>
                                                    <h3 class="mt-0">Thank you !</h3>

                                                    <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                        mattis dictum aliquet.</p>

                                                    <div class="mb-3">
                                                        <div class="form-check d-inline-block">
                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <ul class="pager wizard mb-0 list-inline mt-1">
                                            <li class="previous list-inline-item disabled">
                                                <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Back to Profile</button>
                                            </li>
                                            <li class="next list-inline-item float-end">
                                                <button type="button" class="btn btn-info">Submit</button>
                                            </li>
                                        </ul>
                                    </div>

                                </div> <!-- tab-content -->
                            </div> <!-- end #basicwizard-->
                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-3"> Button Wizard</h4>

                        <div id="btnwizard">
                            <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                <li class="nav-item">
                                    <a href="#tab12" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                        <i class="ri-account-circle-line fw-normal fs-18 align-middle me-1"></i>
                                        <span class="d-none d-sm-inline">Account</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab22" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                        <i class="ri-profile-line fw-normal fs-18 align-middle me-1"></i>
                                        <span class="d-none d-sm-inline">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab32" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                        <i class="ri-check-double-line fw-normal fs-18 align-middle me-1"></i>
                                        <span class="d-none d-sm-inline">Finish</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content mb-0 b-0">

                                <div class="tab-pane fade" id="tab12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName2">User name</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="userName2" name="userName2" value="Jidox">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="password2"> Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" id="password2" name="password2" class="form-control" value="123456789">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="confirm2">Re Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" id="confirm2" name="confirm2" class="form-control" value="123456789">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane fade" id="tab22">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name2"> First name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name2" name="name2" class="form-control" value="Francis">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="surname2"> Last name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="surname2" name="surname2" class="form-control" value="Brinkman">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="email2">Email</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="email2" name="email2" class="form-control" value="cory1979@hotmail.com">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="tab32">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <h2 class="mt-0"><i class="ri-check-double-line"></i></h2>
                                                <h3 class="mt-0">Thank you !</h3>

                                                <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                    mattis dictum aliquet.</p>

                                                <div class="mb-3">
                                                    <div class="form-check d-inline-block">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">I agree with the Terms and Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="float-end">
                                    <input type='button' class='btn btn-info button-next' name='next' value='Next' />
                                    <input type='button' class='btn btn-info button-last' name='last' value='Last' />
                                </div>
                                <div class="float-start">
                                    <input type='button' class='btn btn-info button-first' name='first' value='First' />
                                    <input type='button' class='btn btn-info button-previous' name='previous' value='Previous' />
                                </div>

                                <div class="clearfix"></div>

                            </div> <!-- tab-content -->
                        </div> <!-- end #btnwizard-->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-3">Wizard With Progress Bar</h4>

                        <form>
                            <div id="progressbarwizard">

                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                    <li class="nav-item">
                                        <a href="#account-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                            <i class="ri-account-circle-line fw-normal fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Account</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-tab-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                            <i class="ri-profile-line fw-normal fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#finish-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                            <i class="ri-check-double-line fw-normal fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Finish</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0">

                                    <div id="bar" class="progress mb-3" style="height: 7px;">
                                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                    </div>

                                    <div class="tab-pane" id="account-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName1">User name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="userName1" name="userName1" value="Jidox">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="password1"> Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="password1" name="password1" class="form-control" value="123456789">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="confirm1">Re Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="confirm1" name="confirm1" class="form-control" value="123456789">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <ul class="list-inline wizard mb-0">
                                            <li class="next list-inline-item float-end">
                                                <a href="javascript:void(0);" class="btn btn-info">Add More Info <i class="ri-arrow-right-line ms-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane" id="profile-tab-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name1"> First name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="name1" name="name1" class="form-control" value="Francis">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="surname1"> Last name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="surname1" name="surname1" class="form-control" value="Brinkman">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="email1">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="email1" name="email1" class="form-control" value="cory1979@hotmail.com">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <ul class="pager wizard mb-0 list-inline">
                                            <li class="previous list-inline-item">
                                                <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Back to Account</button>
                                            </li>
                                            <li class="next list-inline-item float-end">
                                                <button type="button" class="btn btn-info">Add More Info <i class="ri-arrow-right-line ms-1"></i></button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane" id="finish-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <h2 class="mt-0"><i class="ri-check-double-line"></i></h2>
                                                    <h3 class="mt-0">Thank you !</h3>

                                                    <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                        mattis dictum aliquet.</p>

                                                    <div class="mb-3">
                                                        <div class="form-check d-inline-block">
                                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                                            <label class="form-check-label" for="customCheck3">I agree with the Terms and Conditions</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <ul class="pager wizard mb-0 list-inline mt-1">
                                            <li class="previous list-inline-item">
                                                <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Back to Profile</button>
                                            </li>
                                            <li class="next list-inline-item float-end">
                                                <button type="button" class="btn btn-info">Submit</button>
                                            </li>
                                        </ul>
                                    </div>

                                </div> <!-- tab-content -->
                            </div> <!-- end #progressbarwizard-->
                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-3"> Wizard With Form Validation</h4>

                        <div id="rootwizard">
                            <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                <li class="nav-item" data-target-form="#accountForm">
                                    <a href="#first" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                        <i class="ri-account-circle-line fw-normal fs-18 align-middle me-1"></i>
                                        <span class="d-none d-sm-inline">Account</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-target-form="#profileForm">
                                    <a href="#second" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                        <i class="ri-profile-line fw-normal fs-18 align-middle me-1"></i>
                                        <span class="d-none d-sm-inline">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-target-form="#otherForm">
                                    <a href="#third" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-1">
                                        <i class="ri-check-double-line fw-normal fs-18 align-middle me-1"></i>
                                        <span class="d-none d-sm-inline">Finish</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content mb-0 b-0">

                                <div class="tab-pane" id="first">
                                    <form id="accountForm" method="post" action="#" class="form-horizontal">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName3">User name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="userName3" name="userName3" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="password3"> Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="password3" name="password3" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="confirm3">Re Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="confirm3" name="confirm3" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </form>
                                    <ul class="list-inline wizard mb-0">
                                        <li class="next list-inline-item float-end">
                                            <a href="javascript:void(0);" class="btn btn-info">Add More Info <i class="ri-arrow-right-line ms-1"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="second">
                                    <form id="profileForm" method="post" action="#" class="form-horizontal">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name3"> First name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="name3" name="name3" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="surname3"> Last name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="surname3" name="surname3" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="email3">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="email3" name="email3" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </form>
                                    <ul class="pager wizard mb-0 list-inline">
                                        <li class="previous list-inline-item">
                                            <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Back to Account</button>
                                        </li>
                                        <li class="next list-inline-item float-end">
                                            <button type="button" class="btn btn-info">Add More Info <i class="ri-arrow-right-line ms-1"></i></button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="third">
                                    <form id="otherForm" method="post" action="#" class="form-horizontal"></form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <h2 class="mt-0">
                                                    <i class="ri-check-double-line"></i>
                                                </h2>
                                                <h3 class="mt-0">Thank you !</h3>

                                                <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                                    dui. Aliquam mattis dictum aliquet.</p>

                                                <div class="mb-3">
                                                    <div class="form-check d-inline-block">
                                                        <input type="checkbox" class="form-check-input" id="customCheck4" required>
                                                        <label class="form-check-label" for="customCheck4">I agree with the Terms and Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                    </form>
                                    <ul class="pager wizard mb-0 list-inline mt-1">
                                        <li class="previous list-inline-item">
                                            <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Back to Profile</button>
                                        </li>
                                        <li class="next list-inline-item float-end">
                                            <button type="button" class="btn btn-info">Submit</button>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- tab-content -->
                        </div> <!-- end #rootwizard-->
                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.form-wizard.js'])
@endsection
