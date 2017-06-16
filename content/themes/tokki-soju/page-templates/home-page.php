<?php
/**
 * Template Name: Home Page
 *
 * The home page template
 *
 * @package ts
 */

get_header(); ?>

  <div id="content" class="site-content p0">

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
              <?php

              /* Sections */
              if ( have_rows( 'home_sections' ) ) :

                // loop through sections
                while ( have_rows( 'home_sections' ) ) : the_row();

                  /* Large Image */
                  if ( get_row_layout() == 'large_image_section' ) {
                    get_template_part( 'templates/home/large_image', 'section' );
                  }

                  /* Map */
                  elseif ( get_row_layout() == 'map_section' ) {
                    get_template_part( 'templates/home/map', 'section' );
                  }

                  /* Video */
                  elseif ( get_row_layout() == 'video_section' ) {
                    get_template_part( 'templates/home/video', 'section' );
                  }

                  /* FAQs */
                  elseif ( get_row_layout() == 'faqs_section' ) {
                    get_template_part( 'templates/home/faqs', 'section' );
                  }

                  /* Press */
                  elseif ( get_row_layout() == 'press_section' ) {
                    get_template_part( 'templates/home/press', 'section' );
                  }

                  /* About */
                  elseif ( get_row_layout() == 'about_section' ) {
                    get_template_part( 'templates/home/about', 'section' );
                  }

                  /* Recipe */
                  elseif ( get_row_layout() == 'recipe_section' ) {
                    get_template_part( 'templates/home/recipe', 'section' );
                  }

                  /* Gallery */
                  elseif ( get_row_layout() == 'gallery_section' ) {
                    get_template_part( 'templates/home/gallery', 'section' );
                  }

                endwhile;

              endif;
              ?>
            </div><!-- .entry-content -->
          </article><!-- #post-## -->

        <?php endwhile; // End of the loop.
        ?>

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
