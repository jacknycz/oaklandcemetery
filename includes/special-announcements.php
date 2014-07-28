<div class="green-header">
	<h3 class="title">News From Oakland</h3>
</div>

<ul class="special-announcements">
	<?php
	global $post;
	$args = array(
		'category' => 6,
		'numberposts' => 3
	);
	$news_articles = get_posts( $args );
	foreach($news_articles as $post) : setup_postdata($post); ?>
	
		<li>
			<?php if (has_post_thumbnail()): ?>
				<div class="thumb pull-left">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
			<?php endif; ?>
			<div class="description pull-left <?php if (!has_post_thumbnail()) { echo 'wide'; } ?>">
				<strong class="title"><?php the_title(); ?></strong>
				<?php echo get_the_excerpt(); ?>
			</div>
		</li>

	<?php endforeach; wp_reset_postdata(); ?>
</ul>

<div class="pull-right">
	<a href="/news/" class="yellow-button">See All News &rsaquo;</a>
</div>