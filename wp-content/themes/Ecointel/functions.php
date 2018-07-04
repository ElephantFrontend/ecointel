<?php
/**
 * Ecointel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ecointel
 */

if ( ! function_exists( 'ecointel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ecointel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Ecointel, use a find and replace
		 * to change 'ecointel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ecointel', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu_header' => esc_html__( 'menu_header', 'ecointel' ),
		) );
		// Регистрация меню
		// add_action( 'after_setup_theme', 'theme_register_nav_menu' );
		// function theme_register_nav_menu() {
		// 	register_nav_menu( 'menu_header', 'menu_header' );
		// }

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ecointel_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ecointel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecointel_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ecointel_content_width', 640 );
}
add_action( 'after_setup_theme', 'ecointel_content_width', 0 );

// Ограничение title по количеству слов
	function trim_title_words($count, $after) {
  $title = get_the_title();
  $words = split(' ', $title);
  if (count($words) > $count) {
    array_splice($words, $count);
    $title = implode(' ', $words);
  }
  else $after = '';
  echo $title . $after;
}
// ограничить количество слов excerpt
function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecointel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ecointel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ecointel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ecointel_widgets_init' );

// Добавление слов в popylang
pll_register_string('title_partners', 'title_partners');
pll_register_string('title_about', 'title_about');
pll_register_string('title_services', 'title_services');
pll_register_string('title_news', 'title_news');
pll_register_string('title_contact', 'title_contact');
pll_register_string('button_news', 'button_news');
pll_register_string('button_personal_news', 'button_personal_news');
pll_register_string('form_name', 'form_name');
pll_register_string('form_phone', 'form_phone');
pll_register_string('form_email', 'form_email');
pll_register_string('form_text', 'form_text');
pll_register_string('form_button', 'form_button');
pll_register_string('button_paginate', 'button_paginate');
pll_register_string('title_recycling', 'title_recycling');
pll_register_string('title_utilization', 'title_utilization');
pll_register_string('button_services', 'button_services');
pll_register_string('adress', 'adress');

/**
 * Enqueue scripts and styles.
 */
function ecointel_scripts() {
	wp_enqueue_style( 'ecointel-style', get_stylesheet_uri() );

	wp_enqueue_style( 'ecointel-slick-theme', get_template_directory_uri() . '/src/style/slick-theme.css');

	wp_enqueue_style( 'ecointel-slick', get_template_directory_uri() . '/src/style/slick.css');



	wp_enqueue_script( 'ecointel-slick-js', get_template_directory_uri() . '/src/scripts/slick.js', array(), '20151215', true );
	wp_enqueue_script( 'ecointel-all-js', get_template_directory_uri() . '/src/scripts/all_scripts.js', array(), '20151215', true );
	// wp_enqueue_script( 'ecointel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'ecointel-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ecointel_scripts', 'ecointel-slick-js', 'ecointel-all-js' );

// пагинация


// 
add_action('customize_register', function($customizer){
    $customizer->add_section(
        'example_section_one',
        array(
            'title' => 'Контакты',
            'description' => 'Введите ваши контакты',
            'priority' => 11,
        )
    );
// num1
    $customizer->add_setting(
    'number1'
	);

	$customizer->add_control(
    'number1',
    array(
        'label' => 'Номер телефона1',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
// num2
	$customizer->add_setting(
    'number2'
	);

	$customizer->add_control(
    'number2',
    array(
        'label' => 'Номер телефона2',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
// email
	$customizer->add_setting(
    'my_email'
	);

	$customizer->add_control(
    'my_email',
    array(
        'label' => 'Email',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
// adress
	//$customizer->add_setting(
    //'my_adress'
	//);

	//$customizer->add_control(
   // 'my_adress',
   // array(
   //     'label' => 'Адрес',
   //     'section' => 'example_section_one',
  //      'type' => 'text',
   // )
	//);
// Facebook
	$customizer->add_setting(
    'my_facebook'
	);

	$customizer->add_control(
    'my_facebook',
    array(
        'label' => 'Facebook',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
// LinkedIn
	$customizer->add_setting(
    'my_linkedin'
	);

	$customizer->add_control(
    'my_linkedin',
    array(
        'label' => 'LinkedIn',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
});

// 
//удаление обертки contact form7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
 // 
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

