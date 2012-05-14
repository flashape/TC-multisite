<?php
if ($_GET['id'] != '') {
	$pack_id = $_GET['id'];
	
	$packs = scandir(MAXBUTTONS_PRO_PACKS_DIR);	
	foreach ($packs as $pack) {
		if ($pack == $pack_id) {
			$pack_folder = MAXBUTTONS_PRO_PACKS_DIR . '/' . $pack_id;
			
			// Gotta delete the files first
			if (is_dir($pack_folder)) {
				$files = scandir($pack_folder);
				foreach ($files as $file) {
					unlink($pack_folder . '/' . $file);
				}
			}
			
			// Then delete the folder
			rmdir($pack_folder);
		}
	}
}
?>

<script type="text/javascript">
	window.location = "<?php admin_url() ?>admin.php?page=maxbuttons-packs";
</script>
