{{-- 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Album example for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body>
    <header class="menu-area">
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark mainmenu">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            @foreach ($parentCategories as $category)
            <li class="nav-item dropdown">
              @php
              $txtDropdown = 'class="nav-link"';
			  $isDropdown = false;
              if(count($category->subcategories))
              {
                $isDropdown = true;
                $txtDropdown = 'class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
              }
              @endphp
              
              <a {!! $txtDropdown !!} href="{{ route('category.show', $category->id) }}" id="cat{{ $category->id }}">{{ $category->category_name }}</a>
              @if($isDropdown)
                  @include('layouts.partials.subCategoryList',['subcategories' => $category->subcategories])
              @endif 
            </li>
            @endforeach
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <div class="">
            @if (Auth::Check())
              <a href="{{url('/home')}}">User</a>
            @else 
              <a href="{{url('/login')}}">Login</a>
            @endif
          </div>
          <a class="btn btn-success btn-sm ml-3" href="{{route('cart.checkout')}}">
              <i class="fa fa-shopping-cart"></i> Cart Total Qty
              <span class="badge badge-light">{{Cart::getTotalQuantity()}}</span>
          </a>
        </div>
      </nav>
    </header>
    <main role="main">
        @include('layouts.partials.messages')
        @yield('content')
    </main>
    <footer class="text-muted bg-dark p-5 mt-5">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script src="{{ asset('js/site.js') }}"></script>
  </body>
</html> --}}
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel </title>
<base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
	{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  	<script>tinymce.init({selector:'textarea'});</script> --}}
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- CSS Files scroll to top-->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
	<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
</head>
<body>
	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> Võ Văn Ngân, Thủ Đức</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0123 456 789</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if (Auth::Check())
							<li><a href="{{route('admin')}}"><i class="fa fa-user"></i>Tài khoản</a></li>
            			@else 
							<li><a href="{{ route('register') }}">Register</a></li>
							<li><a href="{{route('login')}}">Login</a></li>
            			@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
				<h1><a href="{{ url('') }}" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt="">T2T Team From Back-End 2 With Love </a></h1><br>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						  </form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="cartinfo"><a href="{{route('cart.checkout')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng <b>{{Cart::getTotalQuantity()}}</b></a></div></div>
							{{-- <a class="btn btn-success btn-sm ml-3" href="{{route('cart.checkout')}}">
								<i class="fa fa-shopping-cart"></i> Cart Total Qty
								<span class="badge badge-light">{{Cart::getTotalQuantity()}}</span>
							</a> --}}
						
					</div>
					{{-- <div class="beta-comp">
						
							<a class="btn btn-success btn-sm ml-3" href="{{route('cart.checkout')}}">
								<i class="fa fa-shopping-cart"></i> Cart Total Qty
								<span class="badge badge-light">{{Cart::getTotalQuantity()}}</span>
							</a>
						
					</div> --}}
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						@foreach ($parentCategories as $category)
							<li>
							@php
								$txtDropdown = 'class="nav-link"';
								$isDropdown = false;
								if(count($category->subcategories))
								{
									$isDropdown = true;
									$txtDropdown = 'role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
								}
							@endphp
							
							<a {!! $txtDropdown !!} href="{{ route('category.show', $category->id) }}" id="cat{{ $category->id }}">{{ $category->category_name }}</a>
							@if($isDropdown)
								@include('layouts.partials.subCategoryList',['subcategories' => $category->subcategories])
							@endif 
							</li>
						@endforeach
						<li><a href="{{route('about')}}">Giới thiệu</a></li>
						<li><a href="{{route('contact')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<br>
	{{-- main --}}
	<main role="main">
        @include('layouts.partials.messages')
        @yield('content')

    </main>

	{{-- footer --}}
	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title" style='text-align:center'>T2T Shop</h4>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Information</h4>
						<div>
							<ul>
								<li><a href=""><i class="fa fa-chevron-right"></i> Web Design</a></li>
								<li><a href=""><i class="fa fa-chevron-right"></i> Web development</a></li>
								<li><a href=""><i class="fa fa-chevron-right"></i> Marketing</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Contact Us</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>HCM, The Phone: +84 123 456 78</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							</div>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Newsletter Subscribe</h4>
						<form action="" method="GET">
							<input type="email" name="your_email">
							<button class="pull-right" type="">Subscribe <i class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) <script>
				document.write(new Date().getFullYear())
			  </script></p>
			<p class="pull-right pay-options">
				{{-- <a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
				<a href="#"><img src="source/assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/paypal.jpg" alt="" /></a> --}}
				<a href="https://tanhongit.net/" target="_blank">T2T Team</a> for a better web.
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>
<!-- scroll to top -->
<script src="asstes/js/scrip.js"></script>
	<!--customjs-->
	<script src="source/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
	
</body>
<a class="on_top" href="#top" style="display: block;"><i class="fa-arrow-circle-up fa"></i></a>
</html>