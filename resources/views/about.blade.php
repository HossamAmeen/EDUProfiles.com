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
                <h1 class="text-light"><a class="scrollto" href="#intro"><span><img src="assets/img/logo.jpg">EDU
                            Profiles</span></a></h1>
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
                            <a class="nav-link" href="#">About Us</a>
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
                    <a href="#" class="normal">about-School</a>

                </div>
            </div>

        </div>
    </header><!-- End Hero -->
    <main id="main">

        <!--start :: section about  -->

        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 imgs">
                        <div class="img image"><img src="{{asset('assets/img/school2.jpeg')}}"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inline-content inline">
                            <h6>About School</h6>
                            <h3>Read More About School</h3>
                            <p>We are providing this online service to avoid crowding while admission time and
                                the problems that happen because Insufficient awareness of the required information .
                                Once the user logs in or sign up , there is a notification will appear for the school
                                that the user has chosen with their private file that have all the required information
                                to decide the Accept or reject the request based on the conditions then send the
                                decision .
                                if the student accepted then the school will send the first approval and all the details
                                about
                                tests and interviews and the the user know all the information about the bus and uniform
                                and can reserve it</p>

                        </div>

                    </div>
                    <!--div inline-content-->



                </div>


            </div>

            </div>
        </section>
        <!--end :: section about  -->

        <!--start ::login school-->
        <section class="loginstud">
            <div class="over">
                <div class="container">
                    <div class="row">
                        <form class="loginstu " action="{{url('login-school')}}" method="POST">
                            @csrf
                            @if (session()->get('login') )
                            <div class="alert alert-danger">
                                <strong>{{session()->get('login')}}</strong>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{ old('email')}}" aria-describedby="emailHelp" placeholder="Enter email"
                                    required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn">Login</button>
                            <p>Dont have account? <a href="{{url('register-school')}}" class="link">Sign Up</a></p>
                        </form>

                    </div>
                </div>

            </div>
        </section>
        <!--end ::login school-->









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
