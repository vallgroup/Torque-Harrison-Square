<?php

$included_fields = get_field('include_sections');

// hero
if (in_array('hero',$included_fields)) {
  $url = get_the_post_thumbnail_url( null, 'large' );
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
?>

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
<?php
}
?>
