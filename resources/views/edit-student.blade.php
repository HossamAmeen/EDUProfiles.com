<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    <!-- start form register for student-->
    <section class="form">
        <div class="container">
            <div class="content">
                <form action="{{url('profile-student-update/'.$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="title">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top-title text-center">
                                    <h3>Student Admission</h3>
                                    <p>Application Form</p>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="left-title text-left">
                                    <p>Please complete all information requested on this form</p>

                                </div>
                            </div>
                        </div>
                        <!-- div row-->
                    </div>
                    <!-- div title-->
                    <!--student reg-->
                    <div class="student text-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="left-title">
                                    <h5>Student Details</h5>
                                    <hr>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">First name:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="First name" name="first_name"
                                                    value="{{$student->first_name}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <fieldset class="form-group">
                                            <div class="row">

                                                <div class="col-sm-12 row">
                                                    <div class="form-check col-sm-6">
                                                        <input class="form-check-input" type="radio" id="gridRadios1"
                                                            value="Male" name="gender" @if($student->gender == 'Male')
                                                        checked @endif>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-6">
                                                        <input class="form-check-input" type="radio" id="gridRadios2"
                                                            value="Female" name="gender" @if($student->gender ==
                                                        'Female') checked @endif>
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </fieldset>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Lastname:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Lastname" name="last_name"
                                                    value="{{$student->last_name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Place of
                                                Birth:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Place of Birth" name="place"
                                                    value="{{$student->place}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Secondname:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Surname" name="second_name"
                                                    value="{{$student->second_name}}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Date of
                                                Birth:</label>
                                            <div class="col-sm-5">
                                                <input type="date" class="form-control" id="inputEmail3"
                                                    placeholder="YY/MM/DD" name="birth_date"
                                                    value="{{$student->birth_date}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Age:</label>
                                            <div class="col-sm-5">
                                                <input type="number" class="form-control" id="inputEmail3"
                                                    placeholder="Age" name="age" value="{{$student->age}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Nationality
                                                :</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Nationality" name="Nationality_f"
                                                    value="{{$student->Nationality_f}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Religion:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Religion" name="religion"
                                                    value="{{$student->religion}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Classlevel:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Classlevel" name="classlevel"
                                                    value="{{$student->classlevel}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Email:</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3"
                                                    placeholder="Email" name="email" required
                                                    value="{{$student->email}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Address:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Address" name="address" value="{{$student->address}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Password:</label>
                                            <div class="col-sm-5">
                                                <input type="Password" class="form-control" id="inputEmail3"
                                                    placeholder="Password" name="password">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">SSN:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="SSN" name="SSN" value="{{$student->SSN}}">
                                            </div>
                                        </div>

                                    </div>

                                    {{-- <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Confirm
                                                Password:</label>
                                            <div class="col-sm-5">
                                                <input type="Password" class="form-control" id="inputEmail3"
                                                    placeholder="Confirm Password" name="">
                                            </div>
                                        </div>

                                    </div> --}}



                                    <div class="col-lg-12">
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-3 pt-0">Education system :</legend>
                                                <div class="col-sm-9 row">
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios1" value="IG" @if($student->gridRadios == 'IG') checked @endif>
                                                        <label class="form-check-label" for="gridRadios1" name="">
                                                            IG
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios2" value="Amirican" @if($student->gridRadios == 'Amirican') checked @endif>
                                                        <label class="form-check-label" for="gridRadios2" name="">
                                                            Amirican
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios" @if($student->gridRadios == 'French') checked @endif
                                                            id="gridRadios3" value="French">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            French
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios" @if($student->gridRadios == 'German') checked @endif
                                                            id="gridRadios3" value="German">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            German
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios" @if($student->gridRadios == 'National') checked @endif
                                                            id="gridRadios3" value="National">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            National
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios" @if($student->gridRadios == 'Other') checked @endif
                                                            id="gridRadios3" value="Other">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            Other
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>


                                </div>
                                <!-- row-->

                            </div>
                            <!--col-12-->

                        </div>
                        <!-- up row-->
                    </div>
                    <!-- student-->


                    <!--Parent Contact Details reg-->
                    <div class="student text-left">
                        <div class="row">
                            <div class="col-lg-12">


                            </div>
                            <div class="col-lg-12">
                                <div class="row">

                                    {{-- <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-6 col-form-label">Primary Contact
                                                Email:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="First name" name="ContactEmail">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-6 col-form-label">Will both parents
                                                be living full-time in Egypt?</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Give Address If Not Living Full-Time In Egypt"
                                                    name="addressEgypt" value="{{$student->addressEgypt}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-6 pt-0">Parents' Marital Status:
                                                </legend>
                                                <div class="col-sm-6 row">
                                                    <div class="form-check col-sm-3">
                                                        <input class="form-check-input" type="radio" name="Status"
                                                            id="gridRadios1" value="Married" @if($student->Status == 'Married') checked @endif>
                                                        <label class="form-check-label" for="gridRadios1" name="">
                                                            Married
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-3">
                                                        <input class="form-check-input" type="radio" name="Status" @if($student->Status == 'Separated') checked @endif
                                                            id="gridRadios2" value="Separated">
                                                        <label class="form-check-label" for="gridRadios2" name="">
                                                            Separated
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-3">
                                                        <input class="form-check-input" type="radio" name="Status" @if($student->Status == 'Divorced') checked @endif
                                                            id="gridRadios3" value="Divorced">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            Divorced
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-3">
                                                        <input class="form-check-input" type="radio" name="Status" @if($student->Status == 'Widow') checked @endif
                                                            id="gridRadios3" value="Widow">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            Widow(er)
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-6 pt-0">If parents live in two
                                                    separate addresses, please indicate who should receive
                                                    correspondence . </legend>
                                                <div class="col-sm-6 row">
                                                    <div class="form-check col-sm-4">
                                                        <input class="form-check-input" type="radio"
                                                            name="separate_addresses" id="gridRadios1" value="Father" @if($student->separate_addresses == 'Father') checked @endif
                                                            >
                                                        <label class="form-check-label" for="gridRadios1" name="">
                                                            Father
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-4">
                                                        <input class="form-check-input" type="radio"
                                                            name="separate_addresses" id="gridRadios2" value="Mother" @if($student->separate_addresses == 'Mother') checked @endif>
                                                        <label class="form-check-label" for="gridRadios2" name="">
                                                            Mother
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-4">
                                                        <input class="form-check-input" type="radio"
                                                            name="separate_addresses" id="gridRadios3" @if($student->separate_addresses == 'Custodian') checked @endif
                                                            value="Custodian">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            Legal Custodian
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>


                                </div>
                                <!-- row-->

                            </div>
                            <!--col-12-->

                        </div>
                        <!-- up row-->
                    </div>
                    <!-- student-->



                    <!--student reg-->
                    <div class="father student text-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion md-accordion" id="accordionEx" role="tablist"
                                    aria-multiselectable="true">
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1"
                                                aria-expanded="true" aria-controls="collapseOne1">
                                                <h5 class="mb-0 row">
                                                    <p class="col-sm-6">Father Details</p>
                                                    <i class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                </h5>
                                            </a>
                                        </div>
                                        <!-- card-header-->
                                        <!-- Card body -->
                                        <div id="collapseOne1" class="collapse" role="tabpanel"
                                            aria-labelledby="headingOne1" data-parent="#accordionEx">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Firstname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Firstname" name="Firstname"
                                                                    value="{{$student->Firstname}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Surname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Surname" name="Surname"
                                                                    value="{{$student->Surname}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Lastname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Lastname" name="Lastname"
                                                                    value="{{$student->Lastname}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Nationality :</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Nationality" name="Nationality"
                                                                    value="{{$student->Nationality}}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Religion:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Religion" name="Religion_f"
                                                                    value="{{$student->Religion_f}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Mobile:</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control"
                                                                    id="inputEmail3" placeholder="Mobile" name="Mobile"
                                                                    value="{{$student->Mobile}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">City:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="City" name="City"
                                                                    value="{{$student->City}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">E-Mail:</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" class="form-control"
                                                                    id="inputEmail3" placeholder="E-Mail" name="E_Mail"
                                                                    value="{{$student->E_Mail}}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Occupation:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Office Tel" name="Occupation"
                                                                    value="{{$student->Occupation}}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">SSN:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="SSN" name="SSN_f"
                                                                    value="{{$student->SSN_f}}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!--row-->
                                            </div>
                                            <!--body-->
                                        </div>

                                    </div>
                                    <!-- card-->


                                    <div class="card">
                                        <!--mother-->

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapsetwo2"
                                                aria-expanded="true" aria-controls="collapsetwo2">
                                                <h5 class="mb-0 row">
                                                    <p class="col-sm-6">Mother Details</p>
                                                    <i class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                </h5>
                                            </a>
                                        </div>
                                        <!-- card-header-->
                                        <!-- Card body -->
                                        <div id="collapsetwo2" class="collapse" role="tabpanel"
                                            aria-labelledby="headingOne1" data-parent="#accordionEx">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Firstname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Firstname" name="Firstname_m"
                                                                    value="{{$student->Firstname_m}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Surname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Surname" name="Surname_m"
                                                                    value="{{$student->Surname_m}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Lastname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Lastname" name="Lastname_m"
                                                                    value="{{$student->Lastname_m}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Nationality :</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Nationality" name="Nationality_m"
                                                                    value="{{$student->Nationality_m}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Religion:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Religion" name="Religion_m"
                                                                    value="{{$student->Religion_m}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Mobile:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Mobile" name="Mobile_m"
                                                                    value="{{$student->Mobile_m}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">City:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="City" name="City_m"
                                                                    value="{{$student->City_m}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">E-Mail:</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" class="form-control"
                                                                    id="inputEmail3" placeholder="E-Mail"
                                                                    name="E_Mail_m" value="{{$student->E_Mail_m}}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Occupation:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="Office Tel" name="Occupation_m"
                                                                    value="{{$student->Occupation_m}}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">SSN:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputEmail3"
                                                                    placeholder="SSN" name="SSN_m"
                                                                    value="{{$student->SSN_m}}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!--row-->
                                            </div>
                                            <!--body-->
                                        </div>

                                    </div>
                                    <!-- card-->

                                    <div class="card silibings">
                                        <!--silibings-->

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapsethree3"
                                                aria-expanded="true" aria-controls="collapsethree">
                                                <h5 class="mb-0 row">
                                                    <p class="col-sm-6">silibings</p>
                                                    <i class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

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

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Number of silibings</label>
                                                                <input type="number" class="form-control"
                                                                    id="inputEmail4" placeholder="Number"
                                                                    name="silibings_number"
                                                                    value="{{$student->silibings_number}}">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <textarea class='form-control' name='silibings' rows='7'
                                                                    placeholder='Enter Name , Age , school and Year (optional)'>{{$student->silibings}}</textarea>
                                                            </div>





                                                        </div>
                                                        <!--form row-->

                                                    </div>
                                                    <!--col-->


                                                </div>
                                                <!--row-->
                                            </div>
                                            <!--body-->
                                        </div>

                                    </div>
                                    <!-- card-->

                                    <div class="card medical">
                                        <!--medical-->

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapsefour4"
                                                aria-expanded="true" aria-controls="collapsefour4">
                                                <h5 class="mb-0 row">
                                                    <p class="col-sm-6">medical</p>
                                                    <i class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

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
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information"
                                                                        value="Diabetes">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Diabetes
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information"
                                                                        value="Epilepsy">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Epilepsy
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information"
                                                                        value="Allergies">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Allergies
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information"
                                                                        value="Bronchial Asthma">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Bronchial Asthma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information"
                                                                        value="Does the student wear eyeglasses?">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Does the student wear eyeglasses?
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information"
                                                                        value="other">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Has the student ever been assessed by an
                                                                        education psychologist or any other specialist?
                                                                    </label>
                                                                </div>
                                                                {{-- </div> --}}
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        - Other medical information:
                                                                    </label>
                                                                    <textarea class='form-control'
                                                                        name='medical_information_text' rows='7'
                                                                        placeholder='medical information'>{{$student->medical_information_text}}</textarea>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">

                                                                <label for="myfile">Select a Picture of medical
                                                                    certificate :</label>
                                                                <input type="file" id="myfile" class="control"
                                                                    name="medical_information_image"><br>



                                                            </div>


                                                        </div>
                                                        <!--form-group-->
                                                    </div>
                                                    <!--col-->


                                                </div>
                                                <!--row-->
                                            </div>
                                            <!--body-->
                                        </div>

                                    </div>
                                    <!-- card-->

                                    <div class="card school picture">
                                        <!--school-->

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapsefive5"
                                                aria-expanded="true" aria-controls="collapsefive5">
                                                <h5 class="mb-0 row">
                                                    <p class="col-sm-6">school<span>Most Recent School First<span></p>

                                                    <i class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                </h5>
                                            </a>
                                        </div><!-- card-header-->
                                        <!-- Card body -->
                                        <div id="collapsefive5" class="collapse" role="tabpanel"
                                            aria-labelledby="headingOne1" data-parent="#accordionEx">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">

                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <h6>It is essential to provide your school reports
                                                                    at least for the previous 2 years (if
                                                                    applicable)</h6>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">School</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="School" name="School"
                                                                    value="{{$student->School}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Grade/Year</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Grade/Year" name="Grade"
                                                                    value="{{$student->Grade}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Type of Curriculum</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Type of Curriculum" name="Curriculum"
                                                                    value="{{$student->Curriculum}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Location</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Location" name="Location"
                                                                    value="{{$student->Location}}">
                                                            </div>

                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">School</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="School" name="School2"
                                                                    value="{{$student->School2}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Grade/Year</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Grade/Year" name="Grade2"
                                                                    value="{{$student->Grade2}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Type of Curriculum</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Type of Curriculum" name="Curriculum2"
                                                                    value="{{$student->Curriculum2}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Location</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Location" name="Location2"
                                                                    value="{{$student->Location2}}">
                                                            </div>

                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">School</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="School" name="School3"
                                                                    value="{{$student->School3}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Grade/Year</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Grade/Year" name="Grade3"
                                                                    value="{{$student->Grade3}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Type of Curriculum</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Type of Curriculum" name="Curriculum3"
                                                                    value="{{$student->Curriculum3}}">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Location</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Location" name="Location3"
                                                                    value="{{$student->Location3}}">
                                                            </div>
                                                        </div>
                                                        <!--form row-->

                                                    </div>
                                                    <!--col-->

                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">1-A historical log
                                                            from the transferring school stating the grades that the
                                                            student was enrolled in since joining the school
                                                            :</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="historical"><br>
                                                        {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">2- Statement of
                                                            enrolment or statement of success sealed by the
                                                            educational administration:</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="Statement_enrolment"><br>
                                                        {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">3- Transfer request
                                                            form sealed from the transferring school and the
                                                            educational
                                                            department affiliating this school to "New school name
                                                            ":</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="Transfer"><br>
                                                        {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">4- For transfers from
                                                            another governorate, all above documents must
                                                            be sealed from the governorate’s central educational
                                                            department as well as the new central educational
                                                            department :</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="transfers"><br>
                                                        {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">5- Printout of the
                                                            electronic transfer document sealed by the transferring
                                                            school :</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="Printout"><br>
                                                        {{--   --}}


                                                    </div>
                                                    <!--col-->


                                                </div>
                                                <!--row-->
                                            </div>
                                            <!--body-->
                                        </div>

                                    </div><!-- card-->

                                    <div class="card picture">
                                        <!--transfers international documents Additional-->

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapsesix6"
                                                aria-expanded="true" aria-controls="collapsesix6">
                                                <h5 class="mb-0 row">
                                                    <p class="col-sm-6 text">transfers international documents
                                                        Additional</p>
                                                    <i class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                </h5>
                                            </a>
                                        </div><!-- card-header-->
                                        <!-- Card body -->
                                        <div id="collapsesix6" class="collapse" role="tabpanel"
                                            aria-labelledby="headingOne1" data-parent="#accordionEx">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">1- Enrolment and
                                                            success certificate translated into Arabic stamped by
                                                            the transferring school and attested by the Ministry of
                                                            Education in
                                                            the transferring country as well as the embassy of this
                                                            country in Egypt and the Egyptian Ministry of Foreign
                                                            Affairs.:</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="Enrolment"><br>



                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">2- Latest degree
                                                            attained translated into Arabic stamped by the
                                                            transferring school and attested by the Ministry of
                                                            Education in
                                                            the transferring country as well as the embassy of this
                                                            country in Egypt and the Egyptian Ministry of Foreign
                                                            Affairs:</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="degree"><br>



                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">3- Egyptians only:
                                                            Joining request from Kerdasa educational department for
                                                            Egyptian students returning from abroad as well as copy
                                                            of the passport with the entrance stamp to
                                                            Egypt:</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="entrance"><br>



                                                    </div>
                                                    <!--col-->


                                                </div>
                                                <!--row-->
                                            </div>
                                            <!--body-->
                                        </div>

                                    </div><!-- card-->


                                    <div class="card picture">
                                        <!--transfers international documents Additional-->

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseseven7"
                                                aria-expanded="true" aria-controls="collapseseven7">
                                                <h5 class="mb-0 row">
                                                    <p class="col-sm-6 text">students Egyptian-non all from required
                                                        Document</p>
                                                    <i class="fa fa-angle-down rotate-icon col-sm-6 text-right"></i>

                                                </h5>
                                            </a>
                                        </div><!-- card-header-->
                                        <!-- Card body -->
                                        <div id="collapseseven7" class="collapse" role="tabpanel"
                                            aria-labelledby="headingOne1" data-parent="#accordionEx">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">1- Copy of the
                                                            student’s passport with the non-touristic residency visa
                                                            and the entrance stamp :</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="passport"><br>
                                                        {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">2- Legal Arabic
                                                            translation of the birth certificate attested by the
                                                            Egyptian Ministry of Foreign Affairs:</label>
                                                        <input type="file" id="myfile" class="control" name=""><br>



                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">3- Copy of the
                                                            guardian’s passport with the non-touristic residency
                                                            visa and the entrance stamp :</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="guardian_passport"><br>
                                                        {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                        <label for="myfile" class="col-sm-12">4- No objection letter
                                                            to study at the school from the embassy of the student’s
                                                            country in Egypt :</label>
                                                        <input type="file" id="myfile" class="control"
                                                            name="objection_letter"><br>
                                                        {{--   --}}


                                                    </div>
                                                    <!--col-->


                                                </div>
                                                <!--row-->
                                            </div>
                                            <!--body-->
                                        </div>

                                    </div><!-- card-->


                                </div>
                            </div><!-- col-->
                        </div><!-- up row-->


                    </div><!-- father-->

                    <div class="picture last">
                        <div class="row">

                            <div class="col-lg-12">

                                <label for="myfile" class="col-sm-12">Does your child have any extracurricular
                                    activities or hobbies and please list them with a copy of the certificate if
                                    present</label>
                                <textarea class='form-control' name='activities' rows='5'
                                    placeholder='list your child hobbies'>{{$student->activities}}</textarea>
                                <input type="file" id="myfile" class="control" name="activities_image"><br>
                                <label for="myfile" class="col-sm-12"> upload photo </label>
                                <input type="file" id="myfile" class="control" name="photo_file"><br>

                            </div>
                            <!--col-->


                        </div>
                        <!--row-->


                    </div>
                    <!--picture-->


                    <div class="submit">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="submit" value="Submit" name="" class="btn">

                            </div>
                            <!--col-->
                        </div>
                        <!--row-->
                    </div>
                    <!--submit-->

                </form>

            </div><!-- content-->

        </div><!-- container-->

    </section>
    <!-- end form register for student-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



    @include('foot')
</body>

</html>
