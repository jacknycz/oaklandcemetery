<?php
/**
 * Template Name: News Template
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="header_image">
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail(array(960, 227)); ?>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/header_image_1.jpg" />
		<?php endif; ?>
	</div>

	<div id="primary">

		<?php get_template_part( 'content', 'page' ); ?>

		<ul class="news-articles">
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php $query = new WP_Query('cat=5&posts_per_page=5&numberposts=-1&paged=' . $paged); ?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
			
				<li>
					<a href="<?php the_permalink(); ?>" class="link">
						<div class="date pull-right">
							<?php the_time('F jS, Y') ?>
						</div>
						<?php the_title(); ?>
						<span><?php echo get_the_excerpt(); ?></span>
					</a>
				</li>

			<?php endwhile; wp_reset_query(); ?>
		</ul>

		<div class="paging">
			<div class="pull-left">
				<?php previous_posts_link('&laquo; Newer Entries', $query->max_num_pages) ?>
			</div>

			<div class="pull-right">
				<?php next_posts_link('Older Entries &raquo;', $query->max_num_pages) ?>
			</div>
		</div>

		<?php include('includes/content-footer.php'); ?>
		
	</div>

<?php endwhile; // end of the loop. ?>

<div id="secondary">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>