<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Torque
 */

$included_fields = get_field('include_sections');

if (in_array('modules',$included_fields)) {
  get_template_part('/parts/acf/modules');
}

?>
