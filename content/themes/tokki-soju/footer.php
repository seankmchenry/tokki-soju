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
?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <!-- Top -->
    <div class="footer-top site-footer__top">
    </div>

    <!-- Bottom -->
    <div class="footer-bottom site-footer__bottom py1">
      <div class="footer-credits site-footer__credits center">
        <span>&copy; <?php echo date( 'Y' ); ?>, <?php bloginfo( 'name' ); ?></span>
      </div><!-- .site-info -->
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
