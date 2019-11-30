@extends('themes.layouts.master')

@section('content')

		 <!--navbar-->
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

		<div class="pt-5 bg-light pb-5">
                <div class="container ">

                        <div class="row " >
                            <div class="col-md-12 text-center" >
                                <h1 style="color: #006400" >Most Viewed Videos</h1>
                              </div>


                        </div>
                    </div>

			<div class="wrappers mt-5">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="#" target="_blank"><img src="images/1.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Creative Lifesaver</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/2.jpg" alt="image2"/></a>
						<div class="sb-description">
							<h3>Honest Entertainer</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/3.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Brave Astronaut</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/4.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Affectionate Decision Maker</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/5.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Faithful Investor</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/6.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Groundbreaking Artist</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img src="images/7.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Selfless Philantropist</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

				<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

            </div>
             <!---videos-->
             <div class="container-fluid bg-light">

                    <div class="container pt-5" id="video">

                        <div class="row " >
                            <div class="col-md-12 text-center txtColor" >
                                <h1 style="color: #006400" >Recent Videos</h1>
                              </div>
                        </div>
                    </div>
                    <!--row 1-->
                    <div class="container mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="embed-responsive embed-responsive-4by3 wow animated fadeInLeftBig " data-wow-duration="2s" data-wow-delay="0s">
                                      <iframe width="540" height="360" src="https://www.youtube.com/embed/lIDqPHjJAYs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-md-3">

                                    <div class="Div_Gap_Responsive embed-responsive embed-responsive-4by3 wow animated fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                      <iframe width="260" height="170" src="https://www.youtube.com/embed/u69Jr3ujVZo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
                                      <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                      </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="Div_Gap_Responsive embed-responsive embed-responsive-4by3  wow animated fadeInDown" data-wow-duration="2s" data-wow-delay="0s">

                                      <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                      <div class="embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s" >
                                        <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </div>

                                    </div>
                                </div>


                        </div>
                        <!--row 2-->
                        <div class="container mt-2">
                                <div class="row">
                                        <div class="col-md-3">

                                                <div class="Div_Gap_Responsive embed-responsive embed-responsive-4by3 wow animated fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                                  <iframe width="260" height="170" src="https://www.youtube.com/embed/u69Jr3ujVZo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
                                                  <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                  </div>
                                            </div>
                                            <div class="col-md-3">

                                                    <div class="Div_Gap_Responsive embed-responsive embed-responsive-4by3 wow animated fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                                      <iframe width="260" height="170" src="https://www.youtube.com/embed/u69Jr3ujVZo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                    <div class="embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
                                                      <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                      </div>
                                                </div>
                                    <div class="col-md-3">

                                        <div class=" Div_Gap_Responsive embed-responsive embed-responsive-4by3 wow animated fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                          <iframe width="260" height="170" src="https://www.youtube.com/embed/u69Jr3ujVZo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
                                          <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                          </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="Div_Gap_Responsive embed-responsive embed-responsive-4by3  wow animated fadeInDown" data-wow-duration="2s" data-wow-delay="0s">

                                          <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                          <div class="embed-responsive embed-responsive-4by3  mt-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay="0s" >
                                            <iframe width="260" height="170" src="https://www.youtube.com/embed/aRZV1y_vKQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                            </div>

                                        </div>
                                    </div>


                            </div>
                </div>
        </div>
        <!--navbar script color change-->
  <script>
		window.onscroll = function() {
		var count = window.pageYOffset;
		  if(count>=40){
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


		  }else if(count<40){
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
                        <p class="message">Already registered? <a href="#">Sign In</a></p>
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

@stop

@section('scripts')

@endsection
