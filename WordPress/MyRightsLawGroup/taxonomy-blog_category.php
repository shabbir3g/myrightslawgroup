<?php
/**
 * The main template file
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

	<div class="blog-area">

		<div class="blog-section ">
			<div class="rotate-left">
				<h1><?php single_post_title(); ?></h1>
				<div class="blog-content">
					<?php if(have_posts()):  
					while(have_posts()): the_post();?>
					<div class="blog">
						<h2><?php the_title(); ?></h2>
						<span>Published On: <?php the_date('M j, Y') ?>|Categories: <?php the_category(); ?></span> <br>
						<p class="caption"> <?php echo wp_trim_words(get_the_content(), 65, false); ?></p><br><br>
						<a class="readmore" href="<?php the_permalink(); ?>">READ MORE</a>
					</div>
					<?php endwhile; endif; ?>
					
				</div>
				<div class="next-page">
				<?php the_posts_pagination(array(
					'screen_reader_text'	=> ' ',
					'prev_text'	=> '<span >PREV <i class="fa-solid fa-greater-than"></i></span>',
					'next_text'	=> '<span>NEXT <i class="fa-solid fa-greater-than"></i></span>',
				)); ?>
					<!-- <a class="current" href="#">1</a>
					<a href="#">2</a>
					<a href="#">NEXT <i class="fa-solid fa-greater-than"></i></a> -->
				</div>
			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

	

<?php get_footer();
