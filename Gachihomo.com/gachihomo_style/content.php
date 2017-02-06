<div class="post">
	<!-- 　タイトル　 -->
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<!-- 　カテゴリー　 -->
	<p class="postcat"><?php the_category(' '); ?></p>

	<!-- 　本文　 -->
	<?php the_content(); ?>
	
	<!-- 文末情報表示欄 タグ&日時 -->
	<div id="info">
		<ul>
			<!-- タグの表示 -->
			<li>	
				<img src="image/chip.png" width="15px" height="15px" />
				<?php if(has_tag()): ?>
				<?php the_tags('タグ ： ','　・ '); ?>
				<?php endif; ?>
			</li>
			<!-- 　投稿日時　 -->
			<li>
				<p class="postinfo"><?php echo get_the_date(); ?></p>
			</li>
		</ul>
	</div>
</div>