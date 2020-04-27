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


    <!--start :: srction profile-->
    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="name text-left">
                        <h3>Student Name : {{$student->first_name . $student->last_name}} </h3>
                        {{-- <p>Student Number : 00011/2013</p> --}}

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="image">
                        <img src="{{asset($student->photo ?? 'assets/img/1.png' )}}">
                    </div>
                    {{-- <div class="button">
                        <input type="submit" value="Edit" name="" class="btn">
                        <input type="submit" value="Delete" name="" class="btn">
                    </div> --}}
                </div>
                <div class="col-lg-9">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="level text-center">
                                    <h3>{{$student->classlevel}}</h3>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">
                                        <h5>Email:</h5>
                                    </label>
                                    <div class="col-sm-3">
                                        <p>{{$student->email}}</p>
                                    </div>
                                    <input type="submit" value="Edit" name="" class="btn col-sm-3">
                                </div>


                            </div>
                            <!--col-->

                            <!--col-->
                            <div class="col-lg-6">
                                <div class="content">
                                    <h5>Age:</h5>
                                    <h4>{{$student->age}}</h4>
                                </div>
                                <div class="content">
                                    <h5>place of birth:</h5>
                                    <h4>{{$student->place}}</h4>
                                </div>
                                {{-- <div class="content">
                                    <h5>Grade:</h5>
                                    <h4>{{$student->place}}</h4>
                                </div>
                                <div class="content">
                                    <h5>Homeroorn:</h5>
                                    <h4>Green Team</h4>
                                </div> --}}
                                <div class="content">
                                    <h5>Birth Date:</h5>
                                    <h4>{{$student->birth_date}}</h4>
                                </div>


                            </div>
                            <!--col-->
                            <div class="col-lg-6">
                                <div class="content">
                                    <h5>Gender:</h5>
                                    <h4>{{$student->gender}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Adress:</h5>
                                    <h4>{{$student->address}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Nationality :</h5>
                                    <h4>{{$student->nationality}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Religion:</h5>
                                    <h4>{{$student->religion}}</h4>

                                </div>
                                {{-- <div class="content">
                                    <h5>Phone:</h5>
                                    <h4>{{$student->birth_date}}</h4>

                                </div> --}}

                            </div>
                            <!--col-->
                        </div>
                        <!--row-->

                    </div>
                    <!--content-->
                </div>

            </div>
            <!--row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="parent text-left">
                        <h3>PARENTS</h3>
                        <hr>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="father">
                        <h3>My Father</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="content">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="content">
                                    <h5>Name:</h5>
                                    <h4>{{$student->Firstname}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Email:</h5>
                                    <h4>{{$student->E_Mail}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Phone:</h5>
                                    <h4>{{$student->Mobile}}</h4>

                                </div>

                            </div>
                            <!--col-->
                            <div class="col-lg-6">
                                <div class="content">
                                    <h5>Adress:</h5>
                                    <h4>{{$student->City}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Nationality:</h5>
                                    <h4>{{$student->Nationality_f}}</h4>

                                </div>


                            </div>
                            <!--col-->
                        </div>
                        <!--row-->

                    </div>
                    <!--content-->
                </div>

            </div>
            <!--row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="parent text-left">
                        <hr>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="father">
                        <h3>My Mother</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="content">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="content">
                                    <h5>Name:</h5>
                                    <h4>{{$student->Firstname_m}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Email:</h5>
                                    <h4>{{$student->E_Mail_m}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Phone:</h5>
                                    <h4>{{$student->Mobile_m}}</h4>

                                </div>

                            </div>
                            <!--col-->
                            <div class="col-lg-6">
                                <div class="content">
                                    <h5>Adress:</h5>
                                    <h4>{{$student->City_m}}</h4>

                                </div>
                                <div class="content">
                                    <h5>Nationality:</h5>
                                    <h4>{{$student->Nationality_m}}</h4>

                                </div>



                            </div>
                            <!--col-->
                        </div>
                        <!--row-->

                    </div>
                    <!--content-->
                </div>

            </div>
            <!--row-->

        </div>
    </section>
    <!--end :: srction profile-->


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
