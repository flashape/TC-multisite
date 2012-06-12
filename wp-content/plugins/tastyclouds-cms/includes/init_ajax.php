<?php
add_action( 'wp_ajax_tc_insert_variation_item', array('VariationItemAjax', 'insertVariationItem') );
add_action( 'wp_ajax_tc_update_variation_item', array('VariationItemAjax', 'updateVariationItem') );
add_action( 'wp_ajax_tc_delete_variation_item', array('VariationItemAjax', 'deleteVariationItem') );
add_action( 'wp_ajax_tc_get_variation_items', array('VariationItemAjax', 'getItemsForVariation') );

add_action( 'wp_ajax_tc_add_variation_to_product', array('ProductVariationRulesAjax', 'addVariationToProduct') );
add_action( 'wp_ajax_tc_remove_variation_from_product', array('ProductVariationRulesAjax', 'removeVariationFromProduct') );
add_action( 'wp_ajax_tc_update_variation_label', array('ProductVariationRulesAjax', 'updateVariationLabel') );
add_action( 'wp_ajax_tc_update_variation_item_count', array('ProductVariationRulesAjax', 'updateVariationItemCount') );
add_action( 'wp_ajax_tc_get_variations_for_product', array('ProductVariationRulesAjax', 'getVariationsForProduct') );
add_action( 'wp_ajax_tc_get_rules_for_variation', array('ProductVariationRulesAjax', 'getRulesForVariation') );

add_action( 'wp_ajax_tc_insert_variation_rule', array('ProductVariationRulesAjax', 'insertVariationRule') );
add_action( 'wp_ajax_tc_update_variation_rule', array('ProductVariationRulesAjax', 'updateVariationRule') );
add_action( 'wp_ajax_tc_delete_variation_rule', array('ProductVariationRulesAjax', 'deleteVariationRule') );


add_action( 'wp_ajax_tc_add_cart_item', array('CartAjax', 'addItem') );
add_action( 'wp_ajax_nopriv_tc_add_cart_item', array('CartAjax', 'addItem') );
add_action( 'wp_ajax_tc_remove_cart_item', array('CartAjax', 'removeItem') );
add_action( 'wp_ajax_tc_update_cart_item', array('CartAjax', 'updateItem') );
add_action( 'wp_ajax_tc_upsell_popup', array('CartAjax', 'getUpsellPopup') );
add_action( 'wp_ajax_nopriv_tc_upsell_popup', array('CartAjax', 'getUpsellPopup') );


add_action( 'wp_ajax_tc_update_discount', array('CartAjax', 'updateDiscount') );

add_action( 'wp_ajax_tc_validate_coupon', array('CartAjax', 'validateCoupon') );
add_action( 'wp_ajax_tc_validate_coupon_checkout', array('CartAjax', 'validateCouponForCheckout') );
add_action( 'wp_ajax_nopriv_tc_validate_coupon_checkout', array('CartAjax', 'validateCouponForCheckout') );

add_action( 'wp_ajax_tc_remove_coupon', array('CartAjax', 'removeCoupon') );
add_action( 'wp_ajax_tc_remove_coupon_checkout', array('CartAjax', 'removeCouponForCheckout') );
add_action( 'wp_ajax_nopriv_tc_remove_coupon_checkout', array('CartAjax', 'removeCouponForCheckout') );

add_action( 'wp_ajax_tc_get_cart', array('CartAjax', 'getCart') );
add_action( 'wp_ajax_tc_reload_order', array('CartAjax', 'reloadOrder') );
add_action( 'wp_ajax_tc_enable_tax', array('CartAjax', 'enableTax') );

add_action( 'wp_ajax_tc_update_shipping_rates',  array('ShippingAjax', 'retrieveShippingRates') );
add_action( 'wp_ajax_tc_get_checkout_shipping_rates',  array('ShippingAjax', 'getShippingRatesForCheckout') );
add_action( 'wp_ajax_nopriv_tc_get_checkout_shipping_rates',  array('ShippingAjax', 'getShippingRatesForCheckout') );


add_action( 'wp_ajax_tc_insert_activity', array('ActivityAjax', 'insertActivity') );
add_action( 'wp_ajax_tc_update_activity', array('ActivityAjax', 'updateActivity') );
add_action( 'wp_ajax_tc_delete_activity', array('ActivityAjax', 'deleteActivity') );
add_action( 'wp_ajax_tc_get_activities_for_post', array('ActivityAjax', 'getActivitiesForPost') );
add_action( 'wp_ajax_tc_get_mail_for_contact', array('MailAjax', 'getMailForContact') );
add_action( 'wp_ajax_tc_get_contact_details', array('ContactAjax', 'getContactById') );
add_action( 'wp_ajax_nopriv_tc_check_email_exists', array('UserAjax', 'validateNewUserEmail') );
?>