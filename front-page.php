<?php
/**
 * The front template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MDLWP Child
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main mdl-grid mdlwp-1600" role="main">


  <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="dj-content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col ">
      <div class="mdl-grid">
		<?php if ( have_posts() ) : ?>

			<?php do_action( 'mdlwp_before_content' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'front' );
				?>

			<?php endwhile; ?>

			<?php do_action( 'mdlwp_before_pagination' ); ?>

			<?php mdlwp_posts_navigation(); ?>

			<?php do_action( 'mdlwp_after_pagination' ); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php do_action( 'mdlwp_after_content' ); ?>
		</div>
		</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>