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
            <form  action="{{url('register-student')}}" method="POST" enctype="multipart/form-data">
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
                                                    placeholder="First name" name="first_name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <fieldset class="form-group">
                                            <div class="row">

                                                <div class="col-sm-12 row">
                                                    <div class="form-check col-sm-6">
                                                        <input class="form-check-input" type="radio" id="gridRadios1"
                                                            value="Male" name="gender" checked>
                                                        <label class="form-check-label" for="gridRadios1" >
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-6">
                                                        <input class="form-check-input" type="radio" id="gridRadios2"
                                                            value="Female" name="gender">
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
                                                    placeholder="Lastname" name="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Place of
                                                Birth:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Place of Birth" name="place">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Secondname:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Surname" name="second_name">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Date of
                                                Birth:</label>
                                            <div class="col-sm-5">
                                                <input type="date" class="form-control" id="inputEmail3"
                                                    placeholder="YY/MM/DD" name="birth_date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Age:</label>
                                            <div class="col-sm-5">
                                                <input type="number" class="form-control" id="inputEmail3"
                                                    placeholder="Age" name="age">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Nationality
                                                :</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Nationality" name="Nationality_f">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Religion:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Religion" name="religion">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Classlevel:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Classlevel" name="classlevel">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Email:</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3"
                                                    placeholder="Email" name="email" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Address:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Address" name="address">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Password:</label>
                                            <div class="col-sm-5">
                                                <input type="Password" class="form-control" id="inputEmail3"
                                                    placeholder="Password" name="password" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">SSN:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="SSN" name="SSN">
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
                                                            id="gridRadios1" value="IG" checked>
                                                        <label class="form-check-label" for="gridRadios1" name="">
                                                            IG
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios2" value="Amirican">
                                                        <label class="form-check-label" for="gridRadios2" name="">
                                                            Amirican
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios3" value="French">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            French
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios3" value="German">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            German
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios3" value="National">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            National
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-2">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
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
                                                    name="addressEgypt">
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
                                                            id="gridRadios1" value="Married" checked>
                                                        <label class="form-check-label" for="gridRadios1" name="">
                                                            Married
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-3">
                                                        <input class="form-check-input" type="radio" name="Status"
                                                            id="gridRadios2" value="Separated">
                                                        <label class="form-check-label" for="gridRadios2" name="">
                                                            Separated
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-3">
                                                        <input class="form-check-input" type="radio" name="Status"
                                                            id="gridRadios3" value="Divorced">
                                                        <label class="form-check-label" for="gridRadios3" name="">
                                                            Divorced
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-3">
                                                        <input class="form-check-input" type="radio" name="Status"
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
                                                            name="separate_addresses" id="gridRadios1" value="Father"
                                                            checked>
                                                        <label class="form-check-label" for="gridRadios1" name="">
                                                            Father
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-4">
                                                        <input class="form-check-input" type="radio"
                                                            name="separate_addresses" id="gridRadios2" value="Mother">
                                                        <label class="form-check-label" for="gridRadios2" name="">
                                                            Mother
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-sm-4">
                                                        <input class="form-check-input" type="radio"
                                                            name="separate_addresses" id="gridRadios3" value="Custodian">
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
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Firstname" name="Firstname">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Surname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Surname" name="Surname">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Lastname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Lastname" name="Lastname">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Nationality :</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Nationality" name="Nationality">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Religion:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Religion" name="Religion_f">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Mobile:</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control"
                                                                    id="inputEmail3" placeholder="Mobile" name="Mobile">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">City:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="City" name="City">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">E-Mail:</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" class="form-control"
                                                                    id="inputEmail3" placeholder="E-Mail" name="E_Mail">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Occupation:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Office Tel" name="Occupation">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">SSN:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="SSN" name="SSN_f">
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
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Firstname" name="Firstname_m">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Surname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Surname" name="Surname_m">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Lastname:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Lastname" name="Lastname_m">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Nationality :</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Nationality" name="Nationality_m">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Religion:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Religion" name="Religion_m">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Mobile:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Mobile" name="Mobile_m">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">City:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="City" name="City_m">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">E-Mail:</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" class="form-control"
                                                                    id="inputEmail3" placeholder="E-Mail" name="E_Mail_m">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">Occupation:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="Office Tel" name="Occupation_m">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-6 col-form-label">SSN:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail3" placeholder="SSN" name="SSN_m">
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
                                                                        id="inputEmail4" placeholder="Number" name="silibings_number">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <textarea class='form-control' name='silibings' rows='7'
                                                                        placeholder='Enter Name , Age , school and Year (optional)'></textarea>
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
                                                                        id="gridCheck1" name="medical_information[]" value="Diabetes">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Diabetes
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information[]" value="Epilepsy">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Epilepsy
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information[]" value="Allergies">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Allergies
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information[]" value="Bronchial Asthma">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Bronchial Asthma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information[]" value="Does the student wear eyeglasses?">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Does the student wear eyeglasses?
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck1" name="medical_information[]" value="other">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Has the student ever been assessed by an
                                                                        education psychologist or any other specialist?
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-check">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        - Other medical information:
                                                                    </label>
                                                                    <textarea class='form-control' name='medical_information_text' rows='7'
                                                                        placeholder='medical information'></textarea>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">

                                                                    <label for="myfile">Select a Picture of medical
                                                                        certificate :</label>
                                                                    <input type="file" id="myfile" class="control"
                                                                        name="medical_information_images"><br>



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
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="School" name="School">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Grade/Year</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="Grade/Year"
                                                                        name="Grade">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Type of Curriculum</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4"
                                                                        placeholder="Type of Curriculum" name="">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Location</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="Location" name="">
                                                                </div>

                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">School</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="School" name="School2">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Grade/Year</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="Grade/Year"
                                                                        name="Grade2">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Type of Curriculum</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4"
                                                                        placeholder="Type of Curriculum" name="Curriculum2">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Location</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="Location" name="Location2">
                                                                </div>

                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">School</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="School" name="School3">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Grade/Year</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="Grade/Year"
                                                                        name="Grade3">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Type of Curriculum</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4"
                                                                        placeholder="Type of Curriculum" name="Curriculum3">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail4">Location</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputEmail4" placeholder="Location" name="Location3">
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
                                                            <input type="file" id="myfile" class="control" name="historicals"><br>
                                                            {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                            <label for="myfile" class="col-sm-12">2- Statement of
                                                                enrolment or statement of success sealed by the
                                                                educational administration:</label>
                                                            <input type="file" id="myfile" class="control" name="Statement_enrolments"><br>
                                                            {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                            <label for="myfile" class="col-sm-12">3- Transfer request
                                                                form sealed from the transferring school and the
                                                                educational
                                                                department affiliating this school to "New school name
                                                                ":</label>
                                                            <input type="file" id="myfile" class="control" name="Transfers"><br>
                                                            {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                            <label for="myfile" class="col-sm-12">4- For transfers from
                                                                another governorate, all above documents must
                                                                be sealed from the governorate’s central educational
                                                                department as well as the new central educational
                                                                department :</label>
                                                            <input type="file" id="myfile" class="control" name="transferss"><br>
                                                            {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                            <label for="myfile" class="col-sm-12">5- Printout of the
                                                                electronic transfer document sealed by the transferring
                                                                school :</label>
                                                            <input type="file" id="myfile" class="control" name="Printouts"><br>
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
                                                            <input type="file" id="myfile" class="control" name="Enrolments"><br>



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
                                                            <input type="file" id="myfile" class="control" name="degrees"><br>



                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                            <label for="myfile" class="col-sm-12">3- Egyptians only:
                                                                Joining request from Kerdasa educational department for
                                                                Egyptian students returning from abroad as well as copy
                                                                of the passport with the entrance stamp to
                                                                Egypt:</label>
                                                            <input type="file" id="myfile" class="control" name="entrances"><br>



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
                                                            <input type="file" id="myfile" class="control" name="passport"><br>
                                                            {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                            <label for="myfile" class="col-sm-12">2- Legal Arabic
                                                                translation of the birth certificate attested by the
                                                                Egyptian Ministry of Foreign Affairs:</label>
                                                            <input type="file" id="myfile" class="control" name="ministrys"><br>



                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                            <label for="myfile" class="col-sm-12">3- Copy of the
                                                                guardian’s passport with the non-touristic residency
                                                                visa and the entrance stamp :</label>
                                                            <input type="file" id="myfile" class="control" name="guardian_passport"><br>
                                                            {{--   --}}


                                                    </div>
                                                    <!--col-->
                                                    <div class="col-lg-12">

                                                            <label for="myfile" class="col-sm-12">4- No objection letter
                                                                to study at the school from the embassy of the student’s
                                                                country in Egypt :</label>
                                                            <input type="file" id="myfile" class="control" name="objection_letters"><br>
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
                                        placeholder='list your child hobbies'></textarea>
                                    <input type="file" id="myfile" class="control" name="activities_image"><br>



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
