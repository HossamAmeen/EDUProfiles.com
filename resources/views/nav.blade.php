<!-- 
        start nav
      -->



<section class="nav " id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">


            <a class="navbar-brand" href="#">
                <h1> <img src="{{asset('assets2/images/logo.jpg')}}"> <span>EDU Profiles</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{url('show-schools')}}">School Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus">contact us</a>
                    </li>
                    @if(session('school_id') != null || (session('student_id') != null))
                    <li class="nav-item">

                        <a class="nav-link notification" href="{{url('get-notifications')}}">
                            <span class="fas fa-bell"></span>
                            <span class="badge" id="notification"></span>
                            {{-- <span class="badge badge-red "  id="notification" >0</span> --}}
                        </a>
                        {{-- <a href="#" class="notification">
                            <span>Inbox</span>
                            <span class="badge">3</span>
                          </a>      --}}


                    </li>
                    @endif
                    @if(session('school_id') != null)

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('profile-school/'.session('school_id'))}}">
                            <img src="{{asset(session('school_photo') ?? 'assets2/images/school2.jpeg')}}" height="30"
                                width="30">
                        </a>
                    </li>
                    @elseif(session('student_id') != null)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('profile-student/'.session('student_id'))}}">
                            <img src="{{asset(session('student_photo') ?? 'assets/img/1.png')}}" height="30" width="30">
                        </a>
                    </li>
                    @else
                    <li class="nav-item">

                        <a class="nav-link" href="#"><span class="fas fa-user"></span></a>
                    </li>

                    @endif
                  

                </ul>
            </div>


        </nav>
    </div>
</section>

<!---end navbar-->
<!--- =======================
     ========================
-->