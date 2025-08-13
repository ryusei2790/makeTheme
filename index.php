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
<section id="service" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Service</span></span></h2>
    <section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="img/pict_02.jpg" alt=""></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span>Consulting</span>コンサルティング事業</h3>
        <p>経営・システム・デジタルマーケティングの目線でのコンサルティングを行います。</p>
        <div class="btn"><a href="#" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
</section>
<section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="img/pict_03.jpg" alt=""></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span>Development</span>受託開発事業</h3>
        <p>プロジェクト/プロダクトマネージメントの観点からのご支援を致します。</p>
        <div class="btn"><a href="#" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
    </section>
    <section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="img/pict_04.jpg" alt=""></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span>Education</span>教育事業</h3>
        <p>エンジニアやデザイナーの養成、新人研修・プログラミング研修などを行っています。</p>
        <div class="btn"><a href="#" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
    </section>
	</section>
    
<section id="about" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">About</span></span></h2>
    <ul class="about-list fadeUpTrigger">
        <li>
        <dl>
            <dt>会社名</dt><dd>ハピカム株式会社</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>設立</dt><dd>2020年7月</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>資本金</dt><dd>2000万円</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>代表</dt><dd>久保田涼子</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>所在地</dt><dd>〒104-0000 東京都中央区1丁目1番1号</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>電話</dt><dd>03-1234-5678</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>主な取引先</dt><dd>杉山商事<br>Y&amp;YCorporation<br>コテツ株式会社</dd>
        </dl>
        </li>
    </ul>
</section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
