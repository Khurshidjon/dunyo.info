<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--title-->
    <title>DUNYO.INFO</title>

	<!--CSS-->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/subscribe-better.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
	<link id="preset" rel="stylesheet" type="text/css" href="{{ asset('frontend/css/presets/preset1.css') }}">
	<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">

	<!--Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
<body class="box-width">
	<div id="main-wrapper" class="homepage-two">
		<div class="topbar">
			<div class="container">
				<div id="date-time"></div>
				<div id="topbar-right">
					<div class="dropdown language-dropdown">
						<a data-toggle="dropdown" href="#"><span class="change-text">En</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<li><a href="#">EN</a></li>
							<li><a href="#">FR</a></li>
							<li><a href="#">GR</a></li>
							<li><a href="#">ES</a></li>
						</ul>
					</div>
					<div id="weather"></div>
					<div class="searchNlogin">
						<ul>
							<li class="search-icon"><i class="fa fa-search"></i></li>
							<li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
								<div class="dropdown-menu top-user-section">
									<div class="top-user-form">
										<form id="top-login" role="form">
											<div class="input-group" id="top-login-username">
												<span class="input-group-addon"><img src="{{ asset('frontend/images/others/user-icon.png') }}" alt="" /></span>
												<input type="text" class="form-control" placeholder="Username" required="">
											</div>
											<div class="input-group" id="top-login-password">
												<span class="input-group-addon"><img src="{{ asset('frontend/images/others/password-icon.png') }}" alt="" /></span>
												<input type="password" class="form-control" placeholder="Password" required="">
											</div>
											<div>
												<p class="reset-user">Forgot <a href="#">Password/Username?</a></p>
												<button class="btn btn-danger" type="submit">Login</button>
											</div>
										</form>
									</div>
									<div class="create-account">
										<a href="#">Create a New Account</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="search">
							<form role="form">
								<input type="text" class="search-form" autocomplete="off" placeholder="Type & Press Enter">
							</form>
						</div> <!--/.search-->
					</div><!-- searchNlogin -->
				</div>
			</div>
		</div>
		<div id="navigation">
			<div class="navbar" role="banner">
				<div class="container">
					<div class="top-add">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

                            <a class="navbar-brand" href="{{ route('frontend.index') }}">
                                <img class="main-logo img-responsive" src="{{ asset('frontend/images/presets/preset1/logo.png') }}" alt="logo">
                            </a>
						</div>
						<div class="navbar-right">
							<a href="#"><img class="img-responsive" src="{{ asset('frontend/images/post/google-add.jpg') }}" alt="" /></a>
						</div>
					</div>
				</div>
				<div id="menubar">
					<div class="container">
						<nav id="mainmenu" class="navbar-left collapse navbar-collapse">
							<ul class="nav navbar-nav">
							<li class="home"><a href="/" class="">Home</a></li>
							<li class="business dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Business</a>
								<ul class="dropdown-menu">
									<li><a href="#">Dropdown Demo</a></li>
									<li><a href="#">Dropdown Demo</a></li>
									<li><a href="#">Dropdown Demo</a></li>
									<li><a href="#">Dropdown Demo</a></li>
									<li><a href="#">Dropdown Demo</a></li>
								</ul>
							</li>
							<li class="politics dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Politics</a>
								<ul class="dropdown-menu">
									<li><a href="#">Dropdown Demo</a></li>
									<li><a href="#">Dropdown Demo</a></li>
									<li><a href="#">Dropdown Demo</a></li>
									<li><a href="#">Dropdown Demo</a></li>
								</ul>
							</li>
							<li class="environment dropdown mega-dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Environment</a>
								<div class="dropdown-menu mega-menu">
									<div class="container">
										<div class="row">
											<div class="col-sm-3">
												<h2>Template Features</h2>
												<ul>
													<li><a href="#">Multi Home Variations</a></li>
													<li><a href="#">Multi Color Menu</a></li>
													<li><a href="#">Fully Responsive</a></li>
													<li><a href="#">Mega Dropdown</a></li>
													<li><a href="#">Creative Design</a></li>
												</ul>
											</div>
											<div class="col-sm-3">
												<h2>Included Pages</h2>
												<ul>
													<li><a href="{{ route('frontend.single-news') }}">News Details</a></li>
													<li><a href="listing.html">Category Listing</a></li>
													<li><a href="listing-life-style.html">Category Lifestyle</a></li>
													<li><a href="listing-sports.html">Category Sports</a></li>
													<li><a href="404.html">404 Error</a></li>
												</ul>
											</div>
											<div class="col-sm-3">
												<h2>Menu with image</h2>
												<div class="entry-thumbnail">
													<img class="img-responsive" src="{{ asset('frontend/images/post/4.jpg') }}" alt="" />
												</div>
											</div>
											<div class="col-sm-3">
												<h2>Menu with video</h2>
												<div class="entry-thumbnail embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" allowfullscreen></iframe>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="world dropdown mega-cat-dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">World</a>
								<div class="dropdown-menu mega-cat-menu">
									<div class="container">
										<div class="sub-catagory">
											<h2 class="section-title">World</h2>
											<ul class="list-inline">
												<li><a href="#">Usa</a></li>
												<li><a href="#">Asia</a></li>
												<li><a href="#">Us</a></li>
												<li><a href="#">Politics</a></li>
												<li><a href="#">Business</a></li>
												<li><a href="#">Press</a></li>
												<li><a href="#">Travel</a></li>
											</ul>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<div class="post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
															<img class="img-responsive" src="{{ asset('frontend/images/post/2.jpg') }}" alt="" />
														</div>
													</div>
													<div class="post-content">
														<div class="entry-meta">
															<ul class="list-inline">
																<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
																<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															</ul>
														</div>
														<h2 class="entry-title">
															<a href="{{ route('frontend.single-news') }}">Apple may be preparing for new Beats radio stations</a>
														</h2>
													</div>
												</div><!--/post-->
											</div>
											<div class="col-sm-3">
												<div class="post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
															<img class="img-responsive" src="{{ asset('frontend/images/post/6.jpg') }}" alt="" />
														</div>
													</div>
													<div class="post-content">
														<div class="entry-meta">
															<ul class="list-inline">
																<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
																<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															</ul>
														</div>
														<h2 class="entry-title">
															<a href="{{ route('frontend.single-news') }}">Why is the media so afraid of Facebook?</a>
														</h2>
													</div>
												</div><!--/post-->
											</div>
											<div class="col-sm-3">
												<div class="post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
															<img class="img-responsive" src="{{ asset('frontend/images/post/3.jpg') }}" alt="" />
														</div>
													</div>
													<div class="post-content">
														<div class="entry-meta">
															<ul class="list-inline">
																<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
																<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															</ul>
														</div>
														<h2 class="entry-title">
															<a href="{{ route('frontend.single-news') }}">Samsung Pay will support online shopping</a>
														</h2>
													</div>
												</div><!--/post-->
											</div>
											<div class="col-sm-3">
												<div class="post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
															<img class="img-responsive" src="{{ asset('frontend/images/post/5.jpg') }}" alt="" />
														</div>
													</div>
													<div class="post-content">
														<div class="entry-meta">
															<ul class="list-inline">
																<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
																<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															</ul>
														</div>
														<h2 class="entry-title">
															<a href="{{ route('frontend.single-news') }}">The best games for your phone</a>
														</h2>
													</div>
												</div><!--/post-->
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="technology dropdown mega-cat-dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Technology</a>
								<div class="dropdown-menu mega-cat-menu">
									<div class="container">
										<div class="sub-catagory">
											<h2 class="section-title">Technology</h2>
											<ul class="list-inline">
												<li><a href="#">Apps</a></li>
												<li><a href="#">Gear</a></li>
												<li><a href="#">Watch</a></li>
												<li><a href="#">Tech</a></li>
												<li><a href="#">Laptop</a></li>
												<li><a href="#">Mobile</a></li>
												<li><a href="#">3D Games</a></li>
											</ul>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<div class="post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
															<img class="img-responsive" src="{{ asset('frontend/images/post/technology/6.jpg') }}" alt="" />
														</div>
													</div>
													<div class="post-content">
														<div class="entry-meta">
															<ul class="list-inline">
																<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
																<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															</ul>
														</div>
														<h2 class="entry-title">
															<a href="{{ route('frontend.single-news') }}">Apple may be preparing for new Beats radio stations</a>
														</h2>
													</div>
												</div><!--/post-->
											</div>
											<div class="col-sm-3">
												<div class="post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
															<img class="img-responsive" src="{{ asset('frontend/images/post/technology/5.jpg') }}" alt="" />
														</div>
													</div>
													<div class="post-content">
														<div class="entry-meta">
															<ul class="list-inline">
																<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
																<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															</ul>
														</div>
														<h2 class="entry-title">
															<a href="{{ route('frontend.single-news') }}">Why is the media so afraid of Facebook?</a>
														</h2>
													</div>
												</div><!--/post-->
											</div>
											<div class="col-sm-3">
												<div class="post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
															<img class="img-responsive" src="{{ asset('frontend/images/post/technology/4.jpg') }}" alt="" />
														</div>
													</div>
													<div class="post-content">
														<div class="entry-meta">
															<ul class="list-inline">
																<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
																<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															</ul>
														</div>
														<h2 class="entry-title">
															<a href="{{ route('frontend.single-news') }}">Samsung Pay will support online shopping</a>
														</h2>
													</div>
												</div><!--/post-->
											</div>
											<div class="col-sm-3">
												<div class="post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
															<img class="img-responsive" src="{{ asset('frontend/images/post/technology/3.jpg') }}" alt="" />
														</div>
													</div>
													<div class="post-content">
														<div class="entry-meta">
															<ul class="list-inline">
																<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
																<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															</ul>
														</div>
														<h2 class="entry-title">
															<a href="{{ route('frontend.single-news') }}">The best games for your phone</a>
														</h2>
													</div>
												</div><!--/post-->
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="sports"><a href="{{ route('frontend.listing-sports') }}">Sports</a></li>
                        <li class="health"><a href="{{ route('frontend.health') }}">Health</a></li>
                        <li class="entertainment"><a href="{{ route('frontend.entertainment') }}">Entertainment</a></li>
                        <li class="lifestyle"><a href="{{ route('frontend.lifestyle') }}">Lifestyle</a></li>
							<li class="more dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages +</a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('frontend.single-news') }}">News Details</a></li>
									<li><a href="listing.html">Category Listing</a></li>
									<li><a href="listing-life-style.html">Category Lifestyle</a></li>
									<li><a href="listing-sports.html">Category Sports</a></li>
									<li><a href="404.html">404 Error</a></li>
									<li><a href="author-listing.html">Author Listing <span class="badge">New</span></a></li>
									<li><a href="author-details.html">Author Details <span class="badge">New</span></a></li>
									<li><a href="about-us.html">About Us <span class="badge">New</span></a></li>
									<li><a href="contact-us.html">Contact Us <span class="badge">New</span></a></li>
									<li><a href="contact-us2.html">Contact Us Two <span class="badge">New</span></a></li>
									<li><a href="signup.html">Sign Up Page<span class="badge">New</span></a></li>
									<li><a href="signin.html">Sign In page<span class="badge">New</span></a></li>
								</ul>
							</li>
						</ul>
						</nav>
					</div>
				</div><!--/#navigation-->
			</div><!--/#navigation-->
		</div><!--/#navigation-->

        @yield('content')

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">About Us</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<address>
								<p>Address : 123 Gegrit, London, England</p>
								<p>Call : +1234-222-3333</p>
								<p>Email: <a href="#">info@newspress.com</a></p>
							</address>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">Flickr Gallery</h1>
							<ul>
								<li><a href="{{ asset('frontend/images/post/flicker/1.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/1.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/2.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/2.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/3.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/3.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/4.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/4.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/5.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/5.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/6.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/6.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/7.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/7.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/8.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/8.jpg') }}" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget news-letter">
							<h1 class="section-title title">Weekly NewsLetter</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

							<form action="#" method="post" id="subscribe-form" name="subscribe-form">
								<input type="text" placeholder="Your E-mail" name="email">
								<button type="submit" name="subscribe" id="subscribe" >Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.footer-widget-->

		<footer id="footer">
			<div class="footer-top">
				<div class="container text-center">
					<div class="logo-icon"><img class="img-responsive" src="{{ asset('frontend/images/presets/preset1/logo-icon.png') }}" alt="" /></div>
				</div>
			</div>
			<div class="footer-menu">
				<div class="container">
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Advertisement</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="bottom-widgets">
				<div class="container">
					<div class="col-sm-4">
						<div class="widget">
							<h2>Category</h2>
							<ul>
								<li><a href="#">Business</a></li>
								<li><a href="#">Politics</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">World</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
							<ul>
								<li><a href="#">Environment</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="#">Entertainment</a></li>
								<li><a href="#">Lifestyle</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="widget">
							<h2>Editions</h2>
							<ul>
								<li><a href="#">United States</a></li>
								<li><a href="#">China</a></li>
								<li><a href="#">India</a></li>
								<li><a href="#">Maxico</a></li>
								<li><a href="#">Middle East</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h2>Tag</h2>
							<ul>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">Featured</a></li>
								<li><a href="#">World</a></li>
								<li><a href="#">Fashion</a></li>
							</ul>
							<ul>
								<li><a href="#">Environment</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="#">Entertainment</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Business</a></li>
							</ul>
							<ul>
								<li><a href="#">Tech</a></li>
								<li><a href="#">Movie</a></li>
								<li><a href="#">Music</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="widget">
							<h2>Products</h2>
							<ul>
								<li><a href="#">Ebook</a></li>
								<li><a href="#">Baby Product</a></li>
								<li><a href="#">Magazine</a></li>
								<li><a href="#">Sports Elements</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container text-center">
					<p><a href="#">NewsPress </a>&copy; 2015 </p>
				</div>
			</div>
		</footer>
	</div><!--/#main-wrapper-->


	<div class="subscribe-me text-center">
		<h1>Don’t Miss The Hottest News</h1>
		<h2>Subscribe our Newsletter</h2>
		<a href="#close" class="sb-close-btn"><img class="<img-responsive></img-responsive>" src="{{ asset('frontend/images/others/close-button.png') }}" alt="" /></a>
		<form action="#" method="post" id="popup-subscribe-form" name="subscribe-form">
			<div class="input-group">
				<span class="input-group-addon"><img src="{{ asset('frontend/images/others/icon-message.png') }}" alt="" /></span>
				<input type="text" placeholder="Enter your email" name="email">
				<button type="submit" name="subscribe">Go</button>
			</div>
		</form>
	</div><!--/.subscribe-me-->



		<!--/Preset Style Chooser-->
	<div class="style-chooser">
		<div class="style-chooser-inner">
			<a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
			<h4>Presets Color</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
				<li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
				<li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>
				<li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
				<li class="preset5" data-preset="5"><a href="#" data-color="preset5"></a></li>
				<li class="preset6" data-preset="6"><a href="#" data-color="preset6"></a></li>
			</ul>
		</div>
    </div>
	<!--/End:Preset Style Chooser-->

	<!--/#scripts-->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.simpleWeather.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.sticky-kit.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.easy-ticker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.subscribe-better.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/switcher.js') }}"></script>

</body>
</html>
