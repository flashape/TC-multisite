<?php
if ($_GET['id'] != '') {
	global $wpdb;
	$wpdb->query($wpdb->prepare("DELETE FROM " . mbpro_get_buttons_table_name() . " WHERE id = %d", $_GET['id']));
}
?>
<script type="text/javascript">
	window.location = "<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=list";
</script>
