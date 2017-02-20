<!-- 　ヘッダーの呼び出し　 -->
<?php get_header(); ?>

<div id="main">
	<!-- 　左サイドバー　 -->
	<?php get_sidebar('left'); ?>
	
	<!-- 　記事コンテンツ（中央部分）　 -->
	<div id="content">
		
		<!-- 記事見出し 月/年 -->
		<div id="list-title">
			<p class="title">
				<?php single_month_title(); ?>
				<?php if(is_year()): ?><?php echo get_the_date('Y'); ?>
				<?php endif; ?>
			</p>
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
		
		<?php if(have_posts()): while(have_posts()): 
		the_post(); ?>

		<?php get_template_part('content','data'); ?>

		<?php endwhile; endif; ?>

		<?php get_template_part('pagenation'); ?>
	</div>
	<!-- 　右サイドバー　 -->
	<?php get_sidebar('right'); ?>
</div>

<!-- 　フッター部分（下部分）呼び出し　 -->
<?php get_footer(); ?>