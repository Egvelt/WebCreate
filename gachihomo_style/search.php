<!-- 　ヘッダーの呼び出し　 -->
<?php get_header(); ?>

<div id="main">
	<!-- 　左サイドバー　 -->
	<?php get_sidebar('left'); ?>
	
	<!-- 　記事コンテンツ（中央部分）　 -->
	<div id="content">
		<!-- パンくずリスト -->
		<div id="breadcrumb">
			<!-- 検索結果 見出し -->
			<p class="title">『<?php the_search_query(); ?>』の検索結果</p>
			
			<!-- パンくずリスト 記事タイトル-->
			<div>
				<?php the_title(); ?>
			</div>
			
			<!-- パンくずリスト 中間カテゴリー　-->
			<?php $postcat = get_the_category(); ?>
			<?php $catid = $postcat[0]->cat_ID; ?>
			<?php $allcats = array($catid); ?>
			<?php while(!$catid==0) {
				$mycat = get_category($catid);
				$catid = $mycat->parent;
				array_push($allcats, $catid);}
			array_pop($allcats);
			$allcats = array_reverse($allcats); ?>
			<?php foreach($allcats as $catid): ?>
			
			<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="<?php echo get_category_link($catid); ?>" itemprop="url">
					<span itemprop="title"><?php echo get_cat_name($catid); ?></span>
				</a> ›
			</div>
			<?php endforeach; ?>
			
			<!-- パンくずトップ -->
			<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="<?php echo home_url(); ?>" itemprop="url">
					<span itemprop="title">トップ</span>
				</a> ›
			</div>
		</div>
		<!-- パンくずリスト終了 -->
		
		<!-- 検索結果の表示 -->
		<?php query_posts('posts_per_page=-1&' . $query_string); ?>  
	
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<?php get_template_part('content','itiran'); ?>
		
		<!-- 検索にヒットしなかった場合 -->
		<?php endwhile; else: ?>
		<p>一致する記事は見つかりませんでした。<br />
			キーワードを変更してお試しください。</p>
		<!-- 検索フォームの表示 -->
		<?php echo get_search_form(); ?>
		<?php endif; ?>

		<?php get_template_part('pagenation'); ?>
	</div>
	<!-- 　右サイドバー　 -->
	<?php get_sidebar('right'); ?>
</div>

<!-- 　フッター部分（下部分）呼び出し　 -->
<?php get_footer(); ?>