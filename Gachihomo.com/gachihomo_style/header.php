<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo ('charset'); ?>" />
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
	<title><?php wp_title('｜',true,'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />  
	
	<?php wp_head(); ?>
	<!-- Google -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-5404210392034604",
		enable_page_level_ads: true
		});
	</script>
</head>
	
<body <?php body_class(); ?>>
	<!-- ヘッダー -->
	<div id="header">
		<!-- ロゴ画像 -->
		<div id="logo">
			<?php if(get_header_image()): ?>
			<a href="<?php echo home_url(); ?>">
				<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>"
				height="<?php echo HEADER_IMAGE_HEIGHT; ?>"
				alt="<?php bloginfo('name'); ?> " title="<?php bloginfo('name'); ?> " />
			</a>
			<?php endif; ?>
		</div>
		<!-- ヘッドライン -->
		<div id="headline">
		</div>
		
		<div id="rssf">
			<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/image/feed.png" alt="RSS FEED"width="28" height="28" /></a>
		</div>
		
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		
		<!-- ロゴ画像下のサイト説明分
		<p id="desc"><a href="<?php echo home_url(); ?>"><?php bloginfo('description'); ?></a></p> -->
	
	<!-- ヘッダーここまで -->
	</div>

	<!-- ナビゲーションメニューバー -->
	<div id="nav">
		<?php wp_nav_menu(array('theme_location' => 'navigation')); ?>
		<div id="subinfo"><?php echo get_search_form(); ?></div>
	</div>

	<!-- コンテナ -->
	<div id="container">


