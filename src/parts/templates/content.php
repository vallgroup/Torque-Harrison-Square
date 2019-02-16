<div class="post-single">
  <div class="post-single-content" >
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>
  </div>
</div>

<?php


if ( have_rows( 'image_rows' ) ):

  while ( have_rows( 'image_rows' ) ) : the_row();

    $images = get_sub_field('images');

    if ($images) {
      $number_images = $images['number_images'];
      $image_1 = $images['image_1'];
      $image_2_start = $images['image_2_start'];
      $image_2 = $images['image_2'];

      include locate_template('/parts/acf/modules/images.php');
    }

  endwhile;
endif;
?>
