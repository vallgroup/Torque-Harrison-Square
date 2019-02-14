<?php

$included_fields = get_field('include_sections');

// hero
$url = get_the_post_thumbnail_url( null, 'large' );

if ($url) {
?>

  <img src="<?php echo $url; ?>" class="hero-image" />

<?php
}


// sumarry
if (in_array('summary',$included_fields)) {
  $page_summary = get_field('page_summary');

  $subheading = $page_summary['subheading'];
  $heading = $page_summary['heading'];
  $summary = $page_summary['summary'];


  // if page is a child, use parent id, otherwise use it's own id
  $parent = $post->post_parent !== 0 ? $post->post_parent : $post->ID;

  $has_children = count(get_pages( array( 'child_of' => $parent ) ));

  $parent_class = $has_children ? 'has-child-links' : '';
  ?>

  <div class="summary-section <?php echo $parent_class; ?>" >

    <?php if ($has_children) { ?>
      <div class="child-links-wrapper" >
        <h3>LEARN MORE ABOUT HARRISON SQUARE</h3>
        <?php include locate_template('/parts/shared/heirarchy/child-links.php'); ?>
      </div>
    <?php } ?>

    <div class="summary-wrapper" >

      <?php if ($subheading) { ?>
        <h4><?php echo $subheading; ?></h4>
      <?php } ?>

      <?php if ($heading) { ?>
        <h1><?php echo $heading; ?></h1>
      <?php } ?>

      <?php if ($summary) { ?>
        <div class="summary" >
          <?php echo $summary; ?>
        </div>
      <?php } ?>
    </div>

  </div>

<?php } ?>
