<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nomal
 */

get_header();
?>

	<main id="main-content">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
			?>
			<article <?php post_class();
			?>>
			<h1><?php the_title(); ?></h1>
			<div class="post-meta">
				<time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
				<span class="category"><?php the_category(', '); ?></span>
		</div>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
		<div class="post-tags">
			<?php the_tags(); ?>
		</div>
		<?php comments_template(); ?>
		</article>
		<?php 
		endwhile;
	endif;
	?>
	</main>

<?php
// get_sidebar();
get_footer();
