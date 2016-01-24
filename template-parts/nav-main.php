<?php
/**
 * The template part for displaying the main navigation
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MDLWP
 */
?>

<div class="mdl-layout__header-row">
  <!-- Title
  <span class="mdl-layout-title"><?php bloginfo( 'name' ); ?></span>-->
  <!-- Title -->
  <span class="mdl-layout-title"> <a
    href="<?php echo esc_url( home_url( '/' ) ); ?>"
    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
    rel="home"> <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/img/mdpi/discoveringjapan-logo.png"
      alt="<?php esc_attr ( get_bloginfo ( 'name' ) ) ?>" />
  </a>
  </span>

  <!-- Add spacer, to align navigation to the right -->
  <div class="mdl-layout-spacer"></div>

  <div
    class="mdlwp-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
      <?php get_search_form(); ?>
    </div>


    <?php
    $args = array (
        'theme_location' => 'primary',
        'container' => 'nav',
        'items_wrap' => '%3$s',
        'container_class' => 'mdl-navigation mdl-layout--large-screen-only',
        'walker' => new MDLWP_Nav_Walker ()
    );

    if (has_nav_menu ( 'primary' )) {
      wp_nav_menu ( $args );
    }
    ?>

</div>
