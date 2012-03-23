<?php
/*
Template Name: Youtube Videos
*/
?>

<?php get_header(); ?>

	<?php
	global $wp_query;
	$postid = $wp_query->post->ID;
	$ytfeed = get_post_meta( $post->ID, 'ytfeed', true ); 
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

				<div class="post entry clearfix">

					<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>

					<?php the_post(); ?>
					<?php $content = get_the_content(); ?>
					<?php if ( ! empty( $content ) ) : ?>
						<?php the_content(); ?>
					<?php endif; ?>

					<script type="text/javascript">
					//<![CDATA[
						jQuery(window).load(function() {
							jQuery('#featured-yt-vids-page').flexslider({
								slideshow: false,
								slideshowSpeed: 0000,
								directionNav:false,
								manualControls: '.flexslide-custom-controls li a',
								controlsContainer: '.container'
							});
						});
					//]]>
					</script>

					<div class="featured videos yt-temp">

						<div class="container">

							<div id="featured-yt-vids-page" class="flexslider">

								<ul class="slides">

    									<?php
    										$count = 1;
    										// Get RSS Feed(s)
    										include_once(ABSPATH . WPINC . '/rss.php');
      										$rss = fetch_rss($ytfeed);
										//set number of items to display
    										$maxitems = -1;
    										$items = array_slice($rss->items, 0, $maxitems);
    										foreach ( $items as $item ) :

    										$youtubeid = strchr($item['link'],'=');
    										$youtubeid = substr($youtubeid,1,11);
    									?>

    									<li id="feature-yt-vid-<?php echo $count; ?>">
										<div class="feature-video">
											<div class="video">
												<iframe width="300" height="250" src="http://www.youtube.com/embed/<?php echo $youtubeid; ?>" frameborder="0"></iframe>
											</div>
										</div>
									</li>

									<?php $count = $count + 1; endforeach; ?>

								</ul>

							</div>

							<div class="controls-container clearfix">

								<ul class="flexslide-custom-controls clearfix">

    									<?php
    										$count = 1;
    										// Get RSS Feed(s)
    										include_once(ABSPATH . WPINC . '/rss.php');
      										$rss = fetch_rss($ytfeed);
										//set number of items to display
    										$maxitems = -1;
    										$items = array_slice($rss->items, 0, $maxitems);
    										foreach ( $items as $item ) :

    										$youtubeid = strchr($item['link'],'=');
    										$youtubeid = substr($youtubeid,1,11);
    									?>

									<li class="clearfix">
										<a class="clearfix" href="#" title="<?php echo $item['title']; ?>">
											<img class="yt-thumb" src="http://img.youtube.com/vi/<?php echo $youtubeid; ?>/0.jpg" alt="<?php echo $item['title']; ?>" title="<?php echo $item['title']; ?>" />
											<span class="yt-title"><?php echo $item['title']; ?></span>
										</a>
									</li>

									<?php if ( $count%3 == 0 ) { ?>
										<li class="clear-row"></li>
									<?php } ?>

									<?php $count = $count + 1; endforeach; ?>

								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>