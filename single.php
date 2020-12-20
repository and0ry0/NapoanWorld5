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
<h1 class="article-title" itemprop="name">
    <?php the_title(); ?>
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
    <span class="single-article-introduction">
      <?php the_field("introduction", $post->ID); ?>
    </span>
    
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
  'before'           => '<p>この記事はページ分割されています</p><div class="pages-buttons" id="bottom-pages-buttons">' . __( '' ),
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

<div class="article-pager">
<ul>
<?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
  <?php if( has_post_thumbnail($prevpost->ID)): ?>
    <?php
      $image_id = get_post_thumbnail_id($prevpost->ID);
      $image_url = wp_get_attachment_image_src($image_id, 'aside-nav-img');
    ?>
  <?php endif; ?>
<li class="prev">
  <a href="<?php echo get_permalink($prevpost->ID); ?>">
    <span class="pager-title"><?php echo esc_attr($prevpost->post_title); ?></span>
  </a>
  <div class="bg" style="background-image: url(<?php echo $image_url[0]; ?>)"></div>
</li>
<?php else: ?>
<li class="prev none">
前の記事はありません
</li>
<?php endif; ?>

<?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
  <?php if( has_post_thumbnail($nextpost->ID)): ?>
    <?php
      $image_id = get_post_thumbnail_id($nextpost->ID);
      $image_url = wp_get_attachment_image_src($image_id, 'aside-nav-img');
    ?>
  <?php endif; ?>
<li class="next">
  <a href="<?php echo get_permalink($nextpost->ID); ?>">
    <?php echo esc_attr($nextpost->post_title); ?>
  </a>
  <div class="bg" style="background-image: url(<?php echo $image_url[0]; ?>)"></div>
</li>
<?php else: ?>
<li class="next none">
次の記事はまだありません
</li>
<?php endif; ?>

</ul>
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

<section id="comments">
<h1 class="article-option-title" id="commentform">コメント</h1>
<?php
    if( date('U') - get_the_time('U') > 60*60*24*365 && in_category('36') ) { ?>
    <div class="old-message">
        お待ち! この記事は<b>最後の更新から1年以上経過している古い記事</b>だ。新しいバージョンに合わせて装置を作り直してスクショを取り直して解説を書き直す面倒臭さが君には分かるかい?
    </div>
<?php } ?>
<?php comments_template(); ?>
    <?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>


</section>

</article>
<!-- /記事全体 -->

</main>

</div><!-- /#container -->
<?php get_footer(); ?>