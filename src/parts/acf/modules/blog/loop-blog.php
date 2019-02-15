<div class="loop-blog" >

  <div class="image-position">
    <a href="<?php the_permalink(); ?>" target="_blank" ref="noopener noreferrer" >
      <div class="image-size">
        <img src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" />
      </div>
    </a>
  </div>

  <a href="<?php the_permalink(); ?>" target="_blank" ref="noopener noreferrer" >
    <h2><?php the_title(); ?></h2>
  </a>

  <div class="excerpt" ><?php the_excerpt(); ?></div>

  <a href="<?php the_permalink(); ?>" target="_blank" ref="noopener noreferrer" >
    <button>Read More</button>
  </a>

</div>
