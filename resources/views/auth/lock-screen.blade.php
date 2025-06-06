<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Lock Screen'])
    @include('layouts.shared/head-css')
    @vite(['resources/js/head.js'])
</head>

    <body class="authentication-bg">

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
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo -->
                            <div class="card-header pt-4 text-center">
                                <div class="auth-brand mb-0">
                                    <a href="/" class="logo-dark">
                                        <span><img src="/images/logo-dark.png" alt="dark logo" height="28"></span>
                                    </a>
                                    <a href="/" class="logo-light">
                                        <span><img src="/images/logo.png" alt="logo" height="28"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <img src="/images/users/avatar-1.jpg" height="64" alt="user-image" class="rounded-circle shadow">
                                    <h4 class="text-dark-50 text-center mt-3">Hi ! Tosha </h4>
                                    <p class="text-muted mb-4">Enter your password to access the admin.</p>
                                </div>

                                <form action="#">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="mb-0 text-center">
                                        <button class="btn btn-primary" type="submit">Log In</button>
                                    </div>
                                </form>
                                
                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card-->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Not you? return <a href="{{ route('second', ['auth', 'login']) }}" class="text-white ms-1 link-offset-3 text-decoration-underline"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt fw-medium">
            <span class="text-white-50"><script>document.write(new Date().getFullYear())</script> © Jidox - Coderthemes.com</span>
        </footer>

    @vite(['resources/js/app.js'])
    @include('layouts.shared/footer-script')
</body>

</html>

