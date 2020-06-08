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
    <link rel="stylesheet" href="{{asset('assets2/css/school_cards.css')}}">

</head>

<body>
    @include('nav')


    <!--school cards-->
    <section class="cards">
        <div class="container">
            <div class="row cards2 ">
                @foreach ($schools as $item)
                <div class="col-lg-12 col-md-12 pt-5 text-center">
                    <div class=" contain ">
                        <div class=" card w-50 ">
                            <div class=" owl-carousel owl-theme ">
                                <div>     <img src="{{asset($item->photo ?? 'assets/img/school2.jpeg')}}" width=" 100% " height=" 70% "> </div>
                                <!-- <div> <img src=" images/search_background.jpg " width=" 100% " height=" 70% "> </div>
                                <div> <img src=" images/school2.jpeg " width=" 100% " height=" 70% "> </div> -->
                            </div>
                            <hr>
                            <div class=" card-body ">
                                <div class=" card-content text-center ">
                                    <h3 class=" text-primary ">{{$item->name}}</h3>
                                    <h4> {{$item->about}}</h4>
                                </div>
                                <p>welcome</p>
                                <a href="{{url('profile-school/'.$item->id)}}" class="normal_link">Go to school profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

          
            </div>
        </div>
    </section>



    <!--end school cards-->

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
    <script src="{{asset('assets2/js/uniform_cards.js')}}"></script>

</body>

</html>