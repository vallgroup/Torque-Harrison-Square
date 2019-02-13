<?php

$modules = 'modules';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'text_and_image' :

        $anchor = get_sub_field('anchor');
        $align = get_sub_field( 'align' );
        $background_color = get_sub_field('background_color');
        $title_text_size = get_sub_field('title_text_size');
        $image = get_sub_field( 'image' );
        $title = get_sub_field( 'title' );
        $content = get_sub_field( 'content' );
        $cta = get_sub_field('cta');


        include locate_template('/parts/acf/modules/text_and_image.php');

        break;
    }

  endwhile;
endif;

?>
