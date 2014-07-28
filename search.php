<?php
/**
 * The template for displaying Search Results pages.
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
	<?php if ( have_posts() ) : ?>

		<h1><?php printf( __( 'Search results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

		<ul class="search-results unstyled">
			<?php while ( have_posts() ) : the_post(); ?>

				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>

			<?php endwhile; ?>
		</ul>

	<?php else : ?>

		<h1><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
		
		<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>

		<form class="form-horizontal" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
			<input type="submit" class="submit btn" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		</form>

	<?php endif; ?>
</div>

<div id="secondary">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>