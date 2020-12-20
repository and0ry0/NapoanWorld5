<?php
error_reporting(E_ALL & ~E_NOTICE);
?>

<?php get_template_part('common');?>
<div id="wrapper">
<?php get_header(); ?>

<?php get_template_part('hero'); ?>
<div id="container">
    <main id="loop" role="main" data-title="ナポアンドットコム">
    <?php $counter = ""; ?>
    <?php if(have_posts()): while(have_posts()): the_post(); $counter++; ?>
        <?php get_template_part('post'); ?>
        <?php if ($counter == 4) { include (TEMPLATEPATH . '/archivefirstad.php'); } ?>
        <?php if ($counter == 8) { include (TEMPLATEPATH . '/archivead.php'); } ?>
    <?php endwhile; endif; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php get_template_part('loopbottomad'); ?>
    </main>
    <?php get_sidebar(); ?>
</div><!-- /#container -->

<?php get_footer(); ?>