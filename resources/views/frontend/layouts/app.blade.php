<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    @include('frontend.partials.styles')
    @yield('styles')
    <style>
        .logo {
            width: 50px;
            /* height: 40px; */
            object-fit: cover;
        }
    </style>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">

            <a href="/" class="navbar-brand">
                {{-- <i class="bi-layers"></i> --}}
                <img src="{{ asset('frontend/logos/cvpt_2.jpg') }}" class="logo" alt="brand_logo">
                {{-- <img src="{{ asset('frontend/logos/cvpt_1.jpeg') }}" class="logo" alt="brand_logo"> --}}
                CVPT Education Global
            </a>

            <a href="" class="custom-btn btn btn-lg d-lg-none ms-auto me-4">
                Log in
                {{-- <i class="bi-download ms-2"></i> --}}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Programs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Our Work
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Contact
                        </a>
                    </li>
                </ul>

                <div class="ms-auto d-none d-lg-block">
                    <a href="" class="custom-btn btn btn-lg">
                        Log in
                        {{-- <i class="bi-download ms-2"></i> --}}
                    </a>
                </div><!-- .ms-auto d-none d-lg-block -->

            </div><!-- .collapse navbar-collapse -->

        </div><!-- .container -->
    </nav>

    @yield('content')

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 me-auto mb-4">
                    <h5 class="text-white mb-3">
                        Newsletter
                    </h5>

                    <form action="" class="custom-form subscribe-form mt-4"
                          role="form">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-7">

                                <input type="email" id="subscribe-email"
                                       name="subscribe-email" pattern="
                                       [^ @]*@[^ @]*" class="form-control"
                                       placeholder="Your email address" required>

                            </div><!-- .col-lg-8 col-md-8 -->

                            <div class="col-lg-4 col-md-4 col-5">
                                <button type="submit" class="form-control" id="subscribe">
                                    Subscribe
                                </button>
                            </div><!-- .col-lg-4 col-md-4 col-5 -->

                        </div><!-- .row -->
                    </form>

                </div><!-- .col-lg-5 me-auto -->

                <div class="col-lg-2 col-12 mx-auto my-lg-0 my-4">
                    <h5 class="text-white mb-3">
                        Services
                    </h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item">
                            <a href="" class="footer-menu-link">
                                Study Abroad
                            </a>
                        </li>

                        <li class="footer-menu-item">
                            <a href="" class="footer-menu-link">
                                Bootcamps
                            </a>
                        </li>
                    </ul>
                </div><!-- .col-lg-2 col-12 mx-auto -->

                <div class="col-lg-2 col-12">
                    <h5 class="text-white mb-3">
                    {{-- <h5 class="text-white "> --}}
                        {{-- <i class="bi-layers"></i> --}}
                        <img src="{{ asset('frontend/logos/cvpt_2.jpg') }}" class="logo" alt="brand_logo">
                        CVPT Education Global
                    </h5>

                    <h6>
                        Viet Nam
                    </h6>
                    <p class="text-white mb-1">
                        Diamond Flower,<br>
                        48 Le Van Luong,<br>
                        Thanh Xuan, Hanoi,<br>
                        Viet Nam.
                    </p>
                    <br>

                    <h6>
                        Nigeria
                    </h6>
                    <p class="text-white mb-1">
                        Greenroof,<br>
                        46 Ohi-Zaiki,<br>
                        Isegen Crescent,<br>
                        Abuja, FCT,<br>
                        Nigeria.
                    </p>

                </div><!-- .col-lg-2 col-12 -->

                <div class="site-footer-bottom mt-5">
                    <div class="row pt-4">
                        <div class="col-lg-6 col-12">

                            <p class="copyright-text tooplate-link">
                                Copyright © 2023 CVPT Education Global.
                                <br>Developers:
                                <a href="" rel="noofollow"
                                   target="_blank">
                                   CVPT Software
                                </a>
                            </p>

                        </div><!-- .col-lg-6 col-12 -->
                        <div class="col-lg-3 col-12 ms-auto">

                            <ul class="social-icon">
                                <li>
                                    <a href="" class="social-icon-link
                                       bi-facebook"></a>
                                </li>
                                <li>
                                    <a href="" class="social-icon-link
                                       bi-twitter"></a>
                                </li>
                                <li>
                                    <a href="" class="social-icon-link
                                       bi-instagram"></a>
                                </li>
                                <li>
                                    <a href="" class="social-icon-link
                                       bi-linkedin"></a>
                                </li>
                                <li>
                                    <a href="" class="social-icon-link
                                       bi-youtube"></a>
                                </li>
                            </ul>

                        </div><!-- .col-lg-3 col-12 ms-auto -->
                    </div><!-- .row pt-4 -->
                </div><!-- .site-footer-bottom -->

            </div><!-- .row -->
        </div><!-- .container -->
    </footer>

    @include('frontend.partials.scripts')
    @yield('scripts')
</body>
</html>
