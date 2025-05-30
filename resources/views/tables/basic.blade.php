@extends('layouts.vertical', ['page_title' => 'Basic Tables', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Basic Tables</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Basic example</h4>
                        <p class="text-muted fs-14">
                            For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Date of Birth</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Risa D. Pearson</td>
                                        <td>336-508-2157</td>
                                        <td>July 24, 1950</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Ann C. Thompson</td>
                                        <td>646-473-2057</td>
                                        <td>January 25, 1959</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>Paul J. Friend</td>
                                        <td>281-308-0793</td>
                                        <td>September 1, 1939</td>
                                        <td>Canada</td>
                                    </tr>
                                    <tr>
                                        <td>Linda G. Smith</td>
                                        <td>606-253-1207</td>
                                        <td>May 3, 1962</td>
                                        <td>Brazil</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Inverse table</h4>
                        <p class="text-muted fs-14">
                            You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code>.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-dark mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Date of Birth</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Risa D. Pearson</td>
                                        <td>336-508-2157</td>
                                        <td>July 24, 1950</td>
                                        <td>Malaysia</td>
                                    </tr>
                                    <tr>
                                        <td>Ann C. Thompson</td>
                                        <td>646-473-2057</td>
                                        <td>January 25, 1959</td>
                                        <td>Belgium</td>
                                    </tr>
                                    <tr>
                                        <td>Paul J. Friend</td>
                                        <td>281-308-0793</td>
                                        <td>September 1, 1939</td>
                                        <td>Australia</td>
                                    </tr>
                                    <tr>
                                        <td>Sean C. Nguyen</td>
                                        <td>269-714-6825</td>
                                        <td>February 5, 1994</td>
                                        <td>Algeria</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Striped rows</h4>
                        <p class="text-muted fs-14">
                            Use <code>.table-striped</code> to add zebra-striping to any table row
                            within the <code>&lt;tbody&gt;</code>.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Account No.</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Risa D. Pearson
                                        </td>
                                        <td>AC336 508 2157</td>
                                        <td>July 24, 1950</td>
                                        <td>
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Ann C. Thompson
                                        </td>
                                        <td>SB646 473 2057</td>
                                        <td>January 25, 1959</td>
                                        <td>
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Paul J. Friend
                                        </td>
                                        <td>DL281 308 0793</td>
                                        <td>September 1, 1939</td>
                                        <td>
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Sean C. Nguyen
                                        </td>
                                        <td>CA269 714 6825</td>
                                        <td>February 5, 1994</td>
                                        <td>
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Table head options</h4>
                        <p class="text-muted fs-14">
                            Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-centered mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Product</th>
                                        <th>Courier</th>
                                        <th>Process</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ASOS Ridley High Waist</td>
                                        <td>FedEx</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>Delivered</td>
                                    </tr>
                                    <tr>
                                        <td>Marco Lightweight Shirt</td>
                                        <td>DHL</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-lg bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>Shipped</td>
                                    </tr>
                                    <tr>
                                        <td>Half Sleeve Shirt</td>
                                        <td>Bright</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>Order Received</td>
                                    </tr>
                                    <tr>
                                        <td>Lightweight Jacket</td>
                                        <td>FedEx</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>Delivered</td>
                                    </tr>
                                    <tr>
                                        <td>Cargo Pant & Shirt</td>
                                        <td>FedEx</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-lg bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>Payment Failed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Hoverable rows</h4>
                        <p class="text-muted fs-14">
                            Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-hover table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ASOS Ridley High Waist</td>
                                        <td>$79.49</td>
                                        <td><span class="badge bg-primary">82 Pcs</span></td>
                                        <td>$6,518.18</td>
                                    </tr>
                                    <tr>
                                        <td>Marco Lightweight Shirt</td>
                                        <td>$128.50</td>
                                        <td><span class="badge bg-primary">37 Pcs</span></td>
                                        <td>$4,754.50</td>
                                    </tr>
                                    <tr>
                                        <td>Half Sleeve Shirt</td>
                                        <td>$39.99</td>
                                        <td><span class="badge bg-primary">64 Pcs</span></td>
                                        <td>$2,559.36</td>
                                    </tr>
                                    <tr>
                                        <td>Lightweight Jacket</td>
                                        <td>$20.00</td>
                                        <td><span class="badge bg-primary">184 Pcs</span></td>
                                        <td>$3,680.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Small table</h4>
                        <p class="text-muted fs-14">
                            Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-sm table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ASOS Ridley High Waist</td>
                                        <td>$79.49</td>
                                        <td><span class="badge bg-primary">82 Pcs</span></td>
                                        <td>$6,518.18</td>
                                    </tr>
                                    <tr>
                                        <td>Marco Lightweight Shirt</td>
                                        <td>$128.50</td>
                                        <td><span class="badge bg-primary">37 Pcs</span></td>
                                        <td>$4,754.50</td>
                                    </tr>
                                    <tr>
                                        <td>Half Sleeve Shirt</td>
                                        <td>$39.99</td>
                                        <td><span class="badge bg-primary">64 Pcs</span></td>
                                        <td>$2,559.36</td>
                                    </tr>
                                    <tr>
                                        <td>Lightweight Jacket</td>
                                        <td>$20.00</td>
                                        <td><span class="badge bg-primary">184 Pcs</span></td>
                                        <td>$3,680.00</td>
                                    </tr>
                                    <tr>
                                        <td>Marco Shoes</td>
                                        <td>$28.49</td>
                                        <td><span class="badge bg-primary">69 Pcs</span></td>
                                        <td>$1,965.81</td>
                                    </tr>
                                    <tr>
                                        <td>ASOS Ridley High Waist</td>
                                        <td>$79.49</td>
                                        <td><span class="badge bg-primary">82 Pcs</span></td>
                                        <td>$6,518.18</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bordered table</h4>
                        <p class="text-muted fs-14">
                            Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-bordered table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Account No.</th>
                                        <th>Balance</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Risa D. Pearson
                                        </td>
                                        <td>AC336 508 2157</td>
                                        <td>July 24, 1950</td>
                                        <td class="text-center">
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-7.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Ann C. Thompson
                                        </td>
                                        <td>SB646 473 2057</td>
                                        <td>January 25, 1959</td>
                                        <td class="text-center">
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-8.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Paul J. Friend
                                        </td>
                                        <td>DL281 308 0793</td>
                                        <td>September 1, 1939</td>
                                        <td class="text-center">
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-9.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Sean C. Nguyen
                                        </td>
                                        <td>CA269 714 6825</td>
                                        <td>February 5, 1994</td>
                                        <td class="text-center">
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bordered color table</h4>
                        <p class="text-muted fs-14">
                            Add <code>.table-bordered</code> & <code>.border-primary</code> can be added to change colors.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-bordered border-primary table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Account No.</th>
                                        <th>Balance</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Risa D. Pearson
                                        </td>
                                        <td>AC336 508 2157</td>
                                        <td>July 24, 1950</td>
                                        <td class="text-center">
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-7.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Ann C. Thompson
                                        </td>
                                        <td>SB646 473 2057</td>
                                        <td>January 25, 1959</td>
                                        <td class="text-center">
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-8.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Paul J. Friend
                                        </td>
                                        <td>DL281 308 0793</td>
                                        <td>September 1, 1939</td>
                                        <td class="text-center">
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="/images/users/avatar-9.jpg" alt="table-user" class="me-2 rounded-circle" />
                                            Sean C. Nguyen
                                        </td>
                                        <td>CA269 714 6825</td>
                                        <td>February 5, 1994</td>
                                        <td class="text-center">
                                            <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Always responsive</h4>
                        <p class="text-muted fs-14">
                            Across every breakpoint, use
                            <code>.table-responsive</code> for horizontally scrolling tables. Use
                            <code>.table-responsive{-sm|-md|-lg|-xl}</code> as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave
                            normally and not scroll horizontally.
                        </p>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Basic Borderless Example</h4>
                        <p class="text-muted fs-14">
                            Add <code>.table-borderless</code> for a table without borders.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-centered table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Date of Birth</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Risa D. Pearson</td>
                                        <td>336-508-2157</td>
                                        <td>July 24, 1950</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Ann C. Thompson</td>
                                        <td>646-473-2057</td>
                                        <td>January 25, 1959</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>Paul J. Friend</td>
                                        <td>281-308-0793</td>
                                        <td>September 1, 1939</td>
                                        <td>Canada</td>
                                    </tr>
                                    <tr>
                                        <td>Linda G. Smith</td>
                                        <td>606-253-1207</td>
                                        <td>May 3, 1962</td>
                                        <td>Brazil</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Inverse Borderless table</h4>
                        <p class="text-muted fs-14">
                            Add <code>.table-borderless</code> for a table without borders.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-dark table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Date of Birth</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Risa D. Pearson</td>
                                        <td>336-508-2157</td>
                                        <td>July 24, 1950</td>
                                        <td>Malaysia</td>
                                    </tr>
                                    <tr>
                                        <td>Ann C. Thompson</td>
                                        <td>646-473-2057</td>
                                        <td>January 25, 1959</td>
                                        <td>Belgium</td>
                                    </tr>
                                    <tr>
                                        <td>Paul J. Friend</td>
                                        <td>281-308-0793</td>
                                        <td>September 1, 1939</td>
                                        <td>Australia</td>
                                    </tr>
                                    <tr>
                                        <td>Sean C. Nguyen</td>
                                        <td>269-714-6825</td>
                                        <td>February 5, 1994</td>
                                        <td>Algeria</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Active tables</h4>
                        <p class="text-muted fs-14">
                            Highlight a table row or cell by adding a <code>.table-active</code> class.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Date of Birth</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-active">
                                        <td>Risa D. Pearson</td>
                                        <td>336-508-2157</td>
                                        <td>July 24, 1950</td>
                                        <td>Belgium</td>
                                    </tr>
                                    <tr>
                                        <td>Ann C. Thompson</td>
                                        <td>646-473-2057</td>
                                        <td>January 25, 1959</td>
                                        <td>Malaysia</td>
                                    </tr>
                                    <tr>
                                        <td>Paul J. Friend</td>
                                        <td>281-308-0793</td>
                                        <td>September 1, 1939</td>
                                        <td>Algeria</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Linda G. Smith</td>
                                        <td colspan="2" class="table-active">606-253-1207</td>
                                        <td>Australia</td>
                                    </tr>
                                    <tr>
                                        <td>Paul J. Friend</td>
                                        <td>281-308-0793</td>
                                        <td>September 1, 1939</td>
                                        <td>India</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- end table-responsive-->
                    </div><!-- end card body-->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Nesting</h4>
                        <p class="text-muted fs-14">
                            Border styles, active styles, and table variants are not inherited by nested tables.
                        </p>

                        <div class="table-responsive-sm">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Date of Birth</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Risa D. Pearson</td>
                                        <td>336-508-2157</td>
                                        <td>July 24, 1950</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Date of Birth</th>
                                                        <th>Country</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Risa D. Pearson</td>
                                                        <td>336-508-2157</td>
                                                        <td>July 24, 1950</td>
                                                        <td>Malaysia</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ann C. Thompson</td>
                                                        <td>646-473-2057</td>
                                                        <td>January 25, 1959</td>
                                                        <td>Canada</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Linda G. Smith</td>
                                        <td>606-253-1207</td>
                                        <td>September 2, 1939</td>
                                        <td>Belgium</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- end card body-->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div> <!-- container -->
@endsection
