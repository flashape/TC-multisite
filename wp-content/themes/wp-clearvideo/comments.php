<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<div class="allcomments">

<?php if ( have_comments() ) : ?>

	<h3 id="comments"><?php _e("Comments", "solostream"); ?> (<?php comments_number('0', '1', '%');?>)</h3>

	<p class="comments-number"><a href="<?php trackback_url(); ?>" title="<?php _e("Trackback URL", "solostream"); ?>"><?php _e("Trackback URL", "solostream"); ?></a> | <a title="<?php _e("Comments RSS Feed for This Entry", "solostream"); ?>" href="<?php the_permalink() ?>feed"><?php _e("Comments RSS Feed", "solostream"); ?></a></p>

	<div class="comments-navigation clearfix">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<?php // list pings separately
	if ( ! empty($comments_by_type['pings']) ) : ?>
		<div class="pings">
			<h3><?php _e("Sites That Link to this Post", "solostream"); ?></h3>
			<ol class="pinglist">
				<?php wp_list_comments('type=pings&callback=list_pings'); ?>
			</ol>
		</div>
	<?php endif; ?>

	<ol class="commentlist">
		<?php 
			$avsize = get_option('solostream_grav_size');
			wp_list_comments('type=comment&avatar_size='.$avsize);
		?>
	</ol>

<?php else : // this is displayed if there are no comments so far ?>

	<div id="comments"></div>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e("Comments are closed.", "solostream"); ?></p>

	<?php endif; ?>

<?php endif; ?>

</div>

<?php if ('open' == $post->comment_status) : ?>

	<div id="respond">

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<h3><?php comment_form_title(__("Leave a Reply", "solostream"), __("Leave a Reply", "solostream")); ?></h3>

			<div class="cancel-comment-reply">
				<?php cancel_comment_reply_link(); ?>
			</div>

			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

				<p><?php _e("You must be", "solostream"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e("logged in", "solostream"); ?></a> <?php _e("to post a comment", "solostream"); ?>.</p>

			<?php else : ?>

				<?php if ( $user_ID ) : ?>

					<p><?php _e("Logged in as", "solostream"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> | <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Logout", "solostream"); ?>"><?php _e("Logout", "solostream"); ?></a></p>

				<?php else : ?>

					<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
					<label for="author"><?php _e("Name", "solostream"); ?> <?php if ($req) echo __("( required )", "solostream"); ?></label></p>

					<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
					<label for="email">Email <?php if ($req) echo __("( required )", "solostream"); ?></label></p>

					<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
					<label for="url"><?php _e("Website", "solostream"); ?></label></p>

				<?php endif; ?>

				<!--<p><small><strong><?php _e("XHTML", "solostream"); ?>:</strong> <?php _e("You can use these tags", "solostream"); ?>: <code><?php echo allowed_tags(); ?></code></small></p>-->

				<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

				<p class="button-submit"><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e("Submit Comment", "solostream"); ?>" />
				<?php comment_id_fields(); ?>
				</p>

				<?php do_action('comment_form', $post->ID); ?>

			<?php endif; // If registration required and not logged in ?>

		</form>

	</div>

<?php endif; // if you delete this the sky will fall on your head ?>