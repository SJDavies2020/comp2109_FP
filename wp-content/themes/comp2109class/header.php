<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Link CSS -->
	<!-- Link JS -->
	<!-- Add Fonts -->
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
		<header id="masthead">
			<article>
			</article>
			<nav>
				<?php
					wp_nav_menu(array(
						'menu' => 'main', //do not fall back to first non empty menu
						'theme_location' => '',
						'fallback_cb' => false
					));
				?>
			</nav>
		</header><!-- #masthead -->
<div id="content" class="site-content">
