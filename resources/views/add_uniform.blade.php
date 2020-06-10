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
    <link rel="stylesheet" href="{{asset('assets2/css/uniform form.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/navbar.css')}}">
</head>
@include('nav')

<!--
        start uniform form
    -->

<section class="uniform">
    <div class="container">
        <div class="contain">
            <div class="card ">
                @if (session()->get('uniform') )
                <div class="alert alert-success" style="text-align: center">
                    <strong>{{session()->get('uniform')}}</strong>
                </div>
                @endif
               
                <form method="POST" action="{{url('add-uniform')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-header">
                    upload photo
                </div>
                <div class="card-body">
                    <input id="file" type="file" name="file" multiple onchange="viewImg()">
                    <div class="img">
                        <img id="view" class="img-fluid">
                    </div>
                </div>
                
                
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-2">
                            <label for="inputGroupSelect01"> type: </label>
                        </div>
                        <div class="col-sm-10">
                            <select id="inputGroupSelect01" name="type">
                                <option value="boys">for boys</option>
                                <option value="girls">for girls</option>
                                <option value="both">both</option>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label for="inputGroupSelect02"> Size: </label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="size" id="inputGroupSelect02">
                        </div>
                        <div class="col-sm-2">
                            <label for="inputGroupSelect02"> Category: </label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="category" id="inputGroupSelect02">
                        </div>
                        <div class="col-sm-2">
                            <label for="inputGroupSelect03"> Color: </label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" id="inputGroupSelect03" name="color" multiple>
                        </div>


                        <div class="col-sm-2">
                            <label for="inputGroupSelect04"> available: </label>
                        </div>
                        <div class="col-sm-10">
                            <select id="inputGroupSelect04" name="available">
                                <option value="available"> available </option>
                                <option value="not available"> not available</option>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label for="inputGroupSelect02"> quantity : </label>
                        </div>
                        <div class="col-sm-10">
                            <input type="number" name="quantity" id="inputGroupSelect02">
                        </div>
                      
                        <button class="btn btn-warning">save</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>
</section>

<!--
      end uniform 
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
<script src="{{asset('assets2/js/uniform.js')}}"></script>
</body>

</html>