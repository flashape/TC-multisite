<?php
/*
Template Name: Alternate Home
*/
?>

<?php get_header(); ?>

	<?php
	global $wp_query;
	$postid = $wp_query->post->ID;
	if ( get_post_meta( $postid, 'post_featpages', true ) == "Yes" ) { ?>
		<?php include (TEMPLATEPATH . '/featured-pages.php'); ?>
	<?php } ?>

	<?php if ( is_home() && $paged < 2 && get_option('solostream_features_on') == 'Yes') { ?>
		<?php include (TEMPLATEPATH . '/featured-wide.php'); ?>
	<?php } ?>

	<div id="page" class="clearfix" style="background-image:none;">

		<div id="alt-home-bottom" class="clearfix maincontent">

			<div class="home-widget-1">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Alt Home Page Widget 1') ) : ?>
				<div class="widget">
					<h3 class="widgettitle"><span>Text Widget</span></h3>
					<div class="textwidget">
						This is a widget area. Visit the Widget page in your WordPress control panel to add some content here
					</div>
				</div>
				<?php endif; ?>
			</div>

			<div class="home-widget-2">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Alt Home Page Widget 2') ) : ?>
				<div class="widget">
					<h3 class="widgettitle"><span>Text Widget</span></h3>
					<div class="textwidget">
						This is a widget area. Visit the Widget page in your WordPress control panel to add some content here
					</div>
				</div>
				<?php endif; ?>
			</div>

			<div class="home-widget-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Alt Home Page Widget 3') ) : ?>
				<div class="widget">
					<h3 class="widgettitle"><span>Text Widget</span></h3>
					<div class="textwidget">
						This is a widget area. Visit the Widget page in your WordPress control panel to add some content here
					</div>
				</div>
				<?php endif; ?>
			</div>


		</div>

<?php get_footer(); ?>