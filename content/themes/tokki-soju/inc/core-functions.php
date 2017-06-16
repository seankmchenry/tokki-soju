<?php
/**
 * Core functions
 *
 * @package ts
 */

/*
Flush rewrite rules on theme activation
 */
function _ts_flush_rewrite_rules() {
  flush_rewrite_rules();
}
add_action( 'after_switch_theme', '_ts_flush_rewrite_rules' );

/*
Force category & postname permalink structure
 */
function _ts_custom_permalinks() {
  global $wp_rewrite;
  $wp_rewrite->set_permalink_structure( '/%postname%/' );
}
add_action( 'init', '_ts_custom_permalinks' );

/*
Disable public user registration page
 */
add_action( 'login_init', function() {
  add_filter( 'pre_option_users_can_register', '__return_null' );
} );

/*
Yoast SEO meta box priority
 */
function ts_move_yoast_seo_meta() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', 'ts_move_yoast_seo_meta' );

/*
Remove dashboard widgets
 */
function _ts_remove_dash_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}
add_action( 'wp_dashboard_setup', '_ts_remove_dash_widgets' );

/*
Add ACF options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
  acf_add_options_page();
  // acf_add_options_sub_page( 'Header' );
  // acf_add_options_sub_page( 'Footer' );
}

/*
Add and update image sizes
 */
function _ts_custom_image_sizes() {
  update_option( 'large_size_w', 800 );
  update_option( 'large_size_h', 600 );
  update_option( 'large_crop', 1 );

  update_option( 'medium_size_w', 600 );
  update_option( 'medium_size_h', 475 );
  update_option( 'medium_crop', 1 );

  update_option( 'thumbnail_size_w', 200 );
  update_option( 'thumbnail_size_h', 200 );
  update_option( 'thumbnail_crop', 1 );

  // hero size
  add_image_size( 'hero', 1600, 640, true );
  add_image_size( 'tall', 400, 800, false );
  add_image_size( 'logo', 300, 150, false );
}
add_action( 'init', '_ts_custom_image_sizes' );

/**
 * Allow SVG upload through media library
 */
function ts_allow_svg_upload( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'ts_allow_svg_upload', 10, 1 );

/**
 * Get post thumbnail image alt text
 */
function ts_get_image_alt( $post_id ) {
  $thumb_id = get_post_thumbnail_id( $post_id );
  $alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
  return $alt;
}

/**
 * Google Maps API key
 */
function ts_google_maps_key( $api ){
  $api['key'] = 'AIzaSyDWfuWb_yQrjXk10m093AoCD3hFjFF5mJ4';
  return $api;
}
add_filter( 'acf/fields/google_map/api', 'ts_google_maps_key' );

/**
 * Section title ID
 */
function ts_get_section_id() {
  $title = get_sub_field( 'section_title' );
  $id = strtolower( str_replace( ' ', '-', $title ) );
  return $id;
}

/**
 * Split ACF Google Map address field
 */
function ts_get_map_address( $address ) {
  $address = str_replace( ', United States', '', $address );
  $address = explode( ",", $address, 2 );
  return $address;
}

/**
 * Get tel: links from phone numbers
 */
function ts_get_tel_link( $phone ) {
  // remove non-numeric character
  $phone = preg_replace( "/[^0-9]/", "", $phone );
  // check string length
  if ( strlen( $phone ) === 10 ) {
    $phone = '+1' . $phone;
  }
  // add tel: prefix
  $phone = "tel:" . $phone;
  // return the link
  return $phone;
}

/**
 * Add wp_nav_menu link class
 */
function ts_add_link_class( $ulclass ) {
  return preg_replace( '/<a /', '<a data-scroll ', $ulclass );
}
add_filter( 'wp_nav_menu', 'ts_add_link_class' );
