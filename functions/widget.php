<?php
// ウィジェット有効化
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'サイドバーのウィジェット',
        'id' => 'sidebar',
        'before_widget' => '<div id="%1$s" class="sidebar-block">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'フッターのウィジェット',
        'id' => 'footer-widget',
        'before_widget' => '<div id="%1$s" class="footer-block">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}
?>