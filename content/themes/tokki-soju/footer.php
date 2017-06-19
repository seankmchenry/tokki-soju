<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ts
 */

// set social URL vars
$fb_url = get_field( 'facebook_url', 'option' );
$tw_url = get_field( 'twitter_url', 'option' );
$ig_url = get_field( 'instagram_url', 'option' );
?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <!-- Inner -->
    <div class="footer-inner site-footer__inner py1 overflow-hidden">

      <div class="container">
        <div class="row center-xs">
          <div class="col-xs-12">

            <!-- Credits -->
            <div class="footer-credits site-footer__credits left left-align">
              <span>Website by <a href="http://seanmchenry.com" target="">SMK</a></span>
            </div>

            <!-- Social icons -->
            <div class="footer-social site-footer__social">
            </div>

            <!-- Copyright -->
            <div class="footer-copyright site-footer__copyright right right-align">
              <span>&copy; <?php echo date( 'Y' ); ?>, <?php bloginfo( 'name' ); ?></span>
            </div>

          </div>
        </div><!-- .row -->
      </div><!-- .container -->

    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
