<?php
error_reporting(E_ALL & ~E_NOTICE);
?>

<?php get_template_part('common'); ?>

<div id="wrapper">
<?php get_header(); ?>
<div id="container">
    <div id="is404-black" style="background:url(<?php bloginfo('template_directory'); ?>/img/404background2.png);">
        <h1 id="error404-h1">404 Not found!<br><small>あなたは未知のページへのアクセスを試みた</small></h1>
        <div id="respawn-buttons">
            <a href="/">Respawn</a>
            <a href="/">Title screen</a>
        </div>
    </div>
</div><!-- /#container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>