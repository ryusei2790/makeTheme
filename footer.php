<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nomal
 */

?>

<footer id="footer">
<!-- この下のメニューって直書きじゃダメなのかな -->
<div class="openbtn"><span></span><span>Menu</span><span></span></div>
<div id="g-nav">
<div id="g-nav-list">
        <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'footer',
                'menu_id' => 'footer-menu',
            )
            );
            ?>
</div>
</div> 
    <p class="footer-logo"><?php wp_title(); ?></p>
    <small>&copy; <?php wp_title(); ?></small>
	<p id="page-top"><a href="#">Top</a></p>	
</footer>
<!--/wrapper--></div>
   
<?php wp_footer(); ?>
</body>
</html>