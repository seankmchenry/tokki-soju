<?php
/**
 * Template for the home page about section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section about-section home-section--about">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <!-- Inner -->
        <div class="section-inner about-inner about-section__inner">

          <?php /* Title */
          if ( get_sub_field( 'section_title' ) && get_sub_field( 'show_title' ) ) { ?>
            <h2 class="section-title about-title about-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php } ?>

          <div class="row">
            <?php
            /* Photo */
            if ( get_sub_field( 'section_photo' ) ) {
              $photo = get_sub_field( 'section_photo' );
              ?>
              <div class="col-xs-12 col-md-6">
                <a href="<?php echo $photo['url']; ?>" target="_blank">
                  <img class="section-photo about-photo about-section__photo block hover-lighten" src="<?php echo $photo['sizes']['tall']; ?>" alt="<?php echo $photo['alt']; ?>">
                </a>
              </div>
            <?php }

            if ( get_sub_field( 'section_headline' ) && get_sub_field( 'section_headline' ) ) { ?>
              <div class="col-xs-12 col-md-6">
                <?php
                /* Section Headline */
                if ( get_sub_field( 'section_headline' ) ) { ?>
                  <h3 class="section-headline about-headline about-section__headline h1 mt0 mb3"><?php the_sub_field( 'section_headline' ); ?></h3>
                <?php }

                /* Section Text */
                if ( get_sub_field( 'section_text' ) ) { ?>
                  <div class="section-text about-text about-section__text">
                    <?php the_sub_field( 'section_text' ); ?>
                  </div>
                <?php }
                ?>
              </div>
            <?php }
            ?>
          </div><!-- .row -->

        </div><!-- .section-inner -->

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>