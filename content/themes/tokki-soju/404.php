<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ts
 */

get_header(); ?>

	<div id="content" class="site-content">

    <div class="container">
      <div class="row">

        <div class="col-xs-12">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

							<section class="error-404 not-found">
								<header class="page-header">
									<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '_s' ); ?></h1>
								</header><!-- .page-header -->

								<div class="page-content">
									<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_s' ); ?></p>

									<?php get_search_form(); ?>
								</div><!-- .page-content -->
							</section><!-- .error-404 -->

						</main><!-- #main -->
					</div><!-- #primary -->
        </div>

      </div><!-- .row -->
    </div><!-- .container -->

	</div><!-- #content -->

<?php
get_footer();
