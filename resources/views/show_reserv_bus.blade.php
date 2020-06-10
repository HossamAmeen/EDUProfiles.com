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
            
            @if (session()->get('reservBus') )
                <div class="alert alert-success" style="text-align: center">
                    <strong>{{session()->get('reservBus')}}</strong>
                </div>
                @endif
            <table>
                <tr>
                    <th>School Name</th>
                    <th>Buses number</th>
                    <th>Buses routes</th>
                    <th>Super visor name</th>
                    <th>Super visor number</th>
                    <th>Driver name</th>
                    <th>Driver number</th>
                    <th>number of available places</th>
                    <th>Rout line</th>
                    @if(session('school_id')==null)
                    <th>Reserve</th>
                    
                    @elseif(session('school_id')!=null)
                    <th></th>
                    @endif

                </tr>
               
                    @foreach ($buses as $item)
                    <tr>
                    <form method="POST" action="{{url('reserv-bus/'.$school_id . '/' . $item->id)}}"> 
                        {{ csrf_field() }}
                        <td>{{$school_name}} </td>
                        <td> {{$item->number}}</td>
                        <td> {{$item->routes}}</td>
                        <td> {{$item->Super_visor_name}}</td>
                        <td> {{$item->Super_visor_number}}</td>
                        <td> {{$item->driver_name}}</td>
                        <td> {{$item->driver_number}}</td>
                        <td>{{$item->number_available}} </td>
                        <th><textarea name="route" id="" cols="15" rows="10" required></textarea></th>
                        @if(session('school_id')==null)
                        <th><button class="btn btn-primary">RESERVE</button></th>
                        
                        @elseif(session('school_id')!=null)
                        <td>
                       
                            <a href="{{url('delete-bus/'.$item->id)}}"  class="btn btn-outline-danger">delete</a>
                       
                        </th>
                        @endif
                    </form>  
                </tr>
                    @endforeach
                  
              
              

            </table>

        </div>
    </div>
    <!--
              end table
          -->
 @include('newFooter')