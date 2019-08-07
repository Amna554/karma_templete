
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>karma/css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	
	<header class="header_area sticky-header">
		<div class="main_menu"><br>
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="<?php echo base_url();?>karma/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="<?php echo site_url('Welcome/home')?>">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/category')?>">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/product_detail')?>">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/checkout')?>">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/shopping_cart')?>">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/confirmation')?>">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/blog')?>">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/blog_details')?>">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/login');?>">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/order_tracking');?></a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/elements');?>">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/contact');?>">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</header>