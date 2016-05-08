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
get_header ();
?>


<div id="primary" class="content-area">
  <main id="main" class="site-main mdl-grid mdlwp-1600" role="main">



  <div class="bxslider">


<?php

$args = array (
    'posts_per_page' => 10
) // 10件のみ取得する
;
?>
<?php $the_query = new WP_Query( $args ); ?>
   <?php  if ( $the_query->have_posts() ) : $i = 1;?>

			<?php do_action( 'mdlwp_before_content' ); ?>
			     <?php  while ( $the_query->have_posts() ) : $the_query->the_post();?>
   <?php

if ($i == 1 || $i == 6) {

        get_template_part ( 'template-parts/content', 'slider-large' );

                echo ' <div class="mdl-cell mdl-cell--6-col ">';

        $i ++;


      } else {
              if ($i == 2  || $i == 7 ) {
        echo '<div class="mdl-grid">';
        }
      get_template_part ( 'template-parts/content', 'slider-small' );

              if ($i == 3 || $i == 8) {
          echo '        </div><div class="mdl-grid">';
        }

              if ($i == 5 || $i == 10) {
          echo '        </div></div></div>';
        }

                $i ++;
      }
      ?>



			<?php endwhile; ?>

						<?php if ($i < 10) echo '</div></div>'  ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php do_action( 'mdlwp_after_content' ); ?>
		</div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--6-col dj-bigslide"></div>
      <div class="mdl-cell mdl-cell--6-col ">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
        </div>
      </div>
    </div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--6-col">
        <img src="http://placehold.it/500x500" />
      </div>
      <div class="mdl-cell mdl-cell--6-col ">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
        </div>
      </div>
    </div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--6-col">
        <img src="http://placehold.it/500x500" />
      </div>
      <div class="mdl-cell mdl-cell--6-col ">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <img src="http://placehold.it/250x250" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mdl-grid">
    <div
      class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div
      class="dj-content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col ">


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
      get_template_part ( 'template-parts/content', 'front' );
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
  </main>
  <!-- #main -->
</div>
<!-- #primary -->

<?php get_footer(); ?>