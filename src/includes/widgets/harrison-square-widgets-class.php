<?php

require_once( get_template_directory() . '/includes/widgets/torque-widgets-class.php' );

class HSQ_Widgets {

  public function __construct() {
    add_filter( Torque_Widgets::$sidebars_filter_handle, array( $this, 'modify_parent_sidebars' ) );
  }

  public function modify_parent_sidebars( $sidebars ) {
    unset($sidebars['primary']);
    // unset($sidebars['footer-col-3']);
    unset($sidebars['footer-col-4']);

    return $sidebars;
  }
}


class CustomFooterWidget extends WP_Widget {
  function __construct() {
    // Instantiate the parent object
    parent::__construct( false, 'Custom Footer' );
  }
  function widget( $args, $instance ) {
    // Widget output
    // get_template_part( 'template-parts/loop', 'custom_footer' );
  }
  function update( $new_instance, $old_instance ) {
    // Save widget options
  }
  function form( $instance ) {
    // Output admin widget options form
  }
}
function tq_register_widgets() {
  register_widget( 'CustomFooterWidget' );
}
add_action( 'widgets_init', 'tq_register_widgets' );

add_filter('dynamic_sidebar_params', 'my_dynamic_sidebar_params');

function my_dynamic_sidebar_params( $params ) {

	if ( is_admin() )
		return $params;

	// get widget vars
	$widget_name = $params[0]['widget_name'];
	$widget_id = $params[0]['widget_id'];
	// var_dump($widget_name);

	if ( 'Custom Footer' === $widget_name ) {

      if ( have_rows( 'custom_footer', 'widget_' . $widget_id ) ) :
        ?>

        <h2>For retail leasing, contact</h2>

        <div class="footer-contacts">

        <?php
        while ( have_rows( 'custom_footer', 'widget_' . $widget_id ) ) :
          the_row();

          $staff_member = get_sub_field('staff_member');

          $meta = get_post_meta( $staff_member->ID, 'staff_meta', true );
          ?>

          <div class="footer-contact" >
            <p class="footer-contact-field name" ><?php echo $staff_member->post_title; ?></p>

            <?php if ($meta['tel']) { ?>
              <p class="footer-contact-field tel" ><?php echo $meta['tel']; ?></p>
            <?php }?>

            <?php if ($meta['email']) { ?>
              <a href="mailto:<?php echo $meta['email']; ?>" >
                <p class="footer-contact-field email" ><?php echo $meta['email']; ?></p>
              </a>
            <?php }?>
          </div>

          <?php
        endwhile;

        ?>

        </div>

        <?php
      endif;
	}

	return $params;
}

// function awts_get_widget_id($widget_instance){
//   // Check if the widget is already saved or not.
//   if ($widget_instance->number=="__i__"){
//   echo "<p><strong>Widget ID is</strong>: Pls save the widget first!</p>" ;
//   } else {
//   echo "<p><strong>Widget ID is: </strong>" .$widget_instance->id. "</p>";
//   }
// }
// add_action('in_widget_form', 'awts_get_widget_id');

?>
