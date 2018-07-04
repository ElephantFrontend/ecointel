<?php 
/*
Template Name: Переработка
*/
get_header() ?>
<!-- header_block -->
<?php  $image = get_field('header_image');?>
<div class="header_block" style="background-image: url('<?php echo $image[url]; ?>')">
	<h1><?php pll_e('title_recycling'); ?></h1>
</div>
<div class="wrapper wrapper_recycling">
	
	<?php if ( get_field('text_block_1') ) {?>
                <?php the_field('text_block_1'); ?>
                    <?php } else { ?>
                <p></p>
	<?php } ?>

<!-- three_blocks-->
	<div class="three_block_wrapper">
		<div class="three_block">
		<!--  -->
		
		<!--  -->
			<?php  the_field('three_blocks_title1');?>
			<?php  the_field('three_blocks_text1'); ?>
		</div>
 		<div class="three_block">
 			<?php  the_field('three_blocks_title2');?>
			<?php the_field('three_blocks_text2'); ?>
 		</div>
 		<div class="three_block">
 			<?php  the_field('three_blocks_title3');?>
			<?php the_field('three_blocks_text3'); ?>
 		</div>
	</div>
	<!--  -->
	<?php if ( get_field('text_block_2') ) {?>
                <?php the_field('text_block_2'); ?>
                    <?php } else { ?>
                <p></p>
	<?php } ?>
	<!--  -->
		
		<div class="after_clear">
		<?php  $image = get_field('text_block_img_3');?>
			<img class="img_float_right"  src="<?php echo $image[url] ?>" alt="">
		<!--  -->
	<?php if ( get_field('text_block_3') ) {?>
                <?php the_field('text_block_3'); ?>
                    <?php } else { ?>
                <p></p>
	<?php } ?>

	<!--  -->
		
			</div>

	<!--  -->
	<!--  -->
	<div class="quote_text">
	<?php if ( get_field('quote1') ) {?>
                <?php the_field('quote1'); ?>
                    <?php } else { ?>
                <p></p>
	<?php } ?>
	</div>
	<?php if ( get_field('text_block4') ) {?>
                <?php the_field('text_block4'); ?>
                    <?php } else { ?>
                <p></p>
	<?php } ?>
	<!--  -->
	<div class="after_clear">
		<?php  $image = get_field('text_block_img5');?>
			<img class="img_float_left"  src="<?php echo $image[url] ?>" alt="">
		<!--  -->
	<?php if ( get_field('text_block5') ) {?>
                <?php the_field('text_block5'); ?>
                    <?php } else { ?>
                <p></p>
	<?php } ?>
	</div>
	<?php if ( get_field('text_block6') ) {?>
                <?php the_field('text_block6'); ?>
                    <?php } else { ?>
                <p></p>
	<?php } ?>

	<!--  -->

	<div class="quote_text">
	<?php if ( get_field('quote2') ) {?>
                <?php the_field('quote2'); ?>
                    <?php } else { ?>
                <p></p>
	<?php } ?>
	</div>
 <!-- two_blocks -->
	 <div class="two_block_wrapper">
		 <div class="two_block">
		 	<?php the_field('two_blocks_title1'); ?>
		 	<?php the_field('two_blocks_text1'); ?>
		 </div>
		 <div class="two_block">
		 	<?php the_field('two_blocks_title2'); ?>
		 	<?php the_field('two_blocks_text2'); ?>
		 </div>
	 </div>
</div>
<?php get_footer('contacts') ?>