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
  'supports' => array( 'editor', 'revisions', 'title' ),
  'menu_icon' => 'dashicons-location'
);
$location = new PostType( 'location', $location_options );

// location columns
$location->columns()->set([
  'cb' => '<input type="checkbox" />',
  'title' => __( 'Title' ),
  'address' => __( 'Address' ),
  'price' => __( 'Price' ),
  'author' => __( 'Author' ),
  'date' => __( 'Date' )
]);
$location->columns()->populate( 'address', function($column, $post_id ) {
  $loc = get_field( 'location_address' );
  $loc = $loc['address'];
  $loc = str_replace( ', United States', '', $loc );
  echo $loc;
});
$location->columns()->populate( 'price', function($column, $post_id ) {
  $field = get_field_object( 'location_price' );
  $price = $field['value'];
  echo $price;
});

/**
 * CPT: Recipes
 */
$recipe_options = array(
  'public' => true,
  'has_archive' => false,
  'rewrite' => false,
  'supports' => array( 'editor', 'revisions', 'thumbnail', 'title' ),
  'menu_icon' => 'dashicons-carrot'
);
$recipe = new PostType( 'recipe', $recipe_options );

// recipe columns
$recipe->columns()->set([
  'cb' => '<input type="checkbox" />',
  'title' => __( 'Title' ),
  'icon' => __( 'Featured Image' ),
  'author' => __( 'Author' ),
  'date' => __( 'Date' )
]);
