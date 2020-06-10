<html>

<head>
    <title>{{$school->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/all.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/school_style.css')}}" />

</head>

<body>
    @include('nav')



    <!--start ::section school-prof-->
    <section class="school-prof">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center">
                        <h1>{{$school->name}}</h1>
                    </div>
                    @if (session()->get('register') )
                    <div class="alert alert-success" style="text-align: center">
                        <strong>{{session()->get('register')}}</strong>
                    </div>
                    @endif
                </div>
                <!--col-->

                <div class="col-lg-12">
                    <div class="images">
                        <img src="{{asset($school->photo ?? 'assets2/images/school2.jpeg')}}">
                    </div>
                </div>

                <!--col-->
                <div class="col-lg-5">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contents">
                                    <h5>School Website</h5>
                                    <h6>{{$school->website_link}}</h6>
                                </div>
                                <!--contents-->
                                <div class="contents">
                                    <h5>School location</h5>
                                    <h6>{{$school->location}}</h6>
                                </div>
                                <div class="contents">
                                    <h5>School license number</h5>
                                    <h6>{{$school->license_number}}</h6>
                                </div>
                                <!--contents-->
                                <div class="contents">
                                    <h4>-School team</h4>
                                    <h6>{{$school->administration_team}}</h6>

                                </div>
                                <!--contents-->
                                <div class="contents">

                                    <h5>Register team</h5>
                                    <h6>{{$school->register_team}}</h6>
                                </div>
                                <!--contents-->

                                <div class="contents row ">
                                    <div class="col-lg-12">
                                        <div class="accordion md-accordion" id="accordionEx" role="tablist"
                                            aria-multiselectable="true">

                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapseeight8" aria-expanded="true"
                                                        aria-controls="collapseeight8">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">Assistant and teacher team </p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapseeight8" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <p>{{$school->teachers}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>

                                            </div>
                                            @if(session('school_id') != null)
                                            <!--card-->
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="icon-wrapper icon-two">
                                                        <ul class="pre-links">
                                                            <li>
                                                                <a href="{{url('add-uniform')}}"
                                                                    class='btn btn-default btn-outline-warning en'>
                                                                    <i class="fa fa-user-circle fa-2x"
                                                                        aria-hidden="true"></i>
                                                                </a>

                                                                <h5>UNIFORM RESERVATION</h5>
                                                            </li>
                                                            <li class="nav-item ">
                                                                <a href="{{url('add-bus')}}"
                                                                    class='btn btn-default btn-outline-warning en'>
                                                                    <i class="fa fa-bus fa-2x " aria-hidden="true"></i>
                                                                </a>
                                                                <h5>BUS RESERVATION</h5>
                                                            </li>

                                                        </ul>


                                                    </div>

                                                </div>

                                            </div>

                                            <a href="{{url('profile-school-edit/'.$id)}}" class="btn btn-info">edit</a>
                                            <a href="{{url('logout')}}" class="btn btn-primary">LOG OUT</a>
                                            @endif
                                            @if(session('student_id') != null)
                                            <!--card-->
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="icon-wrapper icon-two">
                                                        <ul class="pre-links">
                                                            <li>
                                                                <a href="{{url('show-reserv-uniform/'.$school->id)}}"
                                                                    class='btn btn-default btn-outline-warning en'>
                                                                    <i class="fa fa-user-circle fa-2x"
                                                                        aria-hidden="true"></i>
                                                                </a>

                                                                <h5>UNIFORM RESERVATION</h5>
                                                            </li>
                                                            <li class="nav-item ">
                                                                <a href="{{url('reserv-bus/'.$school->id)}}"
                                                                    class='btn btn-default btn-outline-warning en'>
                                                                    <i class="fa fa-bus fa-2x " aria-hidden="true"></i>
                                                                </a>
                                                                <h5>BUS RESERVATION</h5>
                                                            </li>

                                                        </ul>


                                                    </div>

                                                </div>

                                            </div>
                                            @endif


                                        </div>


                                    </div>
                                    <!--col-->
                                </div>
                                <!--contents-->
                            </div>
                            <!--col-->

                        </div>
                        <!--row-->

                    </div>
                    <!--content-->

                </div>


                <!--col-->


                <div class="col-lg-7 vertical-line">

                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contents row">
                                    <h5 class="col-lg-7">School Name :</h5>
                                    <h6 class="col-lg-5">{{$school->name}}</h6>

                                </div>
                                <div class="contents row">
                                    <h5 class="col-lg-7">School email :</h5>
                                    <h6 class="col-lg-5">{{$school->email}}</h6>

                                </div>
                                <!--contents-->
                                <div class="contents row">
                                    <h5 class="col-lg-7">type of the school :</h5>
                                    <h6 class="col-lg-5">{{$school->type}}</h6>

                                </div>
                                <!--contents-->
                                <div class="contents row ">
                                    <h5 class="col-lg-12">About the school :</h5>
                                    <h6 class="col-lg-12 text">{{$school->about}} </h6>
                                </div>

                                <!--contents-->
                                <div class="contents row text">
                                    <h5 class="col-lg-12">Services that are provide :</h5>
                                    <h6 class="col-lg-12 text">{{$school->services}}</h6>
                                    {{-- <h6 class="col-lg-12 text">2-Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                                    <h6 class="col-lg-12 text">3-Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                                    <h6 class="col-lg-12 text">4-Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6> --}}

                                </div>
                                <!--contents-->
                                <div class="contents row ">
                                    <h5 class="col-lg-12">Acadmic program :</h5>
                                    <h6 class="col-lg-12 text">{{$school->cademic_program}}</h6>

                                </div>
                                <!--contents-->
                                <div class="contents row ">
                                    <h5 class="col-lg-12">Achievement and honor activities :</h5>
                                    <h6 class="col-lg-12 text">{{$school->achievement}}</h6>

                                </div>
                                <!--contents-->

                                <div class="contents row ">
                                    <div class="col-lg-12">
                                        <div class="accordion md-accordion" id="accordionEx" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapseOne1" aria-expanded="true"
                                                        aria-controls="collapseOne1">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">School history</p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapseOne1" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <p>{{$school->history}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>
                                            </div>
                                            <!--card-->

                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapsetwo2" aria-expanded="true"
                                                        aria-controls="collapsetwo2">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">Mission and vision</p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapsetwo2" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <p>{{$school->misssion}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>
                                            </div>
                                            <!--card-->

                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapsethree3" aria-expanded="true"
                                                        aria-controls="collapsethree3">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">Community</p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapsethree3" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <p>{{$school->community}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>
                                            </div>
                                            <!--card-->

                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapsefour4" aria-expanded="true"
                                                        aria-controls="collapsefour">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">Grading scale</p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapsefour4" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <p>{{$school->grading_scale}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>
                                            </div>
                                            <!--card-->

                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapsefive5" aria-expanded="true"
                                                        aria-controls="collapsefive5">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">Extra activities provide</p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapsefive5" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <p>{{$school->activities}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>
                                            </div>
                                            <!--card-->



                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapsenine9" aria-expanded="true"
                                                        aria-controls="collapsenine9">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">Supplies list </p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapsenine9" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <p>{{$school->supplies}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>
                                            </div>
                                            <!--card-->

                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapseten10" aria-expanded="true"
                                                        aria-controls="collapseten10">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">Courses that are provide </p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapseten10" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <p>{{$school->courses}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>
                                            </div>
                                            <!--card-->

                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionEx"
                                                        href="#collapseeleven11" aria-expanded="true"
                                                        aria-controls="collapseeleven11">
                                                        <h5 class="mb-0 row">
                                                            <p class="col-sm-6">Paper required to make administration
                                                            </p>
                                                            <i
                                                                class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                        </h5>
                                                    </a>
                                                </div>
                                                <!-- card-header-->
                                                <!-- Card body -->
                                                <div id="collapseeleven11" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        @if(isset($school->contract))
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group row">
                                                                    <img src="{{asset($school->contract)}}"
                                                                        class="col-lg-4">
                                                                    {{-- <img src="assets/img/card3.jpg" class="col-lg-4">
                                                                    <img src="assets/img/card3.jpg" class="col-lg-4">
                                                                    <img src="assets/img/card3.jpg" class="col-lg-4">
                                                                    <img src="assets/img/card3.jpg" class="col-lg-4">
                                                                    <img src="assets/img/card3.jpg" class="col-lg-4"> --}}
                                                                </div>

                                                            </div>

                                                        </div>
                                                        @endif
                                                        <!--row-->
                                                        <!--row-->
                                                    </div>
                                                    <!--body-->
                                                </div>
                                            </div>
                                            <!--card-->


                                        </div>


                                    </div>
                                    <!--col-->
                                </div>
                                <!--contents-->

                            </div>
                            <!--col-->


                        </div>
                        <!--row-->
                    </div>
                    <!--content-->


                </div>
                <!--row-->
                @if(session('student_id') != null)
                @if(isset($regisered) )
                <div class="col-lg-12 form text-center">
                    <div class="submit">
                        @if($regisered == 1)
                        <h6 class="last" style="margin: 1% 30%">You have sent your profile</h6>
                        @else
                        <a class="btn last" style="color: black" href="{{url('send-profie/'.$school->id )}}">
                            send profile</a>
                        @endif
                    </div>
                </div>
                @endif
                @endif
                <!--col-->

            </div>
            <!--row-->
        </div>
        <!--container-->



    </section>
    <!--end ::section school-prof-->
    @include('newFooter')

    <script src="{{asset('assets2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets2/js/popper.min.js')}}"></script>
    <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
</body>

</html>