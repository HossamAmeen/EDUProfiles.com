<!DOCTYPE html>
<html>

<head>
    @include('newHead')

</head>



<!-- 
        start home
      -->


<section class="home">

    <div class="over"></div>

    <section class="nav " id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container">

                    <a class="navbar-brand" href="#">
                        <h1> <img src="{{asset('assets2/img/logo.jpg')}}"> <span>EDU Profiles</span></h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item ">
                                <a class="nav-link" href="#aboutus">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#login">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#School-Profiles">School Profiles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contactus">contact us</a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>


    </section>


    <div class="content wow zoomIn text-center ">
        <div class="container">
            <p class="lead">Get your admission today from any school do you want</p>
        </div>

    </div>
    <div class="owl">
        <div class="owl-carousel owl-theme ">
            <img src="{{asset('assets2/img/intro-bg.jpg')}}">
            <div>
                <img src="{{asset('assets2/img/index-img/slider.jpeg')}}">
            </div>
            <div>
                <img src="{{asset('assets2/img/intro-bg.jpg')}}">
            </div>
            <div>
                <img src="{{asset('assets2/img/index-img/slider.jpeg')}}">
            </div>
        </div>
    </div>

</section>
<!-- 
  end home 
-->
<!-- 
  start icons
-->
@if(session('school_id') != null || session('student_id') != null)
<section class="icons">
    <div class="container">
        <div class=" row">
            <div class="col-sm-4">
                <div style="margin: auto; text-align: center;">
                    <div class="icon-one hvr-buzz ">
                    @if(session('school_id') != null)
                    <a href="{{url('profile-school/'.session('school_id'))}}">
                        <img src="{{asset(session('school_photo') ?? 'assets2/images/school2.jpeg')}}" alt="hello"
                            class="rounded-circle circle2 ">
                    </a>
                    @else
                    <a href="{{url('profile-student/'.session('student_id'))}}">
                        <img src="{{asset(session('student_photo') ?? 'assets/img/1.png')}}" alt="hello"
                            class="rounded-circle circle2 ">
                    </a>
                    @endif

                    </div>
                    <div class="text">
                        <p>my profile</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <a href="{{url('get-notifications')}}" style="color: black">
                <div style="margin: auto; text-align: center;">
                    <div class="icon-two hvr-buzz ">
                        <div class="icon2 text-center">
                            <div class="in3">
                                <div class="in4">
                                    <span class="fas fa-bell fa-3x"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p>notification</p>
                    </div>
                </div>
            </a>
            </div>


            <div class="col-sm-4">
                <a href="{{url('show-schools')}}" style="color: black">
                <div style="margin: auto; text-align: center;">
                    <div class="icon-one hvr-buzz ">
                        <div class="icon1 text-center">
                            <div class="in1">
                                <div class="in2">
                                    <span class="fas fa-school fa-3x"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                   <p>School Profile</p>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
</section>

<!-- end icons-->


<div class="content wow zoomIn text-center ">
    <div class="container">
        <p class="lead">Get your admission today from any school do you want</p>
    </div>

</div>
{{-- <div class="owl">
    <div class="owl-carousel owl-theme ">
        <img src="{{asset('assets2/img/intro-bg.jpg')}}">
        <div>
            <img src="{{asset('assets2/img/index-img/WhatsApp Image 2020-05-30 at 8.16.22 PM.jpeg')}}">
        </div>
        <div>
            <img src="{{asset('assets2/img/intro-bg.jpg')}}">
        </div>
        <div>
            <img src="{{asset('assets2/img/index-img/WhatsApp Image 2020-05-30 at 8.16.22 PM.jpeg')}}">
        </div>
    </div>
</div> --}}

</section>
@endif
<!-- 
  end home 
-->

{{-- @if(session('school_id') != null || session('student_id') != null) --}}


<!-- 
  start login
-->

<section id="login">
    <div class="row">

        <div class="col-md-6">

            <div class="contain1">
                <h2>
                    Register now to get your profile
                </h2>
                <br>

                <div class="buttuns">
                    <a class="form-check-label btn btn-danger"
                            href="{{url('register-school')}}">Register School</a>
                            <br><br>
                    {{-- <span> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</span> --}}
                    {{-- <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2"
                        checked> --}}
                    <a class="form-check-label btn btn-danger" href="{{url('register-student')}}" for="gridRadios2">
                        Register Student
                    </a>
                    <br>
                    <br><br><br>
                    {{-- <a class="btn btn-danger" href="">Register </a> --}}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="log">
                <div class="over2"></div>
                <div class="contain2">
                    <h1>LOGIN TO YOUR ACCOUNT</h1>
                    <form action="{{url('login-school')}}" method="POST">
                        @csrf

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>{{$errors->first()}}</strong>
                        </div>

                        @endif
                        <input class="input" name="email" value="{{Request::old('email')}}" type="email"
                            placeholder="email" required>
                        <input class="input" name="password" type="password" placeholder="password" required>
                        <button class=" btn btn-warning">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 
  end login
-->

<!--
  start services
-->

<section id="Services" class=" services text-center">
    <div class="container wow fadeInUp">
        <h4>Services</h4>
        <div class="row">

            <div class="col-md-6 col-lg-4 ">
                <div class="contain hvr-grow">
                    <div class="icon-circule circ1">
                        <span class="fas fa-compass fa-2x comp"></span>
                    </div>
                    <div>
                        <a href="">
                            <h6>Student Profile & certificates</h6>
                        </a>
                        <p class="lead"> you can find here all you need about Student certificates </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 ">
                <div class="contain hvr-grow">
                    <div class="icon-circule circ2">
                        <span class="fas fa-globe fa-2x globe"></span>
                    </div>
                    <div>
                        <a href="">
                            <h6>School Profile & reviwes</h6>
                        </a>
                        <p class="lead"> you can find here all you need about Student certificates </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 ">
                <div class="contain hvr-grow">
                    <div class="icon-circule circ3">
                        <span class="fas fa-clock fa-2x clock"></span>
                    </div>
                    <div>
                        <a href="">
                            <h6>Reservation : Buses , uniforms</h6>
                        </a>
                        <p class="lead"> you can find here all you need about Student certificates </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<!--
  end services
-->

<!-- ======= school Section ======= -->
<section class="school pb-5 pt-5" id="School-Profiles">
    <div class="over">
        <div class="container w-100">

            <header class="section-header pb-4">
                <h3>school profiles</h3>
                <div style="width: 8%; height: 4px; background-color:#ffb606;" class="m-auto"></div>
            </header>
            <div class="row sec3">
                @foreach ($schools as $item)
                <div class="col-lg-4 ">
                    <div class="card-wrapper" id="card-school{{$item->id}}">
                        <div class="img-wrapper">
                            <img src="{{asset($item->photo ?? 'assets2/images/school2.jpeg')}}"
                                class="img rounded-circle" />
                            <div class="icon-wrapper">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="info-wrapper">
                            <h4 class="title">{{$item->name}}</h4>
                            <p class="content">
                                {{$item->about}}
                            </p>
                            <a href="{{url('profile-school/'.$item->id)}}" class="normal_link">Go to school
                                profile</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12"><a href="{{url('show-schools')}}" class="btn">More</a></div>
            </div>
        </div>
    </div>
</section>
<!-- End school Section -->



<!--start about section-->
<div class="about-sec" id="aboutus">
    <div class="layer">
        <div class="container">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="sec2-home">
                                <h1>ABOUT US</h1>
                                <div style="width: 5%; height: 4px; background-color: #ffb606;" class="m-auto">
                                </div>

                                <p>We are a platform that make admission for student by transmits 
                                    the profiles including all information about them to school and also
                                     provide pages about all private school including uniform and buses 
                                     Reservation As most of schools have crowding while admission time With 
                                     missed some papers in their documentation although parents don’t know all 
                                     information about schools because 
                                    Lack of awareness according to their main problems showing it in.</p>



                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="sec2-home">
                                <h3>ABOUT SCHOOL</h3>
                                <div style="width: 5%; height: 4px; background-color: #ffb606;" class="m-auto">
                                </div>


                                <p> About student 
                                    The steps to get your reservations 
                                    1- register to your form
                                    2- login 
                                    3- Go to your profile to upload your photo and show your details for edit 
                                    4- go to schools profiles , therefor press bottom send profile to send your profile to school 
                                    5- go to your notifications and press school decision bottom to know schools decision 
                                    6- if you are accepted in school please go to its profile and reserve your bus and uniform.</p>



                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="sec2-home">
                                <h3>ABOUT STUDENT</h3>
                                <div style="width:5%; height: 4px; background-color: #ffb606;" class="m-auto"></div>


                                <p> School
                                    1- the school log in or sign
                                    2-the school recieve notification from student when they send profiles 
                                    4-school send decision 
                                    5- school decide accept or reject based on condiations
                                    6-if student accepted the school send the approvel with the data of interviews and date of test 
                                    7-the school upload the detalis about buses and uniform reservations.</p>



                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end about section-->
@include('newFooter')
</body>

</html>