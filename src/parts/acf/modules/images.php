<?php

$anchor = isset($anchor) ? 'id="'.$anchor.'"' : '';

?>


<?php if ($number_images === '1' && $image_1) { ?>

  <div <?php echo $anchor; ?> class="row images-wrapper">
    <img class="gallery-col gallery-col-12" src="<?php echo $image_1; ?>"/>
  </div>

<?php } ?>



<?php if ($number_images === '2' && $image_1 && $image_2) {

$image_2_start_int = intval($image_2_start);

$col_2 = 12 - $image_2_start_int;
$col_1 =  $image_2_start_int;
$tablet_stack = isset($stack_on_tablet) && $stack_on_tablet ? 'stack-tablet' : '';

?>

  <div <?php echo $anchor; ?> class="row images-wrapper <?php echo $tablet_stack; ?>">
    <img class="gallery-col gallery-col-<?php echo $col_1; ?>" src="<?php echo $image_1; ?>"/>
    <img class="gallery-col gallery-col-<?php echo $col_2; ?>" src="<?php echo $image_2; ?>"/>
  </div>

<?php } ?>
