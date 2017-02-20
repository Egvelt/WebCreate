<div class="post">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="postcat"><?php the_category(' '); ?></p>

<p class="thumb">
<?php if(has_post_thumbnail()): ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/image/no_image.jpg" alt="No Image" width="150" height="150" /></a>
<?php endif; ?>
</p>
<?php the_excerpt(); ?>
<p class="more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>

<p class="postinfo">
<?php echo get_the_date(); ?>
</p>
</div>
