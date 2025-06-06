@extends('layouts.vertical', ['page_title' => 'Notifications', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/jquery-toast-plugin/dist/jquery.toast.min.css'])
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Notifications</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                        <li class="breadcrumb-item active">Notifications</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Bootstrap Toasts</h4>
                        <p class="text-muted fs-14">Push notifications to your visitors with a toast, a
                            lightweight and easily customizable alert message.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mb-2">Basic</h5>
                                <p class="text-muted fs-14">Toasts are as flexible as you need and
                                    have very little required markup. At a minimum, we
                                    require a single element to contain your “toasted” content and
                                    strongly encourage a dismiss button.</p>
                                <div class="p-3">

                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                            <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1" />
                                            <strong class="me-auto">Jidox</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                    <!--end toast-->

                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-6">
                                <h5 class="mb-2">Translucent</h5>
                                <p class="text-muted fs-14">Toasts are slightly translucent, too,
                                    so they blend over whatever they might appear over.
                                    For browsers that support the backdrop-filter CSS property,
                                    we’ll also attempt to blur the elements under a toast.</p>

                                <div class="p-3 bg-light">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                            <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1" />
                                            <strong class="me-auto">Jidox</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                    <!--end toast-->
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <h5 class="mb-2">Stacking</h5>
                                <p class="text-muted fs-14">When you have multiple toasts, we
                                    default to vertiaclly stacking them in a readable manner.</p>
                                <div class="p-3">
                                    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                                        <!-- Position it -->
                                        <div class="toast-container" style="position: absolute; top: 0; right: 0;">

                                            <!-- Then put toasts within -->
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1" />
                                                    <strong class="me-auto">Jidox</strong>
                                                    <small class="text-muted">just now</small>
                                                    <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    See? Just like this.
                                                </div>
                                            </div>
                                            <!--end toast-->

                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1" />
                                                    <strong class="me-auto">Jidox</strong>
                                                    <small class="text-muted">2 seconds ago</small>
                                                    <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Heads up, toasts will stack automatically
                                                </div>
                                            </div>
                                            <!--end toast-->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-6 mt-4">
                                <h5 class="mb-2">Placement</h5>
                                <p class="text-muted fs-14">Place toasts with custom CSS as you
                                    need them. The top right is often used for
                                    notifications, as is the top middle. If you’re only ever going
                                    to show one toast at a time, put the positioning
                                    styles right on the <code>.toast</code>.</p>
                                <div class="p-3">
                                    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

                                        <!-- Then put toasts within -->
                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-toggle="toast">
                                            <div class="toast-header">
                                                <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1" />
                                                <strong class="me-auto">Jidox</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <!--end toast-->
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div><!-- end row-->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Custom content</h4>
                        <p class="text-muted fs-14">Alternatively, you can also add additional controls
                            and components to toasts.</p>

                        <div class="toast show align-items-center mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="toast show align-items-center text-white bg-primary border-0 mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="toast show mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                                <div class="mt-2 pt-2 border-top">
                                    <button type="button" class="btn btn-primary btn-sm">Take
                                        action</button>
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                </div>
                            </div>
                        </div>

                        <div class="toast bg-primary show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-body text-white">
                                Hello, world! This is a toast message.
                                <div class="mt-2 pt-2 border-top">
                                    <button type="button" class="btn btn-light btn-sm">Take
                                        action</button>
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Placement</h4>
                        <p class="text-muted fs-14">Place toasts with custom CSS as you need them. The top
                            right is often used for notifications, as is the top middle. If you’re only ever
                            going to show one toast at a time, put the positioning styles right on the
                            <code>.toast</code>.
                        </p>

                        <form>
                            <div class="mb-3">
                                <label for="selectToastPlacement">Toast placement</label>
                                <select class="form-select mt-2" id="selectToastPlacement">
                                    <option value="" selected>Select a position...</option>
                                    <option value="top-0 start-0">Top left</option>
                                    <option value="top-0 start-50 translate-middle-x">Top center
                                    </option>
                                    <option value="top-0 end-0">Top right</option>
                                    <option value="top-50 start-0 translate-middle-y">Middle left
                                    </option>
                                    <option value="top-50 start-50 translate-middle">Middle center
                                    </option>
                                    <option value="top-50 end-0 translate-middle-y">Middle right
                                    </option>
                                    <option value="bottom-0 start-0">Bottom left</option>
                                    <option value="bottom-0 start-50 translate-middle-x">Bottom
                                        center</option>
                                    <option value="bottom-0 end-0">Bottom right</option>
                                </select>
                            </div>
                        </form>
                        <div aria-live="polite" aria-atomic="true" class="bg-light position-relative bd-example-toasts" style="min-height:294px">
                            <div class="toast-container position-absolute p-3" id="toastPlacement">
                                <div class="toast show">
                                    <div class="toast-header">
                                        <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1" />
                                        <strong class="me-auto">Jidox</strong>
                                        <small>11 mins ago</small>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div><!-- end row-->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Jquery Toast</h4>
                        <p class="text-muted fs-14">Toasts based notifications can be used to to show
                            important alerts or information to users.</p>

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="text-center p-1 pb-3 p-sm-3">
                                    <p>Info Example</p>
                                    <button type="button" class="btn btn-info btn-sm" id="toastr-one">Click me</button>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-3 col-sm-6">
                                <div class="text-center p-1 pb-3 p-sm-3">
                                    <p>Warning Example</p>
                                    <button type="button" class="btn btn-warning btn-sm" id="toastr-two">Click me</button>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-3 col-sm-6">
                                <div class="text-center p-1 pb-3 p-sm-3">
                                    <p>Success Example</p>
                                    <button type="button" class="btn btn-success btn-sm" id="toastr-three">Click me</button>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-3 col-sm-6">
                                <div class="text-center p-1 pb-3 p-sm-3">
                                    <p>Danger Example</p>
                                    <button type="button" class="btn btn-danger btn-sm" id="toastr-four">Click me</button>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="text-center p-1 pb-3 p-sm-3">
                                    <p>The text can be an array</p>
                                    <button type="button" class="btn btn-light btn-sm" id="toastr-five">Click me</button>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-3 col-sm-6">
                                <div class="text-center p-1 pb-3 p-sm-3">
                                    <p>Put some HTML in the text</p>
                                    <button type="button" class="btn btn-light btn-sm" id="toastr-six">Click me</button>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-3 col-sm-6">
                                <div class="text-center p-1 pb-3 p-sm-3">
                                    <p>Making them sticky</p>
                                    <button type="button" class="btn btn-light btn-sm" id="toastr-seven">Click me</button>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-3 col-sm-6">
                                <div class="text-center p-1 pb-3 p-sm-3">
                                    <p>Fade transitions</p>
                                    <button type="button" class="btn btn-light btn-sm" id="toastr-eight">Click me</button>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.toastr.js'])
@endsection
