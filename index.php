<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomal
 */

get_header();
?>
<div id="top-main">
<p class="top-lead"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">HAPPY</span></span><br><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Company is</span></span><br><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Making Future</span></span></p>
<!--/top-main--></div>

<div id="container">
<main id="main-area">
<section id="topics">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Topics</span></span></h2>
    <?php if ( have_posts() ) : ?>
    <ul class="slider">
        <?php while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                    <?php echo get_the_date( 'Y.m.d' ); ?>
                </time>
                <?php the_title(); ?>
            </a>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php else : ?>
        <p>お知らせはありません。</p>
<?php endif; ?>
</section>
<section id="vision" class="scroll-point">
        <div class="img flipLeftTrigger"></div>
        <div class="content flipLeftTrigger">
        <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Vision</span></span></h2>
        <p class="vision-lead"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">企業が笑顔だと未来は明るい<br>迅速な対応をモットーにしています</span></span></p>

        <p>ハピカム株式会社は、<br>経営やシステムに関するコンサルティングや<br>プロジェクトマネージメントを行っています</p>
        <p>あなたの「わくわくすること」を<br>私たちに教えてください。</p>
        </div>
</section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
