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
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nomal' ); ?></a>
            <!-- ここから下の部分はjsだからクラス名はそのままだと思う -->
<div id="splash">
<div id="splash-logo"><div class="bgextend bgLRextend"><span class="bgappear"><?php wp_title(); ?></span></div></div>
<!--/splash--></div>
<div class="splashbg"></div><!---画面遷移用-->

<div id="wrapper">
<header id="header">
<h1><a href="#"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><?php wp_title(); ?></span></span></a></h1>
    

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
                'container' => 'nav',
                // 'container_class' =>にほんとはするんだけどidでもやれるか試す。
                'container_id' => 'pc-nav',
                // ここでクラスを作る方法、spanを加える方法はちょっと後でクラスの作り方を学んでから
            )
            );
            ?>
  
</header>
