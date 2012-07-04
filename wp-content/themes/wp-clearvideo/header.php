<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-font.css" type="text/css" media="screen" />

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="outer-wrap">

<div id="wrap">

	<div id="header">
		<div id="head-content" class="clearfix">
			<?php if ( get_option('solostream_site_title_option') == 'Image/Logo-Type Title' && get_option('solostream_site_logo_url') ) { ?>
				<div id="logo">
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option('solostream_site_logo_url'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
				</div>
			<?php } else { ?>
				<div id="sitetitle">
					<div class="title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div> 
					<div class="description"><?php bloginfo('description'); ?></div>
				</div>
			<?php } ?>
			<?php include (TEMPLATEPATH . '/banner468head.php'); ?>
		</div>

		<!-- <div id="topnav"> changed this for ubermenu integration -->
		<div id="topnav_uber">
			<div class="limit clearfix">
				<?php if (has_nav_menu('topnav')) { ?>
					<ul class="clearfix">
						<?php wp_nav_menu(array('container'=>false,'theme_location'=>'topnav','fallback_cb'=>'nav_fallback','items_wrap'=>'%3$s')); ?>
					</ul>
				<?php } else { ?>
					<ul>
						<li id="home"<?php if (is_front_page()) { echo " class=\"current_page_item\""; } ?>><a href="<?php bloginfo('url'); ?>"><?php _e("Home", "solostream"); ?></a></li>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				<?php } ?>
			</div>
		</div>

	</div>

	<?php include (TEMPLATEPATH . '/banner728.php'); ?>