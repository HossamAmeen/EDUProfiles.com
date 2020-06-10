<!DOCTYPE html>
<html>
    <head>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/all.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets2/css/hover.css')}}"> 
        <link rel="stylesheet" href="{{asset('assets2/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/owl.theme.default.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Arapey' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bilbo' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets2/css/uniform2.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/navbar.css')}}">
    </head> 


   @include('nav')

  <!--
      start form
  -->
 
    <section class="form-info">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <img src="{{asset('assets2/img/about.jpg')}}" width="100%" height="100%">
                </div>
                <form action="{{url('update-reserv-uniform/'.$uniformId)}}" method="POST">
                    {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="contain">
                        <div class="row">
                            
                            <div class="col-sm-2">
                                <label  for="inputGroupSelect03"> Color: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="color" id="inputGroupSelect03">
                            </div>

                            

                            <div class="col-sm-2">
                                <label  for="inputGroupSelect02"> quantity : </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="quantity" id="inputGroupSelect02">
                            </div>
                            <div class="col-sm-2">
                                <br>
                            <button class="btn btn-warning">OK</button>
                        </div>

                        </div>
                    </div>
                </div>
                </form>







            </div>
        </div>
    </section> 

    @include('newFooter')
  <script src="{{asset('assets2/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets2/js/popper.min.js')}}"></script>
  <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets2/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets2/js/wow.min.js')}}"></script>
  <script> new WOW().init();</script>
  <script src="{{asset('assets2/js/navbar.js')}}"></script>
  </body>
  </html>