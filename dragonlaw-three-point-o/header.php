<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<nav class="dl_top_bar">
			<div class="row ">
				<div class="title-bar mobile">
					<div class="title-bar-title" data-responsive-toggle="mobile-menu">
						<a class="dl_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<button class="menu-icon" type="button" data-toggle="#menu-mobile"></button>
					</div>
				</div>
				<!-- <div class="column large-3 title-bar desktop">
					<div class="title-bar-title">
						<a class="dl_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
				</div> -->
				<div class="column large-9 menu-list-menu" id="menu-mobile">
					<ul class="dropdown menu" data-dropdown-menu>
					<?php dragonlaw_topbar(); ?>
					<li class="menu-item trail"><a class="button trail">Free Trail</a></li>
					<li><a>Login</a></li>
					</ul>
				</div>
			</div>
		</nav>