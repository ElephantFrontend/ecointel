<?php 
/*
Template Name: О нас
*/
get_header() ?>
<?php  $image = get_field('header_image');?>
<div class="header_block" style="background-image: url('<?php echo $image[url]; ?>')">
		<h1><?php pll_e('title_about'); ?></h1>
	</div>

<!-- О нас -->
	 <section class="about_us">
	 	<h2 class="text_upper"><?php pll_e('title_about'); ?></h2>
		<p class="deskription_block"><?php the_field('about_caption'); ?></p>
		<div class="about_us_wrapper">
			<div class="about_us_block">
				<?php  $image = get_field('about_block_img1');?>
				<img src="<?php echo $image['url']; ?>" alt="">
				<h3><?php the_field('about_block_title1'); ?></h3>
				<?php the_field('about_block_content1'); ?>
			</div>
			<div class="about_us_block">
				<?php  $image = get_field('about_block_img2');?>
				<img src="<?php echo $image['url']; ?>" alt="">
				<h3><?php the_field('about_block_title2'); ?></h3>
				<?php the_field('about_block_content2'); ?>
			</div>
			<div class="about_us_block">
				<?php  $image = get_field('about_block_img3');?>
				<img src="<?php echo $image['url']; ?>" alt="">
				<h3><?php the_field('about_block_title3'); ?></h3>
				<?php the_field('about_block_content3'); ?>
			</div>
		</div>
	 </section>

<!-- license -->
	<section class="license">
		<p class="license_title"><?php the_field('license_title'); ?></p>
		<p class="license_caption"><?php the_field('license_caption'); ?></p>
		<?php  $image = get_field('license_img');?>
		<img class="license_img" src="<?php echo $image[url]; ?>" alt="">
	</section>

<!-- Partners -->
	<section class="partners">
		<h2 class="text_upper"><?php pll_e('title_partners'); ?></h2>
		<p class="deskription_block big_deskription_block"><?php the_field('partners_caption'); ?></p>
		<div class="wrapper wrapper_partners">
			<div class="autoplay">
				<!--  -->
					<?php
    $images = acf_photo_gallery('paretners_logo', $post->ID);
    if( count($images) ):
        foreach($images as $image):
            $id = $image['id'];
            $title = $image['title']; 
            $caption= $image['caption'];
            $full_image_url= $image['full_image_url']; 
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); 
            $thumbnail_image_url= $image['thumbnail_image_url']; 
            $url= $image['url']; 
            $target= $image['target']; 
            $alt = get_field('photo_gallery_alt', $id); 
            $class = get_field('photo_gallery_class', $id);
?>

        <?php if( !empty($url) ){ ?> <?php } ?>
            <div class=""><img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"> </div>
        <?php if( !empty($url) ){ ?></a><?php } ?>
<?php endforeach; endif; ?>
				
			</div>
		</div>
	</section>
<!-- Parallax block -->
<?php  $parallax = get_field('parallax');?>
	<div class="parallax" style='background-image: url("<?php echo $parallax[url]; ?>");'></div>

<?php get_footer('contacts') ?>