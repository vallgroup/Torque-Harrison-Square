<div
  <?php if ($anchor) { ?> id="<?php echo $anchor; ?>" <?php } ?>
  class="row text-and-image-section <?php echo $align; ?> <?php echo $title_text_size; ?> bg-<?php echo $background_color; ?>">

  <div class="image-wrapper" >
    <img src="<?php echo $image; ?>" />
  </div>

  <div class="content-wrapper" >
    <?php if ($title) { ?>
      <?php if ($title_text_size === 'large') { ?>
        <h1><?php echo $title; ?></h1>
      <?php } else { ?>
        <h2><?php echo $title; ?></h2>
      <?php } ?>
    <?php } ?>

    <?php if ($content) { ?>
      <div class="content"><?php echo $content; ?></div>
    <?php } ?>

    <?php if ($cta) { ?>
      <div class="cta-wrapper" >
        <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>">
          <button><?php echo $cta['title']; ?></button>
        </a>
      </div>
    <?php } ?>
  </div>

</div>
