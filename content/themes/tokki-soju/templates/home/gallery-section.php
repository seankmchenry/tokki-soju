<?php
/**
 * Template for the home page gallery section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section gallery-section home-section--gallery">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <!-- Inner -->
        <div class="section-inner gallery-inner gallery-section__inner">

          <?php
          /* Title */
          if ( get_sub_field( 'section_title' ) ) { ?>
            <h2 class="section-title gallery-title gallery-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php }
          ?>

        </div><!-- .section-inner -->

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>