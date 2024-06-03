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
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php $favicon = get_field('favicon','options'); 
		if( $favicon): ?>
	<!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon['url']; ?>" />
	<?php endif; ?>


	<!--[if (gte IE 9)|!(IE)]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<![endif]--> 


	<!-- Google Fonts -->

	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
		rel="stylesheet">

	<?php include_once get_template_directory() .  '/inc/custom-style.php'; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<header id="main-header" class="main-header">
		<nav>
			<div class="header-area container">
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
							<?php $logo_upload = get_field('logo_upload','options'); 
							  if( $logo_upload): ?>
								<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo_upload; ?>" alt="<?php bloginfo('title'); ?>"></a>
								<?php endif; ?>
							</div>
							<div class="header-second-child-area">
								<div class="header-third-child-area">
									<div class=" header-third-child-area-1 ">
									<?php $right_side_text = get_field('right_side_text','options'); 
							  			if( $right_side_text): ?>
										<p><?php echo $right_side_text; ?></p>
										<?php endif; ?>

										<?php $phone_number = get_field('phone_number','options'); 
							  			if( $phone_number): ?>
										<i class="fa-solid fa-phone-volume"></i>
										<a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
										<?php endif; ?>
									</div>
									<?php 
										wp_nav_menu([
										'theme_location'    => 'main-menu',
										'menu_class'      => 'main-menu',
										]);
										?>
									
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

		<?php $page_header = get_field('page_header','options'); 
		if( $page_header == 'show'): ?>
		<div class="page-heading">
		<?php $phone_number = get_field('phone_number','options'); 
			if( $phone_number): ?>
			<a href="tel: <?php echo $phone_number; ?>">CALL <?php echo $phone_number; ?> - OPEN 24/7</a>
			<?php endif; ?>
		</div>
		<?php endif; ?>


</header>
