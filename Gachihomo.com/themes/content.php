<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!-- 　タイトル　 -->
<p class="postcat"><?php the_category(' '); ?></p><!-- 　カテゴリー　 -->

<?php the_content(); ?><!-- 　本文　 -->

<p class="postinfo"><?php echo get_the_date(); ?></p><!-- 　投稿日時　 -->
</div>