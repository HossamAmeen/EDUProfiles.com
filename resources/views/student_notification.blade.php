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
    <link rel="stylesheet" href="{{asset('assets2/css/uniform_cards.css')}}">
    <style>
        .noti_stu {
            position: relative;
        }

        .noti_stu .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
        }

        .noti_stu .btns {
            position: relative;
            z-index: 9999;
        }
    </style>



</head>

<body>

    @include('nav')
    <!--- =======================
     ========================
-->
    <div class="noti_stu">
        <div class="overlay"></div>
        <div class="container btns">
            <div class="row">
                <a href="{{url('show-reserv-bus-student')}}"  class="btn btn-success w-50 mt-3 mb-5 p-3">BUSSES RESERVATION</a>
            </div>
            <div class="row">
                <a href="{{url('school-respones/'.$student_id)}}" class="btn btn-primary w-50 mt-3 mb-5 p-3">SCHOOL DECISION</a>
            </div>
            <div class="row ">
                <a href="{{url('show-reserv-uniform-student')}}" class="btn btn-danger w-50 mt-3 mb-5 p-3" id="collabse">UNIFORM RESERVATION</a>
            </div>


        </div>
    </div>
    </div>

    </div>

    @include('newFooter')




    <script src="{{asset('assets2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets2/js/popper.min.js')}}"></script>
    <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets2/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets2/js/uniform_cards.js')}}"></script>
</body>

</html>