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
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.gif" alt="Your Company"></a>
					<p class="call">Call us 24/7</p>
					<a href="#">(888) 702-8882</a>
					<ul class="social-icon">
						<li>
							<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa-brands fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa-brands fa-yelp"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
						</li>
					</ul>
				</div>

				<div class="footer-right">
					<h2>We Protect Your Rights</h2>
					<p>
						Being arrested does not make you guilty of the crime. We may be able to get
						your
						charges reduced
						or even completely dismissed. Talk to us - you will feel and hear how much we can help.</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<p>Copyright &copy; 2024 My Rights Law. All rights reserved.
			</p>
			<p>Disclaimer | SMS Disclaimer | Terms and Conditions | Privacy Policy |
				Opt-Out
				Preferences | Site Map</p>
		</div>

        <?php wp_footer(); ?>

	</footer>

</body>
</html>