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
    <link rel="stylesheet" href="{{asset('assets2/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/Buses Reservation.css')}}">

</head>

<body>
    @include('nav')
    <!--
          start form
      -->
    <section class="forms">
        <div class="container">
            <div class="contain">
                @if (session()->get('interview') )
                <div class="alert alert-success" style="text-align: center">
                    <strong>{{session()->get('interview')}}</strong>
                </div>
                @endif
                <form method="POST" action="{{url('interview/'.$student_id)}}">@csrf
                 
                    <div class="form-group row">
                        <label class="col-lg-2 col-md-12 col-form-label">Interview and test</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control" name="test" required  placeholder="Interview and test">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-md-12 col-form-label">Interview date</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="date" class="form-control" name="date" required placeholder="Interview date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-md-12 col-form-label">Interview time</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="time" class="form-control" name="time" required placeholder="Interview time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-md-12 col-form-label">Test data</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="date" class="form-control" name="Test_data" required placeholder="Test data">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-md-12 col-form-label">Test time</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="time" class="form-control" name="Test_time" required placeholder="Test time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-md-12  col-form-label">Instructor name</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control" name="instructor_name" required placeholder="Instructor name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-md-12 col-form-label">Place</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control" name="place" placeholder="Place">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning">Sent</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--
            end form
        -->

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

</body>

</html>