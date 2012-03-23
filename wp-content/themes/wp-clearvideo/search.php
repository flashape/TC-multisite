<?php get_header(); ?>

	<div id="page" class="clearfix">

		<div id="contentleft" class="maincontent">

			<div id="content" class="clearfix">

				<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

				<?php include (TEMPLATEPATH . '/banner468.php'); ?>

				<h1 class="archive-title"><span><?php _e("Search Results for", "solostream"); ?> '<?php echo wp_specialchars($s, 1); ?>'</span></h1>

				<?php if ( get_option('solostream_archive_layout') == 'Option 1 - Standard Blog Layout') { ?>
				<?php include (TEMPLATEPATH . '/index1.php'); ?>
				<?php } elseif ( get_option('solostream_archive_layout') == 'Option 2 - 2 Posts Aligned Side-by-Side') { ?>
				<?php include (TEMPLATEPATH . '/index2.php'); ?>
				<?php } ?>

			</div>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>