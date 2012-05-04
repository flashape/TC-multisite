				<?php if (is_home() && get_option('solostream_recent_posts_title')) { ?>
				<h2 class="feature-title"><span><?php echo stripslashes(get_option('solostream_recent_posts_title')); ?></span></h2>
				<?php } ?>

<?php 
global $wp_query;
//var_export($wp_query);
if (is_home()) { 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts(array(
		'post__not_in' => $do_not_duplicate,
		'paged' => $paged
	)); }
if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class(); ?> id="post-main-<?php the_ID(); ?>">

					<?php if ( get_post_meta( $post->ID, 'video_embed', true ) ) { ?>
						<div class="single-video">
							<?php echo get_post_meta( $post->ID, 'video_embed', true ); ?>
						</div>
					<?php } else { ?>
						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php include (TEMPLATEPATH . "/post-thumb-wide.php"); ?></a>
					<?php } ?>

					<div class="entry clearfix">

						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
							<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continue Reading &raquo;", "solostream"); ?></a></p>
						<?php } else { ?>
							<?php the_content(__("Continue Reading &raquo;", "solostream")); ?>
						<?php } ?>

						<div style="clear:both;"></div>

					</div>

				</div>

<?php endwhile; endif; ?>

				<?php include (TEMPLATEPATH . "/bot-nav.php"); ?>