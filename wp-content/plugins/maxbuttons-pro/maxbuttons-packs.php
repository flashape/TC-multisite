<?php
// This filter forces WP to use the 'direct' method when working
// with the filesystem, instead of possible alternatives like FTP.
// See this post http://wpquestions.com/question/show/id/2685.
add_filter('filesystem_method', 'mbpro_filesystem_method');
function mbpro_filesystem_method() {
	return 'direct';
}

// Now instantiate WP_Filesystem and then remove the filter since
// we only want to enforce it for the import functionality.
WP_Filesystem();
remove_filter('filesystem_method', 'mbpro_filesystem_method');

// Start with an empty message
$message = '';

if ($_POST) {
	$file_name = $_FILES['pack_zip']['name'];
	
	if (!empty($file_name)) {
		// Get the type of uploaded file
		$arr_file_type = wp_check_filetype(basename($file_name));
		$uploaded_file_type = $arr_file_type['type'];
		
		// Check allowed type
		$allowed_file_types = array('application/zip');
		if (in_array($uploaded_file_type, $allowed_file_types)) {
			// Set the overrides and do the upload
			$overrides = array('test_form' => false);
			$uploaded_file = wp_handle_upload($_FILES['pack_zip'], $overrides);
			
			if (isset($uploaded_file['file'])) {				
				// Unzip the file to the packs folder
				$unzip_result = unzip_file($uploaded_file['file'], MAXBUTTONS_PRO_PACKS_DIR);
				
				if ($unzip_result == 1) {
					// Success
					$message = 'The <strong>' . $file_name . '</strong> button pack file was imported successfully. ';
				}
				else {
					// Failure
					$message = 'The <strong>' . $file_name . '</strong> button pack file could not be unzipped.';
				}
			}
			else {
				// Something went wrong, file wasn't saved
				$message = 'The <strong>' . $file_name . '</strong> button pack file could not be saved to the filesystem.';
			}
		}
		else {
			// Wrong file type
			$message = 'Only <strong>ZIP</strong> files are supported for importing button packs.';
		}
	}
	else {
		// No file given
		$message = 'No file was selected.';
	}
}
?>

<script type="text/javascript">
	jQuery(document).ready(function() {		
		<?php if ($_POST) { ?>
			jQuery("#maxbuttons .import .message").show();
		<?php } ?>
		
		jQuery("#import-button").click(function() {	
			jQuery("#import-form").submit();
			return false;
		});
	});
</script>

<div id="maxbuttons">
	<div class="wrap">
		<div class="icon32">
			<a href="http://maxbuttons.com" target="_blank"><img src="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/images/mb-32.png" alt="MaxButtons" /></a>
		</div>
		
		<h2 class="title">MaxButtons Pro: Packs</h2>
		
		<div class="logo">
			Brought to you by
			<a href="http://maxfoundry.com" target="_blank"><img src="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/images/max-foundry.png" alt="Max Foundry" /></a>
		</div>
		
		<div class="clear"></div>
		
		<h2 class="tabs">
			<span class="spacer"></span>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=buttons">Buttons</a>
			<a class="nav-tab nav-tab-active" href="">Packs</a>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-export">Export</a>
		</h2>
		
		<div class="import">
			<?php if ($message != '') { ?>
				<div class="message"><?php echo $message ?></div>
			<?php } ?>
			
			<div style="display: inline-block; vertical-align: top;">
				<h3>Import Button Pack</h3>
				<p>Select a button pack file to upload then click "Import".</p>
				
				<form id="import-form" method="post" enctype="multipart/form-data">
					<input type="file" name="pack_zip" />
					<input type="hidden" name="dummy" />
					<a id="import-button" class="button-primary">Import</a>
				</form>
			</div>
			
			<div style="display: inline-block; vertical-align: top; margin-left: 100px;">
				<h3>Need More Buttons?</h3>
				<p style="padding-bottom: 5px;">We have an ever-growing collection of button packs for you to choose from.</p>
				<a href="http://maxbuttons.com/shop/category/button-packs/" class="button-primary" style="margin-left: 0px;" target="_blank">View All Button Packs</a>
			</div>
		</div>
		
		<h3>Available Button Packs</h3>
		
		<?php
		$packs = scandir(MAXBUTTONS_PRO_PACKS_DIR);
		foreach ($packs as $pack) {
			if ($pack != '.' && $pack != '..') {
				if (is_dir(MAXBUTTONS_PRO_PACKS_DIR . '/' . $pack)) {
					$pack_file = MAXBUTTONS_PRO_PACKS_DIR . '/' . $pack . '/' . $pack . '.xml';
					$pack_img_file = MAXBUTTONS_PRO_PACKS_DIR . '/' . $pack . '/pack.png';
					$pack_img_url = MAXBUTTONS_PRO_PACKS_URL . '/' . $pack . '/pack.png';
					$default_img_url = MAXBUTTONS_PRO_PLUGIN_URL . '/images/default-pack.png';
					
					if (file_exists($pack_file)) {
						echo '<div class="pack">';
						
						echo '<a href="' . admin_url() . 'admin.php?page=maxbuttons-controller&action=pack&id=' . $pack . '">';
						echo '<div class="image">';
						if (file_exists($pack_img_file)) {
							echo '<img src="' . $pack_img_url . '" alt="" border="0" />';
						}
						else {
							echo '<img src="' . $default_img_url . '" alt="" border="0" />';
						}
						echo '</div>';
						echo '</a>';
						
						// Load the pack xml file
						$xml = simplexml_load_file($pack_file);
						
						// Show the pack name, author, description
						foreach ($xml->pack as $p) {
							echo '<h3>';
							echo '<a href="' . admin_url() . 'admin.php?page=maxbuttons-controller&action=pack&id=' . $pack . '">' . $p['name'] . '</a>';
							echo '</h3>';
							
							if ($p['author'] != '') {
								$author = '<h4>By: ';
								
								if ($p['author_url'] != '') {
									$author .= '<a href="' . $p['author_url'] . '" target="_blank">' . $p['author'] . '</a>';
								}
								else {
									$author .= $p['author'];
								}
								
								$author .= '</h4>';
								echo $author;
							}
							
							echo '<p>' . $p['description'] . '</p>';
						}

						echo '<p><a href="' . admin_url() . 'admin.php?page=maxbuttons-controller&action=pack-delete&id=' . $pack . '">Delete</a></p>';
						
						echo '</div>';
					}
				}
			}
		}
		?>
		
		<div class="clear"></div>
	</div>
</div>
