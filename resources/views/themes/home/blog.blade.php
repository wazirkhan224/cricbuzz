
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
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                <img src="Images/profile.png" width="35" id="prof" >
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>


    <!--Slider-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/img2.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/img2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/img2.png"  alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                    <!--paralex-->
                    <div class="pimg2">
                        <div class="ptext" >
                          <a href="#" style="text-decoration: none;"> <span class="border trans" >
                           Blog
                          </span>
                        </a>
                        </div>
                      </div>


<!--blog-->
                <div class="container-fluid bg-light">

                    <div class="container">
                            <div class="row">
                                @foreach($posts as $post)
                                <div class="col-md-4" style="margin:10px 0 10px 0 !important;">

                                    <div class="card wow animated fadeInUp">
                                        <a href="#" style="text-decoration: none;">    <img src=" {{asset('images/'.$post->file)}}" alt="card-1" class="card-img-top"></a>
                                        <div class="card-body">
                                            <h5 class="text-center text-success">{{$post->title}}</h5>
                                            <p class="wow animated fadeInUp" >{{str_limit($post->description,200)}} </p>
                                        </div>
                                    <a href=" {{ route('admin_post-show',['id'=>$post->id,'slug'=>$post->slug]) }}">
                                       <button class="blogButton">read more</button>
                                    </a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                     </div>
                <br>
                <br>
                </div>

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

