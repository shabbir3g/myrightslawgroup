<?php
/**
 * Template Name: Attorney Single Profiles
 *
 * @package mrlg
 */

get_header();
?>

<main id="primary" class="site-main">
    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </header><!-- .page-header -->

    <?php
    // Start the loop.
    while ( have_posts() ) :
        the_post();
        ?>
        <div class="page-content">
            <?php the_content(); ?>
        </div><!-- .page-content -->
    <?php endwhile; // End of the loop. ?>

    <div class="attorney-profiles">
        <?php
        // Define custom query parameters
        $args = array(
            'post_type' => 'attorney', // Assuming 'attorney' is the custom post type
            'posts_per_page' => -1,    // Show all attorneys
        );

        // Custom query.
        $attorney_query = new WP_Query( $args );

        // Check if the custom query has posts.
        if ( $attorney_query->have_posts() ) :
            // Loop through the posts.
            while ( $attorney_query->have_posts() ) : $attorney_query->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'thumbnail' );
                        }
                        the_excerpt();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'your-theme-textdomain' ); ?></a>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            endwhile;
        else :
            ?>
            <p><?php esc_html_e( 'No attorney profiles found.', 'your-theme-textdomain' ); ?></p>
            <?php
        endif;

        // Restore original Post Data
        wp_reset_postdata();
        ?>
    </div><!-- .attorney-profiles -->
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
