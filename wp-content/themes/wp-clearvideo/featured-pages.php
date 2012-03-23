<script type="text/javascript">
//<![CDATA[
	jQuery(window).load(function() {
		jQuery('#featured-pages').flexslider({
			slideshow: false,
			directionNav:true,
			pauseOnHover:true,
			manualControls: '.flexslide-custom-controls li a',
			controlsContainer: '.controls-container'
		});
	});
//]]>
</script>

<div class="featured wide pages">

	<div class="container">

		<div class="controls-container">

			<ul class="flexslide-custom-controls clearfix">

<?php 
$featpages = get_option('solostream_featpage_ids');
$featarr=split(",",$featpages);
$featarr = array_diff($featarr, array(""));
$count = 1;
foreach ( $featarr as $featitem ) { ?>

<?php $my_query = new WP_Query(array(
	'post_type' => array('post', 'page'),
	'page_id' => $featitem
	));
while ($my_query->have_posts()) : $my_query->the_post(); ?>

				<li><a href="#" title="<?php the_title(); ?>"><?php echo $count; ?></a></li>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
<?php } ?>

			</ul>

		</div>

		<div id="featured-pages" class="flexslider">

			<ul class="slides">

<?php 
$featpages = get_option('solostream_featpage_ids');
$featarr=split(",",$featpages);
$featarr = array_diff($featarr, array(""));
$count = 1;
foreach ( $featarr as $featitem ) { ?>

<?php $my_query = new WP_Query(array(
	'post_type' => array('post', 'page'),
	'page_id' => $featitem
	));
while ($my_query->have_posts()) : $my_query->the_post(); ?>

	    			<li id="feature-page-<?php echo $count; ?>">

					<?php if ( get_post_meta( $post->ID, 'video_embed', true ) ) { ?>
					<div class="feature-video">
						<div class="video"><?php echo get_post_meta( $post->ID, 'video_embed', true ); ?></div>
					</div>
					<?php } else { ?>

					<?php if ( function_exists('get_the_image')) {
						if (get_option('solostream_default_thumbs') == 'yes') { $defthumb = get_bloginfo('template_directory') . '/images/def-thumb.jpg'; } else { $defthumb == 'false'; }
						$solostream_img = get_the_image(array(
							'meta_key' => 'home_feature',
							'size' => 'full',
							'image_class' => 'home_feature',
							'default_image' => $defthumb,
							'format' => 'array',
							'image_scan' => true,
							'link_to_post' => false, ));
						if ( $solostream_img['url'] && get_post_meta( $post->ID, 'remove_thumb', true ) != 'Yes' ) { ?>
							<div class="feature-image"> 
								<?php 
									$the_img_url = $solostream_img[url];
									if(!empty($the_img_url)) { $the_img_url = get_network_image_path($the_img_url); }
									$width =  "630";
									$height = "350";  
								?>
								<a href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><img class="<?php echo $solostream_img['class']; ?>" src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $the_img_url; ?>&amp;w=<?php echo $width; ?>&amp;h=<?php echo $height; ?>&amp;zc=1" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
							</div>
					<?php } } } ?>

	    				<div class="flex-caption">
						<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="feat-excerpt"><?php the_excerpt(); ?></div>
						<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continue Reading &raquo;", "solostream"); ?></a></p>
					</div>

				</li>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
<?php } ?>

			</ul>


		</div>

	</div>

</div>