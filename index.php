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
<p class="top-lead"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><?php wp_title(); ?></span></span></p>
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
        <p class="vision-lead"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><?php echo esc_html(get_post_meta(get_the_ID(), 'vision_lead', true)); ?></span></span></p>
		<p>
			<?php echo nl2br(esc_html(get_post_meta(get_the_ID(), 'vision_text1', true))); ?>
		</p>
		<p>
			<?php echo nl2br(esc_html(get_post_meta(get_the_ID(), 'vision_text2', true))); ?>
		</p>
        </div>
</section>
<section id="service" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Service</span></span></h2>
    <section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="<?php echo esc_url(get_post_meta(get_the_ID(), 'service_img_1', true)); ?>" alt=""></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span><?php echo esc_html(get_post_meta(get_the_ID(), 'service_title_1', true)); ?></span><?php echo esc_html(get_post_meta(get_the_ID(), 'service_subtitle_1', true)); ?></h3>
	<p><?php echo nl2br(esc_html(get_post_meta(get_the_ID(), 'service_desc_1', true))); ?></p>

        <div class="btn"><a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'service_link_1', true)); ?>" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
</section>
<section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="<?php echo esc_url(get_post_meta(get_the_ID(), 'service_img_2', true)); ?>" alt=""></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span><?php echo esc_html(get_post_meta(get_the_ID(), 'service_title_2', true));?></span><?php echo esc_html(get_post_meta(get_the_ID(), 'service_subtitle_2', true));?></h3>
    <p><?php echo nl2br(esc_html(get_post_meta(get_the_ID(), 'service_desc_2', true))); ?></p>
        <div class="btn"><a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'service_link_2', true)); ?>" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
</section>
    <section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="<?php echo esc_url(get_post_meta(get_the_ID(), 'service_img_3', true)); ?>" alt=""></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span><?php echo esc_html(get_post_meta(get_the_ID(), 'service_title_3', true)); ?></span><?php echo esc_html(get_post_meta(get_the_ID(), 'service_subtitle_3', true)); ?></h3>
    <p><?php echo nl2br(esc_html(get_post_meta(get_the_ID(), 'service_desc_3', true))); ?></p>
        <div class="btn"><a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'service_link_3', true)); ?>" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
</section>
</section>
    
<section id="about" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">About</span></span></h2>
    <ul class="about-list fadeUpTrigger">
    <?php if ($val = get_post_meta(get_the_ID(), 'about_company_name', true)) : ?>
    <li>
        <dl>
            <dt>会社名</dt>
            <dd><?php echo esc_html($val); ?></dd>
        </dl>
    </li>
    <?php endif; ?>

    <?php if ($val = get_post_meta(get_the_ID(), 'about_established', true)) : ?>
    <li>
        <dl>
            <dt>設立</dt>
            <dd><?php echo esc_html($val); ?></dd>
        </dl>
    </li>
    <?php endif; ?>

    <?php if ($val = get_post_meta(get_the_ID(), 'about_capital', true)) : ?>
    <li>
        <dl>
            <dt>資本金</dt>
            <dd><?php echo esc_html($val); ?></dd>
        </dl>
    </li>
    <?php endif; ?>

    <?php if ($val = get_post_meta(get_the_ID(), 'about_ceo', true)) : ?>
    <li>
        <dl>
            <dt>代表</dt>
            <dd><?php echo esc_html($val); ?></dd>
        </dl>
    </li>
    <?php endif; ?>

    <?php if ($val = get_post_meta(get_the_ID(), 'about_address', true)) : ?>
    <li>
        <dl>
            <dt>所在地</dt>
            <dd><?php echo nl2br(esc_html($val)); ?></dd>
        </dl>
    </li>
    <?php endif; ?>

    <?php if ($val = get_post_meta(get_the_ID(), 'about_tel', true)) : ?>
    <li>
        <dl>
            <dt>電話</dt>
            <dd><?php echo esc_html($val); ?></dd>
        </dl>
    </li>
    <?php endif; ?>

    <?php if ($val = get_post_meta(get_the_ID(), 'about_clients', true)) : ?>
    <li>
        <dl>
            <dt>主な取引先</dt>
            <dd><?php echo nl2br(esc_html($val)); ?></dd>
        </dl>
    </li>
    <?php endif; ?>
</ul>
</section>
<div class="fadeUpTrigger"><div class="faq-bg"></div></div>
<section id="faq" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">FAQ</span></span></h2>
    <ul class="accordion-area">
		<?php for ($i = 1; $i <= 4; $i++) :
		$title = get_post_meta(get_the_ID(), "faq_title_$i", true);
		$content = get_post_meta(get_the_ID(), "faq_content_$i", true);
		if ($title && $content) : ?>
		<li class="fadeUpTrigger">
			<section <?php if($i === 1) echo 'class="open"'; ?>>
				<h3 class="title"><?php echo esc_html($title); ?></h3>
				<div class="box">
					<p><?php echo nl2br(esc_html($content)); ?></p>
		</div>
		</section>
		</li>
		<?php 
		endif; 
	endfor; ?>
	</ul>
	</section>
<section id="contact" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Contact</span></span></h2>
    <form method="post" action="" enctype="multipart/form-data">
	<ul class="form-list fadeUpTrigger">

<li>
  <dl>
    <dt><label for="division">会社名・部署名</label></dt>
    <dd>[text* division id:division class:input-text size:60]</dd>
  </dl>
</li>

<li>
  <dl>
    <dt><label for="name">ご担当者名</label></dt>
    <dd>[text* name id:name class:input-text size:60]</dd>
  </dl>
</li>

<li>
  <dl>
    <dt><label for="email">メールアドレス</label></dt>
    <dd>[email* email id:email class:input-text size:60]</dd>
  </dl>
</li>

<li>
  <dl>
    <dt><label for="tel">電話番号</label></dt>
    <dd>[tel tel id:tel class:input-text size:60]</dd>
  </dl>
</li>

<li>
  <dl>
    <dt><label for="msg">お問い合わせ内容</label></dt>
    <dd>[textarea* message id:msg cols:50 rows:5]</dd>
  </dl>
</li>

</ul>

<div class="submit-btn fadeUpTrigger">[submit "確認"]</div>

        </form>
    
</section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
