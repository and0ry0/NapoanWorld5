<div id="grand-footer">

  <div id="drawer-inner">
  </div>
  <div id="footer_widgets" class="footer_inner">
    <?php dynamic_sidebar('footer-widget'); ?>
  </div>
  <?php
  if ( !is_home() && function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
  }
  ?>
  <script type="text/javascript" src="//seal.securecore.co.jp/js/coressl_170-66.js"></script><noscript><img src="//seal.securecore.co.jp/image/noscript_170x66.png"></noscript>
  <p><small>当サイトではAmazonアソシエイトリンクを使用しています。記事の文章または画像を引用・転載する際や、アンテナサイトに掲載する場合は該当ページへのリンクをお願いします。当サイトはMojang ABおよびMicrosoft社とは無関係であり、記事を利用したことによる如何なる損害も管理人は責任を負いません。</small>
  </p>
  <small class="copyright">Copyright 2020 ナポアンドットコム <a href="/privacy-policy/">(プライバシーポリシー)</a></small>
</div>

</div><!-- /#wrapper -->

<?php wp_deregister_script( 'jquery' ); ?>
<?php wp_footer(); ?>
<?php get_template_part('script','footer'); ?>

<?php $string = $post->post_content;
// 記事中にpreタグがあったらhighlight.jsとCSSを読み込み
if(strpos($string,'<pre>') === false): ?>
<?php else: ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/ir_black.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script>
  $(function() {
    $('pre').each(function(i, block) {
      hljs.highlightBlock(block);
    });
  });
</script>
<?php endif; ?>

<?php $string = $post->post_content;
// 記事中にツールチップがあったらsimptipのCSSを読み込み
if(strpos($string,'simptip') === false): ?>
<?php else: ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/script/simptip.min.css" />
<?php endif; ?>

<?php global $disableAd;
      if($disableAd == true): ?>
      <style>.sense{display:none!important;}</style>
<?php endif; ?>

</body>
</html>