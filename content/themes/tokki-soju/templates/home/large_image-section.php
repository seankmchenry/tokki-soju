<?php
/**
 * Template for the home page large image section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section lgimg-section home-section--lgimg">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <!-- Inner -->
        <div class="section-inner lgimg-inner lgimg-section__inner">

          <?php
          /* Title */
          if ( get_sub_field( 'section_title' ) && get_sub_field( 'show_title' ) ) { ?>
            <h2 class="section-title lgimg-title lgimg-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php }

          /* Image */
          if ( get_sub_field( 'section_image' ) ) {
            $image = get_sub_field( 'section_image' ); ?>

            <img class="section-image lgimg-image lgimg-section__image block mx-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          <?php }
          ?>

        </div><!-- .section-inner -->

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>