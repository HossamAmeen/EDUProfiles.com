<html>

<head>
    <title>Project's Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/all.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/uniform_cards.css')}}" />
    <style>
        .owl-carousel {
            height: 300px !important;
        }
    </style>

</head>

<body class="bg-light">

  @include('nav')

 


    <!---start cards uniform-->
   
    <div class="cards">
        @if (session()->get('uniform') )
        <div class="alert alert-success" style="text-align: center">
            <strong>{{session()->get('uniform')}}</strong>
        </div>
        @endif
        @foreach ($uniforms as $item)
        <div class="container">
            <div class="row">
               
                <div class="col-lg-4 col-md-6">
                    <div class="contain" style=" width: 100%;">
                     
                        <div class="card">
                            <div class="owl-carousel owl-theme">
                                <div> <img src="{{asset($item->image)}}" width="100%" height="70%"> </div>
                                

                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <h3 class="d-inline-block">CATEGORY:</h3>
                                    <h4 class="d-inline-block ml-4 text-primary ">{{$item->category}}</h4>
                                </div>
                                <div class="card-content">
                                    <h3 class="d-inline-block">GENDER:</h3>
                                <h4 class="d-inline-block ml-4 text-primary ">{{$item->type}}</h4>
                                </div>
                                <div class="card-content">
                                    <h3 class="d-inline-block">SIZE:</h3>
                                    <h4 class="d-inline-block  text-primary " style="margin-left:6rem;">{{$item->size}}</h4>
                                </div>
                                <div class="card-content">
                                    <h3 class="d-inline-block">STATUS:</h3>
                                    <h5 class="d-inline-block ml-4  text-primary ">{{$item->available}} </h5>
                                </div>
                            </div>
                            @if(session('school_id')==null)
                            <div class="card-footer text-center">
                                <a href="{{url('choose-uniform/'.$item->id .'/' . $school_id)}}"  class="btn btn-outline-primary btn-lg  w-50  ">RESERVE</a>
                            </div>
                            @elseif(session('school_id')!=null)
                            <div class="card-footer text-center">
                                <a href="{{url('delete-uniform/'.$item->id)}}"  class="btn btn-outline-danger btn-lg  w-50  ">delete</a>
                            </div>
                            @endif
                        </div>

                        

                    </div>
                </div>

              



            </div>

            @endforeach

        </div>
    </div>


    <!--
    end cards
-->
@include('newFooter')





    <script src="{{asset('assets2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets2/js/popper.min.js')}}"></script>
    <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets2/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets2/js/uniform_cards.js')}}"></script>
</body>

</html>