<aside id="napoan_sidebar">
	<form id="sidebar_search" action="<?php bloginfo('home'); ?>" method="get">
        	<input type="text" name="s" value="" placeholder="記事を検索" required />
        	<button type="submit"><span></span></button>
      	</form>
    <?php dynamic_sidebar('sidebar'); ?>
</aside>