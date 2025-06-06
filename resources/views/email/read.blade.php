@extends('layouts.vertical', ['page_title' => 'Email Read', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/quill/dist/quill.core.css', 'node_modules/quill/dist/quill.snow.css'])
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Email Read</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                        <li class="breadcrumb-item active">Email Read</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <!-- Right Sidebar -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Left sidebar -->
                        <div class="page-aside-left">

                            <div class="d-grid">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#compose-modal">Compose</button>
                            </div>

                            <div class="email-menu-list mt-3">
                                <a href="javascript: void(0);" class="text-danger fw-bold"><i class="ri-inbox-line me-2"></i>Inbox<span class="badge badge-danger-lighten float-end ms-2">7</span></a>
                                <a href="javascript: void(0);"><i class="ri-star-line me-2"></i>Starred</a>
                                <a href="javascript: void(0);"><i class="ri-time-line me-2"></i>Snoozed</a>
                                <a href="javascript: void(0);"><i class="ri-article-line me-2"></i>Draft<span class="badge badge-info-lighten float-end ms-2">32</span></a>
                                <a href="javascript: void(0);"><i class="ri-mail-send-line me-2"></i>Sent Mail</a>
                                <a href="javascript: void(0);"><i class="ri-delete-bin-line me-2"></i>Trash</a>
                                <a href="javascript: void(0);"><i class="ri-price-tag-3-line me-2"></i>Important</a>
                                <a href="javascript: void(0);"><i class="ri-alert-line me-2"></i>Spam</a>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-uppercase">Labels</h6>
                                <div class="email-menu-list labels-list mt-2">
                                    <a href="javascript: void(0);"><i class="ri-checkbox-blank-circle-fill fs-13 text-info me-2"></i>Updates</a>
                                    <a href="javascript: void(0);"><i class="ri-checkbox-blank-circle-fill fs-13 text-warning me-2"></i>Friends</a>
                                    <a href="javascript: void(0);"><i class="ri-checkbox-blank-circle-fill fs-13 text-success me-2"></i>Family</a>
                                    <a href="javascript: void(0);"><i class="ri-checkbox-blank-circle-fill fs-13 text-primary me-2"></i>Social</a>
                                    <a href="javascript: void(0);"><i class="ri-checkbox-blank-circle-fill fs-13 text-danger me-2"></i>Important</a>
                                    <a href="javascript: void(0);"><i class="ri-checkbox-blank-circle-fill fs-13 text-secondary me-2"></i>Promotions</a>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h4><span class="badge rounded-pill p-1 px-2 badge-secondary-lighten">FREE</span></h4>
                                <h6 class="text-uppercase mt-3">Storage</h6>
                                <div class="progress my-2 progress-sm">
                                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted fs-13 mb-0">7.02 GB (46%) of 15 GB used</p>
                            </div>

                        </div>
                        <!-- End Left sidebar -->

                        <div class="page-aside-right">

                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary"><i class="ri-inbox-archive-line fs-16"></i></button>
                                <button type="button" class="btn btn-secondary"><i class="ri-spam-2-line fs-16"></i></button>
                                <button type="button" class="btn btn-secondary"><i class="ri-delete-bin-line fs-16"></i></button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-folder-2-line fs-16"></i>
                                    <i class="ri-arrow-down-s-line"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">Move to:</span>
                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-price-tag-3-line fs-16"></i>
                                    <i class="ri-arrow-down-s-line"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">Label as:</span>
                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                </div>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-line fs-16"></i> More
                                    <i class="ri-arrow-down-s-line"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">More Options :</span>
                                    <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                </div>
                            </div>

                            <div class="mt-3">
                                <h5 class="fs-18">Your elite author Graphic Optimization reward is ready!</h5>

                                <hr />

                                <div class="d-flex mb-3 mt-1">
                                    <img class="d-flex me-2 rounded-circle" src="/images/users/avatar-2.jpg" alt="placeholder image" height="32">
                                    <div class="w-100 overflow-hidden">
                                        <small class="float-end">April 24, 2023, 10:59 PM</small>
                                        <h6 class="m-0 fs-14">Steven Smith</h6>
                                        <small class="text-muted">From: jonathan@domain.com</small>
                                    </div>
                                </div>

                                <p>Hi Coderthemes!</p>
                                <p>Clicking ‘Order Service’ on the right-hand side of the above page will present you with an order page. This service has the following Briefing Guidelines that will need to be filled before placing your order:</p>
                                <ol>
                                    <li>Your design preferences (Color, style, shapes, Fonts, others) </li>
                                    <li>Tell me, why is your item different? </li>
                                    <li>Do you want to bring up a specific feature of your item? If yes, please tell me </li>
                                    <li>Do you have any preference or specific thing you would like to change or improve on your item page? </li>
                                    <li>Do you want to include your item's or your provider's logo on the page? if yes, please send it to me in vector format (Ai or EPS) </li>
                                    <li>Please provide me with the copy or text to display</li>
                                </ol>

                                <p>Filling in this form with the above information will ensure that they will be able to start work quickly.</p>
                                <p>You can complete your order by putting your coupon code into the Promotional code box and clicking ‘Apply Coupon’.</p>
                                <p><b>Best,</b> <br /> Graphic Studio</p>
                                <hr />

                                <h5 class="mb-3">Attachments</h5>

                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-primary-subtle text-primary rounded">
                                                                .ZIP
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">Jidox-admin-design.zip</a>
                                                        <p class="mb-0">2.3 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-xl-4">
                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img src="/images/small/small-4.jpg" class="avatar-sm rounded" alt="file-image">
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                                        <p class="mb-0">3.25 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-xl-4">
                                        <div class="card mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-secondary text-light rounded">
                                                                .MP4
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">Admin-bug-report.mp4</a>
                                                        <p class="mb-0">7.05 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row-->

                                <div class="mt-5">
                                    <a href="" class="btn btn-secondary me-2"><i class="ri-reply-line me-1"></i> Reply</a>
                                    <a href="" class="btn btn-light">Forward <i class="ri-share-forward-2-fill ms-1"></i></a>
                                </div>

                            </div>
                            <!-- end .mt-4 -->

                        </div>
                        <!-- end inbox-rightbar-->
                    </div>

                    <div class="clearfix"></div>
                </div> <!-- end card-box -->

            </div> <!-- end Col -->
        </div><!-- End row -->

    </div> <!-- container -->

    <!-- Compose Modal -->
    <div id="compose-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="compose-header-modalLabel">New Message</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-1">
                    <div class="modal-body px-3 pt-3 pb-0">
                        <form>
                            <div class="mb-2">
                                <label for="msgto" class="form-label">To</label>
                                <input type="text" id="msgto" class="form-control" placeholder="Example@email.com">
                            </div>
                            <div class="mb-2">
                                <label for="mailsubject" class="form-label">Subject</label>
                                <input type="text" id="mailsubject" class="form-control" placeholder="Your subject">
                            </div>
                            <div class="write-mdg-box mb-3">
                                <label class="form-label">Message</label>
                                <div id="snow-editor" style="height: 200px;">
                                    <h3>This is a simple editable area.</h3>
                                    <p>
                                        End of simple area
                                    </p>
                                </div><!-- end Snow-editor-->
                            </div>
                        </form>
                    </div>
                    <div class="px-3 pb-3">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="ri-send-plane-2-line me-1"></i> Send Message</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.inbox.js'])
@endsection
