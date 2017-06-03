<?php
/**
 * Template for the home page video section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section video-section home-section--video">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <!-- Inner -->
        <div class="section-inner video-inner video-section__inner">

          <?php
          /* Title */
          if ( get_sub_field( 'section_title' ) && get_sub_field( 'show_title' ) ) { ?>
            <h2 class="section-title video-title video-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php }

          /* Video */
          if ( get_sub_field( 'section_video' ) ) { ?>
            <div class="section-video video-item video-section__video embed-container">
              <?php the_sub_field( 'section_video' ); ?>
            </div>
          <?php }
          ?>

        </div>

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>