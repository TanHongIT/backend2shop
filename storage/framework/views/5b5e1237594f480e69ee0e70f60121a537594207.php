
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel </title>
<base href="<?php echo e(asset('')); ?>">
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
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- CSS Files scroll to top-->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />
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
						<?php if(Auth::Check()): ?>
							<li><a href="<?php echo e(route('admin')); ?>"><i class="fa fa-user"></i>Tài khoản</a></li>
            			<?php else: ?> 
							<li><a href="<?php echo e(route('register')); ?>">Register</a></li>
							<li><a href="<?php echo e(route('login')); ?>">Login</a></li>
            			<?php endif; ?>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
				<h1><a href="<?php echo e(url('')); ?>" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt="">T2T Team From Back-End 2 With Love </a></h1><br>
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
							<div class="cartinfo"><a href="<?php echo e(route('cart.checkout')); ?>"><i class="fa fa-shopping-cart"></i> Giỏ hàng <b><?php echo e(Cart::getTotalQuantity()); ?></b></a></div></div>
							
						
					</div>
					
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
						<?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
							<?php
								$txtDropdown = 'class="nav-link"';
								$isDropdown = false;
								if(count($category->subcategories))
								{
									$isDropdown = true;
									$txtDropdown = 'role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
								}
							?>
							
							<a <?php echo $txtDropdown; ?> href="<?php echo e(route('category.show', $category->id)); ?>" id="cat<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></a>
							<?php if($isDropdown): ?>
								<?php echo $__env->make('layouts.partials.subCategoryList',['subcategories' => $category->subcategories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php endif; ?> 
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e(route('about')); ?>">Giới thiệu</a></li>
						<li><a href="<?php echo e(route('contact')); ?>">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<br>
	
	<main role="main">
        <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

    </main>

	
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
</html><?php /**PATH C:\wamp64\www\backend2shop\resources\views/layouts/default.blade.php ENDPATH**/ ?>