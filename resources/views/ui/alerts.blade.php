@extends('layouts.vertical', ['page_title' => 'Alert', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Alerts</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                        <li class="breadcrumb-item active">Alerts</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Default Alert</h4>
                        <p class="text-muted fs-14 mb-3">
                            Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
                            Alerts are available for any length of text, as well as an optional dismiss
                            button. 
                        </p>
                        
                        <div class="alert alert-primary" role="alert">
                            <strong>Primary - </strong> A simple primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <strong>Secondary - </strong> A simple secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            <strong>Success - </strong> A simple success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <strong>Error - </strong> A simple danger alert—check it out!
                        </div>
                        <div class="alert alert-warning text-bg-warning border-0"
                            role="alert">
                            <strong>Warning - </strong> A simple warning alert—check it out!
                        </div>
                        <div class="alert alert-info border-0" role="alert">
                            <strong>Info - </strong> A simple info alert—check it out!
                        </div>
                        <div class="alert alert-pink border-0" role="alert">
                            <strong>Pink - </strong> A simple pink alert—check it out!
                        </div>
                        <div class="alert alert-purple border-0" role="alert">
                            <strong>Purple - </strong> A simple purple alert—check it out!
                        </div>
                        <div class="alert alert-light text-bg-light border-0" role="alert">
                            <strong>Light - </strong> A simple light alert—check it out!
                        </div>
                        <div class="alert alert-dark text-bg-dark border-0 mb-0" role="alert">
                            <strong>Dark - </strong> A simple dark alert—check it out!
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Dismissing Alerts</h4>
                        <p class="text-muted fs-14 mb-3">
                            Add a dismiss button and the <code>.alert-dismissible</code> class, which adds
                            extra padding to the right of the alert
                            and positions the <code>.btn-close</code> button.
                        </p>

                        <div class="alert alert-primary alert-dismissible text-bg-primary border-0 fade show"
                            role="alert">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Primary - </strong> A simple primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary alert-dismissible text-bg-secondary border-0 fade show"
                            role="alert">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Secondary - </strong> A simple secondary alert—check it out!
                        </div>
                        <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show"
                            role="alert">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Success - </strong> A simple success alert—check it out!
                        </div>
                        <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show"
                            role="alert">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Error - </strong> A simple danger alert—check it out!
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Warning - </strong> A simple warning alert—check it out!
                        </div>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Info - </strong> A simple info alert—check it out!
                        </div>
                        <div class="alert alert-pink alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Pink - </strong> A simple pink alert—check it out!
                        </div>
                        <div class="alert alert-purple alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Purple - </strong> A simple purple alert—check it out!
                        </div>
                        <div class="alert alert-light alert-dismissible text-dark fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Light - </strong> A simple light alert—check it out!
                        </div>
                        <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Dark - </strong> A simple dark alert—check it out!
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Custom Alerts</h4>
                        <p class="text-muted fs-14 mb-3">
                            Display alert with transparent background and with contextual text color. Use
                            classes
                            <code>.bg-transparent</code>, and <code>.text-*</code>. E.g. <code>bg-transparent
                                text-primary</code>.
                        </p>

                        <div class="alert alert-primary bg-transparent text-primary" role="alert">
                            This is a <strong>primary</strong> alert—check it out!
                        </div>
                        <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                            This is a <strong>secondary</strong> alert—check it out!
                        </div>
                        <div class="alert alert-success bg-transparent text-success" role="alert">
                            This is a <strong>success</strong> alert—check it out!
                        </div>
                        <div class="alert alert-info bg-transparent text-info" role="alert">
                            This is a <strong>info</strong> alert—check it out!
                        </div>
                        <div class="alert alert-warning bg-transparent text-warning" role="alert">
                            This is a <strong>warning</strong> alert—check it out!
                        </div>
                        <div class="alert alert-danger bg-transparent text-danger" role="alert">
                            This is a <strong>danger</strong> alert—check it out!
                        </div>
                        <div class="alert alert-warning bg-transparent text-warning" role="alert">
                            This is a <strong>warning</strong> alert—check it out!
                        </div>
                        <div class="alert alert-pink bg-transparent text-pink" role="alert">
                            This is a <strong>Pink</strong> alert—check it out!
                        </div>
                        <div class="alert alert-purple bg-transparent text-purple" role="alert">
                            This is a <strong>Purple</strong> alert—check it out!
                        </div>
                        <div class="alert alert-light bg-transparent text-dark" role="alert">
                            This is a <strong>light</strong> alert—check it out!
                        </div>
                        <div class="alert alert-dark bg-transparent text-dark mb-0" role="alert">
                            This is a <strong>dark</strong> alert—check it out!
                        </div>
                        
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Link Color</h4>
                        <p class="text-muted fs-14 mb-3">
                            Use the <code>.alert-link</code> utility class to quickly provide matching
                            colored links within any alert.
                        </p>

                        <div class="alert alert-primary" role="alert">
                            A simple primary alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-info" role="alert">
                            A simple info alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-pink" role="alert">
                            A simple pink alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-purple" role="alert">
                            A simple purple alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-dark" role="alert">
                            A simple dark alert with <a href="#" class="alert-link">an example
                                link</a>. Give it a click if you like.
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Icons with Alerts</h4>
                        <p class="text-muted fs-14 mb-3">
                            You can also include additional elements like icons, heading, etc along side the actual message.
                        </p>

                        <div class="alert alert-success" role="alert">
                            <i class="ri-check-line me-1 align-middle fs-16"></i> This is a
                            <strong>success</strong> alert - check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <i class="ri-close-circle-line me-1 align-middle fs-16"></i> This is a <strong>danger</strong>
                            alert - check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <i class="ri-alert-line me-1 align-middle fs-16"></i> This is a
                            <strong>warning</strong> alert - check it out!
                        </div>
                        <div class="alert alert-info mb-0" role="alert">
                            <i class="ri-information-line me-1 align-middle fs-16"></i> This is a
                            <strong>info</strong> alert - check it out!
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Additional content</h4>
                        <p class="text-muted fs-14 mb-3">
                            Alerts can also contain additional HTML elements like headings, paragraphs and
                            dividers.
                        </p>

                        
                        <div class="alert alert-info text-center mb-0" role="alert">
                            <div class="avatar-sm mb-2 mx-auto">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ri-check-line align-middle fs-22"></i>
                                </span>
                            </div>
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This
                                example text is going to run a bit longer so that you can see how
                                spacing within an alert works with this kind of content.</p>
                            <hr class="border-info border-opacity-25">
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                                keep things nice and tidy.</p>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Live Alert</h4>
                        <p class="text-muted fs-14 mb-3">Click the button below to show an alert (hidden with inline styles to start), then dismiss (and destroy) it with the built-in close button.</p>

                        <div class="tab-pane show active" id="live-alert-preview">
                            <div id="liveAlertPlaceholder"></div>
                            <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end row-->
    </div>
    <!-- container -->
@endsection
