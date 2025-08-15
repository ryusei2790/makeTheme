<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomal
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php if ( have-posts() ) : ?>

		<!--アーカイブページのタイトルと説明-->
		<header class="page-header">
			<?php 
			the-archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
			</header>

			<!--記事ループ-->
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>

	<div class="entry-meta">
		<span class="post-date"><?php echo get_the_date(); ?></span>
		<span class="post-author"><?php the_author(); ?></span>
	</div>

	<div class="entry-excerpt">
		<?php the_excerpt(); ?>
	</div>
	</article>
	<?php endwhile; ?>

	<!--ページネーション　実装知らない-->
	<div class="pagination">
		<?php the_posts_pagination(); ?>
	</div>

	<?php else : ?>
		<p>記事がありません</p>
		<?php endif; ?>

	</main>
	

		

<?php
get_sidebar();
get_footer();
