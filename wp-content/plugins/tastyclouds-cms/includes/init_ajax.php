<?php
add_action( 'wp_ajax_tc_insert_variation_item', array('VariationItemAjax', 'insertVariationItem') );
add_action( 'wp_ajax_tc_update_variation_item', array('VariationItemAjax', 'updateVariationItem') );
add_action( 'wp_ajax_tc_delete_variation_item', array('VariationItemAjax', 'deleteVariationItem') );
add_action( 'wp_ajax_tc_get_variation_items', array('VariationItemAjax', 'getItemsForVariation') );

add_action( 'wp_ajax_tc_add_variation_to_product', array('ProductVariationRulesAjax', 'addVariationToProduct') );
add_action( 'wp_ajax_tc_get_variations_for_product', array('ProductVariationRulesAjax', 'getVariationsForProduct') );
add_action( 'wp_ajax_tc_insert_variation_rule', array('ProductVariationRulesAjax', 'insertVariationRule') );
// add_action( 'wp_ajax_tc_update_variation_item', array('VariationItemAjax', 'updateVariationItem') );
// add_action( 'wp_ajax_tc_delete_variation_item', array('VariationItemAjax', 'deleteVariationItem') );
// add_action( 'wp_ajax_tc_get_variation_items', array('VariationItemAjax', 'getItemsForVariation') );
?>