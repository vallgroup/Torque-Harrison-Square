<div class="row contact-form">

  <?php echo do_shortcode('[torque_contact_form]'); ?>

  <div class="contacts">

    <h5>For retail leasing, contact:</h5>
    <?php
    if ( have_rows( 'contact_page_info', 'option' ) ) :
      while ( have_rows( 'contact_page_info', 'option' ) ) : the_row();
        ?>
        <p class="contact-info"><?php echo get_sub_field('contact_info_1', 'option'); ?></p>
        <p class="contact-info"><?php echo get_sub_field('contact_info_2', 'option'); ?></p>
        <p class="contact-info"><?php echo get_sub_field('contact_info_3', 'option'); ?></p>
        <?php
      endwhile;
    endif;
    ?>

  </div>
</div>