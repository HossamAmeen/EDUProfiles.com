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
                @if (session()->get('bus') )
                <div class="alert alert-success" style="text-align: center">
                    <strong>{{session()->get('bus')}}</strong>
                </div>
                @endif
                <form method="POST" action="{{url('add-bus')}}">@csrf

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-lg-2 col-md-12 col-form-label">Buses reservation
                            details</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control" id="inputEmail3" name="details"
                                placeholder="Details">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label   class="col-lg-2 col-md-12 col-form-label">Bus number</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control"   name="number"
                                placeholder="Bus number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label   class="col-lg-2 col-md-12 col-form-label">Bus routes</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control"   name="routes"
                                placeholder="Bus routes">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label   class="col-lg-2 col-md-12 col-form-label">Super visor name</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control"   name="Super_visor_name"
                                placeholder="Super visor name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label   class="col-lg-2 col-md-12 col-form-label">Super visor number</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control"   name="Super_visor_number"
                                placeholder="Super visor number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label   class="col-lg-2 col-md-12  col-form-label">Driver name</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control"   name="driver_name"
                                placeholder="Driver name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label   class="col-lg-2 col-md-12 col-form-label">Driver number</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control"   name="driver_number"
                                placeholder="Driver number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label   class="col-lg-2 col-md-12 col-form-label">Number of afailable
                            places</label>
                        <div class="col-lg-10 col-md-12">
                            <input type="number" class="form-control"   name="number_available"
                                placeholder="Number of afailable places">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning">Submit</button>
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
    <script src="{{asset('assets2/js/profileStudent.js')}}"></script>
</body>

</html>