<html>

<head>
    <title>Project's Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{url('assets2/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets2/css/all.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/Notification_school.css')}}" />

</head>

<body>
    @include('nav')
    <!--- =======================
     ========================
-->
    <div class="noti_stu"
        style="background-image: url(
            {{asset('assets2/images/shutterstock_130517294_pressmaster.jpg')}}
            ); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%; height: 700px;">
        <div class="overlay">
            <div class="container btns">
                <div class="row">
                    <a href="{{url('students-registered')}}" class="btn btn-primary w-50  mt-5 p-3">STUDENT PROFILE</a>
                </div>
                <div class="row">
                    <a href="{{url('show-reserv-bus-school')}}" class="btn btn-success w-50 mt-5 p-3">BUSSES RESERVATION</a>
                </div>
                <div class="row">
                    <a href="{{url('show-reserv-uniform-school')}}" class="btn btn-danger w-50 mt-5 mb-5 p-3">UNIFORM RESERVATION</a>
                </div>
            </div>
        </div>
    </div>
    @include('newFooter')

    <script src="{{url('assets2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets2/js/popper.min.js')}}"></script>
    <script src="{{url('assets2/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets2/js/index.js')}}"></script>
</body>

</html>