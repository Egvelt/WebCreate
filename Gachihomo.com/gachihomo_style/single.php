<!-- singel.php
	 ヘッダーの呼び出し -->
<?php get_header(); ?>

<div id="main">
	<!-- 　左サイドバー　 -->
	<?php get_sidebar('left'); ?>
	
	<!-- 　記事コンテンツ（中央部分）　 -->
	<div id="content">
		
		<!-- アフィリエイト空間 -->
		<div id="ad-space-center">
			<!-- 以下ソース　Google adsence -->
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- ガチホモ速報アドセンスその２ -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:735px;height:90px"
				 data-ad-client="ca-pub-5404210392034604"
				 data-ad-slot="4173635975"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>	
		
		<!-- パンくずリスト -->
		<div id="breadcrumb">
			<!-- パンくずリスト 記事タイトル-->
			<div><?php the_title(); ?></div>
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
		
		<!-- 記事見出し -->
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<?php get_template_part('content'); ?>
		
		<!-- ページネーション -->
		<p class="pagenation">
			<span class="oldpage"><?php previous_post_link(); ?></span>
			<span class="newpage"><?php next_post_link(); ?> </span>
		</p>
		<?php endwhile; endif; ?>
		<?php get_template_part('pagenation'); ?>
		
	</div>
	<!-- 　右サイドバー　 -->
	<?php get_sidebar('right'); ?>
</div>

<!-- 　フッター部分（下部分）呼び出し　 -->
<?php get_footer(); ?>