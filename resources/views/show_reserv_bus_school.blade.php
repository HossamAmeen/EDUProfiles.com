<html>

<head>
    <title>Project's Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/all.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/Notification_school.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/busses-show.css')}}">



</head>

<body>

    @include('nav')



    <div class="table">

        <div class="contain"
            style="max-width: 50rem;margin:150px auto 50px; border-radius: 5px; padding: 20px 30px 40px;background-color: #e1e1e1d9;text-align: center;">

            <table class="text-center">
                <tr>
                    <th>Student Name</th>
                    <th>Rout Line</th>
                    <th>Bus Number</th>


                </tr>
                @foreach ($buses as $item)
                <tr>

                    <td> {{$item->student->first_name}}</td>
                    <td> {{$item->route}}</td>
                    <td> {{$item->bus->number}}</td>

                </tr>
                @endforeach
               
               
            </table>

        </div>
    </div>
    <!--
              end table
          -->
    <!--
      start footer
     -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-main">
                    <div class="inline-content">
                        <h5>Contact</h5>
                        <p class="content"><i class="fa fa-envelope" aria-hidden="true"></i> Supportcenter@info.com</p>
                    </div>
                </div>

                <div class="col-lg-4 footer-main">
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
                <div class="col-lg-4 footer-main">
                    <div class="contact_form ">
                        <h5 class="text-center">Get in touch</h5>
                        <div class="contact_form_container">
                            <form>
                                <input class="input_field contact_form_name" type="text" placeholder="Name"
                                    required="required">
                                <input class="input_field contact_form_email" type="email" placeholder="E-mail"
                                    required="required">
                                <textarea id="contact_form_message" class="text_field contact_form_message"
                                    name="message" placeholder="Write something.." required="required"></textarea>
                                <button id="contact_send_btn" type="button" class="contact_send_btn trans_200"
                                    value="Submit">send message</button>
                            </form>

                        </div>
                    </div>

                </div>

    </section>
    <!--
            end footer
        -->