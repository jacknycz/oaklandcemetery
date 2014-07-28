<div class="flexslider">
	<ul class="slides">

<?php

// Pull in the homepage slides and set up the Javascript array

global $post;
$args = array(
	'post_type' => 'homepage-slide'
);
$homepage_slides = get_posts( $args );
foreach($homepage_slides as $post) : setup_postdata($post); ?>

	<?php
		$productImageURL = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	?>
	
	 <li class="slide">
	 	<div class="inner">
		 	<img src="<?php echo $productImageURL[0]; ?>" width="960" height="400" />
		 	<div class="description">
		 		<div class="info">
		 			<h3><?php echo get_the_title(); ?></h3>
		 			<p><?php echo get_the_content(); ?></p>
		 		</div>
		 		<a class="button" href="<?php echo get_post_meta(get_the_ID(), 'slide_link', true); ?>">Learn More ></a>
		 	</div><!-- .description -->
	 	</div><!-- .inner -->
	 </li><!-- .slide -->

<?php endforeach; wp_reset_postdata(); ?>
	</ul>
</div>

<!--<script type="text/javascript">
		var slide = {
			name: "<?php echo get_the_title(); ?>",
			description: "<?php echo get_the_content(); ?>",
			link: "<?php echo get_post_meta(get_the_ID(), 'slide_link', true); ?>",
			image: "<?php echo $productImageURL[0]; ?>"
		}

		slides.push(slide);
	</script>
<div class="homepage_hero">
	<div class="controls">
		<a href="#homepage_slideshow" class="prev" data-slideto="prev">&lsaquo;</a>
		<a href="#homepage_slideshow" class="next" data-slideto="next">&rsaquo;</a>
	</div>

	<div class="description">
		<a href="#" class="learn_more">Learn More &rsaquo;</a>
		<h3></h3>
		<div class="desc"></div>
	</div>

	<div id="homepage_slideshow"></div>
</div>-->