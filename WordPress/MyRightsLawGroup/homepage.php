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
	<?php $home_banner = get_field('home_banner'); 
	if( $home_banner == 'show'): ?>
	<?php $hero_section =  get_field('hero_section'); 
                ?>
	<section class="banner-area" style="background-image: url(<?php echo $hero_section['hero_image']; ?>);">
		<div class="banner-content container" 

		style="justify-content: 
			<?php $align = $hero_section['content_position'];
			if($align == 'left'){   ?>
			flex-start;
			<?php }elseif($align == 'center'){ ?>
				center;
				text-align: center;
			<?php }elseif($align == 'right'){ ?>
				flex-end;
			<?php }  ?>"
		
		>
			<div class="banner-text">
				<?php $hero_title  = $hero_section['hero_title'];
                if($hero_title): ?>
				<h1><?php  echo $hero_title; ?></h1>
				<?php endif; ?>
				<?php $hero_subtitle  = $hero_section['hero_subtitle'];
                if($hero_subtitle): ?>
				<p><?php  echo $hero_subtitle; ?></p>
				<?php endif; ?>

				<?php $hero_button_url  = $hero_section['hero_button_url'];
                if($hero_button_url): ?>
				<div class="contact-button">
					<a class="btn-primary" href="<?php  echo $hero_button_url; ?>">Start Your Free Consultation</a>
				</div>
				<?php endif; ?>
			</div>
		</div>

	</section>
	<?php endif; ?>


	<!-- Featured Logo Section  -->
	<?php $home_featured_logo = get_field('home_featured_logo'); 
	if( $home_featured_logo == 'show'): ?>
	<?php get_template_part('template-parts/featured-logo') ?>
	<?php endif; ?>


	<?php $home_google_reviews = get_field('home_google_reviews'); 
	if( $home_google_reviews == 'show'): ?>
	<?php get_template_part('template-parts/google-reviews') ?>
	<?php endif; ?>



	<!-- in a media Section  -->
	<?php $media_title = get_field('media_title'); 
	if( $media_title): ?>
	<section class="media-section">
		<div class="container">
		<div class="media-heading">
			<h2><?php echo $media_title; ?></h2>
		</div>
		<div class="owl-carousel owl-theme">

		<?php $media_videos = get_field('media_videos'); 
		if( $media_videos):
		foreach($media_videos as $video):  ?>
			<div class="item-video" data-merge="1">
			<a class="owl-video" href="<?php echo  $video['video']; ?>"></a>
				
			</div>
		<?php endforeach; endif; ?>	


		</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- Awards Logo Section  -->
	<?php $awards_title = get_field('awards_title'); 
	if( $awards_title): ?>
	<section class="awards-section">
		<div class="container">
		<div class="awards-heading">
			<h2><?php echo $awards_title; ?></h2>
		</div>
		<div class="awards">

		<?php $awards_images = get_field('awards_images'); 
		if( $awards_images):
		foreach($awards_images as $image):  ?>
			<article class="awards-logo">
				<img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['title']; ?>">
			</article>
			<?php endforeach; endif; ?>	


		</div>
		</div>
	</section>
	<?php endif; ?>


	
	<section class="middle-content">
		<div class="container">
		<?php $defense_title = get_field('defense_title'); 
		if( $defense_title): ?>
		<div class="injury-area">
			<h2><?php echo  $defense_title; ?></h2>
			<div class="devider">
				<hr>
			</div>
			<?php $defense_subtitle = get_field('defense_subtitle'); 
			if( $defense_subtitle): ?>
			<div class="injury-header">
				<h3><?php echo $defense_subtitle; ?></h3>
			</div>
			<?php endif; ?>
			<?php $defense_content = get_field('defense_content'); 
			if( $defense_content): ?>
				<div class="injury-conent">
						<?php echo  $defense_content; ?>
				
				</div>
			<?php endif; ?>
		</div>

		<?php endif; ?>

		<?php $injury_title = get_field('injury_title'); 
			if( $injury_title): ?>
		<div class="attorneys-section">
			<div class="attorney-header">
				<h2><?php echo $injury_title; ?></h2>
			</div>
			<div class="attorney">

				<?php $injury_cases = get_field('injury_cases'); 
				if( $injury_cases):
				foreach($injury_cases as $cases):  ?>
				<article class="attrney-image">
					<a href="<?php echo $cases['case_link']; ?>">
						<img src="<?php echo $cases['case_image']['url']; ?>" alt="<?php echo $cases['case_image']['title']; ?>">
						<div class="attrney-caption"> 
							<h2><?php echo $cases['case_title']; ?></h2>
						</div>
					</a>
				</article>
				<?php endforeach; endif; ?>	
				
			</div>
		</div>
		<?php endif; ?>
	</div>
	</section>

	<?php $practice_area = get_field('practice_area'); 
		if( $practice_area): 
		foreach($practice_area as $practice):  ?>
	<section class="middle-content">
		<div class="container">
		<div class="injury-area">
			<div class="injury-header">
				<h3><?php echo $practice['section_title']; ?></h3>
			</div>
			<div class="injury-conent">
				<?php echo $practice['section_content']; ?>
			</div>
		</div>
		
		<div class="case-area">
			<div class="case-header">
				<h3><?php echo $practice['practice_title'] ?></h3>
			</div>
			<div class="btn-group">
				<?php $practice_items =  $practice['practice_items']; 
				if($practice_items): 
				foreach($practice_items as $items):  ?>
					<a class="btn-secondary" href="<?php echo $items['practice_item']['url']; ?>"><?php echo $items['practice_item']['title']; ?></a>
				<?php endforeach; endif; ?>	


			</div>
			
		</div> 
		


		<div class="view-all">
			<a href="<?php echo $practice['view_all_link']['url']; ?>"><?php echo $practice['view_all_link']['title']; ?></a>
		</div>
		</div>
	</section>
	<?php endforeach; endif; ?>	


	<?php $consultation_title = get_field('consultation_title'); 
			if($consultation_title): ?>
	<section class="middle-content">
		<div class="container">
		<div class="injury-area">
			<div class="injury-header">
				<h3><?php echo $consultation_title; ?></h3>
			</div>
			<div class="injury-conent">
				<?php $consultation_content = get_field('consultation_content'); 
				if($consultation_content): ?>
				<?php echo $consultation_content; ?>
				<?php endif; ?>	

				<?php $consultation_link = get_field('consultation_link'); 
				if($consultation_link): ?>
				<div class="contact-button">
					<a class="btn-primary" href="<?php echo $consultation_link['url']; ?>"><?php echo $consultation_link['title']; ?></a>
				</div>
				<?php endif; ?>	

			</div>
		</div>
		</div>
	</section>
	<?php endif; ?>	

	<?php $home_video = get_field('home_video'); 
		if($home_video): ?>
	<section class="single-video"> 
		<div class="container"> 
			<div class="video-container"> 
				<?php echo $home_video; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>	

	<?php $members_title = get_field('attorneys_members_title'); 
		if($members_title): ?>
	<section class="attorneys-members"> 
		<div class="container">
		<div class="attorneys-section">
			<div class="attorney-header">
				<h2><?php echo $members_title; ?></h2>
			</div>
			<div class="attorney">

				<?php $attorneys_members = get_field('attorneys_members'); 
				if( $attorneys_members): 
				foreach($attorneys_members as $members):  ?>
				<article>
					<img src="<?php echo $members['member_image']['url']; ?>" alt="<?php echo $members['member_image']['title']; ?>">
					<p><?php echo $members['member_name']; ?></p>
					<a href="<?php echo $members['member_link']['url']; ?>"><?php echo $members['member_link']['title']; ?></a>
				</article>
				<?php endforeach; endif; ?>	
				
			</div>
		</div>
		</div>
	</section>
	<?php endif; ?>	

	<?php $legal_title = get_field('legal_representation_title'); 
		if($legal_title): ?>
	<section class="law-section">
		<div class="container">
		<div class="low-area">
			<h3><?php echo $legal_title; ?></h3>
			<ul class="accordion">

				<?php $legal_representation_tab = get_field('legal_representation_tab'); 
				if( $legal_representation_tab): 
				foreach($legal_representation_tab as $legal_representation):  ?>


				<?php $representation_title = $legal_representation['representation_title'];
			 	if($representation_title):  ?>
                <li>
                    <a class="toggle" href=#><?php echo $representation_title; ?></a>
					
                    <div class="inner">
                        <div class="city"> 
                            <ul class="col"> 
							<?php $representation_links = $legal_representation['representation_links']; 
							if($representation_links):
							foreach($representation_links as $fliknk):   ?>
                                <li><a href="<?php echo $fliknk['first_column_link']['url']; ?>"><?php echo $fliknk['first_column_link']['title']; ?></a></li>
							<?php endforeach; endif; ?>	
                            </ul>


							<ul class="col"> 
							<?php $representation_links = $legal_representation['representation_links']; 
							if($representation_links):
							foreach($representation_links as $sliknk):   ?>
                               <li><a href="<?php echo $sliknk['second_column_link']['url']; ?>"><?php echo $sliknk['second_column_link']['title']; ?></a></li>
							<?php endforeach; endif; ?>	


                            </ul>

							<ul class="col"> 
							<?php $representation_links = $legal_representation['representation_links']; 
							if($representation_links):
							foreach($representation_links as $tliknk):   ?>
                               <li><a href="<?php echo $tliknk['third_column_link']['url']; ?>"><?php echo $tliknk['third_column_link']['title']; ?></a></li>
							<?php endforeach; endif; ?>	


                            </ul>
                            
                        </div>
                    </div> 
                </li>
				<?php  endif; ?>	

				<?php endforeach; endif; ?>	
				
				
                
				
                </ul>
			<div class="contact-button">
				<?php $legal_representation_link = get_field('legal_representation_link'); 
				if($legal_representation_link): ?>
				<a class="btn-primary" href="<?php echo $legal_representation_link['url']; ?>"><?php echo $legal_representation_link['title']; ?></a>
				<?php endif; ?>	
			</div>

		</div>
		</div>
	</section>
	<?php endif; ?>	


	<?php $cta_content = get_field('cta_content'); 
		if($cta_content): ?>
	<section class="last-section">
	<div class="container">
		<div class="content">
			<?php echo $cta_content; ?>
		</div>
		<?php $cta_title = get_field('cta_title'); 
		if($cta_title): ?>
		<h3 class="heading-content"><?php echo $cta_title; ?></h3>
		<?php endif; ?>	

		<?php $cta_link = get_field('cta_link'); 
		if($cta_link): ?>
		<div class="contact-button">
			<a class="btn-primary" href="<?php echo $cta_link['url']; ?>"><?php echo $cta_link['title']; ?>
			</a>
		</div>
		<?php endif; ?>	

		</div>
	</section>
	<?php endif; ?>	

<?php get_footer();
