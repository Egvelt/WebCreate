
<!DOCTYPE html>
<html>
<head>

<meta charset="<?php bloginfo ('charset'); ?>" />
<title><?php wp_title('｜',true,'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />  
<?php wp_head(); ?>

</head>
<body>

<div id="header_1"><!-- ヘッダー -->

<?php if(get_header_image()): ?>
<a href="<?php echo home_url(); ?>"><img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('name'); ?> " title="<?php bloginfo('name'); ?> " /></a>
<?php endif; ?>

<div id="rssf">
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/image/feed.png" alt="RSS FEED"width="28" height="28" /></a>
</div>
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p id="desc"><a href="<?php echo home_url(); ?>"><?php bloginfo('description'); ?></a></p>
</div>

<div id="nav">
<?php wp_nav_menu(array(
  'theme_location' => 'navigation'
)); ?>
</div>

<div id="container"><!-- コンテナ -->


