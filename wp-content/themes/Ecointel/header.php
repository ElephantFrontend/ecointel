<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ecointel
 */

?>
	<?php wp_head() ?>
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecointel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="google-site-verification" content="ocO7oxHF8zVGNnqhiKYbuexDXdGts73zc1HOPUdMgUg" />
	<meta name="it-rating" content="it-rat-6b125100fa800598990d53c01059eed2" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118671588-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118671588-1');
</script>

</head>
<body>
<!-- Header -->
	<head class="header">
		<div class="top_header">
			<div class="wrapper">
				<div class="number">
					<span><img src="<?php bloginfo('template_url'); ?>/src/img/icons/phone-icon.png" alt=""><?php echo get_theme_mod('number1'); ?></span>
					<span><img src="<?php bloginfo('template_url'); ?>/src/img/icons/phone-icon.png" alt=""><?php echo get_theme_mod('number2'); ?></span>
				</div>
				<div class="languages">
				 <?php
                            if(function_exists('icl_get_languages')){
                                $arr_lg = icl_get_languages('skip_missing=0');
                                if(!empty($arr_lg)){ ?>
                                    <?php
                                    $lang_html = '';
                                    foreach($arr_lg as $item){
                                        if (in_array($item['language_code'], array(''))) continue;
                                        $lang_html .= '<li class="language"><a title="'.esc_attr($item['translated_name']).'" href="'.esc_url($item['url']).'"></a></li>';
                                    }
                                    if($lang_html){
                                        echo '<ul class="dropdown-menu menu-depth-1">'.$lang_html.'</ul>';
                                    }
                                    ?>                     
                                <?php
                                }
                            }
                            ?>
				</div>
				</div>
			</div>
		<div class="bottom_header">
			<div class="wrapper">
				<div class="bottom_header_logo">
					<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/src/img/icons/logo_vertical.png" alt=""></a>
				</div>
				<div class="bottom_header_menu">
					<menu class="header_menu">
						<nav class="header_menu_nav">
							<ul class="header_menu_ul">
								
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu_header',
										'menu_id'        => 'header_menu_ul',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
								?>
							</ul>
						</nav>
					</menu>
					<!-- adaptive_menu -->
					<section class="xsMenu">
						<div id="menu-burger">
						  <span class="menu-icon"></span>
						</div>

						<div id="overlay-menu">
						<nav role='navigation'>
						
						    <?php
									wp_nav_menu( array(
										'theme_location' => 'menu_header',
										'menu_id'        => 'header_menu_ul',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
								?>
						
						</nav>  
						</div>
					</section>
					<!-- adaptive_menu -->
				</div>
			</div>
		</div>
	</head>
