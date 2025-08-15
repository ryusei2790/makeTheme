<?php get_header(); ?>

<main id="main-area">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <section class="service-detail">
        <h1><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="service-img">
                <?php the_post_thumbnail('full'); ?>
        </figure>
        <?php endif; ?>

        <div class="service-content">
            <?php the_content(); ?>
            </div>

            <div class="back-btn">
  <a href="<?php echo esc_url(home_url('/service')); ?>">一覧表示</a>
</div>
        </section>
        <?php endwhile; endif; ?>
        </main>

<?php get_footer(); ?>