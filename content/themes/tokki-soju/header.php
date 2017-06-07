<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ts
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Web fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Roboto:400,500" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class( 'basscss' ); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text hide" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

  <header id="masthead" class="site-header" role="banner" data-gumshoe-header>

    <div class="container">
      <div class="row middle-xs">

        <div class="col-xs-8 col-sm-5 col-md-3">
          <!-- Branding -->
          <div class="site-branding">
            <h1 class="site-title m0">
              <?php /* Logo */
              if ( get_field( 'brand_logo', 'option' ) ) {
                $logo = get_field( 'brand_logo', 'option' );
                ?>
                <a class="inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <img class="site-logo site-title__logo block" src="<?php echo $logo['url']; ?>" alt="<?php bloginfo( 'name' ); ?>">
                </a>
              <?php } else { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
              <?php } ?>
            </h1>
          </div><!-- .site-branding -->
        </div>

        <div class="col-xs-4 col-sm-7 col-md-9">
          <!-- Nav -->
          <nav id="main-nav" class="main-navigation main-nav right-align" role="navigation">
            <button class="menu-toggle btn btn-primary visible-xs" aria-controls="main-nav" aria-expanded="false"><?php esc_html_e( 'Menu', '_s' ); ?></button>
            <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'items_wrap' => '<ul id="main-nav-menu" class="nav-menu hidden-xs" data-gumshoe>%3$s</ul>' ) ); ?>
          </nav><!-- #main-nav -->
        </div>

      </div><!-- .row -->
    </div><!-- .container -->

  </header><!-- #masthead -->
