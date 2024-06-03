

<?php 

$page_id     = get_queried_object_id();

$footer_section =  get_field('page_footer_section',$page_id);
$contact_btn = $footer_section['pi_contact_button'];

	?>


<?php if($contact_btn){  ?>
    <section class="free-coun">
    <div class="contact-button">
        <a class="btn-primary" href="<?php echo $contact_btn['url']; ?>"><?php echo $contact_btn['title']; ?></a>
    </div>
</section>
<?php }else{  ?>


<?php $page_contact_button = get_field('page_contact_button','options'); 
	if( $page_contact_button): ?>

<section class="free-coun">
    <div class="contact-button">
        <a class="btn-primary" href="<?php echo $page_contact_button['url'] ?>"><?php echo $page_contact_button['title'] ?></a>
    </div>
</section>
<?php endif; } ?>	