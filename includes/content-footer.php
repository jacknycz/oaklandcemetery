<?php if (get_meta('content_footer')): ?>

	<div class="primary-divider"></div>

	<div class="content-footer">
		<div class="inner">
			
			<div class="col-left">
				<h3><?php meta('left_col_title'); ?></h3>

				<ul class="links unstyled">

					<?php
						// Find connected pages
						$connected = new WP_Query( array(
							'connected_type' => 'pages_to_pages',
							'connected_items' => $post,
							'nopaging' => true,
						) );

						// Display connected pages
						if ( $connected->have_posts() ) :
					?>

					<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
						<li>
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('thumbnail'); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/content_footer_link_1.jpg" />
							<?php endif; ?>
							<div class="details">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php echo substr(strip_tags(get_the_content()), 0,80); ?>...
							</div>
						</li>
					<?php endwhile; ?>

					<?php 
						// Prevent weirdness
						wp_reset_postdata();

						endif;
					?>
				</ul>
			</div>
			
			<div class="col-right">
				<h3><?php meta('right_col_title'); ?></h3>

				<ul class="links unstyled">
					<?php if (get_meta('content_footer_other_1')): ?>
						<li>
							<a href="/events/become-a-sponsor/" class="big">
								<img src="<?php echo get_template_directory_uri(); ?>/images/content_footer_other_1.jpg" />
								Become A Sponsor
							</a>
						</li>
					<?php endif; ?>
					<?php if (get_meta('content_footer_other_2')): ?>
						<li>
							<a href="/plan-your-visit/map-of-the-cemetery/" class="big">
								<img src="<?php echo get_template_directory_uri(); ?>/images/content_footer_other_2.jpg" />
								Download Cemetery Map
							</a>
						</li>
					<?php endif; ?>
					<?php if (get_meta('content_footer_other_3')): ?>
						<li>
							<a href="/plan-your-visit/self-guided-tours/" class="big">
								<img src="<?php echo get_template_directory_uri(); ?>/images/content_footer_other_3.jpg" />
								Self-Guided Tours
							</a>
						</li>
					<?php endif; ?>
					<?php if (get_meta('content_footer_donate')): ?>
						<li>
							<a href="/support/donate-now/" class="donate">
								Donate Now
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>

		</div>
	</div>

<?php endif; ?>