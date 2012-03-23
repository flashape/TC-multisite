	</div> <!-- End #page div --> 

</div> <!-- End #wrap div -->

<?php include (TEMPLATEPATH . '/banner728-bottom.php'); ?>

<?php /* footer widgets */ if ( is_active_sidebar('widget-5') || is_active_sidebar('widget-6') || is_active_sidebar('widget-7') || is_active_sidebar('widget-8') ) { ?>
<div id="footer-widgets" class="maincontent">
	<div class="limit clearfix">
		<div class="footer-widget1">
			<?php dynamic_sidebar('Footer Widget 1'); ?>
		</div>
		<div class="footer-widget2">
			<?php dynamic_sidebar('Footer Widget 2'); ?>
		</div>
		<div class="footer-widget3">
			<?php dynamic_sidebar('Footer Widget 3'); ?>
		</div>
		<div class="footer-widget4">
			<?php dynamic_sidebar('Footer Widget 4'); ?>
		</div>
	</div>
</div>
<?php } ?>

<div id="footer">
	<div class="limit clearfix">

		<?php if (has_nav_menu('footernav')) { ?>
			<div id="footnav">
				<ul class="clearfix">
					<?php wp_nav_menu(array('container'=>false,'theme_location'=>'footernav','fallback_cb'=>'footnav_fallback','items_wrap'=>'%3$s')); ?>
				</ul>
			</div>
		<?php } ?>

		&copy;  <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e("All rights reserved.", "solostream"); ?> <a href="http://www.solostream.com"><?php _e("Premium WordPress Themes", "solostream"); ?></a>.

	</div>
</div>

<p class="back-top"><a href="#outer-wrap">&uarr; <span><?php _e("Back to Top", "solostream"); ?></span></a></p>

</div> <!-- End #outer-wrap div -->

<?php wp_footer(); ?>

</body>

</html>