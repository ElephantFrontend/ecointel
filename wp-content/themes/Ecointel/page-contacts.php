<?php 
/*
Template Name: Контакты
*/
get_header() ?>
<?php  $image = get_field('header_image');?>
<div class="header_block" style="background-image: url('<?php echo $image[url]; ?>')">
		<h1><?php pll_e('title_contact'); ?></h1>
	</div>
<?php get_footer('contacts') ?>