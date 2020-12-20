<?php
error_reporting(E_ALL & ~E_NOTICE);
?>

<?php get_template_part('common');?>


<?php if(get_post_meta($post->ID,'hide_adsense',true) == 'true'): ?>
<!-- この記事では広告非表示 -->
<style>.sense{display:none!important}</style>
<?php endif; ?>

<div id="wrapper">

<?php get_header(); ?>

<div id="container" class="single">

<main id="loop">

<h1>タグ一覧</h1>

<?php
// パラメータを指定
$args = array(
	// タグ名順で指定
    'orderby' => 'name',
    // 昇順で指定
    'order' => 'ASC'
);
$posttags = get_tags( $args );

if ( $posttags ){
	echo ' <ul class="cattag taglist"> ';
	foreach( $posttags as $tag ) {
		echo '<li><a href="'. get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li>';
	}
	echo ' </ul> ';
}
?>

</main>
<?php get_sidebar(); ?>
</div><!-- /#container -->

<?php get_footer(); ?>