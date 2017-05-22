<?php
/**
 * Custom Widget
 *
 * @package ts
 */

class Custom_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'custom-widget',
      'description' => __( 'Custom widget using ACF fields.', '_s' )
    );
    parent::__construct( 'custom_widget', __( 'Custom Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget custom-widget">
      <?php
      /* Title */
      if ( get_field( 'widget_title', $wid ) ) { ?>
        <h2 class="widget-title custom-widget__title h4 mt0">
          <?php the_field( 'widget_title', $wid ); ?>
        </h2>
      <?php }
      ?>
    </section>
  <?php }

  /**
   * Form
   */
  public function form( $instance ) {}
}

/**
 * Register
 */
function ts_register_custom_widget() {
  register_widget( 'Custom_Widget' );
}
add_action( 'widgets_init', 'ts_register_custom_widget' );
