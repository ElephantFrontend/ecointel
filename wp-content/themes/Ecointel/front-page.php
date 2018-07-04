<?php get_header(); ?>

<!-- header_slider -->
		<div class="header_slider">
			<div class="header_slider_block">
			<?php  $slide1 = get_field('slider1');?>
				<img src="<?php echo $slide1[url];?>" alt="">
				<div class="header_slider_content">
					<p class="header_slider_title"><?php the_field('slider1_title'); ?></p>
					<p><?php the_field('slider1_content'); ?></p>
				</div>
			</div>
			<div class="header_slider_block">
			<?php  $slide2 = get_field('slider2');?>
				<img src="<?php echo $slide2[url]; ?>" alt="">
				<div class="header_slider_content">
					<p class="header_slider_title"><?php the_field('slider2_title'); ?></p>
					<p><?php the_field('slider2_content'); ?></p>
				</div>
			</div>
			<div class="header_slider_block">
			<?php  $slide3 = get_field('slider3');?>
				<img src="<?php echo $slide3[url]; ?>" alt="">
				<div class="header_slider_content">
					<p class="header_slider_title"><?php the_field('slider3_title'); ?></p>
					<p><?php the_field('slider3_content'); ?></p>
				</div>
			</div>
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

<!-- Services -->
	<section class="services">
		<h2 class="text_upper"><?php pll_e('title_services'); ?></h2>
		<p class="deskription_block"><?php the_field('services_caption'); ?></p>
		<div class="services_wrapper wrapper">
		<?php  $service_img1 = get_field('service_img1');?>
			<div class="services_block" style="background-image: url('<?php echo $service_img1[url]; ?>');">
				<div class="services_block_text">
					<h4 class="services_block_text_title"><?php the_field('service_title1'); ?></h4>
					<p class="services_block_text_content"><?php the_field('service_text1'); ?></p>
					<a class="button_link_borders" href="<?php the_field('service_link1'); ?>"><?php pll_e('button_services'); ?></a>
				</div>
			</div>
			<?php  $service_img2 = get_field('service_img2');?>
			<div class="services_block" style="background-image: url('<?php echo $service_img2[url]; ?>');">
				<div class="services_block_text">
					<h4 class="services_block_text_title"><?php the_field('service_title2'); ?></h4>
					<p class="services_block_text_content"><?php the_field('service_text2'); ?></p>
					<a class="button_link_borders" href="<?php the_field('service_link2'); ?>"><?php pll_e('button_services'); ?></a>
				</div>
			</div>
		</div>
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
<!-- News -->
	<div class="news">
	<h2 class="text_black text_upper"><?php pll_e('title_news'); ?></h2>
	<div class="news_wrapper wrapper">
		
		<?php $posts = get_posts ("category=39"); ?>  
           <?php if ($posts) : ?>
            <?php foreach ($posts as $post) : setup_postdata ($post); ?>
							<div class="news_block_big">
								<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
								<div class="news_block_big_img" style="background-image: url(<?php  echo $image_url[0];?>);"></div>
								<div class="news_block_big_text">
									<p class="news_block_big_title"><?php  the_title(); ?></p>
									<p>Autor: <b>Lorem ipsum</b></p>
									<p><b><?php echo get_the_date('m.d.y'); ?></b></p>
									<p class="news_block_big_content"><span><?php the_truncated_post(300); ?></p>
									<span class="button_link_wrapper news_block_big_link"><a class="button_link" href="<?php the_permalink(); ?>"><?php pll_e('button_personal_news'); ?></a></span>
								</div>
							</div>
					  <?php 
                   endforeach;
                   wp_reset_postdata();
                   ?>
                   <?php endif; ?>
		<hr class="hr">
		
				<?php $posts = get_posts ("category=18"); ?>  
           <?php if ($posts) : ?>
            <?php foreach ($posts as $post) : setup_postdata ($post); ?>
						  <div class="news_block">
								<a href="<?php the_permalink(); ?>">
									<h3 class="text_upper"><?php  trim_title_words(5, ''); ?></h3>
									<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
									<div class="news_block_img" style="background-image: url(<?php  echo $image_url[0];?>);">
										<div class="news_block_time"><p><?php echo get_the_date('m.d.y'); ?></p></div>
									</div>
									<p class="news_block_anons"><?php the_truncated_post(300); ?></p>
								</a>
							</div>
					   <?php 
                   endforeach;
                   wp_reset_postdata();
                   ?>
                   <?php endif; ?>
		</div>
		<span class="button_link_wrapper"><a class="button_link" href="#"><?php pll_e('button_news'); ?></a></span>
		
	</div>
<?php get_footer('contacts') ?>