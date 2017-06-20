<?php
/**
 * Template for the home page recipe section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section recipe-section home-section--recipe">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-lg-10">

        <!-- Inner -->
        <div class="section-inner recipe-inner recipe-section__inner">

          <?php
          /* Title */
          if ( get_sub_field( 'section_title' ) ) { ?>
            <h2 class="section-title recipe-title recipe-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php }

          // set recipes var
          $posts = get_sub_field( 'recipes' );

          // check for posts
          if ( $posts ) { ?>

            <div class="section-drinks recipe-drinks recipe-section__drinks">
              <div class="row">

                <?php // loop through recipes
                foreach ( $posts as $post ) {
                  setup_postdata( $post ); ?>

                  <div class="col-xs-6 col-md-4">
                    <div class="section-item recipe-item recipe-section__item mb3">
                      <?php
                      /* Photo */
                      if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>">
                          <img class="recipe-thumb recipe-item__thumb block" src="<?php echo get_the_post_thumbnail_url( $post, 'medium' ); ?>" alt="">
                        </a>
                      <?php }
                      ?>
                    </div>
                  </div>

                <?php }
                wp_reset_postdata(); ?>

              </div><!-- .row -->
            </div>

          <?php }
          ?>

        </div><!-- .section-inner -->

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>