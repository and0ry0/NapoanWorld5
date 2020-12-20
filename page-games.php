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

<h1>ゲーム一覧</h1>

<ul class="cattag gamelist">
<?php
  $terms = get_terms('games');
  foreach ( $terms as $term ) {
    echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
  }
?>
</ul>

</main>
<?php get_sidebar(); ?>
</div><!-- /#container -->

<?php get_footer(); ?>