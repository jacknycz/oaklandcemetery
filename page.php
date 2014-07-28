<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
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

		<?php include('includes/content-footer.php'); ?>
	</div>

<?php endwhile; // end of the loop. ?>

<div id="secondary">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>