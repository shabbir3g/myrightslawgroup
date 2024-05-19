<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyRightsLawGroup
 */

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />


	<!-- Google Fonts -->

	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
		rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<header id="main-header" class="main-header">
		<nav>
			<div class="header-area">
				<div class="header-middle ">
					<div class="header-last-area ">
						<div class="toogle-button">
							<a class="navbar-toggler" href="#navbarSupportedContent" id="toggle"
								data-toggle="collapse"><span></span></a>
						</div>


					</div>
					<div class="header-pre-last-area ">
						<div class="header-child-area ">
							<div class="header-first-child-area">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.gif" alt="Your Company"></a>
							</div>
							<div class="header-second-child-area">
								<div class="header-third-child-area">
									<div class=" header-third-child-area-1 ">
										<p>SE HABLA ESPAÑOL </p>
										<i class="fa-solid fa-phone-volume"></i>
										<a href="">(888) 702-8882</a>
									</div>
									<ul class="main-menu">
										<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
										<li><a href="index.html" class=" hover:bg-gray-700 hover:text-white">Home</a>
										</li>
										<li><a href="blog.html" class=" hover:bg-gray-700 hover:text-white">Blog</a>
										</li>
										<li><a href="#" class=" hover:bg-gray-700 hover:text-white">Projects</a>
										</li>
										<li><a href="#" class=" hover:bg-gray-700 hover:text-white">Projects</a>
										</li>
										<li><a href="#" class=" hover:bg-gray-700 hover:text-white">Projects</a>
										</li>
										<li><a href="#" class=" hover:bg-gray-700 hover:text-white">Projects</a>
										</li>
										<li><a href="#"
												class="text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
										</li>
										<li><a href="#"
												class="text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Mobile menu, show/hide based on menu state. -->
				<div class="mobile-menu" id="mobile-menu">
					<div class="sub-mobile-menu space-y-1 ">
						<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
						<li><a href="index.html" class=" hover:bg-gray-700 hover:text-white">Home</a>
						</li>
						<li><a href="blog.html" class=" hover:bg-gray-700 hover:text-white">Blog</a></li>
						<li><a href="#" class="hover:bg-gray-700 hover:text-white">Projects</a></li>
						<li><a href="#" class=" hover:bg-gray-700 hover:text-white">Calendar</a></li>
					</div>
				</div>
		</nav>
		<div class="page-heading">
			<a href="#">CALL (888)702-8882 - OPEN 24/7</a>
		</div>
</header>
