<?php
/**
 * acf-setup.php
 */

// return if this is dev environment
if ( WP_ENV === 'development' ) {
  return;
}

// hide field group menu from users
if ( wp_get_current_user()->user_login !== 'sean' ) {
  define( 'ACF_LITE' , true );
}

/*
ACF field groups
 */
// export field export code here:
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_5920752df41bd',
  'title' => 'Home Page Fields',
  'fields' => array (
    array (
      'key' => 'field_5920753c27efe',
      'label' => 'Home Sections',
      'name' => 'home_sections',
      'type' => 'flexible_content',
      'instructions' => 'Add home sections by clicking "Add Section" below.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'button_label' => 'Add Section',
      'min' => '',
      'max' => '',
      'layouts' => array (
        array (
          'key' => '592075503041c',
          'name' => '',
          'label' => '',
          'display' => 'block',
          'sub_fields' => array (
          ),
          'min' => '',
          'max' => '',
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/home-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_5920800733c36',
  'title' => 'Location Fields',
  'fields' => false,
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'location',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;