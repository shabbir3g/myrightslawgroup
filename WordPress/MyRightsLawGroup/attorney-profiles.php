<?php
/**
 * Template Name: Attorney Profiles
 *
 * @package mrlg
 */

get_header();
?>
    <section class="introduce">
        <div class="team">
        <?php $team_section_title = get_field('team_section_title');
            if($team_section_title): ?>
            <h1><?php echo $team_section_title; ?></h1>
            <?php endif; ?>
        </div>
        <div class="devider">
            <hr>
        </div>
    </section>

   <section class="attorney-members">
        <div class="container">
        <?php $attorney_member = get_field('attorney_details_member');
            if($attorney_member): 
            foreach($attorney_member as $member): ?>
        <article class="attorny-profile-info" style="background-color: <?php echo $member['team_section_background']; ?>;">
            <div class="image">
                <img src="<?php echo $member['attorney_image']['url']; ?>" alt="<?php echo $member['attorney_image']['title']; ?>">
            </div>
            <div class="info">
                <h2><?php echo $member['attorney_name']; ?></h2>
                <span><?php echo $member['job_title']; ?></span>
                <p><?php echo $member['attorney_bio']; ?>
                </p>
                <a href="<?php echo $member['view_bio_link']; ?>"><?php echo $member['read_more_button_text']; ?></a>
            </div>
        </article>
        <?php endforeach; endif; ?>
        </div>
   </section>

    
    <section class="ready-team">
        <div class="court-serve">
            <div class="court-heading">
                <h3>Our experienced team is ready to go to bat for you.</h3>
            </div>
            <div class="call">
                <span>Call us now!</span><a href="#">(888) 702-8882</a>
            </div>
        </div>
    </section>

<?php
get_footer();
