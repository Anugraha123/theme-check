<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!-- HEADER -->
<div class="home-header-container">
	<div class="row">
		<div class="column small-12 description-content">
			<div class="column small-12 header-description">
				<h1>Legal technology for small business and law firms</h1>
			</div>

			<div class="column small-12 header-requests">
				<div class="column small-12 medium-6 trail-button">
					<a href="" class="button bg_trail">Free Trail</a>
					<p class="btn_dwn_text">No credit card required</p>
				</div>

				<div class="column small-12 medium-6 video-button">
					<p>Watch a Demo
					<a href="" id="video-play-button"><img class="play-btn" src="<?php echo get_template_directory_uri()?>/assets/svg/play-btn.svg"></a></p>
				</div>
			</div>
		</div>

		<div class="column small-12 small-centered mockup_container">
				<img src="<?php echo get_template_directory_uri();  ?>/assets/images/dl_home_moc1.png">
		</div>
	</div>
</div>

<!-- EXPLORE FEATURES -->
<div class="circle-mockup-container">
	<div class="row">
		<div class="column small-12 medium-6 app-circle-moc">
			<img src="<?php echo get_template_directory_uri();  ?>/assets/images/dl_home_moc2.png">
		</div>

		<!-- Feature Card Primary -->
		<div class="column small-12 medium-6 dl-featurecard-primary">
			<div class="card-header">
				<h1>
					Get your legal work done quickly and cost effectively
				</h1>
			</div>

			<div class="card-body">
				<p>Create, sign, manage and store legal documents online with Dragon Law</p>
			</div>

			<div class="card-footer">
				<a href="" class="button primary">Explore Features</a>
			</div>
		</div>
	</div>
</div>

<div class="choose-industry-container">
	<div class="row">
		
	</div>
</div>


<?php get_footer();
