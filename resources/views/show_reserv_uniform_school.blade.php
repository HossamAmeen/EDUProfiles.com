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


</head>

<body class="bg-light">

  @include('nav')

 
 <!--
      start table
    -->

    <section class="table_formStu">
        <div class="container">

            <div class="contain">
                <h1 class="text-center mb-3">RESERVATION TABLE</h1>
                <table>
                    <tr>
                        <th>card-name</th>
                        <th>students-name</th>
                        <th>color</th>
                        <th> size </th>
                        <th> number</th>
                    </tr>
                    @foreach ($uniforms as $key=> $item)
                    
                    <tr>
                        <td >Card{{$item->uniform_id}} </td>
                        <td>{{$item->student->first_name}}</td>
                        <td>{{$item->color}}</td>
                        <td>{{$item->uniform->size}}</td>
                        <td>{{$item->quantity}}</td>
                    </tr>
                        {{-- @foreach ($uniforms as $item2)
                        @if($item->uniform_id == $item2->uniform_id)
                        <tr>
                            <td >Card{{$item->uniform_id}} </td>
                            <td>{{$item->student->first_name}}</td>
                            <td>{{$item->uniform->color}}</td>
                            <td>{{$item->size}}</td>
                            <td>{{$item->quantity}}</td>
                        </tr>
                       @endif
                        @endforeach --}}
                    @endforeach
                  
                    

                    
                </table>
            </div>
        </div>
    </section>


    <!--
        end table
      -->
@include('newFooter')





    <script src="{{asset('assets2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets2/js/popper.min.js')}}"></script>
    <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets2/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets2/js/uniform_cards.js')}}"></script>
</body>

</html>