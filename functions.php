<?php 
function my_theme_scripts() {
	wp_enqueue_script('jquery');
	wp_enpueue_script('custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_script', 'my_theme_scripts');
?>