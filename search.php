<?php
/*
Template Name: Search Page
*/
?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
?>

<?php get_template_part('common'); ?>
<div id="wrapper">
<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<div id="container">
    <main id="main" role="main" data-title="検索結果">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php get_template_part('post'); ?>
    <?php endwhile; endif; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </main>
</div><!-- /#container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>