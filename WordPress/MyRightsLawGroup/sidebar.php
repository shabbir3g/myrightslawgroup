<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyRightsLawGroup
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="blog-sidebar">
	<div class="sidebar-area"> 

		<?php dynamic_sidebar( 'blog-sidebar' ) ?>

	</div>
</div>