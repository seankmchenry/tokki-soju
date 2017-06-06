<?php
/**
 * Template for the home page press section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section press-section home-section--press">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-lg-11">

        <!-- Inner -->
        <div class="section-inner press-inner press-section__inner">

          <?php
          /* Title */
          if ( get_sub_field( 'section_title' ) && get_sub_field( 'show_title' ) ) { ?>
            <h2 class="section-title press-title press-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php }

          /* Press Items */
          if ( have_rows( 'press_items' ) ) { ?>
            <div class="section-logos press-logos press-section__logos">
              <div class="row middle-xs">

                <?php // loop through items
                while ( have_rows( 'press_items' ) ) : the_row();
                  // set up item variables
                  $logo = get_sub_field( 'company_logo' );
                  $link = get_sub_field( 'press_url' );
                  ?>
                  <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="section-item press-item press-section__item mb3">
                      <?php // check for link
                      if ( $link ) { ?>
                        <a href="<?php echo $link; ?>" target="_blank">
                          <img class="press-logo press-item__logo block mx-auto hover-lighten" src="<?php echo $logo['sizes']['logo']; ?>" alt="<?php echo $logo['alt']; ?>">
                        </a>
                      <?php } else { ?>
                        <img class="press-logo press-item__logo block mx-auto hover-lighten" src="<?php echo $logo['sizes']['logo']; ?>" alt="<?php echo $logo['alt']; ?>">
                      <?php } ?>
                    </div>
                  </div>
                <?php endwhile; ?>

              </div><!-- .row -->
            </div>
          <?php }
          ?>

        </div><!-- .section-inner -->

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>