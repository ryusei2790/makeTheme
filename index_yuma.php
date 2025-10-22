<?php get_header(); ?>
<div id="top-main">
<p class="top-lead"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Zenovith</span></span><br><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">is</span></span><br><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Making Future</span></span></p>
<!--/top-main--></div>

<div id="container">

<main id="main-area">
    
<section id="topics">
<h2>
        <span class="bgextend bgRextendTrigger">
            <span class="bgappearTrigger">Topics</span>
</span>
</h2>
<ul class="slider">
    <?php
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post', 
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $recent_posts = get_posts($args);
    foreach ($recent_posts as $post) :
        setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <time datetime="<?php echo get_the_date('c'); ?>">
                    <?php echo get_the_date('Y.m.d'); ?>
    </time>
    <?php the_title(); ?>
    </a>
    </li>
    <?php
    endforeach;
    wp_reset_postdata();
    ?>
    </ul>
</section>

<section id="vision" class="scroll-point">
  <div class="img flipLeftTrigger"></div>
  <div class="content flipLeftTrigger">
    <h2>
      <span class="bgextend bgLRextendTrigger">
        <span class="bgappearTrigger">Principle</span>
      </span>
    </h2>
    <p class="vision-lead">
      <span class="bgextend bgLRextendTrigger">
        <span class="bgappearTrigger">経営理念：挑戦を楽しむ</span>
      </span>
    </p>
  </div>
</section>

    
<section id="service" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Service</span></span></h2>
    <section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pict_2.png" alt="代替画像"></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span>ComCarry</span></h3>
        <p>これからの社会を創造する社会システムの構築を目指します</p>
        <div class="btn"><a href="#" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
    </section>
 
    <section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pict_3.png" alt="代替画像"></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span>Zentry</span>採用プラットフォーム運営</h3>
        <p>互いの理解をより深めることで、企業と就活生のミスマッチを大幅に減らすことができます。</p>
        <div class="btn"><a href="#" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
    </section>
    
    <section class="service-area flex flex-wrap justify-between">
    <figure class="img flipLeftTrigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pict_4.png" alt="代替画像"></figure>
    <div class="content flipLeftTrigger">
        <div class="content-area">
        <h3><span>AI</span>導入推進</h3>
        <p>AIシステム開発、コンサルを通じて人の働く価値を創出します</p>
        <div class="btn"><a href="#" class="btnlinestretches3"><span>Detail</span></a></div>
        </div>
    </div>
    </section>
    <?php
    $args = array(
        'post_type' => 'service',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $service_posts = get_posts($args);

    foreach ($service_posts as $post) : 
        setup_postdata($post); ?>
        <section class="service-area">
            <?php if (has_post_thumbnail()) : ?>
                <figure class="img flipLeftTrigger">
                <?php 
                    if ( has_post_thumbnail() ) { 
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                    } else {
                        echo '<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pict_4.png" alt="代替画像">';
                    }
                    ?>

            </figure>
            <?php endif; ?>
            <div class="content flipLeftTrigger">
                <div class="content-area">
                    <h3><span><?php the_title(); ?></span></h3>
                    <p><?php the_excerpt(); ?></p>
                    <div class="btn"><a href="<?php the_permalink(); ?>" class="btnlinestretches3"><span>Detail</span></a></div>
            </div>
            </div>
            </section>
            <?php endforeach;
            wp_reset_postdata(); ?>
    
</section>
    
<section id="about" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">About</span></span></h2>
    <ul class="about-list fadeUpTrigger">
        <li>
        <dl>
            <dt>会社名</dt><dd>Zenovith</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>設立</dt><dd>2025年3月</dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt>代表</dt><dd>久保晶幹</dd>
        
        </dl>
        </li>
        <li>
        <dl>
        <dt>資本金</dt><dd>50万円</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>所在地</dt><dd>東京都渋谷区渋谷</dd>
        </dl>
        </li>
        <li>
        <dl>
            <dt>電話</dt><dd>070-3286-5253</dd>
        </dl>
        </li>
       
    </ul>
</section>
    
<div class="fadeUpTrigger"><div class="faq-bg"></div></div>
    
<section id="faq" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">FAQ</span></span></h2>
    <ul class="accordion-area">
			<li class="fadeUpTrigger">
					<section class="open">
						<h3 class="title">お見積もりの目安を教えてください。</h3>
						<div class="box">
							<p>内容によって変化いたしますのでまずはお問い合わせフォームよりご相談ください。</p>
						</div>
					</section>
				</li>
				<li class="fadeUpTrigger">
					<section>
						<h3 class="title">地方ですが発注は可能でしょうか</h3>
						<div class="box">
							<p>可能です。お気軽にご相談ください。</p>
						</div>
					</section>
				</li>
				<li class="fadeUpTrigger">
					<section>
						<h3 class="title">セミナーやイベントの出演を依頼したいのですが</h3>
						<div class="box">
							<p>お問い合わせフォームより日時や内容などをご記入いただきご相談ください。</p>
						</div>
					</section>
					
				</li>
				<li class="fadeUpTrigger">
					<section>
						<h3 class="title">WEBメディアに記事を書いて頂くことは可能でしょうか？</h3>
						<div class="box">
							<p>ご相談内容によっては可能です。まずはお気軽にお問い合わせフォームよりご相談ください。</p>
						</div>
					</section>
					
				</li>

			</ul>
</section>
<section id="contact" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Contact</span></span></h2>
    <form method="post" action="" enctype="multipart/form-data">
        <ul class="form-list fadeUpTrigger">
        <li>
        <dl>
        <dt><label for="division">会社名・部署名</label></dt>
        <dd><input type="text" name="Division" id="division" size="60" value="">
        </dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt><label for="name">ご担当者名</label></dt>
        <dd><input type="text" name="Name" id="name" size="60" value="">
        </dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt><label for="email">メールアドレス</label></dt>
        <dd><input type="email" name="E-mail" id="email" size="60" value="">
        </dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt><label for="tel">電話番号</label></dt>
        <dd><input type="text" name="Tel" id="tel" size="60" value="">
        </dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt><label for="msg">お問い合わせ内容</label></dt>
        <dd><textarea name="Message" id="msg" cols="50" rows="5"></textarea>
        </dd>
        </dl>
        </li>
        </ul>

        <div class="submit-btn fadeUpTrigger"><input type="submit" name="submit" value="確認"></div>
        </form>
    
</section>
</main>
<!--/container--></div>	

<?php get_footer(); ?>