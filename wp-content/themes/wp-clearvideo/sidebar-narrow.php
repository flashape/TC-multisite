
<?php
	global $solostream_options;
	//echo "solostream_options['solostream_layout'] = ".$solostream_options['solostream_layout'];
	if ( $solostream_options['solostream_layout'] == "Content | Sidebar-Narrow | Sidebar-Wide" ||
	$solostream_options['solostream_layout'] == "Sidebar-Narrow | Content | Sidebar-Wide" ||
	$solostream_options['solostream_layout'] == "Sidebar-Wide | Sidebar-Narrow | Content" ||
	$solostream_options['solostream_layout'] == "Sidebar-Wide | Content | Sidebar-Narrow" ) {
?>

<div id="sidebar-narrow" class="clearfix">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar-Narrow') ) : ?>

	<div class="widget">
		<h3 class="widgettitle">Text Widget</h3>
		<div class="textwidget">
			This is a widget area. Visit the Widget page in your WordPress control panel to add some content here
		</div>
	</div>

	<div class="widget">
		<h3 class="widgettitle">Text Widget</h3>
		<div class="textwidget">
			This is a widget area. Visit the Widget page in your WordPress control panel to add some content here
		</div>
	</div>

	<?php endif; ?>

</div>

<?php } ?>