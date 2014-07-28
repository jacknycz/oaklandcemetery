<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>
		<?php
			global $page, $paged;

			wp_title( '|', true, 'right' );

			bloginfo( 'name' );

			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";

			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?>
	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css" />

	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie-all.css" />
	<![endif]-->

	<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
	<![endif]-->

	<!-- JS -->
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1.7.1", null);
	</script>

	<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.special.load.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/atd.slideshow.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/superfish.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/default.js" type="text/javascript"></script>
	<!--[if lte IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<!--[if lt IE 8]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/ie7.js" type="text/javascript"></script>
	<![endif]-->
	<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
<!-- pinterest verified start --> <meta name="p:domain_verify" content="726ff7ff886c0429cf8912e1bbc7a1ba"/> <!-- pinterest verified end -->

</head>

<?php
	global $post;
	$contentID = $post->post_name;
?>

<body <?php body_class(); ?> id="page-<?php echo $contentID; ?>">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header id="header" role="banner">
	<div class="container">

		<h1 id="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<h2 id="site-description">
			<?php bloginfo( 'description' ); ?>
		</h2>

		<div class="top-bar pull-right">
			<div class="search">
				<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
</form>
			</div>

			<div class="home">
				<a href="/">Home</a>
			</div>
		</div>

		<div class="donate label-icon pull-right">
			<i class="ic"></i>
			<a href="https://donatenow.networkforgood.org/HistoricOakland">Donate Now</a>
		</div>

		<nav id="nav" role="navigation">
			<h3 class="assistive-text">
				<?php _e( 'Main menu', 'twentyeleven' ); ?>
			</h3>
			<div class="skip-link">
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>">
					<?php _e( 'Skip to primary content', 'twentyeleven' ); ?>
				</a>
			</div>
			<div class="skip-link">
				<a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>">
					<?php _e( 'Skip to secondary content', 'twentyeleven' ); ?>
				</a>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

	</div>
</header>

<div id="content">
	<div class="container">