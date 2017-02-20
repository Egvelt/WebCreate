<!-- カテゴリー記事一覧 -->
<div class="post">
	<!-- 記事タイトル -->
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<!-- 　投稿日時　 -->
		<p class="postinfo"><?php echo get_the_date(); ?></p>
	</h2>
	
	<!-- ポストキャット -->
	<p class="postcat"><?php the_category(' '); ?></p>

	<!-- サムネイルの表示-->
	<p class="thumb">
		<?php if(has_post_thumbnail()): ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('thumbnail'); ?></a>
		<?php else: ?>
		<a href="<?php the_permalink(); ?>">
			<img src="<?php bloginfo('template_url'); ?>/image/no_image.png" alt="No Image" width="118" height="61" /></a>
		<?php endif; ?>
	</p>
	
	<!-- 本文の表示　抜粋 FALSE= さらに... を削除 -->
	<div id="caption">
		<?php the_content('',FALSE,''); ?>
		<!-- /* <?php the_excerpt(); ?>  */ -->
	</div>
	
	<!-- 続きボタン 記事一つ目のmore以下に広告 -->
	<?php if(get_the_ID() == return_latest_id()): ?>
		<p class="more"><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?> の続きを読む</a>
		</p>
		<!-- 広告スペース -->
		<div id="ad-space-post">
			<div class="ad-separate">
				<!-- ソース記述スペース -->
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- ガチホモ速報アドセンスその４ -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:300px;height:250px"
					 data-ad-client="ca-pub-5404210392034604"
					 data-ad-slot="1998898775"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<!-- 広告二つ目 -->
			<div class="ad-separate">
				<!-- ソース記述スペース -->				
			</div>
		</div>
	<?php else : ?>
		<p class="more"><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?> の続きを読む
		</a></p>
	<?php endif; ?>

	<!-- 文末情報表示欄 タグ&日時 -->
	<div id="info">
		<ul>
			<!-- タグの表示 -->
			<li>	
				<img src="<?php bloginfo('template_url'); ?>/image/tag.png" width="15px" height="15px" />
				<?php if(has_tag()): ?>
				<?php the_tags('タグ ： ','　・ '); ?>
				<?php else: ?>タグ ： なし
				<?php endif; ?>
			</li>
		</ul>
	</div>
</div>
