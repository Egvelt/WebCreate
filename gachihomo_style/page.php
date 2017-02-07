<!-- 　ヘッダーの呼び出し　 -->
<?php get_header(); ?>

<div id="main">
	<!-- 　左サイドバー　 -->
	<?php get_sidebar('left'); ?>
	<!-- 　記事コンテンツ（中央部分）　 -->
	<div id="content">
		<?php if(have_posts()): while(have_posts()): 
		the_post(); ?>
		
		<div class="post">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		
		<?php endwhile; endif; ?>
		
		<?php get_template_part('pagenation'); ?>
	</div>
	<!-- 　右サイドバー　 -->
	<?php get_sidebar('right'); ?>
</div>

<!-- 　フッター部分（下部分）呼び出し　 -->
<?php get_footer(); ?>