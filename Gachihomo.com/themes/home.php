<?php get_header(); ?><!-- 　ヘッダー部分（上部分）呼び出し　 -->

<div id="body2">
	<div id="content"><!-- 　記事コンテンツ（中央部分）　 -->

	<p class="title">記事一覧  </p>

	<?php get_template_part('pagenation'); ?>

	<?php if(have_posts()): while(have_posts()): 
	the_post(); ?>
  	<?php get_template_part('content'); ?>
	<?php endwhile; endif; ?>

	<?php get_template_part('pagenation'); ?>
	</div>
		<?php get_sidebar('left'); ?><!-- 　左サイドバー　 -->
</div>

<?php get_sidebar('right'); ?><!-- 　右サイドバー　 -->
<?php get_footer(); ?><!-- 　フッター部分（下部分）呼び出し　 -->