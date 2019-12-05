
@extends('themes.layouts.master')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navmm">
        <div class="container-fluid">

            <a class="navbar-brand mr-5 ml-3" href="{{route('main_page')}}">
                <img src=" {{ asset('images/logo.png') }}" width="30" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-5" >
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('stream')}}" id="text3">
                            <img src=" {{asset('images/stream.png')}}"  class="mr-1" width="35" id="imgg">Live straming  <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tours')}}" id="text1" >
                         <img src="{{ asset('images/tour.png ') }}" class="mr-1" width="35" id="tour">Series</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}" id="text">
                         <img src="{{ asset('/images/blog.png') }}" class="mr-1" width="35" id="blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('videos')}}" id="text2">
                         <img src="{{ asset('/images/video.png') }}"class="mr-1" width="35" id="vid">Videos</a>
                    </li>
                    <li class="nav-item mr1  dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="text4">
                            <img src="/images/series.png" width="35" id="series"> Live Score
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
            <!--Slider-->
            

                    <!--paralex-->
                    <div class="pimg1">
                        <div class="ptext" >
                          <a href="#" style="text-decoration: none;"> <span class="border trans" >
                           Blog           
                          </span>
                        </a>
                        </div>
                      </div>
                      
                        
<!--blog-->
                <div class="container-fluid bg-light">

                    <div class="container pt-5">
                            <div class="row">
                                <div class="col-md-8">

                                    <div class="card wow animated fadeInUp">
                                        <a href="#" style="text-decoration: none;"> 
                                           <img src="{{asset('images/'.$post->file)}}" alt="card-1" class="card-img-top">
                                        </div>
                                            <div class="card-body">
                                            
                                          </a>

                                          <div class="">
                                                <header> <h3 class="text-success text-center">{{$post->title}}</h3> </header>
                                                       <article><p class="font">
                                                        {{str_limit($post->description,200)}}
                                                           </p></article> 
                                              </div>                                        
                                    </div>
                                  
                                </div>
                                
                                <div class="col-md-4">
                                        <h1 class="text-center text-success">Recent Post</h1>
                                        <div class="card wow animated fadeInRight mt-4">
                                            <img src="{{asset('images/'.$post->file)}}" alt="card-1" class="card-img-top">
                                            <div class="card-body">
                                                <h5  class="text-center text-success">
                                                    {{$post->title}}

                                                 </h5>
                                                <p class="wow animated fadeInRight">
                                                    {{str_limit($post->description,200)}}
                                                </p>
                                        </div>
                                        <button class="blogButton" href="#">read more</button>
                                    </div>
                                </div>
                                
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
        document.getElementById('imgg').src  = '/images/stream2.png';
        document.getElementById('tour').src  = '/images/tour2.png';
        document.getElementById('prof').src  = '/images/profile2.png';
        document.getElementById('logo').src  = '/images/logo2.png';
        document.getElementById('vid').src  = '/images/video2.png';
        document.getElementById('blog').src  = '/images/blog2.png';
        document.getElementById('series').src  = '/images/series2.png';
        

      }else if(count<500){
        document.getElementById('navmm').style.backgroundColor = 'white' ;
        document.getElementById('text').style.color = 'black';        document.getElementById('text1').style.color = 'black';
        document.getElementById('text2').style.color = 'black';
        document.getElementById('text3').style.color = 'black';
        document.getElementById('search').style.color = 'black';
        document.getElementById('navbarDropdown').style.color = 'black';
        document.getElementById('imgg').src  = '/images/stream.png';
        document.getElementById('tour').src  = '/images/tour.png';
        document.getElementById('prof').src  = '/images/profile.png';
        document.getElementById('logo').src  = '/images/logo.png';
        document.getElementById('vid').src  = '/images/video.png';
        document.getElementById('blog').src  = '/images/blog.png';
        document.getElementById('series').src  = '/images/series.png';
        
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
 

 
<!--jquery-->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
</script>
<!--wao-->
<script src="wow.min.js"></script>
<script>
  new WOW().init();
  </script> 
  <!-- login script -->
 <script>

  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });

@stop

@section('scripts')

@endsection