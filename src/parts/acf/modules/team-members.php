<?php

$query = new WP_Query( array(
    'post_type'       => 'torque_staff',
    'posts_per_page'  => -1,
    'tax_query'       => array(
  		 array(
  		  'taxonomy' => 'staff_category',
        'field'    => 'term_id',
  			'terms'    =>  $category,
  		 ),
	   ),
));

if ( $query->have_posts() ) {
  ?>

  <div <?php if ($anchor) { ?> id="<?php echo $anchor; ?>" <?php } ?> class="team-members-module">

  <?php

  while ( $query->have_posts() ) {
    $query->the_post();

    $meta = get_post_meta( get_the_ID(), 'hsq_staff_meta', true );

    ?>

    <div class="team-member bg-dark-grey" >

      <div class="team-member-image" >
        <img src="<?php echo get_the_post_thumbnail_url(null, 'large') ?>" />
      </div>

      <div class="team-member-detail" >

      <h2><?php the_title(); ?></h2>

      <p class="team-member-content" ><?php the_content(); ?></p>

      <?php if ($meta && $meta['website']) { ?>
        <a href="<?php echo $meta['website']; ?>" >
          <button class="team-member-website" >Visit Website</button>
        </a>
      <?php }?>

      </div>

    </div>

    <?php
  }

  ?>

  </div>

  <?php
}


wp_reset_postdata();

?>
