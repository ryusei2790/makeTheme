<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomal
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="img flipLeftTrigger"></div>
        <div class="content flipLeftTrigger">
        <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">About
		</span></span></h2>
        <p class="vision-lead"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">企業が笑顔だと未来は明るい<br>迅速な対応をモットーにしています</span></span></p>

        <p>ハピカム株式会社は、<br>経営やシステムに関するコンサルティングや<br>プロジェクトマネージメントを行っています</p>
        <p>あなたの「わくわくすること」を<br>私たちに教えてください。</p>
        </div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
