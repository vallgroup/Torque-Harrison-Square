<div
  <?php if ($anchor) { ?> id="<?php echo $anchor; ?>" <?php } ?>
  class="row timeline-section">

  <?php
  if ( have_rows( 'events' ) ):
    while ( have_rows( 'events' ) ) : the_row();

    ?>

    <div class="timeline-row">

      <div class="timeline-detail">
        <h2 class="date">
          <?php echo get_sub_field('date'); ?>
        </h2>
        <div class="title">
          <?php echo get_sub_field('title'); ?>
        </div>
      </div>

      <div class="timeline-image">
        <img src="<?php echo get_sub_field('image'); ?>" />
      </div>

    </div>

    <?php

    endwhile;
  endif;
  ?>

</div>
