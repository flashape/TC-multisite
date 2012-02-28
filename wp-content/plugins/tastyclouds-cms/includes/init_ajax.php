<?php
add_action( 'wp_ajax_tc_insert_variation_item', array('VariationItemAjax', 'insertVariationItem') );
add_action( 'wp_ajax_tc_update_variation_item', array('VariationItemAjax', 'updateVariationItem') );
add_action( 'wp_ajax_tc_delete_variation_item', array('VariationItemAjax', 'deleteVariationItem') );
add_action( 'wp_ajax_tc_get_variation_items', array('VariationItemAjax', 'getItemsForVariation') );

add_action( 'wp_ajax_tc_add_variation_to_product', array('ProductVariationRulesAjax', 'addVariationToProduct') );
add_action( 'wp_ajax_tc_remove_variation_from_product', array('ProductVariationRulesAjax', 'removeVariationFromProduct') );
add_action( 'wp_ajax_tc_update_variation_label', array('ProductVariationRulesAjax', 'updateVariationLabel') );
add_action( 'wp_ajax_tc_get_variations_for_product', array('ProductVariationRulesAjax', 'getVariationsForProduct') );
add_action( 'wp_ajax_tc_get_rules_for_variation', array('ProductVariationRulesAjax', 'getRulesForVariation') );

add_action( 'wp_ajax_tc_insert_variation_rule', array('ProductVariationRulesAjax', 'insertVariationRule') );
add_action( 'wp_ajax_tc_update_variation_rule', array('ProductVariationRulesAjax', 'updateVariationRule') );
add_action( 'wp_ajax_tc_delete_variation_rule', array('ProductVariationRulesAjax', 'deleteVariationRule') );

// add_action( 'wp_ajax_tc_update_variation_item', array('VariationItemAjax', 'updateVariationItem') );
// add_action( 'wp_ajax_tc_delete_variation_item', array('VariationItemAjax', 'deleteVariationItem') );
// add_action( 'wp_ajax_tc_get_variation_items', array('VariationItemAjax', 'getItemsForVariation') );
?>