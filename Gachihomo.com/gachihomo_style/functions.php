<?php

/***************************************
 Bootstrapのスクリプトとスタイルをエンキュー
****************************************/
function my_bootstrap_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-3.3.7-					dist/css/bootstrap.min.css');
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-3.3.7-	dist/js/bootstrap.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );

/***************************
 カスタムヘッダーとろロゴ情報
***************************/
add_custom_image_header('','admin_header_style');
function admin_header_style() {}
define('NO_HEADER_TEXT',true);
define('HEADER_IMAGE','%s/image/Logo.png');
define('HEADER_IMAGE_WIDTH',266);
define('HEADER_IMAGE_HEIGHT',137);

/*************************************
  カスタムメニュー　ナビゲーションメニュー
*************************************/
register_nav_menus(array(
  'navigation' => 'ナビゲーションバー'
));

/************
 ウィジェット
************/
register_sidebar(array(
  'name' => '左サイドバー'
));
register_sidebar(array(
  'name' => '右サイドバー'
));

//WordPressのバージョン情報の出力を停止
//remove_action('wp_head','wp_generator');

//RSSフィードの情報を出力
add_theme_support('automatic-feed-links');

//jQueryの設定を出力
add_action('wp_head', 'myScript', 1);
function myScript() {
  wp_enqueue_script('jquery');
}

//エディタ・スタイルシート
add_editor_style();

//ギャラリーのスタイルシートの出力を停止
add_filter('use_default_gallery_style', '__return_false');


/***********
  投稿情報
***********/
//アイキャッチ画像
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 300, true);

// 自動生成する画像サイズ
add_image_size('mini50', 50, 50, true);
add_image_size('mini100', 100, 100, true); 

//概要（抜粋）の省略記号
function my_excerpt_more($more) {
	return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');

//概要（抜粋）の文字数
function my_excerpt_mblength($length) {
	return 90;
}
add_filter('excerpt_mblength', 'my_excerpt_mblength');


?>