
<?php 

$page_id     = get_queried_object_id();

$footer_section =  get_field('page_footer_section',$page_id);
$courts_title = $footer_section['pi_courts_title'];
$courts_items = $footer_section['pi_courts_items'];


if($courts_title){?>


<section class="courts-section">
	<div class="container"> 
		<h3><?php echo $courts_title; ?></h3>
	
		<div class="courts">
		<?php 
		foreach($courts_items as $item):  ?>
			<a href="<?php echo $item['pi_courts_item_link']['url']; ?>"><?php echo $item['pi_courts_item_link']['title']; ?>,</a>
			<?php endforeach; ?>	
		</div>
	</div>
</section>


<?php }else{ ?>






<?php $california_courts_title = get_field('california_courts_title','options'); 
	if( $california_courts_title): ?>
<section class="courts-section">
	<div class="container"> 
		<h3><?php echo $california_courts_title; ?></h3>
	
		<div class="courts">
		<?php $items = get_field('california_courts_items','options'); 
		if( $items):
		foreach($items as $item):  ?>
			<a href="<?php echo $item['california_courts_item_link']['url']; ?>"><?php echo $item['california_courts_item_link']['title']; ?>,</a>
			<?php endforeach; endif; ?>	
		</div>
	</div>
</section>
<?php endif; }?>	