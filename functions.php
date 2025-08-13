<?php 
function my_theme_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script(
		'custom-script',
		get_template_directory_uri(), '/js/main.js',
		array('jquery'),
		'1.0',
		true
	);

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
	wp_enqueue_style('style-rtf', get_template_directory_uri() . '/css/style-rtf.css', array(), '1.0', 'all');
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0', 'all');
    wp_enqueue_style('parts', get_template_directory_uri() . '/css/parts.css', array(), '1.0', 'all');
    wp_enqueue_style('layout', get_template_directory_uri() . '/css/layout.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');
?>