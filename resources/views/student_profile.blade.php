<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/hover.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/owl.theme.default.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Arapey' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bilbo' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets2/css/profileStudent.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/navbar.css')}}">



</head>



@include('nav')

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

                <div class="button">
                    @if(session('student_id')!== null)
                    <a href="{{url('logout')}}" class="btn btn-primary">LOG OUT</a>
                    @endif
                    @if(isset($schoolHaveProfile) && $schoolHaveProfile == 1 )
                    <a class="btn btn-success"
                        href="{{url('register-student-school-status/'.$student->id.'/1')}}">accept </a>
                    <a class="btn btn-danger" href="{{url('register-student-school-status/'.$student->id.'/2')}}">reject
                    </a>
                    @endif

                    @if(isset($schoolHaveProfile) && $schoolHaveProfile > 0)
                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="collapse"
                        data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                        aria-haspopup="true" aria-expanded="false">
                        comment
                    </button>

                    <div class="collapse" id="collapseExample">
                        <form action="{{url('register-student-school-status/'.$student->id)}}" method="POST"> @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Enter Your comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="comment"></textarea>
                            </div>

                            <button type="submit" class="btn btn-light mb-2">sent</button>
                        </form>
                    </div>
                    <a class="btn btn-light test" href="{{url('interview/'.$student->id)}}">Interview & test </a>
                    {{-- <button type="button" class="btn btn-light test" >Interview & test</button> --}}
                    @endif
                    
                </div>
               
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
                                @if(session('student_id')!== null)
                                <a href="{{url('profile-student-edit/'.$id)}}" class="btn btn-info">edit</a>
                                @endif
                                {{-- <a href="{{url('/')}}" class="btn btn-info">home</a> --}}
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
        {{-- silibings --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="parent text-left">
                    <hr>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="father">
                    <h3>silibings</h3>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="content">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="content">
                                <h5>Number of silibings:</h5>
                                <h4>{{$student->silibings_number}}</h4>
                                <h6>{{$student->silibings}}</h6>
                            </div>


                        </div>

                    </div>
                    <!--row-->

                </div>
                <!--content-->
            </div>

        </div>
        {{-- medical --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="parent text-left">
                    <hr>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="father">
                    <h3>medical</h3>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="content">
                    <div class="row">



                        <div class="col-lg-6">
                            <div class="content">
                                <h5>medical information:</h5>
                                <h4>{{$student->medical_information}}</h4>

                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <h5> - Other medical information:</h5>

                                <h6>{{$student->medical_information_text}}</h6>
                            </div>


                        </div>
                        @if(isset($student->medical_information_image))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5> </h5>
                                <img src="{{asset($student->medical_information_image)}}" height="80" width="80">
                            </div>


                        </div>
                        @endif
                    </div>
                    <!--row-->

                </div>
                <!--content-->
            </div>

        </div>
        {{-- international documents  Additional --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="parent text-left">
                    <hr>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="father">
                    <h3>international documents Additional</h3>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="content">
                    <div class="row">


                        @if(isset($student->Enrolment))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>Enrolment and success certificate</h5>
                                <img src="{{asset($student->Enrolment)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->degree))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>Latest degree
                                    attained translated into Arabic</h5>
                                <img src="{{asset($student->degree)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->entrance))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>entrance stamp</h5>
                                <img src="{{asset($student->entrance)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->passport))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>passport</h5>
                                <img src="{{asset($student->passport)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->guardian_passport))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>guardian passport</h5>
                                <img src="{{asset($student->guardian_passport)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->objection_letter))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>objection letter</h5>
                                <img src="{{asset($student->objection_letter)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->birth_certificate))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>birth certificate</h5>
                                <img src="{{asset($student->birth_certificate)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                    </div>
                    <!--row-->

                </div>
                <!--content-->
            </div>

        </div>
        {{-- school --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="parent text-left">
                    <hr>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="father">
                    <h3>school</h3>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="content">
                    <div class="row">


                        @if(isset($student->historical))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>historical log
                                    from the transferring school </h5>
                                <img src="{{asset($student->historical)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->Statement_enrolment))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>statement enrolment</h5>
                                <img src="{{asset($student->Statement_enrolment)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->Transfer))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>Transfer request
                                    form sealed from the transferring school </h5>
                                <img src="{{asset($student->Transfer)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->transfers))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5>For transfers from
                                    another governorate</h5>
                                <img src="{{asset($student->transfers)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif
                        @if(isset($student->Printout))
                        <div class="col-lg-6">
                            <div class="content">
                                <h5> Printout of the
                                    electronic transfer document sealed by the transferring
                                    school</h5>
                                <img src="{{asset($student->Printout)}}" height="80" width="80">

                            </div>


                        </div>
                        @endif

                    </div>
                    <!--row-->

                </div>
                <!--content-->
            </div>

        </div>
        {{-- acitivty  --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="parent text-left">
                    <hr>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="father">
                    <h3>activities image</h3>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="content">
                    <div class="row">



                        <div class="col-lg-6">
                            <div class="content">
                                <h5>{{$student->activities}}</h5>
                                @if(isset($student->activities_image))
                                <img src="{{asset($student->activities_image)}}" height="80" width="80">
                                @endif
                            </div>


                        </div>

                    </div>
                    <!--row-->

                </div>
                <!--content-->
            </div>

        </div>
    </div>
</section>
<!--end :: srction profile-->


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>




@include('newFooter')


<script src="{{asset('assets2/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets2/js/popper.min.js')}}"></script>
<script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets2/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets2/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('assets2/js/navbar.js')}}"></script>
<script src="{{asset('assets2/js/profileStudent.js')}}"></script>
</body>

</html>