<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>


    <!-- start form register for school-->
    <section class="form">
        <div class="container">
            <div class="content">
                <form action="{{url('register-school')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="title">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top-title text-center">
                                    <h3>school Admission</h3>
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
                    <div class="school-info text-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="left-title">
                                    <h5>school Details</h5>
                                    <hr>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">School name
                                                :</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="school name" name="name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Location:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="Location" name="location">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">Email:</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3"
                                                    placeholder="Email" name="email">
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
                                            <label for="inputEmail3" class="col-sm-5 col-form-label">license number
                                                :</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                    placeholder="license number" name="license_number">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">About the
                                                school:</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='about' rows='7'
                                                    placeholder='Enter information about the school'></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">School
                                                history:</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='history' rows='7'
                                                    placeholder='Enter information about the School history'></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Service that are
                                                provide :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='services' rows='7'
                                                    placeholder='Enter information about Service that are provide '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Supplies list
                                                :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='supplies' rows='7'
                                                    placeholder='Enter information about Supplies list '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Type of the school
                                                :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='type' rows='7'
                                                    placeholder='Enter information about Type of the school '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Paper required to
                                                make admission list :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='paper_required' rows='7'
                                                    placeholder='Enter information about Paper required to make admission list '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Community
                                                :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='community' rows='7'
                                                    placeholder='Enter information about Community  '></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Website link (if
                                                there) :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='website_link' rows='4'
                                                    placeholder='Website link (if there) '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Contact list
                                                :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='contact' rows='4'
                                                    placeholder='Contact list  '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">School enrollment
                                                :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='enrollment' rows='4'
                                                    placeholder='Enter information about School enrollment   '></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Grading scale
                                                :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='grading_scale' rows='5'
                                                    placeholder='Enter information about Grading scale  '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Extra Activities
                                                provide :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='activities' rows='6'
                                                    placeholder='Enter information about Extra Activities provide  '></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Misssion and
                                                vision :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='misssion' rows='6'
                                                    placeholder='Misssion and vision  '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Academic program
                                                :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='cademic_program' rows='6'
                                                    placeholder='Enter information about Academic program  '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Administration
                                                team :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='administration_team' rows='6'
                                                    placeholder='Enter information about Administration team '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Register team
                                                :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='register_team' rows='5'
                                                    placeholder='Enter information about Register team  '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Assistant and
                                                teacher team :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='teachers' rows='5'
                                                    placeholder='Enter information about Assistant and teacher  team  '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Achievement and
                                                honor activities :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='achievement' rows='7'
                                                    placeholder='Enter information about Assistant and teacher  team  '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Courses that are
                                                provide :</label>
                                            <div class="col-sm-12">
                                                <textarea class='form-control textarea' name='courses' rows='7'
                                                    placeholder='Enter information about Courses that are provide '></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <form class="file" action="">
                                            <label for="myfile" class="col-sm-12 text">Copies of the school lease or
                                                ownership contract (Will not appear):</label>
                                            <input type="file" id="myfile" class="control" name="contract" value="Upload"><br>
                                            {{-- <input type="submit" value="Upload" name="" class="btn"> --}}
                                        </form>

                                    </div>
                                    <div class="col-lg-12">
                                        <form class="file" action="">
                                            <label for="myfile" class="col-sm-12 ">Upload photo or video about the
                                                school:</label>
                                            <input type="file" id="myfile" class="control" name="photo" value="Upload"><br>
                                            {{-- <input type="submit" value="Upload" name="" class="btn"> --}}
                                        </form>

                                    </div>
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




                                </div>
                                <!-- row-->

                            </div>
                            <!--col-12-->

                        </div>
                        <!-- up row-->
                    </div>
                    <!-- school-->
                </form>

            </div><!-- content-->

        </div><!-- container-->

    </section>
    <!-- end form register for school-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    @include('foot')

</body>

</html>
