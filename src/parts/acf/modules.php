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


        include locate_template('/parts/acf/modules/text-and-image.php');

        break;

      case 'images' :

        $anchor = get_sub_field('anchor');
        $number_images = get_sub_field('number_images');
        $image_1 = get_sub_field('image_1');
        $image_2_start = get_sub_field('image_2_start');
        $image_2 = get_sub_field('image_2');
        $stack_on_tablet = get_sub_field('stack_on_tablet');


        include locate_template('/parts/acf/modules/images.php');

        break;

      case 'team_members' :

        $anchor = get_sub_field('anchor');
        $category = get_sub_field('category');

        include locate_template('/parts/acf/modules/team-members.php');

        break;

      case 'blog_posts' :

        $anchor = get_sub_field('anchor');

        include locate_template('/parts/acf/modules/blog-posts.php');

        break;

      case 'timeline' :

        $anchor = get_sub_field('anchor');

        include locate_template('/parts/acf/modules/timeline.php');

        break;

      case 'shortcode' :

        include locate_template('/parts/acf/modules/shortcode.php');

        break;

      case 'wysiwyg' :

        include locate_template('/parts/acf/modules/wysiwyg.php');

        break;

      case 'contact_form' :

        include locate_template('/parts/acf/modules/contact-form.php');

        break;
    }

  endwhile;
endif;

?>
