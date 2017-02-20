<?php

/***************************************
 Bootstrapのスクリプトとスタイルをエンキュー
***************************************/
/*
function my_bootstrap_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-3.3.7-					dist/css/bootstrap.min.css');
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-3.3.7-	dist/js/bootstrap.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );  */

/***************************
 カスタムヘッダーとろロゴ情報
***************************/
function admin_header_style() {}
define('NO_HEADER_TEXT',true);
define('HEADER_IMAGE','%s/image/Logo.png');
define('HEADER_IMAGE_WIDTH',266);
define('HEADER_IMAGE_HEIGHT',137);
add_custom_image_header('','admin_header_style');

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

/*****************
 content-list.php
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
	return 160;
}
add_filter('excerpt_mblength', 'my_excerpt_mblength');

/*　最新記事のIDを取得する関数 */
function return_latest_id($cat_id=null) {
    global $wpdb;
 
    if(empty($cat_id)) {
        // 最新記事idの取得
        $row = $wpdb->get_row("SELECT ID FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC");
    } else {
        // カテゴリを指定した最新記事idの取得
        $cat_id = intval($cat_id);
        $row = $wpdb->get_row("SELECT p.ID FROM $wpdb->posts p LEFT JOIN $wpdb->term_relationships r ON p.ID=r.object_id WHERE p.post_type = 'post' AND p.post_status = 'publish' AND r.term_taxonomy_id = '$cat_id' ORDER BY p.post_date DESC");
    }
    return !empty( $row ) ? $row->ID : '0';
}


/* コメント欄と名前入力欄の位置を変更　*/
function move_comment_field( $fields ) {
  $comment_field = $fields['comment'];
  unset( $fields['comment'] );
  $fields['comment'] = $comment_field;
  
  return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );

//無記名のコメント投稿者名を変更する
function rename_anonymous_name($author) {
  if ( !$author || $author == __('Anonymous') ) {
    $author = '名無しのガチホモ';
  }
  return $author;
}
add_filter( 'get_comment_author', 'rename_anonymous_name' );

/* WordPressのバージョン情報の出力を停止
remove_action('wp_head','wp_generator'); */

//RSSフィードの情報を出力
add_theme_support('automatic-feed-links');

//jQueryの設定を出力
function myScript() {
  wp_enqueue_script('jquery');
}
add_action('wp_head', 'myScript', 1);

//エディタ・スタイルシート
add_editor_style('add_editor_style.css');
function custom_editor_settings( $initArray ) {
    $initArray['body_class'] = 'editor-area';
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

// 自動挿入のPタグBRタグ削除
remove_filter('the_content', 'wpautop');

//ギャラリーのスタイルシートの出力を停止
add_filter('use_default_gallery_style', '__return_false');




?>

