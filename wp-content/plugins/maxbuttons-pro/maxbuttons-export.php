<?php
global $wpdb;
$buttons = $wpdb->get_results("SELECT * FROM " . mbpro_get_buttons_table_name());
?>

<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#export-buttons").click(function() {
			jQuery("#export-form").submit();
			return false;
		});
		
		jQuery("#select-all").click(function() {
			 jQuery("input[type='checkbox']").attr("checked", jQuery("#select-all").is(":checked")); 
		});
	});
</script>

<div id="maxbuttons">
	<div class="wrap">
		<div class="icon32">
			<a href="http://maxbuttons.com" target="_blank"><img src="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/images/mb-32.png" alt="MaxButtons" /></a>
		</div>
		
		<h2 class="title">MaxButtons Pro: Export</h2>
		
		<div class="logo">
			Brought to you by
			<a href="http://maxfoundry.com" target="_blank"><img src="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/images/max-foundry.png" alt="Max Foundry" /></a>
		</div>
		
		<div class="clear"></div>
		
		<h2 class="tabs">
			<span class="spacer"></span>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=buttons">Buttons</a>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-packs">Packs</a>
			<a class="nav-tab nav-tab-active" href="">Export</a>
		</h2>
		
		<div class="form-actions">
			<a id="export-buttons" class="button-primary">Export Buttons</a>
		</div>
		
		<p>Exporting your buttons creates a button pack zip file. Fill out the short form below, then select which buttons to export.</p>
		
		<div class="spacer"></div>
		
		<form id="export-form" method="post" action="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/maxbuttons-export-download.php">
			<div class="option">
				<div class="label">Pack Name</div>
				<div class="input">
					<input type="text" id="pack_name" name="pack_name" />
				</div>
			</div>
			
			<div class="option">
				<div class="label">Pack<br />Description</div>
				<div class="input">
					<textarea id="pack_description" name="pack_description"></textarea>
				</div>
			</div>
			
			<div class="option">
				<div class="label">Pack Author</div>
				<div class="input">
					<input type="text" id="pack_author" name="pack_author" />
				</div>
			</div>
			
			<div class="option">
				<div class="label">Pack Author URL</div>
				<div class="input">
					<input type="text" id="pack_author_url" name="pack_author_url" />
				</div>
			</div>
			
			<div class="button-list">		
				<table cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<th><input type="checkbox" id="select-all" name="select-all" /></th>
						<th>Button</th>
						<th>Name and Description</th>
						<th>Shortcode</th>
					</tr>
					<?php foreach ($buttons as $b) { ?>
						<tr>
							<td>
								<input type="checkbox" id="maxbutton_<?php echo $b->id ?>" name="maxbutton_<?php echo $b->id ?>" value="<?php echo $b->id ?>" />
							</td>
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
						</tr>
					<?php } ?>
				</table>
			</div>
		</form>
	</div>
</div>
