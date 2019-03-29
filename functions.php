<?php

	$defaults = array(
	'default-image'          => get_template_directory_uri() . '/img/visual_1_pc.png', //デフォルト画像
	'random-default'         => false, //ランダム表示
	'width'                  => 0, //幅
	'height'                 => 140, //高さ
	'flex-height'            => false, //フレキシブル対応（高さ）
	'flex-width'             => false, //フレキシブル対応（幅）
	'default-text-color'     => '', //デフォルトのテキストの色
	'header-text'            => true, //ヘッダー画像上にテキストを表示する
	'uploads'                => true, //ファイルアップロードを許可する
	'wp-head-callback'       => '', 
	'admin-head-callback'    => '', 
	'admin-preview-callback' => '', 
);
add_theme_support( 'custom-header', $defaults );
?>