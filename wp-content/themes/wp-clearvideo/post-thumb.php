<?php if ( function_exists('get_the_image')) {

	if (get_option('solostream_default_thumbs') == 'yes') { $defthumb = get_bloginfo('template_directory') . '/images/def-thumb.jpg'; } else { $defthumb == 'false'; }

	$solostream_img = get_the_image(array(
		'meta_key' => 'thumbnail',
		'size' => 'thumbnail',
		'image_class' => 'thumbnail',
		'default_image' => $defthumb,
		'format' => 'array',
		'image_scan' => true,
		'link_to_post' => false, ));

	if ( $solostream_img['url'] && get_option('solostream_show_thumbs') == 'yes' && get_post_meta( $post->ID, 'remove_thumb', true ) != 'Yes' ) { ?> 

		<?php
			$the_img_url = $solostream_img[url];
			if(!empty($the_img_url)) { 
				$the_img_url = get_network_image_path($the_img_url); 
			} 
		?>

		<img class="<?php echo $solostream_img['class']; ?>" src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $the_img_url; ?>&amp;w=150&amp;h=150&amp;zc=1" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />

	<?php } 

} ?>