<div class="sub-icons clearfix">

	<a title="<?php _e("Subscribe via RSS Feed", "solostream"); ?>" href="<?php bloginfo('rss2_url'); ?>"><img class="rss-sub" src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="<?php _e("Subscribe via RSS Feed", "solostream"); ?>" align="top" /></a>

<?php if ( get_option('solostream_twitter_url') ) { ?>
	<a rel="external" title="<?php echo stripslashes(get_option('solostream_twitter_link_text')); ?>" href="http://www.twitter.com/<?php echo stripslashes(get_option('solostream_twitter_url')); ?>"><img class="twitter-sub" src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="<?php echo stripslashes(get_option('solostream_twitter_link_text')); ?>" align="top" /></a>
<?php } ?>

<?php if ( get_option('solostream_facebook_url') ) { ?>
	<a title="<?php echo stripslashes(get_option('solostream_facebook_link_text')); ?>" rel="external" href="http://www.facebook.com/<?php echo stripslashes(get_option('solostream_facebook_url')); ?>"><img class="facebook-sub" src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="<?php echo stripslashes(get_option('solostream_facebook_link_text')); ?>" align="top" /></a>
<?php } ?>

<?php if ( get_option('solostream_gbuzz_url') ) { ?>
	<a title="<?php echo stripslashes(get_option('solostream_gbuzz_link_text')); ?>" rel="external" href="https://plus.google.com/<?php echo stripslashes(get_option('solostream_gbuzz_url')); ?>?rel=author"><img class="gplus-sub" src="<?php bloginfo('template_directory'); ?>/images/google-plus.png" alt="<?php echo stripslashes(get_option('solostream_gbuzz_link_text')); ?>" align="top" /></a>
<?php } ?>

<?php if ( get_option('solostream_linkedin_url') ) { ?>
	<a title="<?php echo stripslashes(get_option('solostream_linkedin_link_text')); ?>" rel="external" href="http://www.linkedin.com/in/<?php echo stripslashes(get_option('solostream_linkedin_url')); ?>"><img class="linkedin-sub" src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="<?php echo stripslashes(get_option('solostream_linkedin_link_text')); ?>" align="top" /></a>
<?php } ?>

<?php if ( get_option('solostream_linkedin_group_url') ) { ?>
	<a title="<?php echo stripslashes(get_option('solostream_linkedin_group_link_text')); ?>" rel="external" href="http://www.linkedin.com/groups/<?php echo stripslashes(get_option('solostream_linkedin_group_url')); ?>"><img class="linkedin-sub" src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="<?php echo stripslashes(get_option('solostream_linkedin_group_link_text')); ?>" align="top" /></a>
<?php } ?>

<?php if ( get_option('solostream_flickr_url') ) { ?>
	<a title="<?php echo stripslashes(get_option('solostream_flickr_link_text')); ?>" rel="external" href="http://www.flickr.com/photos/<?php echo stripslashes(get_option('solostream_flickr_url')); ?>"><img class="flickr-sub" src="<?php bloginfo('template_directory'); ?>/images/flickr.png" alt="<?php echo stripslashes(get_option('solostream_flickr_link_text')); ?>" align="top" /></a>
<?php } ?>

<?php if ( get_option('solostream_flickr_group_url') ) { ?>
	<a title="<?php echo stripslashes(get_option('solostream_flickr_group_link_text')); ?>" rel="external" href="http://www.flickr.com/groups/<?php echo stripslashes(get_option('solostream_flickr_group_url')); ?>"><img class="flickr-sub" src="<?php bloginfo('template_directory'); ?>/images/flickr.png" alt="<?php echo stripslashes(get_option('solostream_flickr_group_link_text')); ?>" align="top" /></a>
<?php } ?>

<?php if ( get_option('solostream_youtube_url') ) { ?>
	<a title="<?php echo stripslashes(get_option('solostream_youtube_link_text')); ?>" rel="external" href="http://www.youtube.com/user/<?php echo stripslashes(get_option('solostream_youtube_url')); ?>"><img class="youtube-sub" src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="<?php echo stripslashes(get_option('solostream_youtube_link_text')); ?>" align="top" /></a>
<?php } ?>

</div>