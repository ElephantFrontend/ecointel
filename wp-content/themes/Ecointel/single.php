<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ecointel
 */

get_header();
?>
<div class="wrapper wrapper_post">
	<div class="post">
		<h3 class=""><?php the_title(); ?></h3>
		<div class="post_block">
			<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
			<img class="post_img" src="<?php echo $image_url[0];?>" alt="">
			<p class="post_date"><b><?php echo get_the_date('m.d.y'); ?></b></p>
			<p><?php the_post(); the_content(); ?></p>
		</div>
	</div>
</div>

<?php
get_footer();
