<!-- 　ヘッダーの呼び出し　 -->
<?php get_header(); ?>

<div id="main">
	<!-- 　左サイドバー　 -->
	<?php get_sidebar('left'); ?>
	
	<!-- 　記事コンテンツ（中央部分）　 -->
	<div id="content">
		
		<!-- 記事タイトル　-->
		<div id="breadcrumb">
			<p class="title">記事一覧  </p>
		</div>
		
		<!-- 投稿記事の中身を表示 -->
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
			<!-- content.php読み込みから、content-list.phpに変更
				2/3　contentに戻す。							-->
			<?php get_template_part('content',"list"); ?>
		<?php endwhile; endif; ?>
		
		<!-- ページネーション -->
		<?php get_template_part('pagenation'); ?>
		
	</div>
	<!-- 　右サイドバー　 -->
	<?php get_sidebar('right'); ?>
</div>

<!-- 　フッター部分（下部分）呼び出し　 -->
<?php get_footer(); ?>