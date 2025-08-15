<?php 
$args = array(
    'post_type' => 'service',
    'posts_per_page' => 10,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$service_posts = new WP_Query($args);
?>