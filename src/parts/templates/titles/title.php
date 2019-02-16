<?php

// hero
$url = get_the_post_thumbnail_url( null, 'large' );

if ($url) {
?>

  <img src="<?php echo $url; ?>" class="hero-image" />

<?php
}
?>
