<?php

require_once( get_template_directory() . '/includes/acf/torque-acf-search-class.php' );

class HSQ_ACF {

  public function __construct() {
    add_action('admin_init', array( $this, 'acf_admin_init'), 99);
    add_action('acf/init', array( $this, 'acf_init' ) );

    // hide acf in admin - client doesnt need to see this
    // add_filter('acf/settings/show_admin', '__return_false');

    // add acf fields to wp search
    if ( class_exists( 'Torque_ACF_Search' ) ) {
      add_filter( Torque_ACF_Search::$ACF_SEARCHABLE_FIELDS_FILTER_HANDLE, array( $this, 'add_fields_to_search' ) );
    }
  }

  public function acf_admin_init() {
    // hide options page
    // remove_menu_page('acf-options');
  }

  public function add_fields_to_search( $fields ) {
    // $fields[] = 'custom_field_name';
    return $fields;
  }

  public function acf_init() {
    if( function_exists('acf_add_local_field_group') ):

      acf_add_local_field_group(array(
      	'key' => 'group_5c64a717d0ce9',
      	'title' => 'Page Content',
      	'fields' => array(
      		array(
      			'key' => 'field_5c64a72ff4f19',
      			'label' => 'Include Sections',
      			'name' => 'include_sections',
      			'type' => 'checkbox',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'choices' => array(
      				'summary' => 'Page Summary',
      				'modules' => 'Modules',
      			),
      			'allow_custom' => 0,
      			'default_value' => array(
      				0 => 'summary',
      				1 => 'modules',
      			),
      			'layout' => 'vertical',
      			'toggle' => 1,
      			'return_format' => 'value',
      			'save_custom' => 0,
      		),
      		array(
      			'key' => 'field_5c64abae20590',
      			'label' => 'Page Summary',
      			'name' => 'page_summary',
      			'type' => 'group',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5c64a72ff4f19',
      						'operator' => '==',
      						'value' => 'summary',
      					),
      				),
      			),
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'layout' => 'row',
      			'sub_fields' => array(
      				array(
      					'key' => 'field_5c64abe920591',
      					'label' => 'Subheading',
      					'name' => 'subheading',
      					'type' => 'text',
      					'instructions' => '',
      					'required' => 0,
      					'conditional_logic' => 0,
      					'wrapper' => array(
      						'width' => '',
      						'class' => '',
      						'id' => '',
      					),
      					'default_value' => '',
      					'placeholder' => '',
      					'prepend' => '',
      					'append' => '',
      					'maxlength' => '',
      				),
      				array(
      					'key' => 'field_5c64abf320592',
      					'label' => 'Heading',
      					'name' => 'heading',
      					'type' => 'text',
      					'instructions' => '',
      					'required' => 0,
      					'conditional_logic' => 0,
      					'wrapper' => array(
      						'width' => '',
      						'class' => '',
      						'id' => '',
      					),
      					'default_value' => '',
      					'placeholder' => '',
      					'prepend' => '',
      					'append' => '',
      					'maxlength' => '',
      				),
      				array(
      					'key' => 'field_5c64ac0d20593',
      					'label' => 'Summary',
      					'name' => 'summary',
      					'type' => 'textarea',
      					'instructions' => '',
      					'required' => 0,
      					'conditional_logic' => 0,
      					'wrapper' => array(
      						'width' => '',
      						'class' => '',
      						'id' => '',
      					),
      					'default_value' => '',
      					'placeholder' => '',
      					'maxlength' => '',
      					'rows' => '',
      					'new_lines' => 'wpautop',
      				),
      			),
      		),
      		array(
      			'key' => 'field_5c6488cf633d0',
      			'label' => 'Modules',
      			'name' => 'modules',
      			'type' => 'flexible_content',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5c64a72ff4f19',
      						'operator' => '==',
      						'value' => 'modules',
      					),
      				),
      			),
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'layouts' => array(
      				'5c6488d8017bf' => array(
      					'key' => '5c6488d8017bf',
      					'name' => 'text_and_image',
      					'label' => 'Text and Image',
      					'display' => 'row',
      					'sub_fields' => array(
      						array(
      							'key' => 'field_5c64892f633d1',
      							'label' => 'Anchor',
      							'name' => 'anchor',
      							'type' => 'text',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'prepend' => '',
      							'append' => '',
      							'maxlength' => '',
      						),
      						array(
      							'key' => 'field_5c648940633d2',
      							'label' => 'Align',
      							'name' => 'align',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'left' => 'Left',
      								'right' => 'Right',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'left',
      							'layout' => 'horizontal',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
      						),
      						array(
      							'key' => 'field_5c64899f633d3',
      							'label' => 'Title Text Size',
      							'name' => 'title_text_size',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'regular' => 'Regular',
      								'large' => 'Large',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'regular',
      							'layout' => 'horizontal',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
      						),
      						array(
      							'key' => 'field_5c6489d9633d4',
      							'label' => 'Background Color',
      							'name' => 'background_color',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'teal' => 'Teal',
      								'white' => 'White',
      								'dark-grey' => 'Dark Grey',
      								'light-grey' => 'Light Grey',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'teal',
      							'layout' => 'horizontal',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
      						),
      						array(
      							'key' => 'field_5c648a5b633d5',
      							'label' => 'Image',
      							'name' => 'image',
      							'type' => 'image',
      							'instructions' => '',
      							'required' => 1,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'url',
      							'preview_size' => 'thumbnail',
      							'library' => 'all',
      							'min_width' => '',
      							'min_height' => '',
      							'min_size' => '',
      							'max_width' => '',
      							'max_height' => '',
      							'max_size' => '',
      							'mime_types' => '',
      						),
      						array(
      							'key' => 'field_5c648a74633d6',
      							'label' => 'Title',
      							'name' => 'title',
      							'type' => 'text',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'prepend' => '',
      							'append' => '',
      							'maxlength' => '',
      						),
      						array(
      							'key' => 'field_5c648a9e633d7',
      							'label' => 'Content',
      							'name' => 'content',
      							'type' => 'wysiwyg',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'tabs' => 'all',
      							'toolbar' => 'full',
      							'media_upload' => 0,
      							'delay' => 1,
      						),
      						array(
      							'key' => 'field_5c648ae1633d8',
      							'label' => 'CTA',
      							'name' => 'cta',
      							'type' => 'link',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'array',
      						),
      					),
      					'min' => '',
      					'max' => '',
      				),
      				'layout_5c64b2cb61e53' => array(
      					'key' => 'layout_5c64b2cb61e53',
      					'name' => 'images',
      					'label' => 'Images',
      					'display' => 'row',
      					'sub_fields' => array(
      						array(
      							'key' => 'field_5c64b2dd61e54',
      							'label' => 'Anchor',
      							'name' => 'anchor',
      							'type' => 'text',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'prepend' => '',
      							'append' => '',
      							'maxlength' => '',
      						),
      						array(
      							'key' => 'field_5c64b2fe61e55',
      							'label' => 'Number of Images',
      							'name' => 'number_images',
      							'type' => 'range',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => 1,
      							'min' => 1,
      							'max' => 2,
      							'step' => '',
      							'prepend' => '',
      							'append' => '',
      						),
      						array(
      							'key' => 'field_5c64b31b61e56',
      							'label' => 'Image 1',
      							'name' => 'image_1',
      							'type' => 'image',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'url',
      							'preview_size' => 'thumbnail',
      							'library' => 'all',
      							'min_width' => '',
      							'min_height' => '',
      							'min_size' => '',
      							'max_width' => '',
      							'max_height' => '',
      							'max_size' => '',
      							'mime_types' => '',
      						),
      						array(
      							'key' => 'field_5c64b33261e57',
      							'label' => 'Image 2 Start',
      							'name' => 'image_2_start',
      							'type' => 'range',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => array(
      								array(
      									array(
      										'field' => 'field_5c64b2fe61e55',
      										'operator' => '>',
      										'value' => '1',
      									),
      								),
      							),
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => 8,
      							'min' => 2,
      							'max' => 10,
      							'step' => 2,
      							'prepend' => '',
      							'append' => '',
      						),
      						array(
      							'key' => 'field_5c64b36261e58',
      							'label' => 'Image 2',
      							'name' => 'image_2',
      							'type' => 'image',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => array(
      								array(
      									array(
      										'field' => 'field_5c64b2fe61e55',
      										'operator' => '>',
      										'value' => '1',
      									),
      								),
      							),
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'url',
      							'preview_size' => 'thumbnail',
      							'library' => 'all',
      							'min_width' => '',
      							'min_height' => '',
      							'min_size' => '',
      							'max_width' => '',
      							'max_height' => '',
      							'max_size' => '',
      							'mime_types' => '',
      						),
      						array(
      							'key' => 'field_5c64b38761e59',
      							'label' => 'Stack On Tablet',
      							'name' => 'stack_on_tablet',
      							'type' => 'true_false',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => array(
      								array(
      									array(
      										'field' => 'field_5c64b2fe61e55',
      										'operator' => '>',
      										'value' => '1',
      									),
      								),
      							),
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'message' => '',
      							'default_value' => 0,
      							'ui' => 0,
      							'ui_on_text' => '',
      							'ui_off_text' => '',
      						),
      					),
      					'min' => '',
      					'max' => '',
      				),
      			),
      			'button_label' => 'Add Row',
      			'min' => '',
      			'max' => '',
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'page',
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
  }
}

?>
