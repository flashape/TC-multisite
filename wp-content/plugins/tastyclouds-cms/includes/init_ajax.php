<?php
add_action( 'wp_ajax_tc_insert_variation_item', array('VariationItemAjax', 'insertVariationItem') );
add_action( 'wp_ajax_tc_update_variation_item', array('VariationItemAjax', 'updateVariationItem') );
add_action( 'wp_ajax_tc_delete_variation_item', array('VariationItemAjax', 'deleteVariationItem') );
add_action( 'wp_ajax_tc_get_variation_items', array('VariationItemAjax', 'getItemsForVariation') );
?>