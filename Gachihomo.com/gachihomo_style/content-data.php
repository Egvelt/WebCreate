<!-- 日時別 コンテントリスト -->
<div id="data">
	<li>
		<!-- サムネイルの表示 -->
		<div id="thumb">
			<?php if(has_post_thumbnail()): ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('mini100'); ?>
				</a>
			<?php else: ?>
				<img src="<?php bloginfo('template_url'); ?>/image/no_image.jpg" alt="No Image" width="100" height="100" />
			<?php endif; ?>
		</div>
		
		<!-- 説明文　-->
		<div id="explain">
			<h1>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
				<span>（<?php echo get_the_date(); ?>）</span>		
			</h1>
			<!-- 抜粋文 -->
			<?php the_excerpt(); ?>
			<!-- SHAREボタン -->
			<div class="sharebtn">
				<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
			</div>
		</div>
	</li>
</div>