@extends('layouts.vertical', ['page_title' => 'Timeline', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Timeline</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Timeline</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="timeline">

                    <div class="timeline-show mb-3 text-center">
                        <h5 class="m-0 time-show-name">Today</h5>
                    </div>

                    <div class="timeline-lg-item timeline-item-left">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow-alt"></span>
                                <span class="timeline-icon bg-danger-subtle"><i class="ri-record-circle-fill text-danger"></i></span>
                                <h4 class="mt-0 mb-1 fs-16">Completed UX design project for our client</h4>
                                <p class="text-muted"><small>22 July, 2019</small></p>
                                <p>Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? </p>

                                <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 17</a>
                                <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 89</a>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-lg-item timeline-item-right">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow"></span>
                                <span class="timeline-icon bg-info-subtle"><i class="ri-record-circle-fill text-info"></i></span>
                                <h4 class="mt-0 mb-1 fs-16">Yay! We are celebrating our first admin release.</h4>
                                <p class="text-muted"><small>22 July, 2019</small></p>
                                <p>Consectetur adipisicing elit. Iusto, optio, dolorum <a href="#">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium </p>

                                <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 148</a>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-show my-3 text-center">
                        <h5 class="m-0 time-show-name">Yesterday</h5>
                    </div>

                    <div class="timeline-lg-item timeline-item-left">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow-alt"></span>
                                <span class="timeline-icon bg-warning-subtle"><i class="ri-record-circle-fill text-warning"></i></span>
                                <h4 class="mt-0 mb-1 fs-16">We released new version of our theme Ubold.</h4>
                                <p class="text-muted"><small>21 July, 2019</small></p>
                                <p>3 new photo Uploaded on facebook fan page</p>

                                <div class="timeline-album mb-3">
                                    <a href="javascript: void(0);">
                                        <img alt="" src="/images/small/small-1.jpg">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img alt="" src="/images/small/small-2.jpg">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img alt="" src="/images/small/small-3.jpg">
                                    </a>
                                </div>

                                <a href="javascript: void(0);" class="btn btn-sm btn-light">🏆 94</a>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-lg-item timeline-item-right">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow"></span>
                                <span class="timeline-icon bg-success-subtle"><i class="ri-record-circle-fill text-success"></i></span>
                                <h4 class="mt-0 mb-1 fs-16">We have archieved 25k sales in our themes.</h4>
                                <p class="text-muted"><small>21 July, 2019</small></p>
                                <p>Outdoor visit at California State Route 85 with John Boltana &
                                    Harry Piterson regarding to setup a new show room.</p>

                                <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 1.4k</a>
                                <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 2k</a>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-lg-item timeline-item-left">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow-alt"></span>
                                <span class="timeline-icon bg-primary-subtle"><i class="ri-record-circle-fill text-primary"></i></span>
                                <h4 class="mt-0 mb-1 fs-16">Conference call with UX team</h4>
                                <p class="text-muted"><small>21 July, 2019</small></p>
                                <p>Jonatha Smith added new milestone <span><a href="#">Pathek</a></span>
                                    Lorem ipsum dolor sit amet consiquest dio</p>

                                <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 89</a>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-show my-3 text-center">
                        <h5 class="m-0 time-show-name">2018</h5>
                    </div>

                    <div class="timeline-lg-item timeline-item-right">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow"></span>
                                <span class="timeline-icon bg-danger-subtle"><i class="ri-record-circle-fill text-danger"></i></span>
                                <h4 class="mt-0 mb-1 fs-16">Join new team member Alex Smith</h4>
                                <p class="text-muted"><small>10 December, 2018</small></p>
                                <p>Alex Smith is a Senior Software (Full Stack) engineer with a deep passion for building usable, functional & pretty web applications. </p>
                                <div class="d-flex">
                                    <img src="/images/users/avatar-3.jpg" alt="Arya S" class="rounded-circle me-2" height="24">
                                    <div>
                                        <h5 class="mt-1 fs-14 mb-0">
                                            Alex Smith <small>- Senior Software (Full Stack)</small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-lg-item timeline-item-left">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow-alt"></span>
                                <span class="timeline-icon bg-info-subtle"><i class="ri-record-circle-fill text-info"></i></span>
                                <h4 class="mt-0 mb-1 fs-16">First release of Jidox admin dashboard template</h4>
                                <p class="text-muted"><small>05 May, 2023</small></p>
                                <p>Outdoor visit at California State Route 85 with John Boltana &
                                    Harry Piterson regarding to setup a new show room.</p>

                                <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 10k</a>
                                <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 3.2k</a>
                                <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 7.1k</a>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end timeline -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
