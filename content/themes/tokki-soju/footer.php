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
    <div class="footer-inner site-footer__inner overflow-hidden">

      <div class="container">
        <div class="row center-xs">
          <div class="col-xs-12">

            <div class="row middle-xs">
              <!-- Credits -->
              <div class="col-xs-12 col-sm-4 first-sm mb1 sm-mb0">
                <div class="footer-credits site-footer__credits">
                  <span>Website by <a href="http://seanmchenry.com" target="_blank">SMK</a></span>
                </div>
              </div>

              <!-- Social icons -->
              <div class="col-xs-12 col-sm-4 first-xs mb1 sm-mb0">
                <div class="footer-social site-footer__social">
                  <?php // check for social icons
                  if ( $fb_url || $tw_url || $ig_url ) { ?>
                    <ul class="list-style-none m0 p0">
                      <?php
                      /* Facebook */
                      if ( $fb_url ) { ?>
                        <li class="inline-block"><a class="icon-facebook-circled facebook" href="<?php echo $fb_url; ?>" target="_blank"></a></li>
                      <?php }

                      /* Instagram */
                      if ( $ig_url ) { ?>
                        <li class="inline-block"><a class="icon-instagram-circled instagram" href="<?php echo $ig_url; ?>" target="_blank"></a></li>
                      <?php }

                      /* Twitter */
                      if ( $tw_url ) { ?>
                        <li class="inline-block"><a class="icon-twitter-circled twitter" href="<?php echo $tw_url; ?>" target="_blank"></a></li>
                      <?php }
                      ?>
                    </ul>
                  <?php } ?>
                </div>
              </div>

              <!-- Copyright -->
              <div class="col-xs-12 col-sm-4">
                <div class="footer-copyright site-footer__copyright">
                  <span>&copy; <?php echo date( 'Y' ); ?>, <?php bloginfo( 'name' ); ?></span>
                </div>
              </div>
            </div><!-- .row -->

          </div>
        </div><!-- .row -->
      </div><!-- .container -->

    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
