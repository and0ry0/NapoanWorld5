<article id="<?php the_ID(); ?>"  class="post 
<?php if (is_first()) :?>
first 
<?php endif; ?>
">

<a class="list-item-flex" href="<?php echo get_permalink(); ?>">
<div class="post-item-image" href="<?php echo get_permalink(); ?>">
    <?php if ( has_post_thumbnail() ): // サムネイルを持っているとき ?>
            <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
        <?php else: // サムネイルを持っていないとき ?>
            <img alt="NO IMAGE" title="NO IMAGE" width="600px" height="338px"/>
    <?php endif; ?>
</div>

<header class="article-header">
<div class="article-text">
<h1 class="article-title" itemprop="name">
	<?php the_title(); ?>
		
	<?php
    $terms = get_the_terms( $post->ID, 'games' );
    if ($terms && ! is_wp_error($terms)): ?>
      <span id="single_games">
        <?php foreach($terms as $term): ?>
          <?php if($term->name == 'Minecraft'): ?>
			     [<?php echo $term->name; ?>]
          <?php endif; ?>
        <?php endforeach; ?>
      </span>
    <?php endif; ?>
	</h1>
<span class="article-introduction">
	<?php the_field("introduction", $post->ID); ?>
</span>
</div>
<small class="article-data">
  <time datetime="<?php echo get_the_date('Y年m月d日'); ?>" pubdate="pubdate"><?php echo get_the_date('Y年m月d日'); ?></time>
</small>
</header>
</a>
<!-- /記事ヘッダー、記事タイトル -->
</article>
<!-- /記事全体 -->