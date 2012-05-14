<?php
global $wpdb;
$buttons = $wpdb->get_results("SELECT * FROM " . mbpro_get_buttons_table_name());
$button_count = $wpdb->get_var("SELECT COUNT(*) FROM " . mbpro_get_buttons_table_name());
?>

<div id="maxbuttons">
	<div class="wrap">
		<div class="icon32">
			<a href="http://maxbuttons.com" target="_blank"><img src="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/images/mb-32.png" alt="MaxButtons" /></a>
		</div>
		
		<h2 class="title">MaxButtons Pro: Buttons</h2>
		
		<div class="logo">
			Brought to you by
			<a href="http://maxfoundry.com" target="_blank"><img src="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/images/max-foundry.png" alt="Max Foundry" /></a>
		</div>
		
		<div class="clear"></div>
		
		<h2 class="tabs">
			<span class="spacer"></span>
			<a class="nav-tab nav-tab-active" href="">Buttons</a>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-packs">Packs</a>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-export">Export</a>
		</h2>

		<div class="form-actions">
			<a class="button-primary" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=button">Add New</a>
		</div>

		<p><strong>All</strong> (<?php echo $button_count ?>)</p>

		<div class="button-list">		
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<th>Button</th>
					<th>Name and Description</th>
					<th>Shortcode</th>
					<th>Actions</th>
				</tr>
				<?php foreach ($buttons as $b) { ?>
					<tr>
						<td>
							<script type="text/javascript">
								mbpro_loadFontFamilyStylesheet("<?php echo $b->text_font_family ?>");
								mbpro_loadFontFamilyStylesheet("<?php echo $b->text2_font_family ?>");
							</script>
							<?php echo do_shortcode('[maxbutton id="' . $b->id . '"]') ?>
						</td>
						<td>
							<a class="button-name" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=button&id=<?php echo $b->id ?>"><?php echo $b->name ?></a>
							<br />
							<p><?php echo $b->description ?></p>
						</td>
						<td>
							[maxbutton id="<?php echo $b->id ?>"]
						</td>
						<td>
							<a class="action" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=button&id=<?php echo $b->id ?>">Edit</a>
							<a class="action" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=copy&id=<?php echo $b->id ?>">Copy</a>
							<a class="action" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=delete&id=<?php echo $b->id ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
