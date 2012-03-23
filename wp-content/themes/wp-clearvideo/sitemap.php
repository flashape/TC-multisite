<?php
/*
Template Name: Site Map
*/
?>

<?php get_header(); ?>

	<?php
	global $wp_query;
	$postid = $wp_query->post->ID;
	if ( get_post_meta( $postid, 'post_featpages', true ) == "Yes" ) { ?>
		<?php include (TEMPLATEPATH . '/featured-pages.php'); ?>
	<?php } ?>

	<?php if ( get_post_meta( $postid, 'post_featcontent', true ) == "Yes"  ) { ?>
		<?php include (TEMPLATEPATH . '/featured-wide.php'); ?>
	<?php } ?>

	<div id="page" class="clearfix">

		<div id="contentleft">

			<div id="content" class="maincontent">

				<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

				<?php include (TEMPLATEPATH . '/banner468.php'); ?>

				<h1 class="page-title"><?php the_title(); ?></h1>

				<div class="post maincontent singlepage sitemap clearfix">

					<div class="entry clearfix">

						<div class="sitemap-narrow">

							<h2 class="feature-title"><span><?php _e("Site Feeds", "solostream"); ?></span></h2>
							<ul class="archives">
								<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e("Main RSS Feed", "solostream"); ?></a></li>
								<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e("Comments RSS Feed", "solostream"); ?></a></li>
							</ul>

							<h2 class="feature-title"><span><?php _e("Pages", "solostream"); ?></span></h2>
							<ul class="archives">
								<li><a href="<?php bloginfo('home'); ?>"><?php _e("Home", "solostream"); ?></a></li>
								<?php wp_list_pages('title_li='); ?>
							</ul>

							<h2 class="feature-title"><span><?php _e("Monthly Archives", "solostream"); ?></span></h2>
							<ul class="archives">
								<?php wp_get_archives('show_post_count=1'); ?>
							</ul>
		
							<h2 class="feature-title"><span><?php _e("Categories", "solostream"); ?></span></h2>
							<ul class="archives">
								<?php wp_list_categories('title_li=&show_count=1'); ?>
							</ul>

							<h2 class="feature-title"><span><?php _e("Top 20 Tags", "solostream"); ?></span></h2>
							<?php wp_tag_cloud('number=20&smallest=10&largest=10&format=list&orderby=count&order=DESC'); ?> 

						</div> <!-- end sitemap-narrow div -->

						<div class="sitemap-wide">

							<h2 class="feature-title"><span><?php _e("All Articles", "solostream"); ?></span></h2>
<?php
$numposts = 8; 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('showposts='.$numposts.'&paged=' . $paged); ?>
<?php while (have_posts()) : the_post(); ?>

							<div class="sitemap-post clearfix" id="post-<?php the_ID(); ?>">
								<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h3>
								<?php include (TEMPLATEPATH . '/postinfo.php'); ?>
								<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php include (TEMPLATEPATH . "/post-thumb.php"); ?></a>
								<?php the_excerpt(); ?>

							</div>
<?php endwhile; ?>

							<?php include (TEMPLATEPATH . '/bot-nav.php'); ?>

						</div> <!-- end sitemap-wide div -->

					</div> <!-- end entry div -->

				</div> <!-- end post div -->
				
			</div> <!-- end content div -->

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div> <!-- end contentleft div -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>