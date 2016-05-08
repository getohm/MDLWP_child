<?php
/**
 * @version    1.0.0
 * @package    MDLWP Child
 * @author     OHTA, Mai
 *
 *
 *
 *
 *
 */
function theme_enqueue_styles() {
  wp_enqueue_style ( 'mdlwp-mdl-css', '//storage.googleapis.com/code.getmdl.io/1.0.6/material.blue_grey-deep_purple.min.css' );
  $parent_style = 'parent-style';
  wp_enqueue_style ( $parent_style, get_template_directory_uri () . '/style.css' );
  wp_enqueue_style ( 'child-style', get_stylesheet_directory_uri () . '/style.css', array (
      $parent_style
  ) );
  wp_enqueue_style ( 'bxslider-style', get_stylesheet_directory_uri () . '/jquery.bxslider.css' );
}
function theme_enqueue_scripts() {
  wp_enqueue_script ( 'bxSlider', get_stylesheet_directory_uri () . '/js/jquery.bxslider.min.js', array (
      'jquery'
  ), '4.1.2', true );
}

add_action ( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action ( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
add_filter ( 'comments_open', '__return_false' );




