<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="header_image">
	<img src="<?php echo get_template_directory_uri(); ?>/images/header_image_1.jpg" />
</div>

<div id="primary">
	<h1 class="entry-title" style="font-size: 24px;"><?php _e( 'We’re sorry, but the page you are looking for does not seem to exist.', 'twentyeleven' ); ?></h1>

	<p><?php _e( 'Perhaps searching may help, or you can go back to our home page.', 'twentyeleven' ); ?></p>

	<form class="form-horizontal" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		<input type="submit" class="submit btn" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
	</form>
</div><!-- #primary -->

<div id="secondary">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>