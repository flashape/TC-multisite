<?php
if ($_GET['action'] != '') {
	switch ($_GET['action']) {
		case 'button':
			include_once 'maxbuttons-button.php';
			break;
		case 'copy':
			include_once 'maxbuttons-copy.php';
			break;
		case 'delete':
			include_once 'maxbuttons-delete.php';
			break;
		case 'pack':
			include_once 'maxbuttons-pack.php';
			break;
		case 'pack-delete':
			include_once 'maxbuttons-pack-delete.php';
			break;
		default:
			include_once 'maxbuttons-buttons.php';
			break;
	}
} else {
	include_once 'maxbuttons-buttons.php';
}
?>