<?php

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
