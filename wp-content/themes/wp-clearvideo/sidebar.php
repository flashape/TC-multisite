<?php
	global $solostream_options;
	if ( $solostream_options['solostream_layout'] !== "Full-Width" ) {
?>

		<div id="contentright">

			<div id="sidebar" class="clearfix">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar-Wide - Top') ) : ?>
				<?php endif; ?>
			</div>

			<div id="sidebar-bottom" class="clearfix">

				<div id="sidebar-bottom-left">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar-Wide - Bottom Left') ) : ?>
					<?php endif; ?>
				</div>

				<div id="sidebar-bottom-right">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar-Wide - Bottom Right') ) : ?>
					<?php endif; ?>
				</div>

			</div>

		</div>

<?php } ?>