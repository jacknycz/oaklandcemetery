<table class="events">
	<tr>
		<th colspan="2">Name of Tour</th>
		<th>Tour Date</th>
	</tr>
	<?php
	global $post;
	$args = array(
		'post_type' => 'tour',
		'meta_key' => 'event_date',
		'orderby' => 'meta_value',
		'order' => 'ASC',
		'posts_per_page' => -1,
		'numberposts' => -1
	);
	$events = get_posts( $args );
	foreach($events as $post) : setup_postdata($post); ?>
	
		<?php if (get_meta('event_date_end')): ?>
			<?php if (strtotime(get_meta('event_date_end')) >= strtotime(date('Y-m-d'))): ?>	
				<tr>
					<td class="thumb">
						<?php if (has_post_thumbnail()): ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
					</td>
					<td class="description">
						<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
						<?php if (get_meta('event_summary')): ?>
							<?php meta('event_summary'); ?>
						<?php endif; ?>
					</td>
					<td class="date">
						<?php echo date('F j', strtotime(get_meta('event_date'))); ?> 
						<?php if (get_meta('event_date_end')): ?>
							&mdash;<br />
							<?php echo date('F j', strtotime(get_meta('event_date_end'))); ?>
						<?php endif; ?><br />
						<?php echo date('g:i A', strtotime(get_meta('event_time'))); ?>
						<?php if (get_meta('event_time_end')): ?>
							to <?php echo date('g:i A', strtotime(get_meta('event_time_end'))); ?> 
						<?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>
		<?php else: ?>
			<?php if (strtotime(get_meta('event_date')) >= strtotime(date('Y-m-d'))): ?>	
				<tr>
					<td class="thumb">
						<?php if (has_post_thumbnail()): ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
					</td>
					<td class="description">
						<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
						<?php if (get_meta('event_summary')): ?>
							<?php meta('event_summary'); ?>
						<?php endif; ?>
					</td>
					<td class="date">
						<?php echo date('F j', strtotime(get_meta('event_date'))); ?> 
						<?php if (get_meta('event_date_end')): ?>
							&mdash;<br />
							<?php echo date('F j', strtotime(get_meta('event_date_end'))); ?>
						<?php endif; ?><br />
						<?php echo date('g:i A', strtotime(get_meta('event_time'))); ?>
						<?php if (get_meta('event_time_end')): ?>
							to <?php echo date('g:i A', strtotime(get_meta('event_time_end'))); ?> 
						<?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>

	<?php endforeach; wp_reset_postdata(); ?>
	<?php
	global $post;
	$args = array(
		'post_type' => 'tour',
		'meta_query' => array(
			array(
				'key' => 'event_date',
				'compare' => 'NOT EXISTS'
			)
		),
		'posts_per_page' => -1,
		'numberposts' => -1
	);
	$events = get_posts( $args );
	foreach($events as $post) : setup_postdata($post); ?>
		<tr>
			<td class="thumb">
				<?php if (has_post_thumbnail()): ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
			</td>
			<td class="description">
				<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
				<?php if (get_meta('event_summary')): ?>
					<?php meta('event_summary'); ?>
				<?php endif; ?>
			</td>
			<td class="date">TBA</td>
		</tr>
	<?php endforeach; wp_reset_postdata(); ?>
	<?php
	global $post;
	$args = array(
		'post_type' => 'tour',
		'meta_query' => array(
			array(
				'key' => 'event_date',
				'value' => '-',
				'compare' => 'NOT LIKE'
			)
		),
		'posts_per_page' => -1,
		'numberposts' => -1
	);
	$events = get_posts( $args );
	foreach($events as $post) : setup_postdata($post); ?>
		<tr>
			<td class="thumb">
				<?php if (has_post_thumbnail()): ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
			</td>
			<td class="description">
				<a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
				<?php if (get_meta('event_summary')): ?>
					<?php meta('event_summary'); ?>
				<?php endif; ?>
			</td>
			<td class="date">TBA</td>
		</tr>
	<?php endforeach; wp_reset_postdata(); ?>
</table>