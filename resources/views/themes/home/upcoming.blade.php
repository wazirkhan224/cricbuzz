@extends('themes.layouts.master')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navmm">
        <div class="container-fluid">

            <a class="navbar-brand mr-5 ml-3" href="{{route('main_page')}}"><img src="images/logo.png" width="30" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-5" >
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('stream')}}" id="text3"><img src="images/stream.png"  class="mr-1" width="35" id="imgg">Live straming  <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tours')}}" id="text1" > <img src="images/tour.png" class="mr-1" width="35" id="tour">Series</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}" id="text"> <img src="images/blog.png" class="mr-1" width="35" id="blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('videos')}}" id="text2"> <img src="images/video.png"class="mr-1" width="35" id="vid">Videos</a>
                    </li>
                    <li class="nav-item mr1  dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="text4">
                            <img src="images/series.png" width="35" id="series"> Live Score
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Pakistan vs India</a>
                            <a class="dropdown-item" href="#">Srilanka vs Newzealand</a>

                            <a class="dropdown-item" href="#">Australia vs England</a>
                        </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="search" type="submit">Search</button>
                </form>
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <img src="Images/profile.png" width="35" id="prof" >
                </a>
            </div>
        </div>
    </nav>

    <!--paralex-->
    <div class="pimg2">
        <div class="ptext" >
            <a href="#" style="text-decoration: none;"> <span class="border trans" >
           Upcoming Series
          </span>
            </a>
        </div>
    </div>


    <!--blog-->
    <section>
        <div style="overflow: hidden">
            <div class="row">
                <div class="col-md-12 ">
                    <nav class="bg-success">
                        <div class="nav nav-tabk nav-fill " id="nav-tab" role="tablist">
                                @foreach($tour_category as $tc)

                                <a class="nav-item nav-link @if($tc->id==$tc->first()->id) {{ 'active' }} @endif" id="nav-tab-{{$tc->id}}" data-toggle="tab" href="#nav-{{$tc->id}}" role="tab" aria-controls="nav-tab-{{$tc->id}}" aria-selected="true"><h3 class="text-center" style="color: white;"> {{ $tc->title }}</h3></a>
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <!--Current Cricket-->

                        @foreach($tour_category as $ta)
                            <div class="tab-pane fade @if($ta->first()->id) {{ 'active' }} show @endif " id="nav-{{$ta->id}}" role="tabpanel" aria-labelledby="nav-{{$ta->id}}-tab">
                            <div class="container">
                            <div class="row pb-4">
                                <div class="col-md-12 mt-5">
                                    @foreach($ta->nextview as $nv)
                                        <h4>{{ $nv->title }}
                                        </h4>
                                        <ul>
                                            @foreach($nv->tourDescDetail as $tdg)
                                                <a href="#" class="txt"><li>{{ $tdg->description }}</li></a>
                                            @endforeach
                                        </ul>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                            </div>
                            </div>
                         @endforeach
                    </div>
                </div>
             </div>
        </div>
    </section>






    <!--navbar script color change-->
    <script>
        window.onscroll = function() {
            var count = window.pageYOffset;
            if(count>=500){
                document.getElementById('navmm').style.backgroundColor = '#006400	';
                document.getElementById('text').style.color = 'white';
                document.getElementById('text1').style.color = 'white';
                document.getElementById('text2').style.color = 'white';
                document.getElementById('text3').style.color = 'white';
                document.getElementById('search').style.color = 'white';
                document.getElementById('navbarDropdown').style.color = 'white';
                document.getElementById('imgg').src  = 'Images/stream2.png';
                document.getElementById('tour').src  = 'Images/tour2.png';
                document.getElementById('prof').src  = 'Images/profile2.png';
                document.getElementById('logo').src  = 'Images/logo2.png';
                document.getElementById('vid').src  = 'Images/video2.png';
                document.getElementById('blog').src  = 'Images/blog2.png';
                document.getElementById('series').src  = 'Images/series2.png';


            }else if(count<500){
                document.getElementById('navmm').style.backgroundColor = 'white' ;
                document.getElementById('text').style.color = 'black';
                document.getElementById('text1').style.color = 'black';
                document.getElementById('text2').style.color = 'black';
                document.getElementById('text3').style.color = 'black';
                document.getElementById('search').style.color = 'black';
                document.getElementById('navbarDropdown').style.color = 'black';
                document.getElementById('imgg').src  = 'Images/stream.png';
                document.getElementById('tour').src  = 'Images/tour.png';
                document.getElementById('prof').src  = 'Images/profile.png';
                document.getElementById('logo').src  = 'Images/logo.png';
                document.getElementById('vid').src  = 'Images/video.png';
                document.getElementById('blog').src  = 'Images/blog.png';
                document.getElementById('series').src  = 'Images/series.png';

            }
        }
    </script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form">
                            <form class="register-form">
                                <h3 class="text-center" style="color: #006400;">Sign up</h3>
                                <input class="inputData mt-3" type="text" placeholder="Name"/>
                                <input class="inputData" type="password" placeholder="Password"/>
                                <input class="inputData" type="text" placeholder="Email address"/>
                                <button class="formButton">create</button>
                                <p class="message  text-center">Already registered? <a href="#" class=" text-center">Sign In</a></p>
                            </form>
                            <form class="login-form">
                                <h3 class="text-center " style="color: #006400;">Sign In</h3>
                                <input class="inputData mt-3" type="text" placeholder="Username"/>
                                <input class="inputData" type="password" placeholder="Password"/>
                                <button class="formButton">login</button>
                                <p class="message text-center">Not registered? <a href="#" class="text-center">Create an account</a></p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop

@section('scripts')

@endsection
