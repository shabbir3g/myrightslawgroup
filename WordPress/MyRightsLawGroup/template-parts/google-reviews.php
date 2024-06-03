<?php $google_reviews = get_field('google_reviews','options'); 
			if( $google_reviews): ?>
    <section class="google-reviews">
        <div class="container">
            <?php echo do_shortcode($google_reviews) ?>
        </div>
    </section>
<?php endif; ?>