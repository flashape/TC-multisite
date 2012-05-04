<?php get_header(); ?>
<?php
global $wp_query;
var_export($wp_query);
?>
	<div id="page" class="clearfix">
		
		<div id="contentleft" class="maincontent">

			<div id="content">

				<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

				<?php include (TEMPLATEPATH . '/banner468.php'); ?>

				<div class="singlepage">

					<div class="post clearfix">

						<div class="entry clearfix">

							<h1 class="page-title"><?php _e("Sorry ... Page Not Found", "solostream"); ?></h1>

	 						<p><?php _e("I'm sorry, but the page you're looking for could not be found. Below are our most recent articles. Perhaps you'll find what you're looking for there.", "solostream"); ?></p>

							<ol>
								<?php query_posts('showposts=40'); ?>
								<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></li>
								<?php endwhile; ?>
							</ol>

						</div>

					</div>

				</div>

			</div>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>