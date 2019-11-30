@extends('themes.layouts.master')

@section('content')



    <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navmm">
    <div class="container-fluid">

     <a class="navbar-brand mr-5 ml-3" href="main.html"><img src="images/logo.png" width="30" id="logo"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto ml-5" >
         <li class="nav-item active">
           <a class="nav-link" href="stream.html" id="text3"><img src="images/stream.png"  class="mr-1" width="35" id="imgg">Live straming  <span class="sr-only">(current)</span></a>
         </li>

         <li class="nav-item">
                 <a class="nav-link" href="upcoming.html" id="text1" > <img src="images/tour.png" class="mr-1" width="35" id="tour">Upcoming Tour</a>
               </li>
               <li class="nav-item">
                     <a class="nav-link" href="blog.html" id="text"> <img src="images/blog.png" class="mr-1" width="35" id="blog">Blog</a>
                   </li>
                   <li class="nav-item">
                         <a class="nav-link" href="videos.html" id="text2"> <img src="images/video.png"class="mr-1" width="35" id="vid">Videos</a>
                       </li>
         <li class="nav-item mr1  dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="text4">
           <img src="images/series.png" width="35" id="series">  Series
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
                                  <div class="col-md-12">
                                      <div class="embed-responsive embed-responsive-4by3 " >
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Nfap2g98a0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                      </div>
                                  </div>





                          </div>


                  </div>
                  <br>
                  <br>

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
                                <div class="col-md-6">
                                    <div class="embed-responsive embed-responsive-4by3 wow animated fadeInLeftBig " data-wow-duration="2s" data-wow-delay="0s">
                                      <iframe width="540" height="360" src="https://www.youtube.com/embed/lIDqPHjJAYs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-md-3">

                                    <div class="embed-responsive embed-responsive-4by3 wow animated fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                      <iframe width="260" height="170" src="https://www.youtube.com/embed/u69Jr3ujVZo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
                                      <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                      </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="embed-responsive embed-responsive-4by3  wow animated fadeInDown" data-wow-duration="2s" data-wow-delay="0s">

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
                  </div>
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
 <!-- Footer -->
 <footer class="pt-5 pb-4" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
        <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
        <p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
        <ul class="f-address">
          <li>
            <div class="row">
              <div class="col-1"><i class="fas fa-map-marker"></i></div>
              <div class="col-10">
                <h6 class="font-weight-bold mb-0">Address:</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-1"><i class="far fa-envelope"></i></div>
              <div class="col-10">
                <h6 class="font-weight-bold mb-0">Have any questions?</h6>
                <p><a href="#">Support@userthemes.com</a></p>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-1"><i class="fas fa-phone-volume"></i></div>
              <div class="col-10">
                <h6 class="font-weight-bold mb-0">Address:</h6>
                <p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
        <h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
        <ul class="f-address">
          <li>
            <div class="row">
              <div class="col-1"><i class="fab fa-twitter"></i></div>
              <div class="col-10">
                <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                <label>10 Mins Ago</label>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-1"><i class="fab fa-twitter"></i></div>
              <div class="col-10">
                <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                <label>10 Mins Ago</label>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-1"><i class="fab fa-twitter"></i></div>
              <div class="col-10">
                <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                <label>10 Mins Ago</label>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
        <h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
        <ul class="recent-post">
          <li>
            <label class="mr-3">28 <br><span>APR</span></label>
            <span>Rendomised words which dont look eveable.</span>
          </li>
          <li>
            <label class="mr-3">29 <br><span>APR</span></label>
            <span>Rendomised words which dont look eveable.</span>
          </li>
          <li>
            <label class="mr-3">30 <br><span>APR</span></label>
            <span>Rendomised words which dont look eveable.</span>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
        <h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Your Email Address">
            <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
        </div>
        <ul class="social-pet mt-4">
          <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
          <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- Copyright -->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <div class="text-center text-white">
          &copy; 2018 Your Company. All Rights Reserved.
        </div>
      </div>
    </div>
  </div>
</section>

  @stop

  @section('scripts')

  @endsection

