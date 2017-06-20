<?php
/**
 * Template for the home page map section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section map-section home-section--map">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12">

        <!-- Inner -->
        <div class="section-inner map-inner map-section__inner">

          <?php
          /* Title */
          if ( get_sub_field( 'section_title' ) ) { ?>
            <h2 class="section-title map-title map-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php }

          /* Map */
          // query locations
          $args = array(
            'post_type' => 'location',
            'posts_per_page' => -1,
            'post_status' => 'publish'
          );

          // set query variable
          $my_query = new WP_Query( $args );

          // check for posts
          if ( $my_query->have_posts() ) : ?>

            <div class="section-locs map-locs map-section__locs">
              <div class="section-map map-section__map acf-map rounded mx-auto left-align">

                <?php // loop through posts
                while ( $my_query->have_posts() ) : $my_query->the_post();

                  // set field variables
                  $location = get_field( 'location_address' );
                  $price = get_field( 'location_price' );
                  $link = get_field( 'website_url' );
                  $phone = get_field( 'phone_number' );
                  ?>

                  <div class="marker marker-item" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                    <!-- Title -->
                    <h4 class="location-name marker-item__name fw500 m0"><?php the_title(); ?></h4>

                    <?php
                    /* Price */
                    if ( $price ) { ?>
                      <span class="price mb1"><?php echo $price; ?></span>
                    <?php }

                    /* Address */
                    if ( $location ) {
                      // set up address field
                      $address = $location['address'];
                      $address = ts_get_map_address( $address );
                      ?>
                      <span><?php echo $address[0]; ?></span>
                      <span><?php echo $address[1]; ?></span>
                    <?php }

                    /* Website */
                    if ( $link ) { ?>
                      <span><a href="<?php echo $link; ?>" target="_blank">Website</a></span>
                    <?php }

                    /* Phone */
                    if ( $phone ) { ?>
                      <span><a href="<?php echo ts_get_tel_link( $phone ); ?>"><?php echo $phone; ?></a></span>
                    <?php }
                    ?>
                  </div>

                <?php endwhile; ?>

              </div><!-- .acf-map -->
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWfuWb_yQrjXk10m093AoCD3hFjFF5mJ4"></script>
            </div>

          <?php
          wp_reset_postdata();
          endif; ?>

        </div><!-- .section-inner -->

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>