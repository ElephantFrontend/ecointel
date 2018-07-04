<?php 
/*
Template Name: Новости
*/
get_header() ?>
<?php  $image = get_field('header_image');?>
<div class="header_block" style="background-image: url('<?php echo $image[url]; ?>')">
		<h1><?php pll_e('title_news'); ?></h1>
</div>
<!-- News -->
	<div class="news _page news_page">
	<div class="news_wrapper wrapper ">
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

		<!-- <span class="button_link_wrapper"><a class="button_link" href="#"><?php pll_e('button_paginate'); ?></a></span> -->

	</div>
<?php get_footer('contacts') ?>