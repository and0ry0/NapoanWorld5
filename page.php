<?php
error_reporting(E_ALL & ~E_NOTICE);
?>

<?php get_template_part('common'); ?>


<?php if(get_post_meta($post->ID,'hide_adsense',true) == 'true'): ?>
<!-- この記事では広告非表示 -->
<style>.sense{display:none!important}</style>
<?php endif; ?>

<div id="wrapper">

<?php get_header(); ?>

<div id="container" class="single">

<main id="main">

<!-- 記事全体 -->

<article class="" id="<?php the_ID(); ?>">

<header id="single-header">
<small class="article-date">
    <time datetime="<?php echo get_the_date('Y年m月d日'); ?>" pubdate="pubdate"><?php echo get_the_date('Y年m月d日'); ?></time>
</small>
<ul class="post-platforms">
    <?php
    $terms = get_the_terms( $post->ID, 'platforms' );
    if ($terms && ! is_wp_error($terms)): ?>
        <?php foreach($terms as $term): ?>
        <li class="<?php echo $term->slug; ?>" data-sort="<?php echo $term->term_id; ?>">
            <a href="<?php echo get_term_link( $term->slug, 'editions'); ?>">
                <?php echo $term->name; ?>
            </a>
        </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
<h1 class="article-title" itemprop="name"><a href="<?php echo get_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h1>
<?php
if ( get_the_tag_list() ) {
    echo get_the_tag_list( '<dl class="article-tags"><dd>', '</dd><dd>', '</dd></dl>' );
}
?>
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

<?php global $disableAd;
      if($disableAd == false): ?>
<div id="continue-sense" class="sense inner-sense">
  <small>スポンサーリンク</small>
  <br />
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle leadAd"
    style="display:block;"
    
    
    data-ad-format="rectangle"></ins>
  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
<?php endif; ?>

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

<?php get_sidebar(); ?>

</div><!-- /#container -->

<?php get_footer(); ?>