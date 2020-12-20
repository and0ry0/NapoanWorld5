<?php 
// サムネイル機能を有効化
add_theme_support( 'post-thumbnails', array( 'post', 'qanda' ) );

// Webサイト全体の画像をResponsive images機能の対象から外す
// add_filter( 'wp_calculate_image_srcset', '__return_false' );

//-----------------------------------------------//
// cloudinaryフォーマットとクオリティの自動化を付加
//-----------------------------------------------//
/*
function call_back($buffer) {
    $buffer = preg_replace('#https://res.cloudinary.com/napoan-com/image/u(.+?)/v#','https://res.cloudinary.com/napoan-com/image/upload/w_650,c_limit,f_auto,q_auto/v',$buffer); //HTML出力で置き換える処理
    return $buffer;
}
 
function buf_start() { ob_start("call_back"); }
function buf_end() { ob_end_flush(); }
 
add_action('after_setup_theme', 'buf_start');
add_action('shutdown', 'buf_end');

*/
?>