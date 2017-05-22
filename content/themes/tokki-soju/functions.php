<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ts
 */

/**
 * Composer autoload
 */
require_once( __DIR__ . '/packages/autoload.php' );

/**
 * Core setup file
 */
require get_template_directory() . '/inc/core-setup.php';

/**
 * Core functions file
 */
require get_template_directory() . '/inc/core-functions.php';

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Extra theme functions
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Soil setup
 */
require get_template_directory() . '/inc/plugins/soil-setup.php';

/**
 * TGM setup
 */
require get_template_directory() . '/inc/plugins/tgm-setup.php';

/**
 * WPCPT setup
 */
require get_template_directory() . '/inc/plugins/cpt-setup.php';

/**
 * Advanced Custom Fields
 */
require get_template_directory() . '/inc/plugins/acf-setup.php';

/*
Custom Widgets
 */
// require get_template_directory() . '/inc/widgets/custom-widget.php';
