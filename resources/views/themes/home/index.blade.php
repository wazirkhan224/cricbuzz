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
        </a>

        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
               <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                <img src="Images/profile.png" width="35" id="prof" >
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

<!---Below slider live video-->
<div class="container-fluid bg-light ">

<div class="container pt-5">

    <div class="row " id="ser">
        <div class="col-md-12 text-sm-left wow animated fadeInUp ">
            <h1 style="color: #006400">LIVE Sports  </h1>
        </div>
        <div class="row">

        </div>

    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            @foreach($stream as $users)
            <div class="embed-responsive embed-responsive-4by3 " >
                <iframe width="560" height="315" src="{{ $users->live_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
    </div>


</div>
<br>
<br>

</div>
<!--paralex-->
<div class="pimg2">
    <div class="ptext" >
        <a href="#" style="text-decoration: none;"> <span class="border trans" >
         Upcoming tour Of pakistan
     </span>
 </a>
</div>
</div>

<section class="section section-dark">
    <h2>Section Two</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
</section>

<div class="pimg3">
    <div class="ptext">
        <a href="#" style="text-decoration: none;">  <span class="border trans">
            Upcoming Events In Pakistan
        </span>
    </a>
</div>
</div>

<!--get app image-->
<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-4 wow animated rotateIn" data-wow-duration="2s" data-wow-delay="2s" >
            <img class="responsiveimg" src="images/img15.png" width="350">
        </div>
        <div class="col-md-8">
            <h1 class="text-center wow animated fadeInRightBig "  data-wow-duration="2s" data-wow-delay="0s"
            style="margin-top: 7rem; color: #006400;font-size:24px;font-weight: 400;">The App features live updates of events, comprehensive coverage of politics, business, sports, entertainment, health, education, environment and many more of your choice.</h1>

            <button class="btn btn-success mt-4 btn-lg" style="margin-left: auto; margin-right: auto; display: block; border-radius: 25px;">Download App</button>
        </div>
        Sign In
    </div>
</div>

<!---videos-->
<div class="container-fluid bg-light">

    <div class="container pt-5" id="video">

        <div class="row " >
            <div class="col-md-12 text-center txtColor" >
                <h1 style="color: #006400" >Videos</h1>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach($video as $itm)
            <div class="col-md-6">

                <div class="embed-responsive embed-responsive-4by3 wow animated fadeInLeftBig " data-wow-duration="2s" data-wow-delay="0s">
                    <iframe width="540" height="360" src="{{ $itm->video_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            @endforeach
            <div class="col-md-3">

                <div class=" Div_Gap_Responsive embed-responsive embed-responsive-4by3 wow animated fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                    <iframe width="260" height="170" src="https://www.youtube.com/embed/u69Jr3ujVZo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class=" Div_Gap_Responsive embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
                    <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
            </div>

            <div class="col-md-3">
                <div class=" Div_Gap_Responsive embed-responsive embed-responsive-4by3  wow animated fadeInDown" data-wow-duration="2s" data-wow-delay="0s">

                    <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s" >
                    <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>

            </div>
        </div>
        <div class="text-center">
            <a href="videos.html"><button class="blogButton mt-5">View More</button> </a>
        </div>
    </div>
    <br>
    <!--carousal slider-->

    <section class="center slider">
        <div>
            <img src="images/img9.png">
        </div>
        <div>
            <img src="images/img10.png">
        </div>
        <div>
            <img src="images/img13.png">
        </div>
        <div>
            <img src="images/img11.png">
        </div>
        <div>
            <img src="images/img-afg.png">
        </div>
        <div>
            <img src="images/img-ban.png">
        </div>
        <div>
            <img src="images/img-sa.png">
        </div>
        <div>
            <img src="images/img-wi.png">
        </div>
    </section>
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
            document.getElementById('navmm').style.backgroundColor = '#f8f9fa ' ;
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

                        <form class="login-form" action="{{url('loginn')}}" method="POST">
                            @csrf
                            <h3 class="text-center " style="color: #006400;">Sign In</h3>
                            <input class="inputData mt-3" type="email" name="email" placeholder="Email"/>
                            <input class="inputData" type="password"  name="password" placeholder="Password"/>

                            <button class="formButton" type="submit">login</button>
                            <p class="message text-center">Not registered? <a id="signup_link" href="#" data-toggle="modal" data-target="#exampleModalCenter1" class="text-center">Create an account</a></p>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Model -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<!--                             <form class="register-form">

                                <h3 class="text-center" style="color: #006400;">Sign up</h3>
                                <input class="inputData mt-3" type="text" placeholder="Name"/>
                                <input class="inputData" type="password" placeholder="Password"/>
                                <input class="inputData" type="text" placeholder="Email address"/>
                                <button class="formButton">create</button>
                                <p class="message  text-center">Already registered? <a href="#" class=" text-center">Sign In</a></p>
                            </form> -->

                            <form class="login-form" action="{{url('/user/register')}}" method="POST">
                                @csrf
                                <h3 class="text-center " style="color: #006400;">Sign In</h3>
                                <input class="inputData" type="text" name="name">
                                <input class="inputData mt-3" type="email" name="email" placeholder="Email"/>
                                <input class="inputData" type="password"  name="password" placeholder="Password"/>

                                <button class="formButton" type="submit">Create Acount</button>
                                <p class="message  text-center">Already registered? <a href="#" class=" text-center" id="login_link"
                                    data-toggle="modal" data-target="#exampleModalCenter">Sign In</a></p>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>    
        <!-- Model -->

        <!--Modal 2 subscribe-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel" style="color: #006400;">Subscribe Our Channel</h5> -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form class="login-form">
                            <h5 class="text-center " style="color: #006400;"> For latest Update please subscribe:</h5>
                            <input class="inputData mt-3" type="text" placeholder="Enter Email"/>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Subscribe Now</button>
                    </div>
                </div>
            </div>
        </div>


        @stop

        @section('scripts')

        <script type="text/javascript">
            $(document).ready(function(){
                $('#signup_link').click(function(){
                    $('#exampleModalCenter').modal('toggle');
                });

                $('#login_link').click(function(){
                    $('#exampleModalCenter1').modal('toggle');
                });
            });

        </script>

        @endsection
