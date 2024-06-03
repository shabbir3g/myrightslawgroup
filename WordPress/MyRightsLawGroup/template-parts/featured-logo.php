<section class="featured-section">
	<div class="container"> 
		<div class="logo-area">
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
		</div>
	</div>
</section>