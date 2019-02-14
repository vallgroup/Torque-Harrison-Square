<?php

require_once( get_template_directory() . '/includes/utilities/torque-mega-menu-utilities.php' );

$items = Torque_Mega_Menu_Utilities::get_nav_menu_items_nested( 'primary' );

// render children after each parent so we can show them on mobile
function hsq_mega_menu_children( $parent ) {
  ob_start();
  ?>

  <div class="mega-menu-child-items-wrapper" data-parent-id="<?php echo $parent->ID; ?>">
    <?php echo Torque_Mega_Menu_Utilities::render_child_items($parent); ?>
  </div>

  <?php
  echo ob_get_clean();
}
add_action( Torque_Mega_Menu_Utilities::$post_parent_item_handle, 'hsq_mega_menu_children' );
?>

<div id="mega-menu">

  <div class="parent-items-wrapper" >
    <?php
    if ($items && sizeof($items) > 0) {
      echo Torque_Mega_Menu_Utilities::render_parent_items( $items );
    }
    ?>
  </div>

  <div class="children-items-wrapper" >
    <?php
      foreach ($items as $key => $parent) { ?>

        <div class="children-items-title"><?php echo $parent->title; ?></div>

        <?php
        echo hsq_mega_menu_children( $parent );
      }
    ?>
  </div>

</div>
