<?php
error_reporting(E_ALL & ~E_NOTICE);
?>

<?php get_template_part('common');?>

<?php $hide_adsense = get_field('hide_adsense'); ?>
<?php if ( $hide_adsense == 1 ): ?>
  <style>.sense{display:none!important}</style>
<?php endif; ?>

<div id="wrapper">
<?php get_header(); ?>

<div id="pre-container">
  <div id="pre-main">
  <div id="pre-question">
  <h1><?php the_title(); ?>
    <?php
    $terms = get_the_terms( $post->ID, 'games' );
    if ($terms && ! is_wp_error($terms)): ?>
      <span id="single_games">
        <?php foreach($terms as $term): ?>
          <?php if($term->name == 'Minecraft'): ?>
            <span class="game <?php echo $term->slug; ?>">
              <a href="<?php echo get_term_link( $term->slug, 'games'); ?>">
                [<?php echo $term->name; ?>]
              </a>
            </span>
          <?php endif; ?>  
        <?php endforeach; ?>
      </span>
    <?php endif; ?>
  </h1>
  </div>
  <dl id="pre-answer">
  <dd><?php the_field("answer", $post->ID); ?></dd>
  </dl>
  </div>
</div>

<div id="container" class="single">

<main id="main">

<?php /*
<div id="article-top-sense" class="sense">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 個別記事ページファーストビュートップレスポンシブ -->
<ins class="adsbygoogle"
     style="display:block"
     
     
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php */ ?>

<article class="" id="<?php the_ID(); ?>">

<?php
if ( get_the_tag_list() ) {
    echo get_the_tag_list( '<dl id="single_tags" class="article-tags"><dd>', '</dd><dd>', '</dd></dl>' );
}
?>

<!-- 記事ヘッダー、記事タイトル -->
<header id="single-header">
<small class="article-date">
    投稿日:<time datetime="<?php echo get_the_date('Y年m月d日'); ?>" pubdate="pubdate"><?php echo get_the_date('Y年m月d日'); ?></time><br>
    最終更新:<time datetime="<?php the_modified_date('Y年m月d日') ?>" pubdate="pubdate"><?php the_modified_date('Y年m月d日'); ?></time>
</small>
</header>

<!-- 記事本文 -->
<section class="article-inner">
<?php $current_page_number = get_query_var('page'); ?>
<?php if($current_page_number >= 1): ?>
    <?php $pages_defaults = array(
            'before'           => '<div class="pages-buttons" id="top-pages-buttons">' . __( '' ),
            'after'            => '</div>',
            'link_before'      => '<span>',
            'link_after'       => '</span>',
            'next_or_number'   => 'number',
            'separator'        => ' ',
            'nextpagelink'     => __( '前のページ' ),
            'previouspagelink' => __( '次のページ' ),
            'pagelink'         => '%',
            'echo'             => 1
        );
        wp_link_pages( $pages_defaults );
    ?>
    <?php global $disableAd;
      if($disableAd == false): ?>
    <div id="pager-top-sense" class="sense inner-sense">
    <small>スポンサーリンク</small>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
        style="display:block"
        
        
        data-ad-format="rectangle"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    <?php endif; ?>
<?php endif; ?>

<!-- サムネイル -->
<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>

	<?php if(strpos(get_the_content(),'id="more-')) :
global $more; $more = 0;
the_content(''); ?>

<div id="continue-sense" class="sense inner-sense">
  <small>スポンサーリンク</small>
  <br />
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- 記事内リード文下レスポンシブ -->
  <ins class="adsbygoogle"
     style="display:block"
     
     
     data-ad-format="auto"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>


<?php $more = 1;
the_content('', true );
else : the_content();
endif; ?>

<div id="moreinfo">
  <h2>もっと詳しい解説はこちら!</h2>
    <?php the_field('moreinfo'); ?>
</div>

<?php global $disableAd;
      if($disableAd == false): ?>
<div id="article-bottom-sense" class="sense inner-sense">
  <small>スポンサーリンク</small>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle"
      style="display:block"
      
      
      data-ad-format="rectangle"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>
<?php endif; ?>

<?php
$pages_defaults = array(
  'before'           => '<div class="pages-buttons" id="bottom-pages-buttons"><p>この記事はページ分割されています</p>' . __( '' ),
  'after'            => '</div>',
  'link_before'      => '<span>',
  'link_after'       => '</span>',
  'next_or_number'   => 'number',
  'separator'        => ' ',
  'nextpagelink'     => __( '前のページ' ),
  'previouspagelink' => __( '次のページ' ),
  'pagelink'         => '%',
  'echo'             => 1
);
wp_link_pages( $pages_defaults );
?>

</section>

<?php get_template_part('sharearea'); ?>

<div id="bottom-recommend">
<h2>この記事を読んだ人は、こんな記事も読んでいます</h2>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     
     ></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<!-- 
<h2>気まぐれピックアップ</h2>
    <div id="bottom-rp">
    <?php // get_template_part(relatedposts); ?>
    </div>
-->
</div>

<?php global $disableAd;
      if($disableAd == false): ?>
<div id="before-comment-sense" class="sense">
    <small>スポンサーリンク</small>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
        style="display:block"
        
        
        data-ad-format="rectangle">
    </ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
<?php endif; ?>

</article>
<!-- /記事全体 -->

</main>

</div><!-- /#container -->
<?php get_footer(); ?>