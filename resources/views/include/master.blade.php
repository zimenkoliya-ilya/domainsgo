<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Domains.Go The .Go Registar Provided By Altnet</title>

	



	<link href="{{ asset('css/plugins/navigation.min.css')}}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/theme-font.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/Bootstrap/bootstrap.min.css')}}">
	<!--Styles for RTL-->
    @yield('css')
	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->
 <!-- IE11 Support -->	<script>window.MSInputMethodContext && document.documentMode && document.write('<script src="js/ie11CustomProperties.js"><\x2fscript>');</script>


</head>
<body>

<!-- Preloader -->

<!--<div id="hellopreloader">
	<div class="preloader">
		<svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
			<g fill="none" fill-rule="evenodd">
				<g transform="translate(2 1)" stroke="#FFF" stroke-width="1.5">
					<circle cx="42.601" cy="11.462" r="5" fill-opacity="1" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="1;0;0;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="49.063" cy="27.063" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;1;0;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="42.601" cy="42.663" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;1;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="27" cy="49.125" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;1;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="11.399" cy="42.663" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;1;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="4.938" cy="27.063" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;1;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="11.399" cy="11.462" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;0;1;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="27" cy="5" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;0;0;1" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
				</g>
			</g>
		</svg>
	</div>
</div>-->

<!-- ... end Preloader -->

@include('include.nav')


@yield('content')


<!-- Footer -->
</div>
<footer id="site-footer" class="footer footer--dark footer--with-decoration">

	<div class="footer-content">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Domains.Go
						</h5>
						<ul>
							<li>
								<a href="http://patriotcloud.com">
									Patriot Cloud
								</a>
							</li>
							<li>
								<a href="http://index.go">
									Altnet Search
								</a>
							</li>
							<li>
								<a href="http://sellupay.com">
									Merchant Services
								</a>
							</li>
							<li>
								<a href="http://news.go">
									Altnet Portal
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Info
						</h5>
						<ul>
							<li>
								<a href="http://altnet.Go">
									Altnet.Go
								</a>
							</li>
							<li>
								<a href="http://domains.go/policy">
									Our Policy
								</a>
							</li>
							<li>
								<a href="http://altnet.go/info">
									Spread The Word
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Company
						</h5>
						<ul>
							<li>
								<a href="http://domains.go/about">
									About Us
								</a>
							</li>
							<li>
								<a href="http://domains.go/tickets">
									Support
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-0 mb-lg-0">
					<div class="widget w-info">
						<a href="/" class="site-logo">


							<img loading="lazy" src="{{ asset('img/demo-content/logo-white.png')}}" alt="logo" width="185">

						</a>
						<p>An Altnet.Go Company</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-subscribe-panel">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<h5 class="footer-subscribe-panel-title text-white">SUBSCRIBE TO Domains.Go NEWSLETTER</h5>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<span class="footer-subscribe-panel-subtitle"><span class="font-weight-bold">Join Our Newsletter & Marketing Communication.</span> We'll send you news and offers.</span>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 mb-0 mb-lg-0">
					<form class="footer-subscribe-form">
						<div class="input-btn--inline">
							<input class="input--dark" type="text" placeholder="Choose your new web address…">
							<button type="button" class="crumina-button button--lime button--l">SEARCH</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="sub-footer bg-black">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-0 mb-lg-0">
					<div class="copyright">
						<span>Copyright © 2021 <a href="/">Domains.GO</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a class="back-to-top" href="#">
		<svg class="crumina-icon">
			<use xlink:href="#icon-to-top"></use>
		</svg>
	</a>
</footer>

<!-- ... end Footer -->


<script src="{{ asset('js/jquery.min.js')}}"></script>

<script src="{{ asset('js/Bootstrap/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('js/js-plugins/navigation.min.js')}}"></script>
<!--<script src="js/js-plugins/select2.min.js"></script>-->
<script src="{{ asset('js/js-plugins/material.min.js')}}"></script>
<script src="{{ asset('js/js-plugins/swiper.min.js')}}"></script>
<!--<script src="js/js-plugins/jquery-countTo.min.js"></script>-->
<!--<script src="js/js-plugins/waypoints.min.js"></script>-->
<!--<script src="js/js-plugins/leaflet.min.js"></script>-->
<!--<script src="js/js-plugins/MarkerClusterGroup.min.js"></script>-->
<!--<script src="js/js-plugins/jquery.magnific-popup.min.js"></script>-->
<!--<script src="js/js-plugins/TimeCircles.min.js"></script>-->
<script src="{{ asset('js/js-plugins/smooth-scroll.min.js')}}"></script>
<script src="{{ asset('js/js-plugins/jquery.matchHeight.min.js')}}"></script>
<!--<script src="js/js-plugins/imagesLoaded.min.js"></script>-->
<!--<script src="js/js-plugins/isotope.pkgd.min.js"></script>-->
<!--<script src="js/js-plugins/ajax-pagination.min.js"></script>-->
<!--<script src="js/js-plugins/Chart.min.js"></script>-->
<!--<script src="js/js-plugins/chartjs-plugin-deferred.min.js"></script>-->




<script  src="{{ asset('js/main.js')}}"></script>
<!--<script src="js/js-plugins/leaflet-init.js"></script>-->

<!-- jQuery-scripts for Modules (Send Message) -->
<!--<script src="modules/forms/src/js/jquery.validate.min.js"></script>-->
<!--<script src="modules/forms/src/js/sweetalert2.all.js"></script>-->
<!--<script src="modules/forms/src/js/scripts.js"></script>-->

<!-- SVG icons loader -->
<script src="{{ asset('js/svg-loader.js')}}"></script>
<!-- /SVG icons loader -->
<script>
    function emails(tt){
        // document.getElementById("username").value = tt.value;
        document.getElementById("reg_email").value = tt.value;
    }
    function pass(aa){
        document.getElementById("reg_pass").value = aa.value;
        document.getElementById("reg_con").value = aa.value;
    }
</script>
@yield('script')
</body>

</html>