<?php
/**
 * Template part for displaying posts.
 *
 * @package    MDLWP Child
 * @author     OHTA, Mai
 */

?>

<?php
    // Gets the stored background color value
    $color_value = get_post_meta( get_the_ID(), 'mdlwp-bg-color', true );
    // Checks and returns the color value
  	$color = (!empty( $color_value ) ? 'background-color:' . $color_value . ';' : '');

  	// Gets the stored title color value
    $title_color_value = get_post_meta( get_the_ID(), 'mdlwp-title-color', true );
    // Checks and returns the color value
  	$title_color = (!empty( $title_color_value ) ? 'color:' . $title_color_value . ';' : '');

  	// Gets the stored height value
    $height_value = get_post_meta( get_the_ID(), 'mdlwp-height', true );
    // Checks and returns the height value
  	$height = (!empty( $height_value ) ? 'height:' . $height_value . ';' : '');

  	 // Gets the uploaded featured image
  	$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  	// Checks and returns the featured image
  	$bg = (!empty( $featured_img ) ? "background-image: url('". $featured_img[0] ."');" : '');
?>
<a class="mdl-color-text--grey-600 dj-card__supporting-text" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone dj-card-square mdl-card mdl-shadow--2dp">
	<article id="post-<?php the_ID(); ?>" <?php post_class('dj-card-square'); ?>>

		<div class="dj-card__media" style="<?php echo $color . $bg . $height; ?> ">

		</div>

	 <div class="entry-content mdl-card__supporting-text">
			<header>
				<h5><?php the_title(); ?></h5>
			</header><!-- .entry-header -->



			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mdlwp' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->


	</article><!-- #post-## -->
</div><!-- .mdl-cell -->
</a>
