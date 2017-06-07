<?php

function prapor_setup() {

	load_theme_textdomain('prapor');

	add_theme_support('title-tag');

	add_theme_support('custom-logo', array(
		'height' => 51,
		'width' => 118,
		'flex-height' => true
	));

	add_theme_support('post-thumbnails');


	add_theme_support('html5', array(
		'search_form',
		'comment_form',
		'comment_list',
		'gallery',
		'caption'
	));

	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'gallery'
	));

	register_nav_menu('primary', 'Primary menu');

}

add_action('after_setup_theme', 'prapor_setup');

function prapor_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
	wp_enqueue_script( 'salvattore', get_template_directory_uri() . '/js/salvattore.min.js');
	wp_enqueue_script( 'hammer', get_template_directory_uri() . '/js/hammer.js');
	// wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');

}
add_action( 'wp_enqueue_scripts', 'prapor_scripts' );


function prapor_customize_register( $wp_customize ) {

	$wp_customize->add_setting( 'header_products' , array(
    'default'   => __('featured products', 'prapor'),
    'transport' => 'refresh',
	));

	$wp_customize->add_section( 'products_section' , array(
    'title'      => __('Настройки разделителя', 'prapor'),
    'priority'   => 30,
	));

	$wp_customize->add_control(
	'header_products',
	array(
		'label'    => __( 'Product header in products', 'prapor'),
		'section'  => 'products_section',
		'settings' => 'header_products',
		'type'     => 'text',
	));
}
add_action( 'customize_register', 'prapor_customize_register' );

/**
 * Add a sidebar_footer.
 */
function prapor_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Виджет футтера', 'prapor' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Настройка футтера', 'prapor' ),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-3 col-xs-6 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

		register_sidebar( array(
        'name'          => __( 'Виджет поиска', 'prapor' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Настройка формы поиска', 'prapor' ),
        'before_widget' => '<div id="%1$s" class="col-md-8 col-sm-7 col-xs-7 text-center %2$s">',
        'after_widget'  => '</div>',
    ));
}
add_action( 'widgets_init', 'prapor_widgets_init' );


add_image_size( 'custom-thumbnail', 250, 170, true );
add_image_size( 'Banner_post', 278, 325, false );

remove_filter('the_content', 'wpautop');
