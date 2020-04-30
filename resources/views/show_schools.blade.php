<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EDUProfiles</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Rapid - v2.0.0
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section class="nav" id="header">
        <div class="container">
            <div class="logo float-left">
                <h1 class="text-light"><a class="scrollto" href="#intro"><span>EDU Profiles</span></a></h1>
            </div>
            <nav class="main-nav navbar-expand-lg float-right d-none d-lg-block">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>

                {{-- <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact Us</a>
                        </li>

                    </ul>
                </div> --}}

            </nav>


        </div>
    </section>

    <!-- Vendor JS Files -->

    <!-- ======= Hero Section ======= -->
    <header class="header-sm  text-left" id="#hero">
        <div class="over">
            <div class="container">
                <div class="content-wrapper">
                    <a href="{{url('/')}}" class="home">Home page</a>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    <a href="#" class="normal">profile</a>

                </div>
            </div>

        </div>
    </header><!-- End Hero -->
    <main id="main">

        <!-- ======= school Section ======= -->
        <section class="school profile">
            <div class="over">
                <div class="container">

                    <header class="section-header">
                        <h3>school profiles</h3>
                    </header>

                    <div class="row">
                        @foreach ($schools as $item)
                        <div class="col-lg-4">
                            <div class="card-wrapper" style="margin-bottom: 20px;">
                                <div class="img-wrapper">
                                    <img src="{{asset($item->photo ?? 'assets/img/school2.jpeg')}}" class="img" />
                                    <div class="icon-wrapper">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="info-wrapper">
                                    <h4 class="title"> {{$item->name}}</h4>
                                    <p class="content">
                                      {{$item->about}}
                                    </p>
                                <a href="{{url('profile-school/'.$item->id)}}" class="normal_link">Go to school profile</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </section><!-- End school Section -->






        <!--start:: footer-->
        <section class="footer">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="inline-content text-left">
                            <h3>About Us</h3>
                            <p class="content">
                                We are a platform that make admission for student by transmits the profiles including
                                all information
                                about them to school and also provide pages about all private school including uniform
                                and buses
                                Reservation .
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="inline-content">
                            <h5>Contact</h5>

                            <p class="content"><i class="fa fa-envelope" aria-hidden="true"></i> Supportcenter@info.com
                            </p>

                        </div>


                    </div>

                    <div class="col-lg-4">
                        <div class="inline-content">
                            <h5>Sections</h5>
                            <ul class="pre-links">
                                <li>About</li>
                                <li>Services</li>
                                <li>Signup/login</li>
                                <li>Contact Us</li>

                            </ul>

                        </div>

                    </div>
                </div>

            </div>

        </section>
        <!--end :: footer-->

        <!--start:: copy-->
        <section class="copy text-center">

            <div class="container">
                <div class="row">

                    <div class="col-lg">

                        <div class="inline-content">
                            <p> &copy; Copyright <strong>Rapid</strong> All right reserved.</p>
                        </div>


                    </div>



                </div>

            </div>

        </section>


        <!--end :: copy-->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>




        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
        <script src="{{asset('assets/vendor/mobile-nav/mobile-nav.js')}}"></script>
        <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
