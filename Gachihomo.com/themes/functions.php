<?php

//カスタムヘッダー
add_custom_image_header('','admin_header_style');
function admin_header_style() {}
define('NO_HEADER_TEXT',true);
define('HEADER_IMAGE','%s/image/header_title.jpg');
define('HEADER_IMAGE_WIDTH',1050);
define('HEADER_IMAGE_HEIGHT',150);

//カスタムメニュー
register_nav_menus(array(
  'navigation' => 'ナビゲーションバー'
));

//ウィジェット
register_sidebar(array(
  'name' => '右サイドバー'
));
register_sidebar(array(
  'name' => '左サイドバー'
));



?>