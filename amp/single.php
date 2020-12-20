<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action( 'amp_post_template_head', $this ); ?>
	<script async custom-element="amp-apester-media" src="https://cdn.ampproject.org/v0/amp-apester-media-0.1.js"></script>
	<style amp-custom>
		<?php $this->load_parts( array( 'style' ) ); ?>
		<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
	<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>

</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">
<svg class="displaynone" version="1.1" xmlns="//www.w3.org/2000/svg">
<defs>
  <symbol id="logo-svg-sprite">
    <rect x="150" y="225" width="75" height="150"/><rect x="375" y="225" width="75" height="150"/><rect x="150" y="450" width="300" height="75"/><polygon points="0 225 75 225 75 150 150 150 150 75 450 75 450 150 525 150 525 225 600 225 600 0 0 0 0 225"/>
  </symbol>
</defs>
</svg>
<amp-analytics type="googleanalytics">
<script type="application/json"> {
	"vars": { "account": "UA-44029484-2" },
	"triggers": {
		"trackPageview" : {
			"on": "visible",
			"request": "pageview"
		}
	}
}
</script>
</amp-analytics>

<?php $this->load_parts( array( 'header-bar' ) ); ?>

<article class="amp-wp-article">

	<header class="amp-wp-article-header">
		<h1 class="amp-wp-title"><?php echo wp_kses_data( $this->get( 'post_title' ) ); ?></h1>
		<?php $this->load_parts( apply_filters( 'amp_post_article_header_meta', array( 'meta-author', 'meta-time' ) ) ); ?>
	</header>

	<?php $this->load_parts( array( 'featured-image' ) ); ?>
	<div class="amp-wp-article-content">
		<?php echo $this->get( 'post_amp_content' ); // amphtml content; no kses ?>
	</div>

	<footer class="amp-wp-article-footer">
		<!-- <?php $this->load_parts( apply_filters( 'amp_post_article_footer_meta', array( 'meta-taxonomy', 'meta-comments-link' ) ) ); ?> -->
		<p class="comment-message">※AMP版表示ではコメントの投稿に対応しておりません。コメントを読んだり書いたりしたい場合は<a href="<?php echo get_permalink(); ?>">通常版にアクセス</a>してね！！</p>
		<p class="comment-message">※AMP版表示ではカテゴリ一覧とかのメニューの表示に対応しておりません。メニューを使いたい場合は<a href="<?php echo get_permalink(); ?>">通常版にアクセス</a>してね！！</p>
	</footer>

</article>

<?php $this->load_parts( array( 'footer' ) ); ?>

<?php do_action( 'amp_post_template_footer', $this ); ?>

</body>
</html>
