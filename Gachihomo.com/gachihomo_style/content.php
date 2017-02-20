<!-- content.php -->
<div class="post">
	<!-- 　タイトル　 -->
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<!-- 　投稿日時　 -->
		<p class="postinfo"><?php echo get_the_date(); ?></p>
	</h2>
	<!-- 　カテゴリー　 -->
	<p class="postcat"><?php the_category(' '); ?></p>
	
	<!-- SHAREボタン -->
	<div class="sharebtn">
		<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
	</div>
		
	<!-- サムネイルと本文の表示 content.phpではリンクしない -->
	<p class="thumb">
		<?php if(has_post_thumbnail()): ?>
			<?php the_post_thumbnail('thumbnail'); ?>
		<?php else: ?>
		<img src="<?php bloginfo('template_url'); ?>/image/no_image.png" alt="No Image" width="118" height="61" />
		<?php endif; ?>
	</p> 
	
	<!-- 本文の表示　FALSE= さらに... を削除 -->
	<?php the_content('',FALSE,''); ?>
	<!-- 記事の分割関数 -->
	<?php wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">《</span>',
		'after'       => '<span class="page-links-title"> 》</span></div>',
		'link_before' => '<span class="number">',
		'link_after'  => '</span>',
		)
	); ?>
	
	<!-- SHAREボタン -->
	<div id="sharebtn_bottom" class="sharebtn">
		<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
	</div>
	
	<!-- 文末情報表示欄 タグ&日時 -->
	<div id="info">
		<ul>
			<!-- タグの表示 -->
			<li>	
				<img src="<?php bloginfo('template_url'); ?>/image/tag.png" width="15px" height="15px" />
				<?php if(has_tag()): ?>
				<?php the_tags('タグ ： ','　'); ?>
				<?php else: ?>タグ ： なし
				<?php endif; ?>
			</li>
		</ul>
	</div>
	<!-- コメント欄 -->
	<p><br /></p>
	<?php comments_template('/comments.php',false) ;?>
</div>