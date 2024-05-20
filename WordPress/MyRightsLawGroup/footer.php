<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyRightsLawGroup
 */

?>

<footer>
		<div class="container">
			<div class="footer-area flex ">
				<div class="footer-left">
				<?php $footer_logo = get_field('footer_logo','options'); 
					if( $footer_logo): ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo $footer_logo; ?>" alt="<?php bloginfo('title'); ?>"></a>
					<?php endif; ?>


				<?php $footer_phone_number = get_field('footer_phone_number','options'); 
					if( $footer_phone_number): ?>
						<p class="call">Call us 24/7</p>
						<a href="tel: <?php echo $footer_phone_number; ?>"><?php echo $footer_phone_number; ?></a>
				<?php endif; ?>

					<ul class="social-icon">


					<?php $facebook = get_field('facebook','options'); 
					if( $facebook): ?>
						<li>
							<a href="<?php echo $facebook; ?>"><i class="fa-brands fa-facebook-f"></i></a>
						</li>
					<?php endif; ?>

					<?php $linkedin = get_field('linkedin','options'); 
					if( $linkedin): ?>
						<li>
							<a href="<?php echo $linkedin; ?>"><i class="fa-brands fa-linkedin-in"></i></a>
						</li>
					<?php endif; ?>



					<?php $instagram = get_field('instagram','options'); 
					if( $instagram): ?>
						<li>
							<a href="<?php echo $instagram; ?>"><i class="fa-brands fa-instagram"></i></a>
						</li>
					<?php endif; ?>

					<?php $yelp = get_field('yelp','options'); 
					if( $yelp): ?>
						<li>
							<a href="<?php echo $yelp; ?>"><i class="fa-brands fa-yelp"></i></a>
						</li>
					<?php endif; ?>

				<?php $twitter = get_field('twitter','options'); 
					if( $twitter): ?>
						<li>
							<a href="<?php echo  $twitter; ?>"><i class="fa-brands fa-x-twitter"></i></a>
						</li>
						<?php endif; ?>

					</ul>
				</div>

				<div class="footer-right">
				<?php $right_text = get_field('right_text','options'); 
					if( $right_text): echo $right_text; ?>
					
				<?php endif; ?>

				</div>
			</div>
		</div>

		<div class="copyright">
			<?php $copy_right_text = get_field('copy_right_text','options'); 
					if( $copy_right_text): ?>
					<p><?php echo $copy_right_text;  ?>
			</p>
				<?php endif; ?>

			
			<div class="footer-menu">
				<?php 
					wp_nav_menu([
					'theme_location'    => 'footer-menu',
					'menu_class'      => 'footer-menu',
					]);
				?>
				<!-- <ul>
					<li><a href="#">Disclaimer</a></li>
					<li><a href="#">SMS Disclaimer</a></li>
					<li><a href="#">Terms and Conditions</a></li>
					<li><a href="#">Privacy Policy </a></li>
					<li><a href="#">Opt-Out Preferences</a></li>
					<li><a href="#">Site Map</a></li>
				</ul> -->
			</div>
		</div>

        <?php wp_footer(); ?>

	</footer>

</body>
</html>