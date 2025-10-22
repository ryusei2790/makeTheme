<?php
/**
 *  THe header for our theme
 * 
 * This is the template that diplays all of the <head> section and everything up until <div id="content">
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package nomal
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="/"><?php esc_html_e( 'Skip to content', 'nomal' ); ?></a>
            
<div id="splash">
<div id="splash-logo"><div class="bgextend bgLRextend"><span class="bgappear"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.png" alt="">Zenovith</span></div></div>
</div>
<div class="splashbg"></div>

<div id="wrapper">
<header id="header">
<h1><a href="<?php echo home_url("/"); ?>"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Zenovith</span></span></a></h1>
    
<nav id="pc-nav">
        <ul>
            <li><a href="<?php echo home_url("/principle"); ?>"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Principle</span></span></a></li>
            <li><a href="<?php echo home_url("/service"); ?>"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Service</span></span></a></li>
            <li><a href="<?php echo home_url("/about"); ?>"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">About</span></span></a></li>
            <li><a href="<?php echo home_url("/faq"); ?>"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Faq</span></span></a></li>
            <li><a href="<?php echo home_url("/contact"); ?>"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Contact</span></span></a></li>
        </ul>
</nav>   
</header>
