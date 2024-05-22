<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyRightsLawGroup
 */

get_header(); ?>

<!-- Banner Area Section  -->
<?php $hero_section =  get_field('hero_section'); 
                ?>
<section class="defence-banner-area" style="background-image: url(<?php echo $hero_section['hero_image']; ?>);">
		<div class="defence-banner-content">
   
			<div class="defence-banner-text" style="text-align: <?php echo $hero_section['content_position'];  ?>;">

                <?php $hero_tagline  = $hero_section['hero_tagline'];
                if($hero_tagline): ?>
                    <h1><?php  echo $hero_tagline; ?></h1>
                <?php endif; ?>

                <?php $hero_title  = $hero_section['hero_title'];
                if($hero_title): ?>
				<h2><?php  echo $hero_title; ?></h2>
                <?php endif; ?>

                <?php $hero_subtitle  = $hero_section['hero_subtitle'];
                if($hero_subtitle): ?>
				<p><?php  echo $hero_subtitle; ?></p>
                <?php endif; ?>

                <?php $hero_button_url  = $hero_section['hero_button_url'];
                if($hero_button_url): ?>
				<a href="<?php  echo $hero_button_url; ?>">Start Your Free Consultation</a>
                <?php endif; ?>
			</div>
		</div>

	</section>
	<!-- Featured Logo Section  -->
	<section class="featured-section">
    <?php $feature_title = get_field('feature_title','options'); 
			if( $feature_title): ?>
		<div class="sub-company">
			<p><?php echo $feature_title; ?></p>
		</div>
        <?php endif; ?>
        
        <?php $feature_logo = get_field('feature_logo','options'); 
			if( $feature_logo):
            foreach($feature_logo as $logo):  ?>
		<div class="logo">
			<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>">
		</div>
        <?php endforeach; endif; ?>
	</section>

    <?php $visibility = get_field('reviews'); 

	if( $visibility['google_review_visibility'] == 'show'): ?>
      
    <?php $google_reviews = get_field('google_reviews','options'); 
			if( $google_reviews): ?>
    <section class="google-reviews">
        <?php echo do_shortcode($google_reviews) ?>
    </section>
    <?php endif; ?>
    <?php endif; ?>
   
	
	

	<!-- in a media Section  -->
	<section class="crime-charge-section">
		<div class="case-area">
			<div class="charges-heading">
				<h3>In The Media</h3>
			</div>
			<div class="charge-boxes owl-carousel">

                <?php 
				$post_slider_category = get_field('post_slider_category'); 

				$cat_id = $post_slider_category['post_slider_cat_id']; 
                
                $practice = new WP_Query([
                    'post_type'     => 'practice-sub-page',
                    'posts_per_page'=> -1,
                    'tax_query' => [
						[
							'taxonomy' => 'subpage_category',
							'field'    => 'id',
							'terms'    => $cat_id,
						],
					],
				]);
                
                while($practice->have_posts()): $practice->the_post(); ?>
				<div>
                    <div class="charge">
					<?php $featured_image = get_field('second_featured_image'); ?>
					
					
						<?php the_post_thumbnail(); ?>
                        <h4><?php the_title(); ?></h4>
                    </div>
                </div>
                <?php endwhile; ?>

                
			</div>
		</div>
	</section>

	<section class="califoria-criminal-defence">
		<div class="left-area">
			<div class="lawyers">
				<div class="breadcrumb"> 
                    <a href="<?php echo home_url(); ?>">Home</a> <span> » <?php single_post_title(); ?></span>
                </div>
				
                <div class="content-box"> 
                    <h2><?php the_title(); ?></h2>
                    <div class="devider">
                        <hr>
                    </div>
                    <?php the_content(); ?>

                    <h2>FREQUENTLY ASKED QUESTIONS</h2>
                    <?php $faqs_content =  get_field('faqs_content'); echo  $faqs_content; ?>

                </div>
			</div>
		</div>
        
        <?php get_sidebar(); ?>
       
		
	</section>

	<div class="free-coun">
		<a href="">start your <span>free</span> counsultation</a>
	</div>

	<section class="courts-section">
		<h3>California courts er serve</h3>
		<div class="courts">
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
			<a href="">Alhambra,</a>
		</div>
	</section>

<?php get_footer();
