<?php get_header(); ?>

	<div id="page" class="clearfix">

		<div id="contentleft" class="maincontent">

			<div id="content" class="clearfix">

				<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

				<?php include (TEMPLATEPATH . '/banner468.php'); ?>

				<?php if (is_category()) { ?>			
				<h1 class="archive-title"><span><?php echo single_cat_title(); ?></span></h1>		
				<?php } elseif (is_day()) { ?>
				<h1 class="archive-title"><span><?php _e("Archive for", "solostream"); ?> <?php the_time('F jS, Y'); ?></span></h1>
				<?php } elseif (is_search()) { ?>
				<h1 class="archive-title"><span><?php _e("Search Results for", "solostream"); ?> '<?php echo wp_specialchars($s, 1); ?>'</span></h1>		
				<?php } elseif (is_month()) { ?>
				<h1 class="archive-title"><span><?php _e("Archive for", "solostream"); ?> <?php the_time('F, Y'); ?></span></h1>
				<?php } elseif (is_year()) { ?>
				<h1 class="archive-title"><span><?php _e("Archive for", "solostream"); ?> <?php the_time('Y'); ?></span></h1>		
				<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="archive-title"><span><?php _e("Blog Archives", "solostream"); ?></span></h1>
				<?php } elseif (is_tag()) { ?>
				<h1 class="archive-title"><span><?php _e("Tag", "solostream"); ?>: <?php single_tag_title(); ?></span></h1>
				<?php } ?>

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