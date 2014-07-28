<?php
/**
 * Template Name: Homepage Template
 */

get_header(); ?>

<?php include('includes/slideshow.php'); ?>

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

		<div class="pull-right" style="margin-bottom: 25px;">
			<a href="/about-oakland/" class="yellow-button">Learn More &rsaquo;</a>
		</div>

		<div class="clear"></div>
		
		<div class="green-header">
			<h3 class="title">Upcoming Tours at Oakland</h3>
		</div>

		<?php include('includes/tours_limited.php'); ?>

		<div class="pull-right" style="margin-bottom: 10px;">
			<a href="/plan-your-visit/tours/" class="yellow-button">See All Tours &rsaquo;</a>
		</div>

		<p style="clear: both; text-align: center; margin-bottom: 25px;">Friends of Oakland Free. Tours are $10 for adults and $5 for students and seniors 65 and over.<br />No reservations required.</p>

		<div class="clear"></div>
		
		<div class="green-header">
			<h3 class="title">Upcoming Events at Oakland</h3>
		</div>

		<?php include('includes/events_limited.php'); ?>

		<div class="pull-right" style="margin-bottom: 25px;">
			<a href="/events/" class="yellow-button">See All Events &rsaquo;</a>
		</div>

		<div class="clear"></div>

		<?php include('includes/special-announcements.php'); ?>
		
	</div>

	<?php endwhile; // end of the loop. ?>

<div id="secondary">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>