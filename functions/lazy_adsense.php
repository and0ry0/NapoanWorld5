<?php

//DNSプリフェッチ
function add_resource_hints( $hints, $relation_type ) {
  if( is_single() ){
    if ( 'dns-prefetch' === $relation_type ) {
        $hints[] = '//lh3.googleusercontent.com';
        $hints[] = '//pagead2.googlesyndication.com';
        $hints[] = '//adservice.google.co.jp';
        $hints[] = '//adservice.google.com';
        $hints[] = '//googleads.g.doubleclick.net';
    }
  }
    return $hints;
}
add_filter( 'wp_resource_hints', 'add_resource_hints', 10, 2 );

//adsbygoogle.jsの遅延読み込み
function my_register_ads_script(){
		wp_register_script( 'adsbygoogle-js', false, array(), false, true );
		wp_enqueue_script( 'adsbygoogle-js' );
		//JavaScript参考
		//https://www.bugbugnow.net/2019/05/GoogleAdSense-lazy-loading.html
		$ga_js = <<< EOF
!function(e,t){var n=!1;function o(){!1===n&&(n=!0,t.removeEventListener("scroll",o),t.removeEventListener("mousemove",o),t.removeEventListener("mousedown",o),t.removeEventListener("touchstart",o),function(){var t=e.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js";var n=e.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)}())}t.addEventListener("scroll",o),t.addEventListener("mousemove",o),t.addEventListener("mousedown",o),t.addEventListener("touchstart",o),t.addEventListener("load",function(){0==e.documentElement.scrollTop&&0==e.body.scrollTop||o()})}(document,window);
EOF;
		wp_add_inline_script('adsbygoogle-js', $ga_js, 'after');
}
add_action( 'wp_enqueue_scripts', 'my_register_ads_script', 100 );

?>