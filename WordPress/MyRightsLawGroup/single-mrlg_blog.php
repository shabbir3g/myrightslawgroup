<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MyRightsLawGroup
 */

get_header(); ?>

	
<div class="blog-area">

		<div class="single-blog-section">
			<div class="rotate-left">
				<div class="blog-content">
					<?php if(have_posts()):  
					while(have_posts()): the_post();?>
					<div class="blog">
                        <?php the_post_thumbnail(); ?>
						
						<br>
						<div class="caption"> <?php the_content(); ?></div>
					</div>
					<?php endwhile; endif; ?>
					
				</div>
				
			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

	

<?php get_footer();
