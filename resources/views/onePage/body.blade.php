<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Gurindam - Gapura Pembelajaran Individu Aktif Mandiri | Home</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('onepage/assets/images/logo-gurindam-sm.png') }}" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('onepage/assets/css/slick.css') }}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ asset('onepage/assets/css/font-awesome.min.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('onepage/assets/css/LineIcons.css') }}">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('onepage/assets/css/animate.css') }}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('onepage/assets/css/magnific-popup.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('onepage/assets/css/bootstrap.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('onepage/assets/css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('onepage/assets/css/style.css') }}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <div class="row">
                                    <div class="d-flex align-items-end">
                                        <img class="ml-3"
                                            src="{{ asset('onepage/assets/images/logo-gurindam-sm.png') }}"
                                            alt="Logo">
                                        <h5 class="ml-1 text-black-50">GURINDAM</h5>
                                    </div>
                                </div>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#content">Content</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="#portfolio">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#blog">Blog</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="#about">About </a>
                                    </li>
                                    <li class="nav-item d-lg-none">
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li class="nav-item d-lg-none">
                                        <a href="/dashboard"><i class="lni lni-arrow-right mr-1"></i>Login </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="#contact">Contact</a>
                                    </li> --}}
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-lg-block">
                                <a class="main-btn" href="/dashboard">Login</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->


        {{-- section home --}}
        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center"
            style="background-image: url({{ asset('onepage/assets/images/header-hero.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Be a
                                <b>Master,</b><br><span>Smarter, </span><b>Together.</b>
                            </h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                <b><i>Knowledge Management System</i></b> Badan Kepegawaian Negara Kantor Regional XII |
                                Gapura Pembelajaran Individu Aktif Mandiri
                            </p>
                            <div class="header-singup wow fadeInUp mt-5" data-wow-duration="1s" data-wow-delay="0.8s">
                                <input type="text" placeholder="Masukkan keyword ...">
                                <button class="main-btn">Cari</button>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s"
                data-wow-delay="1.1s">
                <div class="image">
                    <img src="{{ asset('onepage/assets/images/knowledge.png') }}" alt="Hero Image">
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
        {{-- end section home --}}
    </header>

    @yield('konten')

    {{-- section about --}}
    <section id="about" class="about-area pt-70 border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2 class="welcome"><b>Gurindam</b> Crafted to</h2>
                        <h3 class="title">Capture our <span>knowledge and context</span> in a discoverable
                            format to <span>unblock ourselves.</span></h3>
                    </div>
                </div>
            </div> <!-- row -->
            {{-- jargon gurindam --}}
            <div class="py-4">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="d-flex flex-column text-center">
                                <div class="service-icon mb-20">
                                    <img src="{{ asset('onepage/assets/images/service-1.png') }}" alt="Icon">
                                </div>
                                <div class="service-content media-body">
                                    <h4 class="service-title">Increase productivity</h4>
                                    <p class="text">If somebody somewhere has the right answer, suddenly you
                                        have
                                        it
                                        too, so collaborate better.</p>
                                </div>
                            </div>
                            <div class="shape shape-1">
                                <img src="{{ asset('onepage/assets/images/shape/shape-1.svg') }}" alt="shape">
                            </div>
                            <div class="shape shape-2">
                                <img src="{{ asset('onepage/assets/images/shape/shape-2.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service service-border d-flex wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <div class="d-flex flex-column text-center">
                                <div class="service-icon mb-20">
                                    <img style="width: 100px"
                                        src="{{ asset('onepage/assets/images/service-up2.png') }}" alt="Icon">
                                </div>
                                <div class="service-content media-body">
                                    <h4 class="service-title">Accelerate Service time</h4>
                                    <p class="text">Shorten the time between initial idea and realization.
                                        Take
                                        delays
                                        and misinformation out of the equation.</p>
                                </div>
                            </div>
                            <div class="shape shape-3">
                                <img src="{{ asset('onepage/assets/images/shape/shape-3.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="d-flex flex-column text-center">
                                <div class="service-icon mb-20">
                                    <img src="{{ asset('onepage/assets/images/service-3.png') }}" alt="Icon">
                                </div>
                                <div class="service-content media-body">
                                    <h4 class="service-title">Protect institutional knowledge</h4>
                                    <p class="text">People come and people go, but if we capture our
                                        contributions
                                        in
                                        one central place, that expertise sticks around.</p>
                                </div>
                            </div>
                            <div class="shape shape-4">
                                <img src="{{ asset('onepage/assets/images/shape/shape-4.svg') }}" alt="shape">
                            </div>
                            <div class="shape shape-5">
                                <img src="{{ asset('onepage/assets/images/shape/shape-5.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                </div>
            </div>
            {{-- end jargon gurindam --}}

            <div class="row justify-content-center pt-60 pb-60">
                <div class="col-lg-10">
                    <div class="about-content">
                        <div class="about-counter">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">1000</span></span>
                                            <p class="text">Knowledge</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.6s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span
                                                    class="counter">99</span>%</span>
                                            <p class="text">Answered Questions</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-3">
                                    <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.9s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span
                                                    class="counter">100</span></span>
                                            <p class="text">Forums</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- about counter -->
                    </div> <!-- about content -->
                </div>
            </div>
        </div>
    </section>
    {{-- end section about --}}

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area bg_cover border-top mt-100"
        style="background-image: url({{ asset('onepage/assets/images/footer-bg.jpg') }})">
        <div class="container">
            <div class="footer-widget pt-30 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 order-sm-1 order-lg-1">
                        <div class="footer-about pt-40">
                            <a href="#">
                                <div class="row">
                                    <div class="d-flex align-items-end ml-3">
                                        <img src="{{ asset('onepage/assets/images/logo-gurindam-sm.png') }}"
                                            alt="Logo">
                                        <h5 class="ml-1 text-black-50">GURINDAM</h5>
                                    </div>
                                </div>
                            </a>
                            {{-- <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Repellendus, repudiandae! Totam, nemo sed? Provident.</p>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Repellendus</p> --}}
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-2">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">Content</h5>
                            </div>
                            <ul>
                                <li><a href="#">Articles</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Q n A</a></li>
                                <li><a href="#">Groups</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-4 order-lg-3">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">About Us</h5>
                            </div>
                            <ul>
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Why us</a></li>
                                <li><a href="#">Awards & Recognitions</a></li>
                                <li><a href="#">Team</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-4">
                        <div class="footer-contact pt-40">
                            <div class="footer-title">
                                <h5 class="title">Contact Info</h5>
                            </div>
                            <div class="contact pt-10">
                                <p class="text">Jalan Hangtuang Ujung No. 148, Kota Pekanbaru</p>
                                <p class="text">kanreg12@gmail.com</p>
                                <p class="text">0761-</p>

                                <ul class="social mt-40">
                                    <li><a href="#"><i class="lni-facebook"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin"></i></a></li>
                                </ul>
                            </div> <!-- contact -->
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright text-center">
                <p class="text">© 2022 Crafted by <a href="https://pekanbaru.bkn.go.id" rel="nofollow"
                        target="_blank">Prakome
                        Pekanbaru</a> All Rights Reserved.</p>
            </div>
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->


    <!--====== Jquery js ======-->
    <script src="{{ asset('onepage/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('onepage/assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('onepage/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('onepage/assets/js/bootstrap.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('onepage/assets/js/slick.min.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('onepage/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('onepage/assets/js/isotope.pkgd.min.js') }}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{ asset('onepage/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('onepage/assets/js/jquery.counterup.min.js') }}"></script>

    <!--====== Circles js ======-->
    <script src="{{ asset('onepage/assets/js/circles.min.js') }}"></script>

    <!--====== Appear js ======-->
    <script src="{{ asset('onepage/assets/js/jquery.appear.min.js') }}"></script>

    <!--====== WOW js ======-->
    <script src="{{ asset('onepage/assets/js/wow.min.js') }}"></script>

    <!--====== Headroom js ======-->
    <script src="{{ asset('onepage/assets/js/headroom.min.js') }}"></script>

    <!--====== Jquery Nav js ======-->
    <script src="{{ asset('onepage/assets/js/jquery.nav.js') }}"></script>

    <!--====== Scroll It js ======-->
    <script src="{{ asset('onepage/assets/js/scrollIt.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('onepage/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('onepage/assets/js/main.js') }}"></script>

</body>

</html>
