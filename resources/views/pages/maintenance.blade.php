<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Maintenance'])

    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
    @vite(['resources/scss/icons.scss'])

</head>

<body class="authentication-bg position-relative">
    <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1920 1024">
            <g mask="url(&quot;#SvgjsMask1046&quot;)" fill="none">
                <rect width="1920" height="1024" x="0" y="0" fill="url(#SvgjsLinearGradient1047)"></rect>
                <path d="M1920 0L1864.16 0L1920 132.5z" fill="rgba(255, 255, 255, .1)"></path>
                <path d="M1864.16 0L1920 132.5L1920 298.4L1038.6100000000001 0z" fill="rgba(255, 255, 255, .075)"></path>
                <path d="M1038.6100000000001 0L1920 298.4L1920 379.53999999999996L857.7000000000002 0z" fill="rgba(255, 255, 255, .05)"></path>
                <path d="M857.7 0L1920 379.53999999999996L1920 678.01L514.57 0z" fill="rgba(255, 255, 255, .025)"></path>
                <path d="M0 1024L939.18 1024L0 780.91z" fill="rgba(0, 0, 0, .1)"></path>
                <path d="M0 780.91L939.18 1024L1259.96 1024L0 585.71z" fill="rgba(0, 0, 0, .075)"></path>
                <path d="M0 585.71L1259.96 1024L1426.79 1024L0 408.19000000000005z" fill="rgba(0, 0, 0, .05)"></path>
                <path d="M0 408.19000000000005L1426.79 1024L1519.6599999999999 1024L0 404.09000000000003z" fill="rgba(0, 0, 0, .025)"></path>
            </g>
            <defs>
                <mask id="SvgjsMask1046">
                    <rect width="1920" height="1024" fill="#ffffff"></rect>
                </mask>
                <linearGradient x1="11.67%" y1="-21.87%" x2="88.33%" y2="121.88%" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1047">
                    <stop stop-color="#0e2a47" offset="0"></stop>
                    <stop stop-color="#00459e" offset="1"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="card">
                        <div class="card-body p-4">
                            
                            <div class="text-center">
                                <img src="/images/svg/maintenance.svg" height="150" alt="File not found Image">
                                <h3 class="mt-4">Site is Under Maintenance</h3>
                                <p class="text-muted">We're making the system more awesome. We'll be back shortly.</p>
    
                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <div class="text-center mt-3 ps-1 pe-1">
                                            <i class="ri-vip-diamond-line bg-primary maintenance-icon text-white mb-4"></i>
                                            <h5 class="text-uppercase">Why is the Site Down?</h5>
                                            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                        </div>
                                    </div> <!-- end col-->
                                    <div class="col-md-4">
                                        <div class="text-center mt-3 ps-1 pe-1">
                                            <i class="ri-time-line bg-primary maintenance-icon text-white mb-4"></i>
                                            <h5 class="text-uppercase">What is the Downtime?</h5>
                                            <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical but the majority.</p>
                                        </div>
                                    </div> <!-- end col-->
                                    <div class="col-md-4">
                                        <div class="text-center mt-3 ps-1 pe-1">
                                            <i class="ri-question-mark bg-primary maintenance-icon text-white mb-4"></i>
                                            <h5 class="text-uppercase">Do you need Support?</h5>
                                            <p class="text-muted">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embar.. <a href="mailto:#" class="text-muted fw-bold">no-reply@domain.com</a></p>
                                        </div>
                                    </div> <!-- end col-->
                                </div> <!-- end row-->
                            </div> <!-- end /.text-center-->
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        <span class="text-white-50"><script>document.write(new Date().getFullYear())</script> © Jidox - Coderthemes.com</span>
    </footer>
    
    <!-- App js -->

</body>

</html>
