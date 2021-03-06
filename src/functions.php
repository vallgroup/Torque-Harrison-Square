<?php

require_once( get_stylesheet_directory() . '/includes/harrison-square-nav-menus-class.php');
require_once( get_stylesheet_directory() . '/includes/widgets/harrison-square-widgets-class.php');
require_once( get_stylesheet_directory() . '/includes/customizer/harrison-square-customizer-class.php');
require_once( get_stylesheet_directory() . '/includes/acf/harrison-square-acf-class.php');

/**
 * Child Theme Nav Menus
 */

 if ( class_exists( 'HSQ_Nav_Menus' ) ) {
   new HSQ_Nav_Menus();
 }

/**
 * Child Theme Widgets
 */

if ( class_exists( 'HSQ_Widgets' ) ) {
  new HSQ_Widgets();
}

/**
 * Child Theme Customizer
 */

if ( class_exists( 'HSQ_Customizer' ) ) {
  new HSQ_Customizer();
}

/**
 * Child Theme ACF
 */

 if ( class_exists( 'HSQ_ACF' ) ) {
   new HSQ_ACF();
 }


/**
 * Add Staff plugin extensions
 */

if ( class_exists('Torque_Staff_CPT') ) {

  add_action( 'init', function() {

  	register_taxonomy(
  		'staff_category',
  		Torque_Staff_CPT::$staff_labels['post_type_name'],
  		array(
  			'label' => __( 'Staff Category' ),
  			'rewrite' => array( 'slug' => 'category' ),
        'hierarchical' => true,
  		)
  	);

    pwp_add_metabox(
      'Links',
      array( Torque_Staff_CPT::$staff_labels['post_type_name'] ),
      array(
  			'name_prefix' => 'hsq_staff_meta',
  			array(
          'type'    => 'text',
          'context' => 'post',
          'name'    => '[website]',
          'label'   => 'Website',
  			),
  		),
      'hsq_staff_meta'
    );

  });
}


/**
 * Contact form overrides
 */
function hsq_contact_fields( $fields ) {

  unset( $fields['tq-state'] );
  unset( $fields['tq-zip'] );

  return $fields;
}
add_action( 'torque_contact_form_fields_filter', 'hsq_contact_fields' );


/**
 * Excerpt
 */

  function custom_excerpt_more( $more ) {
    return '';
  }
  add_filter( 'excerpt_more', 'custom_excerpt_more' );

  function custom_excerpt_length( $length ) {
    return 20;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 * Admin settings
 */

 // remove menu items
 function torque_remove_menus(){

   //remove_menu_page( 'index.php' );                  //Dashboard
   //remove_menu_page( 'edit.php' );                   //Posts
   //remove_menu_page( 'upload.php' );                 //Media
   //remove_menu_page( 'edit.php?post_type=page' );    //Pages
   remove_menu_page( 'edit-comments.php' );          //Comments
   //remove_menu_page( 'themes.php' );                 //Appearance
   //remove_menu_page( 'plugins.php' );                //Plugins
   //remove_menu_page( 'users.php' );                  //Users
   //remove_menu_page( 'tools.php' );                  //Tools
   //remove_menu_page( 'options-general.php' );        //Settings

 }
 add_action( 'admin_menu', 'torque_remove_menus' );




/**
 * Enqueues
 */

// enqueue child styles after parent styles, both style.css and main.css
// so child styles always get priority
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_styles' );
function torque_enqueue_child_styles() {

    $parent_style = 'parent-styles';
    $parent_main_style = 'torque-theme-styles';

    // make sure parent styles enqueued first
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $parent_main_style, get_template_directory_uri() . '/bundles/main.css' );

    // enqueue child style
    wp_enqueue_style( 'harrison-square-styles',
        get_stylesheet_directory_uri() . '/bundles/main.css',
        array( $parent_style, $parent_main_style ),
        wp_get_theme()->get('Version')
    );
}

// enqueue child scripts after parent script
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_scripts');
function torque_enqueue_child_scripts() {

    wp_enqueue_script( 'harrison-square-script',
        get_stylesheet_directory_uri() . '/bundles/bundle.js',
        array( 'torque-theme-scripts' ), // depends on parent script
        wp_get_theme()->get('Version'),
        true       // put it in the footer
    );
}



/*
Add REST API endpoints
 */

include locate_template('parts/acf/modules/blog/blog-posts-endpoint.php');

?>
