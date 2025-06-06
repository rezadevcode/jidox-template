@extends('layouts.vertical', ['page_title' => 'ChartJs Other', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Other Charts</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ChartJs</a></li>
                        <li class="breadcrumb-item active">Other Charts</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Bubble</h4>

                        <div >
                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="bubble-example" data-colors="#3e60d5,#47ad77"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">DONUT</h4>

                        <div >
                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="donut-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Pie</h4>

                        <div >
                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="pie-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2, #f56f36"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Polar Area</h4>

                        <div >
                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="polar-area-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2, #f56f36"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Radar</h4>

                        <div >
                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="radar-example" data-colors="#3e60d5,#47ad77"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Scatter</h4>

                        <div >
                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="scatter-example" data-colors="#3e60d5,#47ad77"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>

        <!-- end row-->
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Stacked Bar/Line</h4>

                        <div >
                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="bar-line-example" data-colors="#3e60d5,#47ad77"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

        </div>
        <!-- end row-->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.chartjs-other.js'])
@endsection
