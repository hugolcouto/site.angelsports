<?php

/**
 * Consts
 */
define('BRAND_COLOR', '#122329');

/**
 * Add theme support
 */
add_theme_support('title-tag');
add_theme_support('custom-logo');

/**
 * Add enqueued scripts
 */
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
	$css_ver_hash = uniqid('css_');
	$js_ver_hash = uniqid('js_');

	// JS
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//unpkg.com/jquery');
	wp_enqueue_script('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], null, true);
	wp_enqueue_script('app', get_template_directory_uri() . "/assets/dist/js/app.js", ['jquery'], $js_ver_hash, true);

	// CSS
	wp_enqueue_style('style', get_template_directory_uri() . "/assets/dist/css/app.css", null, $css_ver_hash, 'all');
	wp_enqueue_style('slick_theme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
	wp_enqueue_style('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
}

/**
 * CUSTOM LOGO URL
 */
function get_custom_logo_url()
{
	$custom_logo_id = get_theme_mod('custom_logo');
	$image = wp_get_attachment_image_src($custom_logo_id, 'full');
	return $image[0];
}

/**
 * Remoção de ícones desnecessários do painel do WP
 */
add_action('admin_menu', 'custom_menu_page_removing');
function custom_menu_page_removing()
{
	remove_menu_page('edit-comments.php');
}

/**
 * Menu de navegação
 */
register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
function call_primary_menu()
{
	$args = [
		'container' => false,
		'echo' => false,
		'items_wrap' => '%3$s',
		'depth' => 0,
	];
	echo strip_tags(wp_nav_menu($args), '<a>');
}


/**
 * Post types
 */
add_action('init', 'customer_post_type');
function customer_post_type()
{
	$labels = [
		'name' => 'Clientes',
		'singular_name' => 'Cliente',
	];

	$args = [
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg stroke="currentColor" fill="currentColor" width="1264" height="1203.6" viewBox="0 0 334.43 318.44" xmlns="http://www.w3.org/2000/svg"><path d="M191.158 279.709a98.954 98.954 0 0 0-21.325-31.618 99.385 99.385 0 0 0-31.618-21.325c-.106-.053-.211-.08-.317-.132 16.484-11.906 27.199-31.3 27.199-53.181 0-36.248-29.37-65.617-65.617-65.617-36.248 0-65.617 29.369-65.617 65.617 0 21.88 10.716 41.275 27.199 53.208-.106.053-.212.08-.318.132-11.853 5-22.49 12.171-31.618 21.325a99.385 99.385 0 0 0-21.325 31.618 98.346 98.346 0 0 0-7.805 36.539 2.117 2.117 0 0 0 2.117 2.17h15.875c1.164 0 2.09-.926 2.116-2.064.53-20.426 8.732-39.555 23.23-54.054C58.336 247.325 78.26 239.07 99.48 239.07c21.22 0 41.143 8.255 56.145 23.257 14.5 14.499 22.701 33.629 23.23 54.054a2.095 2.095 0 0 0 2.117 2.064h15.875a2.117 2.117 0 0 0 2.117-2.17c-.265-12.647-2.884-24.95-7.805-36.565zM99.48 218.961c-12.144 0-23.574-4.736-32.173-13.335s-13.335-20.029-13.335-32.173c0-12.144 4.736-23.574 13.335-32.173s20.03-13.335 32.173-13.335c12.144 0 23.574 4.736 32.173 13.335s13.335 20.029 13.335 32.173c0 12.144-4.736 23.574-13.335 32.173s-20.029 13.335-32.173 13.335zM313.688 10.375a10.375 10.375 0 0 1 10.375 10.375v83.004a10.375 10.375 0 0 1-10.375 10.375H214.23a20.751 20.751 0 0 0-14.67 6.08l-20.752 20.751V20.75a10.375 10.375 0 0 1 10.376-10.375zM189.178 0a20.751 20.751 0 0 0-20.75 20.751v132.73a5.188 5.188 0 0 0 8.86 3.663l29.6-29.601a10.375 10.375 0 0 1 7.336-3.04h99.46a20.751 20.751 0 0 0 20.75-20.75V20.749a20.751 20.751 0 0 0-20.75-20.751z"/><path d="M220.308 62.253a10.376 10.376 0 1 1-20.75 0 10.376 10.376 0 0 1 20.75 0zm41.502 0a10.376 10.376 0 1 1-20.75 0 10.376 10.376 0 0 1 20.75 0zm41.502 0a10.376 10.376 0 1 1-20.75 0 10.376 10.376 0 0 1 20.75 0z"/></svg>'),
		'menu_position' => 4,
		'supports' => ['title', 'thumbnail'],
		'has_archive' => true,
	];

	register_post_type('clientes', $args);
}