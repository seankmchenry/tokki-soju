<?php
/**
 * Template for the home page FAQs section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section faqs-section home-section--faqs">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-md-9 col-lg-8">

        <!-- Inner -->
        <div class="section-inner faqs-inner faqs-section__inner left-align">

          <?php
          /* Title */
          if ( get_sub_field( 'section_title' ) ) { ?>
            <h2 class="section-title faqs-title faqs-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php }

          /* FAQs */
          if ( have_rows( 'faqs' ) ) { ?>
            <div class="faqs-list faqs-section__list">
              <?php // loop through FAQs
              while ( have_rows( 'faqs' ) ) : the_row(); ?>

                <div class="faqs-item faqs-list__item">
                  <?php
                  /* Question */
                  if ( get_sub_field( 'question' ) ) { ?>
                    <div class="question-text faqs-item__question mb1">
                      <strong>Q: <?php the_sub_field( 'question' ); ?></strong>
                    </div>
                  <?php }

                  /* Answer */
                  if ( get_sub_field( 'answer' ) ) { ?>
                    <div class="answer-text faqs-item__answer mb3">
                      <strong>A:</strong> <?php the_sub_field( 'answer' ); ?>
                    </div>
                  <?php }
                  ?>
                </div>

              <?php endwhile; ?>
            </div>
          <?php }
          ?>

        </div><!-- .section-inner -->

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>