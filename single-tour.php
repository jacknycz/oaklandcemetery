<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="header_image">
	<?php if ( get_the_post_thumbnail( 14 ) ): ?>
		<?php echo get_the_post_thumbnail( 14, array(960, 227) ); ?>
	<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/header_image_1.jpg" />
	<?php endif; ?>
</div>

<div id="primary">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'event' ); ?>

		<nav id="nav-single">
			<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
			<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
		</nav><!-- #nav-single -->

	<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<div id="secondary">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>