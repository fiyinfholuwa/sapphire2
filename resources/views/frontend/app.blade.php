<!DOCTYPE html>
<html lang="en">
	
<!--  01:03 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Obidiya Sapphire Enterprises</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('frontend/assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('frontend/assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('frontend/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('frontend/assets/css/flaticon.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('frontend/assets/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('frontend/assets/css/animate.css')}}" type="text/css" rel="stylesheet">
		<link href="{{asset('frontend/assets/css/jquery-ui.min.css')}}" type="text/css" rel="stylesheet">
		<!--Main Slider-->
		<link href="{{asset('frontend/assets/css/settings.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('frontend/assets/css/layers.css')}}" type="text/css" rel="stylesheet" media="screen">

		<link href="{{asset('frontend/assets/css/style.css')}}" type="text/css" rel="stylesheet">
		<link href="{{asset('frontend/assets/css/index.css')}}" type="text/css" rel="stylesheet">
		<link href="{{asset('frontend/assets/css/header.css')}}" type="text/css" rel="stylesheet">
		<link href="{{asset('frontend/assets/css/footer.css')}}" type="text/css" rel="stylesheet">
		<link href="{{asset('frontend/assets/css/theme-color/default.css')}}" rel="stylesheet" type="text/css" id="theme-color" />
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" >

	</head>
	<body>
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<!--loader-->

			<!-- header Start -->
			<header id="header" class="header">

				<div class="nav-wrap">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="logo">
									<a href="{{route('home')}}"><img style="margin:-50px 0px !important" src="{{asset('frontend/assets/images/logo.png')}}" alt=""></a>
								</div>
								<!-- Phone Menu button -->
								<button id="menu" class="menu hidden-md-up"></button>
							</div>
							<div class="col-md-9 nav-bg d-flex align-items-center">
								<nav class="navigation">
									<ul>
										<li>
											<a href="{{route('home')}}">Home</a>
		
										</li>
	
										<li>
											<a href="{{route('about')}}">About Us</a>
		
										</li>
	
										<li>
											<a href="{{route('product')}}">Products</a>
		
										</li>
										<li>
											<a href="{{route('project')}}">Projects</a>
		
										</li>
	
	
										<li>
											<a href="{{route('blog')}}">Blog</a>
		
										</li>
										@auth
									@if(Auth::check() && Auth::user()->user_type == "1")
									<li ><a href="{{route('dashboard')}}">Dashboard</a></li>
									
									@else
									
									@endif
									
									<li ><a href="{{route('logout')}}">Logout</a></li>
									@else
									<li>
											<a href="{{route('register')}}">Register</a>
		
										</li>
										<li>
											<a href="{{route('login')}}">Login</a>
		
										</li>
									@endauth
										
	
										<li>
											<a href="{{route('contact')}}">Contact Us</a>
		
										</li>
	
									</ul>
	
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--Header End-->
	

		@yield('content')
		<!-- FOOTER -->
		<footer class="footer pt-80 pt-xs-60">
			<div class="container">
				<!--Footer Info -->
				<div class="row footer-info mb-60">
					<div class="col-lg-3 col-md-4 col-xs-12 mb-sm-30">
						<h4 class="mb-30">CONTACT Us</h4>
						<address>
							<i class="ion-ios-location fa-icons"></i>Adedibu shopping complex, beside Academy Suites, Ososami, Oke Ado, Ibadan, Oyo state, Ibadan, Nigeria.


						</address>
						<ul class="link-small">
							<li>
								<a href="mailto:business@support.com"><i class="ion-ios-email fa-icons"></i>corporatecommunications</br>@obidiyasapphire.com</a>
							</li>
							<li>
								<a><i class="ion-ios-telephone fa-icons"></i>+234 703 195 4676</a>
							</li>
						</ul>
						<div class="icons-hover-black">
							<a href="javascript:avoid(0);"> <i class="fa fa-facebook"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-twitter"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-youtube"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-dribbble"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-linkedin"></i> </a>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
						<h4 class="mb-30">Links</h4>
						<ul class="link blog-link">
						<li>
								<a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i>Home</a>
							</li>
							<li>
								<a href="{{route('about')}}"><i class="fa fa-angle-double-right"></i> About Us</a>
							</li>
							<li>
								<a href="{{route('project')}}"><i class="fa fa-angle-double-right"></i>Projects</a>
							</li>
							<li>
								<a href="{{route('blog')}}"><i class="fa fa-angle-double-right"></i>Blog</a>
							</li>
							<li>
								<a href="{{route('contact')}}"><i class="fa fa-angle-double-right"></i>Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-5 col-xs-12 mb-sm-30">
						<h4 class="mb-30">Latest Blog</h4>
						<div class="widget-details link">
							@if(count($post_footer) > 0)
							@foreach($post_footer as $post)
							<div class="post-type-post media">
								<div class="entry-thumbnail media-left">
									<img src="{{asset($post->image)}}" alt="Image">
								</div>
								<!-- /.entry-thumbnail -->
								<div class="post-content media-body">
									<p class="entry-title">
										<a href="{{route('blog.detail', $post->post_url)}}">{{$post->title}}.</a>
									</p>
									<div class="post-meta">
									
										<time datetime="2018-02-10">
										{{$post->created_at->diffForHumans();}}
										</time>
									</div>
									<!-- /.post-meta -->
								</div>
								<!-- /.post-content -->
							</div>
							@endforeach
							@endif
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-xs-12 mt-sm-30 mt-xs-15">
						<div class="newsletter">
							<h4 class="mb-30">NEWSLETTER SIGNUP</h4>
							<p>
								Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:
							</p>
							<form>
								<input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
								<button class="newsletter-btn btn btn-xs btn-color" type="submit" value="">
									<i class="fa fa-angle-right mr-0"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
				<!-- End Footer Info -->
			</div>
			<!-- Copyright Bar -->
			<a href="https://api.whatsapp.com/send?phone=+2347043552242&text=Hello%2C%20i%20am%20from%20obidiya%20sapphire%20enterprise%20website%2C%20i%20need%20your%20service%2C." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<style>
	.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>
			<div class="copyright">
				<div class="container">
					<p class="">
						<!-- <a href="https://www.templateshub.net" target="_blank">Templates Hub</a> -->
					</p>
				</div>
			</div>
			<!-- End Copyright Bar -->
		</footer>
		<!-- END FOOTER -->

		<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery-ui.min.js" type="text/javascript')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/owl.carousel.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('frontend/assets/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('frontend/assets/js/jquery.appear.js')}}" type="text/javascript"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/extensions/revolution.extension.slideanims.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/extensions/revolution.extension.layeranimation.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/extensions/revolution.extension.navigation.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/extensions/revolution.extension.parallax.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.revolution.js')}}"></script>
		<!-- Mail Function Js -->
		<script src="{{asset('frontend/assets/js/validation.js')}}" type="text/javascript"></script>
		<!-- Compiled and minified JavaScript -->
		<script src="{{asset('frontend/assets/js/jquery.appear.js')}}" type="text/javascript"></script>
		<script src="{{asset('frontend/assets/js/custom.js')}}" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>


 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'success':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'warning':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'error':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #ff0000, #ff0000)" }
    }).showToast();
    break; 
 }
 @endif 
</script>

	</body>

<!--  08:21 GMT -->
</html>
