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

	<!-- <main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main>#main -->
	<main id="primary" class="site-main">

	<div class="img flipLeftTrigger"></div>
        <div class="content flipLeftTrigger">
        <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Vision</span></span></h2>
        <p class="vision-lead"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">企業が笑顔だと未来は明るい<br>迅速な対応をモットーにしています</span></span></p>

        <p>ハピカム株式会社は、<br>経営やシステムに関するコンサルティングや<br>プロジェクトマネージメントを行っています</p>
        <p>あなたの「わくわくすること」を<br>私たちに教えてください。</p>
        </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
