<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );
remove_action( 'wp_head', 'rsd_link' );

add_action( 'after_setup_theme', 'mainMenu' );
add_theme_support( 'post-thumbnails' );

function mainMenu() {
	register_nav_menu( 'main', 'Основное меню' );
	register_nav_menu( 'footer', 'Меню в футере' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts(){
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'owl-slide', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', array(), '2.3.4', true );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.css' );
	wp_enqueue_style( 'owl-slide', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css' );
}

add_image_size('image_play', 1280, 700, true );
add_image_size('image-slot', 1900, 1070, true );

add_action( 'init', 'register_post_types' );
function register_post_types() {

    register_post_type( 'Slots', [
		'label'  => null,
		'labels' => [
			'name'               => 'Слоты', 
			'singular_name'      => 'Слот', 
			'add_new'            => 'Добавить слот', 
			'add_new_item'       => 'Добавление слотов', 
			'edit_item'          => 'Редактирование слота', 
			'new_item'           => 'Новый слот', 
			'view_item'          => 'Смотреть слоты', 
			'search_items'       => 'Искать слоты', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Слоты',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'comments' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	/*register_post_type( 'Bonuses', [
		'label'  => null,
		'labels' => [
			'name'               => 'Бонусы', 
			'singular_name'      => 'Бонус', 
			'add_new'            => 'Добавить бонус', 
			'add_new_item'       => 'Добавление бонусов', 
			'edit_item'          => 'Редактирование бонусов', 
			'new_item'           => 'Новый бонус', 
			'view_item'          => 'Смотреть бонусы', 
			'search_items'       => 'Искать бонусы', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Бонусы',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'Video', [
		'label'  => null,
		'labels' => [
			'name'               => 'Видео', 
			'singular_name'      => 'Видео', 
			'add_new'            => 'Добавить видео', 
			'add_new_item'       => 'Добавление видео', 
			'edit_item'          => 'Редактирование видео', 
			'new_item'           => 'Новое видео', 
			'view_item'          => 'Смотреть видео', 
			'search_items'       => 'Искать видео', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Видео',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'comments' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );*/

}
