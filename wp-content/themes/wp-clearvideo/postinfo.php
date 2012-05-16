<div class="meta<?php if ( is_single() ) { ?> single<?php } ?>">

	<?php edit_post_link(); ?> &bull; <span class="meta-author"><?php the_author_posts_link(); ?></span> &bull; <span class="meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span><?php if ('open' == $post->comment_status) { ?>  &bull; <span class="meta-comments"><a href="<?php comments_link(); ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Comments for", "solostream"); ?> <?php the_title(); ?>"><?php comments_number(__("0 Comments", "solostream"), __("1 Comment", "solostream"), __("% Comments", "solostream")); ?></a></span><?php } ?> 

</div>