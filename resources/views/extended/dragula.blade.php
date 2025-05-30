@extends('layouts.vertical', ['page_title' => 'Dragula', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Dragular</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
                        <li class="breadcrumb-item active">Dragular</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Simple Drag and Drop Example</h4>
                        <p class="text-muted fs-14">
                            Just specify the data attribute <code>data-plugin='dragula'</code> to have drag and drop support in your container.
                        </p>

                        <div class="row" id="simple-dragula" data-plugin="dragula">
                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 text-white bg-primary">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 bg-secondary text-white">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 text-white bg-success">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 text-white bg-info text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 text-white bg-warning text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 text-white bg-danger text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote mb-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                        </div>
                        <!-- end row-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Move stuff between containers</h4>
                        <p class="text-muted fs-14 mb-3">
                            Just specify the data attribute
                            <code>data-plugin='dragula'</code> and
                            <code>data-containers='["first-container-id", "second-container-id"]'</code>.
                        </p>

                        <div class="row" data-plugin="dragula" data-containers='["company-list-left", "company-list-right"]'>
                            <div class="col-md-6">
                                <div class="bg-dragula p-2 p-lg-4">
                                    <h5 class="mt-0">Part 1</h5>
                                    <div id="company-list-left" class="py-2">

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-1.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-0">Louis K. Bond</h5>
                                                        <p> Founder & CEO </p>
                                                        <p class="mb-0 text-muted">
                                                            <span class="fst-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                        </p>
                                                    </div> <!-- end w-100 -->
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-2.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-0">Dennis N. Cloutier</h5>
                                                        <p> Software Engineer </p>
                                                        <p class="mb-0 text-muted">
                                                            <span class="fst-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                        </p>
                                                    </div> <!-- end w-100 -->
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-3.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-0">Susan J. Sander</h5>
                                                        <p> Web Designer </p>
                                                        <p class="mb-0 text-muted">
                                                            <span class="fst-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                        </p>
                                                    </div> <!-- end w-100 -->
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                    </div> <!-- end company-list-1-->
                                </div> <!-- end div.bg-light-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="bg-dragula p-2 p-lg-4">
                                    <h5 class="mt-0">Part 2</h5>
                                    <div id="company-list-right" class="py-2">
                                        <div class="card mb-0 mt-2">

                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-4.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-0">James M. Short</h5>
                                                        <p> Web Developer </p>
                                                        <p class="mb-0 text-muted">
                                                            <span class="fst-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                        </p>
                                                    </div> <!-- end w-100 -->
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-5.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-0">Gabriel J. Snyder</h5>
                                                        <p> Business Analyst </p>
                                                        <p class="mb-0 text-muted">
                                                            <span class="fst-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                        </p>
                                                    </div> <!-- end w-100 -->
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-6.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-0">Louie C. Mason</h5>
                                                        <p>Human Resources</p>
                                                        <p class="mb-0 text-muted">
                                                            <span class="fst-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                        </p>
                                                    </div> <!-- end w-100 -->
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                    </div> <!-- end company-list-2-->
                                </div> <!-- end div.bg-light-->
                            </div> <!-- end col -->

                        </div> <!-- end row -->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Move stuff between containers using handle</h4>
                        <p class="text-muted fs-14 mb-3">
                            Just specify the data attribute
                            <code>data-plugin='dragula'</code>,
                            <code>data-containers='["first-container-id", "second-container-id"]'</code> and
                            <code>data-handle-class='dragula-handle'</code>.
                        </p>

                        <div class="row" data-plugin="dragula" data-containers='["handle-dragula-left", "handle-dragula-right"]' data-handleClass="dragula-handle">
                            <div class="col-md-6">
                                <div class="bg-dragula p-2 p-lg-4">
                                    <h5 class="mt-0">Part 1</h5>
                                    <div id="handle-dragula-left" class="py-2">

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-7.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-1">Louis K. Bond</h5>
                                                        <p class="mb-0"> Founder & CEO </p>
                                                    </div> <!-- end w-100 -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-8.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-1">Dennis N. Cloutier</h5>
                                                        <p class="mb-0"> Software Engineer </p>
                                                    </div> <!-- end w-100 -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-9.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-1">Susan J. Sander</h5>
                                                        <p class="mb-0"> Web Designer </p>
                                                    </div> <!-- end w-100 -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                    </div> <!-- end company-list-1-->
                                </div> <!-- end div.bg-light-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="bg-dragula p-2 p-lg-4">
                                    <h5 class="mt-0">Part 2</h5>
                                    <div id="handle-dragula-right" class="py-2">
                                        <div class="card mb-0 mt-2">

                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-10.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-1">James M. Short</h5>
                                                        <p class="mb-0"> Web Developer </p>
                                                    </div> <!-- end w-100 -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-5.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-1">Gabriel J. Snyder</h5>
                                                        <p class="mb-0"> Business Analyst </p>
                                                    </div> <!-- end w-100 -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-start">
                                                    <img src="/images/users/avatar-3.jpg" alt="image" class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mb-1 mt-1">Louie C. Mason</h5>
                                                        <p class="mb-0">Human Resources</p>
                                                    </div> <!-- end w-100 -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end d-flex -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                    </div> <!-- end company-list-2-->
                                </div> <!-- end div.bg-light-->
                            </div> <!-- end col -->

                        </div> <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/component.dragula.js'])
@endsection
