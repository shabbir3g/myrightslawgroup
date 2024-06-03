<?php
/**
 * Template Name: Attorney Single Profiles
 *
 * @package mrlg
 */

get_header();
?>
<section class="member-contact-info">
        <div class="container"> 
            <div class="row"> 
            <div class="image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="info">
            <h1><?php the_title(); ?></h1>
            <?php $member_details = get_field('member_details');
            $job_title = $member_details['job_title']; 
            if($job_title): ?>
            <h2><?php echo $job_title; ?></h2>
            <?php endif; ?>
         
            <div class="menu">
                    <ul>
                    <?php $member_phone = $member_details['member_phone']; 
                    if($member_phone): ?>
                    <li><a href="tel:<?php echo $member_phone; ?>"><?php echo $member_phone; ?></a></li>
                    <?php endif; ?>

                    <?php $member_email = $member_details['member_email']; 
                    if($member_email): ?>
                    <li><a href="mailto:<?php echo $member_email; ?>">Email</a></li>
                    <?php endif; ?>

                    <?php $member_martindale = $member_details['member_martindale']; 
                    if($member_martindale): ?>
                    <li><a href="<?php echo $member_martindale; ?>">Martindale</a></li>
                    <?php endif; ?>

                    <?php $member_avvo = $member_details['member_avvo']; 
                    if($member_avvo): ?>
                    <li><a href="<?php echo $member_avvo; ?>">Avvo</a></li>
                    <?php endif; ?>

                    <?php $linkedin = $member_details['linkedin']; 
                    if($linkedin): ?>
                    <li><a href="<?php echo $linkedin; ?>">LinkedIn</a></li>
                    <?php endif; ?>


                </ul>
            </div>
        </div>
            </div>
        </div>
</section>

    <section class="content">
       <div class="container"> 
       <div class="text">
            <div class="info">
                <?php the_content(); ?>
            </div>
            
            <div class="click">
                <a href="#">our team</a>
            </div>
        </div>
       </div>
    </section>
    <section class="court-area">
       <div class="container"> 
       <div class="court-serve">
            <div class="court-heading">
                <h3>california courts we serve</h3>
            </div>
            <div class="courts">
                <a href="#">Alhambra,</a>
                <a href="#">Alhambra,</a>
                <a href="#">Alhambra,</a>
                <a href="#">Alhambra,</a>
                <a href="#">Alhambra,</a>
                <a href="#">Alhambra,</a>
                <a href="#">Alhambra,</a>
            </div>
        </div>

       </div>
    </section>

<?php
get_footer();
