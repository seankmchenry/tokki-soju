<?php
/**
 * cpt-setup.php
 *
 * @package _s
 */

// use the PostType class
use PostTypes\PostType;

// Dashicons for 'menu_icon' value can be found here:
// https://developer.wordpress.org/resource/dashicons

/**
 * CPT: Locations
 */
$location_options = array(
  'public' => true,
  'has_archive' => false,
  'rewrite' => false,
  'supports' => array( 'editor', 'revisions', 'thumbnail', 'title' ),
  'menu_icon' => 'dashicons-location'
);
$location = new PostType( 'location', $location_options );

/**
 * Featured image column
 */
$cpts = array( $location );

// add column to each $cpt setup variable
if ( $cpts ) {
  foreach ( $cpts as $cpt ) {
    $cpt->columns( array(
      'cb' => '<input type="checkbox" />',
      'title' => __( 'Title' ),
      'icon' => __( 'Featured Image' ),
      'author' => __( 'Author' ),
      'post_id' => __( 'Post ID' ),
      'date' => __( 'Date' )
    ) );
  }
}
