<?php 
/*
Template Name: Утилизация
*/
get_header() ?>
<!-- header_block -->
<?php  $image = get_field('header_image');?>
<div class="header_block" style="background-image: url('<?php echo $image[url]; ?>')">
	<h1><?php pll_e('title_utilization'); ?></h1>
</div>
<div class="wrapper utilization_wrapper">
<!-- Способы утилизации -->
<!--  -->

<!--  -->
<?php if ( get_field('text_block_1') ) {?>
                <?php the_field('text_block_1'); ?>
                    <?php } else { ?>
                <p></p>
<?php } ?>
</div>
<div class="wrapper">
<div class="block_animation_wrapper">
	<div class="block_animation_text">
		<div class="block_animation_title">
			<p><?php the_field('info_block_title1'); ?></p>
		</div>
		<?php  $image = get_field('info_block_img1');?>
		<div class="block_animation_img" style="background: url('<?php echo $image[url]; ?>');">
			
		</div>
			<div class="block_animation_content">
				<p><?php the_field('info_block_text1'); ?></p>
			</div>
	</div>
	<div class="block_animation_text">
		<div class="block_animation_title">
			<p><?php the_field('info_block_title2'); ?></p>
		</div>
		<?php  $image = get_field('info_block_img2');?>
		<div class="block_animation_img" style="background: url('<?php echo $image[url]; ?>');">
			
		</div>
			<div class="block_animation_content">
				<p><?php the_field('info_block_text2'); ?></p>
			</div>
	</div>
	<div class="block_animation_text">
		<div class="block_animation_title">
			<p><?php the_field('info_block_title3'); ?></p>
		</div>
		<?php  $image = get_field('info_block_img3');?>
		<div class="block_animation_img" style="background: url('<?php echo $image[url]; ?>');">
			
		</div>
			<div class="block_animation_content">
				<p><?php the_field('info_block_text3'); ?></p>
			</div>
	</div>
	<div class="block_animation_text">
		<div class="block_animation_title">
			<p><?php the_field('info_block_title4'); ?></p>
		</div>
		<?php  $image = get_field('info_block_img4');?>
		<div class="block_animation_img" style="background: url('<?php echo $image[url]; ?>');">
			
		</div>
			<div class="block_animation_content">
				<p><?php the_field('info_block_text4'); ?></p>
			</div>
	</div>
</div>
<!--  -->
<!--  -->
<?php if ( get_field('text_block_2') ) {?>
                <?php the_field('text_block_2'); ?>
                    <?php } else { ?>
                <p></p>
<?php } ?>
</div>
<!-- infographic -->
<div class="infographic">
<?php  $image = get_field('infographic');?>
	<img src="<?php echo $image[url]?>" alt="">
</div>
<div class="wrapper utilization_wrapper">
<!--  -->

<!--  -->
<?php if ( get_field('text_block_3') ) {?>
                <?php the_field('text_block_3'); ?>
                    <?php } else { ?>
                <p></p>
<?php } ?>
</div>
<!-- collage -->
<img class="collage" src="<?php bloginfo('template_url'); ?>/src/img/util/photos-utilization.jpg" alt="">

<?php get_footer('contacts') ?>