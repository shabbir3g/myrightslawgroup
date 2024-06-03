<?php
/**
 * Template Name: Full Width
 *
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

	<?php get_template_part('template-parts/featured-logo') ?>

    <?php $visibility = get_field('reviews'); 

	if( $visibility['google_review_visibility'] == 'show'): ?>

   <?php get_template_part('template-parts/google-reviews') ?>
   
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
					<?php $featured_image = get_field('second_featured_image');
					
					if($featured_image): ?>

					<img src="<?php echo $featured_image; ?>" alt="">
					<?php else: 
					 the_post_thumbnail(); 
					 endif; ?>
                        <h4><?php the_title(); ?></h4>
                    </div>
                </div>
                <?php endwhile; ?>

                
			</div>
		</div>
	</section>

	<section class="full-width-section">
		<div class="full-container">
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
        
       
       
		
	</section>


	<?php get_template_part('template-parts/page-contact-btn') ?>

	<?php get_template_part('template-parts/page-courts') ?>

<?php get_footer();
