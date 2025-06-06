@extends('layouts.vertical', ['page_title' => 'Dropdowns', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Dropdowns</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                        <li class="breadcrumb-item active">Dropdowns</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Single button dropdowns</h4>
                        <p class="text-muted font-14">
                            Any single <code>.btn</code> can be turned into a dropdown
                            toggle with some markup changes. Here’s how you can put them to work
                            with either <code>&lt;button&gt;</code>
                            elements:
                        </p>

                        <div class="row">
                            <div class="col-auto">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown link
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Animated Dropdown</h4>
                        <p class="text-muted font-14">
                            Add <code>.dropdown-menu-animated</code>
                            to a <code>.dropdown-menu</code> to have animated dropdown menu.</p>

                        <div class="d-flex flex-wrap align-items-center gap-2">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Animation Dropdown
                                </button>
                                <div class="dropdown-menu dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Animation Dropdown End
                                </button>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                            <div class="dropdown-center">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Animation Dropdown Center
                                </button>
                                <div class="dropdown-menu dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-2 mt-2">

                            <div class="dropdown hover-dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hover Animation Dropdown
                                </button>
                                <div class="dropdown-menu dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                            <div class="dropdown hover-dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hover Animation Dropdown End
                                </button>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                            <div class="dropdown-center hover-dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Animation Dropdown Hover Center
                                </button>
                                <div class="dropdown-menu dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Variant</h4>
                        <p class="text-muted font-14">The best part is you can do this with any button variant, too:</p>

                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-pink dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pink</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-purple dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Purple</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->


                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Dropup variation</h4>
                        <p class="text-muted font-14">Trigger dropdown menus above elements
                            by adding <code>.dropup</code> to the parent
                            element.</p>

                        <!-- Default dropup button -->
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <!-- Split dropup button -->
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-light">
                                Split dropup
                            </button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Dropend variation</h4>
                        <p class="text-muted font-14">Trigger dropdown menus at the right of the elements by adding <code>.dropend</code> to the parent element.</p>

                        <!-- Default dropend button -->
                        <div class="btn-group mb-2 dropend">
                            <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropend
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <!-- Split dropend button -->
                        <div class="btn-group mb-2 dropend">
                            <button type="button" class="btn btn-primary">
                                Split Dropend
                            </button>
                            <button type="button" class="btn btn-primary dropdown-toggle-split dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropright</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Disabled Item</h4>
                        <p class="text-muted font-14">Add <code>.disabled</code> to items in the dropdown to <strong>style them as disabled</strong>.</p>

                        <!-- Disabled -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Disabled
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Regular link</a>
                                <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Disabled link</a>
                                <a class="dropdown-item" href="#">Another link</a>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Dark dropdowns</h4>
                        <p class="text-muted font-14">Opt into darker dropdowns to match a dark navbar or custom style by adding <code>.dropdown-menu-dark</code> onto an existing <code>.dropdown-menu</code>. No changes are required to the dropdown items.</p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Dropdown options</h4>
                        <p class="text-muted font-14">Use <code>data-bs-offset</code> or <code>data-bs-reference</code> to change the location of the dropdown.</p>
                        <div class="d-flex">
                            <div class="dropdown me-1">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                    Offset
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Reference</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Text</h4>
                        <p class="text-muted font-14">Place any freeform text within a dropdown menu with text and use spacing utilities. Note that you’ll likely need additional sizing styles to constrain the menu width.</p>

                        <!-- Text Example -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Text Dropdown
                            </button>
                            <div class="dropdown-menu p-3 text-muted" style="max-width: 200px;">
                                <p>
                                    Some example text that's free-flowing within the dropdown menu.
                                </p>
                                <p class="mb-0">
                                    And this is more example text.
                                </p>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Menu alignment</h4>
                        <p class="text-muted font-14">
                            Add <code>.dropdown-menu-end</code>
                            to a <code>.dropdown-menu</code> to right
                            align the dropdown menu.
                        </p>

                        <div class="dropdown">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Right-aligned menu
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Menu Centered</h4>

                        <p class="text-muted font-14">Make the dropdown menu centered below the toggle with <code>.dropdown-center</code> on the parent element.</p>

                        <div class="d-flex">
                            <div class="dropdown-center">
                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Centered dropdown
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Split button dropdowns</h4>
                        <p class="text-muted font-14">
                            Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown caret.
                        </p>

                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-light">Secondary</button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-pink">Pink</button>
                            <button type="button" class="btn btn-pink dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-purple">Purple</button>
                            <button type="button" class="btn btn-purple dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Sizing</h4>
                        <p class="text-muted font-14">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>

                        <!-- Large button groups (default and split) -->
                        <div class="btn-group">
                            <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Large button
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-light btn-lg" type="button">
                                Large button
                            </button>
                            <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <!-- Small button groups (default and split) -->
                        <div class="btn-group">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Small button
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-light btn-sm" type="button">
                                Small button
                            </button>
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Dropstart variation</h4>
                        <p class="text-muted font-14">Trigger dropdown menus at the right of the elements by adding <code>.dropleft</code> to the parent element.</p>

                        <!-- Default dropstart button -->
                        <div class="btn-group dropstart ">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropstart
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <!-- Split dropstart button -->
                        <div class="btn-group">
                            <div class="btn-group dropstart" role="group">
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-split dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropstart</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary">
                                Split dropstart
                            </button>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Active Item</h4>
                        <p class="text-muted font-14">Add <code>.active</code> to item in the dropdown to <strong>style them as active</strong>.</p>

                        <!-- Active Item -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Active Item
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Regular link</a>
                                <a class="dropdown-item active" href="#">Active link</a>
                                <a class="dropdown-item" href="#">Another link</a>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Headers</h4>
                        <p class="text-muted font-14">Add a header to label sections of actions in any dropdown menu.</p>

                        <!-- Header Item -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Header
                            </button>
                            <div class="dropdown-menu">
                                <h6 class="dropdown-header">Dropdown header</h6>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Centered dropdowns</h4>
                        <p class="text-muted font-14">Make the dropdown menu centered below the toggle with <code>.dropdown-center</code> on the parent element.</p>
                        <div class="d-flex flex-wrap gap-2">
                            <div class="dropdown-center">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Centered dropdown
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Action two</a></li>
                                    <li><a class="dropdown-item" href="#">Action three</a></li>
                                </ul>
                            </div>

                            <div class="dropup-center dropup">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Centered dropup
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Action two</a></li>
                                    <li><a class="dropdown-item" href="#">Action three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Auto close behavior</h4>
                        <p class="text-muted font-14">By default, the dropdown menu is closed when clicking inside or outside the dropdown menu. You can use the <code>autoClose</code> option to change this behavior of the dropdown.</p>
                        <div class="d-flex flex-wrap gap-2">
                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    Default dropdown
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                                    Clickable inside
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    Clickable outside
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                    Manual close
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Forms</h4>
                        <p class="text-muted font-14">Put a form within a dropdown menu, or make it into a dropdown menu, and use margin or padding utilities to give it the negative space you require.</p>

                        <!-- Forms -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Form
                            </button>
                            <div class="dropdown-menu">
                                <form class="px-4 py-3">
                                    <div class="mb-3">
                                        <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                    </div>
                                    <div class="mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                            <label class="form-check-label" for="dropdownCheck">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">New around here? Sign up</a>
                                <a class="dropdown-item" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div><!-- container -->



    <!-- End Content-->
@endsection
