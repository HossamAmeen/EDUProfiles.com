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
    <link rel="stylesheet" href="{{asset('assets2/css/student-status.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/navbar.css')}}">
</head>
@include('nav')

<!--
        start messages
    -->
<section class="Student-Status">

    <div class="container">
        @foreach ($schools as $item)
      
        <div class="messages">
            @if($item->status == 1 )
            <div class="card  bg-dark text-white mb-3" style="max-width: 52rem;margin: auto;">
                <div class="card-header"><img src="{{asset($item->school->photo ?? 'assets2/images/school2.jpeg')}}">
                <p class="sch-name">{{$item->school->name}}</p>
                </div>
                <div class="card-body">
                    <p class="card-text">Congrats you are accepted with our school please come to school to complete
                        another requirements.</p>
                </div>
            </div>
            @elseif($item->status == 2)
            <div class="card  bg-dark text-white mb-3" style="max-width: 52rem;margin: auto;">
                <div class="card-header"><img src="{{asset($item->school->photo ?? 'assets2/images/school2.jpeg')}}">
                    <p class="sch-name">{{$item->school->name}}</p>
                </div>
                <div class="card-body">
                    <p class="card-text">Sorry, you are not accepted with our school.</p>
                </div>
            </div>
            @endif
        </div>
        @endforeach
        

        <div class="table">

            <div class="contain"
                style="max-width: 52rem;margin: auto; border-radius: 5px; padding: 20px 30px 40px;background-color: #e1e1e1d9;text-align: center;">
                @foreach ($interviews as $item)
                <table>
                    <tr>
                        <th>School name</th>
                    <td>{{$item->school->name}}</td>
                    </tr>
                    <tr>
                        <th>interview date</th>
                    <td> {{$item->date}}</td>
                    </tr>
                    <tr>
                        <th>interview time</th>
                        <td>{{$item->time}}</td>
                    </tr>
                    <tr>
                        <th>Test data</th>
                        <td>{{$item->Test_data}}</td>
                    </tr>
                    <tr>
                        <th>Instructor name</th>
                        <td>{{$item->instructor_name}}</td>
                    </tr>
                    <tr>
                        <th>Place</th>
                        <td>{{$item->place}}</td>
                    </tr>
                </table>
                @endforeach

                @foreach ($schools as $item)
                @if (isset($item->comment))
                    
               
                <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
                    <div class="toast-header">
                        <img src="{{asset($item->school->photo ?? 'assets2/images/school2.jpeg')}}" width="100px" class="rounded mr-2">
                        <small>{{$item->school->name}}</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        {{$item->comment}}
                    </div>
                </div>
                @endif
                @endforeach
            </div>

        </div>




    </div>
</section>

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