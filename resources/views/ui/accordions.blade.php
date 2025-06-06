@extends('layouts.vertical', ['page_title' => 'Accordions', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Accordions</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                        <li class="breadcrumb-item active">Accordions</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- start row-->
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Default Accordions</h4>
                        <p class="text-muted fs-14 mb-3">Click the accordions below to expand/collapse the accordion content.</p>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                        plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                        within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                        plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                        within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                        plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                        within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Flush Accordions</h4>
                        <p class="text-muted fs-14 mb-3">Add <code>.accordion-flush</code> to remove the default <code>background-color</code>, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.</p>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                                        filled with some actual content.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse show" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                                        happening here in terms of content, but just filling up the space to make it look, at least at first
                                        glance, a bit more representative of how this would look in a real-world application.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Simple Card Accordions</h4>
                        <p class="text-muted fs-14 mb-3">
                            Using the card component, you can
                            extend the default collapse behavior to create an accordion. To properly achieve
                            the accordion style, be sure to use <code>.accordion</code> as a wrapper.
                        </p>

                        <div class="accordion" id="CardaccordionExample">
                            <div class="card mb-0">
                                <div class="card-header" id="CardheadingOne">
                                    <h5 class="m-0">
                                        <a class="text-reset d-block" data-bs-toggle="collapse" href="#CardcollapseOne" aria-expanded="true" aria-controls="CardcollapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h5>
                                </div>

                                <div id="CardcollapseOne" class="collapse show" aria-labelledby="CardheadingOne" data-bs-parent="#CardaccordionExample">
                                    <div class="card-body pt-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee
                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header" id="CardheadingTwo">
                                    <h5 class="m-0">
                                        <a class="text-reset d-block collapsed" data-bs-toggle="collapse" href="#CardcollapseTwo" aria-expanded="false" aria-controls="CardcollapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h5>
                                </div>
                                <div id="CardcollapseTwo" class="collapse" aria-labelledby="CardheadingTwo" data-bs-parent="#CardaccordionExample">
                                    <div class="card-body pt-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee
                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header" id="CardheadingThree">
                                    <h5 class="m-0">
                                        <a class="text-reset d-block collapsed" data-bs-toggle="collapse" href="#CardcollapseThree" aria-expanded="false" aria-controls="CardcollapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h5>
                                </div>
                                <div id="CardcollapseThree" class="collapse" aria-labelledby="CardheadingThree" data-bs-parent="#CardaccordionExample">
                                    <div class="card-body pt-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee
                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Always Open Accordions</h4>
                        <p class="text-muted fs-14 mb-3">Omit the <code>data-bs-parent</code> attribute on each <code>.accordion-collapse</code> to make accordion items stay open when another item is opened.</p>

                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                        plugin adds the appropriate classes that we use to style each element. These classes control the
                                        overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                        this with custom CSS or overriding our default variables. It's also worth noting that just about any
                                        HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                                        overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                                        overflow.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

        </div>
        <!-- end row-->

    </div>
    <!-- end row -->

    </div>
    <!-- container -->
@endsection
