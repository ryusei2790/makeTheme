<?php get_header(); ?>
<main id="main-area">
    <h1>
        <?php single_cat_title(); ?>一覧
    </h1>

    <?php if ( have_posts() ) : ?>
        <ul class="category-list">
            <?php while( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <time datetime="<?php echo get_the__date('c'); ?>"><?PHP echo get_the_date('Y.m.d'); ?></time>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>

        <div class="pagination">
            <?php 
            the_posts_pagination(array(
                'mid_size' => 2, 
                'prev_text' => '前へ',
                'next_text' => '次へ',
            ));
            ?>
        </div>
        <?php else: ?>
            <p>このカテゴリーはありません</p>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>
