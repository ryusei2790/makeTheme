<?php
/**
 * 固定フロントページ
 */
get_header();
?>

<section id="service" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Service</span></span></h2>
    <?php get_header(); ?>

<main id="main-area">
    <h1>事例一覧</h1>
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
                    the_post_thumbnail(''); // 'full' はフルサイズ画像
                } else {
                    // 画像が設定されていない場合の代替画像
                    // echo '<img src="' . get_template_directory_uri() . '/assets/img/pict_02.jpg" alt="代替画像">';
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
</main>

<?php get_footer(); ?>

    
</section>

<?php get_footer(); ?>