<?php
/**
 * Template Name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyRightsLawGroup
 */

get_header(); ?>

<!-- Banner Area Section  -->
<section class="banner-area">
		<div class="banner-content">
			<div class="banner-text">
				<h1>Defending Your Rights Delivering Results</h1>
				<p>"Legal issues can be extremely complex and have potential life-changing implications. Call us to see
					how we can increase your chances for a successful outcome." -Attorney Bobby Shamuilian
				</p>
				<button>Start Your Free Consultation </button>
			</div>
		</div>

	</section>
	<!-- Featured Logo Section  -->
	<section class="featured-section">
		<div class="sub-company">
			<p>Featured On</p>
		</div>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/abc-news-logo-navy-163x0.png" alt="">
		</div>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/court-tv-logo-navy.png" alt="">
		</div>
		<div class="<?php echo get_template_directory_uri(); ?>/logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/NewsNation-logo-navy.png" alt="">
		</div>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/nbc-logo-navy.png" alt="">
		</div>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/fox-news-channel-logo-navy.png" alt="">
		</div>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cbs-news-logo-navy-185x0.png" alt="">
		</div>

	</section>

	<!-- in a media Section  -->
	<section class="media-section">
		<div class="media-heading">
			<h2>In The Media</h2>
		</div>
		<div class="owl-carousel owl-theme">
			<div class="item-video" data-merge="1">
				<a class="owl-video" href="https://www.youtube.com/watch?v=9zZmpOzQpsM&t=9851s"></a>
			</div>
			<div class="item-video" data-merge="1"><a class="owl-video"
					href="https://www.youtube.com/watch?v=tjjDh55ClLg"></a></div>
			<div class="item-video" data-merge="1"><a class="owl-video"
					href="https://www.youtube.com/watch?v=uRJsfK-K-gQ"></a></div>
			<div class="item-video" data-merge="1"><a class="owl-video"
					href="https://www.youtube.com/watch?v=oy18DJwy5lI"></a></div>
			<div class="item-video" data-merge="1"><a class="owl-video"
					href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
		</div>
	</section>

	<!-- Awards Logo Section  -->
	<section class="awards-section">
		<div class="awards-heading">
			<h2>Awards & Recognitions</h2>
		</div>
		<div class="awards">
			<div class="awards-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/AVVO-10-Criminal-defense-1-e1659000434833.png" alt="">
			</div>
			<div class="awards-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/NTL-top-40-40-member-e1659000176439.webp" alt="">
			</div>
			<div class="awards-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/AIOTL-lit-year-2021-150x150-1-e1659000237749.webp" alt="">
			</div>
			<div class="awards-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/CA-DUI-LAW-Assoc.webp" alt="">
			</div>
			<div class="awards-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/justia-lawyer-rating-e1659072790451.png" alt="">
			</div>
		</div>
	</section>


	<section class="middle-content">
		<div class="injury-area">
			<h2>California Criminal Defense, DUI, and Personal Injury <br> Lawyers
			</h2>
			<div class="devider">
				<hr>
			</div>
			<div class="injury-header">
				<h3>HELPING CALIFORNIANS IN SAN BERNARDINO COUNTY, LOS
					ANGELESCOUNTY, RIVERSIDECOUNTY, ORANGE COUNTY, AND
					THROUGHOUT THE STATE</h3>
			</div>
			<div class="injury-conent">
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
			</div>
		</div>
		<div class="attorneys-section">
			<div class="attorney-header">
				<h2>MEET OUR ATTORNEYS
				</h2>
			</div>
			<div class="attorney">
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/Bobby-Shamulian-Esq_med.webp" alt="">
					<p>Bobby Shamuilian, Esq.</p>
					<a href="">VIEW BIO</a>
				</div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/Rory-Daly-Esq_med2.webp" alt="">
					<p>Roderick Daly, Esq.</p>
					<a href="">VIEW BIO</a>
				</div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/Michael-Athari-Esq_med.webp" alt="">
					<p>Michael Athari, Esq.</p>
					<a href="">VIEW BIO</a>
				</div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/Jonathan-Rapel-Esq.webp" alt="">
					<p>Jonathan Rapel, Esq.</p>
					<a href="">VIEW BIO</a>
				</div>
			</div>
		</div>
	</section>

	<section class="middle-content">
		<div class="injury-area">
			<div class="injury-header">
				<h3>HELPING CALIFORNIANS IN SAN BERNARDINO COUNTY, LOS
					ANGELESCOUNTY, RIVERSIDECOUNTY, ORANGE COUNTY, AND
					THROUGHOUT THE STATE</h3>
			</div>
			<div class="injury-conent">
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
			</div>
		</div>
		<div class="case-area">
			<div class="case-header">
				<h3>FOCUSING ON CRIMINAL DEFENSE AND ACCIDENT INJURY CASES
				</h3>
			</div>
			<div class="case-boxes">
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
			</div>
			<div class="view-all">
				<a href="#">VIEW ALL+</a>
			</div>
		</div>
	</section>

	<section class="middle-content">
		<div class="injury-area">
			<div class="injury-header">
				<h3>HELPING CALIFORNIANS IN SAN BERNARDINO COUNTY, LOS
					ANGELESCOUNTY, RIVERSIDECOUNTY, ORANGE COUNTY, AND
					THROUGHOUT THE STATE</h3>
			</div>
			<div class="injury-conent">
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
					defend those
					people who are
					in
					need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>

			</div>
		</div>
		<div class="case-area">
			<div class="case-header">
				<h3>FOCUSING ON CRIMINAL DEFENSE AND ACCIDENT INJURY CASES
				</h3>
			</div>
			<div class="case-boxes">
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
				<div class="case"><a href="">Alcohol-relatedd crime layout</a></div>
			</div>
			<div class="view-all">
				<a href="#">VIEW ALL+</a>
			</div>
		</div>
	</section>

	<section class="middle-content">
		<div class="injury-area">
			<div class="injury-header">
				<h3>HELPING CALIFORNIANS IN SAN BERNARDINO COUNTY, LOS ANGELESCOUNTY, RIVERSIDECOUNTY, ORANGE COUNTY,
					AND THROUGHOUT THE STATE</h3>
			</div>
			<div class="injury-conent">
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>Legal matters can have far-reaching effects on your day-to-day life, and at My
					Law, we get that. It is
					our top priority to achieve the best possible results for you.</p>
				<p>My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to defend those people who
					are in need of the help of experienced, reliable, and aggressive Criminal, DUI, and Personal Injury
					Lawyers.
				</p>
				<div class="button-area">
					<button>Start Your Free Consultation
					</button>
				</div>
			</div>
		</div>
	</section>
	<section class="law-section">

		<div class="low-area">
			<h3>MY RIGHTS LAW CRIMINAL, DUI, AND INJURY LAWYERS PROVIDES LEGAL REPRESENTATION THROUGHOUT SOUTHERN
				CALIFORNIA
			</h3>
			<ul class="accordion">
                <li>
                    <a class="toggle" href=#>San Bernardino County Cities & Suburbs</a>
					
                    <div class="inner">
                        <div class="city"> 
                            <ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
                            
                        </div>
                    </div> 
                </li>
				<li>
                    <a class="toggle" href=#>San Bernardino County Cities & Suburbs</a>
                    <div class="inner">
                        <div class="city"> 
                            <ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
                            
                        </div>
                    </div> 
                </li>
				<li>
                    <a class="toggle" href=#>San Bernardino County Cities & Suburbs</a>
                    <div class="inner">
                        <div class="city"> 
                            <ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
                            
                        </div>
                    </div> 
                </li>
				<li>
                    <a class="toggle" href=#>San Bernardino County Cities & Suburbs</a>
                    <div class="inner">
                        <div class="city"> 
                            <ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
                            
                        </div>
                    </div> 
                </li>
				<li>
                    <a class="toggle" href=#>San Bernardino County Cities & Suburbs</a>
                    <div class="inner">
                        <div class="city"> 
                            <ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
							<ul class="col"> 
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                <li><a href="#">Adelanto</a></li>
                                
                            </ul>
                            
                        </div>
                    </div> 
                </li>
				
                
				
                </ul>
			<div class="button-area">
				<button>Start Your Free Consultation
				</button>
			</div>

		</div>

	</section>



	<section class="last-section">
		<p class="content">My Rights Law’s founding attorney Bobby Shamuilian has dedicated his life to
			defend those people who areinneed of the help of experienced, reliable, and aggressive Criminal, DUI,
			and
			Personal Injury Lawyers.
		</p>
		<p class="heading-content">Bobby Shamuilian, Founding
			Attorney
		</p>
		<div class="button-area ">
			<button>Start Your Free Consultation
			</button>
		</div>
	</section>
	

<?php get_footer();
