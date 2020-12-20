<!DOCTYPE html>
<html lang="ja">

<!--
WordPress Original Theme "NapoanWorld5"
What you see is what you need.
Designed by Ryo Ando aka nimuiha.
-->

<?php
error_reporting(E_ALL & ~E_NOTICE);
?>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />


<!-- レスポンシブ -->
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


<meta name="mobile-web-app-capable" content="yes">

<meta name="format-detection" content="telephone=no,address=no,email=no">

<!-- アイコン　-->
<link rel="icon" sizes="192x192" href="<?php bloginfo('template_directory'); ?>/img/icon.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="ナポアンドットコム">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/icon-180x.png">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/img/icon.png">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php bloginfo('template_directory'); ?>/img/icon.png">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/img/icon.png">
<meta name="msapplication-TileColor" content="#fff">

<?php if( is_single() ): ?>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
<link rel="alternate" hreflang="ja" href="<?php the_permalink(); ?>">
        <?php endwhile; ?>
    <?php endif; ?>
<?php elseif( is_home() ): ?>
<link rel="alternate" hreflang="ja" href="<?php echo home_url(); ?>">
<?php endif; ?>

<meta name="author" content="Ryo Ando">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap&subset=japanese" rel="stylesheet">

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>?2020022403">
<?php if(get_post_meta($post->ID,'tw-emoji',true)): ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/twemoji-awesome.css">
<?php endif; ?>


<title>
<?php if(is_home()): ?>
<?php bloginfo('name'); ?><?php if(get_query_var('paged')): ?><?php echo ' - ページ'.get_query_var('paged'); ?><?php endif; ?>

<?php elseif(is_page()): ?>
<?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>

<?php elseif(is_single()): ?>

<?php wp_title(''); ?>


  <?php $terms = get_the_terms( $post->ID, 'games' );
    if ($terms && ! is_wp_error($terms)): ?>
        <?php foreach($terms as $term): ?>
        <?php if($term->name == 'Minecraft'): ?>
          [<?php echo $term->name; ?>]
        <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>


 ｜ <?php bloginfo('name'); ?>

<?php elseif(is_category()): ?>
<?php single_cat_title() ?> ｜ <?php bloginfo('name'); ?>

<?php elseif(is_archive() && !is_tax()): ?>
<?php $postType = get_queried_object(); ?>
<?php echo esc_html($postType->labels->singular_name); ?>一覧 ｜ <?php bloginfo('name'); ?>

<?php elseif(is_tag()): ?>
<?php single_tag_title() ?> ｜ <?php bloginfo('name'); ?>

<?php elseif(is_tax()): ?>
    <?php 
        $taxonomy = $wp_query->get_queried_object();
        $tax_name = $taxonomy->name;
        echo $tax_name;
    ?>のニュース・役立ち記事一覧   | <?php bloginfo('name'); ?>

<?php elseif(is_author()): ?>
<?php the_author(); ?>が投稿した記事一覧 ｜ <?php bloginfo('name'); ?>

<?php elseif(is_month()): ?>
<?php the_time("Y年m月") ?>の記事一覧 ｜ <?php bloginfo('name'); ?>

<?php elseif(is_year()): ?>
<?php the_time("Y年") ?>の記事一覧 ｜ <?php bloginfo('name'); ?>

<?php elseif(is_search()): ?>
<?php echo get_search_query(); ?> を含む記事 ｜ <?php bloginfo('name'); ?>

<?php elseif(is_404()): ?>
404 Not found - お探しのページは見つかりませんでした | <?php bloginfo('name'); ?>

<?php else: ?>
<?php bloginfo('name'); ?>

<?php endif; ?>
</title>

<?php wp_deregister_script( 'jquery' ); ?>
<?php wp_head(); ?>
<?php get_template_part('script'); ?>

<!-- Norton認証 -->
<meta name="norton-safeweb-site-verification" content="0v-isxogs8yv8kgmd0kquoqrujlsrhk332spvwwj53gvu95l9a4focispljtihhnl-jznwgdbrpr3ds0ix1jdir62bjmxyycm57mayfcg1lgrdd9etcmojfn0thf5619" />

<!-- Adsesnse自動広告 -->
<?php if(is_single()): ?>
<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9812573632041546",
          enable_page_level_ads: true
     });
</script> -->
<?php endif; ?>

</head>

<?php
	$catSlug='';
	if(is_single()) {
		$catCache = get_the_category();
		$catSlug .= $category[0]->slug;
	}
?>
<body <?php body_class($catSlug); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WPT2KT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPT2KT');</script>
<!-- End Google Tag Manager -->

<svg style="display:none;" version="1.1" xmlns="//www.w3.org/2000/svg">
<defs>
  <symbol id="logo-2020"><path d="M43.53 59.25l-28-28v28H0V0h6.32l28 28V0h15.6v59.25zM56.2 59.25L83.82 0h7l27.88 59.25h-15.5l-3.63-7.74H75.28l-3.55 7.74zm25.17-20.86h12.08l-6-13zM124.9 0h25a21.77 21.77 0 01.3 43.53h-9.71v15.72H124.9zm15.56 30.09h9.64a8.5 8.5 0 100-17h-9.64zM206.66 0a29.63 29.63 0 11-29.54 29.7A29.7 29.7 0 01206.66 0zm0 15.48a14.14 14.14 0 1014.14 14.14 14.11 14.11 0 00-14.14-14.14zM234.71 59.25L262.35 0h7l27.89 59.25h-15.53l-3.64-7.74h-24.25l-3.55 7.74zm25.2-20.86h12.08l-6-13zM346.96 59.25l-28-28v28h-15.52V0h6.31l28.05 28V0h15.56v59.25zM367.03 46.61a6.11 6.11 0 016.24 6.24 6.24 6.24 0 11-12.48 0 6.11 6.11 0 016.24-6.24zM418.93 19.59a13.83 13.83 0 00-10-3.87 13.45 13.45 0 00-13.91 13.9 14.08 14.08 0 0023.86 10l11.06 10.9a29.62 29.62 0 11-21-50.48 29.31 29.31 0 0120.85 8.61zM465.3 0a29.63 29.63 0 11-29.54 29.7A29.7 29.7 0 01465.3 0zm0 15.48a14.14 14.14 0 1014.14 14.14 14.11 14.11 0 00-14.14-14.14zM535.2 21.96l24.09-22h7v59.29H550.7V28.83l-15.5 14.14-15.55-14.06v30.34h-15.64V0h7z"/></symbol>

  <symbol id="logo-small">
    <path d="M0 0h80v80H0z"/>
    <path fill="#fff" d="M12 14v21h7v-7h7v-7h28v7h7v7h7V14H12zM26 35v13h7V35h-7M47 35v13h7V35M26 55v7h28v-7"/>
  </symbol>
  <symbol id="logo-naname">
    <path fill="#2687e8" d="M120 0v45h-15V30H90V15H30v15H15v15H0l30 30V45h15v30H30l15 15h45v15H30l300 300h60v-15l-15-15h15v-30l-30-30h15l30 30h15v-45zM90 75H75V45h15z"/>
  </symbol>

  <symbol id="discord-logo">
   <path d="M104.4 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zM140.9 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1s-4.5-11.1-10.2-11.1z"/><path d="M189.5 20h-134C44.2 20 35 29.2 35 40.6v135.2c0 11.4 9.2 20.6 20.5 20.6h113.4l-5.3-18.5 12.8 11.9 12.1 11.2 21.5 19V40.6c0-11.4-9.2-20.6-20.5-20.6zm-38.6 130.6s-3.6-4.3-6.6-8.1c13.1-3.7 18.1-11.9 18.1-11.9-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.5 4.3-9.6 1.8-18.4 1.3-25.9-.1-5.7-1.1-10.6-2.7-14.7-4.3-2.3-.9-4.8-2-7.3-3.4-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.4-.3-1.8-1-2.8-1.7-2.8-1.7s4.8 8 17.5 11.8c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28.1-10.5 28.1-10.5l1 1.2c-18 5.2-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.2-6 22.7-6.3.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.6 0 0-7.9-7.5-24.9-12.7l1.4-1.6s13.7-.3 28.1 10.5c0 0 14.4 26.1 14.4 58.3 0 0-8.5 14.5-30.6 15.2z"/>
  </symbol>

  <symbol id="twitter-logo">
    <path d="m302 70a195 195 0 0 1 -299 175 142 142 0 0 0 97 -30 70 70 0 0 1 -58 -47 70 70 0 0 0 31 -2 70 70 0 0 1 -57 -66 70 70 0 0 0 28 5 70 70 0 0 1 -18 -90 195 195 0 0 0 141 72 67 67 0 0 1 116 -62 117 117 0 0 0 43 -17 65 65 0 0 1 -31 38 117 117 0 0 0 39 -11 65 65 0 0 1 -32 35"/>
  </symbol>
</defs>
</svg>