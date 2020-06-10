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
    <link rel="stylesheet" href="{{asset('assets2/css/student-status.css')}}">



</head>

<body>

  @include('nav')


    <div class="table">

        <div class="contain" style="max-width: 63rem;margin:150px auto 50px; border-radius: 5px; padding: 20px 30px 40px;background-color: #e1e1e1d9;text-align: center;">
            
            @if (session()->get('deleteReserv') )
                <div class="alert alert-success" style="text-align: center">
                    <strong>{{session()->get('deleteReserv')}}</strong>
                </div>
                @endif
                @if(isset($reserv))
                <table>
                    <tr>
                        <th>School Name</th>
                        <th>Buses number</th>
                        <th>Buses routes</th>
                        <th>Super visor name</th>
                        <th>Super visor number</th>
                        <th>Driver name</th>
                        <th>Driver number</th>
                        <th>route line</th>
                       
                        <th>Reserve</th>
                    </tr>
                   
                      
                        <tr>
                        <form method="get" action="{{url('delete-reserv-bus/'.$reserv->id)}}"> 
                            {{ csrf_field() }}
                            <td>{{$school_name}} </td>
                            <td> {{$buses->number}}</td>
                            <td> {{$buses->routes}}</td>
                            <td> {{$buses->Super_visor_name}}</td>
                            <td> {{$buses->Super_visor_number}}</td>
                            <td> {{$buses->driver_name}}</td>
                            <td> {{$buses->driver_number}}</td>
                            
                        <th><textarea name="route" id="" cols="15" rows="10" required>{{$reserv->route}}</textarea></th>
                            <th><button class="btn btn-danger">cancel</button></th>
                        </form>  
                    </tr>
                    
                      
                  
                  
    
                </table>
                @endif
           

        </div>
    </div>
    <!--
              end table
          -->
 @include('newFooter')