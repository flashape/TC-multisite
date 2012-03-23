<?php get_header(); ?>

	<div id="page" class="clearfix">

		<div id="contentleft" class="maincontent">

			<div id="content" class="clearfix">

				<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

				<?php include (TEMPLATEPATH . '/banner468.php'); ?>

				<?php $curauth = get_userdata(intval($author)); ?>

				<h1 class="archive-title"><span><?php _e("Author Archive for", "solostream"); ?> <?php echo $curauth->display_name; ?></span></h1>

				<div class="auth-bio auth-archive clearfix">
					<?php $gravsize = get_option('solostream_grav_size'); ?> 
					<?php if (function_exists('get_avatar')) { ?>
					<?php echo get_avatar($curauth->user_email,$size=$gravsize); ?>
					<?php } ?>
					<?php echo wpautop( $curauth->description, $br = 1 ); ?>

					<p class="auth-icons">

						<a rel="external" title="<?php _e("RSS Feed for", "solostream"); ?> <?php echo $curauth->display_name; ?>" href="<?php bloginfo('url'); ?>/author/<?php echo $curauth->user_nicename; ?>/feed/"><img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="<?php _e("rss feed", "solostream"); ?>" /></a>

						<?php if ( $curauth->facebook ) { ?>
						<a rel="external" title="<?php echo $curauth->display_name; ?> <?php _e("on Facebook", "solostream"); ?>" href="http://www.facebook.com/<?php echo $curauth->facebook; ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="<?php _e("Facebook", "solostream"); ?>" /></a>
						<?php } ?>

						<?php if ( $curauth->twitter ) { ?>
						<a rel="external" title="<?php echo $curauth->display_name; ?> <?php _e("on Twitter", "solostream"); ?>" href="http://www.twitter.com/<?php echo $curauth->twitter; ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="<?php _e("Twitter", "solostream"); ?>" /></a>
						<?php } ?>

						<?php if ( $curauth->googbuzz ) { ?>
						<a rel="external" title="<?php echo $curauth->display_name; ?> <?php _e("on Google Plus", "solostream"); ?>" href="https://plus.google.com/<?php echo $curauth->googbuzz; ?>?rel=author"><img src="<?php bloginfo('template_directory'); ?>/images/google-plus.png" alt="<?php _e("Google Plus", "solostream"); ?>" /></a>
						<?php } ?>

						<?php if ( $curauth->flickr ) { ?>
						<a rel="external" title="<?php echo $curauth->display_name; ?> <?php _e("on Flickr", "solostream"); ?>" href="http://www.flickr.com/photos/<?php echo $curauth->flickr; ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/flickr.png" alt="<?php _e("Flickr", "solostream"); ?>r" /></a>
						<?php } ?>

						<?php if ( $curauth->linkedin ) { ?>
						<a rel="external" title="<?php echo $curauth->display_name; ?> <?php _e("on LinkedIn", "solostream"); ?>" href="http://www.linkedin.com/in/<?php echo $curauth->linkedin; ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="<?php _e("LinkedIn", "solostream"); ?>" /></a>
						<?php } ?>

						<?php if ( $curauth->youtube ) { ?>
						<a rel="external" title="<?php echo $curauth->display_name; ?> <?php _e("on YouTube", "solostream"); ?>" href="http://www.youtube.com/user/<?php echo $curauth->youtube; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="<?php _e("YouTube", "solostream"); ?>" /></a>
						<?php } ?>

					</p>

					<?php if ( $curauth->user_url ) { ?>
					<p class="auth-website"><a rel="external" title="<?php _e("Author's Website", "solostream"); ?>" href="<?php echo $curauth->user_url; ?>"><?php _e("Author's Website", "solostream"); ?></a></p>
					<?php } ?>

				</div>

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