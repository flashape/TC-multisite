<?php

if (!class_exists("AmeriCommerceDatabaseIO", false)) 
{
include_once('File_Save.php');
include_once('File_SaveResponse.php');
include_once('AmeriCommerceHeaderInfo.php');
include_once('Manufacturer_GetByManufacturerName.php');
include_once('Manufacturer_GetByManufacturerNameResponse.php');
include_once('ManufacturerTrans.php');
include_once('DataInt32.php');
include_once('DataDateTime.php');
include_once('Order_ChangeStatusAndProcess.php');
include_once('Order_ChangeStatusAndProcessResponse.php');
include_once('Order_FillCustomFields.php');
include_once('OrderTrans.php');
include_once('OrderAddressTrans.php');
include_once('StateTrans.php');
include_once('CountryTrans.php');
include_once('OrderStatusTrans.php');
include_once('CustomerTrans.php');
include_once('CustomerPaymentMethodTrans.php');
include_once('PaymentTypes.php');
include_once('CustomerPaymentFieldTrans.php');
include_once('AddressTrans.php');
include_once('EmailLogTrans.php');
include_once('DripSeriesWhoToContactTrans.php');
include_once('GiftCertificateTrans.php');
include_once('GiftCertificateStatus.php');
include_once('DataMoney.php');
include_once('GiftCertificateTransactionHistoryTrans.php');
include_once('GiftCertificateTransactionHistoryActionType.php');
include_once('GiftCertificateTransactionHistoryStatusType.php');
include_once('CustomerAssociationTrans.php');
include_once('QBExportTypeOverride.php');
include_once('OrderItemTrans.php');
include_once('OrderShippingOrderItemsTrans.php');
include_once('OrderPaymentTrans.php');
include_once('TransactionTypes.php');
include_once('OrderPaymentFieldTrans.php');
include_once('OrderExtendedShippingTrans.php');
include_once('OrderShippingTrans.php');
include_once('Order_FillCustomFieldsResponse.php');
include_once('Order_ApplyCustomFieldValues.php');
include_once('CustomFieldData.php');
include_once('Order_ApplyCustomFieldValuesResponse.php');
include_once('Order_ParseCustomFieldValues.php');
include_once('Order_ParseCustomFieldValuesResponse.php');
include_once('Order_GetByDateRange.php');
include_once('Order_GetByDateRangeResponse.php');
include_once('Order_GetByDateRangePreFilled.php');
include_once('Order_GetByDateRangePreFilledResponse.php');
include_once('Order_GetByDateRangeAndStoreID.php');
include_once('Order_GetByDateRangeAndStoreIDResponse.php');
include_once('Order_GetByDateRangeAndStoreIDPreFilled.php');
include_once('Order_GetByDateRangeAndStoreIDPreFilledResponse.php');
include_once('Order_GetByEditDateRange.php');
include_once('Order_GetByEditDateRangeResponse.php');
include_once('Order_GetByEditDateRangePreFilled.php');
include_once('Order_GetByEditDateRangePreFilledResponse.php');
include_once('Order_GetByEditDateRangeAndStoreID.php');
include_once('Order_GetByEditDateRangeAndStoreIDResponse.php');
include_once('Order_GetByEditDateRangeAndStoreIDPreFilled.php');
include_once('Order_GetByEditDateRangeAndStoreIDPreFilledResponse.php');
include_once('Order_GetByEditDateRangeForCurrentStore.php');
include_once('Order_GetByEditDateRangeForCurrentStoreResponse.php');
include_once('Order_GetByEditDateRangeForCurrentStorePreFilled.php');
include_once('Order_GetByEditDateRangeForCurrentStorePreFilledResponse.php');
include_once('Order_GetByOrderStatus.php');
include_once('Order_GetByOrderStatusResponse.php');
include_once('Order_GetByOrderStatusPreFilled.php');
include_once('Order_GetByOrderStatusPreFilledResponse.php');
include_once('Order_GetCountByOrderStatus.php');
include_once('Order_GetCountByOrderStatusResponse.php');
include_once('Order_GetByCustomerID.php');
include_once('Order_GetByCustomerIDResponse.php');
include_once('Order_GetLastOrderID.php');
include_once('Order_GetLastOrderIDResponse.php');
include_once('Order_GetRecentlyChangedOrders.php');
include_once('Order_GetRecentlyChangedOrdersResponse.php');
include_once('Order_GetRecentlyChangedOrdersResult.php');
include_once('Order_GetByCustomerIDPreFilled.php');
include_once('Order_GetByCustomerIDPreFilledResponse.php');
include_once('OrderPayment_SetCC.php');
include_once('OrderPayment_SetCCResponse.php');
include_once('OrderPayment_GetCC.php');
include_once('OrderPayment_GetCCResponse.php');
include_once('OrderPayment_GetCVV.php');
include_once('OrderPayment_GetCVVResponse.php');
include_once('Order_SetShippingTrackingNumberAndSettleAuthsIfComplete.php');
include_once('Order_SetShippingTrackingNumberAndSettleAuthsIfCompleteResponse.php');
include_once('Order_SetShippingTrackingNumber.php');
include_once('Order_SetShippingTrackingNumberResponse.php');
include_once('OrderStatus_GetByName.php');
include_once('OrderStatus_GetByNameResponse.php');
include_once('OrderStatus_GetAll.php');
include_once('OrderStatus_GetAllResponse.php');
include_once('PageRedirect_GetByFromUrl.php');
include_once('PageRedirect_GetByFromUrlResponse.php');
include_once('PageRedirectTrans.php');
include_once('RedirectType.php');
include_once('Product_FillCustomFields.php');
include_once('ProductTrans.php');
include_once('DataDecimal.php');
include_once('ProductVariantTrans.php');
include_once('VariantPackageTrans.php');
include_once('VariantInventoryVariantsTrans.php');
include_once('PersonalizeTrans.php');
include_once('CategoryTrans.php');
include_once('ProductCategoriesTrans.php');
include_once('InactiveInStoreTrans.php');
include_once('ProductPricingTrans.php');
include_once('AttributeTrans.php');
include_once('ProductAttributeTrans.php');
include_once('VariantInventoryTrans.php');
include_once('ProductPictureTrans.php');
include_once('ShippingRateAdjustmentsTrans.php');
include_once('RelatedProductsTrans.php');
include_once('ProductGroupRelationsTrans.php');
include_once('ProductGroupType.php');
include_once('Product_FillCustomFieldsResponse.php');
include_once('Product_ApplyCustomFieldValues.php');
include_once('Product_ApplyCustomFieldValuesResponse.php');
include_once('Product_ParseCustomFieldValues.php');
include_once('Product_ParseCustomFieldValuesResponse.php');
include_once('Product_FillListedCollections.php');
include_once('Product_FillListedCollectionsResponse.php');
include_once('Product_GetByCustomBasicInfoOnly.php');
include_once('Product_GetByCustomBasicInfoOnlyResponse.php');
include_once('Product_GetByCustomBasicInfoOnlyResult.php');
include_once('Product_GetByItemNumber.php');
include_once('Product_GetByItemNumberResponse.php');
include_once('Product_GetCount.php');
include_once('Product_GetCountResponse.php');
include_once('Product_GetPrice.php');
include_once('Product_GetPriceResponse.php');
include_once('Product_GetPriceByCustomerType.php');
include_once('Product_GetPriceByCustomerTypeResponse.php');
include_once('Product_GetByCustom.php');
include_once('Product_GetByCustomResponse.php');
include_once('Product_GetTopByCustom.php');
include_once('Product_GetTopByCustomResponse.php');
include_once('Product_GetCurrentURL.php');
include_once('Product_GetCurrentURLResponse.php');
include_once('Product_Import.php');
include_once('pdtProducts.php');
include_once('ImportResults.php');
include_once('Product_ImportResponse.php');
include_once('Product_DeleteProductsViaLookup.php');
include_once('Product_DeleteProductsViaLookupResponse.php');
include_once('Product_UpdateBasicInventoryViaDataSet.php');
include_once('pdsUpdateViaDataSet.php');
include_once('Product_UpdateBasicInventoryViaDataSetResponse.php');
include_once('ProductList_GetAll.php');
include_once('ProductListTrans.php');
include_once('ProductListItemsTrans.php');
include_once('ProductList_GetAllResponse.php');
include_once('ProductList_GetByName.php');
include_once('ProductList_GetByNameResponse.php');
include_once('ProductPicture_GetVariantImageList.php');
include_once('ProductPicture_GetVariantImageListResponse.php');
include_once('ProductReviews_GetByItemID.php');
include_once('ProductReviewTrans.php');
include_once('ProductReviewApprovalStatus.php');
include_once('ProductRatingTrans.php');
include_once('ProductReviews_GetByItemIDResponse.php');
include_once('ProductStatus_GetByProductStatusName.php');
include_once('ProductStatusTrans.php');
include_once('ProductStatus_GetByProductStatusNameResponse.php');
include_once('ProductStatus_GetAll.php');
include_once('ProductStatus_GetAllResponse.php');
include_once('ProductVariant_GetByVariantName.php');
include_once('ProductVariant_GetByVariantNameResponse.php');
include_once('ProductVariantGroup_GetByVariantGroupName.php');
include_once('ProductVariantGroupTrans.php');
include_once('VariantGroupDisplayType.php');
include_once('ProductVariantGroup_GetByVariantGroupNameResponse.php');
include_once('Session_GetSessionByUID.php');
include_once('SessionTrans.php');
include_once('Session_GetSessionByUIDResponse.php');
include_once('ShippingProvider_GetByCode.php');
include_once('ShippingProviderTrans.php');
include_once('ShippingProvider_GetByCodeResponse.php');
include_once('ShippingProvider_GetByName.php');
include_once('ShippingProvider_GetByNameResponse.php');
include_once('ShippingProviderService_GetByCode.php');
include_once('ShippingProviderServiceTrans.php');
include_once('ShippingProviderService_GetByCodeResponse.php');
include_once('ShippingProviderService_GetByDisplayName.php');
include_once('ShippingProviderService_GetByDisplayNameResponse.php');
include_once('ShippingProviderService_GetByIdentifierName.php');
include_once('ShippingProviderService_GetByIdentifierNameResponse.php');
include_once('State_GetByNameOrStateCode.php');
include_once('State_GetByNameOrStateCodeResponse.php');
include_once('Store_ActivateTheme.php');
include_once('Store_ActivateThemeResponse.php');
include_once('Store_GetAll.php');
include_once('StoreTrans.php');
include_once('RemoveFromInventoryWhen.php');
include_once('SendEProductEmailWhen.php');
include_once('StoreSettingTrans.php');
include_once('Store_GetAllResponse.php');
include_once('Store_GetByName.php');
include_once('Store_GetByNameResponse.php');
include_once('Store_FillCustomFields.php');
include_once('Store_FillCustomFieldsResponse.php');
include_once('Store_ApplyCustomFieldValues.php');
include_once('Store_ApplyCustomFieldValuesResponse.php');
include_once('Store_ParseCustomFieldValues.php');
include_once('Store_ParseCustomFieldValuesResponse.php');
include_once('Theme_GetByName.php');
include_once('ThemeTrans.php');
include_once('ProductListPagingType.php');
include_once('CategoryLayoutDirection.php');
include_once('ShoppingCartShippingCalculationType.php');
include_once('AddToCartRedirectEnm.php');
include_once('ContinueShoppingOptionsEnm.php');
include_once('VariantMatrixDisplayDirection.php');
include_once('AfterUpsellRedirectToEnm.php');
include_once('PicturePopupType.php');
include_once('ShowUpsellsWhen.php');
include_once('ThemeType.php');
include_once('ThemeStyleTrans.php');
include_once('ThemeLayoutControlTrans.php');
include_once('ThemeLayoutControlSettingsValueTrans.php');
include_once('ThemeLayoutControlStyleTrans.php');
include_once('ThemeLayoutControlSettingTrans.php');
include_once('ThemePageTrans.php');
include_once('StorePageTypes.php');
include_once('ThemePageSettingsValueTrans.php');
include_once('ThemePageSettingTrans.php');
include_once('ThemeAssetBundleTrans.php');
include_once('ThemeAssetTrans.php');
include_once('ThemeSettingTrans.php');
include_once('Theme_GetByNameResponse.php');
include_once('Theme_GetAll.php');
include_once('Theme_GetAllResponse.php');
include_once('VariantInventory_GetByVariantInventoryItemNumber.php');
include_once('VariantInventory_GetByVariantInventoryItemNumberResponse.php');
include_once('Visitor_GetCountByDateRangeAndStoreID.php');
include_once('Visitor_GetCountByDateRangeAndStoreIDResponse.php');
include_once('Visitor_GetNewCountByDateRangeAndStoreID.php');
include_once('Visitor_GetNewCountByDateRangeAndStoreIDResponse.php');
include_once('DoTimedEvents.php');
include_once('DoTimedEventsResponse.php');
include_once('BackgroundProcess_Abort.php');
include_once('BackgroundProcess_AbortResponse.php');
include_once('BackgroundProcess_GetCount.php');
include_once('BackgroundProcess_GetCountResponse.php');
include_once('BackgroundProcess_GetRunningProcessKeys.php');
include_once('BackgroundProcess_GetRunningProcessKeysResponse.php');
include_once('BackgroundProcess_IsRunning.php');
include_once('BackgroundProcess_IsRunningResponse.php');
include_once('Session_StartSession.php');
include_once('Session_StartSessionResponse.php');
include_once('Cart_GetBySessionID.php');
include_once('CartInfoTrans.php');
include_once('CartType.php');
include_once('CartTrans.php');
include_once('CartVariantTrans.php');
include_once('Cart_GetBySessionIDResponse.php');
include_once('Cart_AddToCart_ByItems.php');
include_once('Cart_AddToCart_ByItemsResponse.php');
include_once('Cart_AddToCart_ByItemsVariants.php');
include_once('Cart_AddToCart_ByItemsVariantsResponse.php');
include_once('Cart_AddToCart_ByItem.php');
include_once('Cart_AddToCart_ByItemResponse.php');
include_once('Cart_AddToCart_ByItemVariants.php');
include_once('Cart_AddToCart_ByItemVariantsResponse.php');
include_once('Cart_UpdateCartItem.php');
include_once('Cart_UpdateCartItemResponse.php');
include_once('Cart_RemoveCartItem.php');
include_once('Cart_RemoveCartItemResponse.php');
include_once('Cart_GetShipping.php');
include_once('Rate.php');
include_once('Cart_GetShippingResponse.php');
include_once('Cart_GetPaymentMethods.php');
include_once('ActivePaymentMethodTrans.php');
include_once('Cart_GetPaymentMethodsResponse.php');
include_once('Cart_SetShipping.php');
include_once('Cart_SetShippingResponse.php');
include_once('Cart_ClearCart.php');
include_once('Cart_ClearCartResponse.php');
include_once('Cart_PlaceOrder.php');
include_once('PlaceOrderTrans.php');
include_once('PlaceOrderResponseTrans.php');
include_once('Cart_PlaceOrderResponse.php');
include_once('Store_GetBySessionID.php');
include_once('Store_GetBySessionIDResponse.php');
include_once('Customer_GetBySessionID.php');
include_once('Customer_GetBySessionIDResponse.php');
include_once('Store_GetCurrent.php');
include_once('Store_GetCurrentResponse.php');
include_once('MailingLists_GetByCustomerID.php');
include_once('MailingListTrans.php');
include_once('MailingListType.php');
include_once('MailingListRuleTrans.php');
include_once('MailingListRuleType.php');
include_once('MailingListMemberTrans.php');
include_once('MailingLists_GetByCustomerIDResponse.php');
include_once('Authenticate.php');
include_once('AuthenticateResponse.php');
include_once('GetSingleSignonKey.php');
include_once('GetSingleSignonKeyResponse.php');
include_once('GetCustomerSingleSignonKey.php');
include_once('GetCustomerSingleSignonKeyResponse.php');
include_once('StoreShippingOptions_GetByKey.php');
include_once('StoreShippingOptionsTrans.php');
include_once('ShippingOptionType.php');
include_once('ShippingMarkupType.php');
include_once('StoreShippingOptions_GetByKeyResponse.php');
include_once('StoreShippingOptions_Save.php');
include_once('StoreShippingOptions_SaveResponse.php');
include_once('StoreShippingOptions_SaveAndGet.php');
include_once('StoreShippingOptions_SaveAndGetResponse.php');
include_once('StoreShippingOptions_Validate.php');
include_once('StoreShippingOptions_ValidateResponse.php');
include_once('TaxRates_Clone.php');
include_once('TaxRatesTrans.php');
include_once('TaxRates_CloneResponse.php');
include_once('TaxRates_Delete.php');
include_once('TaxRates_DeleteResponse.php');
include_once('TaxRates_Exists.php');
include_once('TaxRates_ExistsResponse.php');
include_once('TaxRates_GetByKey.php');
include_once('TaxRates_GetByKeyResponse.php');
include_once('TaxRates_Save.php');
include_once('TaxRates_SaveResponse.php');
include_once('TaxRates_SaveAndGet.php');
include_once('TaxRates_SaveAndGetResponse.php');
include_once('TaxRates_Validate.php');
include_once('TaxRates_ValidateResponse.php');
include_once('Theme_Clone.php');
include_once('Theme_CloneResponse.php');
include_once('Theme_Delete.php');
include_once('Theme_DeleteResponse.php');
include_once('Theme_Exists.php');
include_once('Theme_ExistsResponse.php');
include_once('Theme_GetByKey.php');
include_once('Theme_GetByKeyResponse.php');
include_once('Theme_Save.php');
include_once('Theme_SaveResponse.php');
include_once('Theme_SaveAndGet.php');
include_once('Theme_SaveAndGetResponse.php');
include_once('Theme_Validate.php');
include_once('Theme_ValidateResponse.php');
include_once('Theme_FillThemeStyleCollection.php');
include_once('Theme_FillThemeStyleCollectionResponse.php');
include_once('User_Clone.php');
include_once('UserTrans.php');
include_once('UserGroupTrans.php');
include_once('UserGroupPermissionTrans.php');
include_once('UserRolesTrans.php');
include_once('UserSettingTrans.php');
include_once('User_CloneResponse.php');
include_once('User_Delete.php');
include_once('User_DeleteResponse.php');
include_once('User_Exists.php');
include_once('User_ExistsResponse.php');
include_once('User_GetByKey.php');
include_once('User_GetByKeyResponse.php');
include_once('User_Save.php');
include_once('User_SaveResponse.php');
include_once('User_SaveAndGet.php');
include_once('User_SaveAndGetResponse.php');
include_once('User_Validate.php');
include_once('User_ValidateResponse.php');
include_once('User_FillUserGroupCollection.php');
include_once('User_FillUserGroupCollectionResponse.php');
include_once('UserGroup_Clone.php');
include_once('UserGroup_CloneResponse.php');
include_once('UserGroup_Delete.php');
include_once('UserGroup_DeleteResponse.php');
include_once('UserGroup_Exists.php');
include_once('UserGroup_ExistsResponse.php');
include_once('UserGroup_GetByKey.php');
include_once('UserGroup_GetByKeyResponse.php');
include_once('UserGroup_Save.php');
include_once('UserGroup_SaveResponse.php');
include_once('UserGroup_SaveAndGet.php');
include_once('UserGroup_SaveAndGetResponse.php');
include_once('UserGroup_Validate.php');
include_once('UserGroup_ValidateResponse.php');
include_once('UserGroup_FillUserGroupPermissionCollection.php');
include_once('UserGroup_FillUserGroupPermissionCollectionResponse.php');
include_once('UserGroupPermission_Clone.php');
include_once('UserGroupPermission_CloneResponse.php');
include_once('UserGroupPermission_Delete.php');
include_once('UserGroupPermission_DeleteResponse.php');
include_once('UserGroupPermission_Exists.php');
include_once('UserGroupPermission_ExistsResponse.php');
include_once('UserGroupPermission_GetByKey.php');
include_once('UserGroupPermission_GetByKeyResponse.php');
include_once('UserGroupPermission_Save.php');
include_once('UserGroupPermission_SaveResponse.php');
include_once('UserGroupPermission_SaveAndGet.php');
include_once('UserGroupPermission_SaveAndGetResponse.php');
include_once('UserGroupPermission_Validate.php');
include_once('UserGroupPermission_ValidateResponse.php');
include_once('UserRoles_Clone.php');
include_once('UserRoles_CloneResponse.php');
include_once('UserRoles_Delete.php');
include_once('UserRoles_DeleteResponse.php');
include_once('UserRoles_Exists.php');
include_once('UserRoles_ExistsResponse.php');
include_once('UserRoles_GetByKey.php');
include_once('UserRoles_GetByKeyResponse.php');
include_once('UserRoles_Save.php');
include_once('UserRoles_SaveResponse.php');
include_once('UserRoles_SaveAndGet.php');
include_once('UserRoles_SaveAndGetResponse.php');
include_once('UserRoles_Validate.php');
include_once('UserRoles_ValidateResponse.php');
include_once('VariantInventory_Clone.php');
include_once('VariantInventory_CloneResponse.php');
include_once('VariantInventory_Delete.php');
include_once('VariantInventory_DeleteResponse.php');
include_once('VariantInventory_Exists.php');
include_once('VariantInventory_ExistsResponse.php');
include_once('VariantInventory_GetByKey.php');
include_once('VariantInventory_GetByKeyResponse.php');
include_once('VariantInventory_Save.php');
include_once('VariantInventory_SaveResponse.php');
include_once('VariantInventory_SaveAndGet.php');
include_once('VariantInventory_SaveAndGetResponse.php');
include_once('VariantInventory_Validate.php');
include_once('VariantInventory_ValidateResponse.php');
include_once('VariantInventory_FillProductPricingCollection.php');
include_once('VariantInventory_FillProductPricingCollectionResponse.php');
include_once('VariantInventory_FillProductVariantCollection.php');
include_once('VariantInventory_FillProductVariantCollectionResponse.php');
include_once('Warehouses_Clone.php');
include_once('WarehousesTrans.php');
include_once('Warehouses_CloneResponse.php');
include_once('Warehouses_Delete.php');
include_once('Warehouses_DeleteResponse.php');
include_once('Warehouses_Exists.php');
include_once('Warehouses_ExistsResponse.php');
include_once('Warehouses_GetByKey.php');
include_once('Warehouses_GetByKeyResponse.php');
include_once('Warehouses_Save.php');
include_once('Warehouses_SaveResponse.php');
include_once('Warehouses_SaveAndGet.php');
include_once('Warehouses_SaveAndGetResponse.php');
include_once('Warehouses_Validate.php');
include_once('Warehouses_ValidateResponse.php');
include_once('WeightUnit_Clone.php');
include_once('WeightUnitTrans.php');
include_once('WeightUnit_CloneResponse.php');
include_once('WeightUnit_Delete.php');
include_once('WeightUnit_DeleteResponse.php');
include_once('WeightUnit_Exists.php');
include_once('WeightUnit_ExistsResponse.php');
include_once('WeightUnit_GetByKey.php');
include_once('WeightUnit_GetByKeyResponse.php');
include_once('WeightUnit_Save.php');
include_once('WeightUnit_SaveResponse.php');
include_once('WeightUnit_SaveAndGet.php');
include_once('WeightUnit_SaveAndGetResponse.php');
include_once('WeightUnit_Validate.php');
include_once('WeightUnit_ValidateResponse.php');
include_once('ProductReview_Clone.php');
include_once('ProductReview_CloneResponse.php');
include_once('ProductReview_Delete.php');
include_once('ProductReview_DeleteResponse.php');
include_once('ProductReview_Exists.php');
include_once('ProductReview_ExistsResponse.php');
include_once('ProductReview_GetByKey.php');
include_once('ProductReview_GetByKeyResponse.php');
include_once('ProductReview_Save.php');
include_once('ProductReview_SaveResponse.php');
include_once('ProductReview_SaveAndGet.php');
include_once('ProductReview_SaveAndGetResponse.php');
include_once('ProductReview_Validate.php');
include_once('ProductReview_ValidateResponse.php');
include_once('ProductReview_FillProductRatingCollection.php');
include_once('ProductReview_FillProductRatingCollectionResponse.php');
include_once('MailingList_Clone.php');
include_once('MailingList_CloneResponse.php');
include_once('MailingList_Delete.php');
include_once('MailingList_DeleteResponse.php');
include_once('MailingList_Exists.php');
include_once('MailingList_ExistsResponse.php');
include_once('MailingList_GetByKey.php');
include_once('MailingList_GetByKeyResponse.php');
include_once('MailingList_Save.php');
include_once('MailingList_SaveResponse.php');
include_once('MailingList_SaveAndGet.php');
include_once('MailingList_SaveAndGetResponse.php');
include_once('MailingList_Validate.php');
include_once('MailingList_ValidateResponse.php');
include_once('MailingList_FillMailingListRuleCollection.php');
include_once('MailingList_FillMailingListRuleCollectionResponse.php');
include_once('MailingList_FillMailingListMemberCollection.php');
include_once('MailingList_FillMailingListMemberCollectionResponse.php');
include_once('MailingListMember_Clone.php');
include_once('MailingListMember_CloneResponse.php');
include_once('MailingListMember_Delete.php');
include_once('MailingListMember_DeleteResponse.php');
include_once('MailingListMember_Exists.php');
include_once('MailingListMember_ExistsResponse.php');
include_once('MailingListMember_GetByKey.php');
include_once('MailingListMember_GetByKeyResponse.php');
include_once('MailingListMember_Save.php');
include_once('MailingListMember_SaveResponse.php');
include_once('MailingListMember_SaveAndGet.php');
include_once('MailingListMember_SaveAndGetResponse.php');
include_once('MailingListMember_Validate.php');
include_once('MailingListMember_ValidateResponse.php');
include_once('AdCode_GetByCode.php');
include_once('AdCodeTrans.php');
include_once('AdCodeCreationType.php');
include_once('AdCode_GetByCodeResponse.php');
include_once('Affiliate_GetByCode.php');
include_once('AffiliateTrans.php');
include_once('Affiliate_GetByCodeResponse.php');
include_once('Attribute_GetByName.php');
include_once('Attribute_GetByNameResponse.php');
include_once('AttributeGroup_GetByName.php');
include_once('AttributeGroupTrans.php');
include_once('AttributeGroup_GetByNameResponse.php');
include_once('Cache_Reset.php');
include_once('Cache_ResetResponse.php');
include_once('Category_GetProducts.php');
include_once('Category_GetProductsResponse.php');
include_once('Category_GetByName.php');
include_once('Category_GetByNameResponse.php');
include_once('Category_GetByNameIncludingParent.php');
include_once('Category_GetByNameIncludingParentResponse.php');
include_once('Category_RebuildCategoryTree.php');
include_once('Category_RebuildCategoryTreeResponse.php');
include_once('Country_GetByNameOrCountryCode.php');
include_once('Country_GetByNameOrCountryCodeResponse.php');
include_once('CreateProductFeed.php');
include_once('ProductFeedInfo.php');
include_once('CreateProductFeedResponse.php');
include_once('CheckFeedPopulationStatus.php');
include_once('CheckFeedPopulationStatusResponse.php');
include_once('Customer_GetByEmailAndStore.php');
include_once('Customer_GetByEmailAndStoreResponse.php');
include_once('Customer_GetCount.php');
include_once('Customer_GetCountResponse.php');
include_once('Customer_GetByCustom.php');
include_once('Customer_GetByCustomResponse.php');
include_once('Customer_GetTopByCustom.php');
include_once('Customer_GetTopByCustomResponse.php');
include_once('Customer_FillCustomFields.php');
include_once('Customer_FillCustomFieldsResponse.php');
include_once('Customer_ApplyCustomFieldValues.php');
include_once('Customer_ApplyCustomFieldValuesResponse.php');
include_once('Customer_ParseCustomFieldValues.php');
include_once('Customer_ParseCustomFieldValuesResponse.php');
include_once('CustomField_SetValue.php');
include_once('CustomFieldTable.php');
include_once('CustomField_SetValueResponse.php');
include_once('Customer_SetPassword.php');
include_once('Customer_SetPasswordResponse.php');
include_once('Customer_AddToDripSeries.php');
include_once('Customer_AddToDripSeriesResponse.php');
include_once('Customer_RemoveFromDripSeries.php');
include_once('Customer_RemoveFromDripSeriesResponse.php');
include_once('CustomerType_GetByName.php');
include_once('CustomerTypeTrans.php');
include_once('CustomerType_GetByNameResponse.php');
include_once('CustomField_GetByCustom.php');
include_once('CustomFieldTrans.php');
include_once('CustomFieldValueTrans.php');
include_once('CustomFieldListItemTrans.php');
include_once('CustomField_GetByCustomResponse.php');
include_once('CustomFieldValue_GetByCustom.php');
include_once('CustomFieldValue_GetByCustomResponse.php');
include_once('GiftCertificateTransactionHistory_GetByOrderID.php');
include_once('GiftCertificateTransactionHistory_GetByOrderIDResponse.php');
include_once('GiftCertificate_GetByCode.php');
include_once('GiftCertificate_GetByCodeResponse.php');
include_once('GiftCertificate_GetByCodeAndCustomerID.php');
include_once('GiftCertificate_GetByCodeAndCustomerIDResponse.php');
include_once('Email_SendTemplate.php');
include_once('Email_SendTemplateResponse.php');
include_once('Email_SendOrderTemplate.php');
include_once('Email_SendOrderTemplateResponse.php');
include_once('ProductListItems_GetByKey.php');
include_once('ProductListItems_GetByKeyResponse.php');
include_once('ProductListItems_Save.php');
include_once('ProductListItems_SaveResponse.php');
include_once('ProductListItems_SaveAndGet.php');
include_once('ProductListItems_SaveAndGetResponse.php');
include_once('ProductListItems_Validate.php');
include_once('ProductListItems_ValidateResponse.php');
include_once('ProductPicture_Clone.php');
include_once('ProductPicture_CloneResponse.php');
include_once('ProductPicture_Delete.php');
include_once('ProductPicture_DeleteResponse.php');
include_once('ProductPicture_Exists.php');
include_once('ProductPicture_ExistsResponse.php');
include_once('ProductPicture_GetByKey.php');
include_once('ProductPicture_GetByKeyResponse.php');
include_once('ProductPicture_Save.php');
include_once('ProductPicture_SaveResponse.php');
include_once('ProductPicture_SaveAndGet.php');
include_once('ProductPicture_SaveAndGetResponse.php');
include_once('ProductPicture_Validate.php');
include_once('ProductPicture_ValidateResponse.php');
include_once('ProductPricing_Clone.php');
include_once('ProductPricing_CloneResponse.php');
include_once('ProductPricing_Delete.php');
include_once('ProductPricing_DeleteResponse.php');
include_once('ProductPricing_Exists.php');
include_once('ProductPricing_ExistsResponse.php');
include_once('ProductPricing_GetByKey.php');
include_once('ProductPricing_GetByKeyResponse.php');
include_once('ProductPricing_Save.php');
include_once('ProductPricing_SaveResponse.php');
include_once('ProductPricing_SaveAndGet.php');
include_once('ProductPricing_SaveAndGetResponse.php');
include_once('ProductPricing_Validate.php');
include_once('ProductPricing_ValidateResponse.php');
include_once('ProductStatus_Clone.php');
include_once('ProductStatus_CloneResponse.php');
include_once('ProductStatus_Delete.php');
include_once('ProductStatus_DeleteResponse.php');
include_once('ProductStatus_Exists.php');
include_once('ProductStatus_ExistsResponse.php');
include_once('ProductStatus_GetByKey.php');
include_once('ProductStatus_GetByKeyResponse.php');
include_once('ProductStatus_Save.php');
include_once('ProductStatus_SaveResponse.php');
include_once('ProductStatus_SaveAndGet.php');
include_once('ProductStatus_SaveAndGetResponse.php');
include_once('ProductStatus_Validate.php');
include_once('ProductStatus_ValidateResponse.php');
include_once('ProductVariant_Clone.php');
include_once('ProductVariant_CloneResponse.php');
include_once('ProductVariant_Delete.php');
include_once('ProductVariant_DeleteResponse.php');
include_once('ProductVariant_Exists.php');
include_once('ProductVariant_ExistsResponse.php');
include_once('ProductVariant_GetByKey.php');
include_once('ProductVariant_GetByKeyResponse.php');
include_once('ProductVariant_Save.php');
include_once('ProductVariant_SaveResponse.php');
include_once('ProductVariant_SaveAndGet.php');
include_once('ProductVariant_SaveAndGetResponse.php');
include_once('ProductVariant_Validate.php');
include_once('ProductVariant_ValidateResponse.php');
include_once('ProductVariantGroup_Clone.php');
include_once('ProductVariantGroup_CloneResponse.php');
include_once('ProductVariantGroup_Delete.php');
include_once('ProductVariantGroup_DeleteResponse.php');
include_once('ProductVariantGroup_Exists.php');
include_once('ProductVariantGroup_ExistsResponse.php');
include_once('ProductVariantGroup_GetByKey.php');
include_once('ProductVariantGroup_GetByKeyResponse.php');
include_once('ProductVariantGroup_Save.php');
include_once('ProductVariantGroup_SaveResponse.php');
include_once('ProductVariantGroup_SaveAndGet.php');
include_once('ProductVariantGroup_SaveAndGetResponse.php');
include_once('ProductVariantGroup_Validate.php');
include_once('ProductVariantGroup_ValidateResponse.php');
include_once('ProductVariantGroup_FillProductVariantCollection.php');
include_once('ProductVariantGroup_FillProductVariantCollectionResponse.php');
include_once('Regions_Clone.php');
include_once('RegionsTrans.php');
include_once('Regions_CloneResponse.php');
include_once('Regions_Delete.php');
include_once('Regions_DeleteResponse.php');
include_once('Regions_Exists.php');
include_once('Regions_ExistsResponse.php');
include_once('Regions_GetByKey.php');
include_once('Regions_GetByKeyResponse.php');
include_once('Regions_Save.php');
include_once('Regions_SaveResponse.php');
include_once('Regions_SaveAndGet.php');
include_once('Regions_SaveAndGetResponse.php');
include_once('Regions_Validate.php');
include_once('Regions_ValidateResponse.php');
include_once('RelatedProducts_Clone.php');
include_once('RelatedProducts_CloneResponse.php');
include_once('RelatedProducts_Delete.php');
include_once('RelatedProducts_DeleteResponse.php');
include_once('RelatedProducts_Exists.php');
include_once('RelatedProducts_ExistsResponse.php');
include_once('RelatedProducts_GetByKey.php');
include_once('RelatedProducts_GetByKeyResponse.php');
include_once('RelatedProducts_Save.php');
include_once('RelatedProducts_SaveResponse.php');
include_once('RelatedProducts_SaveAndGet.php');
include_once('RelatedProducts_SaveAndGetResponse.php');
include_once('RelatedProducts_Validate.php');
include_once('RelatedProducts_ValidateResponse.php');
include_once('Session_Clone.php');
include_once('Session_CloneResponse.php');
include_once('Session_Delete.php');
include_once('Session_DeleteResponse.php');
include_once('Session_Exists.php');
include_once('Session_ExistsResponse.php');
include_once('Session_GetByKey.php');
include_once('Session_GetByKeyResponse.php');
include_once('Session_Save.php');
include_once('Session_SaveResponse.php');
include_once('Session_SaveAndGet.php');
include_once('Session_SaveAndGetResponse.php');
include_once('Session_Validate.php');
include_once('Session_ValidateResponse.php');
include_once('ShippingMethod_Clone.php');
include_once('ShippingMethodTrans.php');
include_once('ShippingRuleTrans.php');
include_once('ShippingMethod_CloneResponse.php');
include_once('ShippingMethod_Delete.php');
include_once('ShippingMethod_DeleteResponse.php');
include_once('ShippingMethod_Exists.php');
include_once('ShippingMethod_ExistsResponse.php');
include_once('ShippingMethod_GetByKey.php');
include_once('ShippingMethod_GetByKeyResponse.php');
include_once('ShippingMethod_Save.php');
include_once('ShippingMethod_SaveResponse.php');
include_once('ShippingMethod_SaveAndGet.php');
include_once('ShippingMethod_SaveAndGetResponse.php');
include_once('ShippingMethod_Validate.php');
include_once('ShippingMethod_ValidateResponse.php');
include_once('ShippingMethod_FillShippingRuleCollection.php');
include_once('ShippingMethod_FillShippingRuleCollectionResponse.php');
include_once('ShippingProvider_Clone.php');
include_once('ShippingProvider_CloneResponse.php');
include_once('ShippingProvider_Delete.php');
include_once('ShippingProvider_DeleteResponse.php');
include_once('ShippingProvider_Exists.php');
include_once('ShippingProvider_ExistsResponse.php');
include_once('ShippingProvider_GetByKey.php');
include_once('ShippingProvider_GetByKeyResponse.php');
include_once('ShippingProvider_Save.php');
include_once('ShippingProvider_SaveResponse.php');
include_once('ShippingProvider_SaveAndGet.php');
include_once('ShippingProvider_SaveAndGetResponse.php');
include_once('ShippingProvider_Validate.php');
include_once('ShippingProvider_ValidateResponse.php');
include_once('ShippingProviderService_Clone.php');
include_once('ShippingProviderService_CloneResponse.php');
include_once('ShippingProviderService_Delete.php');
include_once('ShippingProviderService_DeleteResponse.php');
include_once('ShippingProviderService_Exists.php');
include_once('ShippingProviderService_ExistsResponse.php');
include_once('ShippingProviderService_GetByKey.php');
include_once('ShippingProviderService_GetByKeyResponse.php');
include_once('ShippingProviderService_Save.php');
include_once('ShippingProviderService_SaveResponse.php');
include_once('ShippingProviderService_SaveAndGet.php');
include_once('ShippingProviderService_SaveAndGetResponse.php');
include_once('ShippingProviderService_Validate.php');
include_once('ShippingProviderService_ValidateResponse.php');
include_once('ShippingRateAdjustments_Clone.php');
include_once('ShippingRateAdjustments_CloneResponse.php');
include_once('ShippingRateAdjustments_Delete.php');
include_once('ShippingRateAdjustments_DeleteResponse.php');
include_once('ShippingRateAdjustments_Exists.php');
include_once('ShippingRateAdjustments_ExistsResponse.php');
include_once('ShippingRateAdjustments_GetByKey.php');
include_once('ShippingRateAdjustments_GetByKeyResponse.php');
include_once('ShippingRateAdjustments_Save.php');
include_once('ShippingRateAdjustments_SaveResponse.php');
include_once('ShippingRateAdjustments_SaveAndGet.php');
include_once('ShippingRateAdjustments_SaveAndGetResponse.php');
include_once('ShippingRateAdjustments_Validate.php');
include_once('ShippingRateAdjustments_ValidateResponse.php');
include_once('ShippingRateAdjustmentType_Clone.php');
include_once('ShippingRateAdjustmentTypeTrans.php');
include_once('ShippingRateAdjustmentType_CloneResponse.php');
include_once('ShippingRateAdjustmentType_Delete.php');
include_once('ShippingRateAdjustmentType_DeleteResponse.php');
include_once('ShippingRateAdjustmentType_Exists.php');
include_once('ShippingRateAdjustmentType_ExistsResponse.php');
include_once('ShippingRateAdjustmentType_GetByKey.php');
include_once('ShippingRateAdjustmentType_GetByKeyResponse.php');
include_once('ShippingRateAdjustmentType_Save.php');
include_once('ShippingRateAdjustmentType_SaveResponse.php');
include_once('ShippingRateAdjustmentType_SaveAndGet.php');
include_once('ShippingRateAdjustmentType_SaveAndGetResponse.php');
include_once('ShippingRateAdjustmentType_Validate.php');
include_once('ShippingRateAdjustmentType_ValidateResponse.php');
include_once('ShippingRule_Clone.php');
include_once('ShippingRule_CloneResponse.php');
include_once('ShippingRule_Delete.php');
include_once('ShippingRule_DeleteResponse.php');
include_once('ShippingRule_Exists.php');
include_once('ShippingRule_ExistsResponse.php');
include_once('ShippingRule_GetByKey.php');
include_once('ShippingRule_GetByKeyResponse.php');
include_once('ShippingRule_Save.php');
include_once('ShippingRule_SaveResponse.php');
include_once('ShippingRule_SaveAndGet.php');
include_once('ShippingRule_SaveAndGetResponse.php');
include_once('ShippingRule_Validate.php');
include_once('ShippingRule_ValidateResponse.php');
include_once('State_Clone.php');
include_once('State_CloneResponse.php');
include_once('State_Delete.php');
include_once('State_DeleteResponse.php');
include_once('State_Exists.php');
include_once('State_ExistsResponse.php');
include_once('State_GetByKey.php');
include_once('State_GetByKeyResponse.php');
include_once('State_Save.php');
include_once('State_SaveResponse.php');
include_once('State_SaveAndGet.php');
include_once('State_SaveAndGetResponse.php');
include_once('State_Validate.php');
include_once('State_ValidateResponse.php');
include_once('Store_Clone.php');
include_once('Store_CloneResponse.php');
include_once('Store_Delete.php');
include_once('Store_DeleteResponse.php');
include_once('Store_Exists.php');
include_once('Store_ExistsResponse.php');
include_once('Store_GetByKey.php');
include_once('Store_GetByKeyResponse.php');
include_once('Store_Save.php');
include_once('Store_SaveResponse.php');
include_once('Store_SaveAndGet.php');
include_once('Store_SaveAndGetResponse.php');
include_once('Store_Validate.php');
include_once('Store_ValidateResponse.php');
include_once('StoreCardType_Clone.php');
include_once('StoreCardTypeTrans.php');
include_once('PaymentMethodCostModifierType.php');
include_once('StoreCardType_CloneResponse.php');
include_once('StoreCardType_Delete.php');
include_once('StoreCardType_DeleteResponse.php');
include_once('StoreCardType_Exists.php');
include_once('StoreCardType_ExistsResponse.php');
include_once('StoreCardType_GetByKey.php');
include_once('StoreCardType_GetByKeyResponse.php');
include_once('StoreCardType_Save.php');
include_once('StoreCardType_SaveResponse.php');
include_once('StoreCardType_SaveAndGet.php');
include_once('StoreCardType_SaveAndGetResponse.php');
include_once('StoreCardType_Validate.php');
include_once('StoreCardType_ValidateResponse.php');
include_once('StoreShippingOptions_Clone.php');
include_once('StoreShippingOptions_CloneResponse.php');
include_once('StoreShippingOptions_Delete.php');
include_once('StoreShippingOptions_DeleteResponse.php');
include_once('StoreShippingOptions_Exists.php');
include_once('StoreShippingOptions_ExistsResponse.php');
include_once('GiftCertificateType_SaveAndGet.php');
include_once('GiftCertificateTypeTrans.php');
include_once('GiftCertificateType_SaveAndGetResponse.php');
include_once('GiftCertificateType_Validate.php');
include_once('GiftCertificateType_ValidateResponse.php');
include_once('Manufacturer_Clone.php');
include_once('Manufacturer_CloneResponse.php');
include_once('Manufacturer_Delete.php');
include_once('Manufacturer_DeleteResponse.php');
include_once('Manufacturer_Exists.php');
include_once('Manufacturer_ExistsResponse.php');
include_once('Manufacturer_GetByKey.php');
include_once('Manufacturer_GetByKeyResponse.php');
include_once('Manufacturer_Save.php');
include_once('Manufacturer_SaveResponse.php');
include_once('Manufacturer_SaveAndGet.php');
include_once('Manufacturer_SaveAndGetResponse.php');
include_once('Manufacturer_Validate.php');
include_once('Manufacturer_ValidateResponse.php');
include_once('Order_Clone.php');
include_once('Order_CloneResponse.php');
include_once('Order_Delete.php');
include_once('Order_DeleteResponse.php');
include_once('Order_Exists.php');
include_once('Order_ExistsResponse.php');
include_once('Order_GetByKey.php');
include_once('Order_GetByKeyResponse.php');
include_once('Order_Save.php');
include_once('Order_SaveResponse.php');
include_once('Order_SaveAndGet.php');
include_once('Order_SaveAndGetResponse.php');
include_once('Order_Validate.php');
include_once('Order_ValidateResponse.php');
include_once('Order_FillOrderItemCollection.php');
include_once('Order_FillOrderItemCollectionResponse.php');
include_once('Order_FillOrderPaymentCollection.php');
include_once('Order_FillOrderPaymentCollectionResponse.php');
include_once('Order_FillOrderExtendedShippingCollection.php');
include_once('Order_FillOrderExtendedShippingCollectionResponse.php');
include_once('Order_FillOrderShippingCollection.php');
include_once('Order_FillOrderShippingCollectionResponse.php');
include_once('Order_FillGiftCertificateTransactionHistoryCollection.php');
include_once('Order_FillGiftCertificateTransactionHistoryCollectionResponse.php');
include_once('OrderExtendedShipping_Clone.php');
include_once('OrderExtendedShipping_CloneResponse.php');
include_once('OrderExtendedShipping_Delete.php');
include_once('OrderExtendedShipping_DeleteResponse.php');
include_once('OrderExtendedShipping_Exists.php');
include_once('OrderExtendedShipping_ExistsResponse.php');
include_once('OrderExtendedShipping_GetByKey.php');
include_once('OrderExtendedShipping_GetByKeyResponse.php');
include_once('OrderExtendedShipping_Save.php');
include_once('OrderExtendedShipping_SaveResponse.php');
include_once('OrderExtendedShipping_SaveAndGet.php');
include_once('OrderExtendedShipping_SaveAndGetResponse.php');
include_once('OrderExtendedShipping_Validate.php');
include_once('OrderExtendedShipping_ValidateResponse.php');
include_once('OrderAddress_Clone.php');
include_once('OrderAddress_CloneResponse.php');
include_once('OrderAddress_Delete.php');
include_once('OrderAddress_DeleteResponse.php');
include_once('OrderAddress_Exists.php');
include_once('OrderAddress_ExistsResponse.php');
include_once('OrderAddress_GetByKey.php');
include_once('OrderAddress_GetByKeyResponse.php');
include_once('OrderAddress_Save.php');
include_once('OrderAddress_SaveResponse.php');
include_once('OrderAddress_SaveAndGet.php');
include_once('OrderAddress_SaveAndGetResponse.php');
include_once('OrderAddress_Validate.php');
include_once('OrderAddress_ValidateResponse.php');
include_once('OrderBillingAddressTrans.php');
include_once('OrderItem_Clone.php');
include_once('OrderItem_CloneResponse.php');
include_once('OrderItem_Delete.php');
include_once('OrderItem_DeleteResponse.php');
include_once('OrderItem_Exists.php');
include_once('OrderItem_ExistsResponse.php');
include_once('OrderItem_GetByKey.php');
include_once('OrderItem_GetByKeyResponse.php');
include_once('OrderItem_Save.php');
include_once('OrderItem_SaveResponse.php');
include_once('OrderItem_SaveAndGet.php');
include_once('OrderItem_SaveAndGetResponse.php');
include_once('OrderItem_Validate.php');
include_once('OrderItem_ValidateResponse.php');
include_once('OrderPayment_Clone.php');
include_once('OrderPayment_CloneResponse.php');
include_once('OrderPayment_Delete.php');
include_once('OrderPayment_DeleteResponse.php');
include_once('OrderPayment_Exists.php');
include_once('OrderPayment_ExistsResponse.php');
include_once('OrderPayment_GetByKey.php');
include_once('OrderPayment_GetByKeyResponse.php');
include_once('OrderPayment_Save.php');
include_once('OrderPayment_SaveResponse.php');
include_once('OrderPayment_SaveAndGet.php');
include_once('OrderPayment_SaveAndGetResponse.php');
include_once('OrderPayment_Validate.php');
include_once('OrderPayment_ValidateResponse.php');
include_once('OrderPayment_FillOrderPaymentFieldCollection.php');
include_once('OrderPayment_FillOrderPaymentFieldCollectionResponse.php');
include_once('OrderShippingAddressTrans.php');
include_once('OrderShipping_Clone.php');
include_once('OrderShipping_CloneResponse.php');
include_once('OrderShipping_Delete.php');
include_once('OrderShipping_DeleteResponse.php');
include_once('OrderShipping_Exists.php');
include_once('OrderShipping_ExistsResponse.php');
include_once('OrderShipping_GetByKey.php');
include_once('OrderShipping_GetByKeyResponse.php');
include_once('OrderShipping_Save.php');
include_once('OrderShipping_SaveResponse.php');
include_once('OrderShipping_SaveAndGet.php');
include_once('OrderShipping_SaveAndGetResponse.php');
include_once('OrderShipping_Validate.php');
include_once('OrderShipping_ValidateResponse.php');
include_once('OrderShipping_FillOrderItemCollection.php');
include_once('OrderShipping_FillOrderItemCollectionResponse.php');
include_once('OrderShippingOrderItems_Clone.php');
include_once('OrderShippingOrderItems_CloneResponse.php');
include_once('OrderShippingOrderItems_Delete.php');
include_once('OrderShippingOrderItems_DeleteResponse.php');
include_once('OrderShippingOrderItems_Exists.php');
include_once('OrderShippingOrderItems_ExistsResponse.php');
include_once('OrderShippingOrderItems_GetByKey.php');
include_once('OrderShippingOrderItems_GetByKeyResponse.php');
include_once('OrderShippingOrderItems_Save.php');
include_once('OrderShippingOrderItems_SaveResponse.php');
include_once('OrderShippingOrderItems_SaveAndGet.php');
include_once('OrderShippingOrderItems_SaveAndGetResponse.php');
include_once('OrderShippingOrderItems_Validate.php');
include_once('OrderShippingOrderItems_ValidateResponse.php');
include_once('OrderStatus_Clone.php');
include_once('OrderStatus_CloneResponse.php');
include_once('OrderStatus_Delete.php');
include_once('OrderStatus_DeleteResponse.php');
include_once('OrderStatus_Exists.php');
include_once('OrderStatus_ExistsResponse.php');
include_once('OrderStatus_GetByKey.php');
include_once('OrderStatus_GetByKeyResponse.php');
include_once('OrderStatus_Save.php');
include_once('OrderStatus_SaveResponse.php');
include_once('OrderStatus_SaveAndGet.php');
include_once('OrderStatus_SaveAndGetResponse.php');
include_once('OrderStatus_Validate.php');
include_once('OrderStatus_ValidateResponse.php');
include_once('PageRedirect_Clone.php');
include_once('PageRedirect_CloneResponse.php');
include_once('PageRedirect_Delete.php');
include_once('PageRedirect_DeleteResponse.php');
include_once('PageRedirect_Exists.php');
include_once('PageRedirect_ExistsResponse.php');
include_once('PageRedirect_GetByKey.php');
include_once('PageRedirect_GetByKeyResponse.php');
include_once('PageRedirect_Save.php');
include_once('PageRedirect_SaveResponse.php');
include_once('PageRedirect_SaveAndGet.php');
include_once('PageRedirect_SaveAndGetResponse.php');
include_once('PageRedirect_Validate.php');
include_once('PageRedirect_ValidateResponse.php');
include_once('PaymentMethod_Clone.php');
include_once('PaymentMethodTrans.php');
include_once('PaymentMethodFieldTrans.php');
include_once('PaymentMethod_CloneResponse.php');
include_once('PaymentMethod_Delete.php');
include_once('PaymentMethod_DeleteResponse.php');
include_once('PaymentMethod_Exists.php');
include_once('PaymentMethod_ExistsResponse.php');
include_once('PaymentMethod_GetByKey.php');
include_once('PaymentMethod_GetByKeyResponse.php');
include_once('PaymentMethod_Save.php');
include_once('PaymentMethod_SaveResponse.php');
include_once('PaymentMethod_SaveAndGet.php');
include_once('PaymentMethod_SaveAndGetResponse.php');
include_once('PaymentMethod_Validate.php');
include_once('PaymentMethod_ValidateResponse.php');
include_once('PaymentMethod_FillPaymentMethodFieldCollection.php');
include_once('PaymentMethod_FillPaymentMethodFieldCollectionResponse.php');
include_once('PriceCalculation_Clone.php');
include_once('PriceCalculationTrans.php');
include_once('PriceRuleTrans.php');
include_once('CalculationPriceBase.php');
include_once('PriceRuleModifierTrans.php');
include_once('CalculationMathFunction.php');
include_once('CalculationModifyType.php');
include_once('CalculationOptionalModifyFunction.php');
include_once('PriceCalculation_CloneResponse.php');
include_once('PriceCalculation_Delete.php');
include_once('PriceCalculation_DeleteResponse.php');
include_once('PriceCalculation_Exists.php');
include_once('PriceCalculation_ExistsResponse.php');
include_once('PriceCalculation_GetByKey.php');
include_once('PriceCalculation_GetByKeyResponse.php');
include_once('PriceCalculation_Save.php');
include_once('PriceCalculation_SaveResponse.php');
include_once('PriceCalculation_SaveAndGet.php');
include_once('PriceCalculation_SaveAndGetResponse.php');
include_once('PriceCalculation_Validate.php');
include_once('PriceCalculation_ValidateResponse.php');
include_once('PriceCalculation_FillPriceRuleCollection.php');
include_once('PriceCalculation_FillPriceRuleCollectionResponse.php');
include_once('Product_Clone.php');
include_once('Product_CloneResponse.php');
include_once('Product_Delete.php');
include_once('Product_DeleteResponse.php');
include_once('Product_Exists.php');
include_once('Product_ExistsResponse.php');
include_once('Product_GetByKey.php');
include_once('Product_GetByKeyResponse.php');
include_once('Product_Save.php');
include_once('Product_SaveResponse.php');
include_once('Product_SaveAndGet.php');
include_once('Product_SaveAndGetResponse.php');
include_once('Product_Validate.php');
include_once('Product_ValidateResponse.php');
include_once('Product_FillProductVariantCollection.php');
include_once('Product_FillProductVariantCollectionResponse.php');
include_once('Product_FillPersonalizeCollection.php');
include_once('Product_FillPersonalizeCollectionResponse.php');
include_once('Product_FillProductCollection.php');
include_once('Product_FillProductCollectionResponse.php');
include_once('Product_FillCategoryCollection.php');
include_once('Product_FillCategoryCollectionResponse.php');
include_once('Product_FillInactiveInStoreCollection.php');
include_once('Product_FillInactiveInStoreCollectionResponse.php');
include_once('Product_FillProductPricingCollection.php');
include_once('Product_FillProductPricingCollectionResponse.php');
include_once('Product_FillAttributeCollection.php');
include_once('Product_FillAttributeCollectionResponse.php');
include_once('Product_FillVariantInventoryCollection.php');
include_once('Product_FillVariantInventoryCollectionResponse.php');
include_once('Product_FillProductPictureCollection.php');
include_once('Product_FillProductPictureCollectionResponse.php');
include_once('Product_FillProductChildCollection.php');
include_once('Product_FillProductChildCollectionResponse.php');
include_once('Product_FillShippingRateAdjustmentsCollection.php');
include_once('Product_FillShippingRateAdjustmentsCollectionResponse.php');
include_once('Product_FillVariantPackageCollection.php');
include_once('Product_FillVariantPackageCollectionResponse.php');
include_once('ProductList_Clone.php');
include_once('ProductList_CloneResponse.php');
include_once('ProductList_Delete.php');
include_once('ProductList_DeleteResponse.php');
include_once('ProductList_Exists.php');
include_once('ProductList_ExistsResponse.php');
include_once('ProductList_GetByKey.php');
include_once('ProductList_GetByKeyResponse.php');
include_once('ProductList_Save.php');
include_once('ProductList_SaveResponse.php');
include_once('ProductList_SaveAndGet.php');
include_once('ProductList_SaveAndGetResponse.php');
include_once('ProductList_Validate.php');
include_once('ProductList_ValidateResponse.php');
include_once('ProductList_FillProductListItemsCollection.php');
include_once('ProductList_FillProductListItemsCollectionResponse.php');
include_once('ProductListItems_Clone.php');
include_once('ProductListItems_CloneResponse.php');
include_once('ProductListItems_Delete.php');
include_once('ProductListItems_DeleteResponse.php');
include_once('ProductListItems_Exists.php');
include_once('ProductListItems_ExistsResponse.php');
include_once('Customer_Delete.php');
include_once('Customer_DeleteResponse.php');
include_once('Customer_Exists.php');
include_once('Customer_ExistsResponse.php');
include_once('Customer_GetByKey.php');
include_once('Customer_GetByKeyResponse.php');
include_once('Customer_Save.php');
include_once('Customer_SaveResponse.php');
include_once('Customer_SaveAndGet.php');
include_once('Customer_SaveAndGetResponse.php');
include_once('Customer_Validate.php');
include_once('Customer_ValidateResponse.php');
include_once('Customer_FillCustomerPaymentMethodCollection.php');
include_once('Customer_FillCustomerPaymentMethodCollectionResponse.php');
include_once('Customer_FillAddressCollection.php');
include_once('Customer_FillAddressCollectionResponse.php');
include_once('Customer_FillEmailLogCollection.php');
include_once('Customer_FillEmailLogCollectionResponse.php');
include_once('Customer_FillDripSeriesWhoToContactCollection.php');
include_once('Customer_FillDripSeriesWhoToContactCollectionResponse.php');
include_once('CustomerPaymentField_Clone.php');
include_once('CustomerPaymentField_CloneResponse.php');
include_once('CustomerPaymentField_Delete.php');
include_once('CustomerPaymentField_DeleteResponse.php');
include_once('CustomerPaymentField_Exists.php');
include_once('CustomerPaymentField_ExistsResponse.php');
include_once('CustomerPaymentField_GetByKey.php');
include_once('CustomerPaymentField_GetByKeyResponse.php');
include_once('CustomerPaymentField_Save.php');
include_once('CustomerPaymentField_SaveResponse.php');
include_once('CustomerPaymentField_SaveAndGet.php');
include_once('CustomerPaymentField_SaveAndGetResponse.php');
include_once('CustomerPaymentField_Validate.php');
include_once('CustomerPaymentField_ValidateResponse.php');
include_once('CustomerPaymentMethod_Clone.php');
include_once('CustomerPaymentMethod_CloneResponse.php');
include_once('CustomerPaymentMethod_Delete.php');
include_once('CustomerPaymentMethod_DeleteResponse.php');
include_once('CustomerPaymentMethod_Exists.php');
include_once('CustomerPaymentMethod_ExistsResponse.php');
include_once('CustomerPaymentMethod_GetByKey.php');
include_once('CustomerPaymentMethod_GetByKeyResponse.php');
include_once('CustomerPaymentMethod_Save.php');
include_once('CustomerPaymentMethod_SaveResponse.php');
include_once('CustomerPaymentMethod_SaveAndGet.php');
include_once('CustomerPaymentMethod_SaveAndGetResponse.php');
include_once('CustomerPaymentMethod_Validate.php');
include_once('CustomerPaymentMethod_ValidateResponse.php');
include_once('CustomerPaymentMethod_FillCustomerPaymentFieldCollection.php');
include_once('CustomerPaymentMethod_FillCustomerPaymentFieldCollectionResponse.php');
include_once('CustomerType_Clone.php');
include_once('CustomerType_CloneResponse.php');
include_once('CustomerType_Delete.php');
include_once('CustomerType_DeleteResponse.php');
include_once('CustomerType_Exists.php');
include_once('CustomerType_ExistsResponse.php');
include_once('CustomerType_GetByKey.php');
include_once('CustomerType_GetByKeyResponse.php');
include_once('CustomerType_Save.php');
include_once('CustomerType_SaveResponse.php');
include_once('CustomerType_SaveAndGet.php');
include_once('CustomerType_SaveAndGetResponse.php');
include_once('CustomerType_Validate.php');
include_once('CustomerType_ValidateResponse.php');
include_once('CustomField_Clone.php');
include_once('CustomField_CloneResponse.php');
include_once('CustomField_Delete.php');
include_once('CustomField_DeleteResponse.php');
include_once('CustomField_Exists.php');
include_once('CustomField_ExistsResponse.php');
include_once('CustomField_GetByKey.php');
include_once('CustomField_GetByKeyResponse.php');
include_once('CustomField_Save.php');
include_once('CustomField_SaveResponse.php');
include_once('CustomField_SaveAndGet.php');
include_once('CustomField_SaveAndGetResponse.php');
include_once('CustomField_Validate.php');
include_once('CustomField_ValidateResponse.php');
include_once('CustomField_FillCustomFieldValueCollection.php');
include_once('CustomField_FillCustomFieldValueCollectionResponse.php');
include_once('CustomField_FillCustomFieldListItemCollection.php');
include_once('CustomField_FillCustomFieldListItemCollectionResponse.php');
include_once('CustomFieldValue_Clone.php');
include_once('CustomFieldValue_CloneResponse.php');
include_once('CustomFieldValue_Delete.php');
include_once('CustomFieldValue_DeleteResponse.php');
include_once('CustomFieldValue_Exists.php');
include_once('CustomFieldValue_ExistsResponse.php');
include_once('CustomFieldValue_GetByKey.php');
include_once('CustomFieldValue_GetByKeyResponse.php');
include_once('CustomFieldValue_Save.php');
include_once('CustomFieldValue_SaveResponse.php');
include_once('CustomFieldValue_SaveAndGet.php');
include_once('CustomFieldValue_SaveAndGetResponse.php');
include_once('CustomFieldValue_Validate.php');
include_once('CustomFieldValue_ValidateResponse.php');
include_once('CustomFieldListItem_Clone.php');
include_once('CustomFieldListItem_CloneResponse.php');
include_once('CustomFieldListItem_Delete.php');
include_once('CustomFieldListItem_DeleteResponse.php');
include_once('CustomFieldListItem_Exists.php');
include_once('CustomFieldListItem_ExistsResponse.php');
include_once('CustomFieldListItem_GetByKey.php');
include_once('CustomFieldListItem_GetByKeyResponse.php');
include_once('CustomFieldListItem_Save.php');
include_once('CustomFieldListItem_SaveResponse.php');
include_once('CustomFieldListItem_SaveAndGet.php');
include_once('CustomFieldListItem_SaveAndGetResponse.php');
include_once('CustomFieldListItem_Validate.php');
include_once('CustomFieldListItem_ValidateResponse.php');
include_once('DiscountMethods_Clone.php');
include_once('DiscountMethodsTrans.php');
include_once('DiscountRulesTrans.php');
include_once('DiscountMethods_CloneResponse.php');
include_once('DiscountMethods_Delete.php');
include_once('DiscountMethods_DeleteResponse.php');
include_once('DiscountMethods_Exists.php');
include_once('DiscountMethods_ExistsResponse.php');
include_once('DiscountMethods_GetByKey.php');
include_once('DiscountMethods_GetByKeyResponse.php');
include_once('DiscountMethods_Save.php');
include_once('DiscountMethods_SaveResponse.php');
include_once('DiscountMethods_SaveAndGet.php');
include_once('DiscountMethods_SaveAndGetResponse.php');
include_once('DiscountMethods_Validate.php');
include_once('DiscountMethods_ValidateResponse.php');
include_once('DiscountMethods_FillDiscountRulesCollection.php');
include_once('DiscountMethods_FillDiscountRulesCollectionResponse.php');
include_once('DiscountRules_Clone.php');
include_once('DiscountRules_CloneResponse.php');
include_once('DiscountRules_Delete.php');
include_once('DiscountRules_DeleteResponse.php');
include_once('DiscountRules_Exists.php');
include_once('DiscountRules_ExistsResponse.php');
include_once('DiscountRules_GetByKey.php');
include_once('DiscountRules_GetByKeyResponse.php');
include_once('DiscountRules_Save.php');
include_once('DiscountRules_SaveResponse.php');
include_once('DiscountRules_SaveAndGet.php');
include_once('DiscountRules_SaveAndGetResponse.php');
include_once('DiscountRules_Validate.php');
include_once('DiscountRules_ValidateResponse.php');
include_once('DripSeries_Clone.php');
include_once('DripSeriesTrans.php');
include_once('DripSeriesWhatShouldHappenTrans.php');
include_once('DripSeriesWhatToDo.php');
include_once('DripSeriesTimeInterval.php');
include_once('DripSeriesWhenToDo.php');
include_once('DripSeries_CloneResponse.php');
include_once('DripSeries_Delete.php');
include_once('DripSeries_DeleteResponse.php');
include_once('DripSeries_Exists.php');
include_once('DripSeries_ExistsResponse.php');
include_once('DripSeries_GetByKey.php');
include_once('DripSeries_GetByKeyResponse.php');
include_once('DripSeries_Save.php');
include_once('DripSeries_SaveResponse.php');
include_once('DripSeries_SaveAndGet.php');
include_once('DripSeries_SaveAndGetResponse.php');
include_once('DripSeries_Validate.php');
include_once('DripSeries_ValidateResponse.php');
include_once('DripSeries_FillDripSeriesWhoToContactCollection.php');
include_once('DripSeries_FillDripSeriesWhoToContactCollectionResponse.php');
include_once('DripSeries_FillDripSeriesWhatShouldHappenCollection.php');
include_once('DripSeries_FillDripSeriesWhatShouldHappenCollectionResponse.php');
include_once('DripSeriesWhatShouldHappen_Clone.php');
include_once('DripSeriesWhatShouldHappen_CloneResponse.php');
include_once('DripSeriesWhatShouldHappen_Delete.php');
include_once('DripSeriesWhatShouldHappen_DeleteResponse.php');
include_once('DripSeriesWhatShouldHappen_Exists.php');
include_once('DripSeriesWhatShouldHappen_ExistsResponse.php');
include_once('DripSeriesWhatShouldHappen_GetByKey.php');
include_once('DripSeriesWhatShouldHappen_GetByKeyResponse.php');
include_once('DripSeriesWhatShouldHappen_Save.php');
include_once('DripSeriesWhatShouldHappen_SaveResponse.php');
include_once('DripSeriesWhatShouldHappen_SaveAndGet.php');
include_once('DripSeriesWhatShouldHappen_SaveAndGetResponse.php');
include_once('DripSeriesWhatShouldHappen_Validate.php');
include_once('DripSeriesWhatShouldHappen_ValidateResponse.php');
include_once('DripSeriesWhoToContact_Clone.php');
include_once('DripSeriesWhoToContact_CloneResponse.php');
include_once('DripSeriesWhoToContact_Delete.php');
include_once('DripSeriesWhoToContact_DeleteResponse.php');
include_once('DripSeriesWhoToContact_Exists.php');
include_once('DripSeriesWhoToContact_ExistsResponse.php');
include_once('DripSeriesWhoToContact_GetByKey.php');
include_once('DripSeriesWhoToContact_GetByKeyResponse.php');
include_once('DripSeriesWhoToContact_Save.php');
include_once('DripSeriesWhoToContact_SaveResponse.php');
include_once('DripSeriesWhoToContact_SaveAndGet.php');
include_once('DripSeriesWhoToContact_SaveAndGetResponse.php');
include_once('DripSeriesWhoToContact_Validate.php');
include_once('DripSeriesWhoToContact_ValidateResponse.php');
include_once('EmailLog_Clone.php');
include_once('EmailLog_CloneResponse.php');
include_once('EmailLog_Delete.php');
include_once('EmailLog_DeleteResponse.php');
include_once('EmailLog_Exists.php');
include_once('EmailLog_ExistsResponse.php');
include_once('EmailLog_GetByKey.php');
include_once('EmailLog_GetByKeyResponse.php');
include_once('EmailLog_Save.php');
include_once('EmailLog_SaveResponse.php');
include_once('EmailLog_SaveAndGet.php');
include_once('EmailLog_SaveAndGetResponse.php');
include_once('EmailLog_Validate.php');
include_once('EmailLog_ValidateResponse.php');
include_once('GiftCertificate_Clone.php');
include_once('GiftCertificate_CloneResponse.php');
include_once('GiftCertificate_Delete.php');
include_once('GiftCertificate_DeleteResponse.php');
include_once('GiftCertificate_Exists.php');
include_once('GiftCertificate_ExistsResponse.php');
include_once('GiftCertificate_GetByKey.php');
include_once('GiftCertificate_GetByKeyResponse.php');
include_once('GiftCertificate_Save.php');
include_once('GiftCertificate_SaveResponse.php');
include_once('GiftCertificate_SaveAndGet.php');
include_once('GiftCertificate_SaveAndGetResponse.php');
include_once('GiftCertificate_Validate.php');
include_once('GiftCertificate_ValidateResponse.php');
include_once('GiftCertificate_FillGiftCertificateTransactionHistoryCollection.php');
include_once('GiftCertificate_FillGiftCertificateTransactionHistoryCollectionResponse.php');
include_once('GiftCertificateBatch_Clone.php');
include_once('GiftCertificateBatchTrans.php');
include_once('GiftCertificateBatch_CloneResponse.php');
include_once('GiftCertificateBatch_Delete.php');
include_once('GiftCertificateBatch_DeleteResponse.php');
include_once('GiftCertificateBatch_Exists.php');
include_once('GiftCertificateBatch_ExistsResponse.php');
include_once('GiftCertificateBatch_GetByKey.php');
include_once('GiftCertificateBatch_GetByKeyResponse.php');
include_once('GiftCertificateBatch_Save.php');
include_once('GiftCertificateBatch_SaveResponse.php');
include_once('GiftCertificateBatch_SaveAndGet.php');
include_once('GiftCertificateBatch_SaveAndGetResponse.php');
include_once('GiftCertificateBatch_Validate.php');
include_once('GiftCertificateBatch_ValidateResponse.php');
include_once('GiftCertificateBatch_FillGiftCertificateCollection.php');
include_once('GiftCertificateBatch_FillGiftCertificateCollectionResponse.php');
include_once('GiftCertificateTransactionHistory_Clone.php');
include_once('GiftCertificateTransactionHistory_CloneResponse.php');
include_once('GiftCertificateTransactionHistory_Delete.php');
include_once('GiftCertificateTransactionHistory_DeleteResponse.php');
include_once('GiftCertificateTransactionHistory_Exists.php');
include_once('GiftCertificateTransactionHistory_ExistsResponse.php');
include_once('GiftCertificateTransactionHistory_GetByKey.php');
include_once('GiftCertificateTransactionHistory_GetByKeyResponse.php');
include_once('GiftCertificateTransactionHistory_Save.php');
include_once('GiftCertificateTransactionHistory_SaveResponse.php');
include_once('GiftCertificateTransactionHistory_SaveAndGet.php');
include_once('GiftCertificateTransactionHistory_SaveAndGetResponse.php');
include_once('GiftCertificateTransactionHistory_Validate.php');
include_once('GiftCertificateTransactionHistory_ValidateResponse.php');
include_once('GiftCertificateType_Clone.php');
include_once('GiftCertificateType_CloneResponse.php');
include_once('GiftCertificateType_Delete.php');
include_once('GiftCertificateType_DeleteResponse.php');
include_once('GiftCertificateType_Exists.php');
include_once('GiftCertificateType_ExistsResponse.php');
include_once('GiftCertificateType_GetByKey.php');
include_once('GiftCertificateType_GetByKeyResponse.php');
include_once('GiftCertificateType_Save.php');
include_once('GiftCertificateType_SaveResponse.php');
include_once('TestHelloWorld.php');
include_once('TestHelloWorldResponse.php');
include_once('TestTransport.php');
include_once('TestTrans.php');
include_once('TestTransportResponse.php');
include_once('TestPricingCollectionAsTransport.php');
include_once('TestPricingCollectionAsTransportResponse.php');
include_once('TestPricingCollectionAsTransportReturned.php');
include_once('TestPricingCollectionAsTransportReturnedResponse.php');
include_once('TestPricingCollectionAsTransportNoReturn.php');
include_once('TestPricingCollectionAsTransportNoReturnResponse.php');
include_once('TestDataSetAsTransportReturned.php');
include_once('pdsReturned.php');
include_once('TestDataSetAsTransportReturnedResponse.php');
include_once('TestDataSetAsTransportReturnedResult.php');
include_once('TestDataSetAsTransport.php');
include_once('TestDataSetAsTransportResponse.php');
include_once('TestDataSetAsTransportResult.php');
include_once('ActiveInStore_Clone.php');
include_once('ActiveInStoreTrans.php');
include_once('ActiveInStore_CloneResponse.php');
include_once('ActiveInStore_Delete.php');
include_once('ActiveInStore_DeleteResponse.php');
include_once('ActiveInStore_Exists.php');
include_once('ActiveInStore_ExistsResponse.php');
include_once('ActiveInStore_GetByKey.php');
include_once('ActiveInStore_GetByKeyResponse.php');
include_once('ActiveInStore_Save.php');
include_once('ActiveInStore_SaveResponse.php');
include_once('ActiveInStore_SaveAndGet.php');
include_once('ActiveInStore_SaveAndGetResponse.php');
include_once('ActiveInStore_Validate.php');
include_once('ActiveInStore_ValidateResponse.php');
include_once('AdCode_Clone.php');
include_once('AdCode_CloneResponse.php');
include_once('AdCode_Delete.php');
include_once('AdCode_DeleteResponse.php');
include_once('AdCode_Exists.php');
include_once('AdCode_ExistsResponse.php');
include_once('AdCode_GetByKey.php');
include_once('AdCode_GetByKeyResponse.php');
include_once('AdCode_Save.php');
include_once('AdCode_SaveResponse.php');
include_once('AdCode_SaveAndGet.php');
include_once('AdCode_SaveAndGetResponse.php');
include_once('AdCode_Validate.php');
include_once('AdCode_ValidateResponse.php');
include_once('Address_Clone.php');
include_once('Address_CloneResponse.php');
include_once('Address_Delete.php');
include_once('Address_DeleteResponse.php');
include_once('Address_Exists.php');
include_once('Address_ExistsResponse.php');
include_once('Address_GetByKey.php');
include_once('Address_GetByKeyResponse.php');
include_once('Address_Save.php');
include_once('Address_SaveResponse.php');
include_once('Address_SaveAndGet.php');
include_once('Address_SaveAndGetResponse.php');
include_once('Address_Validate.php');
include_once('Address_ValidateResponse.php');
include_once('Affiliate_Clone.php');
include_once('Affiliate_CloneResponse.php');
include_once('Affiliate_Delete.php');
include_once('Affiliate_DeleteResponse.php');
include_once('Affiliate_Exists.php');
include_once('Affiliate_ExistsResponse.php');
include_once('Affiliate_GetByKey.php');
include_once('Affiliate_GetByKeyResponse.php');
include_once('Affiliate_Save.php');
include_once('Affiliate_SaveResponse.php');
include_once('Affiliate_SaveAndGet.php');
include_once('Affiliate_SaveAndGetResponse.php');
include_once('Affiliate_Validate.php');
include_once('Affiliate_ValidateResponse.php');
include_once('AffiliateStatus_Clone.php');
include_once('AffiliateStatusTrans.php');
include_once('AffiliateStatus_CloneResponse.php');
include_once('AffiliateStatus_Delete.php');
include_once('AffiliateStatus_DeleteResponse.php');
include_once('AffiliateStatus_Exists.php');
include_once('AffiliateStatus_ExistsResponse.php');
include_once('AffiliateStatus_GetByKey.php');
include_once('AffiliateStatus_GetByKeyResponse.php');
include_once('AffiliateStatus_Save.php');
include_once('AffiliateStatus_SaveResponse.php');
include_once('AffiliateStatus_SaveAndGet.php');
include_once('AffiliateStatus_SaveAndGetResponse.php');
include_once('AffiliateStatus_Validate.php');
include_once('AffiliateStatus_ValidateResponse.php');
include_once('AnalyticAction_Clone.php');
include_once('AnalyticActionTrans.php');
include_once('AnalyticAction_CloneResponse.php');
include_once('AnalyticAction_Delete.php');
include_once('AnalyticAction_DeleteResponse.php');
include_once('AnalyticAction_Exists.php');
include_once('AnalyticAction_ExistsResponse.php');
include_once('AnalyticAction_GetByKey.php');
include_once('AnalyticAction_GetByKeyResponse.php');
include_once('AnalyticAction_Save.php');
include_once('AnalyticAction_SaveResponse.php');
include_once('AnalyticAction_SaveAndGet.php');
include_once('AnalyticAction_SaveAndGetResponse.php');
include_once('AnalyticAction_Validate.php');
include_once('AnalyticAction_ValidateResponse.php');
include_once('AnalyticCondition_Clone.php');
include_once('AnalyticConditionTrans.php');
include_once('AnalyticCondition_CloneResponse.php');
include_once('AnalyticCondition_Delete.php');
include_once('AnalyticCondition_DeleteResponse.php');
include_once('AnalyticCondition_Exists.php');
include_once('AnalyticCondition_ExistsResponse.php');
include_once('AnalyticCondition_GetByKey.php');
include_once('AnalyticCondition_GetByKeyResponse.php');
include_once('AnalyticCondition_Save.php');
include_once('AnalyticCondition_SaveResponse.php');
include_once('AnalyticCondition_SaveAndGet.php');
include_once('AnalyticCondition_SaveAndGetResponse.php');
include_once('AnalyticCondition_Validate.php');
include_once('AnalyticCondition_ValidateResponse.php');
include_once('AnalyticRule_Clone.php');
include_once('AnalyticRuleTrans.php');
include_once('AnalyticRule_CloneResponse.php');
include_once('AnalyticRule_Delete.php');
include_once('AnalyticRule_DeleteResponse.php');
include_once('AnalyticRule_Exists.php');
include_once('AnalyticRule_ExistsResponse.php');
include_once('AnalyticRule_GetByKey.php');
include_once('AnalyticRule_GetByKeyResponse.php');
include_once('AnalyticRule_Save.php');
include_once('AnalyticRule_SaveResponse.php');
include_once('AnalyticRule_SaveAndGet.php');
include_once('AnalyticRule_SaveAndGetResponse.php');
include_once('AnalyticRule_Validate.php');
include_once('AnalyticRule_ValidateResponse.php');
include_once('AnalyticRule_FillAnalyticActionCollection.php');
include_once('AnalyticRule_FillAnalyticActionCollectionResponse.php');
include_once('AnalyticRule_FillAnalyticConditionCollection.php');
include_once('AnalyticRule_FillAnalyticConditionCollectionResponse.php');
include_once('Attribute_Clone.php');
include_once('Attribute_CloneResponse.php');
include_once('Attribute_Delete.php');
include_once('Attribute_DeleteResponse.php');
include_once('Attribute_Exists.php');
include_once('Attribute_ExistsResponse.php');
include_once('Attribute_GetByKey.php');
include_once('Attribute_GetByKeyResponse.php');
include_once('Attribute_Save.php');
include_once('Attribute_SaveResponse.php');
include_once('Attribute_SaveAndGet.php');
include_once('Attribute_SaveAndGetResponse.php');
include_once('Attribute_Validate.php');
include_once('Attribute_ValidateResponse.php');
include_once('AttributeGroup_Clone.php');
include_once('AttributeGroup_CloneResponse.php');
include_once('AttributeGroup_Delete.php');
include_once('AttributeGroup_DeleteResponse.php');
include_once('AttributeGroup_Exists.php');
include_once('AttributeGroup_ExistsResponse.php');
include_once('AttributeGroup_GetByKey.php');
include_once('AttributeGroup_GetByKeyResponse.php');
include_once('AttributeGroup_Save.php');
include_once('AttributeGroup_SaveResponse.php');
include_once('AttributeGroup_SaveAndGet.php');
include_once('AttributeGroup_SaveAndGetResponse.php');
include_once('AttributeGroup_Validate.php');
include_once('AttributeGroup_ValidateResponse.php');
include_once('AttributeGroup_FillAttributeCollection.php');
include_once('AttributeGroup_FillAttributeCollectionResponse.php');
include_once('Cart_Clone.php');
include_once('Cart_CloneResponse.php');
include_once('Cart_Delete.php');
include_once('Cart_DeleteResponse.php');
include_once('Cart_Exists.php');
include_once('Cart_ExistsResponse.php');
include_once('Cart_GetByKey.php');
include_once('Cart_GetByKeyResponse.php');
include_once('Cart_Save.php');
include_once('Cart_SaveResponse.php');
include_once('Cart_SaveAndGet.php');
include_once('Cart_SaveAndGetResponse.php');
include_once('Cart_Validate.php');
include_once('Cart_ValidateResponse.php');
include_once('Cart_FillCartVariantCollection.php');
include_once('Cart_FillCartVariantCollectionResponse.php');
include_once('Cart_FillCartChildCollection.php');
include_once('Cart_FillCartChildCollectionResponse.php');
include_once('CreditCard_Clone.php');
include_once('CreditCardTrans.php');
include_once('CreditCard_CloneResponse.php');
include_once('CreditCard_Delete.php');
include_once('CreditCard_DeleteResponse.php');
include_once('CreditCard_Exists.php');
include_once('CreditCard_ExistsResponse.php');
include_once('CreditCard_GetByKey.php');
include_once('CreditCard_GetByKeyResponse.php');
include_once('CreditCard_Save.php');
include_once('CreditCard_SaveResponse.php');
include_once('CreditCard_SaveAndGet.php');
include_once('CreditCard_SaveAndGetResponse.php');
include_once('CreditCard_Validate.php');
include_once('CreditCard_ValidateResponse.php');
include_once('CartInfo_Clone.php');
include_once('CartInfo_CloneResponse.php');
include_once('CartInfo_Delete.php');
include_once('CartInfo_DeleteResponse.php');
include_once('CartInfo_Exists.php');
include_once('CartInfo_ExistsResponse.php');
include_once('CartInfo_GetByKey.php');
include_once('CartInfo_GetByKeyResponse.php');
include_once('CartInfo_Save.php');
include_once('CartInfo_SaveResponse.php');
include_once('CartInfo_SaveAndGet.php');
include_once('CartInfo_SaveAndGetResponse.php');
include_once('CartInfo_Validate.php');
include_once('CartInfo_ValidateResponse.php');
include_once('CartInfo_FillCartCollection.php');
include_once('CartInfo_FillCartCollectionResponse.php');
include_once('CartVariant_Clone.php');
include_once('CartVariant_CloneResponse.php');
include_once('CartVariant_Delete.php');
include_once('CartVariant_DeleteResponse.php');
include_once('CartVariant_Exists.php');
include_once('CartVariant_ExistsResponse.php');
include_once('CartVariant_GetByKey.php');
include_once('CartVariant_GetByKeyResponse.php');
include_once('CartVariant_Save.php');
include_once('CartVariant_SaveResponse.php');
include_once('CartVariant_SaveAndGet.php');
include_once('CartVariant_SaveAndGetResponse.php');
include_once('CartVariant_Validate.php');
include_once('CartVariant_ValidateResponse.php');
include_once('Category_Clone.php');
include_once('Category_CloneResponse.php');
include_once('Category_Delete.php');
include_once('Category_DeleteResponse.php');
include_once('Category_Exists.php');
include_once('Category_ExistsResponse.php');
include_once('Category_GetByKey.php');
include_once('Category_GetByKeyResponse.php');
include_once('Category_Save.php');
include_once('Category_SaveResponse.php');
include_once('Category_SaveAndGet.php');
include_once('Category_SaveAndGetResponse.php');
include_once('Category_Validate.php');
include_once('Category_ValidateResponse.php');
include_once('Category_FillCategoryCollection.php');
include_once('Category_FillCategoryCollectionResponse.php');
include_once('Category_FillProductCollection.php');
include_once('Category_FillProductCollectionResponse.php');
include_once('Country_Clone.php');
include_once('Country_CloneResponse.php');
include_once('Country_Delete.php');
include_once('Country_DeleteResponse.php');
include_once('Country_Exists.php');
include_once('Country_ExistsResponse.php');
include_once('Country_GetByKey.php');
include_once('Country_GetByKeyResponse.php');
include_once('Country_Save.php');
include_once('Country_SaveResponse.php');
include_once('Country_SaveAndGet.php');
include_once('Country_SaveAndGetResponse.php');
include_once('Country_Validate.php');
include_once('Country_ValidateResponse.php');
include_once('Customer_Clone.php');
include_once('Customer_CloneResponse.php');
include_once('Dictionary.php');
include_once('Items.php');
include_once('DictionaryItem.php');


/**
 * Raw access to the AmeriCommerce database, all tables, relationships and collections supported.  This web service will return XML responses for each of the methods, however, you can incorporate and reference the AmeriCommerce Interface DLL in your code and it will provide you with an object oriented way to use this XML in your code.  It contains Transport objects with a property for each of the properties returned from this web service.
 * 
 */
class AmeriCommerceDatabaseIO extends SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'File_Save' => 'File_Save',
    'File_SaveResponse' => 'File_SaveResponse',
    'AmeriCommerceHeaderInfo' => 'AmeriCommerceHeaderInfo',
    'Manufacturer_GetByManufacturerName' => 'Manufacturer_GetByManufacturerName',
    'Manufacturer_GetByManufacturerNameResponse' => 'Manufacturer_GetByManufacturerNameResponse',
    'ManufacturerTrans' => 'ManufacturerTrans',
    'DataInt32' => 'DataInt32',
    'DataDateTime' => 'DataDateTime',
    'Order_ChangeStatusAndProcess' => 'Order_ChangeStatusAndProcess',
    'Order_ChangeStatusAndProcessResponse' => 'Order_ChangeStatusAndProcessResponse',
    'Order_FillCustomFields' => 'Order_FillCustomFields',
    'OrderTrans' => 'OrderTrans',
    'OrderAddressTrans' => 'OrderAddressTrans',
    'OrderShippingAddressTrans' => 'OrderShippingAddressTrans',
    'OrderBillingAddressTrans' => 'OrderBillingAddressTrans',
    'StateTrans' => 'StateTrans',
    'CountryTrans' => 'CountryTrans',
    'OrderStatusTrans' => 'OrderStatusTrans',
    'CustomerTrans' => 'CustomerTrans',
    'CustomerPaymentMethodTrans' => 'CustomerPaymentMethodTrans',
    'CustomerPaymentFieldTrans' => 'CustomerPaymentFieldTrans',
    'AddressTrans' => 'AddressTrans',
    'EmailLogTrans' => 'EmailLogTrans',
    'DripSeriesWhoToContactTrans' => 'DripSeriesWhoToContactTrans',
    'GiftCertificateTrans' => 'GiftCertificateTrans',
    'DataMoney' => 'DataMoney',
    'GiftCertificateTransactionHistoryTrans' => 'GiftCertificateTransactionHistoryTrans',
    'CustomerAssociationTrans' => 'CustomerAssociationTrans',
    'OrderItemTrans' => 'OrderItemTrans',
    'OrderShippingOrderItemsTrans' => 'OrderShippingOrderItemsTrans',
    'OrderPaymentTrans' => 'OrderPaymentTrans',
    'OrderPaymentFieldTrans' => 'OrderPaymentFieldTrans',
    'OrderExtendedShippingTrans' => 'OrderExtendedShippingTrans',
    'OrderShippingTrans' => 'OrderShippingTrans',
    'Order_FillCustomFieldsResponse' => 'Order_FillCustomFieldsResponse',
    'Order_ApplyCustomFieldValues' => 'Order_ApplyCustomFieldValues',
    'CustomFieldData' => 'CustomFieldData',
    'Order_ApplyCustomFieldValuesResponse' => 'Order_ApplyCustomFieldValuesResponse',
    'Order_ParseCustomFieldValues' => 'Order_ParseCustomFieldValues',
    'Order_ParseCustomFieldValuesResponse' => 'Order_ParseCustomFieldValuesResponse',
    'Order_GetByDateRange' => 'Order_GetByDateRange',
    'Order_GetByDateRangeResponse' => 'Order_GetByDateRangeResponse',
    'Order_GetByDateRangePreFilled' => 'Order_GetByDateRangePreFilled',
    'Order_GetByDateRangePreFilledResponse' => 'Order_GetByDateRangePreFilledResponse',
    'Order_GetByDateRangeAndStoreID' => 'Order_GetByDateRangeAndStoreID',
    'Order_GetByDateRangeAndStoreIDResponse' => 'Order_GetByDateRangeAndStoreIDResponse',
    'Order_GetByDateRangeAndStoreIDPreFilled' => 'Order_GetByDateRangeAndStoreIDPreFilled',
    'Order_GetByDateRangeAndStoreIDPreFilledResponse' => 'Order_GetByDateRangeAndStoreIDPreFilledResponse',
    'Order_GetByEditDateRange' => 'Order_GetByEditDateRange',
    'Order_GetByEditDateRangeResponse' => 'Order_GetByEditDateRangeResponse',
    'Order_GetByEditDateRangePreFilled' => 'Order_GetByEditDateRangePreFilled',
    'Order_GetByEditDateRangePreFilledResponse' => 'Order_GetByEditDateRangePreFilledResponse',
    'Order_GetByEditDateRangeAndStoreID' => 'Order_GetByEditDateRangeAndStoreID',
    'Order_GetByEditDateRangeAndStoreIDResponse' => 'Order_GetByEditDateRangeAndStoreIDResponse',
    'Order_GetByEditDateRangeAndStoreIDPreFilled' => 'Order_GetByEditDateRangeAndStoreIDPreFilled',
    'Order_GetByEditDateRangeAndStoreIDPreFilledResponse' => 'Order_GetByEditDateRangeAndStoreIDPreFilledResponse',
    'Order_GetByEditDateRangeForCurrentStore' => 'Order_GetByEditDateRangeForCurrentStore',
    'Order_GetByEditDateRangeForCurrentStoreResponse' => 'Order_GetByEditDateRangeForCurrentStoreResponse',
    'Order_GetByEditDateRangeForCurrentStorePreFilled' => 'Order_GetByEditDateRangeForCurrentStorePreFilled',
    'Order_GetByEditDateRangeForCurrentStorePreFilledResponse' => 'Order_GetByEditDateRangeForCurrentStorePreFilledResponse',
    'Order_GetByOrderStatus' => 'Order_GetByOrderStatus',
    'Order_GetByOrderStatusResponse' => 'Order_GetByOrderStatusResponse',
    'Order_GetByOrderStatusPreFilled' => 'Order_GetByOrderStatusPreFilled',
    'Order_GetByOrderStatusPreFilledResponse' => 'Order_GetByOrderStatusPreFilledResponse',
    'Order_GetCountByOrderStatus' => 'Order_GetCountByOrderStatus',
    'Order_GetCountByOrderStatusResponse' => 'Order_GetCountByOrderStatusResponse',
    'Order_GetByCustomerID' => 'Order_GetByCustomerID',
    'Order_GetByCustomerIDResponse' => 'Order_GetByCustomerIDResponse',
    'Order_GetLastOrderID' => 'Order_GetLastOrderID',
    'Order_GetLastOrderIDResponse' => 'Order_GetLastOrderIDResponse',
    'Order_GetRecentlyChangedOrders' => 'Order_GetRecentlyChangedOrders',
    'Order_GetRecentlyChangedOrdersResponse' => 'Order_GetRecentlyChangedOrdersResponse',
    'Order_GetRecentlyChangedOrdersResult' => 'Order_GetRecentlyChangedOrdersResult',
    'Order_GetByCustomerIDPreFilled' => 'Order_GetByCustomerIDPreFilled',
    'Order_GetByCustomerIDPreFilledResponse' => 'Order_GetByCustomerIDPreFilledResponse',
    'OrderPayment_SetCC' => 'OrderPayment_SetCC',
    'OrderPayment_SetCCResponse' => 'OrderPayment_SetCCResponse',
    'OrderPayment_GetCC' => 'OrderPayment_GetCC',
    'OrderPayment_GetCCResponse' => 'OrderPayment_GetCCResponse',
    'OrderPayment_GetCVV' => 'OrderPayment_GetCVV',
    'OrderPayment_GetCVVResponse' => 'OrderPayment_GetCVVResponse',
    'Order_SetShippingTrackingNumberAndSettleAuthsIfComplete' => 'Order_SetShippingTrackingNumberAndSettleAuthsIfComplete',
    'Order_SetShippingTrackingNumberAndSettleAuthsIfCompleteResponse' => 'Order_SetShippingTrackingNumberAndSettleAuthsIfCompleteResponse',
    'Order_SetShippingTrackingNumber' => 'Order_SetShippingTrackingNumber',
    'Order_SetShippingTrackingNumberResponse' => 'Order_SetShippingTrackingNumberResponse',
    'OrderStatus_GetByName' => 'OrderStatus_GetByName',
    'OrderStatus_GetByNameResponse' => 'OrderStatus_GetByNameResponse',
    'OrderStatus_GetAll' => 'OrderStatus_GetAll',
    'OrderStatus_GetAllResponse' => 'OrderStatus_GetAllResponse',
    'PageRedirect_GetByFromUrl' => 'PageRedirect_GetByFromUrl',
    'PageRedirect_GetByFromUrlResponse' => 'PageRedirect_GetByFromUrlResponse',
    'PageRedirectTrans' => 'PageRedirectTrans',
    'Product_FillCustomFields' => 'Product_FillCustomFields',
    'ProductTrans' => 'ProductTrans',
    'DataDecimal' => 'DataDecimal',
    'ProductVariantTrans' => 'ProductVariantTrans',
    'VariantPackageTrans' => 'VariantPackageTrans',
    'VariantInventoryVariantsTrans' => 'VariantInventoryVariantsTrans',
    'PersonalizeTrans' => 'PersonalizeTrans',
    'CategoryTrans' => 'CategoryTrans',
    'ProductCategoriesTrans' => 'ProductCategoriesTrans',
    'InactiveInStoreTrans' => 'InactiveInStoreTrans',
    'ProductPricingTrans' => 'ProductPricingTrans',
    'AttributeTrans' => 'AttributeTrans',
    'ProductAttributeTrans' => 'ProductAttributeTrans',
    'VariantInventoryTrans' => 'VariantInventoryTrans',
    'ProductPictureTrans' => 'ProductPictureTrans',
    'ShippingRateAdjustmentsTrans' => 'ShippingRateAdjustmentsTrans',
    'RelatedProductsTrans' => 'RelatedProductsTrans',
    'ProductGroupRelationsTrans' => 'ProductGroupRelationsTrans',
    'Product_FillCustomFieldsResponse' => 'Product_FillCustomFieldsResponse',
    'Product_ApplyCustomFieldValues' => 'Product_ApplyCustomFieldValues',
    'Product_ApplyCustomFieldValuesResponse' => 'Product_ApplyCustomFieldValuesResponse',
    'Product_ParseCustomFieldValues' => 'Product_ParseCustomFieldValues',
    'Product_ParseCustomFieldValuesResponse' => 'Product_ParseCustomFieldValuesResponse',
    'Product_FillListedCollections' => 'Product_FillListedCollections',
    'Product_FillListedCollectionsResponse' => 'Product_FillListedCollectionsResponse',
    'Product_GetByCustomBasicInfoOnly' => 'Product_GetByCustomBasicInfoOnly',
    'Product_GetByCustomBasicInfoOnlyResponse' => 'Product_GetByCustomBasicInfoOnlyResponse',
    'Product_GetByCustomBasicInfoOnlyResult' => 'Product_GetByCustomBasicInfoOnlyResult',
    'Product_GetByItemNumber' => 'Product_GetByItemNumber',
    'Product_GetByItemNumberResponse' => 'Product_GetByItemNumberResponse',
    'Product_GetCount' => 'Product_GetCount',
    'Product_GetCountResponse' => 'Product_GetCountResponse',
    'Product_GetPrice' => 'Product_GetPrice',
    'Product_GetPriceResponse' => 'Product_GetPriceResponse',
    'Product_GetPriceByCustomerType' => 'Product_GetPriceByCustomerType',
    'Product_GetPriceByCustomerTypeResponse' => 'Product_GetPriceByCustomerTypeResponse',
    'Product_GetByCustom' => 'Product_GetByCustom',
    'Product_GetByCustomResponse' => 'Product_GetByCustomResponse',
    'Product_GetTopByCustom' => 'Product_GetTopByCustom',
    'Product_GetTopByCustomResponse' => 'Product_GetTopByCustomResponse',
    'Product_GetCurrentURL' => 'Product_GetCurrentURL',
    'Product_GetCurrentURLResponse' => 'Product_GetCurrentURLResponse',
    'Product_Import' => 'Product_Import',
    'pdtProducts' => 'pdtProducts',
    'ImportResults' => 'ImportResults',
    'Product_ImportResponse' => 'Product_ImportResponse',
    'Product_DeleteProductsViaLookup' => 'Product_DeleteProductsViaLookup',
    'Product_DeleteProductsViaLookupResponse' => 'Product_DeleteProductsViaLookupResponse',
    'Product_UpdateBasicInventoryViaDataSet' => 'Product_UpdateBasicInventoryViaDataSet',
    'pdsUpdateViaDataSet' => 'pdsUpdateViaDataSet',
    'Product_UpdateBasicInventoryViaDataSetResponse' => 'Product_UpdateBasicInventoryViaDataSetResponse',
    'ProductList_GetAll' => 'ProductList_GetAll',
    'ProductListTrans' => 'ProductListTrans',
    'ProductListItemsTrans' => 'ProductListItemsTrans',
    'ProductList_GetAllResponse' => 'ProductList_GetAllResponse',
    'ProductList_GetByName' => 'ProductList_GetByName',
    'ProductList_GetByNameResponse' => 'ProductList_GetByNameResponse',
    'ProductPicture_GetVariantImageList' => 'ProductPicture_GetVariantImageList',
    'ProductPicture_GetVariantImageListResponse' => 'ProductPicture_GetVariantImageListResponse',
    'ProductReviews_GetByItemID' => 'ProductReviews_GetByItemID',
    'ProductReviewTrans' => 'ProductReviewTrans',
    'ProductRatingTrans' => 'ProductRatingTrans',
    'ProductReviews_GetByItemIDResponse' => 'ProductReviews_GetByItemIDResponse',
    'ProductStatus_GetByProductStatusName' => 'ProductStatus_GetByProductStatusName',
    'ProductStatusTrans' => 'ProductStatusTrans',
    'ProductStatus_GetByProductStatusNameResponse' => 'ProductStatus_GetByProductStatusNameResponse',
    'ProductStatus_GetAll' => 'ProductStatus_GetAll',
    'ProductStatus_GetAllResponse' => 'ProductStatus_GetAllResponse',
    'ProductVariant_GetByVariantName' => 'ProductVariant_GetByVariantName',
    'ProductVariant_GetByVariantNameResponse' => 'ProductVariant_GetByVariantNameResponse',
    'ProductVariantGroup_GetByVariantGroupName' => 'ProductVariantGroup_GetByVariantGroupName',
    'ProductVariantGroupTrans' => 'ProductVariantGroupTrans',
    'ProductVariantGroup_GetByVariantGroupNameResponse' => 'ProductVariantGroup_GetByVariantGroupNameResponse',
    'Session_GetSessionByUID' => 'Session_GetSessionByUID',
    'SessionTrans' => 'SessionTrans',
    'Session_GetSessionByUIDResponse' => 'Session_GetSessionByUIDResponse',
    'ShippingProvider_GetByCode' => 'ShippingProvider_GetByCode',
    'ShippingProviderTrans' => 'ShippingProviderTrans',
    'ShippingProvider_GetByCodeResponse' => 'ShippingProvider_GetByCodeResponse',
    'ShippingProvider_GetByName' => 'ShippingProvider_GetByName',
    'ShippingProvider_GetByNameResponse' => 'ShippingProvider_GetByNameResponse',
    'ShippingProviderService_GetByCode' => 'ShippingProviderService_GetByCode',
    'ShippingProviderServiceTrans' => 'ShippingProviderServiceTrans',
    'ShippingProviderService_GetByCodeResponse' => 'ShippingProviderService_GetByCodeResponse',
    'ShippingProviderService_GetByDisplayName' => 'ShippingProviderService_GetByDisplayName',
    'ShippingProviderService_GetByDisplayNameResponse' => 'ShippingProviderService_GetByDisplayNameResponse',
    'ShippingProviderService_GetByIdentifierName' => 'ShippingProviderService_GetByIdentifierName',
    'ShippingProviderService_GetByIdentifierNameResponse' => 'ShippingProviderService_GetByIdentifierNameResponse',
    'State_GetByNameOrStateCode' => 'State_GetByNameOrStateCode',
    'State_GetByNameOrStateCodeResponse' => 'State_GetByNameOrStateCodeResponse',
    'Store_ActivateTheme' => 'Store_ActivateTheme',
    'Store_ActivateThemeResponse' => 'Store_ActivateThemeResponse',
    'Store_GetAll' => 'Store_GetAll',
    'StoreTrans' => 'StoreTrans',
    'StoreSettingTrans' => 'StoreSettingTrans',
    'Store_GetAllResponse' => 'Store_GetAllResponse',
    'Store_GetByName' => 'Store_GetByName',
    'Store_GetByNameResponse' => 'Store_GetByNameResponse',
    'Store_FillCustomFields' => 'Store_FillCustomFields',
    'Store_FillCustomFieldsResponse' => 'Store_FillCustomFieldsResponse',
    'Store_ApplyCustomFieldValues' => 'Store_ApplyCustomFieldValues',
    'Store_ApplyCustomFieldValuesResponse' => 'Store_ApplyCustomFieldValuesResponse',
    'Store_ParseCustomFieldValues' => 'Store_ParseCustomFieldValues',
    'Store_ParseCustomFieldValuesResponse' => 'Store_ParseCustomFieldValuesResponse',
    'Theme_GetByName' => 'Theme_GetByName',
    'ThemeTrans' => 'ThemeTrans',
    'ThemeStyleTrans' => 'ThemeStyleTrans',
    'ThemeLayoutControlTrans' => 'ThemeLayoutControlTrans',
    'ThemeLayoutControlSettingsValueTrans' => 'ThemeLayoutControlSettingsValueTrans',
    'ThemeLayoutControlStyleTrans' => 'ThemeLayoutControlStyleTrans',
    'ThemeLayoutControlSettingTrans' => 'ThemeLayoutControlSettingTrans',
    'ThemePageTrans' => 'ThemePageTrans',
    'ThemePageSettingsValueTrans' => 'ThemePageSettingsValueTrans',
    'ThemePageSettingTrans' => 'ThemePageSettingTrans',
    'ThemeAssetBundleTrans' => 'ThemeAssetBundleTrans',
    'ThemeAssetTrans' => 'ThemeAssetTrans',
    'ThemeSettingTrans' => 'ThemeSettingTrans',
    'Theme_GetByNameResponse' => 'Theme_GetByNameResponse',
    'Theme_GetAll' => 'Theme_GetAll',
    'Theme_GetAllResponse' => 'Theme_GetAllResponse',
    'VariantInventory_GetByVariantInventoryItemNumber' => 'VariantInventory_GetByVariantInventoryItemNumber',
    'VariantInventory_GetByVariantInventoryItemNumberResponse' => 'VariantInventory_GetByVariantInventoryItemNumberResponse',
    'Visitor_GetCountByDateRangeAndStoreID' => 'Visitor_GetCountByDateRangeAndStoreID',
    'Visitor_GetCountByDateRangeAndStoreIDResponse' => 'Visitor_GetCountByDateRangeAndStoreIDResponse',
    'Visitor_GetNewCountByDateRangeAndStoreID' => 'Visitor_GetNewCountByDateRangeAndStoreID',
    'Visitor_GetNewCountByDateRangeAndStoreIDResponse' => 'Visitor_GetNewCountByDateRangeAndStoreIDResponse',
    'DoTimedEvents' => 'DoTimedEvents',
    'DoTimedEventsResponse' => 'DoTimedEventsResponse',
    'BackgroundProcess_Abort' => 'BackgroundProcess_Abort',
    'BackgroundProcess_AbortResponse' => 'BackgroundProcess_AbortResponse',
    'BackgroundProcess_GetCount' => 'BackgroundProcess_GetCount',
    'BackgroundProcess_GetCountResponse' => 'BackgroundProcess_GetCountResponse',
    'BackgroundProcess_GetRunningProcessKeys' => 'BackgroundProcess_GetRunningProcessKeys',
    'BackgroundProcess_GetRunningProcessKeysResponse' => 'BackgroundProcess_GetRunningProcessKeysResponse',
    'BackgroundProcess_IsRunning' => 'BackgroundProcess_IsRunning',
    'BackgroundProcess_IsRunningResponse' => 'BackgroundProcess_IsRunningResponse',
    'Session_StartSession' => 'Session_StartSession',
    'Session_StartSessionResponse' => 'Session_StartSessionResponse',
    'Cart_GetBySessionID' => 'Cart_GetBySessionID',
    'CartInfoTrans' => 'CartInfoTrans',
    'CartTrans' => 'CartTrans',
    'CartVariantTrans' => 'CartVariantTrans',
    'Cart_GetBySessionIDResponse' => 'Cart_GetBySessionIDResponse',
    'Cart_AddToCart_ByItems' => 'Cart_AddToCart_ByItems',
    'Cart_AddToCart_ByItemsResponse' => 'Cart_AddToCart_ByItemsResponse',
    'Cart_AddToCart_ByItemsVariants' => 'Cart_AddToCart_ByItemsVariants',
    'Cart_AddToCart_ByItemsVariantsResponse' => 'Cart_AddToCart_ByItemsVariantsResponse',
    'Cart_AddToCart_ByItem' => 'Cart_AddToCart_ByItem',
    'Cart_AddToCart_ByItemResponse' => 'Cart_AddToCart_ByItemResponse',
    'Cart_AddToCart_ByItemVariants' => 'Cart_AddToCart_ByItemVariants',
    'Cart_AddToCart_ByItemVariantsResponse' => 'Cart_AddToCart_ByItemVariantsResponse',
    'Cart_UpdateCartItem' => 'Cart_UpdateCartItem',
    'Cart_UpdateCartItemResponse' => 'Cart_UpdateCartItemResponse',
    'Cart_RemoveCartItem' => 'Cart_RemoveCartItem',
    'Cart_RemoveCartItemResponse' => 'Cart_RemoveCartItemResponse',
    'Cart_GetShipping' => 'Cart_GetShipping',
    'Rate' => 'Rate',
    'Cart_GetShippingResponse' => 'Cart_GetShippingResponse',
    'Cart_GetPaymentMethods' => 'Cart_GetPaymentMethods',
    'ActivePaymentMethodTrans' => 'ActivePaymentMethodTrans',
    'Cart_GetPaymentMethodsResponse' => 'Cart_GetPaymentMethodsResponse',
    'Cart_SetShipping' => 'Cart_SetShipping',
    'Cart_SetShippingResponse' => 'Cart_SetShippingResponse',
    'Cart_ClearCart' => 'Cart_ClearCart',
    'Cart_ClearCartResponse' => 'Cart_ClearCartResponse',
    'Cart_PlaceOrder' => 'Cart_PlaceOrder',
    'PlaceOrderTrans' => 'PlaceOrderTrans',
    'PlaceOrderResponseTrans' => 'PlaceOrderResponseTrans',
    'Cart_PlaceOrderResponse' => 'Cart_PlaceOrderResponse',
    'Store_GetBySessionID' => 'Store_GetBySessionID',
    'Store_GetBySessionIDResponse' => 'Store_GetBySessionIDResponse',
    'Customer_GetBySessionID' => 'Customer_GetBySessionID',
    'Customer_GetBySessionIDResponse' => 'Customer_GetBySessionIDResponse',
    'Store_GetCurrent' => 'Store_GetCurrent',
    'Store_GetCurrentResponse' => 'Store_GetCurrentResponse',
    'MailingLists_GetByCustomerID' => 'MailingLists_GetByCustomerID',
    'MailingListTrans' => 'MailingListTrans',
    'MailingListRuleTrans' => 'MailingListRuleTrans',
    'MailingListMemberTrans' => 'MailingListMemberTrans',
    'MailingLists_GetByCustomerIDResponse' => 'MailingLists_GetByCustomerIDResponse',
    'Authenticate' => 'Authenticate',
    'AuthenticateResponse' => 'AuthenticateResponse',
    'GetSingleSignonKey' => 'GetSingleSignonKey',
    'GetSingleSignonKeyResponse' => 'GetSingleSignonKeyResponse',
    'GetCustomerSingleSignonKey' => 'GetCustomerSingleSignonKey',
    'GetCustomerSingleSignonKeyResponse' => 'GetCustomerSingleSignonKeyResponse',
    'StoreShippingOptions_GetByKey' => 'StoreShippingOptions_GetByKey',
    'StoreShippingOptionsTrans' => 'StoreShippingOptionsTrans',
    'StoreShippingOptions_GetByKeyResponse' => 'StoreShippingOptions_GetByKeyResponse',
    'StoreShippingOptions_Save' => 'StoreShippingOptions_Save',
    'StoreShippingOptions_SaveResponse' => 'StoreShippingOptions_SaveResponse',
    'StoreShippingOptions_SaveAndGet' => 'StoreShippingOptions_SaveAndGet',
    'StoreShippingOptions_SaveAndGetResponse' => 'StoreShippingOptions_SaveAndGetResponse',
    'StoreShippingOptions_Validate' => 'StoreShippingOptions_Validate',
    'StoreShippingOptions_ValidateResponse' => 'StoreShippingOptions_ValidateResponse',
    'TaxRates_Clone' => 'TaxRates_Clone',
    'TaxRatesTrans' => 'TaxRatesTrans',
    'TaxRates_CloneResponse' => 'TaxRates_CloneResponse',
    'TaxRates_Delete' => 'TaxRates_Delete',
    'TaxRates_DeleteResponse' => 'TaxRates_DeleteResponse',
    'TaxRates_Exists' => 'TaxRates_Exists',
    'TaxRates_ExistsResponse' => 'TaxRates_ExistsResponse',
    'TaxRates_GetByKey' => 'TaxRates_GetByKey',
    'TaxRates_GetByKeyResponse' => 'TaxRates_GetByKeyResponse',
    'TaxRates_Save' => 'TaxRates_Save',
    'TaxRates_SaveResponse' => 'TaxRates_SaveResponse',
    'TaxRates_SaveAndGet' => 'TaxRates_SaveAndGet',
    'TaxRates_SaveAndGetResponse' => 'TaxRates_SaveAndGetResponse',
    'TaxRates_Validate' => 'TaxRates_Validate',
    'TaxRates_ValidateResponse' => 'TaxRates_ValidateResponse',
    'Theme_Clone' => 'Theme_Clone',
    'Theme_CloneResponse' => 'Theme_CloneResponse',
    'Theme_Delete' => 'Theme_Delete',
    'Theme_DeleteResponse' => 'Theme_DeleteResponse',
    'Theme_Exists' => 'Theme_Exists',
    'Theme_ExistsResponse' => 'Theme_ExistsResponse',
    'Theme_GetByKey' => 'Theme_GetByKey',
    'Theme_GetByKeyResponse' => 'Theme_GetByKeyResponse',
    'Theme_Save' => 'Theme_Save',
    'Theme_SaveResponse' => 'Theme_SaveResponse',
    'Theme_SaveAndGet' => 'Theme_SaveAndGet',
    'Theme_SaveAndGetResponse' => 'Theme_SaveAndGetResponse',
    'Theme_Validate' => 'Theme_Validate',
    'Theme_ValidateResponse' => 'Theme_ValidateResponse',
    'Theme_FillThemeStyleCollection' => 'Theme_FillThemeStyleCollection',
    'Theme_FillThemeStyleCollectionResponse' => 'Theme_FillThemeStyleCollectionResponse',
    'User_Clone' => 'User_Clone',
    'UserTrans' => 'UserTrans',
    'UserGroupTrans' => 'UserGroupTrans',
    'UserGroupPermissionTrans' => 'UserGroupPermissionTrans',
    'UserRolesTrans' => 'UserRolesTrans',
    'UserSettingTrans' => 'UserSettingTrans',
    'User_CloneResponse' => 'User_CloneResponse',
    'User_Delete' => 'User_Delete',
    'User_DeleteResponse' => 'User_DeleteResponse',
    'User_Exists' => 'User_Exists',
    'User_ExistsResponse' => 'User_ExistsResponse',
    'User_GetByKey' => 'User_GetByKey',
    'User_GetByKeyResponse' => 'User_GetByKeyResponse',
    'User_Save' => 'User_Save',
    'User_SaveResponse' => 'User_SaveResponse',
    'User_SaveAndGet' => 'User_SaveAndGet',
    'User_SaveAndGetResponse' => 'User_SaveAndGetResponse',
    'User_Validate' => 'User_Validate',
    'User_ValidateResponse' => 'User_ValidateResponse',
    'User_FillUserGroupCollection' => 'User_FillUserGroupCollection',
    'User_FillUserGroupCollectionResponse' => 'User_FillUserGroupCollectionResponse',
    'UserGroup_Clone' => 'UserGroup_Clone',
    'UserGroup_CloneResponse' => 'UserGroup_CloneResponse',
    'UserGroup_Delete' => 'UserGroup_Delete',
    'UserGroup_DeleteResponse' => 'UserGroup_DeleteResponse',
    'UserGroup_Exists' => 'UserGroup_Exists',
    'UserGroup_ExistsResponse' => 'UserGroup_ExistsResponse',
    'UserGroup_GetByKey' => 'UserGroup_GetByKey',
    'UserGroup_GetByKeyResponse' => 'UserGroup_GetByKeyResponse',
    'UserGroup_Save' => 'UserGroup_Save',
    'UserGroup_SaveResponse' => 'UserGroup_SaveResponse',
    'UserGroup_SaveAndGet' => 'UserGroup_SaveAndGet',
    'UserGroup_SaveAndGetResponse' => 'UserGroup_SaveAndGetResponse',
    'UserGroup_Validate' => 'UserGroup_Validate',
    'UserGroup_ValidateResponse' => 'UserGroup_ValidateResponse',
    'UserGroup_FillUserGroupPermissionCollection' => 'UserGroup_FillUserGroupPermissionCollection',
    'UserGroup_FillUserGroupPermissionCollectionResponse' => 'UserGroup_FillUserGroupPermissionCollectionResponse',
    'UserGroupPermission_Clone' => 'UserGroupPermission_Clone',
    'UserGroupPermission_CloneResponse' => 'UserGroupPermission_CloneResponse',
    'UserGroupPermission_Delete' => 'UserGroupPermission_Delete',
    'UserGroupPermission_DeleteResponse' => 'UserGroupPermission_DeleteResponse',
    'UserGroupPermission_Exists' => 'UserGroupPermission_Exists',
    'UserGroupPermission_ExistsResponse' => 'UserGroupPermission_ExistsResponse',
    'UserGroupPermission_GetByKey' => 'UserGroupPermission_GetByKey',
    'UserGroupPermission_GetByKeyResponse' => 'UserGroupPermission_GetByKeyResponse',
    'UserGroupPermission_Save' => 'UserGroupPermission_Save',
    'UserGroupPermission_SaveResponse' => 'UserGroupPermission_SaveResponse',
    'UserGroupPermission_SaveAndGet' => 'UserGroupPermission_SaveAndGet',
    'UserGroupPermission_SaveAndGetResponse' => 'UserGroupPermission_SaveAndGetResponse',
    'UserGroupPermission_Validate' => 'UserGroupPermission_Validate',
    'UserGroupPermission_ValidateResponse' => 'UserGroupPermission_ValidateResponse',
    'UserRoles_Clone' => 'UserRoles_Clone',
    'UserRoles_CloneResponse' => 'UserRoles_CloneResponse',
    'UserRoles_Delete' => 'UserRoles_Delete',
    'UserRoles_DeleteResponse' => 'UserRoles_DeleteResponse',
    'UserRoles_Exists' => 'UserRoles_Exists',
    'UserRoles_ExistsResponse' => 'UserRoles_ExistsResponse',
    'UserRoles_GetByKey' => 'UserRoles_GetByKey',
    'UserRoles_GetByKeyResponse' => 'UserRoles_GetByKeyResponse',
    'UserRoles_Save' => 'UserRoles_Save',
    'UserRoles_SaveResponse' => 'UserRoles_SaveResponse',
    'UserRoles_SaveAndGet' => 'UserRoles_SaveAndGet',
    'UserRoles_SaveAndGetResponse' => 'UserRoles_SaveAndGetResponse',
    'UserRoles_Validate' => 'UserRoles_Validate',
    'UserRoles_ValidateResponse' => 'UserRoles_ValidateResponse',
    'VariantInventory_Clone' => 'VariantInventory_Clone',
    'VariantInventory_CloneResponse' => 'VariantInventory_CloneResponse',
    'VariantInventory_Delete' => 'VariantInventory_Delete',
    'VariantInventory_DeleteResponse' => 'VariantInventory_DeleteResponse',
    'VariantInventory_Exists' => 'VariantInventory_Exists',
    'VariantInventory_ExistsResponse' => 'VariantInventory_ExistsResponse',
    'VariantInventory_GetByKey' => 'VariantInventory_GetByKey',
    'VariantInventory_GetByKeyResponse' => 'VariantInventory_GetByKeyResponse',
    'VariantInventory_Save' => 'VariantInventory_Save',
    'VariantInventory_SaveResponse' => 'VariantInventory_SaveResponse',
    'VariantInventory_SaveAndGet' => 'VariantInventory_SaveAndGet',
    'VariantInventory_SaveAndGetResponse' => 'VariantInventory_SaveAndGetResponse',
    'VariantInventory_Validate' => 'VariantInventory_Validate',
    'VariantInventory_ValidateResponse' => 'VariantInventory_ValidateResponse',
    'VariantInventory_FillProductPricingCollection' => 'VariantInventory_FillProductPricingCollection',
    'VariantInventory_FillProductPricingCollectionResponse' => 'VariantInventory_FillProductPricingCollectionResponse',
    'VariantInventory_FillProductVariantCollection' => 'VariantInventory_FillProductVariantCollection',
    'VariantInventory_FillProductVariantCollectionResponse' => 'VariantInventory_FillProductVariantCollectionResponse',
    'Warehouses_Clone' => 'Warehouses_Clone',
    'WarehousesTrans' => 'WarehousesTrans',
    'Warehouses_CloneResponse' => 'Warehouses_CloneResponse',
    'Warehouses_Delete' => 'Warehouses_Delete',
    'Warehouses_DeleteResponse' => 'Warehouses_DeleteResponse',
    'Warehouses_Exists' => 'Warehouses_Exists',
    'Warehouses_ExistsResponse' => 'Warehouses_ExistsResponse',
    'Warehouses_GetByKey' => 'Warehouses_GetByKey',
    'Warehouses_GetByKeyResponse' => 'Warehouses_GetByKeyResponse',
    'Warehouses_Save' => 'Warehouses_Save',
    'Warehouses_SaveResponse' => 'Warehouses_SaveResponse',
    'Warehouses_SaveAndGet' => 'Warehouses_SaveAndGet',
    'Warehouses_SaveAndGetResponse' => 'Warehouses_SaveAndGetResponse',
    'Warehouses_Validate' => 'Warehouses_Validate',
    'Warehouses_ValidateResponse' => 'Warehouses_ValidateResponse',
    'WeightUnit_Clone' => 'WeightUnit_Clone',
    'WeightUnitTrans' => 'WeightUnitTrans',
    'WeightUnit_CloneResponse' => 'WeightUnit_CloneResponse',
    'WeightUnit_Delete' => 'WeightUnit_Delete',
    'WeightUnit_DeleteResponse' => 'WeightUnit_DeleteResponse',
    'WeightUnit_Exists' => 'WeightUnit_Exists',
    'WeightUnit_ExistsResponse' => 'WeightUnit_ExistsResponse',
    'WeightUnit_GetByKey' => 'WeightUnit_GetByKey',
    'WeightUnit_GetByKeyResponse' => 'WeightUnit_GetByKeyResponse',
    'WeightUnit_Save' => 'WeightUnit_Save',
    'WeightUnit_SaveResponse' => 'WeightUnit_SaveResponse',
    'WeightUnit_SaveAndGet' => 'WeightUnit_SaveAndGet',
    'WeightUnit_SaveAndGetResponse' => 'WeightUnit_SaveAndGetResponse',
    'WeightUnit_Validate' => 'WeightUnit_Validate',
    'WeightUnit_ValidateResponse' => 'WeightUnit_ValidateResponse',
    'ProductReview_Clone' => 'ProductReview_Clone',
    'ProductReview_CloneResponse' => 'ProductReview_CloneResponse',
    'ProductReview_Delete' => 'ProductReview_Delete',
    'ProductReview_DeleteResponse' => 'ProductReview_DeleteResponse',
    'ProductReview_Exists' => 'ProductReview_Exists',
    'ProductReview_ExistsResponse' => 'ProductReview_ExistsResponse',
    'ProductReview_GetByKey' => 'ProductReview_GetByKey',
    'ProductReview_GetByKeyResponse' => 'ProductReview_GetByKeyResponse',
    'ProductReview_Save' => 'ProductReview_Save',
    'ProductReview_SaveResponse' => 'ProductReview_SaveResponse',
    'ProductReview_SaveAndGet' => 'ProductReview_SaveAndGet',
    'ProductReview_SaveAndGetResponse' => 'ProductReview_SaveAndGetResponse',
    'ProductReview_Validate' => 'ProductReview_Validate',
    'ProductReview_ValidateResponse' => 'ProductReview_ValidateResponse',
    'ProductReview_FillProductRatingCollection' => 'ProductReview_FillProductRatingCollection',
    'ProductReview_FillProductRatingCollectionResponse' => 'ProductReview_FillProductRatingCollectionResponse',
    'MailingList_Clone' => 'MailingList_Clone',
    'MailingList_CloneResponse' => 'MailingList_CloneResponse',
    'MailingList_Delete' => 'MailingList_Delete',
    'MailingList_DeleteResponse' => 'MailingList_DeleteResponse',
    'MailingList_Exists' => 'MailingList_Exists',
    'MailingList_ExistsResponse' => 'MailingList_ExistsResponse',
    'MailingList_GetByKey' => 'MailingList_GetByKey',
    'MailingList_GetByKeyResponse' => 'MailingList_GetByKeyResponse',
    'MailingList_Save' => 'MailingList_Save',
    'MailingList_SaveResponse' => 'MailingList_SaveResponse',
    'MailingList_SaveAndGet' => 'MailingList_SaveAndGet',
    'MailingList_SaveAndGetResponse' => 'MailingList_SaveAndGetResponse',
    'MailingList_Validate' => 'MailingList_Validate',
    'MailingList_ValidateResponse' => 'MailingList_ValidateResponse',
    'MailingList_FillMailingListRuleCollection' => 'MailingList_FillMailingListRuleCollection',
    'MailingList_FillMailingListRuleCollectionResponse' => 'MailingList_FillMailingListRuleCollectionResponse',
    'MailingList_FillMailingListMemberCollection' => 'MailingList_FillMailingListMemberCollection',
    'MailingList_FillMailingListMemberCollectionResponse' => 'MailingList_FillMailingListMemberCollectionResponse',
    'MailingListMember_Clone' => 'MailingListMember_Clone',
    'MailingListMember_CloneResponse' => 'MailingListMember_CloneResponse',
    'MailingListMember_Delete' => 'MailingListMember_Delete',
    'MailingListMember_DeleteResponse' => 'MailingListMember_DeleteResponse',
    'MailingListMember_Exists' => 'MailingListMember_Exists',
    'MailingListMember_ExistsResponse' => 'MailingListMember_ExistsResponse',
    'MailingListMember_GetByKey' => 'MailingListMember_GetByKey',
    'MailingListMember_GetByKeyResponse' => 'MailingListMember_GetByKeyResponse',
    'MailingListMember_Save' => 'MailingListMember_Save',
    'MailingListMember_SaveResponse' => 'MailingListMember_SaveResponse',
    'MailingListMember_SaveAndGet' => 'MailingListMember_SaveAndGet',
    'MailingListMember_SaveAndGetResponse' => 'MailingListMember_SaveAndGetResponse',
    'MailingListMember_Validate' => 'MailingListMember_Validate',
    'MailingListMember_ValidateResponse' => 'MailingListMember_ValidateResponse',
    'AdCode_GetByCode' => 'AdCode_GetByCode',
    'AdCodeTrans' => 'AdCodeTrans',
    'AdCode_GetByCodeResponse' => 'AdCode_GetByCodeResponse',
    'Affiliate_GetByCode' => 'Affiliate_GetByCode',
    'AffiliateTrans' => 'AffiliateTrans',
    'Affiliate_GetByCodeResponse' => 'Affiliate_GetByCodeResponse',
    'Attribute_GetByName' => 'Attribute_GetByName',
    'Attribute_GetByNameResponse' => 'Attribute_GetByNameResponse',
    'AttributeGroup_GetByName' => 'AttributeGroup_GetByName',
    'AttributeGroupTrans' => 'AttributeGroupTrans',
    'AttributeGroup_GetByNameResponse' => 'AttributeGroup_GetByNameResponse',
    'Cache_Reset' => 'Cache_Reset',
    'Cache_ResetResponse' => 'Cache_ResetResponse',
    'Category_GetProducts' => 'Category_GetProducts',
    'Category_GetProductsResponse' => 'Category_GetProductsResponse',
    'Category_GetByName' => 'Category_GetByName',
    'Category_GetByNameResponse' => 'Category_GetByNameResponse',
    'Category_GetByNameIncludingParent' => 'Category_GetByNameIncludingParent',
    'Category_GetByNameIncludingParentResponse' => 'Category_GetByNameIncludingParentResponse',
    'Category_RebuildCategoryTree' => 'Category_RebuildCategoryTree',
    'Category_RebuildCategoryTreeResponse' => 'Category_RebuildCategoryTreeResponse',
    'Country_GetByNameOrCountryCode' => 'Country_GetByNameOrCountryCode',
    'Country_GetByNameOrCountryCodeResponse' => 'Country_GetByNameOrCountryCodeResponse',
    'CreateProductFeed' => 'CreateProductFeed',
    'ProductFeedInfo' => 'ProductFeedInfo',
    'CreateProductFeedResponse' => 'CreateProductFeedResponse',
    'CheckFeedPopulationStatus' => 'CheckFeedPopulationStatus',
    'CheckFeedPopulationStatusResponse' => 'CheckFeedPopulationStatusResponse',
    'Customer_GetByEmailAndStore' => 'Customer_GetByEmailAndStore',
    'Customer_GetByEmailAndStoreResponse' => 'Customer_GetByEmailAndStoreResponse',
    'Customer_GetCount' => 'Customer_GetCount',
    'Customer_GetCountResponse' => 'Customer_GetCountResponse',
    'Customer_GetByCustom' => 'Customer_GetByCustom',
    'Customer_GetByCustomResponse' => 'Customer_GetByCustomResponse',
    'Customer_GetTopByCustom' => 'Customer_GetTopByCustom',
    'Customer_GetTopByCustomResponse' => 'Customer_GetTopByCustomResponse',
    'Customer_FillCustomFields' => 'Customer_FillCustomFields',
    'Customer_FillCustomFieldsResponse' => 'Customer_FillCustomFieldsResponse',
    'Customer_ApplyCustomFieldValues' => 'Customer_ApplyCustomFieldValues',
    'Customer_ApplyCustomFieldValuesResponse' => 'Customer_ApplyCustomFieldValuesResponse',
    'Customer_ParseCustomFieldValues' => 'Customer_ParseCustomFieldValues',
    'Customer_ParseCustomFieldValuesResponse' => 'Customer_ParseCustomFieldValuesResponse',
    'CustomField_SetValue' => 'CustomField_SetValue',
    'CustomField_SetValueResponse' => 'CustomField_SetValueResponse',
    'Customer_SetPassword' => 'Customer_SetPassword',
    'Customer_SetPasswordResponse' => 'Customer_SetPasswordResponse',
    'Customer_AddToDripSeries' => 'Customer_AddToDripSeries',
    'Customer_AddToDripSeriesResponse' => 'Customer_AddToDripSeriesResponse',
    'Customer_RemoveFromDripSeries' => 'Customer_RemoveFromDripSeries',
    'Customer_RemoveFromDripSeriesResponse' => 'Customer_RemoveFromDripSeriesResponse',
    'CustomerType_GetByName' => 'CustomerType_GetByName',
    'CustomerTypeTrans' => 'CustomerTypeTrans',
    'CustomerType_GetByNameResponse' => 'CustomerType_GetByNameResponse',
    'CustomField_GetByCustom' => 'CustomField_GetByCustom',
    'CustomFieldTrans' => 'CustomFieldTrans',
    'CustomFieldValueTrans' => 'CustomFieldValueTrans',
    'CustomFieldListItemTrans' => 'CustomFieldListItemTrans',
    'CustomField_GetByCustomResponse' => 'CustomField_GetByCustomResponse',
    'CustomFieldValue_GetByCustom' => 'CustomFieldValue_GetByCustom',
    'CustomFieldValue_GetByCustomResponse' => 'CustomFieldValue_GetByCustomResponse',
    'GiftCertificateTransactionHistory_GetByOrderID' => 'GiftCertificateTransactionHistory_GetByOrderID',
    'GiftCertificateTransactionHistory_GetByOrderIDResponse' => 'GiftCertificateTransactionHistory_GetByOrderIDResponse',
    'GiftCertificate_GetByCode' => 'GiftCertificate_GetByCode',
    'GiftCertificate_GetByCodeResponse' => 'GiftCertificate_GetByCodeResponse',
    'GiftCertificate_GetByCodeAndCustomerID' => 'GiftCertificate_GetByCodeAndCustomerID',
    'GiftCertificate_GetByCodeAndCustomerIDResponse' => 'GiftCertificate_GetByCodeAndCustomerIDResponse',
    'Email_SendTemplate' => 'Email_SendTemplate',
    'Email_SendTemplateResponse' => 'Email_SendTemplateResponse',
    'Email_SendOrderTemplate' => 'Email_SendOrderTemplate',
    'Email_SendOrderTemplateResponse' => 'Email_SendOrderTemplateResponse',
    'ProductListItems_GetByKey' => 'ProductListItems_GetByKey',
    'ProductListItems_GetByKeyResponse' => 'ProductListItems_GetByKeyResponse',
    'ProductListItems_Save' => 'ProductListItems_Save',
    'ProductListItems_SaveResponse' => 'ProductListItems_SaveResponse',
    'ProductListItems_SaveAndGet' => 'ProductListItems_SaveAndGet',
    'ProductListItems_SaveAndGetResponse' => 'ProductListItems_SaveAndGetResponse',
    'ProductListItems_Validate' => 'ProductListItems_Validate',
    'ProductListItems_ValidateResponse' => 'ProductListItems_ValidateResponse',
    'ProductPicture_Clone' => 'ProductPicture_Clone',
    'ProductPicture_CloneResponse' => 'ProductPicture_CloneResponse',
    'ProductPicture_Delete' => 'ProductPicture_Delete',
    'ProductPicture_DeleteResponse' => 'ProductPicture_DeleteResponse',
    'ProductPicture_Exists' => 'ProductPicture_Exists',
    'ProductPicture_ExistsResponse' => 'ProductPicture_ExistsResponse',
    'ProductPicture_GetByKey' => 'ProductPicture_GetByKey',
    'ProductPicture_GetByKeyResponse' => 'ProductPicture_GetByKeyResponse',
    'ProductPicture_Save' => 'ProductPicture_Save',
    'ProductPicture_SaveResponse' => 'ProductPicture_SaveResponse',
    'ProductPicture_SaveAndGet' => 'ProductPicture_SaveAndGet',
    'ProductPicture_SaveAndGetResponse' => 'ProductPicture_SaveAndGetResponse',
    'ProductPicture_Validate' => 'ProductPicture_Validate',
    'ProductPicture_ValidateResponse' => 'ProductPicture_ValidateResponse',
    'ProductPricing_Clone' => 'ProductPricing_Clone',
    'ProductPricing_CloneResponse' => 'ProductPricing_CloneResponse',
    'ProductPricing_Delete' => 'ProductPricing_Delete',
    'ProductPricing_DeleteResponse' => 'ProductPricing_DeleteResponse',
    'ProductPricing_Exists' => 'ProductPricing_Exists',
    'ProductPricing_ExistsResponse' => 'ProductPricing_ExistsResponse',
    'ProductPricing_GetByKey' => 'ProductPricing_GetByKey',
    'ProductPricing_GetByKeyResponse' => 'ProductPricing_GetByKeyResponse',
    'ProductPricing_Save' => 'ProductPricing_Save',
    'ProductPricing_SaveResponse' => 'ProductPricing_SaveResponse',
    'ProductPricing_SaveAndGet' => 'ProductPricing_SaveAndGet',
    'ProductPricing_SaveAndGetResponse' => 'ProductPricing_SaveAndGetResponse',
    'ProductPricing_Validate' => 'ProductPricing_Validate',
    'ProductPricing_ValidateResponse' => 'ProductPricing_ValidateResponse',
    'ProductStatus_Clone' => 'ProductStatus_Clone',
    'ProductStatus_CloneResponse' => 'ProductStatus_CloneResponse',
    'ProductStatus_Delete' => 'ProductStatus_Delete',
    'ProductStatus_DeleteResponse' => 'ProductStatus_DeleteResponse',
    'ProductStatus_Exists' => 'ProductStatus_Exists',
    'ProductStatus_ExistsResponse' => 'ProductStatus_ExistsResponse',
    'ProductStatus_GetByKey' => 'ProductStatus_GetByKey',
    'ProductStatus_GetByKeyResponse' => 'ProductStatus_GetByKeyResponse',
    'ProductStatus_Save' => 'ProductStatus_Save',
    'ProductStatus_SaveResponse' => 'ProductStatus_SaveResponse',
    'ProductStatus_SaveAndGet' => 'ProductStatus_SaveAndGet',
    'ProductStatus_SaveAndGetResponse' => 'ProductStatus_SaveAndGetResponse',
    'ProductStatus_Validate' => 'ProductStatus_Validate',
    'ProductStatus_ValidateResponse' => 'ProductStatus_ValidateResponse',
    'ProductVariant_Clone' => 'ProductVariant_Clone',
    'ProductVariant_CloneResponse' => 'ProductVariant_CloneResponse',
    'ProductVariant_Delete' => 'ProductVariant_Delete',
    'ProductVariant_DeleteResponse' => 'ProductVariant_DeleteResponse',
    'ProductVariant_Exists' => 'ProductVariant_Exists',
    'ProductVariant_ExistsResponse' => 'ProductVariant_ExistsResponse',
    'ProductVariant_GetByKey' => 'ProductVariant_GetByKey',
    'ProductVariant_GetByKeyResponse' => 'ProductVariant_GetByKeyResponse',
    'ProductVariant_Save' => 'ProductVariant_Save',
    'ProductVariant_SaveResponse' => 'ProductVariant_SaveResponse',
    'ProductVariant_SaveAndGet' => 'ProductVariant_SaveAndGet',
    'ProductVariant_SaveAndGetResponse' => 'ProductVariant_SaveAndGetResponse',
    'ProductVariant_Validate' => 'ProductVariant_Validate',
    'ProductVariant_ValidateResponse' => 'ProductVariant_ValidateResponse',
    'ProductVariantGroup_Clone' => 'ProductVariantGroup_Clone',
    'ProductVariantGroup_CloneResponse' => 'ProductVariantGroup_CloneResponse',
    'ProductVariantGroup_Delete' => 'ProductVariantGroup_Delete',
    'ProductVariantGroup_DeleteResponse' => 'ProductVariantGroup_DeleteResponse',
    'ProductVariantGroup_Exists' => 'ProductVariantGroup_Exists',
    'ProductVariantGroup_ExistsResponse' => 'ProductVariantGroup_ExistsResponse',
    'ProductVariantGroup_GetByKey' => 'ProductVariantGroup_GetByKey',
    'ProductVariantGroup_GetByKeyResponse' => 'ProductVariantGroup_GetByKeyResponse',
    'ProductVariantGroup_Save' => 'ProductVariantGroup_Save',
    'ProductVariantGroup_SaveResponse' => 'ProductVariantGroup_SaveResponse',
    'ProductVariantGroup_SaveAndGet' => 'ProductVariantGroup_SaveAndGet',
    'ProductVariantGroup_SaveAndGetResponse' => 'ProductVariantGroup_SaveAndGetResponse',
    'ProductVariantGroup_Validate' => 'ProductVariantGroup_Validate',
    'ProductVariantGroup_ValidateResponse' => 'ProductVariantGroup_ValidateResponse',
    'ProductVariantGroup_FillProductVariantCollection' => 'ProductVariantGroup_FillProductVariantCollection',
    'ProductVariantGroup_FillProductVariantCollectionResponse' => 'ProductVariantGroup_FillProductVariantCollectionResponse',
    'Regions_Clone' => 'Regions_Clone',
    'RegionsTrans' => 'RegionsTrans',
    'Regions_CloneResponse' => 'Regions_CloneResponse',
    'Regions_Delete' => 'Regions_Delete',
    'Regions_DeleteResponse' => 'Regions_DeleteResponse',
    'Regions_Exists' => 'Regions_Exists',
    'Regions_ExistsResponse' => 'Regions_ExistsResponse',
    'Regions_GetByKey' => 'Regions_GetByKey',
    'Regions_GetByKeyResponse' => 'Regions_GetByKeyResponse',
    'Regions_Save' => 'Regions_Save',
    'Regions_SaveResponse' => 'Regions_SaveResponse',
    'Regions_SaveAndGet' => 'Regions_SaveAndGet',
    'Regions_SaveAndGetResponse' => 'Regions_SaveAndGetResponse',
    'Regions_Validate' => 'Regions_Validate',
    'Regions_ValidateResponse' => 'Regions_ValidateResponse',
    'RelatedProducts_Clone' => 'RelatedProducts_Clone',
    'RelatedProducts_CloneResponse' => 'RelatedProducts_CloneResponse',
    'RelatedProducts_Delete' => 'RelatedProducts_Delete',
    'RelatedProducts_DeleteResponse' => 'RelatedProducts_DeleteResponse',
    'RelatedProducts_Exists' => 'RelatedProducts_Exists',
    'RelatedProducts_ExistsResponse' => 'RelatedProducts_ExistsResponse',
    'RelatedProducts_GetByKey' => 'RelatedProducts_GetByKey',
    'RelatedProducts_GetByKeyResponse' => 'RelatedProducts_GetByKeyResponse',
    'RelatedProducts_Save' => 'RelatedProducts_Save',
    'RelatedProducts_SaveResponse' => 'RelatedProducts_SaveResponse',
    'RelatedProducts_SaveAndGet' => 'RelatedProducts_SaveAndGet',
    'RelatedProducts_SaveAndGetResponse' => 'RelatedProducts_SaveAndGetResponse',
    'RelatedProducts_Validate' => 'RelatedProducts_Validate',
    'RelatedProducts_ValidateResponse' => 'RelatedProducts_ValidateResponse',
    'Session_Clone' => 'Session_Clone',
    'Session_CloneResponse' => 'Session_CloneResponse',
    'Session_Delete' => 'Session_Delete',
    'Session_DeleteResponse' => 'Session_DeleteResponse',
    'Session_Exists' => 'Session_Exists',
    'Session_ExistsResponse' => 'Session_ExistsResponse',
    'Session_GetByKey' => 'Session_GetByKey',
    'Session_GetByKeyResponse' => 'Session_GetByKeyResponse',
    'Session_Save' => 'Session_Save',
    'Session_SaveResponse' => 'Session_SaveResponse',
    'Session_SaveAndGet' => 'Session_SaveAndGet',
    'Session_SaveAndGetResponse' => 'Session_SaveAndGetResponse',
    'Session_Validate' => 'Session_Validate',
    'Session_ValidateResponse' => 'Session_ValidateResponse',
    'ShippingMethod_Clone' => 'ShippingMethod_Clone',
    'ShippingMethodTrans' => 'ShippingMethodTrans',
    'ShippingRuleTrans' => 'ShippingRuleTrans',
    'ShippingMethod_CloneResponse' => 'ShippingMethod_CloneResponse',
    'ShippingMethod_Delete' => 'ShippingMethod_Delete',
    'ShippingMethod_DeleteResponse' => 'ShippingMethod_DeleteResponse',
    'ShippingMethod_Exists' => 'ShippingMethod_Exists',
    'ShippingMethod_ExistsResponse' => 'ShippingMethod_ExistsResponse',
    'ShippingMethod_GetByKey' => 'ShippingMethod_GetByKey',
    'ShippingMethod_GetByKeyResponse' => 'ShippingMethod_GetByKeyResponse',
    'ShippingMethod_Save' => 'ShippingMethod_Save',
    'ShippingMethod_SaveResponse' => 'ShippingMethod_SaveResponse',
    'ShippingMethod_SaveAndGet' => 'ShippingMethod_SaveAndGet',
    'ShippingMethod_SaveAndGetResponse' => 'ShippingMethod_SaveAndGetResponse',
    'ShippingMethod_Validate' => 'ShippingMethod_Validate',
    'ShippingMethod_ValidateResponse' => 'ShippingMethod_ValidateResponse',
    'ShippingMethod_FillShippingRuleCollection' => 'ShippingMethod_FillShippingRuleCollection',
    'ShippingMethod_FillShippingRuleCollectionResponse' => 'ShippingMethod_FillShippingRuleCollectionResponse',
    'ShippingProvider_Clone' => 'ShippingProvider_Clone',
    'ShippingProvider_CloneResponse' => 'ShippingProvider_CloneResponse',
    'ShippingProvider_Delete' => 'ShippingProvider_Delete',
    'ShippingProvider_DeleteResponse' => 'ShippingProvider_DeleteResponse',
    'ShippingProvider_Exists' => 'ShippingProvider_Exists',
    'ShippingProvider_ExistsResponse' => 'ShippingProvider_ExistsResponse',
    'ShippingProvider_GetByKey' => 'ShippingProvider_GetByKey',
    'ShippingProvider_GetByKeyResponse' => 'ShippingProvider_GetByKeyResponse',
    'ShippingProvider_Save' => 'ShippingProvider_Save',
    'ShippingProvider_SaveResponse' => 'ShippingProvider_SaveResponse',
    'ShippingProvider_SaveAndGet' => 'ShippingProvider_SaveAndGet',
    'ShippingProvider_SaveAndGetResponse' => 'ShippingProvider_SaveAndGetResponse',
    'ShippingProvider_Validate' => 'ShippingProvider_Validate',
    'ShippingProvider_ValidateResponse' => 'ShippingProvider_ValidateResponse',
    'ShippingProviderService_Clone' => 'ShippingProviderService_Clone',
    'ShippingProviderService_CloneResponse' => 'ShippingProviderService_CloneResponse',
    'ShippingProviderService_Delete' => 'ShippingProviderService_Delete',
    'ShippingProviderService_DeleteResponse' => 'ShippingProviderService_DeleteResponse',
    'ShippingProviderService_Exists' => 'ShippingProviderService_Exists',
    'ShippingProviderService_ExistsResponse' => 'ShippingProviderService_ExistsResponse',
    'ShippingProviderService_GetByKey' => 'ShippingProviderService_GetByKey',
    'ShippingProviderService_GetByKeyResponse' => 'ShippingProviderService_GetByKeyResponse',
    'ShippingProviderService_Save' => 'ShippingProviderService_Save',
    'ShippingProviderService_SaveResponse' => 'ShippingProviderService_SaveResponse',
    'ShippingProviderService_SaveAndGet' => 'ShippingProviderService_SaveAndGet',
    'ShippingProviderService_SaveAndGetResponse' => 'ShippingProviderService_SaveAndGetResponse',
    'ShippingProviderService_Validate' => 'ShippingProviderService_Validate',
    'ShippingProviderService_ValidateResponse' => 'ShippingProviderService_ValidateResponse',
    'ShippingRateAdjustments_Clone' => 'ShippingRateAdjustments_Clone',
    'ShippingRateAdjustments_CloneResponse' => 'ShippingRateAdjustments_CloneResponse',
    'ShippingRateAdjustments_Delete' => 'ShippingRateAdjustments_Delete',
    'ShippingRateAdjustments_DeleteResponse' => 'ShippingRateAdjustments_DeleteResponse',
    'ShippingRateAdjustments_Exists' => 'ShippingRateAdjustments_Exists',
    'ShippingRateAdjustments_ExistsResponse' => 'ShippingRateAdjustments_ExistsResponse',
    'ShippingRateAdjustments_GetByKey' => 'ShippingRateAdjustments_GetByKey',
    'ShippingRateAdjustments_GetByKeyResponse' => 'ShippingRateAdjustments_GetByKeyResponse',
    'ShippingRateAdjustments_Save' => 'ShippingRateAdjustments_Save',
    'ShippingRateAdjustments_SaveResponse' => 'ShippingRateAdjustments_SaveResponse',
    'ShippingRateAdjustments_SaveAndGet' => 'ShippingRateAdjustments_SaveAndGet',
    'ShippingRateAdjustments_SaveAndGetResponse' => 'ShippingRateAdjustments_SaveAndGetResponse',
    'ShippingRateAdjustments_Validate' => 'ShippingRateAdjustments_Validate',
    'ShippingRateAdjustments_ValidateResponse' => 'ShippingRateAdjustments_ValidateResponse',
    'ShippingRateAdjustmentType_Clone' => 'ShippingRateAdjustmentType_Clone',
    'ShippingRateAdjustmentTypeTrans' => 'ShippingRateAdjustmentTypeTrans',
    'ShippingRateAdjustmentType_CloneResponse' => 'ShippingRateAdjustmentType_CloneResponse',
    'ShippingRateAdjustmentType_Delete' => 'ShippingRateAdjustmentType_Delete',
    'ShippingRateAdjustmentType_DeleteResponse' => 'ShippingRateAdjustmentType_DeleteResponse',
    'ShippingRateAdjustmentType_Exists' => 'ShippingRateAdjustmentType_Exists',
    'ShippingRateAdjustmentType_ExistsResponse' => 'ShippingRateAdjustmentType_ExistsResponse',
    'ShippingRateAdjustmentType_GetByKey' => 'ShippingRateAdjustmentType_GetByKey',
    'ShippingRateAdjustmentType_GetByKeyResponse' => 'ShippingRateAdjustmentType_GetByKeyResponse',
    'ShippingRateAdjustmentType_Save' => 'ShippingRateAdjustmentType_Save',
    'ShippingRateAdjustmentType_SaveResponse' => 'ShippingRateAdjustmentType_SaveResponse',
    'ShippingRateAdjustmentType_SaveAndGet' => 'ShippingRateAdjustmentType_SaveAndGet',
    'ShippingRateAdjustmentType_SaveAndGetResponse' => 'ShippingRateAdjustmentType_SaveAndGetResponse',
    'ShippingRateAdjustmentType_Validate' => 'ShippingRateAdjustmentType_Validate',
    'ShippingRateAdjustmentType_ValidateResponse' => 'ShippingRateAdjustmentType_ValidateResponse',
    'ShippingRule_Clone' => 'ShippingRule_Clone',
    'ShippingRule_CloneResponse' => 'ShippingRule_CloneResponse',
    'ShippingRule_Delete' => 'ShippingRule_Delete',
    'ShippingRule_DeleteResponse' => 'ShippingRule_DeleteResponse',
    'ShippingRule_Exists' => 'ShippingRule_Exists',
    'ShippingRule_ExistsResponse' => 'ShippingRule_ExistsResponse',
    'ShippingRule_GetByKey' => 'ShippingRule_GetByKey',
    'ShippingRule_GetByKeyResponse' => 'ShippingRule_GetByKeyResponse',
    'ShippingRule_Save' => 'ShippingRule_Save',
    'ShippingRule_SaveResponse' => 'ShippingRule_SaveResponse',
    'ShippingRule_SaveAndGet' => 'ShippingRule_SaveAndGet',
    'ShippingRule_SaveAndGetResponse' => 'ShippingRule_SaveAndGetResponse',
    'ShippingRule_Validate' => 'ShippingRule_Validate',
    'ShippingRule_ValidateResponse' => 'ShippingRule_ValidateResponse',
    'State_Clone' => 'State_Clone',
    'State_CloneResponse' => 'State_CloneResponse',
    'State_Delete' => 'State_Delete',
    'State_DeleteResponse' => 'State_DeleteResponse',
    'State_Exists' => 'State_Exists',
    'State_ExistsResponse' => 'State_ExistsResponse',
    'State_GetByKey' => 'State_GetByKey',
    'State_GetByKeyResponse' => 'State_GetByKeyResponse',
    'State_Save' => 'State_Save',
    'State_SaveResponse' => 'State_SaveResponse',
    'State_SaveAndGet' => 'State_SaveAndGet',
    'State_SaveAndGetResponse' => 'State_SaveAndGetResponse',
    'State_Validate' => 'State_Validate',
    'State_ValidateResponse' => 'State_ValidateResponse',
    'Store_Clone' => 'Store_Clone',
    'Store_CloneResponse' => 'Store_CloneResponse',
    'Store_Delete' => 'Store_Delete',
    'Store_DeleteResponse' => 'Store_DeleteResponse',
    'Store_Exists' => 'Store_Exists',
    'Store_ExistsResponse' => 'Store_ExistsResponse',
    'Store_GetByKey' => 'Store_GetByKey',
    'Store_GetByKeyResponse' => 'Store_GetByKeyResponse',
    'Store_Save' => 'Store_Save',
    'Store_SaveResponse' => 'Store_SaveResponse',
    'Store_SaveAndGet' => 'Store_SaveAndGet',
    'Store_SaveAndGetResponse' => 'Store_SaveAndGetResponse',
    'Store_Validate' => 'Store_Validate',
    'Store_ValidateResponse' => 'Store_ValidateResponse',
    'StoreCardType_Clone' => 'StoreCardType_Clone',
    'StoreCardTypeTrans' => 'StoreCardTypeTrans',
    'StoreCardType_CloneResponse' => 'StoreCardType_CloneResponse',
    'StoreCardType_Delete' => 'StoreCardType_Delete',
    'StoreCardType_DeleteResponse' => 'StoreCardType_DeleteResponse',
    'StoreCardType_Exists' => 'StoreCardType_Exists',
    'StoreCardType_ExistsResponse' => 'StoreCardType_ExistsResponse',
    'StoreCardType_GetByKey' => 'StoreCardType_GetByKey',
    'StoreCardType_GetByKeyResponse' => 'StoreCardType_GetByKeyResponse',
    'StoreCardType_Save' => 'StoreCardType_Save',
    'StoreCardType_SaveResponse' => 'StoreCardType_SaveResponse',
    'StoreCardType_SaveAndGet' => 'StoreCardType_SaveAndGet',
    'StoreCardType_SaveAndGetResponse' => 'StoreCardType_SaveAndGetResponse',
    'StoreCardType_Validate' => 'StoreCardType_Validate',
    'StoreCardType_ValidateResponse' => 'StoreCardType_ValidateResponse',
    'StoreShippingOptions_Clone' => 'StoreShippingOptions_Clone',
    'StoreShippingOptions_CloneResponse' => 'StoreShippingOptions_CloneResponse',
    'StoreShippingOptions_Delete' => 'StoreShippingOptions_Delete',
    'StoreShippingOptions_DeleteResponse' => 'StoreShippingOptions_DeleteResponse',
    'StoreShippingOptions_Exists' => 'StoreShippingOptions_Exists',
    'StoreShippingOptions_ExistsResponse' => 'StoreShippingOptions_ExistsResponse',
    'GiftCertificateType_SaveAndGet' => 'GiftCertificateType_SaveAndGet',
    'GiftCertificateTypeTrans' => 'GiftCertificateTypeTrans',
    'GiftCertificateType_SaveAndGetResponse' => 'GiftCertificateType_SaveAndGetResponse',
    'GiftCertificateType_Validate' => 'GiftCertificateType_Validate',
    'GiftCertificateType_ValidateResponse' => 'GiftCertificateType_ValidateResponse',
    'Manufacturer_Clone' => 'Manufacturer_Clone',
    'Manufacturer_CloneResponse' => 'Manufacturer_CloneResponse',
    'Manufacturer_Delete' => 'Manufacturer_Delete',
    'Manufacturer_DeleteResponse' => 'Manufacturer_DeleteResponse',
    'Manufacturer_Exists' => 'Manufacturer_Exists',
    'Manufacturer_ExistsResponse' => 'Manufacturer_ExistsResponse',
    'Manufacturer_GetByKey' => 'Manufacturer_GetByKey',
    'Manufacturer_GetByKeyResponse' => 'Manufacturer_GetByKeyResponse',
    'Manufacturer_Save' => 'Manufacturer_Save',
    'Manufacturer_SaveResponse' => 'Manufacturer_SaveResponse',
    'Manufacturer_SaveAndGet' => 'Manufacturer_SaveAndGet',
    'Manufacturer_SaveAndGetResponse' => 'Manufacturer_SaveAndGetResponse',
    'Manufacturer_Validate' => 'Manufacturer_Validate',
    'Manufacturer_ValidateResponse' => 'Manufacturer_ValidateResponse',
    'Order_Clone' => 'Order_Clone',
    'Order_CloneResponse' => 'Order_CloneResponse',
    'Order_Delete' => 'Order_Delete',
    'Order_DeleteResponse' => 'Order_DeleteResponse',
    'Order_Exists' => 'Order_Exists',
    'Order_ExistsResponse' => 'Order_ExistsResponse',
    'Order_GetByKey' => 'Order_GetByKey',
    'Order_GetByKeyResponse' => 'Order_GetByKeyResponse',
    'Order_Save' => 'Order_Save',
    'Order_SaveResponse' => 'Order_SaveResponse',
    'Order_SaveAndGet' => 'Order_SaveAndGet',
    'Order_SaveAndGetResponse' => 'Order_SaveAndGetResponse',
    'Order_Validate' => 'Order_Validate',
    'Order_ValidateResponse' => 'Order_ValidateResponse',
    'Order_FillOrderItemCollection' => 'Order_FillOrderItemCollection',
    'Order_FillOrderItemCollectionResponse' => 'Order_FillOrderItemCollectionResponse',
    'Order_FillOrderPaymentCollection' => 'Order_FillOrderPaymentCollection',
    'Order_FillOrderPaymentCollectionResponse' => 'Order_FillOrderPaymentCollectionResponse',
    'Order_FillOrderExtendedShippingCollection' => 'Order_FillOrderExtendedShippingCollection',
    'Order_FillOrderExtendedShippingCollectionResponse' => 'Order_FillOrderExtendedShippingCollectionResponse',
    'Order_FillOrderShippingCollection' => 'Order_FillOrderShippingCollection',
    'Order_FillOrderShippingCollectionResponse' => 'Order_FillOrderShippingCollectionResponse',
    'Order_FillGiftCertificateTransactionHistoryCollection' => 'Order_FillGiftCertificateTransactionHistoryCollection',
    'Order_FillGiftCertificateTransactionHistoryCollectionResponse' => 'Order_FillGiftCertificateTransactionHistoryCollectionResponse',
    'OrderExtendedShipping_Clone' => 'OrderExtendedShipping_Clone',
    'OrderExtendedShipping_CloneResponse' => 'OrderExtendedShipping_CloneResponse',
    'OrderExtendedShipping_Delete' => 'OrderExtendedShipping_Delete',
    'OrderExtendedShipping_DeleteResponse' => 'OrderExtendedShipping_DeleteResponse',
    'OrderExtendedShipping_Exists' => 'OrderExtendedShipping_Exists',
    'OrderExtendedShipping_ExistsResponse' => 'OrderExtendedShipping_ExistsResponse',
    'OrderExtendedShipping_GetByKey' => 'OrderExtendedShipping_GetByKey',
    'OrderExtendedShipping_GetByKeyResponse' => 'OrderExtendedShipping_GetByKeyResponse',
    'OrderExtendedShipping_Save' => 'OrderExtendedShipping_Save',
    'OrderExtendedShipping_SaveResponse' => 'OrderExtendedShipping_SaveResponse',
    'OrderExtendedShipping_SaveAndGet' => 'OrderExtendedShipping_SaveAndGet',
    'OrderExtendedShipping_SaveAndGetResponse' => 'OrderExtendedShipping_SaveAndGetResponse',
    'OrderExtendedShipping_Validate' => 'OrderExtendedShipping_Validate',
    'OrderExtendedShipping_ValidateResponse' => 'OrderExtendedShipping_ValidateResponse',
    'OrderAddress_Clone' => 'OrderAddress_Clone',
    'OrderAddress_CloneResponse' => 'OrderAddress_CloneResponse',
    'OrderAddress_Delete' => 'OrderAddress_Delete',
    'OrderAddress_DeleteResponse' => 'OrderAddress_DeleteResponse',
    'OrderAddress_Exists' => 'OrderAddress_Exists',
    'OrderAddress_ExistsResponse' => 'OrderAddress_ExistsResponse',
    'OrderAddress_GetByKey' => 'OrderAddress_GetByKey',
    'OrderAddress_GetByKeyResponse' => 'OrderAddress_GetByKeyResponse',
    'OrderAddress_Save' => 'OrderAddress_Save',
    'OrderAddress_SaveResponse' => 'OrderAddress_SaveResponse',
    'OrderAddress_SaveAndGet' => 'OrderAddress_SaveAndGet',
    'OrderAddress_SaveAndGetResponse' => 'OrderAddress_SaveAndGetResponse',
    'OrderAddress_Validate' => 'OrderAddress_Validate',
    'OrderAddress_ValidateResponse' => 'OrderAddress_ValidateResponse',
    'OrderItem_Clone' => 'OrderItem_Clone',
    'OrderItem_CloneResponse' => 'OrderItem_CloneResponse',
    'OrderItem_Delete' => 'OrderItem_Delete',
    'OrderItem_DeleteResponse' => 'OrderItem_DeleteResponse',
    'OrderItem_Exists' => 'OrderItem_Exists',
    'OrderItem_ExistsResponse' => 'OrderItem_ExistsResponse',
    'OrderItem_GetByKey' => 'OrderItem_GetByKey',
    'OrderItem_GetByKeyResponse' => 'OrderItem_GetByKeyResponse',
    'OrderItem_Save' => 'OrderItem_Save',
    'OrderItem_SaveResponse' => 'OrderItem_SaveResponse',
    'OrderItem_SaveAndGet' => 'OrderItem_SaveAndGet',
    'OrderItem_SaveAndGetResponse' => 'OrderItem_SaveAndGetResponse',
    'OrderItem_Validate' => 'OrderItem_Validate',
    'OrderItem_ValidateResponse' => 'OrderItem_ValidateResponse',
    'OrderPayment_Clone' => 'OrderPayment_Clone',
    'OrderPayment_CloneResponse' => 'OrderPayment_CloneResponse',
    'OrderPayment_Delete' => 'OrderPayment_Delete',
    'OrderPayment_DeleteResponse' => 'OrderPayment_DeleteResponse',
    'OrderPayment_Exists' => 'OrderPayment_Exists',
    'OrderPayment_ExistsResponse' => 'OrderPayment_ExistsResponse',
    'OrderPayment_GetByKey' => 'OrderPayment_GetByKey',
    'OrderPayment_GetByKeyResponse' => 'OrderPayment_GetByKeyResponse',
    'OrderPayment_Save' => 'OrderPayment_Save',
    'OrderPayment_SaveResponse' => 'OrderPayment_SaveResponse',
    'OrderPayment_SaveAndGet' => 'OrderPayment_SaveAndGet',
    'OrderPayment_SaveAndGetResponse' => 'OrderPayment_SaveAndGetResponse',
    'OrderPayment_Validate' => 'OrderPayment_Validate',
    'OrderPayment_ValidateResponse' => 'OrderPayment_ValidateResponse',
    'OrderPayment_FillOrderPaymentFieldCollection' => 'OrderPayment_FillOrderPaymentFieldCollection',
    'OrderPayment_FillOrderPaymentFieldCollectionResponse' => 'OrderPayment_FillOrderPaymentFieldCollectionResponse',
    'OrderShipping_Clone' => 'OrderShipping_Clone',
    'OrderShipping_CloneResponse' => 'OrderShipping_CloneResponse',
    'OrderShipping_Delete' => 'OrderShipping_Delete',
    'OrderShipping_DeleteResponse' => 'OrderShipping_DeleteResponse',
    'OrderShipping_Exists' => 'OrderShipping_Exists',
    'OrderShipping_ExistsResponse' => 'OrderShipping_ExistsResponse',
    'OrderShipping_GetByKey' => 'OrderShipping_GetByKey',
    'OrderShipping_GetByKeyResponse' => 'OrderShipping_GetByKeyResponse',
    'OrderShipping_Save' => 'OrderShipping_Save',
    'OrderShipping_SaveResponse' => 'OrderShipping_SaveResponse',
    'OrderShipping_SaveAndGet' => 'OrderShipping_SaveAndGet',
    'OrderShipping_SaveAndGetResponse' => 'OrderShipping_SaveAndGetResponse',
    'OrderShipping_Validate' => 'OrderShipping_Validate',
    'OrderShipping_ValidateResponse' => 'OrderShipping_ValidateResponse',
    'OrderShipping_FillOrderItemCollection' => 'OrderShipping_FillOrderItemCollection',
    'OrderShipping_FillOrderItemCollectionResponse' => 'OrderShipping_FillOrderItemCollectionResponse',
    'OrderShippingOrderItems_Clone' => 'OrderShippingOrderItems_Clone',
    'OrderShippingOrderItems_CloneResponse' => 'OrderShippingOrderItems_CloneResponse',
    'OrderShippingOrderItems_Delete' => 'OrderShippingOrderItems_Delete',
    'OrderShippingOrderItems_DeleteResponse' => 'OrderShippingOrderItems_DeleteResponse',
    'OrderShippingOrderItems_Exists' => 'OrderShippingOrderItems_Exists',
    'OrderShippingOrderItems_ExistsResponse' => 'OrderShippingOrderItems_ExistsResponse',
    'OrderShippingOrderItems_GetByKey' => 'OrderShippingOrderItems_GetByKey',
    'OrderShippingOrderItems_GetByKeyResponse' => 'OrderShippingOrderItems_GetByKeyResponse',
    'OrderShippingOrderItems_Save' => 'OrderShippingOrderItems_Save',
    'OrderShippingOrderItems_SaveResponse' => 'OrderShippingOrderItems_SaveResponse',
    'OrderShippingOrderItems_SaveAndGet' => 'OrderShippingOrderItems_SaveAndGet',
    'OrderShippingOrderItems_SaveAndGetResponse' => 'OrderShippingOrderItems_SaveAndGetResponse',
    'OrderShippingOrderItems_Validate' => 'OrderShippingOrderItems_Validate',
    'OrderShippingOrderItems_ValidateResponse' => 'OrderShippingOrderItems_ValidateResponse',
    'OrderStatus_Clone' => 'OrderStatus_Clone',
    'OrderStatus_CloneResponse' => 'OrderStatus_CloneResponse',
    'OrderStatus_Delete' => 'OrderStatus_Delete',
    'OrderStatus_DeleteResponse' => 'OrderStatus_DeleteResponse',
    'OrderStatus_Exists' => 'OrderStatus_Exists',
    'OrderStatus_ExistsResponse' => 'OrderStatus_ExistsResponse',
    'OrderStatus_GetByKey' => 'OrderStatus_GetByKey',
    'OrderStatus_GetByKeyResponse' => 'OrderStatus_GetByKeyResponse',
    'OrderStatus_Save' => 'OrderStatus_Save',
    'OrderStatus_SaveResponse' => 'OrderStatus_SaveResponse',
    'OrderStatus_SaveAndGet' => 'OrderStatus_SaveAndGet',
    'OrderStatus_SaveAndGetResponse' => 'OrderStatus_SaveAndGetResponse',
    'OrderStatus_Validate' => 'OrderStatus_Validate',
    'OrderStatus_ValidateResponse' => 'OrderStatus_ValidateResponse',
    'PageRedirect_Clone' => 'PageRedirect_Clone',
    'PageRedirect_CloneResponse' => 'PageRedirect_CloneResponse',
    'PageRedirect_Delete' => 'PageRedirect_Delete',
    'PageRedirect_DeleteResponse' => 'PageRedirect_DeleteResponse',
    'PageRedirect_Exists' => 'PageRedirect_Exists',
    'PageRedirect_ExistsResponse' => 'PageRedirect_ExistsResponse',
    'PageRedirect_GetByKey' => 'PageRedirect_GetByKey',
    'PageRedirect_GetByKeyResponse' => 'PageRedirect_GetByKeyResponse',
    'PageRedirect_Save' => 'PageRedirect_Save',
    'PageRedirect_SaveResponse' => 'PageRedirect_SaveResponse',
    'PageRedirect_SaveAndGet' => 'PageRedirect_SaveAndGet',
    'PageRedirect_SaveAndGetResponse' => 'PageRedirect_SaveAndGetResponse',
    'PageRedirect_Validate' => 'PageRedirect_Validate',
    'PageRedirect_ValidateResponse' => 'PageRedirect_ValidateResponse',
    'PaymentMethod_Clone' => 'PaymentMethod_Clone',
    'PaymentMethodTrans' => 'PaymentMethodTrans',
    'PaymentMethodFieldTrans' => 'PaymentMethodFieldTrans',
    'PaymentMethod_CloneResponse' => 'PaymentMethod_CloneResponse',
    'PaymentMethod_Delete' => 'PaymentMethod_Delete',
    'PaymentMethod_DeleteResponse' => 'PaymentMethod_DeleteResponse',
    'PaymentMethod_Exists' => 'PaymentMethod_Exists',
    'PaymentMethod_ExistsResponse' => 'PaymentMethod_ExistsResponse',
    'PaymentMethod_GetByKey' => 'PaymentMethod_GetByKey',
    'PaymentMethod_GetByKeyResponse' => 'PaymentMethod_GetByKeyResponse',
    'PaymentMethod_Save' => 'PaymentMethod_Save',
    'PaymentMethod_SaveResponse' => 'PaymentMethod_SaveResponse',
    'PaymentMethod_SaveAndGet' => 'PaymentMethod_SaveAndGet',
    'PaymentMethod_SaveAndGetResponse' => 'PaymentMethod_SaveAndGetResponse',
    'PaymentMethod_Validate' => 'PaymentMethod_Validate',
    'PaymentMethod_ValidateResponse' => 'PaymentMethod_ValidateResponse',
    'PaymentMethod_FillPaymentMethodFieldCollection' => 'PaymentMethod_FillPaymentMethodFieldCollection',
    'PaymentMethod_FillPaymentMethodFieldCollectionResponse' => 'PaymentMethod_FillPaymentMethodFieldCollectionResponse',
    'PriceCalculation_Clone' => 'PriceCalculation_Clone',
    'PriceCalculationTrans' => 'PriceCalculationTrans',
    'PriceRuleTrans' => 'PriceRuleTrans',
    'PriceRuleModifierTrans' => 'PriceRuleModifierTrans',
    'PriceCalculation_CloneResponse' => 'PriceCalculation_CloneResponse',
    'PriceCalculation_Delete' => 'PriceCalculation_Delete',
    'PriceCalculation_DeleteResponse' => 'PriceCalculation_DeleteResponse',
    'PriceCalculation_Exists' => 'PriceCalculation_Exists',
    'PriceCalculation_ExistsResponse' => 'PriceCalculation_ExistsResponse',
    'PriceCalculation_GetByKey' => 'PriceCalculation_GetByKey',
    'PriceCalculation_GetByKeyResponse' => 'PriceCalculation_GetByKeyResponse',
    'PriceCalculation_Save' => 'PriceCalculation_Save',
    'PriceCalculation_SaveResponse' => 'PriceCalculation_SaveResponse',
    'PriceCalculation_SaveAndGet' => 'PriceCalculation_SaveAndGet',
    'PriceCalculation_SaveAndGetResponse' => 'PriceCalculation_SaveAndGetResponse',
    'PriceCalculation_Validate' => 'PriceCalculation_Validate',
    'PriceCalculation_ValidateResponse' => 'PriceCalculation_ValidateResponse',
    'PriceCalculation_FillPriceRuleCollection' => 'PriceCalculation_FillPriceRuleCollection',
    'PriceCalculation_FillPriceRuleCollectionResponse' => 'PriceCalculation_FillPriceRuleCollectionResponse',
    'Product_Clone' => 'Product_Clone',
    'Product_CloneResponse' => 'Product_CloneResponse',
    'Product_Delete' => 'Product_Delete',
    'Product_DeleteResponse' => 'Product_DeleteResponse',
    'Product_Exists' => 'Product_Exists',
    'Product_ExistsResponse' => 'Product_ExistsResponse',
    'Product_GetByKey' => 'Product_GetByKey',
    'Product_GetByKeyResponse' => 'Product_GetByKeyResponse',
    'Product_Save' => 'Product_Save',
    'Product_SaveResponse' => 'Product_SaveResponse',
    'Product_SaveAndGet' => 'Product_SaveAndGet',
    'Product_SaveAndGetResponse' => 'Product_SaveAndGetResponse',
    'Product_Validate' => 'Product_Validate',
    'Product_ValidateResponse' => 'Product_ValidateResponse',
    'Product_FillProductVariantCollection' => 'Product_FillProductVariantCollection',
    'Product_FillProductVariantCollectionResponse' => 'Product_FillProductVariantCollectionResponse',
    'Product_FillPersonalizeCollection' => 'Product_FillPersonalizeCollection',
    'Product_FillPersonalizeCollectionResponse' => 'Product_FillPersonalizeCollectionResponse',
    'Product_FillProductCollection' => 'Product_FillProductCollection',
    'Product_FillProductCollectionResponse' => 'Product_FillProductCollectionResponse',
    'Product_FillCategoryCollection' => 'Product_FillCategoryCollection',
    'Product_FillCategoryCollectionResponse' => 'Product_FillCategoryCollectionResponse',
    'Product_FillInactiveInStoreCollection' => 'Product_FillInactiveInStoreCollection',
    'Product_FillInactiveInStoreCollectionResponse' => 'Product_FillInactiveInStoreCollectionResponse',
    'Product_FillProductPricingCollection' => 'Product_FillProductPricingCollection',
    'Product_FillProductPricingCollectionResponse' => 'Product_FillProductPricingCollectionResponse',
    'Product_FillAttributeCollection' => 'Product_FillAttributeCollection',
    'Product_FillAttributeCollectionResponse' => 'Product_FillAttributeCollectionResponse',
    'Product_FillVariantInventoryCollection' => 'Product_FillVariantInventoryCollection',
    'Product_FillVariantInventoryCollectionResponse' => 'Product_FillVariantInventoryCollectionResponse',
    'Product_FillProductPictureCollection' => 'Product_FillProductPictureCollection',
    'Product_FillProductPictureCollectionResponse' => 'Product_FillProductPictureCollectionResponse',
    'Product_FillProductChildCollection' => 'Product_FillProductChildCollection',
    'Product_FillProductChildCollectionResponse' => 'Product_FillProductChildCollectionResponse',
    'Product_FillShippingRateAdjustmentsCollection' => 'Product_FillShippingRateAdjustmentsCollection',
    'Product_FillShippingRateAdjustmentsCollectionResponse' => 'Product_FillShippingRateAdjustmentsCollectionResponse',
    'Product_FillVariantPackageCollection' => 'Product_FillVariantPackageCollection',
    'Product_FillVariantPackageCollectionResponse' => 'Product_FillVariantPackageCollectionResponse',
    'ProductList_Clone' => 'ProductList_Clone',
    'ProductList_CloneResponse' => 'ProductList_CloneResponse',
    'ProductList_Delete' => 'ProductList_Delete',
    'ProductList_DeleteResponse' => 'ProductList_DeleteResponse',
    'ProductList_Exists' => 'ProductList_Exists',
    'ProductList_ExistsResponse' => 'ProductList_ExistsResponse',
    'ProductList_GetByKey' => 'ProductList_GetByKey',
    'ProductList_GetByKeyResponse' => 'ProductList_GetByKeyResponse',
    'ProductList_Save' => 'ProductList_Save',
    'ProductList_SaveResponse' => 'ProductList_SaveResponse',
    'ProductList_SaveAndGet' => 'ProductList_SaveAndGet',
    'ProductList_SaveAndGetResponse' => 'ProductList_SaveAndGetResponse',
    'ProductList_Validate' => 'ProductList_Validate',
    'ProductList_ValidateResponse' => 'ProductList_ValidateResponse',
    'ProductList_FillProductListItemsCollection' => 'ProductList_FillProductListItemsCollection',
    'ProductList_FillProductListItemsCollectionResponse' => 'ProductList_FillProductListItemsCollectionResponse',
    'ProductListItems_Clone' => 'ProductListItems_Clone',
    'ProductListItems_CloneResponse' => 'ProductListItems_CloneResponse',
    'ProductListItems_Delete' => 'ProductListItems_Delete',
    'ProductListItems_DeleteResponse' => 'ProductListItems_DeleteResponse',
    'ProductListItems_Exists' => 'ProductListItems_Exists',
    'ProductListItems_ExistsResponse' => 'ProductListItems_ExistsResponse',
    'Customer_Delete' => 'Customer_Delete',
    'Customer_DeleteResponse' => 'Customer_DeleteResponse',
    'Customer_Exists' => 'Customer_Exists',
    'Customer_ExistsResponse' => 'Customer_ExistsResponse',
    'Customer_GetByKey' => 'Customer_GetByKey',
    'Customer_GetByKeyResponse' => 'Customer_GetByKeyResponse',
    'Customer_Save' => 'Customer_Save',
    'Customer_SaveResponse' => 'Customer_SaveResponse',
    'Customer_SaveAndGet' => 'Customer_SaveAndGet',
    'Customer_SaveAndGetResponse' => 'Customer_SaveAndGetResponse',
    'Customer_Validate' => 'Customer_Validate',
    'Customer_ValidateResponse' => 'Customer_ValidateResponse',
    'Customer_FillCustomerPaymentMethodCollection' => 'Customer_FillCustomerPaymentMethodCollection',
    'Customer_FillCustomerPaymentMethodCollectionResponse' => 'Customer_FillCustomerPaymentMethodCollectionResponse',
    'Customer_FillAddressCollection' => 'Customer_FillAddressCollection',
    'Customer_FillAddressCollectionResponse' => 'Customer_FillAddressCollectionResponse',
    'Customer_FillEmailLogCollection' => 'Customer_FillEmailLogCollection',
    'Customer_FillEmailLogCollectionResponse' => 'Customer_FillEmailLogCollectionResponse',
    'Customer_FillDripSeriesWhoToContactCollection' => 'Customer_FillDripSeriesWhoToContactCollection',
    'Customer_FillDripSeriesWhoToContactCollectionResponse' => 'Customer_FillDripSeriesWhoToContactCollectionResponse',
    'CustomerPaymentField_Clone' => 'CustomerPaymentField_Clone',
    'CustomerPaymentField_CloneResponse' => 'CustomerPaymentField_CloneResponse',
    'CustomerPaymentField_Delete' => 'CustomerPaymentField_Delete',
    'CustomerPaymentField_DeleteResponse' => 'CustomerPaymentField_DeleteResponse',
    'CustomerPaymentField_Exists' => 'CustomerPaymentField_Exists',
    'CustomerPaymentField_ExistsResponse' => 'CustomerPaymentField_ExistsResponse',
    'CustomerPaymentField_GetByKey' => 'CustomerPaymentField_GetByKey',
    'CustomerPaymentField_GetByKeyResponse' => 'CustomerPaymentField_GetByKeyResponse',
    'CustomerPaymentField_Save' => 'CustomerPaymentField_Save',
    'CustomerPaymentField_SaveResponse' => 'CustomerPaymentField_SaveResponse',
    'CustomerPaymentField_SaveAndGet' => 'CustomerPaymentField_SaveAndGet',
    'CustomerPaymentField_SaveAndGetResponse' => 'CustomerPaymentField_SaveAndGetResponse',
    'CustomerPaymentField_Validate' => 'CustomerPaymentField_Validate',
    'CustomerPaymentField_ValidateResponse' => 'CustomerPaymentField_ValidateResponse',
    'CustomerPaymentMethod_Clone' => 'CustomerPaymentMethod_Clone',
    'CustomerPaymentMethod_CloneResponse' => 'CustomerPaymentMethod_CloneResponse',
    'CustomerPaymentMethod_Delete' => 'CustomerPaymentMethod_Delete',
    'CustomerPaymentMethod_DeleteResponse' => 'CustomerPaymentMethod_DeleteResponse',
    'CustomerPaymentMethod_Exists' => 'CustomerPaymentMethod_Exists',
    'CustomerPaymentMethod_ExistsResponse' => 'CustomerPaymentMethod_ExistsResponse',
    'CustomerPaymentMethod_GetByKey' => 'CustomerPaymentMethod_GetByKey',
    'CustomerPaymentMethod_GetByKeyResponse' => 'CustomerPaymentMethod_GetByKeyResponse',
    'CustomerPaymentMethod_Save' => 'CustomerPaymentMethod_Save',
    'CustomerPaymentMethod_SaveResponse' => 'CustomerPaymentMethod_SaveResponse',
    'CustomerPaymentMethod_SaveAndGet' => 'CustomerPaymentMethod_SaveAndGet',
    'CustomerPaymentMethod_SaveAndGetResponse' => 'CustomerPaymentMethod_SaveAndGetResponse',
    'CustomerPaymentMethod_Validate' => 'CustomerPaymentMethod_Validate',
    'CustomerPaymentMethod_ValidateResponse' => 'CustomerPaymentMethod_ValidateResponse',
    'CustomerPaymentMethod_FillCustomerPaymentFieldCollection' => 'CustomerPaymentMethod_FillCustomerPaymentFieldCollection',
    'CustomerPaymentMethod_FillCustomerPaymentFieldCollectionResponse' => 'CustomerPaymentMethod_FillCustomerPaymentFieldCollectionResponse',
    'CustomerType_Clone' => 'CustomerType_Clone',
    'CustomerType_CloneResponse' => 'CustomerType_CloneResponse',
    'CustomerType_Delete' => 'CustomerType_Delete',
    'CustomerType_DeleteResponse' => 'CustomerType_DeleteResponse',
    'CustomerType_Exists' => 'CustomerType_Exists',
    'CustomerType_ExistsResponse' => 'CustomerType_ExistsResponse',
    'CustomerType_GetByKey' => 'CustomerType_GetByKey',
    'CustomerType_GetByKeyResponse' => 'CustomerType_GetByKeyResponse',
    'CustomerType_Save' => 'CustomerType_Save',
    'CustomerType_SaveResponse' => 'CustomerType_SaveResponse',
    'CustomerType_SaveAndGet' => 'CustomerType_SaveAndGet',
    'CustomerType_SaveAndGetResponse' => 'CustomerType_SaveAndGetResponse',
    'CustomerType_Validate' => 'CustomerType_Validate',
    'CustomerType_ValidateResponse' => 'CustomerType_ValidateResponse',
    'CustomField_Clone' => 'CustomField_Clone',
    'CustomField_CloneResponse' => 'CustomField_CloneResponse',
    'CustomField_Delete' => 'CustomField_Delete',
    'CustomField_DeleteResponse' => 'CustomField_DeleteResponse',
    'CustomField_Exists' => 'CustomField_Exists',
    'CustomField_ExistsResponse' => 'CustomField_ExistsResponse',
    'CustomField_GetByKey' => 'CustomField_GetByKey',
    'CustomField_GetByKeyResponse' => 'CustomField_GetByKeyResponse',
    'CustomField_Save' => 'CustomField_Save',
    'CustomField_SaveResponse' => 'CustomField_SaveResponse',
    'CustomField_SaveAndGet' => 'CustomField_SaveAndGet',
    'CustomField_SaveAndGetResponse' => 'CustomField_SaveAndGetResponse',
    'CustomField_Validate' => 'CustomField_Validate',
    'CustomField_ValidateResponse' => 'CustomField_ValidateResponse',
    'CustomField_FillCustomFieldValueCollection' => 'CustomField_FillCustomFieldValueCollection',
    'CustomField_FillCustomFieldValueCollectionResponse' => 'CustomField_FillCustomFieldValueCollectionResponse',
    'CustomField_FillCustomFieldListItemCollection' => 'CustomField_FillCustomFieldListItemCollection',
    'CustomField_FillCustomFieldListItemCollectionResponse' => 'CustomField_FillCustomFieldListItemCollectionResponse',
    'CustomFieldValue_Clone' => 'CustomFieldValue_Clone',
    'CustomFieldValue_CloneResponse' => 'CustomFieldValue_CloneResponse',
    'CustomFieldValue_Delete' => 'CustomFieldValue_Delete',
    'CustomFieldValue_DeleteResponse' => 'CustomFieldValue_DeleteResponse',
    'CustomFieldValue_Exists' => 'CustomFieldValue_Exists',
    'CustomFieldValue_ExistsResponse' => 'CustomFieldValue_ExistsResponse',
    'CustomFieldValue_GetByKey' => 'CustomFieldValue_GetByKey',
    'CustomFieldValue_GetByKeyResponse' => 'CustomFieldValue_GetByKeyResponse',
    'CustomFieldValue_Save' => 'CustomFieldValue_Save',
    'CustomFieldValue_SaveResponse' => 'CustomFieldValue_SaveResponse',
    'CustomFieldValue_SaveAndGet' => 'CustomFieldValue_SaveAndGet',
    'CustomFieldValue_SaveAndGetResponse' => 'CustomFieldValue_SaveAndGetResponse',
    'CustomFieldValue_Validate' => 'CustomFieldValue_Validate',
    'CustomFieldValue_ValidateResponse' => 'CustomFieldValue_ValidateResponse',
    'CustomFieldListItem_Clone' => 'CustomFieldListItem_Clone',
    'CustomFieldListItem_CloneResponse' => 'CustomFieldListItem_CloneResponse',
    'CustomFieldListItem_Delete' => 'CustomFieldListItem_Delete',
    'CustomFieldListItem_DeleteResponse' => 'CustomFieldListItem_DeleteResponse',
    'CustomFieldListItem_Exists' => 'CustomFieldListItem_Exists',
    'CustomFieldListItem_ExistsResponse' => 'CustomFieldListItem_ExistsResponse',
    'CustomFieldListItem_GetByKey' => 'CustomFieldListItem_GetByKey',
    'CustomFieldListItem_GetByKeyResponse' => 'CustomFieldListItem_GetByKeyResponse',
    'CustomFieldListItem_Save' => 'CustomFieldListItem_Save',
    'CustomFieldListItem_SaveResponse' => 'CustomFieldListItem_SaveResponse',
    'CustomFieldListItem_SaveAndGet' => 'CustomFieldListItem_SaveAndGet',
    'CustomFieldListItem_SaveAndGetResponse' => 'CustomFieldListItem_SaveAndGetResponse',
    'CustomFieldListItem_Validate' => 'CustomFieldListItem_Validate',
    'CustomFieldListItem_ValidateResponse' => 'CustomFieldListItem_ValidateResponse',
    'DiscountMethods_Clone' => 'DiscountMethods_Clone',
    'DiscountMethodsTrans' => 'DiscountMethodsTrans',
    'DiscountRulesTrans' => 'DiscountRulesTrans',
    'DiscountMethods_CloneResponse' => 'DiscountMethods_CloneResponse',
    'DiscountMethods_Delete' => 'DiscountMethods_Delete',
    'DiscountMethods_DeleteResponse' => 'DiscountMethods_DeleteResponse',
    'DiscountMethods_Exists' => 'DiscountMethods_Exists',
    'DiscountMethods_ExistsResponse' => 'DiscountMethods_ExistsResponse',
    'DiscountMethods_GetByKey' => 'DiscountMethods_GetByKey',
    'DiscountMethods_GetByKeyResponse' => 'DiscountMethods_GetByKeyResponse',
    'DiscountMethods_Save' => 'DiscountMethods_Save',
    'DiscountMethods_SaveResponse' => 'DiscountMethods_SaveResponse',
    'DiscountMethods_SaveAndGet' => 'DiscountMethods_SaveAndGet',
    'DiscountMethods_SaveAndGetResponse' => 'DiscountMethods_SaveAndGetResponse',
    'DiscountMethods_Validate' => 'DiscountMethods_Validate',
    'DiscountMethods_ValidateResponse' => 'DiscountMethods_ValidateResponse',
    'DiscountMethods_FillDiscountRulesCollection' => 'DiscountMethods_FillDiscountRulesCollection',
    'DiscountMethods_FillDiscountRulesCollectionResponse' => 'DiscountMethods_FillDiscountRulesCollectionResponse',
    'DiscountRules_Clone' => 'DiscountRules_Clone',
    'DiscountRules_CloneResponse' => 'DiscountRules_CloneResponse',
    'DiscountRules_Delete' => 'DiscountRules_Delete',
    'DiscountRules_DeleteResponse' => 'DiscountRules_DeleteResponse',
    'DiscountRules_Exists' => 'DiscountRules_Exists',
    'DiscountRules_ExistsResponse' => 'DiscountRules_ExistsResponse',
    'DiscountRules_GetByKey' => 'DiscountRules_GetByKey',
    'DiscountRules_GetByKeyResponse' => 'DiscountRules_GetByKeyResponse',
    'DiscountRules_Save' => 'DiscountRules_Save',
    'DiscountRules_SaveResponse' => 'DiscountRules_SaveResponse',
    'DiscountRules_SaveAndGet' => 'DiscountRules_SaveAndGet',
    'DiscountRules_SaveAndGetResponse' => 'DiscountRules_SaveAndGetResponse',
    'DiscountRules_Validate' => 'DiscountRules_Validate',
    'DiscountRules_ValidateResponse' => 'DiscountRules_ValidateResponse',
    'DripSeries_Clone' => 'DripSeries_Clone',
    'DripSeriesTrans' => 'DripSeriesTrans',
    'DripSeriesWhatShouldHappenTrans' => 'DripSeriesWhatShouldHappenTrans',
    'DripSeries_CloneResponse' => 'DripSeries_CloneResponse',
    'DripSeries_Delete' => 'DripSeries_Delete',
    'DripSeries_DeleteResponse' => 'DripSeries_DeleteResponse',
    'DripSeries_Exists' => 'DripSeries_Exists',
    'DripSeries_ExistsResponse' => 'DripSeries_ExistsResponse',
    'DripSeries_GetByKey' => 'DripSeries_GetByKey',
    'DripSeries_GetByKeyResponse' => 'DripSeries_GetByKeyResponse',
    'DripSeries_Save' => 'DripSeries_Save',
    'DripSeries_SaveResponse' => 'DripSeries_SaveResponse',
    'DripSeries_SaveAndGet' => 'DripSeries_SaveAndGet',
    'DripSeries_SaveAndGetResponse' => 'DripSeries_SaveAndGetResponse',
    'DripSeries_Validate' => 'DripSeries_Validate',
    'DripSeries_ValidateResponse' => 'DripSeries_ValidateResponse',
    'DripSeries_FillDripSeriesWhoToContactCollection' => 'DripSeries_FillDripSeriesWhoToContactCollection',
    'DripSeries_FillDripSeriesWhoToContactCollectionResponse' => 'DripSeries_FillDripSeriesWhoToContactCollectionResponse',
    'DripSeries_FillDripSeriesWhatShouldHappenCollection' => 'DripSeries_FillDripSeriesWhatShouldHappenCollection',
    'DripSeries_FillDripSeriesWhatShouldHappenCollectionResponse' => 'DripSeries_FillDripSeriesWhatShouldHappenCollectionResponse',
    'DripSeriesWhatShouldHappen_Clone' => 'DripSeriesWhatShouldHappen_Clone',
    'DripSeriesWhatShouldHappen_CloneResponse' => 'DripSeriesWhatShouldHappen_CloneResponse',
    'DripSeriesWhatShouldHappen_Delete' => 'DripSeriesWhatShouldHappen_Delete',
    'DripSeriesWhatShouldHappen_DeleteResponse' => 'DripSeriesWhatShouldHappen_DeleteResponse',
    'DripSeriesWhatShouldHappen_Exists' => 'DripSeriesWhatShouldHappen_Exists',
    'DripSeriesWhatShouldHappen_ExistsResponse' => 'DripSeriesWhatShouldHappen_ExistsResponse',
    'DripSeriesWhatShouldHappen_GetByKey' => 'DripSeriesWhatShouldHappen_GetByKey',
    'DripSeriesWhatShouldHappen_GetByKeyResponse' => 'DripSeriesWhatShouldHappen_GetByKeyResponse',
    'DripSeriesWhatShouldHappen_Save' => 'DripSeriesWhatShouldHappen_Save',
    'DripSeriesWhatShouldHappen_SaveResponse' => 'DripSeriesWhatShouldHappen_SaveResponse',
    'DripSeriesWhatShouldHappen_SaveAndGet' => 'DripSeriesWhatShouldHappen_SaveAndGet',
    'DripSeriesWhatShouldHappen_SaveAndGetResponse' => 'DripSeriesWhatShouldHappen_SaveAndGetResponse',
    'DripSeriesWhatShouldHappen_Validate' => 'DripSeriesWhatShouldHappen_Validate',
    'DripSeriesWhatShouldHappen_ValidateResponse' => 'DripSeriesWhatShouldHappen_ValidateResponse',
    'DripSeriesWhoToContact_Clone' => 'DripSeriesWhoToContact_Clone',
    'DripSeriesWhoToContact_CloneResponse' => 'DripSeriesWhoToContact_CloneResponse',
    'DripSeriesWhoToContact_Delete' => 'DripSeriesWhoToContact_Delete',
    'DripSeriesWhoToContact_DeleteResponse' => 'DripSeriesWhoToContact_DeleteResponse',
    'DripSeriesWhoToContact_Exists' => 'DripSeriesWhoToContact_Exists',
    'DripSeriesWhoToContact_ExistsResponse' => 'DripSeriesWhoToContact_ExistsResponse',
    'DripSeriesWhoToContact_GetByKey' => 'DripSeriesWhoToContact_GetByKey',
    'DripSeriesWhoToContact_GetByKeyResponse' => 'DripSeriesWhoToContact_GetByKeyResponse',
    'DripSeriesWhoToContact_Save' => 'DripSeriesWhoToContact_Save',
    'DripSeriesWhoToContact_SaveResponse' => 'DripSeriesWhoToContact_SaveResponse',
    'DripSeriesWhoToContact_SaveAndGet' => 'DripSeriesWhoToContact_SaveAndGet',
    'DripSeriesWhoToContact_SaveAndGetResponse' => 'DripSeriesWhoToContact_SaveAndGetResponse',
    'DripSeriesWhoToContact_Validate' => 'DripSeriesWhoToContact_Validate',
    'DripSeriesWhoToContact_ValidateResponse' => 'DripSeriesWhoToContact_ValidateResponse',
    'EmailLog_Clone' => 'EmailLog_Clone',
    'EmailLog_CloneResponse' => 'EmailLog_CloneResponse',
    'EmailLog_Delete' => 'EmailLog_Delete',
    'EmailLog_DeleteResponse' => 'EmailLog_DeleteResponse',
    'EmailLog_Exists' => 'EmailLog_Exists',
    'EmailLog_ExistsResponse' => 'EmailLog_ExistsResponse',
    'EmailLog_GetByKey' => 'EmailLog_GetByKey',
    'EmailLog_GetByKeyResponse' => 'EmailLog_GetByKeyResponse',
    'EmailLog_Save' => 'EmailLog_Save',
    'EmailLog_SaveResponse' => 'EmailLog_SaveResponse',
    'EmailLog_SaveAndGet' => 'EmailLog_SaveAndGet',
    'EmailLog_SaveAndGetResponse' => 'EmailLog_SaveAndGetResponse',
    'EmailLog_Validate' => 'EmailLog_Validate',
    'EmailLog_ValidateResponse' => 'EmailLog_ValidateResponse',
    'GiftCertificate_Clone' => 'GiftCertificate_Clone',
    'GiftCertificate_CloneResponse' => 'GiftCertificate_CloneResponse',
    'GiftCertificate_Delete' => 'GiftCertificate_Delete',
    'GiftCertificate_DeleteResponse' => 'GiftCertificate_DeleteResponse',
    'GiftCertificate_Exists' => 'GiftCertificate_Exists',
    'GiftCertificate_ExistsResponse' => 'GiftCertificate_ExistsResponse',
    'GiftCertificate_GetByKey' => 'GiftCertificate_GetByKey',
    'GiftCertificate_GetByKeyResponse' => 'GiftCertificate_GetByKeyResponse',
    'GiftCertificate_Save' => 'GiftCertificate_Save',
    'GiftCertificate_SaveResponse' => 'GiftCertificate_SaveResponse',
    'GiftCertificate_SaveAndGet' => 'GiftCertificate_SaveAndGet',
    'GiftCertificate_SaveAndGetResponse' => 'GiftCertificate_SaveAndGetResponse',
    'GiftCertificate_Validate' => 'GiftCertificate_Validate',
    'GiftCertificate_ValidateResponse' => 'GiftCertificate_ValidateResponse',
    'GiftCertificate_FillGiftCertificateTransactionHistoryCollection' => 'GiftCertificate_FillGiftCertificateTransactionHistoryCollection',
    'GiftCertificate_FillGiftCertificateTransactionHistoryCollectionResponse' => 'GiftCertificate_FillGiftCertificateTransactionHistoryCollectionResponse',
    'GiftCertificateBatch_Clone' => 'GiftCertificateBatch_Clone',
    'GiftCertificateBatchTrans' => 'GiftCertificateBatchTrans',
    'GiftCertificateBatch_CloneResponse' => 'GiftCertificateBatch_CloneResponse',
    'GiftCertificateBatch_Delete' => 'GiftCertificateBatch_Delete',
    'GiftCertificateBatch_DeleteResponse' => 'GiftCertificateBatch_DeleteResponse',
    'GiftCertificateBatch_Exists' => 'GiftCertificateBatch_Exists',
    'GiftCertificateBatch_ExistsResponse' => 'GiftCertificateBatch_ExistsResponse',
    'GiftCertificateBatch_GetByKey' => 'GiftCertificateBatch_GetByKey',
    'GiftCertificateBatch_GetByKeyResponse' => 'GiftCertificateBatch_GetByKeyResponse',
    'GiftCertificateBatch_Save' => 'GiftCertificateBatch_Save',
    'GiftCertificateBatch_SaveResponse' => 'GiftCertificateBatch_SaveResponse',
    'GiftCertificateBatch_SaveAndGet' => 'GiftCertificateBatch_SaveAndGet',
    'GiftCertificateBatch_SaveAndGetResponse' => 'GiftCertificateBatch_SaveAndGetResponse',
    'GiftCertificateBatch_Validate' => 'GiftCertificateBatch_Validate',
    'GiftCertificateBatch_ValidateResponse' => 'GiftCertificateBatch_ValidateResponse',
    'GiftCertificateBatch_FillGiftCertificateCollection' => 'GiftCertificateBatch_FillGiftCertificateCollection',
    'GiftCertificateBatch_FillGiftCertificateCollectionResponse' => 'GiftCertificateBatch_FillGiftCertificateCollectionResponse',
    'GiftCertificateTransactionHistory_Clone' => 'GiftCertificateTransactionHistory_Clone',
    'GiftCertificateTransactionHistory_CloneResponse' => 'GiftCertificateTransactionHistory_CloneResponse',
    'GiftCertificateTransactionHistory_Delete' => 'GiftCertificateTransactionHistory_Delete',
    'GiftCertificateTransactionHistory_DeleteResponse' => 'GiftCertificateTransactionHistory_DeleteResponse',
    'GiftCertificateTransactionHistory_Exists' => 'GiftCertificateTransactionHistory_Exists',
    'GiftCertificateTransactionHistory_ExistsResponse' => 'GiftCertificateTransactionHistory_ExistsResponse',
    'GiftCertificateTransactionHistory_GetByKey' => 'GiftCertificateTransactionHistory_GetByKey',
    'GiftCertificateTransactionHistory_GetByKeyResponse' => 'GiftCertificateTransactionHistory_GetByKeyResponse',
    'GiftCertificateTransactionHistory_Save' => 'GiftCertificateTransactionHistory_Save',
    'GiftCertificateTransactionHistory_SaveResponse' => 'GiftCertificateTransactionHistory_SaveResponse',
    'GiftCertificateTransactionHistory_SaveAndGet' => 'GiftCertificateTransactionHistory_SaveAndGet',
    'GiftCertificateTransactionHistory_SaveAndGetResponse' => 'GiftCertificateTransactionHistory_SaveAndGetResponse',
    'GiftCertificateTransactionHistory_Validate' => 'GiftCertificateTransactionHistory_Validate',
    'GiftCertificateTransactionHistory_ValidateResponse' => 'GiftCertificateTransactionHistory_ValidateResponse',
    'GiftCertificateType_Clone' => 'GiftCertificateType_Clone',
    'GiftCertificateType_CloneResponse' => 'GiftCertificateType_CloneResponse',
    'GiftCertificateType_Delete' => 'GiftCertificateType_Delete',
    'GiftCertificateType_DeleteResponse' => 'GiftCertificateType_DeleteResponse',
    'GiftCertificateType_Exists' => 'GiftCertificateType_Exists',
    'GiftCertificateType_ExistsResponse' => 'GiftCertificateType_ExistsResponse',
    'GiftCertificateType_GetByKey' => 'GiftCertificateType_GetByKey',
    'GiftCertificateType_GetByKeyResponse' => 'GiftCertificateType_GetByKeyResponse',
    'GiftCertificateType_Save' => 'GiftCertificateType_Save',
    'GiftCertificateType_SaveResponse' => 'GiftCertificateType_SaveResponse',
    'TestHelloWorld' => 'TestHelloWorld',
    'TestHelloWorldResponse' => 'TestHelloWorldResponse',
    'TestTransport' => 'TestTransport',
    'TestTrans' => 'TestTrans',
    'TestTransportResponse' => 'TestTransportResponse',
    'TestPricingCollectionAsTransport' => 'TestPricingCollectionAsTransport',
    'TestPricingCollectionAsTransportResponse' => 'TestPricingCollectionAsTransportResponse',
    'TestPricingCollectionAsTransportReturned' => 'TestPricingCollectionAsTransportReturned',
    'TestPricingCollectionAsTransportReturnedResponse' => 'TestPricingCollectionAsTransportReturnedResponse',
    'TestPricingCollectionAsTransportNoReturn' => 'TestPricingCollectionAsTransportNoReturn',
    'TestPricingCollectionAsTransportNoReturnResponse' => 'TestPricingCollectionAsTransportNoReturnResponse',
    'TestDataSetAsTransportReturned' => 'TestDataSetAsTransportReturned',
    'pdsReturned' => 'pdsReturned',
    'TestDataSetAsTransportReturnedResponse' => 'TestDataSetAsTransportReturnedResponse',
    'TestDataSetAsTransportReturnedResult' => 'TestDataSetAsTransportReturnedResult',
    'TestDataSetAsTransport' => 'TestDataSetAsTransport',
    'TestDataSetAsTransportResponse' => 'TestDataSetAsTransportResponse',
    'TestDataSetAsTransportResult' => 'TestDataSetAsTransportResult',
    'ActiveInStore_Clone' => 'ActiveInStore_Clone',
    'ActiveInStoreTrans' => 'ActiveInStoreTrans',
    'ActiveInStore_CloneResponse' => 'ActiveInStore_CloneResponse',
    'ActiveInStore_Delete' => 'ActiveInStore_Delete',
    'ActiveInStore_DeleteResponse' => 'ActiveInStore_DeleteResponse',
    'ActiveInStore_Exists' => 'ActiveInStore_Exists',
    'ActiveInStore_ExistsResponse' => 'ActiveInStore_ExistsResponse',
    'ActiveInStore_GetByKey' => 'ActiveInStore_GetByKey',
    'ActiveInStore_GetByKeyResponse' => 'ActiveInStore_GetByKeyResponse',
    'ActiveInStore_Save' => 'ActiveInStore_Save',
    'ActiveInStore_SaveResponse' => 'ActiveInStore_SaveResponse',
    'ActiveInStore_SaveAndGet' => 'ActiveInStore_SaveAndGet',
    'ActiveInStore_SaveAndGetResponse' => 'ActiveInStore_SaveAndGetResponse',
    'ActiveInStore_Validate' => 'ActiveInStore_Validate',
    'ActiveInStore_ValidateResponse' => 'ActiveInStore_ValidateResponse',
    'AdCode_Clone' => 'AdCode_Clone',
    'AdCode_CloneResponse' => 'AdCode_CloneResponse',
    'AdCode_Delete' => 'AdCode_Delete',
    'AdCode_DeleteResponse' => 'AdCode_DeleteResponse',
    'AdCode_Exists' => 'AdCode_Exists',
    'AdCode_ExistsResponse' => 'AdCode_ExistsResponse',
    'AdCode_GetByKey' => 'AdCode_GetByKey',
    'AdCode_GetByKeyResponse' => 'AdCode_GetByKeyResponse',
    'AdCode_Save' => 'AdCode_Save',
    'AdCode_SaveResponse' => 'AdCode_SaveResponse',
    'AdCode_SaveAndGet' => 'AdCode_SaveAndGet',
    'AdCode_SaveAndGetResponse' => 'AdCode_SaveAndGetResponse',
    'AdCode_Validate' => 'AdCode_Validate',
    'AdCode_ValidateResponse' => 'AdCode_ValidateResponse',
    'Address_Clone' => 'Address_Clone',
    'Address_CloneResponse' => 'Address_CloneResponse',
    'Address_Delete' => 'Address_Delete',
    'Address_DeleteResponse' => 'Address_DeleteResponse',
    'Address_Exists' => 'Address_Exists',
    'Address_ExistsResponse' => 'Address_ExistsResponse',
    'Address_GetByKey' => 'Address_GetByKey',
    'Address_GetByKeyResponse' => 'Address_GetByKeyResponse',
    'Address_Save' => 'Address_Save',
    'Address_SaveResponse' => 'Address_SaveResponse',
    'Address_SaveAndGet' => 'Address_SaveAndGet',
    'Address_SaveAndGetResponse' => 'Address_SaveAndGetResponse',
    'Address_Validate' => 'Address_Validate',
    'Address_ValidateResponse' => 'Address_ValidateResponse',
    'Affiliate_Clone' => 'Affiliate_Clone',
    'Affiliate_CloneResponse' => 'Affiliate_CloneResponse',
    'Affiliate_Delete' => 'Affiliate_Delete',
    'Affiliate_DeleteResponse' => 'Affiliate_DeleteResponse',
    'Affiliate_Exists' => 'Affiliate_Exists',
    'Affiliate_ExistsResponse' => 'Affiliate_ExistsResponse',
    'Affiliate_GetByKey' => 'Affiliate_GetByKey',
    'Affiliate_GetByKeyResponse' => 'Affiliate_GetByKeyResponse',
    'Affiliate_Save' => 'Affiliate_Save',
    'Affiliate_SaveResponse' => 'Affiliate_SaveResponse',
    'Affiliate_SaveAndGet' => 'Affiliate_SaveAndGet',
    'Affiliate_SaveAndGetResponse' => 'Affiliate_SaveAndGetResponse',
    'Affiliate_Validate' => 'Affiliate_Validate',
    'Affiliate_ValidateResponse' => 'Affiliate_ValidateResponse',
    'AffiliateStatus_Clone' => 'AffiliateStatus_Clone',
    'AffiliateStatusTrans' => 'AffiliateStatusTrans',
    'AffiliateStatus_CloneResponse' => 'AffiliateStatus_CloneResponse',
    'AffiliateStatus_Delete' => 'AffiliateStatus_Delete',
    'AffiliateStatus_DeleteResponse' => 'AffiliateStatus_DeleteResponse',
    'AffiliateStatus_Exists' => 'AffiliateStatus_Exists',
    'AffiliateStatus_ExistsResponse' => 'AffiliateStatus_ExistsResponse',
    'AffiliateStatus_GetByKey' => 'AffiliateStatus_GetByKey',
    'AffiliateStatus_GetByKeyResponse' => 'AffiliateStatus_GetByKeyResponse',
    'AffiliateStatus_Save' => 'AffiliateStatus_Save',
    'AffiliateStatus_SaveResponse' => 'AffiliateStatus_SaveResponse',
    'AffiliateStatus_SaveAndGet' => 'AffiliateStatus_SaveAndGet',
    'AffiliateStatus_SaveAndGetResponse' => 'AffiliateStatus_SaveAndGetResponse',
    'AffiliateStatus_Validate' => 'AffiliateStatus_Validate',
    'AffiliateStatus_ValidateResponse' => 'AffiliateStatus_ValidateResponse',
    'AnalyticAction_Clone' => 'AnalyticAction_Clone',
    'AnalyticActionTrans' => 'AnalyticActionTrans',
    'AnalyticAction_CloneResponse' => 'AnalyticAction_CloneResponse',
    'AnalyticAction_Delete' => 'AnalyticAction_Delete',
    'AnalyticAction_DeleteResponse' => 'AnalyticAction_DeleteResponse',
    'AnalyticAction_Exists' => 'AnalyticAction_Exists',
    'AnalyticAction_ExistsResponse' => 'AnalyticAction_ExistsResponse',
    'AnalyticAction_GetByKey' => 'AnalyticAction_GetByKey',
    'AnalyticAction_GetByKeyResponse' => 'AnalyticAction_GetByKeyResponse',
    'AnalyticAction_Save' => 'AnalyticAction_Save',
    'AnalyticAction_SaveResponse' => 'AnalyticAction_SaveResponse',
    'AnalyticAction_SaveAndGet' => 'AnalyticAction_SaveAndGet',
    'AnalyticAction_SaveAndGetResponse' => 'AnalyticAction_SaveAndGetResponse',
    'AnalyticAction_Validate' => 'AnalyticAction_Validate',
    'AnalyticAction_ValidateResponse' => 'AnalyticAction_ValidateResponse',
    'AnalyticCondition_Clone' => 'AnalyticCondition_Clone',
    'AnalyticConditionTrans' => 'AnalyticConditionTrans',
    'AnalyticCondition_CloneResponse' => 'AnalyticCondition_CloneResponse',
    'AnalyticCondition_Delete' => 'AnalyticCondition_Delete',
    'AnalyticCondition_DeleteResponse' => 'AnalyticCondition_DeleteResponse',
    'AnalyticCondition_Exists' => 'AnalyticCondition_Exists',
    'AnalyticCondition_ExistsResponse' => 'AnalyticCondition_ExistsResponse',
    'AnalyticCondition_GetByKey' => 'AnalyticCondition_GetByKey',
    'AnalyticCondition_GetByKeyResponse' => 'AnalyticCondition_GetByKeyResponse',
    'AnalyticCondition_Save' => 'AnalyticCondition_Save',
    'AnalyticCondition_SaveResponse' => 'AnalyticCondition_SaveResponse',
    'AnalyticCondition_SaveAndGet' => 'AnalyticCondition_SaveAndGet',
    'AnalyticCondition_SaveAndGetResponse' => 'AnalyticCondition_SaveAndGetResponse',
    'AnalyticCondition_Validate' => 'AnalyticCondition_Validate',
    'AnalyticCondition_ValidateResponse' => 'AnalyticCondition_ValidateResponse',
    'AnalyticRule_Clone' => 'AnalyticRule_Clone',
    'AnalyticRuleTrans' => 'AnalyticRuleTrans',
    'AnalyticRule_CloneResponse' => 'AnalyticRule_CloneResponse',
    'AnalyticRule_Delete' => 'AnalyticRule_Delete',
    'AnalyticRule_DeleteResponse' => 'AnalyticRule_DeleteResponse',
    'AnalyticRule_Exists' => 'AnalyticRule_Exists',
    'AnalyticRule_ExistsResponse' => 'AnalyticRule_ExistsResponse',
    'AnalyticRule_GetByKey' => 'AnalyticRule_GetByKey',
    'AnalyticRule_GetByKeyResponse' => 'AnalyticRule_GetByKeyResponse',
    'AnalyticRule_Save' => 'AnalyticRule_Save',
    'AnalyticRule_SaveResponse' => 'AnalyticRule_SaveResponse',
    'AnalyticRule_SaveAndGet' => 'AnalyticRule_SaveAndGet',
    'AnalyticRule_SaveAndGetResponse' => 'AnalyticRule_SaveAndGetResponse',
    'AnalyticRule_Validate' => 'AnalyticRule_Validate',
    'AnalyticRule_ValidateResponse' => 'AnalyticRule_ValidateResponse',
    'AnalyticRule_FillAnalyticActionCollection' => 'AnalyticRule_FillAnalyticActionCollection',
    'AnalyticRule_FillAnalyticActionCollectionResponse' => 'AnalyticRule_FillAnalyticActionCollectionResponse',
    'AnalyticRule_FillAnalyticConditionCollection' => 'AnalyticRule_FillAnalyticConditionCollection',
    'AnalyticRule_FillAnalyticConditionCollectionResponse' => 'AnalyticRule_FillAnalyticConditionCollectionResponse',
    'Attribute_Clone' => 'Attribute_Clone',
    'Attribute_CloneResponse' => 'Attribute_CloneResponse',
    'Attribute_Delete' => 'Attribute_Delete',
    'Attribute_DeleteResponse' => 'Attribute_DeleteResponse',
    'Attribute_Exists' => 'Attribute_Exists',
    'Attribute_ExistsResponse' => 'Attribute_ExistsResponse',
    'Attribute_GetByKey' => 'Attribute_GetByKey',
    'Attribute_GetByKeyResponse' => 'Attribute_GetByKeyResponse',
    'Attribute_Save' => 'Attribute_Save',
    'Attribute_SaveResponse' => 'Attribute_SaveResponse',
    'Attribute_SaveAndGet' => 'Attribute_SaveAndGet',
    'Attribute_SaveAndGetResponse' => 'Attribute_SaveAndGetResponse',
    'Attribute_Validate' => 'Attribute_Validate',
    'Attribute_ValidateResponse' => 'Attribute_ValidateResponse',
    'AttributeGroup_Clone' => 'AttributeGroup_Clone',
    'AttributeGroup_CloneResponse' => 'AttributeGroup_CloneResponse',
    'AttributeGroup_Delete' => 'AttributeGroup_Delete',
    'AttributeGroup_DeleteResponse' => 'AttributeGroup_DeleteResponse',
    'AttributeGroup_Exists' => 'AttributeGroup_Exists',
    'AttributeGroup_ExistsResponse' => 'AttributeGroup_ExistsResponse',
    'AttributeGroup_GetByKey' => 'AttributeGroup_GetByKey',
    'AttributeGroup_GetByKeyResponse' => 'AttributeGroup_GetByKeyResponse',
    'AttributeGroup_Save' => 'AttributeGroup_Save',
    'AttributeGroup_SaveResponse' => 'AttributeGroup_SaveResponse',
    'AttributeGroup_SaveAndGet' => 'AttributeGroup_SaveAndGet',
    'AttributeGroup_SaveAndGetResponse' => 'AttributeGroup_SaveAndGetResponse',
    'AttributeGroup_Validate' => 'AttributeGroup_Validate',
    'AttributeGroup_ValidateResponse' => 'AttributeGroup_ValidateResponse',
    'AttributeGroup_FillAttributeCollection' => 'AttributeGroup_FillAttributeCollection',
    'AttributeGroup_FillAttributeCollectionResponse' => 'AttributeGroup_FillAttributeCollectionResponse',
    'Cart_Clone' => 'Cart_Clone',
    'Cart_CloneResponse' => 'Cart_CloneResponse',
    'Cart_Delete' => 'Cart_Delete',
    'Cart_DeleteResponse' => 'Cart_DeleteResponse',
    'Cart_Exists' => 'Cart_Exists',
    'Cart_ExistsResponse' => 'Cart_ExistsResponse',
    'Cart_GetByKey' => 'Cart_GetByKey',
    'Cart_GetByKeyResponse' => 'Cart_GetByKeyResponse',
    'Cart_Save' => 'Cart_Save',
    'Cart_SaveResponse' => 'Cart_SaveResponse',
    'Cart_SaveAndGet' => 'Cart_SaveAndGet',
    'Cart_SaveAndGetResponse' => 'Cart_SaveAndGetResponse',
    'Cart_Validate' => 'Cart_Validate',
    'Cart_ValidateResponse' => 'Cart_ValidateResponse',
    'Cart_FillCartVariantCollection' => 'Cart_FillCartVariantCollection',
    'Cart_FillCartVariantCollectionResponse' => 'Cart_FillCartVariantCollectionResponse',
    'Cart_FillCartChildCollection' => 'Cart_FillCartChildCollection',
    'Cart_FillCartChildCollectionResponse' => 'Cart_FillCartChildCollectionResponse',
    'CreditCard_Clone' => 'CreditCard_Clone',
    'CreditCardTrans' => 'CreditCardTrans',
    'CreditCard_CloneResponse' => 'CreditCard_CloneResponse',
    'CreditCard_Delete' => 'CreditCard_Delete',
    'CreditCard_DeleteResponse' => 'CreditCard_DeleteResponse',
    'CreditCard_Exists' => 'CreditCard_Exists',
    'CreditCard_ExistsResponse' => 'CreditCard_ExistsResponse',
    'CreditCard_GetByKey' => 'CreditCard_GetByKey',
    'CreditCard_GetByKeyResponse' => 'CreditCard_GetByKeyResponse',
    'CreditCard_Save' => 'CreditCard_Save',
    'CreditCard_SaveResponse' => 'CreditCard_SaveResponse',
    'CreditCard_SaveAndGet' => 'CreditCard_SaveAndGet',
    'CreditCard_SaveAndGetResponse' => 'CreditCard_SaveAndGetResponse',
    'CreditCard_Validate' => 'CreditCard_Validate',
    'CreditCard_ValidateResponse' => 'CreditCard_ValidateResponse',
    'CartInfo_Clone' => 'CartInfo_Clone',
    'CartInfo_CloneResponse' => 'CartInfo_CloneResponse',
    'CartInfo_Delete' => 'CartInfo_Delete',
    'CartInfo_DeleteResponse' => 'CartInfo_DeleteResponse',
    'CartInfo_Exists' => 'CartInfo_Exists',
    'CartInfo_ExistsResponse' => 'CartInfo_ExistsResponse',
    'CartInfo_GetByKey' => 'CartInfo_GetByKey',
    'CartInfo_GetByKeyResponse' => 'CartInfo_GetByKeyResponse',
    'CartInfo_Save' => 'CartInfo_Save',
    'CartInfo_SaveResponse' => 'CartInfo_SaveResponse',
    'CartInfo_SaveAndGet' => 'CartInfo_SaveAndGet',
    'CartInfo_SaveAndGetResponse' => 'CartInfo_SaveAndGetResponse',
    'CartInfo_Validate' => 'CartInfo_Validate',
    'CartInfo_ValidateResponse' => 'CartInfo_ValidateResponse',
    'CartInfo_FillCartCollection' => 'CartInfo_FillCartCollection',
    'CartInfo_FillCartCollectionResponse' => 'CartInfo_FillCartCollectionResponse',
    'CartVariant_Clone' => 'CartVariant_Clone',
    'CartVariant_CloneResponse' => 'CartVariant_CloneResponse',
    'CartVariant_Delete' => 'CartVariant_Delete',
    'CartVariant_DeleteResponse' => 'CartVariant_DeleteResponse',
    'CartVariant_Exists' => 'CartVariant_Exists',
    'CartVariant_ExistsResponse' => 'CartVariant_ExistsResponse',
    'CartVariant_GetByKey' => 'CartVariant_GetByKey',
    'CartVariant_GetByKeyResponse' => 'CartVariant_GetByKeyResponse',
    'CartVariant_Save' => 'CartVariant_Save',
    'CartVariant_SaveResponse' => 'CartVariant_SaveResponse',
    'CartVariant_SaveAndGet' => 'CartVariant_SaveAndGet',
    'CartVariant_SaveAndGetResponse' => 'CartVariant_SaveAndGetResponse',
    'CartVariant_Validate' => 'CartVariant_Validate',
    'CartVariant_ValidateResponse' => 'CartVariant_ValidateResponse',
    'Category_Clone' => 'Category_Clone',
    'Category_CloneResponse' => 'Category_CloneResponse',
    'Category_Delete' => 'Category_Delete',
    'Category_DeleteResponse' => 'Category_DeleteResponse',
    'Category_Exists' => 'Category_Exists',
    'Category_ExistsResponse' => 'Category_ExistsResponse',
    'Category_GetByKey' => 'Category_GetByKey',
    'Category_GetByKeyResponse' => 'Category_GetByKeyResponse',
    'Category_Save' => 'Category_Save',
    'Category_SaveResponse' => 'Category_SaveResponse',
    'Category_SaveAndGet' => 'Category_SaveAndGet',
    'Category_SaveAndGetResponse' => 'Category_SaveAndGetResponse',
    'Category_Validate' => 'Category_Validate',
    'Category_ValidateResponse' => 'Category_ValidateResponse',
    'Category_FillCategoryCollection' => 'Category_FillCategoryCollection',
    'Category_FillCategoryCollectionResponse' => 'Category_FillCategoryCollectionResponse',
    'Category_FillProductCollection' => 'Category_FillProductCollection',
    'Category_FillProductCollectionResponse' => 'Category_FillProductCollectionResponse',
    'Country_Clone' => 'Country_Clone',
    'Country_CloneResponse' => 'Country_CloneResponse',
    'Country_Delete' => 'Country_Delete',
    'Country_DeleteResponse' => 'Country_DeleteResponse',
    'Country_Exists' => 'Country_Exists',
    'Country_ExistsResponse' => 'Country_ExistsResponse',
    'Country_GetByKey' => 'Country_GetByKey',
    'Country_GetByKeyResponse' => 'Country_GetByKeyResponse',
    'Country_Save' => 'Country_Save',
    'Country_SaveResponse' => 'Country_SaveResponse',
    'Country_SaveAndGet' => 'Country_SaveAndGet',
    'Country_SaveAndGetResponse' => 'Country_SaveAndGetResponse',
    'Country_Validate' => 'Country_Validate',
    'Country_ValidateResponse' => 'Country_ValidateResponse',
    'Customer_Clone' => 'Customer_Clone',
    'Customer_CloneResponse' => 'Customer_CloneResponse',
    'Dictionary' => 'Dictionary',
    'Items' => 'Items',
    'DictionaryItem' => 'DictionaryItem');

  /**
   * 
   * @param array $config A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'https://tastyclouds.americommerce.com/store/ws/americommercedb.asmx?WSDL')
  {
    foreach(self::$classmap as $key => $value)
    {
      if(!isset($options['classmap'][$key]))
      {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * Sends and saves a file or image to the path specified.
   * 
   * @param File_Save $parameters
   * @access public
   */
  public function File_Save(File_Save $parameters)
  {
    return $this->__soapCall('File_Save', array($parameters));
  }

  /**
   * Gets a transport for a single 'Manufacturer' object given the Manufacturer Name of that row in the database.
   * 
   * @param Manufacturer_GetByManufacturerName $parameters
   * @access public
   */
  public function Manufacturer_GetByManufacturerName(Manufacturer_GetByManufacturerName $parameters)
  {
    return $this->__soapCall('Manufacturer_GetByManufacturerName', array($parameters));
  }

  /**
   * Changes an order's status and sends related order status e-mails.
   * 
   * @param Order_ChangeStatusAndProcess $parameters
   * @access public
   */
  public function Order_ChangeStatusAndProcess(Order_ChangeStatusAndProcess $parameters)
  {
    return $this->__soapCall('Order_ChangeStatusAndProcess', array($parameters));
  }

  /**
   * Fills the CustomFields property on an Order.
   * 
   * @param Order_FillCustomFields $parameters
   * @access public
   */
  public function Order_FillCustomFields(Order_FillCustomFields $parameters)
  {
    return $this->__soapCall('Order_FillCustomFields', array($parameters));
  }

  /**
   * Populates the CustomField values for a Order but does not Validate or Save the Order object.
   * 
   * @param Order_ApplyCustomFieldValues $parameters
   * @access public
   */
  public function Order_ApplyCustomFieldValues(Order_ApplyCustomFieldValues $parameters)
  {
    return $this->__soapCall('Order_ApplyCustomFieldValues', array($parameters));
  }

  /**
   * Returns a simplified collection representing the CustomFields assigned to the Order object.
   * 
   * @param Order_ParseCustomFieldValues $parameters
   * @access public
   */
  public function Order_ParseCustomFieldValues(Order_ParseCustomFieldValues $parameters)
  {
    return $this->__soapCall('Order_ParseCustomFieldValues', array($parameters));
  }

  /**
   * Gets a collection of all orders placed between the specified date range.
   * 
   * @param Order_GetByDateRange $parameters
   * @access public
   */
  public function Order_GetByDateRange(Order_GetByDateRange $parameters)
  {
    return $this->__soapCall('Order_GetByDateRange', array($parameters));
  }

  /**
   * Gets a collection of all orders placed between the specified date range.
   * 
   * @param Order_GetByDateRangePreFilled $parameters
   * @access public
   */
  public function Order_GetByDateRangePreFilled(Order_GetByDateRangePreFilled $parameters)
  {
    return $this->__soapCall('Order_GetByDateRangePreFilled', array($parameters));
  }

  /**
   * Gets a collection of all orders edited between the specified date range for the specified store.
   * 
   * @param Order_GetByDateRangeAndStoreID $parameters
   * @access public
   */
  public function Order_GetByDateRangeAndStoreID(Order_GetByDateRangeAndStoreID $parameters)
  {
    return $this->__soapCall('Order_GetByDateRangeAndStoreID', array($parameters));
  }

  /**
   * Gets a collection of all orders edited between the specified date range for the specified store.
   * 
   * @param Order_GetByDateRangeAndStoreIDPreFilled $parameters
   * @access public
   */
  public function Order_GetByDateRangeAndStoreIDPreFilled(Order_GetByDateRangeAndStoreIDPreFilled $parameters)
  {
    return $this->__soapCall('Order_GetByDateRangeAndStoreIDPreFilled', array($parameters));
  }

  /**
   * Gets a collection of all orders edited between the specified date range.
   * 
   * @param Order_GetByEditDateRange $parameters
   * @access public
   */
  public function Order_GetByEditDateRange(Order_GetByEditDateRange $parameters)
  {
    return $this->__soapCall('Order_GetByEditDateRange', array($parameters));
  }

  /**
   * Gets a collection of all orders edited between the specified date range.
   * 
   * @param Order_GetByEditDateRangePreFilled $parameters
   * @access public
   */
  public function Order_GetByEditDateRangePreFilled(Order_GetByEditDateRangePreFilled $parameters)
  {
    return $this->__soapCall('Order_GetByEditDateRangePreFilled', array($parameters));
  }

  /**
   * Gets a collection of all orders edited between the specified date range for the specified store.
   * 
   * @param Order_GetByEditDateRangeAndStoreID $parameters
   * @access public
   */
  public function Order_GetByEditDateRangeAndStoreID(Order_GetByEditDateRangeAndStoreID $parameters)
  {
    return $this->__soapCall('Order_GetByEditDateRangeAndStoreID', array($parameters));
  }

  /**
   * Gets a collection of all orders edited between the specified date range for the specified store.
   * 
   * @param Order_GetByEditDateRangeAndStoreIDPreFilled $parameters
   * @access public
   */
  public function Order_GetByEditDateRangeAndStoreIDPreFilled(Order_GetByEditDateRangeAndStoreIDPreFilled $parameters)
  {
    return $this->__soapCall('Order_GetByEditDateRangeAndStoreIDPreFilled', array($parameters));
  }

  /**
   * Gets a collection of all orders edited between the specified date range for the current store.
   * 
   * @param Order_GetByEditDateRangeForCurrentStore $parameters
   * @access public
   */
  public function Order_GetByEditDateRangeForCurrentStore(Order_GetByEditDateRangeForCurrentStore $parameters)
  {
    return $this->__soapCall('Order_GetByEditDateRangeForCurrentStore', array($parameters));
  }

  /**
   * Gets a collection of all orders edited between the specified date range for the current store.
   * 
   * @param Order_GetByEditDateRangeForCurrentStorePreFilled $parameters
   * @access public
   */
  public function Order_GetByEditDateRangeForCurrentStorePreFilled(Order_GetByEditDateRangeForCurrentStorePreFilled $parameters)
  {
    return $this->__soapCall('Order_GetByEditDateRangeForCurrentStorePreFilled', array($parameters));
  }

  /**
   * Gets a collection of all orders that have the specified OrderStatusID, can get this ID using the OrderStatus name by using OrderStatus_GetByName.
   * 
   * @param Order_GetByOrderStatus $parameters
   * @access public
   */
  public function Order_GetByOrderStatus(Order_GetByOrderStatus $parameters)
  {
    return $this->__soapCall('Order_GetByOrderStatus', array($parameters));
  }

  /**
   * Gets a collection of all orders that have the specified OrderStatusID, can get this ID using the OrderStatus name by using OrderStatus_GetByName.
   * 
   * @param Order_GetByOrderStatusPreFilled $parameters
   * @access public
   */
  public function Order_GetByOrderStatusPreFilled(Order_GetByOrderStatusPreFilled $parameters)
  {
    return $this->__soapCall('Order_GetByOrderStatusPreFilled', array($parameters));
  }

  /**
   * Gets the count of orders that have the specified OrderStatusID,  can get this ID using the OrderStatus name by using OrderStatus_GetByName.
   * 
   * @param Order_GetCountByOrderStatus $parameters
   * @access public
   */
  public function Order_GetCountByOrderStatus(Order_GetCountByOrderStatus $parameters)
  {
    return $this->__soapCall('Order_GetCountByOrderStatus', array($parameters));
  }

  /**
   * Gets a collection of all orders based on the CustomerID passed in, can get the CustomerID via email address by using Customer_GetByEmailAndStore or Customer_GetByCustom.
   * 
   * @param Order_GetByCustomerID $parameters
   * @access public
   */
  public function Order_GetByCustomerID(Order_GetByCustomerID $parameters)
  {
    return $this->__soapCall('Order_GetByCustomerID', array($parameters));
  }

  /**
   * Gets the most recent OrderID.
   * 
   * @param Order_GetLastOrderID $parameters
   * @access public
   */
  public function Order_GetLastOrderID(Order_GetLastOrderID $parameters)
  {
    return $this->__soapCall('Order_GetLastOrderID', array($parameters));
  }

  /**
   * Gets a DataSet containing the OrderID, OrderDate and EditDate of each order that has been modified by any user other than the API.
   * 
   * @param Order_GetRecentlyChangedOrders $parameters
   * @access public
   */
  public function Order_GetRecentlyChangedOrders(Order_GetRecentlyChangedOrders $parameters)
  {
    return $this->__soapCall('Order_GetRecentlyChangedOrders', array($parameters));
  }

  /**
   * Gets a collection of all orders based on the CustomerID passed in, can get the CustomerID via email address by using Customer_GetByEmailAndStore or Customer_GetByCustom.
   * 
   * @param Order_GetByCustomerIDPreFilled $parameters
   * @access public
   */
  public function Order_GetByCustomerIDPreFilled(Order_GetByCustomerIDPreFilled $parameters)
  {
    return $this->__soapCall('Order_GetByCustomerIDPreFilled', array($parameters));
  }

  /**
   * Sets the Credit Card number for the Order Payment.
   * 
   * @param OrderPayment_SetCC $parameters
   * @access public
   */
  public function OrderPayment_SetCC(OrderPayment_SetCC $parameters)
  {
    return $this->__soapCall('OrderPayment_SetCC', array($parameters));
  }

  /**
   * Gets the Credit Card number for the Order Payment.
   * 
   * @param OrderPayment_GetCC $parameters
   * @access public
   */
  public function OrderPayment_GetCC(OrderPayment_GetCC $parameters)
  {
    return $this->__soapCall('OrderPayment_GetCC', array($parameters));
  }

  /**
   * Saves the 'OrderPayment' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderPayment_GetCVV $parameters
   * @access public
   */
  public function OrderPayment_GetCVV(OrderPayment_GetCVV $parameters)
  {
    return $this->__soapCall('OrderPayment_GetCVV', array($parameters));
  }

  /**
   * Creates an OrderShipping and OrderShippingOrderItems row.  If the order is then completely shipped, we settle any pending credit card transactions and change the order status.  Used when partial shipping is required.  If an OrderItemID is specified we use that, if not we go by a supplied OrderItemIndex.
   * 
   * @param Order_SetShippingTrackingNumberAndSettleAuthsIfComplete $parameters
   * @access public
   */
  public function Order_SetShippingTrackingNumberAndSettleAuthsIfComplete(Order_SetShippingTrackingNumberAndSettleAuthsIfComplete $parameters)
  {
    return $this->__soapCall('Order_SetShippingTrackingNumberAndSettleAuthsIfComplete', array($parameters));
  }

  /**
   * Creates an OrderShipping and OrderShippingOrderItems row.  Used when partial shipping is required.
   * 
   * @param Order_SetShippingTrackingNumber $parameters
   * @access public
   */
  public function Order_SetShippingTrackingNumber(Order_SetShippingTrackingNumber $parameters)
  {
    return $this->__soapCall('Order_SetShippingTrackingNumber', array($parameters));
  }

  /**
   * Gets a transport for a single 'Order Status' object given the NAME of that row in the database.
   * 
   * @param OrderStatus_GetByName $parameters
   * @access public
   */
  public function OrderStatus_GetByName(OrderStatus_GetByName $parameters)
  {
    return $this->__soapCall('OrderStatus_GetByName', array($parameters));
  }

  /**
   * Gets a collection of all order statuses.
   * 
   * @param OrderStatus_GetAll $parameters
   * @access public
   */
  public function OrderStatus_GetAll(OrderStatus_GetAll $parameters)
  {
    return $this->__soapCall('OrderStatus_GetAll', array($parameters));
  }

  /**
   * Gets a transport for a single 'Product' object given the ITEM NUMBER of that row in the database.
   * 
   * @param PageRedirect_GetByFromUrl $parameters
   * @access public
   */
  public function PageRedirect_GetByFromUrl(PageRedirect_GetByFromUrl $parameters)
  {
    return $this->__soapCall('PageRedirect_GetByFromUrl', array($parameters));
  }

  /**
   * Fills the CustomFields property on a Product.
   * 
   * @param Product_FillCustomFields $parameters
   * @access public
   */
  public function Product_FillCustomFields(Product_FillCustomFields $parameters)
  {
    return $this->__soapCall('Product_FillCustomFields', array($parameters));
  }

  /**
   * Populates the CustomField values for a Product but does not Validate or Save the Product object.
   * 
   * @param Product_ApplyCustomFieldValues $parameters
   * @access public
   */
  public function Product_ApplyCustomFieldValues(Product_ApplyCustomFieldValues $parameters)
  {
    return $this->__soapCall('Product_ApplyCustomFieldValues', array($parameters));
  }

  /**
   * Returns a simplified collection representing the CustomFields assigned to the Product object.
   * 
   * @param Product_ParseCustomFieldValues $parameters
   * @access public
   */
  public function Product_ParseCustomFieldValues(Product_ParseCustomFieldValues $parameters)
  {
    return $this->__soapCall('Product_ParseCustomFieldValues', array($parameters));
  }

  /**
   * Fills a list of collections in 1 hit instead of sending the xml back and forth constantly.  Example: PRODUCTVARIANTCOL, CATEGORYCOL, PRODUCTCHILDCOL, ATTRIBUTECOL, etc.
   * 
   * @param Product_FillListedCollections $parameters
   * @access public
   */
  public function Product_FillListedCollections(Product_FillListedCollections $parameters)
  {
    return $this->__soapCall('Product_FillListedCollections', array($parameters));
  }

  /**
   * Gets all product ids and itemnumbers given a custom WHERE clause (without the keyword WHERE), must know the sql field names for this.  Example: Custom1 = 1 AND Hide = 0
   * 
   * @param Product_GetByCustomBasicInfoOnly $parameters
   * @access public
   */
  public function Product_GetByCustomBasicInfoOnly(Product_GetByCustomBasicInfoOnly $parameters)
  {
    return $this->__soapCall('Product_GetByCustomBasicInfoOnly', array($parameters));
  }

  /**
   * Gets a transport for a single 'Product' object given the ITEM NUMBER of that row in the database.
   * 
   * @param Product_GetByItemNumber $parameters
   * @access public
   */
  public function Product_GetByItemNumber(Product_GetByItemNumber $parameters)
  {
    return $this->__soapCall('Product_GetByItemNumber', array($parameters));
  }

  /**
   * Gets a count of all Products
   * 
   * @param Product_GetCount $parameters
   * @access public
   */
  public function Product_GetCount(Product_GetCount $parameters)
  {
    return $this->__soapCall('Product_GetCount', array($parameters));
  }

  /**
   * Gets the final applicable price of a product, taking quantity breaks, price calculator entries, sales pricing and store pricing into account.
   * 
   * @param Product_GetPrice $parameters
   * @access public
   */
  public function Product_GetPrice(Product_GetPrice $parameters)
  {
    return $this->__soapCall('Product_GetPrice', array($parameters));
  }

  /**
   * Gets the final applicable price of a product, taking quantity breaks, customer pricing, price calculator entries, sales pricing and store pricing into account.
   * 
   * @param Product_GetPriceByCustomerType $parameters
   * @access public
   */
  public function Product_GetPriceByCustomerType(Product_GetPriceByCustomerType $parameters)
  {
    return $this->__soapCall('Product_GetPriceByCustomerType', array($parameters));
  }

  /**
   * Gets a transport for a collection of 'Products' given a custom WHERE clause (without the keyword WHERE), must know the sql field names for this.  Example: Custom1 = 1 AND Hide = 0
   * 
   * @param Product_GetByCustom $parameters
   * @access public
   */
  public function Product_GetByCustom(Product_GetByCustom $parameters)
  {
    return $this->__soapCall('Product_GetByCustom', array($parameters));
  }

  /**
   * Gets a transport for a collection of top records (where you supply an int for iTop records), 'Products' given a custom WHERE clause (without the keyword WHERE), must know the sql field names for this.  Example: Custom1 = 1 AND Hide = 0
   * 
   * @param Product_GetTopByCustom $parameters
   * @access public
   */
  public function Product_GetTopByCustom(Product_GetTopByCustom $parameters)
  {
    return $this->__soapCall('Product_GetTopByCustom', array($parameters));
  }

  /**
   * Gets a transport for a single 'Product' object given the ITEM NUMBER of that row in the database.
   * 
   * @param Product_GetCurrentURL $parameters
   * @access public
   */
  public function Product_GetCurrentURL(Product_GetCurrentURL $parameters)
  {
    return $this->__soapCall('Product_GetCurrentURL', array($parameters));
  }

  /**
   * Import products in exact format as the CSV import routines, send the data up 1 row at a time and get a response back.
   * 
   * @param Product_Import $parameters
   * @access public
   */
  public function Product_Import(Product_Import $parameters)
  {
    return $this->__soapCall('Product_Import', array($parameters));
  }

  /**
   * This will accept an array of strings and one of the following lookup key types and it will delete any items found: ItemNr
   * 
   * @param Product_DeleteProductsViaLookup $parameters
   * @access public
   */
  public function Product_DeleteProductsViaLookup(Product_DeleteProductsViaLookup $parameters)
  {
    return $this->__soapCall('Product_DeleteProductsViaLookup', array($parameters));
  }

  /**
   * This will accept a DataSet containing a single table which has a Key column of either ItemID, ItemNr, or MfgPartNr, VariantItemNr, VariantMfgPartNr then optionally a Stock, IncrementDecrementStockByQtyPassedInOnly, ProductStatusID, Price and | or Cost Column.  This is a highly optimized method specific to updating inventory on thousands of products at once.  Returns a string containing any errors found.
   * 
   * @param Product_UpdateBasicInventoryViaDataSet $parameters
   * @access public
   */
  public function Product_UpdateBasicInventoryViaDataSet(Product_UpdateBasicInventoryViaDataSet $parameters)
  {
    return $this->__soapCall('Product_UpdateBasicInventoryViaDataSet', array($parameters));
  }

  /**
   * Gets a collection of all product lists stored in AmeriCommerce.
   * 
   * @param ProductList_GetAll $parameters
   * @access public
   */
  public function ProductList_GetAll(ProductList_GetAll $parameters)
  {
    return $this->__soapCall('ProductList_GetAll', array($parameters));
  }

  /**
   * Gets a transport for a single 'Product List' object given the LIST NAME of that row in the database.
   * 
   * @param ProductList_GetByName $parameters
   * @access public
   */
  public function ProductList_GetByName(ProductList_GetByName $parameters)
  {
    return $this->__soapCall('ProductList_GetByName', array($parameters));
  }

  /**
   * Gets an unvalidated list of variant images that are in the file system for a given product. Unvalidated because it pulls a list of all matching images, but does not cross reference to the variants saved on the product+.
   * 
   * @param ProductPicture_GetVariantImageList $parameters
   * @access public
   */
  public function ProductPicture_GetVariantImageList(ProductPicture_GetVariantImageList $parameters)
  {
    return $this->__soapCall('ProductPicture_GetVariantImageList', array($parameters));
  }

  /**
   * Gets a collection of all product reviews for a product.
   * 
   * @param ProductReviews_GetByItemID $parameters
   * @access public
   */
  public function ProductReviews_GetByItemID(ProductReviews_GetByItemID $parameters)
  {
    return $this->__soapCall('ProductReviews_GetByItemID', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductStatus' object given the Product Status Name of that row in the database.
   * 
   * @param ProductStatus_GetByProductStatusName $parameters
   * @access public
   */
  public function ProductStatus_GetByProductStatusName(ProductStatus_GetByProductStatusName $parameters)
  {
    return $this->__soapCall('ProductStatus_GetByProductStatusName', array($parameters));
  }

  /**
   * Gets a collection of all Product statuses.
   * 
   * @param ProductStatus_GetAll $parameters
   * @access public
   */
  public function ProductStatus_GetAll(ProductStatus_GetAll $parameters)
  {
    return $this->__soapCall('ProductStatus_GetAll', array($parameters));
  }

  /**
   * Gets a transport for a single 'Variant' object given the ItemID(Key) and Variant Name of that row in the database.  Variants are on a per product basis.
   * 
   * @param ProductVariant_GetByVariantName $parameters
   * @access public
   */
  public function ProductVariant_GetByVariantName(ProductVariant_GetByVariantName $parameters)
  {
    return $this->__soapCall('ProductVariant_GetByVariantName', array($parameters));
  }

  /**
   * Gets a transport for a single 'VariantGroup' object given the Variant Group Name of that row in the database.
   * 
   * @param ProductVariantGroup_GetByVariantGroupName $parameters
   * @access public
   */
  public function ProductVariantGroup_GetByVariantGroupName(ProductVariantGroup_GetByVariantGroupName $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_GetByVariantGroupName', array($parameters));
  }

  /**
   * SLOW WHEN USING UID, USE INT ID INSTEAD!! Gets an existing session for tracking the user and allowing access to the AmeriCommerce front end pages.
   * 
   * @param Session_GetSessionByUID $parameters
   * @access public
   */
  public function Session_GetSessionByUID(Session_GetSessionByUID $parameters)
  {
    return $this->__soapCall('Session_GetSessionByUID', array($parameters));
  }

  /**
   * Gets a shipping provider based on the name passed in.
   * 
   * @param ShippingProvider_GetByCode $parameters
   * @access public
   */
  public function ShippingProvider_GetByCode(ShippingProvider_GetByCode $parameters)
  {
    return $this->__soapCall('ShippingProvider_GetByCode', array($parameters));
  }

  /**
   * Gets a shipping provider based on the name passed in.
   * 
   * @param ShippingProvider_GetByName $parameters
   * @access public
   */
  public function ShippingProvider_GetByName(ShippingProvider_GetByName $parameters)
  {
    return $this->__soapCall('ShippingProvider_GetByName', array($parameters));
  }

  /**
   * Gets a shipping provider based on the code passed in.
   * 
   * @param ShippingProviderService_GetByCode $parameters
   * @access public
   */
  public function ShippingProviderService_GetByCode(ShippingProviderService_GetByCode $parameters)
  {
    return $this->__soapCall('ShippingProviderService_GetByCode', array($parameters));
  }

  /**
   * Gets a shipping provider based on the display name passed in.
   * 
   * @param ShippingProviderService_GetByDisplayName $parameters
   * @access public
   */
  public function ShippingProviderService_GetByDisplayName(ShippingProviderService_GetByDisplayName $parameters)
  {
    return $this->__soapCall('ShippingProviderService_GetByDisplayName', array($parameters));
  }

  /**
   * Gets a shipping provider based on the indentifier name passed in.
   * 
   * @param ShippingProviderService_GetByIdentifierName $parameters
   * @access public
   */
  public function ShippingProviderService_GetByIdentifierName(ShippingProviderService_GetByIdentifierName $parameters)
  {
    return $this->__soapCall('ShippingProviderService_GetByIdentifierName', array($parameters));
  }

  /**
   * Gets the state with the specified name or state code (abbreviation).
   * 
   * @param State_GetByNameOrStateCode $parameters
   * @access public
   */
  public function State_GetByNameOrStateCode(State_GetByNameOrStateCode $parameters)
  {
    return $this->__soapCall('State_GetByNameOrStateCode', array($parameters));
  }

  /**
   * Sets the specified theme as the active theme on the specified store.
   * 
   * @param Store_ActivateTheme $parameters
   * @access public
   */
  public function Store_ActivateTheme(Store_ActivateTheme $parameters)
  {
    return $this->__soapCall('Store_ActivateTheme', array($parameters));
  }

  /**
   * Gets a collection of all stores.
   * 
   * @param Store_GetAll $parameters
   * @access public
   */
  public function Store_GetAll(Store_GetAll $parameters)
  {
    return $this->__soapCall('Store_GetAll', array($parameters));
  }

  /**
   * Gets the store with the specified store name.
   * 
   * @param Store_GetByName $parameters
   * @access public
   */
  public function Store_GetByName(Store_GetByName $parameters)
  {
    return $this->__soapCall('Store_GetByName', array($parameters));
  }

  /**
   * Fills the CustomFields property on a Store.
   * 
   * @param Store_FillCustomFields $parameters
   * @access public
   */
  public function Store_FillCustomFields(Store_FillCustomFields $parameters)
  {
    return $this->__soapCall('Store_FillCustomFields', array($parameters));
  }

  /**
   * Populates the CustomField values for a Store but does not Validate or Save the Store object.
   * 
   * @param Store_ApplyCustomFieldValues $parameters
   * @access public
   */
  public function Store_ApplyCustomFieldValues(Store_ApplyCustomFieldValues $parameters)
  {
    return $this->__soapCall('Store_ApplyCustomFieldValues', array($parameters));
  }

  /**
   * Returns a simplified collection representing the CustomFields assigned to the Store object.
   * 
   * @param Store_ParseCustomFieldValues $parameters
   * @access public
   */
  public function Store_ParseCustomFieldValues(Store_ParseCustomFieldValues $parameters)
  {
    return $this->__soapCall('Store_ParseCustomFieldValues', array($parameters));
  }

  /**
   * Gets the theme with the specified name.
   * 
   * @param Theme_GetByName $parameters
   * @access public
   */
  public function Theme_GetByName(Theme_GetByName $parameters)
  {
    return $this->__soapCall('Theme_GetByName', array($parameters));
  }

  /**
   * Gets a collection of all themes.
   * 
   * @param Theme_GetAll $parameters
   * @access public
   */
  public function Theme_GetAll(Theme_GetAll $parameters)
  {
    return $this->__soapCall('Theme_GetAll', array($parameters));
  }

  /**
   * Gets a variant inventory record based on the variant inventory number passed in.
   * 
   * @param VariantInventory_GetByVariantInventoryItemNumber $parameters
   * @access public
   */
  public function VariantInventory_GetByVariantInventoryItemNumber(VariantInventory_GetByVariantInventoryItemNumber $parameters)
  {
    return $this->__soapCall('VariantInventory_GetByVariantInventoryItemNumber', array($parameters));
  }

  /**
   * Gets a count of visitors who were active on the specified store during the specified date range.
   * 
   * @param Visitor_GetCountByDateRangeAndStoreID $parameters
   * @access public
   */
  public function Visitor_GetCountByDateRangeAndStoreID(Visitor_GetCountByDateRangeAndStoreID $parameters)
  {
    return $this->__soapCall('Visitor_GetCountByDateRangeAndStoreID', array($parameters));
  }

  /**
   * Gets a count of visitors that first came to the specified store during the specified date range.
   * 
   * @param Visitor_GetNewCountByDateRangeAndStoreID $parameters
   * @access public
   */
  public function Visitor_GetNewCountByDateRangeAndStoreID(Visitor_GetNewCountByDateRangeAndStoreID $parameters)
  {
    return $this->__soapCall('Visitor_GetNewCountByDateRangeAndStoreID', array($parameters));
  }

  /**
   * This method will be called at a regular interval from the agent to process cyclical or timed events within AC.
   * 
   * @param DoTimedEvents $parameters
   * @access public
   */
  public function DoTimedEvents(DoTimedEvents $parameters)
  {
    return $this->__soapCall('DoTimedEvents', array($parameters));
  }

  /**
   * Aborts a running background process.
   * 
   * @param BackgroundProcess_Abort $parameters
   * @access public
   */
  public function BackgroundProcess_Abort(BackgroundProcess_Abort $parameters)
  {
    return $this->__soapCall('BackgroundProcess_Abort', array($parameters));
  }

  /**
   * Gets a count of running background processes.
   * 
   * @param BackgroundProcess_GetCount $parameters
   * @access public
   */
  public function BackgroundProcess_GetCount(BackgroundProcess_GetCount $parameters)
  {
    return $this->__soapCall('BackgroundProcess_GetCount', array($parameters));
  }

  /**
   * Gets a pipe delimited list of running background process keys.
   * 
   * @param BackgroundProcess_GetRunningProcessKeys $parameters
   * @access public
   */
  public function BackgroundProcess_GetRunningProcessKeys(BackgroundProcess_GetRunningProcessKeys $parameters)
  {
    return $this->__soapCall('BackgroundProcess_GetRunningProcessKeys', array($parameters));
  }

  /**
   * Checks to see if a specified background process exists and is currently running.
   * 
   * @param BackgroundProcess_IsRunning $parameters
   * @access public
   */
  public function BackgroundProcess_IsRunning(BackgroundProcess_IsRunning $parameters)
  {
    return $this->__soapCall('BackgroundProcess_IsRunning', array($parameters));
  }

  /**
   * This will get a session for tracking the user and allowing access to the AmeriCommerce front end pages.  This is only needed if you will be using the web services addtocart functions from an external website, it creates a client session that will then need to be asserted on the client machine in the form of a cookie, or even by visiting any AmeriCommerce page will start a session.  You can also go to yoursite/store/session.aspx to get the client's session id also.
   * 
   * @param Session_StartSession $parameters
   * @access public
   */
  public function Session_StartSession(Session_StartSession $parameters)
  {
    return $this->__soapCall('Session_StartSession', array($parameters));
  }

  /**
   * Gets or Starts a cart associated with the specified session.
   * 
   * @param Cart_GetBySessionID $parameters
   * @access public
   */
  public function Cart_GetBySessionID(Cart_GetBySessionID $parameters)
  {
    return $this->__soapCall('Cart_GetBySessionID', array($parameters));
  }

  /**
   * Adds to the supplied sessions active cart.
   * 
   * @param Cart_AddToCart_ByItems $parameters
   * @access public
   */
  public function Cart_AddToCart_ByItems(Cart_AddToCart_ByItems $parameters)
  {
    return $this->__soapCall('Cart_AddToCart_ByItems', array($parameters));
  }

  /**
   * Adds to the supplied sessions active cart.
   * 
   * @param Cart_AddToCart_ByItemsVariants $parameters
   * @access public
   */
  public function Cart_AddToCart_ByItemsVariants(Cart_AddToCart_ByItemsVariants $parameters)
  {
    return $this->__soapCall('Cart_AddToCart_ByItemsVariants', array($parameters));
  }

  /**
   * Adds to the supplied sessions active cart.
   * 
   * @param Cart_AddToCart_ByItem $parameters
   * @access public
   */
  public function Cart_AddToCart_ByItem(Cart_AddToCart_ByItem $parameters)
  {
    return $this->__soapCall('Cart_AddToCart_ByItem', array($parameters));
  }

  /**
   * Adds to the supplied sessions active cart.
   * 
   * @param Cart_AddToCart_ByItemVariants $parameters
   * @access public
   */
  public function Cart_AddToCart_ByItemVariants(Cart_AddToCart_ByItemVariants $parameters)
  {
    return $this->__soapCall('Cart_AddToCart_ByItemVariants', array($parameters));
  }

  /**
   * Updates items that are already in the cart, use the ID of the cart item record to update it.
   * 
   * @param Cart_UpdateCartItem $parameters
   * @access public
   */
  public function Cart_UpdateCartItem(Cart_UpdateCartItem $parameters)
  {
    return $this->__soapCall('Cart_UpdateCartItem', array($parameters));
  }

  /**
   * Removes the specified item from the cart.
   * 
   * @param Cart_RemoveCartItem $parameters
   * @access public
   */
  public function Cart_RemoveCartItem(Cart_RemoveCartItem $parameters)
  {
    return $this->__soapCall('Cart_RemoveCartItem', array($parameters));
  }

  /**
   * Gets shipping options for the sessions active cart. Can supply varying amounts of information (Zip only, etc.), standard 2 digit country codes are required.  Can get from Country_GetAll.
   * 
   * @param Cart_GetShipping $parameters
   * @access public
   */
  public function Cart_GetShipping(Cart_GetShipping $parameters)
  {
    return $this->__soapCall('Cart_GetShipping', array($parameters));
  }

  /**
   * Gets a list of active payment methods for the store being accessed.
   * 
   * @param Cart_GetPaymentMethods $parameters
   * @access public
   */
  public function Cart_GetPaymentMethods(Cart_GetPaymentMethods $parameters)
  {
    return $this->__soapCall('Cart_GetPaymentMethods', array($parameters));
  }

  /**
   * Sets the shipping method and rate used for the cart, send in the rateidentifier from the rate or a custom rate formatted appropriately.
   * 
   * @param Cart_SetShipping $parameters
   * @access public
   */
  public function Cart_SetShipping(Cart_SetShipping $parameters)
  {
    return $this->__soapCall('Cart_SetShipping', array($parameters));
  }

  /**
   * Clears the cart associated to the session and removes all trace of the items that were added to it.
   * 
   * @param Cart_ClearCart $parameters
   * @access public
   */
  public function Cart_ClearCart(Cart_ClearCart $parameters)
  {
    return $this->__soapCall('Cart_ClearCart', array($parameters));
  }

  /**
   * Places the order using a session that has a cart.  You will send in all pertinent order information that has not already been logged during the carting process and place the order accordingly.
   * 
   * @param Cart_PlaceOrder $parameters
   * @access public
   */
  public function Cart_PlaceOrder(Cart_PlaceOrder $parameters)
  {
    return $this->__soapCall('Cart_PlaceOrder', array($parameters));
  }

  /**
   * Gets the store associated with the specified session.
   * 
   * @param Store_GetBySessionID $parameters
   * @access public
   */
  public function Store_GetBySessionID(Store_GetBySessionID $parameters)
  {
    return $this->__soapCall('Store_GetBySessionID', array($parameters));
  }

  /**
   * Gets the customer associated with the specified session.
   * 
   * @param Customer_GetBySessionID $parameters
   * @access public
   */
  public function Customer_GetBySessionID(Customer_GetBySessionID $parameters)
  {
    return $this->__soapCall('Customer_GetBySessionID', array($parameters));
  }

  /**
   * Gets the current store for the domain you are accessing.
   * 
   * @param Store_GetCurrent $parameters
   * @access public
   */
  public function Store_GetCurrent(Store_GetCurrent $parameters)
  {
    return $this->__soapCall('Store_GetCurrent', array($parameters));
  }

  /**
   * Gets a transport for a collection of MailingListMembers based on CustomerID
   * 
   * @param MailingLists_GetByCustomerID $parameters
   * @access public
   */
  public function MailingLists_GetByCustomerID(MailingLists_GetByCustomerID $parameters)
  {
    return $this->__soapCall('MailingLists_GetByCustomerID', array($parameters));
  }

  /**
   * Pass in the security header (like on other methods) and just get a simple authenticate return or in the event of failure a login exception with proper message.
   * 
   * @param Authenticate $parameters
   * @access public
   */
  public function Authenticate(Authenticate $parameters)
  {
    return $this->__soapCall('Authenticate', array($parameters));
  }

  /**
   * Generates a time-limited (2 minute), URL-encoded SingleSignon key to be passed back to the administration login page.
   * 
   * @param GetSingleSignonKey $parameters
   * @access public
   */
  public function GetSingleSignonKey(GetSingleSignonKey $parameters)
  {
    return $this->__soapCall('GetSingleSignonKey', array($parameters));
  }

  /**
   * Generates a time-limited (2 minute), URL-encoded SingleSignon key to be passed back to the customer login page.
   * 
   * @param GetCustomerSingleSignonKey $parameters
   * @access public
   */
  public function GetCustomerSingleSignonKey(GetCustomerSingleSignonKey $parameters)
  {
    return $this->__soapCall('GetCustomerSingleSignonKey', array($parameters));
  }

  /**
   * Gets a transport for a single 'StoreShippingOptions' object given the primary key of that row in the database.
   * 
   * @param StoreShippingOptions_GetByKey $parameters
   * @access public
   */
  public function StoreShippingOptions_GetByKey(StoreShippingOptions_GetByKey $parameters)
  {
    return $this->__soapCall('StoreShippingOptions_GetByKey', array($parameters));
  }

  /**
   * Saves the 'StoreShippingOptions' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param StoreShippingOptions_Save $parameters
   * @access public
   */
  public function StoreShippingOptions_Save(StoreShippingOptions_Save $parameters)
  {
    return $this->__soapCall('StoreShippingOptions_Save', array($parameters));
  }

  /**
   * Saves the 'StoreShippingOptions' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param StoreShippingOptions_SaveAndGet $parameters
   * @access public
   */
  public function StoreShippingOptions_SaveAndGet(StoreShippingOptions_SaveAndGet $parameters)
  {
    return $this->__soapCall('StoreShippingOptions_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'StoreShippingOptions' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param StoreShippingOptions_Validate $parameters
   * @access public
   */
  public function StoreShippingOptions_Validate(StoreShippingOptions_Validate $parameters)
  {
    return $this->__soapCall('StoreShippingOptions_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'TaxRates' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param TaxRates_Clone $parameters
   * @access public
   */
  public function TaxRates_Clone(TaxRates_Clone $parameters)
  {
    return $this->__soapCall('TaxRates_Clone', array($parameters));
  }

  /**
   * Deletes the 'TaxRates' item from the database with the key passed in.
   * 
   * @param TaxRates_Delete $parameters
   * @access public
   */
  public function TaxRates_Delete(TaxRates_Delete $parameters)
  {
    return $this->__soapCall('TaxRates_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'TaxRates' exists with the key passed in.
   * 
   * @param TaxRates_Exists $parameters
   * @access public
   */
  public function TaxRates_Exists(TaxRates_Exists $parameters)
  {
    return $this->__soapCall('TaxRates_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'TaxRates' object given the primary key of that row in the database.
   * 
   * @param TaxRates_GetByKey $parameters
   * @access public
   */
  public function TaxRates_GetByKey(TaxRates_GetByKey $parameters)
  {
    return $this->__soapCall('TaxRates_GetByKey', array($parameters));
  }

  /**
   * Saves the 'TaxRates' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param TaxRates_Save $parameters
   * @access public
   */
  public function TaxRates_Save(TaxRates_Save $parameters)
  {
    return $this->__soapCall('TaxRates_Save', array($parameters));
  }

  /**
   * Saves the 'TaxRates' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param TaxRates_SaveAndGet $parameters
   * @access public
   */
  public function TaxRates_SaveAndGet(TaxRates_SaveAndGet $parameters)
  {
    return $this->__soapCall('TaxRates_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'TaxRates' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param TaxRates_Validate $parameters
   * @access public
   */
  public function TaxRates_Validate(TaxRates_Validate $parameters)
  {
    return $this->__soapCall('TaxRates_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Theme' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Theme_Clone $parameters
   * @access public
   */
  public function Theme_Clone(Theme_Clone $parameters)
  {
    return $this->__soapCall('Theme_Clone', array($parameters));
  }

  /**
   * Deletes the 'Theme' item from the database with the key passed in.
   * 
   * @param Theme_Delete $parameters
   * @access public
   */
  public function Theme_Delete(Theme_Delete $parameters)
  {
    return $this->__soapCall('Theme_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Theme' exists with the key passed in.
   * 
   * @param Theme_Exists $parameters
   * @access public
   */
  public function Theme_Exists(Theme_Exists $parameters)
  {
    return $this->__soapCall('Theme_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Theme' object given the primary key of that row in the database.
   * 
   * @param Theme_GetByKey $parameters
   * @access public
   */
  public function Theme_GetByKey(Theme_GetByKey $parameters)
  {
    return $this->__soapCall('Theme_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Theme' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Theme_Save $parameters
   * @access public
   */
  public function Theme_Save(Theme_Save $parameters)
  {
    return $this->__soapCall('Theme_Save', array($parameters));
  }

  /**
   * Saves the 'Theme' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Theme_SaveAndGet $parameters
   * @access public
   */
  public function Theme_SaveAndGet(Theme_SaveAndGet $parameters)
  {
    return $this->__soapCall('Theme_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Theme' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Theme_Validate $parameters
   * @access public
   */
  public function Theme_Validate(Theme_Validate $parameters)
  {
    return $this->__soapCall('Theme_Validate', array($parameters));
  }

  /**
   * Fills the ThemeStyle OneToMany Collection on a Theme transport.  Pass in the 'Theme' transport object to put the ThemeStyle OneToMany collection on.
   * 
   * @param Theme_FillThemeStyleCollection $parameters
   * @access public
   */
  public function Theme_FillThemeStyleCollection(Theme_FillThemeStyleCollection $parameters)
  {
    return $this->__soapCall('Theme_FillThemeStyleCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'User' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param User_Clone $parameters
   * @access public
   */
  public function User_Clone(User_Clone $parameters)
  {
    return $this->__soapCall('User_Clone', array($parameters));
  }

  /**
   * Deletes the 'User' item from the database with the key passed in.
   * 
   * @param User_Delete $parameters
   * @access public
   */
  public function User_Delete(User_Delete $parameters)
  {
    return $this->__soapCall('User_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'User' exists with the key passed in.
   * 
   * @param User_Exists $parameters
   * @access public
   */
  public function User_Exists(User_Exists $parameters)
  {
    return $this->__soapCall('User_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'User' object given the primary key of that row in the database.
   * 
   * @param User_GetByKey $parameters
   * @access public
   */
  public function User_GetByKey(User_GetByKey $parameters)
  {
    return $this->__soapCall('User_GetByKey', array($parameters));
  }

  /**
   * Saves the 'User' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param User_Save $parameters
   * @access public
   */
  public function User_Save(User_Save $parameters)
  {
    return $this->__soapCall('User_Save', array($parameters));
  }

  /**
   * Saves the 'User' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param User_SaveAndGet $parameters
   * @access public
   */
  public function User_SaveAndGet(User_SaveAndGet $parameters)
  {
    return $this->__soapCall('User_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'User' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param User_Validate $parameters
   * @access public
   */
  public function User_Validate(User_Validate $parameters)
  {
    return $this->__soapCall('User_Validate', array($parameters));
  }

  /**
   * Fills the UserGroup AssociativeEntity Collection on a User transport.  Pass in the 'User' transport object to put the UserGroup AssociativeEntity collection on.
   * 
   * @param User_FillUserGroupCollection $parameters
   * @access public
   */
  public function User_FillUserGroupCollection(User_FillUserGroupCollection $parameters)
  {
    return $this->__soapCall('User_FillUserGroupCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'UserGroup' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param UserGroup_Clone $parameters
   * @access public
   */
  public function UserGroup_Clone(UserGroup_Clone $parameters)
  {
    return $this->__soapCall('UserGroup_Clone', array($parameters));
  }

  /**
   * Deletes the 'UserGroup' item from the database with the key passed in.
   * 
   * @param UserGroup_Delete $parameters
   * @access public
   */
  public function UserGroup_Delete(UserGroup_Delete $parameters)
  {
    return $this->__soapCall('UserGroup_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'UserGroup' exists with the key passed in.
   * 
   * @param UserGroup_Exists $parameters
   * @access public
   */
  public function UserGroup_Exists(UserGroup_Exists $parameters)
  {
    return $this->__soapCall('UserGroup_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'UserGroup' object given the primary key of that row in the database.
   * 
   * @param UserGroup_GetByKey $parameters
   * @access public
   */
  public function UserGroup_GetByKey(UserGroup_GetByKey $parameters)
  {
    return $this->__soapCall('UserGroup_GetByKey', array($parameters));
  }

  /**
   * Saves the 'UserGroup' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param UserGroup_Save $parameters
   * @access public
   */
  public function UserGroup_Save(UserGroup_Save $parameters)
  {
    return $this->__soapCall('UserGroup_Save', array($parameters));
  }

  /**
   * Saves the 'UserGroup' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param UserGroup_SaveAndGet $parameters
   * @access public
   */
  public function UserGroup_SaveAndGet(UserGroup_SaveAndGet $parameters)
  {
    return $this->__soapCall('UserGroup_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'UserGroup' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param UserGroup_Validate $parameters
   * @access public
   */
  public function UserGroup_Validate(UserGroup_Validate $parameters)
  {
    return $this->__soapCall('UserGroup_Validate', array($parameters));
  }

  /**
   * Fills the UserGroupPermission OneToMany Collection on a UserGroup transport.  Pass in the 'UserGroup' transport object to put the UserGroupPermission OneToMany collection on.
   * 
   * @param UserGroup_FillUserGroupPermissionCollection $parameters
   * @access public
   */
  public function UserGroup_FillUserGroupPermissionCollection(UserGroup_FillUserGroupPermissionCollection $parameters)
  {
    return $this->__soapCall('UserGroup_FillUserGroupPermissionCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'UserGroupPermission' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param UserGroupPermission_Clone $parameters
   * @access public
   */
  public function UserGroupPermission_Clone(UserGroupPermission_Clone $parameters)
  {
    return $this->__soapCall('UserGroupPermission_Clone', array($parameters));
  }

  /**
   * Deletes the 'UserGroupPermission' item from the database with the key passed in.
   * 
   * @param UserGroupPermission_Delete $parameters
   * @access public
   */
  public function UserGroupPermission_Delete(UserGroupPermission_Delete $parameters)
  {
    return $this->__soapCall('UserGroupPermission_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'UserGroupPermission' exists with the key passed in.
   * 
   * @param UserGroupPermission_Exists $parameters
   * @access public
   */
  public function UserGroupPermission_Exists(UserGroupPermission_Exists $parameters)
  {
    return $this->__soapCall('UserGroupPermission_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'UserGroupPermission' object given the primary key of that row in the database.
   * 
   * @param UserGroupPermission_GetByKey $parameters
   * @access public
   */
  public function UserGroupPermission_GetByKey(UserGroupPermission_GetByKey $parameters)
  {
    return $this->__soapCall('UserGroupPermission_GetByKey', array($parameters));
  }

  /**
   * Saves the 'UserGroupPermission' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param UserGroupPermission_Save $parameters
   * @access public
   */
  public function UserGroupPermission_Save(UserGroupPermission_Save $parameters)
  {
    return $this->__soapCall('UserGroupPermission_Save', array($parameters));
  }

  /**
   * Saves the 'UserGroupPermission' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param UserGroupPermission_SaveAndGet $parameters
   * @access public
   */
  public function UserGroupPermission_SaveAndGet(UserGroupPermission_SaveAndGet $parameters)
  {
    return $this->__soapCall('UserGroupPermission_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'UserGroupPermission' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param UserGroupPermission_Validate $parameters
   * @access public
   */
  public function UserGroupPermission_Validate(UserGroupPermission_Validate $parameters)
  {
    return $this->__soapCall('UserGroupPermission_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'UserRoles' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param UserRoles_Clone $parameters
   * @access public
   */
  public function UserRoles_Clone(UserRoles_Clone $parameters)
  {
    return $this->__soapCall('UserRoles_Clone', array($parameters));
  }

  /**
   * Deletes the 'UserRoles' item from the database with the key passed in.
   * 
   * @param UserRoles_Delete $parameters
   * @access public
   */
  public function UserRoles_Delete(UserRoles_Delete $parameters)
  {
    return $this->__soapCall('UserRoles_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'UserRoles' exists with the key passed in.
   * 
   * @param UserRoles_Exists $parameters
   * @access public
   */
  public function UserRoles_Exists(UserRoles_Exists $parameters)
  {
    return $this->__soapCall('UserRoles_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'UserRoles' object given the primary key of that row in the database.
   * 
   * @param UserRoles_GetByKey $parameters
   * @access public
   */
  public function UserRoles_GetByKey(UserRoles_GetByKey $parameters)
  {
    return $this->__soapCall('UserRoles_GetByKey', array($parameters));
  }

  /**
   * Saves the 'UserRoles' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param UserRoles_Save $parameters
   * @access public
   */
  public function UserRoles_Save(UserRoles_Save $parameters)
  {
    return $this->__soapCall('UserRoles_Save', array($parameters));
  }

  /**
   * Saves the 'UserRoles' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param UserRoles_SaveAndGet $parameters
   * @access public
   */
  public function UserRoles_SaveAndGet(UserRoles_SaveAndGet $parameters)
  {
    return $this->__soapCall('UserRoles_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'UserRoles' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param UserRoles_Validate $parameters
   * @access public
   */
  public function UserRoles_Validate(UserRoles_Validate $parameters)
  {
    return $this->__soapCall('UserRoles_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'VariantInventory' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param VariantInventory_Clone $parameters
   * @access public
   */
  public function VariantInventory_Clone(VariantInventory_Clone $parameters)
  {
    return $this->__soapCall('VariantInventory_Clone', array($parameters));
  }

  /**
   * Deletes the 'VariantInventory' item from the database with the key passed in.
   * 
   * @param VariantInventory_Delete $parameters
   * @access public
   */
  public function VariantInventory_Delete(VariantInventory_Delete $parameters)
  {
    return $this->__soapCall('VariantInventory_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'VariantInventory' exists with the key passed in.
   * 
   * @param VariantInventory_Exists $parameters
   * @access public
   */
  public function VariantInventory_Exists(VariantInventory_Exists $parameters)
  {
    return $this->__soapCall('VariantInventory_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'VariantInventory' object given the primary key of that row in the database.
   * 
   * @param VariantInventory_GetByKey $parameters
   * @access public
   */
  public function VariantInventory_GetByKey(VariantInventory_GetByKey $parameters)
  {
    return $this->__soapCall('VariantInventory_GetByKey', array($parameters));
  }

  /**
   * Saves the 'VariantInventory' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param VariantInventory_Save $parameters
   * @access public
   */
  public function VariantInventory_Save(VariantInventory_Save $parameters)
  {
    return $this->__soapCall('VariantInventory_Save', array($parameters));
  }

  /**
   * Saves the 'VariantInventory' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param VariantInventory_SaveAndGet $parameters
   * @access public
   */
  public function VariantInventory_SaveAndGet(VariantInventory_SaveAndGet $parameters)
  {
    return $this->__soapCall('VariantInventory_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'VariantInventory' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param VariantInventory_Validate $parameters
   * @access public
   */
  public function VariantInventory_Validate(VariantInventory_Validate $parameters)
  {
    return $this->__soapCall('VariantInventory_Validate', array($parameters));
  }

  /**
   * Fills the ProductPricing OneToMany Collection on a VariantInventory transport.  Pass in the 'VariantInventory' transport object to put the ProductPricing OneToMany collection on.
   * 
   * @param VariantInventory_FillProductPricingCollection $parameters
   * @access public
   */
  public function VariantInventory_FillProductPricingCollection(VariantInventory_FillProductPricingCollection $parameters)
  {
    return $this->__soapCall('VariantInventory_FillProductPricingCollection', array($parameters));
  }

  /**
   * Fills the ProductVariant AssociativeEntity Collection on a VariantInventory transport.  Pass in the 'VariantInventory' transport object to put the ProductVariant AssociativeEntity collection on.
   * 
   * @param VariantInventory_FillProductVariantCollection $parameters
   * @access public
   */
  public function VariantInventory_FillProductVariantCollection(VariantInventory_FillProductVariantCollection $parameters)
  {
    return $this->__soapCall('VariantInventory_FillProductVariantCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'Warehouses' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Warehouses_Clone $parameters
   * @access public
   */
  public function Warehouses_Clone(Warehouses_Clone $parameters)
  {
    return $this->__soapCall('Warehouses_Clone', array($parameters));
  }

  /**
   * Deletes the 'Warehouses' item from the database with the key passed in.
   * 
   * @param Warehouses_Delete $parameters
   * @access public
   */
  public function Warehouses_Delete(Warehouses_Delete $parameters)
  {
    return $this->__soapCall('Warehouses_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Warehouses' exists with the key passed in.
   * 
   * @param Warehouses_Exists $parameters
   * @access public
   */
  public function Warehouses_Exists(Warehouses_Exists $parameters)
  {
    return $this->__soapCall('Warehouses_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Warehouses' object given the primary key of that row in the database.
   * 
   * @param Warehouses_GetByKey $parameters
   * @access public
   */
  public function Warehouses_GetByKey(Warehouses_GetByKey $parameters)
  {
    return $this->__soapCall('Warehouses_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Warehouses' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Warehouses_Save $parameters
   * @access public
   */
  public function Warehouses_Save(Warehouses_Save $parameters)
  {
    return $this->__soapCall('Warehouses_Save', array($parameters));
  }

  /**
   * Saves the 'Warehouses' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Warehouses_SaveAndGet $parameters
   * @access public
   */
  public function Warehouses_SaveAndGet(Warehouses_SaveAndGet $parameters)
  {
    return $this->__soapCall('Warehouses_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Warehouses' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Warehouses_Validate $parameters
   * @access public
   */
  public function Warehouses_Validate(Warehouses_Validate $parameters)
  {
    return $this->__soapCall('Warehouses_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'WeightUnit' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param WeightUnit_Clone $parameters
   * @access public
   */
  public function WeightUnit_Clone(WeightUnit_Clone $parameters)
  {
    return $this->__soapCall('WeightUnit_Clone', array($parameters));
  }

  /**
   * Deletes the 'WeightUnit' item from the database with the key passed in.
   * 
   * @param WeightUnit_Delete $parameters
   * @access public
   */
  public function WeightUnit_Delete(WeightUnit_Delete $parameters)
  {
    return $this->__soapCall('WeightUnit_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'WeightUnit' exists with the key passed in.
   * 
   * @param WeightUnit_Exists $parameters
   * @access public
   */
  public function WeightUnit_Exists(WeightUnit_Exists $parameters)
  {
    return $this->__soapCall('WeightUnit_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'WeightUnit' object given the primary key of that row in the database.
   * 
   * @param WeightUnit_GetByKey $parameters
   * @access public
   */
  public function WeightUnit_GetByKey(WeightUnit_GetByKey $parameters)
  {
    return $this->__soapCall('WeightUnit_GetByKey', array($parameters));
  }

  /**
   * Saves the 'WeightUnit' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param WeightUnit_Save $parameters
   * @access public
   */
  public function WeightUnit_Save(WeightUnit_Save $parameters)
  {
    return $this->__soapCall('WeightUnit_Save', array($parameters));
  }

  /**
   * Saves the 'WeightUnit' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param WeightUnit_SaveAndGet $parameters
   * @access public
   */
  public function WeightUnit_SaveAndGet(WeightUnit_SaveAndGet $parameters)
  {
    return $this->__soapCall('WeightUnit_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'WeightUnit' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param WeightUnit_Validate $parameters
   * @access public
   */
  public function WeightUnit_Validate(WeightUnit_Validate $parameters)
  {
    return $this->__soapCall('WeightUnit_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ProductReview' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ProductReview_Clone $parameters
   * @access public
   */
  public function ProductReview_Clone(ProductReview_Clone $parameters)
  {
    return $this->__soapCall('ProductReview_Clone', array($parameters));
  }

  /**
   * Deletes the 'ProductReview' item from the database with the key passed in.
   * 
   * @param ProductReview_Delete $parameters
   * @access public
   */
  public function ProductReview_Delete(ProductReview_Delete $parameters)
  {
    return $this->__soapCall('ProductReview_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ProductReview' exists with the key passed in.
   * 
   * @param ProductReview_Exists $parameters
   * @access public
   */
  public function ProductReview_Exists(ProductReview_Exists $parameters)
  {
    return $this->__soapCall('ProductReview_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductReview' object given the primary key of that row in the database.
   * 
   * @param ProductReview_GetByKey $parameters
   * @access public
   */
  public function ProductReview_GetByKey(ProductReview_GetByKey $parameters)
  {
    return $this->__soapCall('ProductReview_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ProductReview' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductReview_Save $parameters
   * @access public
   */
  public function ProductReview_Save(ProductReview_Save $parameters)
  {
    return $this->__soapCall('ProductReview_Save', array($parameters));
  }

  /**
   * Saves the 'ProductReview' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductReview_SaveAndGet $parameters
   * @access public
   */
  public function ProductReview_SaveAndGet(ProductReview_SaveAndGet $parameters)
  {
    return $this->__soapCall('ProductReview_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ProductReview' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ProductReview_Validate $parameters
   * @access public
   */
  public function ProductReview_Validate(ProductReview_Validate $parameters)
  {
    return $this->__soapCall('ProductReview_Validate', array($parameters));
  }

  /**
   * Fills the ProductRating OneToMany Collection on a ProductReview transport.  Pass in the 'ProductReview' transport object to put the ProductRating OneToMany collection on.
   * 
   * @param ProductReview_FillProductRatingCollection $parameters
   * @access public
   */
  public function ProductReview_FillProductRatingCollection(ProductReview_FillProductRatingCollection $parameters)
  {
    return $this->__soapCall('ProductReview_FillProductRatingCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'MailingList' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param MailingList_Clone $parameters
   * @access public
   */
  public function MailingList_Clone(MailingList_Clone $parameters)
  {
    return $this->__soapCall('MailingList_Clone', array($parameters));
  }

  /**
   * Deletes the 'MailingList' item from the database with the key passed in.
   * 
   * @param MailingList_Delete $parameters
   * @access public
   */
  public function MailingList_Delete(MailingList_Delete $parameters)
  {
    return $this->__soapCall('MailingList_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'MailingList' exists with the key passed in.
   * 
   * @param MailingList_Exists $parameters
   * @access public
   */
  public function MailingList_Exists(MailingList_Exists $parameters)
  {
    return $this->__soapCall('MailingList_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'MailingList' object given the primary key of that row in the database.
   * 
   * @param MailingList_GetByKey $parameters
   * @access public
   */
  public function MailingList_GetByKey(MailingList_GetByKey $parameters)
  {
    return $this->__soapCall('MailingList_GetByKey', array($parameters));
  }

  /**
   * Saves the 'MailingList' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param MailingList_Save $parameters
   * @access public
   */
  public function MailingList_Save(MailingList_Save $parameters)
  {
    return $this->__soapCall('MailingList_Save', array($parameters));
  }

  /**
   * Saves the 'MailingList' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param MailingList_SaveAndGet $parameters
   * @access public
   */
  public function MailingList_SaveAndGet(MailingList_SaveAndGet $parameters)
  {
    return $this->__soapCall('MailingList_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'MailingList' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param MailingList_Validate $parameters
   * @access public
   */
  public function MailingList_Validate(MailingList_Validate $parameters)
  {
    return $this->__soapCall('MailingList_Validate', array($parameters));
  }

  /**
   * Fills the MailingListRule OneToMany Collection on a MailingList transport.  Pass in the 'MailingList' transport object to put the MailingListRule OneToMany collection on.
   * 
   * @param MailingList_FillMailingListRuleCollection $parameters
   * @access public
   */
  public function MailingList_FillMailingListRuleCollection(MailingList_FillMailingListRuleCollection $parameters)
  {
    return $this->__soapCall('MailingList_FillMailingListRuleCollection', array($parameters));
  }

  /**
   * Fills the MailingListMember OneToMany Collection on a MailingList transport.  Pass in the 'MailingList' transport object to put the MailingListMember OneToMany collection on.
   * 
   * @param MailingList_FillMailingListMemberCollection $parameters
   * @access public
   */
  public function MailingList_FillMailingListMemberCollection(MailingList_FillMailingListMemberCollection $parameters)
  {
    return $this->__soapCall('MailingList_FillMailingListMemberCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'MailingListMember' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param MailingListMember_Clone $parameters
   * @access public
   */
  public function MailingListMember_Clone(MailingListMember_Clone $parameters)
  {
    return $this->__soapCall('MailingListMember_Clone', array($parameters));
  }

  /**
   * Deletes the 'MailingListMember' item from the database with the key passed in.
   * 
   * @param MailingListMember_Delete $parameters
   * @access public
   */
  public function MailingListMember_Delete(MailingListMember_Delete $parameters)
  {
    return $this->__soapCall('MailingListMember_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'MailingListMember' exists with the key passed in.
   * 
   * @param MailingListMember_Exists $parameters
   * @access public
   */
  public function MailingListMember_Exists(MailingListMember_Exists $parameters)
  {
    return $this->__soapCall('MailingListMember_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'MailingListMember' object given the primary key of that row in the database.
   * 
   * @param MailingListMember_GetByKey $parameters
   * @access public
   */
  public function MailingListMember_GetByKey(MailingListMember_GetByKey $parameters)
  {
    return $this->__soapCall('MailingListMember_GetByKey', array($parameters));
  }

  /**
   * Saves the 'MailingListMember' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param MailingListMember_Save $parameters
   * @access public
   */
  public function MailingListMember_Save(MailingListMember_Save $parameters)
  {
    return $this->__soapCall('MailingListMember_Save', array($parameters));
  }

  /**
   * Saves the 'MailingListMember' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param MailingListMember_SaveAndGet $parameters
   * @access public
   */
  public function MailingListMember_SaveAndGet(MailingListMember_SaveAndGet $parameters)
  {
    return $this->__soapCall('MailingListMember_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'MailingListMember' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param MailingListMember_Validate $parameters
   * @access public
   */
  public function MailingListMember_Validate(MailingListMember_Validate $parameters)
  {
    return $this->__soapCall('MailingListMember_Validate', array($parameters));
  }

  /**
   * Gets a transport for a single 'AdCode' object given the ADCODE NAME of that row in the database.
   * 
   * @param AdCode_GetByCode $parameters
   * @access public
   */
  public function AdCode_GetByCode(AdCode_GetByCode $parameters)
  {
    return $this->__soapCall('AdCode_GetByCode', array($parameters));
  }

  /**
   * Gets a transport for a single 'AdCode' object given the ADCODE NAME of that row in the database.
   * 
   * @param Affiliate_GetByCode $parameters
   * @access public
   */
  public function Affiliate_GetByCode(Affiliate_GetByCode $parameters)
  {
    return $this->__soapCall('Affiliate_GetByCode', array($parameters));
  }

  /**
   * Gets a transport for a single 'Attribute' object given the ATTRIBUTE NAME of that row in the database.
   * 
   * @param Attribute_GetByName $parameters
   * @access public
   */
  public function Attribute_GetByName(Attribute_GetByName $parameters)
  {
    return $this->__soapCall('Attribute_GetByName', array($parameters));
  }

  /**
   * Gets a transport for a single 'AttributeGroup' object given the ATTRIBUTE GROUP NAME of that row in the database.
   * 
   * @param AttributeGroup_GetByName $parameters
   * @access public
   */
  public function AttributeGroup_GetByName(AttributeGroup_GetByName $parameters)
  {
    return $this->__soapCall('AttributeGroup_GetByName', array($parameters));
  }

  /**
   * Resets the websites cache such as URL redirects, theme, and more.
   * 
   * @param Cache_Reset $parameters
   * @access public
   */
  public function Cache_Reset(Cache_Reset $parameters)
  {
    return $this->__soapCall('Cache_Reset', array($parameters));
  }

  /**
   * Fills the Product Collection with ALL products in this category, which includes when the product is in multiple categories, not just the master category.
   * 
   * @param Category_GetProducts $parameters
   * @access public
   */
  public function Category_GetProducts(Category_GetProducts $parameters)
  {
    return $this->__soapCall('Category_GetProducts', array($parameters));
  }

  /**
   * Gets a transport for a single 'Category' object given the CATEGORY NAME of that row in the database.
   * 
   * @param Category_GetByName $parameters
   * @access public
   */
  public function Category_GetByName(Category_GetByName $parameters)
  {
    return $this->__soapCall('Category_GetByName', array($parameters));
  }

  /**
   * Gets a transport for a single 'Category' object given the CATEGORY NAME of that row in the database.
   * 
   * @param Category_GetByNameIncludingParent $parameters
   * @access public
   */
  public function Category_GetByNameIncludingParent(Category_GetByNameIncludingParent $parameters)
  {
    return $this->__soapCall('Category_GetByNameIncludingParent', array($parameters));
  }

  /**
   * Rebuilds the category tree so all categories will be indexed and displayed properly.
   * 
   * @param Category_RebuildCategoryTree $parameters
   * @access public
   */
  public function Category_RebuildCategoryTree(Category_RebuildCategoryTree $parameters)
  {
    return $this->__soapCall('Category_RebuildCategoryTree', array($parameters));
  }

  /**
   * Gets the country with the specified name.
   * 
   * @param Country_GetByNameOrCountryCode $parameters
   * @access public
   */
  public function Country_GetByNameOrCountryCode(Country_GetByNameOrCountryCode $parameters)
  {
    return $this->__soapCall('Country_GetByNameOrCountryCode', array($parameters));
  }

  /**
   * Create an XML product feed file on the server for the current store.
   * 
   * @param CreateProductFeed $parameters
   * @access public
   */
  public function CreateProductFeed(CreateProductFeed $parameters)
  {
    return $this->__soapCall('CreateProductFeed', array($parameters));
  }

  /**
   * Returns the status of product feed creation.
   * 
   * @param CheckFeedPopulationStatus $parameters
   * @access public
   */
  public function CheckFeedPopulationStatus(CheckFeedPopulationStatus $parameters)
  {
    return $this->__soapCall('CheckFeedPopulationStatus', array($parameters));
  }

  /**
   * Gets a transport for a single 'Customer' object given the Email and Store ID.
   * 
   * @param Customer_GetByEmailAndStore $parameters
   * @access public
   */
  public function Customer_GetByEmailAndStore(Customer_GetByEmailAndStore $parameters)
  {
    return $this->__soapCall('Customer_GetByEmailAndStore', array($parameters));
  }

  /**
   * Gets a count of all Customers
   * 
   * @param Customer_GetCount $parameters
   * @access public
   */
  public function Customer_GetCount(Customer_GetCount $parameters)
  {
    return $this->__soapCall('Customer_GetCount', array($parameters));
  }

  /**
   * Gets a transport for a collection of 'Customers' given a custom WHERE clause (without the keyword WHERE), must know the sql field names for this.  Example: Custom1 = 1 AND Hide = 0
   * 
   * @param Customer_GetByCustom $parameters
   * @access public
   */
  public function Customer_GetByCustom(Customer_GetByCustom $parameters)
  {
    return $this->__soapCall('Customer_GetByCustom', array($parameters));
  }

  /**
   * Gets a transport for a collection of top records (where you supply an int for iTop records), 'Customers' given a custom WHERE clause (without the keyword WHERE), must know the sql field names for this.  Example: Custom1 = 1 AND Hide = 0
   * 
   * @param Customer_GetTopByCustom $parameters
   * @access public
   */
  public function Customer_GetTopByCustom(Customer_GetTopByCustom $parameters)
  {
    return $this->__soapCall('Customer_GetTopByCustom', array($parameters));
  }

  /**
   * Fills the CustomFields property on a Customer.
   * 
   * @param Customer_FillCustomFields $parameters
   * @access public
   */
  public function Customer_FillCustomFields(Customer_FillCustomFields $parameters)
  {
    return $this->__soapCall('Customer_FillCustomFields', array($parameters));
  }

  /**
   * Populates the CustomField values for a Customer but does not Validate or Save the Customer object.
   * 
   * @param Customer_ApplyCustomFieldValues $parameters
   * @access public
   */
  public function Customer_ApplyCustomFieldValues(Customer_ApplyCustomFieldValues $parameters)
  {
    return $this->__soapCall('Customer_ApplyCustomFieldValues', array($parameters));
  }

  /**
   * Returns a simplified collection representing the CustomFields assigned to the Customer object.
   * 
   * @param Customer_ParseCustomFieldValues $parameters
   * @access public
   */
  public function Customer_ParseCustomFieldValues(Customer_ParseCustomFieldValues $parameters)
  {
    return $this->__soapCall('Customer_ParseCustomFieldValues', array($parameters));
  }

  /**
   * Sets a custom field value.
   * 
   * @param CustomField_SetValue $parameters
   * @access public
   */
  public function CustomField_SetValue(CustomField_SetValue $parameters)
  {
    return $this->__soapCall('CustomField_SetValue', array($parameters));
  }

  /**
   * Sets the Customer's password.
   * 
   * @param Customer_SetPassword $parameters
   * @access public
   */
  public function Customer_SetPassword(Customer_SetPassword $parameters)
  {
    return $this->__soapCall('Customer_SetPassword', array($parameters));
  }

  /**
   * Adds supplied customer to a drip series
   * 
   * @param Customer_AddToDripSeries $parameters
   * @access public
   */
  public function Customer_AddToDripSeries(Customer_AddToDripSeries $parameters)
  {
    return $this->__soapCall('Customer_AddToDripSeries', array($parameters));
  }

  /**
   * Removes supplied customer from a drip series
   * 
   * @param Customer_RemoveFromDripSeries $parameters
   * @access public
   */
  public function Customer_RemoveFromDripSeries(Customer_RemoveFromDripSeries $parameters)
  {
    return $this->__soapCall('Customer_RemoveFromDripSeries', array($parameters));
  }

  /**
   * Gets a transport for a single 'Customer Type' object given the NAME of that row in the database.
   * 
   * @param CustomerType_GetByName $parameters
   * @access public
   */
  public function CustomerType_GetByName(CustomerType_GetByName $parameters)
  {
    return $this->__soapCall('CustomerType_GetByName', array($parameters));
  }

  /**
   * Gets a transport for a custom WHERE clause (without the keyword WHERE), must know the sql field names for this.  Example: Custom1 = 1 AND Hide = 0
   * 
   * @param CustomField_GetByCustom $parameters
   * @access public
   */
  public function CustomField_GetByCustom(CustomField_GetByCustom $parameters)
  {
    return $this->__soapCall('CustomField_GetByCustom', array($parameters));
  }

  /**
   * Gets a transport for a custom WHERE clause (without the keyword WHERE), must know the sql field names for this.  Example: Custom1 = 1 AND Hide = 0
   * 
   * @param CustomFieldValue_GetByCustom $parameters
   * @access public
   */
  public function CustomFieldValue_GetByCustom(CustomFieldValue_GetByCustom $parameters)
  {
    return $this->__soapCall('CustomFieldValue_GetByCustom', array($parameters));
  }

  /**
   * Gets a collection of all gift certificate transactions based on the OrderID passed in.
   * 
   * @param GiftCertificateTransactionHistory_GetByOrderID $parameters
   * @access public
   */
  public function GiftCertificateTransactionHistory_GetByOrderID(GiftCertificateTransactionHistory_GetByOrderID $parameters)
  {
    return $this->__soapCall('GiftCertificateTransactionHistory_GetByOrderID', array($parameters));
  }

  /**
   * Gets a gift certificates based on the Code passed in.
   * 
   * @param GiftCertificate_GetByCode $parameters
   * @access public
   */
  public function GiftCertificate_GetByCode(GiftCertificate_GetByCode $parameters)
  {
    return $this->__soapCall('GiftCertificate_GetByCode', array($parameters));
  }

  /**
   * Gets a gift certificates based on the Code passed in.
   * 
   * @param GiftCertificate_GetByCodeAndCustomerID $parameters
   * @access public
   */
  public function GiftCertificate_GetByCodeAndCustomerID(GiftCertificate_GetByCodeAndCustomerID $parameters)
  {
    return $this->__soapCall('GiftCertificate_GetByCodeAndCustomerID', array($parameters));
  }

  /**
   * Sends an email to the specified customer(s) and saves it in their email log can also send email templates.
   * 
   * @param Email_SendTemplate $parameters
   * @access public
   */
  public function Email_SendTemplate(Email_SendTemplate $parameters)
  {
    return $this->__soapCall('Email_SendTemplate', array($parameters));
  }

  /**
   * Sends an order based email to the customer associated with the specified order or to the specified email address.
   * 
   * @param Email_SendOrderTemplate $parameters
   * @access public
   */
  public function Email_SendOrderTemplate(Email_SendOrderTemplate $parameters)
  {
    return $this->__soapCall('Email_SendOrderTemplate', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductListItems' object given the primary key of that row in the database.
   * 
   * @param ProductListItems_GetByKey $parameters
   * @access public
   */
  public function ProductListItems_GetByKey(ProductListItems_GetByKey $parameters)
  {
    return $this->__soapCall('ProductListItems_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ProductListItems' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductListItems_Save $parameters
   * @access public
   */
  public function ProductListItems_Save(ProductListItems_Save $parameters)
  {
    return $this->__soapCall('ProductListItems_Save', array($parameters));
  }

  /**
   * Saves the 'ProductListItems' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductListItems_SaveAndGet $parameters
   * @access public
   */
  public function ProductListItems_SaveAndGet(ProductListItems_SaveAndGet $parameters)
  {
    return $this->__soapCall('ProductListItems_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ProductListItems' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ProductListItems_Validate $parameters
   * @access public
   */
  public function ProductListItems_Validate(ProductListItems_Validate $parameters)
  {
    return $this->__soapCall('ProductListItems_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ProductPicture' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ProductPicture_Clone $parameters
   * @access public
   */
  public function ProductPicture_Clone(ProductPicture_Clone $parameters)
  {
    return $this->__soapCall('ProductPicture_Clone', array($parameters));
  }

  /**
   * Deletes the 'ProductPicture' item from the database with the key passed in.
   * 
   * @param ProductPicture_Delete $parameters
   * @access public
   */
  public function ProductPicture_Delete(ProductPicture_Delete $parameters)
  {
    return $this->__soapCall('ProductPicture_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ProductPicture' exists with the key passed in.
   * 
   * @param ProductPicture_Exists $parameters
   * @access public
   */
  public function ProductPicture_Exists(ProductPicture_Exists $parameters)
  {
    return $this->__soapCall('ProductPicture_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductPicture' object given the primary key of that row in the database.
   * 
   * @param ProductPicture_GetByKey $parameters
   * @access public
   */
  public function ProductPicture_GetByKey(ProductPicture_GetByKey $parameters)
  {
    return $this->__soapCall('ProductPicture_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ProductPicture' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductPicture_Save $parameters
   * @access public
   */
  public function ProductPicture_Save(ProductPicture_Save $parameters)
  {
    return $this->__soapCall('ProductPicture_Save', array($parameters));
  }

  /**
   * Saves the 'ProductPicture' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductPicture_SaveAndGet $parameters
   * @access public
   */
  public function ProductPicture_SaveAndGet(ProductPicture_SaveAndGet $parameters)
  {
    return $this->__soapCall('ProductPicture_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ProductPicture' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ProductPicture_Validate $parameters
   * @access public
   */
  public function ProductPicture_Validate(ProductPicture_Validate $parameters)
  {
    return $this->__soapCall('ProductPicture_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ProductPricing' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ProductPricing_Clone $parameters
   * @access public
   */
  public function ProductPricing_Clone(ProductPricing_Clone $parameters)
  {
    return $this->__soapCall('ProductPricing_Clone', array($parameters));
  }

  /**
   * Deletes the 'ProductPricing' item from the database with the key passed in.
   * 
   * @param ProductPricing_Delete $parameters
   * @access public
   */
  public function ProductPricing_Delete(ProductPricing_Delete $parameters)
  {
    return $this->__soapCall('ProductPricing_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ProductPricing' exists with the key passed in.
   * 
   * @param ProductPricing_Exists $parameters
   * @access public
   */
  public function ProductPricing_Exists(ProductPricing_Exists $parameters)
  {
    return $this->__soapCall('ProductPricing_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductPricing' object given the primary key of that row in the database.
   * 
   * @param ProductPricing_GetByKey $parameters
   * @access public
   */
  public function ProductPricing_GetByKey(ProductPricing_GetByKey $parameters)
  {
    return $this->__soapCall('ProductPricing_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ProductPricing' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductPricing_Save $parameters
   * @access public
   */
  public function ProductPricing_Save(ProductPricing_Save $parameters)
  {
    return $this->__soapCall('ProductPricing_Save', array($parameters));
  }

  /**
   * Saves the 'ProductPricing' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductPricing_SaveAndGet $parameters
   * @access public
   */
  public function ProductPricing_SaveAndGet(ProductPricing_SaveAndGet $parameters)
  {
    return $this->__soapCall('ProductPricing_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ProductPricing' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ProductPricing_Validate $parameters
   * @access public
   */
  public function ProductPricing_Validate(ProductPricing_Validate $parameters)
  {
    return $this->__soapCall('ProductPricing_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ProductStatus' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ProductStatus_Clone $parameters
   * @access public
   */
  public function ProductStatus_Clone(ProductStatus_Clone $parameters)
  {
    return $this->__soapCall('ProductStatus_Clone', array($parameters));
  }

  /**
   * Deletes the 'ProductStatus' item from the database with the key passed in.
   * 
   * @param ProductStatus_Delete $parameters
   * @access public
   */
  public function ProductStatus_Delete(ProductStatus_Delete $parameters)
  {
    return $this->__soapCall('ProductStatus_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ProductStatus' exists with the key passed in.
   * 
   * @param ProductStatus_Exists $parameters
   * @access public
   */
  public function ProductStatus_Exists(ProductStatus_Exists $parameters)
  {
    return $this->__soapCall('ProductStatus_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductStatus' object given the primary key of that row in the database.
   * 
   * @param ProductStatus_GetByKey $parameters
   * @access public
   */
  public function ProductStatus_GetByKey(ProductStatus_GetByKey $parameters)
  {
    return $this->__soapCall('ProductStatus_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ProductStatus' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductStatus_Save $parameters
   * @access public
   */
  public function ProductStatus_Save(ProductStatus_Save $parameters)
  {
    return $this->__soapCall('ProductStatus_Save', array($parameters));
  }

  /**
   * Saves the 'ProductStatus' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductStatus_SaveAndGet $parameters
   * @access public
   */
  public function ProductStatus_SaveAndGet(ProductStatus_SaveAndGet $parameters)
  {
    return $this->__soapCall('ProductStatus_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ProductStatus' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ProductStatus_Validate $parameters
   * @access public
   */
  public function ProductStatus_Validate(ProductStatus_Validate $parameters)
  {
    return $this->__soapCall('ProductStatus_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ProductVariant' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ProductVariant_Clone $parameters
   * @access public
   */
  public function ProductVariant_Clone(ProductVariant_Clone $parameters)
  {
    return $this->__soapCall('ProductVariant_Clone', array($parameters));
  }

  /**
   * Deletes the 'ProductVariant' item from the database with the key passed in.
   * 
   * @param ProductVariant_Delete $parameters
   * @access public
   */
  public function ProductVariant_Delete(ProductVariant_Delete $parameters)
  {
    return $this->__soapCall('ProductVariant_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ProductVariant' exists with the key passed in.
   * 
   * @param ProductVariant_Exists $parameters
   * @access public
   */
  public function ProductVariant_Exists(ProductVariant_Exists $parameters)
  {
    return $this->__soapCall('ProductVariant_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductVariant' object given the primary key of that row in the database.
   * 
   * @param ProductVariant_GetByKey $parameters
   * @access public
   */
  public function ProductVariant_GetByKey(ProductVariant_GetByKey $parameters)
  {
    return $this->__soapCall('ProductVariant_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ProductVariant' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductVariant_Save $parameters
   * @access public
   */
  public function ProductVariant_Save(ProductVariant_Save $parameters)
  {
    return $this->__soapCall('ProductVariant_Save', array($parameters));
  }

  /**
   * Saves the 'ProductVariant' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductVariant_SaveAndGet $parameters
   * @access public
   */
  public function ProductVariant_SaveAndGet(ProductVariant_SaveAndGet $parameters)
  {
    return $this->__soapCall('ProductVariant_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ProductVariant' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ProductVariant_Validate $parameters
   * @access public
   */
  public function ProductVariant_Validate(ProductVariant_Validate $parameters)
  {
    return $this->__soapCall('ProductVariant_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ProductVariantGroup' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ProductVariantGroup_Clone $parameters
   * @access public
   */
  public function ProductVariantGroup_Clone(ProductVariantGroup_Clone $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_Clone', array($parameters));
  }

  /**
   * Deletes the 'ProductVariantGroup' item from the database with the key passed in.
   * 
   * @param ProductVariantGroup_Delete $parameters
   * @access public
   */
  public function ProductVariantGroup_Delete(ProductVariantGroup_Delete $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ProductVariantGroup' exists with the key passed in.
   * 
   * @param ProductVariantGroup_Exists $parameters
   * @access public
   */
  public function ProductVariantGroup_Exists(ProductVariantGroup_Exists $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductVariantGroup' object given the primary key of that row in the database.
   * 
   * @param ProductVariantGroup_GetByKey $parameters
   * @access public
   */
  public function ProductVariantGroup_GetByKey(ProductVariantGroup_GetByKey $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ProductVariantGroup' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductVariantGroup_Save $parameters
   * @access public
   */
  public function ProductVariantGroup_Save(ProductVariantGroup_Save $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_Save', array($parameters));
  }

  /**
   * Saves the 'ProductVariantGroup' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductVariantGroup_SaveAndGet $parameters
   * @access public
   */
  public function ProductVariantGroup_SaveAndGet(ProductVariantGroup_SaveAndGet $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ProductVariantGroup' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ProductVariantGroup_Validate $parameters
   * @access public
   */
  public function ProductVariantGroup_Validate(ProductVariantGroup_Validate $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_Validate', array($parameters));
  }

  /**
   * Fills the ProductVariant OneToMany Collection on a ProductVariantGroup transport.  Pass in the 'ProductVariantGroup' transport object to put the ProductVariant OneToMany collection on.
   * 
   * @param ProductVariantGroup_FillProductVariantCollection $parameters
   * @access public
   */
  public function ProductVariantGroup_FillProductVariantCollection(ProductVariantGroup_FillProductVariantCollection $parameters)
  {
    return $this->__soapCall('ProductVariantGroup_FillProductVariantCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'Regions' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Regions_Clone $parameters
   * @access public
   */
  public function Regions_Clone(Regions_Clone $parameters)
  {
    return $this->__soapCall('Regions_Clone', array($parameters));
  }

  /**
   * Deletes the 'Regions' item from the database with the key passed in.
   * 
   * @param Regions_Delete $parameters
   * @access public
   */
  public function Regions_Delete(Regions_Delete $parameters)
  {
    return $this->__soapCall('Regions_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Regions' exists with the key passed in.
   * 
   * @param Regions_Exists $parameters
   * @access public
   */
  public function Regions_Exists(Regions_Exists $parameters)
  {
    return $this->__soapCall('Regions_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Regions' object given the primary key of that row in the database.
   * 
   * @param Regions_GetByKey $parameters
   * @access public
   */
  public function Regions_GetByKey(Regions_GetByKey $parameters)
  {
    return $this->__soapCall('Regions_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Regions' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Regions_Save $parameters
   * @access public
   */
  public function Regions_Save(Regions_Save $parameters)
  {
    return $this->__soapCall('Regions_Save', array($parameters));
  }

  /**
   * Saves the 'Regions' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Regions_SaveAndGet $parameters
   * @access public
   */
  public function Regions_SaveAndGet(Regions_SaveAndGet $parameters)
  {
    return $this->__soapCall('Regions_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Regions' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Regions_Validate $parameters
   * @access public
   */
  public function Regions_Validate(Regions_Validate $parameters)
  {
    return $this->__soapCall('Regions_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'RelatedProducts' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param RelatedProducts_Clone $parameters
   * @access public
   */
  public function RelatedProducts_Clone(RelatedProducts_Clone $parameters)
  {
    return $this->__soapCall('RelatedProducts_Clone', array($parameters));
  }

  /**
   * Deletes the 'RelatedProducts' item from the database with the key passed in.
   * 
   * @param RelatedProducts_Delete $parameters
   * @access public
   */
  public function RelatedProducts_Delete(RelatedProducts_Delete $parameters)
  {
    return $this->__soapCall('RelatedProducts_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'RelatedProducts' exists with the key passed in.
   * 
   * @param RelatedProducts_Exists $parameters
   * @access public
   */
  public function RelatedProducts_Exists(RelatedProducts_Exists $parameters)
  {
    return $this->__soapCall('RelatedProducts_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'RelatedProducts' object given the primary key of that row in the database.
   * 
   * @param RelatedProducts_GetByKey $parameters
   * @access public
   */
  public function RelatedProducts_GetByKey(RelatedProducts_GetByKey $parameters)
  {
    return $this->__soapCall('RelatedProducts_GetByKey', array($parameters));
  }

  /**
   * Saves the 'RelatedProducts' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param RelatedProducts_Save $parameters
   * @access public
   */
  public function RelatedProducts_Save(RelatedProducts_Save $parameters)
  {
    return $this->__soapCall('RelatedProducts_Save', array($parameters));
  }

  /**
   * Saves the 'RelatedProducts' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param RelatedProducts_SaveAndGet $parameters
   * @access public
   */
  public function RelatedProducts_SaveAndGet(RelatedProducts_SaveAndGet $parameters)
  {
    return $this->__soapCall('RelatedProducts_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'RelatedProducts' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param RelatedProducts_Validate $parameters
   * @access public
   */
  public function RelatedProducts_Validate(RelatedProducts_Validate $parameters)
  {
    return $this->__soapCall('RelatedProducts_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Session' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Session_Clone $parameters
   * @access public
   */
  public function Session_Clone(Session_Clone $parameters)
  {
    return $this->__soapCall('Session_Clone', array($parameters));
  }

  /**
   * Deletes the 'Session' item from the database with the key passed in.
   * 
   * @param Session_Delete $parameters
   * @access public
   */
  public function Session_Delete(Session_Delete $parameters)
  {
    return $this->__soapCall('Session_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Session' exists with the key passed in.
   * 
   * @param Session_Exists $parameters
   * @access public
   */
  public function Session_Exists(Session_Exists $parameters)
  {
    return $this->__soapCall('Session_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Session' object given the primary key of that row in the database.
   * 
   * @param Session_GetByKey $parameters
   * @access public
   */
  public function Session_GetByKey(Session_GetByKey $parameters)
  {
    return $this->__soapCall('Session_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Session' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Session_Save $parameters
   * @access public
   */
  public function Session_Save(Session_Save $parameters)
  {
    return $this->__soapCall('Session_Save', array($parameters));
  }

  /**
   * Saves the 'Session' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Session_SaveAndGet $parameters
   * @access public
   */
  public function Session_SaveAndGet(Session_SaveAndGet $parameters)
  {
    return $this->__soapCall('Session_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Session' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Session_Validate $parameters
   * @access public
   */
  public function Session_Validate(Session_Validate $parameters)
  {
    return $this->__soapCall('Session_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ShippingMethod' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ShippingMethod_Clone $parameters
   * @access public
   */
  public function ShippingMethod_Clone(ShippingMethod_Clone $parameters)
  {
    return $this->__soapCall('ShippingMethod_Clone', array($parameters));
  }

  /**
   * Deletes the 'ShippingMethod' item from the database with the key passed in.
   * 
   * @param ShippingMethod_Delete $parameters
   * @access public
   */
  public function ShippingMethod_Delete(ShippingMethod_Delete $parameters)
  {
    return $this->__soapCall('ShippingMethod_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ShippingMethod' exists with the key passed in.
   * 
   * @param ShippingMethod_Exists $parameters
   * @access public
   */
  public function ShippingMethod_Exists(ShippingMethod_Exists $parameters)
  {
    return $this->__soapCall('ShippingMethod_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ShippingMethod' object given the primary key of that row in the database.
   * 
   * @param ShippingMethod_GetByKey $parameters
   * @access public
   */
  public function ShippingMethod_GetByKey(ShippingMethod_GetByKey $parameters)
  {
    return $this->__soapCall('ShippingMethod_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ShippingMethod' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingMethod_Save $parameters
   * @access public
   */
  public function ShippingMethod_Save(ShippingMethod_Save $parameters)
  {
    return $this->__soapCall('ShippingMethod_Save', array($parameters));
  }

  /**
   * Saves the 'ShippingMethod' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingMethod_SaveAndGet $parameters
   * @access public
   */
  public function ShippingMethod_SaveAndGet(ShippingMethod_SaveAndGet $parameters)
  {
    return $this->__soapCall('ShippingMethod_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ShippingMethod' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ShippingMethod_Validate $parameters
   * @access public
   */
  public function ShippingMethod_Validate(ShippingMethod_Validate $parameters)
  {
    return $this->__soapCall('ShippingMethod_Validate', array($parameters));
  }

  /**
   * Fills the ShippingRule OneToMany Collection on a ShippingMethod transport.  Pass in the 'ShippingMethod' transport object to put the ShippingRule OneToMany collection on.
   * 
   * @param ShippingMethod_FillShippingRuleCollection $parameters
   * @access public
   */
  public function ShippingMethod_FillShippingRuleCollection(ShippingMethod_FillShippingRuleCollection $parameters)
  {
    return $this->__soapCall('ShippingMethod_FillShippingRuleCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'ShippingProvider' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ShippingProvider_Clone $parameters
   * @access public
   */
  public function ShippingProvider_Clone(ShippingProvider_Clone $parameters)
  {
    return $this->__soapCall('ShippingProvider_Clone', array($parameters));
  }

  /**
   * Deletes the 'ShippingProvider' item from the database with the key passed in.
   * 
   * @param ShippingProvider_Delete $parameters
   * @access public
   */
  public function ShippingProvider_Delete(ShippingProvider_Delete $parameters)
  {
    return $this->__soapCall('ShippingProvider_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ShippingProvider' exists with the key passed in.
   * 
   * @param ShippingProvider_Exists $parameters
   * @access public
   */
  public function ShippingProvider_Exists(ShippingProvider_Exists $parameters)
  {
    return $this->__soapCall('ShippingProvider_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ShippingProvider' object given the primary key of that row in the database.
   * 
   * @param ShippingProvider_GetByKey $parameters
   * @access public
   */
  public function ShippingProvider_GetByKey(ShippingProvider_GetByKey $parameters)
  {
    return $this->__soapCall('ShippingProvider_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ShippingProvider' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingProvider_Save $parameters
   * @access public
   */
  public function ShippingProvider_Save(ShippingProvider_Save $parameters)
  {
    return $this->__soapCall('ShippingProvider_Save', array($parameters));
  }

  /**
   * Saves the 'ShippingProvider' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingProvider_SaveAndGet $parameters
   * @access public
   */
  public function ShippingProvider_SaveAndGet(ShippingProvider_SaveAndGet $parameters)
  {
    return $this->__soapCall('ShippingProvider_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ShippingProvider' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ShippingProvider_Validate $parameters
   * @access public
   */
  public function ShippingProvider_Validate(ShippingProvider_Validate $parameters)
  {
    return $this->__soapCall('ShippingProvider_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ShippingProviderService' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ShippingProviderService_Clone $parameters
   * @access public
   */
  public function ShippingProviderService_Clone(ShippingProviderService_Clone $parameters)
  {
    return $this->__soapCall('ShippingProviderService_Clone', array($parameters));
  }

  /**
   * Deletes the 'ShippingProviderService' item from the database with the key passed in.
   * 
   * @param ShippingProviderService_Delete $parameters
   * @access public
   */
  public function ShippingProviderService_Delete(ShippingProviderService_Delete $parameters)
  {
    return $this->__soapCall('ShippingProviderService_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ShippingProviderService' exists with the key passed in.
   * 
   * @param ShippingProviderService_Exists $parameters
   * @access public
   */
  public function ShippingProviderService_Exists(ShippingProviderService_Exists $parameters)
  {
    return $this->__soapCall('ShippingProviderService_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ShippingProviderService' object given the primary key of that row in the database.
   * 
   * @param ShippingProviderService_GetByKey $parameters
   * @access public
   */
  public function ShippingProviderService_GetByKey(ShippingProviderService_GetByKey $parameters)
  {
    return $this->__soapCall('ShippingProviderService_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ShippingProviderService' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingProviderService_Save $parameters
   * @access public
   */
  public function ShippingProviderService_Save(ShippingProviderService_Save $parameters)
  {
    return $this->__soapCall('ShippingProviderService_Save', array($parameters));
  }

  /**
   * Saves the 'ShippingProviderService' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingProviderService_SaveAndGet $parameters
   * @access public
   */
  public function ShippingProviderService_SaveAndGet(ShippingProviderService_SaveAndGet $parameters)
  {
    return $this->__soapCall('ShippingProviderService_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ShippingProviderService' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ShippingProviderService_Validate $parameters
   * @access public
   */
  public function ShippingProviderService_Validate(ShippingProviderService_Validate $parameters)
  {
    return $this->__soapCall('ShippingProviderService_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ShippingRateAdjustments' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ShippingRateAdjustments_Clone $parameters
   * @access public
   */
  public function ShippingRateAdjustments_Clone(ShippingRateAdjustments_Clone $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustments_Clone', array($parameters));
  }

  /**
   * Deletes the 'ShippingRateAdjustments' item from the database with the key passed in.
   * 
   * @param ShippingRateAdjustments_Delete $parameters
   * @access public
   */
  public function ShippingRateAdjustments_Delete(ShippingRateAdjustments_Delete $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustments_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ShippingRateAdjustments' exists with the key passed in.
   * 
   * @param ShippingRateAdjustments_Exists $parameters
   * @access public
   */
  public function ShippingRateAdjustments_Exists(ShippingRateAdjustments_Exists $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustments_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ShippingRateAdjustments' object given the primary key of that row in the database.
   * 
   * @param ShippingRateAdjustments_GetByKey $parameters
   * @access public
   */
  public function ShippingRateAdjustments_GetByKey(ShippingRateAdjustments_GetByKey $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustments_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ShippingRateAdjustments' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingRateAdjustments_Save $parameters
   * @access public
   */
  public function ShippingRateAdjustments_Save(ShippingRateAdjustments_Save $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustments_Save', array($parameters));
  }

  /**
   * Saves the 'ShippingRateAdjustments' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingRateAdjustments_SaveAndGet $parameters
   * @access public
   */
  public function ShippingRateAdjustments_SaveAndGet(ShippingRateAdjustments_SaveAndGet $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustments_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ShippingRateAdjustments' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ShippingRateAdjustments_Validate $parameters
   * @access public
   */
  public function ShippingRateAdjustments_Validate(ShippingRateAdjustments_Validate $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustments_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ShippingRateAdjustmentType' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ShippingRateAdjustmentType_Clone $parameters
   * @access public
   */
  public function ShippingRateAdjustmentType_Clone(ShippingRateAdjustmentType_Clone $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustmentType_Clone', array($parameters));
  }

  /**
   * Deletes the 'ShippingRateAdjustmentType' item from the database with the key passed in.
   * 
   * @param ShippingRateAdjustmentType_Delete $parameters
   * @access public
   */
  public function ShippingRateAdjustmentType_Delete(ShippingRateAdjustmentType_Delete $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustmentType_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ShippingRateAdjustmentType' exists with the key passed in.
   * 
   * @param ShippingRateAdjustmentType_Exists $parameters
   * @access public
   */
  public function ShippingRateAdjustmentType_Exists(ShippingRateAdjustmentType_Exists $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustmentType_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ShippingRateAdjustmentType' object given the primary key of that row in the database.
   * 
   * @param ShippingRateAdjustmentType_GetByKey $parameters
   * @access public
   */
  public function ShippingRateAdjustmentType_GetByKey(ShippingRateAdjustmentType_GetByKey $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustmentType_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ShippingRateAdjustmentType' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingRateAdjustmentType_Save $parameters
   * @access public
   */
  public function ShippingRateAdjustmentType_Save(ShippingRateAdjustmentType_Save $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustmentType_Save', array($parameters));
  }

  /**
   * Saves the 'ShippingRateAdjustmentType' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingRateAdjustmentType_SaveAndGet $parameters
   * @access public
   */
  public function ShippingRateAdjustmentType_SaveAndGet(ShippingRateAdjustmentType_SaveAndGet $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustmentType_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ShippingRateAdjustmentType' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ShippingRateAdjustmentType_Validate $parameters
   * @access public
   */
  public function ShippingRateAdjustmentType_Validate(ShippingRateAdjustmentType_Validate $parameters)
  {
    return $this->__soapCall('ShippingRateAdjustmentType_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'ShippingRule' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ShippingRule_Clone $parameters
   * @access public
   */
  public function ShippingRule_Clone(ShippingRule_Clone $parameters)
  {
    return $this->__soapCall('ShippingRule_Clone', array($parameters));
  }

  /**
   * Deletes the 'ShippingRule' item from the database with the key passed in.
   * 
   * @param ShippingRule_Delete $parameters
   * @access public
   */
  public function ShippingRule_Delete(ShippingRule_Delete $parameters)
  {
    return $this->__soapCall('ShippingRule_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ShippingRule' exists with the key passed in.
   * 
   * @param ShippingRule_Exists $parameters
   * @access public
   */
  public function ShippingRule_Exists(ShippingRule_Exists $parameters)
  {
    return $this->__soapCall('ShippingRule_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ShippingRule' object given the primary key of that row in the database.
   * 
   * @param ShippingRule_GetByKey $parameters
   * @access public
   */
  public function ShippingRule_GetByKey(ShippingRule_GetByKey $parameters)
  {
    return $this->__soapCall('ShippingRule_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ShippingRule' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingRule_Save $parameters
   * @access public
   */
  public function ShippingRule_Save(ShippingRule_Save $parameters)
  {
    return $this->__soapCall('ShippingRule_Save', array($parameters));
  }

  /**
   * Saves the 'ShippingRule' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ShippingRule_SaveAndGet $parameters
   * @access public
   */
  public function ShippingRule_SaveAndGet(ShippingRule_SaveAndGet $parameters)
  {
    return $this->__soapCall('ShippingRule_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ShippingRule' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ShippingRule_Validate $parameters
   * @access public
   */
  public function ShippingRule_Validate(ShippingRule_Validate $parameters)
  {
    return $this->__soapCall('ShippingRule_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'State' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param State_Clone $parameters
   * @access public
   */
  public function State_Clone(State_Clone $parameters)
  {
    return $this->__soapCall('State_Clone', array($parameters));
  }

  /**
   * Deletes the 'State' item from the database with the key passed in.
   * 
   * @param State_Delete $parameters
   * @access public
   */
  public function State_Delete(State_Delete $parameters)
  {
    return $this->__soapCall('State_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'State' exists with the key passed in.
   * 
   * @param State_Exists $parameters
   * @access public
   */
  public function State_Exists(State_Exists $parameters)
  {
    return $this->__soapCall('State_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'State' object given the primary key of that row in the database.
   * 
   * @param State_GetByKey $parameters
   * @access public
   */
  public function State_GetByKey(State_GetByKey $parameters)
  {
    return $this->__soapCall('State_GetByKey', array($parameters));
  }

  /**
   * Saves the 'State' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param State_Save $parameters
   * @access public
   */
  public function State_Save(State_Save $parameters)
  {
    return $this->__soapCall('State_Save', array($parameters));
  }

  /**
   * Saves the 'State' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param State_SaveAndGet $parameters
   * @access public
   */
  public function State_SaveAndGet(State_SaveAndGet $parameters)
  {
    return $this->__soapCall('State_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'State' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param State_Validate $parameters
   * @access public
   */
  public function State_Validate(State_Validate $parameters)
  {
    return $this->__soapCall('State_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Store' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Store_Clone $parameters
   * @access public
   */
  public function Store_Clone(Store_Clone $parameters)
  {
    return $this->__soapCall('Store_Clone', array($parameters));
  }

  /**
   * Deletes the 'Store' item from the database with the key passed in.
   * 
   * @param Store_Delete $parameters
   * @access public
   */
  public function Store_Delete(Store_Delete $parameters)
  {
    return $this->__soapCall('Store_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Store' exists with the key passed in.
   * 
   * @param Store_Exists $parameters
   * @access public
   */
  public function Store_Exists(Store_Exists $parameters)
  {
    return $this->__soapCall('Store_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Store' object given the primary key of that row in the database.
   * 
   * @param Store_GetByKey $parameters
   * @access public
   */
  public function Store_GetByKey(Store_GetByKey $parameters)
  {
    return $this->__soapCall('Store_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Store' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Store_Save $parameters
   * @access public
   */
  public function Store_Save(Store_Save $parameters)
  {
    return $this->__soapCall('Store_Save', array($parameters));
  }

  /**
   * Saves the 'Store' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Store_SaveAndGet $parameters
   * @access public
   */
  public function Store_SaveAndGet(Store_SaveAndGet $parameters)
  {
    return $this->__soapCall('Store_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Store' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Store_Validate $parameters
   * @access public
   */
  public function Store_Validate(Store_Validate $parameters)
  {
    return $this->__soapCall('Store_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'StoreCardType' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param StoreCardType_Clone $parameters
   * @access public
   */
  public function StoreCardType_Clone(StoreCardType_Clone $parameters)
  {
    return $this->__soapCall('StoreCardType_Clone', array($parameters));
  }

  /**
   * Deletes the 'StoreCardType' item from the database with the key passed in.
   * 
   * @param StoreCardType_Delete $parameters
   * @access public
   */
  public function StoreCardType_Delete(StoreCardType_Delete $parameters)
  {
    return $this->__soapCall('StoreCardType_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'StoreCardType' exists with the key passed in.
   * 
   * @param StoreCardType_Exists $parameters
   * @access public
   */
  public function StoreCardType_Exists(StoreCardType_Exists $parameters)
  {
    return $this->__soapCall('StoreCardType_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'StoreCardType' object given the primary key of that row in the database.
   * 
   * @param StoreCardType_GetByKey $parameters
   * @access public
   */
  public function StoreCardType_GetByKey(StoreCardType_GetByKey $parameters)
  {
    return $this->__soapCall('StoreCardType_GetByKey', array($parameters));
  }

  /**
   * Saves the 'StoreCardType' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param StoreCardType_Save $parameters
   * @access public
   */
  public function StoreCardType_Save(StoreCardType_Save $parameters)
  {
    return $this->__soapCall('StoreCardType_Save', array($parameters));
  }

  /**
   * Saves the 'StoreCardType' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param StoreCardType_SaveAndGet $parameters
   * @access public
   */
  public function StoreCardType_SaveAndGet(StoreCardType_SaveAndGet $parameters)
  {
    return $this->__soapCall('StoreCardType_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'StoreCardType' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param StoreCardType_Validate $parameters
   * @access public
   */
  public function StoreCardType_Validate(StoreCardType_Validate $parameters)
  {
    return $this->__soapCall('StoreCardType_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'StoreShippingOptions' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param StoreShippingOptions_Clone $parameters
   * @access public
   */
  public function StoreShippingOptions_Clone(StoreShippingOptions_Clone $parameters)
  {
    return $this->__soapCall('StoreShippingOptions_Clone', array($parameters));
  }

  /**
   * Deletes the 'StoreShippingOptions' item from the database with the key passed in.
   * 
   * @param StoreShippingOptions_Delete $parameters
   * @access public
   */
  public function StoreShippingOptions_Delete(StoreShippingOptions_Delete $parameters)
  {
    return $this->__soapCall('StoreShippingOptions_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'StoreShippingOptions' exists with the key passed in.
   * 
   * @param StoreShippingOptions_Exists $parameters
   * @access public
   */
  public function StoreShippingOptions_Exists(StoreShippingOptions_Exists $parameters)
  {
    return $this->__soapCall('StoreShippingOptions_Exists', array($parameters));
  }

  /**
   * Saves the 'GiftCertificateType' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param GiftCertificateType_SaveAndGet $parameters
   * @access public
   */
  public function GiftCertificateType_SaveAndGet(GiftCertificateType_SaveAndGet $parameters)
  {
    return $this->__soapCall('GiftCertificateType_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'GiftCertificateType' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param GiftCertificateType_Validate $parameters
   * @access public
   */
  public function GiftCertificateType_Validate(GiftCertificateType_Validate $parameters)
  {
    return $this->__soapCall('GiftCertificateType_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Manufacturer' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Manufacturer_Clone $parameters
   * @access public
   */
  public function Manufacturer_Clone(Manufacturer_Clone $parameters)
  {
    return $this->__soapCall('Manufacturer_Clone', array($parameters));
  }

  /**
   * Deletes the 'Manufacturer' item from the database with the key passed in.
   * 
   * @param Manufacturer_Delete $parameters
   * @access public
   */
  public function Manufacturer_Delete(Manufacturer_Delete $parameters)
  {
    return $this->__soapCall('Manufacturer_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Manufacturer' exists with the key passed in.
   * 
   * @param Manufacturer_Exists $parameters
   * @access public
   */
  public function Manufacturer_Exists(Manufacturer_Exists $parameters)
  {
    return $this->__soapCall('Manufacturer_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Manufacturer' object given the primary key of that row in the database.
   * 
   * @param Manufacturer_GetByKey $parameters
   * @access public
   */
  public function Manufacturer_GetByKey(Manufacturer_GetByKey $parameters)
  {
    return $this->__soapCall('Manufacturer_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Manufacturer' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Manufacturer_Save $parameters
   * @access public
   */
  public function Manufacturer_Save(Manufacturer_Save $parameters)
  {
    return $this->__soapCall('Manufacturer_Save', array($parameters));
  }

  /**
   * Saves the 'Manufacturer' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Manufacturer_SaveAndGet $parameters
   * @access public
   */
  public function Manufacturer_SaveAndGet(Manufacturer_SaveAndGet $parameters)
  {
    return $this->__soapCall('Manufacturer_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Manufacturer' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Manufacturer_Validate $parameters
   * @access public
   */
  public function Manufacturer_Validate(Manufacturer_Validate $parameters)
  {
    return $this->__soapCall('Manufacturer_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Order' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Order_Clone $parameters
   * @access public
   */
  public function Order_Clone(Order_Clone $parameters)
  {
    return $this->__soapCall('Order_Clone', array($parameters));
  }

  /**
   * Deletes the 'Order' item from the database with the key passed in.
   * 
   * @param Order_Delete $parameters
   * @access public
   */
  public function Order_Delete(Order_Delete $parameters)
  {
    return $this->__soapCall('Order_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Order' exists with the key passed in.
   * 
   * @param Order_Exists $parameters
   * @access public
   */
  public function Order_Exists(Order_Exists $parameters)
  {
    return $this->__soapCall('Order_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Order' object given the primary key of that row in the database.
   * 
   * @param Order_GetByKey $parameters
   * @access public
   */
  public function Order_GetByKey(Order_GetByKey $parameters)
  {
    return $this->__soapCall('Order_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Order' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Order_Save $parameters
   * @access public
   */
  public function Order_Save(Order_Save $parameters)
  {
    return $this->__soapCall('Order_Save', array($parameters));
  }

  /**
   * Saves the 'Order' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Order_SaveAndGet $parameters
   * @access public
   */
  public function Order_SaveAndGet(Order_SaveAndGet $parameters)
  {
    return $this->__soapCall('Order_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Order' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Order_Validate $parameters
   * @access public
   */
  public function Order_Validate(Order_Validate $parameters)
  {
    return $this->__soapCall('Order_Validate', array($parameters));
  }

  /**
   * Fills the OrderItem OneToMany Collection on a Order transport.  Pass in the 'Order' transport object to put the OrderItem OneToMany collection on.
   * 
   * @param Order_FillOrderItemCollection $parameters
   * @access public
   */
  public function Order_FillOrderItemCollection(Order_FillOrderItemCollection $parameters)
  {
    return $this->__soapCall('Order_FillOrderItemCollection', array($parameters));
  }

  /**
   * Fills the OrderPayment OneToMany Collection on a Order transport.  Pass in the 'Order' transport object to put the OrderPayment OneToMany collection on.
   * 
   * @param Order_FillOrderPaymentCollection $parameters
   * @access public
   */
  public function Order_FillOrderPaymentCollection(Order_FillOrderPaymentCollection $parameters)
  {
    return $this->__soapCall('Order_FillOrderPaymentCollection', array($parameters));
  }

  /**
   * Fills the OrderExtendedShipping OneToMany Collection on a Order transport.  Pass in the 'Order' transport object to put the OrderExtendedShipping OneToMany collection on.
   * 
   * @param Order_FillOrderExtendedShippingCollection $parameters
   * @access public
   */
  public function Order_FillOrderExtendedShippingCollection(Order_FillOrderExtendedShippingCollection $parameters)
  {
    return $this->__soapCall('Order_FillOrderExtendedShippingCollection', array($parameters));
  }

  /**
   * Fills the OrderShipping OneToMany Collection on a Order transport.  Pass in the 'Order' transport object to put the OrderShipping OneToMany collection on.
   * 
   * @param Order_FillOrderShippingCollection $parameters
   * @access public
   */
  public function Order_FillOrderShippingCollection(Order_FillOrderShippingCollection $parameters)
  {
    return $this->__soapCall('Order_FillOrderShippingCollection', array($parameters));
  }

  /**
   * Fills the GiftCertificateTransactionHistory OneToMany Collection on a Order transport.  Pass in the 'Order' transport object to put the GiftCertificateTransactionHistory OneToMany collection on.
   * 
   * @param Order_FillGiftCertificateTransactionHistoryCollection $parameters
   * @access public
   */
  public function Order_FillGiftCertificateTransactionHistoryCollection(Order_FillGiftCertificateTransactionHistoryCollection $parameters)
  {
    return $this->__soapCall('Order_FillGiftCertificateTransactionHistoryCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'OrderExtendedShipping' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param OrderExtendedShipping_Clone $parameters
   * @access public
   */
  public function OrderExtendedShipping_Clone(OrderExtendedShipping_Clone $parameters)
  {
    return $this->__soapCall('OrderExtendedShipping_Clone', array($parameters));
  }

  /**
   * Deletes the 'OrderExtendedShipping' item from the database with the key passed in.
   * 
   * @param OrderExtendedShipping_Delete $parameters
   * @access public
   */
  public function OrderExtendedShipping_Delete(OrderExtendedShipping_Delete $parameters)
  {
    return $this->__soapCall('OrderExtendedShipping_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'OrderExtendedShipping' exists with the key passed in.
   * 
   * @param OrderExtendedShipping_Exists $parameters
   * @access public
   */
  public function OrderExtendedShipping_Exists(OrderExtendedShipping_Exists $parameters)
  {
    return $this->__soapCall('OrderExtendedShipping_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'OrderExtendedShipping' object given the primary key of that row in the database.
   * 
   * @param OrderExtendedShipping_GetByKey $parameters
   * @access public
   */
  public function OrderExtendedShipping_GetByKey(OrderExtendedShipping_GetByKey $parameters)
  {
    return $this->__soapCall('OrderExtendedShipping_GetByKey', array($parameters));
  }

  /**
   * Saves the 'OrderExtendedShipping' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderExtendedShipping_Save $parameters
   * @access public
   */
  public function OrderExtendedShipping_Save(OrderExtendedShipping_Save $parameters)
  {
    return $this->__soapCall('OrderExtendedShipping_Save', array($parameters));
  }

  /**
   * Saves the 'OrderExtendedShipping' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderExtendedShipping_SaveAndGet $parameters
   * @access public
   */
  public function OrderExtendedShipping_SaveAndGet(OrderExtendedShipping_SaveAndGet $parameters)
  {
    return $this->__soapCall('OrderExtendedShipping_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'OrderExtendedShipping' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param OrderExtendedShipping_Validate $parameters
   * @access public
   */
  public function OrderExtendedShipping_Validate(OrderExtendedShipping_Validate $parameters)
  {
    return $this->__soapCall('OrderExtendedShipping_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'OrderAddress' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param OrderAddress_Clone $parameters
   * @access public
   */
  public function OrderAddress_Clone(OrderAddress_Clone $parameters)
  {
    return $this->__soapCall('OrderAddress_Clone', array($parameters));
  }

  /**
   * Deletes the 'OrderAddress' item from the database with the key passed in.
   * 
   * @param OrderAddress_Delete $parameters
   * @access public
   */
  public function OrderAddress_Delete(OrderAddress_Delete $parameters)
  {
    return $this->__soapCall('OrderAddress_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'OrderAddress' exists with the key passed in.
   * 
   * @param OrderAddress_Exists $parameters
   * @access public
   */
  public function OrderAddress_Exists(OrderAddress_Exists $parameters)
  {
    return $this->__soapCall('OrderAddress_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'OrderAddress' object given the primary key of that row in the database.
   * 
   * @param OrderAddress_GetByKey $parameters
   * @access public
   */
  public function OrderAddress_GetByKey(OrderAddress_GetByKey $parameters)
  {
    return $this->__soapCall('OrderAddress_GetByKey', array($parameters));
  }

  /**
   * Saves the 'OrderAddress' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderAddress_Save $parameters
   * @access public
   */
  public function OrderAddress_Save(OrderAddress_Save $parameters)
  {
    return $this->__soapCall('OrderAddress_Save', array($parameters));
  }

  /**
   * Saves the 'OrderAddress' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderAddress_SaveAndGet $parameters
   * @access public
   */
  public function OrderAddress_SaveAndGet(OrderAddress_SaveAndGet $parameters)
  {
    return $this->__soapCall('OrderAddress_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'OrderAddress' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param OrderAddress_Validate $parameters
   * @access public
   */
  public function OrderAddress_Validate(OrderAddress_Validate $parameters)
  {
    return $this->__soapCall('OrderAddress_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'OrderItem' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param OrderItem_Clone $parameters
   * @access public
   */
  public function OrderItem_Clone(OrderItem_Clone $parameters)
  {
    return $this->__soapCall('OrderItem_Clone', array($parameters));
  }

  /**
   * Deletes the 'OrderItem' item from the database with the key passed in.
   * 
   * @param OrderItem_Delete $parameters
   * @access public
   */
  public function OrderItem_Delete(OrderItem_Delete $parameters)
  {
    return $this->__soapCall('OrderItem_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'OrderItem' exists with the key passed in.
   * 
   * @param OrderItem_Exists $parameters
   * @access public
   */
  public function OrderItem_Exists(OrderItem_Exists $parameters)
  {
    return $this->__soapCall('OrderItem_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'OrderItem' object given the primary key of that row in the database.
   * 
   * @param OrderItem_GetByKey $parameters
   * @access public
   */
  public function OrderItem_GetByKey(OrderItem_GetByKey $parameters)
  {
    return $this->__soapCall('OrderItem_GetByKey', array($parameters));
  }

  /**
   * Saves the 'OrderItem' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderItem_Save $parameters
   * @access public
   */
  public function OrderItem_Save(OrderItem_Save $parameters)
  {
    return $this->__soapCall('OrderItem_Save', array($parameters));
  }

  /**
   * Saves the 'OrderItem' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderItem_SaveAndGet $parameters
   * @access public
   */
  public function OrderItem_SaveAndGet(OrderItem_SaveAndGet $parameters)
  {
    return $this->__soapCall('OrderItem_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'OrderItem' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param OrderItem_Validate $parameters
   * @access public
   */
  public function OrderItem_Validate(OrderItem_Validate $parameters)
  {
    return $this->__soapCall('OrderItem_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'OrderPayment' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param OrderPayment_Clone $parameters
   * @access public
   */
  public function OrderPayment_Clone(OrderPayment_Clone $parameters)
  {
    return $this->__soapCall('OrderPayment_Clone', array($parameters));
  }

  /**
   * Deletes the 'OrderPayment' item from the database with the key passed in.
   * 
   * @param OrderPayment_Delete $parameters
   * @access public
   */
  public function OrderPayment_Delete(OrderPayment_Delete $parameters)
  {
    return $this->__soapCall('OrderPayment_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'OrderPayment' exists with the key passed in.
   * 
   * @param OrderPayment_Exists $parameters
   * @access public
   */
  public function OrderPayment_Exists(OrderPayment_Exists $parameters)
  {
    return $this->__soapCall('OrderPayment_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'OrderPayment' object given the primary key of that row in the database.
   * 
   * @param OrderPayment_GetByKey $parameters
   * @access public
   */
  public function OrderPayment_GetByKey(OrderPayment_GetByKey $parameters)
  {
    return $this->__soapCall('OrderPayment_GetByKey', array($parameters));
  }

  /**
   * Saves the 'OrderPayment' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderPayment_Save $parameters
   * @access public
   */
  public function OrderPayment_Save(OrderPayment_Save $parameters)
  {
    return $this->__soapCall('OrderPayment_Save', array($parameters));
  }

  /**
   * Saves the 'OrderPayment' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderPayment_SaveAndGet $parameters
   * @access public
   */
  public function OrderPayment_SaveAndGet(OrderPayment_SaveAndGet $parameters)
  {
    return $this->__soapCall('OrderPayment_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'OrderPayment' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param OrderPayment_Validate $parameters
   * @access public
   */
  public function OrderPayment_Validate(OrderPayment_Validate $parameters)
  {
    return $this->__soapCall('OrderPayment_Validate', array($parameters));
  }

  /**
   * Fills the OrderPaymentField OneToMany Collection on a OrderPayment transport.  Pass in the 'OrderPayment' transport object to put the OrderPaymentField OneToMany collection on.
   * 
   * @param OrderPayment_FillOrderPaymentFieldCollection $parameters
   * @access public
   */
  public function OrderPayment_FillOrderPaymentFieldCollection(OrderPayment_FillOrderPaymentFieldCollection $parameters)
  {
    return $this->__soapCall('OrderPayment_FillOrderPaymentFieldCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'OrderShipping' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param OrderShipping_Clone $parameters
   * @access public
   */
  public function OrderShipping_Clone(OrderShipping_Clone $parameters)
  {
    return $this->__soapCall('OrderShipping_Clone', array($parameters));
  }

  /**
   * Deletes the 'OrderShipping' item from the database with the key passed in.
   * 
   * @param OrderShipping_Delete $parameters
   * @access public
   */
  public function OrderShipping_Delete(OrderShipping_Delete $parameters)
  {
    return $this->__soapCall('OrderShipping_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'OrderShipping' exists with the key passed in.
   * 
   * @param OrderShipping_Exists $parameters
   * @access public
   */
  public function OrderShipping_Exists(OrderShipping_Exists $parameters)
  {
    return $this->__soapCall('OrderShipping_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'OrderShipping' object given the primary key of that row in the database.
   * 
   * @param OrderShipping_GetByKey $parameters
   * @access public
   */
  public function OrderShipping_GetByKey(OrderShipping_GetByKey $parameters)
  {
    return $this->__soapCall('OrderShipping_GetByKey', array($parameters));
  }

  /**
   * Saves the 'OrderShipping' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderShipping_Save $parameters
   * @access public
   */
  public function OrderShipping_Save(OrderShipping_Save $parameters)
  {
    return $this->__soapCall('OrderShipping_Save', array($parameters));
  }

  /**
   * Saves the 'OrderShipping' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderShipping_SaveAndGet $parameters
   * @access public
   */
  public function OrderShipping_SaveAndGet(OrderShipping_SaveAndGet $parameters)
  {
    return $this->__soapCall('OrderShipping_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'OrderShipping' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param OrderShipping_Validate $parameters
   * @access public
   */
  public function OrderShipping_Validate(OrderShipping_Validate $parameters)
  {
    return $this->__soapCall('OrderShipping_Validate', array($parameters));
  }

  /**
   * Fills the OrderItem AssociativeEntity Collection on a OrderShipping transport.  Pass in the 'OrderShipping' transport object to put the OrderItem AssociativeEntity collection on.
   * 
   * @param OrderShipping_FillOrderItemCollection $parameters
   * @access public
   */
  public function OrderShipping_FillOrderItemCollection(OrderShipping_FillOrderItemCollection $parameters)
  {
    return $this->__soapCall('OrderShipping_FillOrderItemCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'OrderShippingOrderItems' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param OrderShippingOrderItems_Clone $parameters
   * @access public
   */
  public function OrderShippingOrderItems_Clone(OrderShippingOrderItems_Clone $parameters)
  {
    return $this->__soapCall('OrderShippingOrderItems_Clone', array($parameters));
  }

  /**
   * Deletes the 'OrderShippingOrderItems' item from the database with the key passed in.
   * 
   * @param OrderShippingOrderItems_Delete $parameters
   * @access public
   */
  public function OrderShippingOrderItems_Delete(OrderShippingOrderItems_Delete $parameters)
  {
    return $this->__soapCall('OrderShippingOrderItems_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'OrderShippingOrderItems' exists with the key passed in.
   * 
   * @param OrderShippingOrderItems_Exists $parameters
   * @access public
   */
  public function OrderShippingOrderItems_Exists(OrderShippingOrderItems_Exists $parameters)
  {
    return $this->__soapCall('OrderShippingOrderItems_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'OrderShippingOrderItems' object given the primary key of that row in the database.
   * 
   * @param OrderShippingOrderItems_GetByKey $parameters
   * @access public
   */
  public function OrderShippingOrderItems_GetByKey(OrderShippingOrderItems_GetByKey $parameters)
  {
    return $this->__soapCall('OrderShippingOrderItems_GetByKey', array($parameters));
  }

  /**
   * Saves the 'OrderShippingOrderItems' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderShippingOrderItems_Save $parameters
   * @access public
   */
  public function OrderShippingOrderItems_Save(OrderShippingOrderItems_Save $parameters)
  {
    return $this->__soapCall('OrderShippingOrderItems_Save', array($parameters));
  }

  /**
   * Saves the 'OrderShippingOrderItems' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderShippingOrderItems_SaveAndGet $parameters
   * @access public
   */
  public function OrderShippingOrderItems_SaveAndGet(OrderShippingOrderItems_SaveAndGet $parameters)
  {
    return $this->__soapCall('OrderShippingOrderItems_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'OrderShippingOrderItems' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param OrderShippingOrderItems_Validate $parameters
   * @access public
   */
  public function OrderShippingOrderItems_Validate(OrderShippingOrderItems_Validate $parameters)
  {
    return $this->__soapCall('OrderShippingOrderItems_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'OrderStatus' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param OrderStatus_Clone $parameters
   * @access public
   */
  public function OrderStatus_Clone(OrderStatus_Clone $parameters)
  {
    return $this->__soapCall('OrderStatus_Clone', array($parameters));
  }

  /**
   * Deletes the 'OrderStatus' item from the database with the key passed in.
   * 
   * @param OrderStatus_Delete $parameters
   * @access public
   */
  public function OrderStatus_Delete(OrderStatus_Delete $parameters)
  {
    return $this->__soapCall('OrderStatus_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'OrderStatus' exists with the key passed in.
   * 
   * @param OrderStatus_Exists $parameters
   * @access public
   */
  public function OrderStatus_Exists(OrderStatus_Exists $parameters)
  {
    return $this->__soapCall('OrderStatus_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'OrderStatus' object given the primary key of that row in the database.
   * 
   * @param OrderStatus_GetByKey $parameters
   * @access public
   */
  public function OrderStatus_GetByKey(OrderStatus_GetByKey $parameters)
  {
    return $this->__soapCall('OrderStatus_GetByKey', array($parameters));
  }

  /**
   * Saves the 'OrderStatus' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderStatus_Save $parameters
   * @access public
   */
  public function OrderStatus_Save(OrderStatus_Save $parameters)
  {
    return $this->__soapCall('OrderStatus_Save', array($parameters));
  }

  /**
   * Saves the 'OrderStatus' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param OrderStatus_SaveAndGet $parameters
   * @access public
   */
  public function OrderStatus_SaveAndGet(OrderStatus_SaveAndGet $parameters)
  {
    return $this->__soapCall('OrderStatus_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'OrderStatus' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param OrderStatus_Validate $parameters
   * @access public
   */
  public function OrderStatus_Validate(OrderStatus_Validate $parameters)
  {
    return $this->__soapCall('OrderStatus_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'PageRedirect' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param PageRedirect_Clone $parameters
   * @access public
   */
  public function PageRedirect_Clone(PageRedirect_Clone $parameters)
  {
    return $this->__soapCall('PageRedirect_Clone', array($parameters));
  }

  /**
   * Deletes the 'PageRedirect' item from the database with the key passed in.
   * 
   * @param PageRedirect_Delete $parameters
   * @access public
   */
  public function PageRedirect_Delete(PageRedirect_Delete $parameters)
  {
    return $this->__soapCall('PageRedirect_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'PageRedirect' exists with the key passed in.
   * 
   * @param PageRedirect_Exists $parameters
   * @access public
   */
  public function PageRedirect_Exists(PageRedirect_Exists $parameters)
  {
    return $this->__soapCall('PageRedirect_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'PageRedirect' object given the primary key of that row in the database.
   * 
   * @param PageRedirect_GetByKey $parameters
   * @access public
   */
  public function PageRedirect_GetByKey(PageRedirect_GetByKey $parameters)
  {
    return $this->__soapCall('PageRedirect_GetByKey', array($parameters));
  }

  /**
   * Saves the 'PageRedirect' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param PageRedirect_Save $parameters
   * @access public
   */
  public function PageRedirect_Save(PageRedirect_Save $parameters)
  {
    return $this->__soapCall('PageRedirect_Save', array($parameters));
  }

  /**
   * Saves the 'PageRedirect' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param PageRedirect_SaveAndGet $parameters
   * @access public
   */
  public function PageRedirect_SaveAndGet(PageRedirect_SaveAndGet $parameters)
  {
    return $this->__soapCall('PageRedirect_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'PageRedirect' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param PageRedirect_Validate $parameters
   * @access public
   */
  public function PageRedirect_Validate(PageRedirect_Validate $parameters)
  {
    return $this->__soapCall('PageRedirect_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'PaymentMethod' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param PaymentMethod_Clone $parameters
   * @access public
   */
  public function PaymentMethod_Clone(PaymentMethod_Clone $parameters)
  {
    return $this->__soapCall('PaymentMethod_Clone', array($parameters));
  }

  /**
   * Deletes the 'PaymentMethod' item from the database with the key passed in.
   * 
   * @param PaymentMethod_Delete $parameters
   * @access public
   */
  public function PaymentMethod_Delete(PaymentMethod_Delete $parameters)
  {
    return $this->__soapCall('PaymentMethod_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'PaymentMethod' exists with the key passed in.
   * 
   * @param PaymentMethod_Exists $parameters
   * @access public
   */
  public function PaymentMethod_Exists(PaymentMethod_Exists $parameters)
  {
    return $this->__soapCall('PaymentMethod_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'PaymentMethod' object given the primary key of that row in the database.
   * 
   * @param PaymentMethod_GetByKey $parameters
   * @access public
   */
  public function PaymentMethod_GetByKey(PaymentMethod_GetByKey $parameters)
  {
    return $this->__soapCall('PaymentMethod_GetByKey', array($parameters));
  }

  /**
   * Saves the 'PaymentMethod' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param PaymentMethod_Save $parameters
   * @access public
   */
  public function PaymentMethod_Save(PaymentMethod_Save $parameters)
  {
    return $this->__soapCall('PaymentMethod_Save', array($parameters));
  }

  /**
   * Saves the 'PaymentMethod' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param PaymentMethod_SaveAndGet $parameters
   * @access public
   */
  public function PaymentMethod_SaveAndGet(PaymentMethod_SaveAndGet $parameters)
  {
    return $this->__soapCall('PaymentMethod_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'PaymentMethod' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param PaymentMethod_Validate $parameters
   * @access public
   */
  public function PaymentMethod_Validate(PaymentMethod_Validate $parameters)
  {
    return $this->__soapCall('PaymentMethod_Validate', array($parameters));
  }

  /**
   * Fills the PaymentMethodField OneToMany Collection on a PaymentMethod transport.  Pass in the 'PaymentMethod' transport object to put the PaymentMethodField OneToMany collection on.
   * 
   * @param PaymentMethod_FillPaymentMethodFieldCollection $parameters
   * @access public
   */
  public function PaymentMethod_FillPaymentMethodFieldCollection(PaymentMethod_FillPaymentMethodFieldCollection $parameters)
  {
    return $this->__soapCall('PaymentMethod_FillPaymentMethodFieldCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'PriceCalculation' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param PriceCalculation_Clone $parameters
   * @access public
   */
  public function PriceCalculation_Clone(PriceCalculation_Clone $parameters)
  {
    return $this->__soapCall('PriceCalculation_Clone', array($parameters));
  }

  /**
   * Deletes the 'PriceCalculation' item from the database with the key passed in.
   * 
   * @param PriceCalculation_Delete $parameters
   * @access public
   */
  public function PriceCalculation_Delete(PriceCalculation_Delete $parameters)
  {
    return $this->__soapCall('PriceCalculation_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'PriceCalculation' exists with the key passed in.
   * 
   * @param PriceCalculation_Exists $parameters
   * @access public
   */
  public function PriceCalculation_Exists(PriceCalculation_Exists $parameters)
  {
    return $this->__soapCall('PriceCalculation_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'PriceCalculation' object given the primary key of that row in the database.
   * 
   * @param PriceCalculation_GetByKey $parameters
   * @access public
   */
  public function PriceCalculation_GetByKey(PriceCalculation_GetByKey $parameters)
  {
    return $this->__soapCall('PriceCalculation_GetByKey', array($parameters));
  }

  /**
   * Saves the 'PriceCalculation' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param PriceCalculation_Save $parameters
   * @access public
   */
  public function PriceCalculation_Save(PriceCalculation_Save $parameters)
  {
    return $this->__soapCall('PriceCalculation_Save', array($parameters));
  }

  /**
   * Saves the 'PriceCalculation' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param PriceCalculation_SaveAndGet $parameters
   * @access public
   */
  public function PriceCalculation_SaveAndGet(PriceCalculation_SaveAndGet $parameters)
  {
    return $this->__soapCall('PriceCalculation_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'PriceCalculation' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param PriceCalculation_Validate $parameters
   * @access public
   */
  public function PriceCalculation_Validate(PriceCalculation_Validate $parameters)
  {
    return $this->__soapCall('PriceCalculation_Validate', array($parameters));
  }

  /**
   * Fills the PriceRule OneToMany Collection on a PriceCalculation transport.  Pass in the 'PriceCalculation' transport object to put the PriceRule OneToMany collection on.
   * 
   * @param PriceCalculation_FillPriceRuleCollection $parameters
   * @access public
   */
  public function PriceCalculation_FillPriceRuleCollection(PriceCalculation_FillPriceRuleCollection $parameters)
  {
    return $this->__soapCall('PriceCalculation_FillPriceRuleCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'Product' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Product_Clone $parameters
   * @access public
   */
  public function Product_Clone(Product_Clone $parameters)
  {
    return $this->__soapCall('Product_Clone', array($parameters));
  }

  /**
   * Deletes the 'Product' item from the database with the key passed in.
   * 
   * @param Product_Delete $parameters
   * @access public
   */
  public function Product_Delete(Product_Delete $parameters)
  {
    return $this->__soapCall('Product_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Product' exists with the key passed in.
   * 
   * @param Product_Exists $parameters
   * @access public
   */
  public function Product_Exists(Product_Exists $parameters)
  {
    return $this->__soapCall('Product_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Product' object given the primary key of that row in the database.
   * 
   * @param Product_GetByKey $parameters
   * @access public
   */
  public function Product_GetByKey(Product_GetByKey $parameters)
  {
    return $this->__soapCall('Product_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Product' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Product_Save $parameters
   * @access public
   */
  public function Product_Save(Product_Save $parameters)
  {
    return $this->__soapCall('Product_Save', array($parameters));
  }

  /**
   * Saves the 'Product' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Product_SaveAndGet $parameters
   * @access public
   */
  public function Product_SaveAndGet(Product_SaveAndGet $parameters)
  {
    return $this->__soapCall('Product_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Product' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Product_Validate $parameters
   * @access public
   */
  public function Product_Validate(Product_Validate $parameters)
  {
    return $this->__soapCall('Product_Validate', array($parameters));
  }

  /**
   * Fills the ProductVariant OneToMany Collection on a Product transport.  Pass in the 'Product' transport object to put the ProductVariant OneToMany collection on.
   * 
   * @param Product_FillProductVariantCollection $parameters
   * @access public
   */
  public function Product_FillProductVariantCollection(Product_FillProductVariantCollection $parameters)
  {
    return $this->__soapCall('Product_FillProductVariantCollection', array($parameters));
  }

  /**
   * Fills the Personalize OneToMany Collection on a Product transport.  Pass in the 'Product' transport object to put the Personalize OneToMany collection on.
   * 
   * @param Product_FillPersonalizeCollection $parameters
   * @access public
   */
  public function Product_FillPersonalizeCollection(Product_FillPersonalizeCollection $parameters)
  {
    return $this->__soapCall('Product_FillPersonalizeCollection', array($parameters));
  }

  /**
   * Fills the Product AssociativeEntity Collection on a Product transport.  Pass in the 'Product' transport object to put the Product AssociativeEntity collection on.
   * 
   * @param Product_FillProductCollection $parameters
   * @access public
   */
  public function Product_FillProductCollection(Product_FillProductCollection $parameters)
  {
    return $this->__soapCall('Product_FillProductCollection', array($parameters));
  }

  /**
   * Fills the Category AssociativeEntity Collection on a Product transport.  Pass in the 'Product' transport object to put the Category AssociativeEntity collection on.
   * 
   * @param Product_FillCategoryCollection $parameters
   * @access public
   */
  public function Product_FillCategoryCollection(Product_FillCategoryCollection $parameters)
  {
    return $this->__soapCall('Product_FillCategoryCollection', array($parameters));
  }

  /**
   * Fills the InactiveInStore OneToMany Collection on a Product transport.  Pass in the 'Product' transport object to put the InactiveInStore OneToMany collection on.
   * 
   * @param Product_FillInactiveInStoreCollection $parameters
   * @access public
   */
  public function Product_FillInactiveInStoreCollection(Product_FillInactiveInStoreCollection $parameters)
  {
    return $this->__soapCall('Product_FillInactiveInStoreCollection', array($parameters));
  }

  /**
   * Fills the ProductPricing OneToMany Collection on a Product transport.  Pass in the 'Product' transport object to put the ProductPricing OneToMany collection on.
   * 
   * @param Product_FillProductPricingCollection $parameters
   * @access public
   */
  public function Product_FillProductPricingCollection(Product_FillProductPricingCollection $parameters)
  {
    return $this->__soapCall('Product_FillProductPricingCollection', array($parameters));
  }

  /**
   * Fills the Attribute AssociativeEntity Collection on a Product transport.  Pass in the 'Product' transport object to put the Attribute AssociativeEntity collection on.
   * 
   * @param Product_FillAttributeCollection $parameters
   * @access public
   */
  public function Product_FillAttributeCollection(Product_FillAttributeCollection $parameters)
  {
    return $this->__soapCall('Product_FillAttributeCollection', array($parameters));
  }

  /**
   * Fills the VariantInventory OneToMany Collection on a Product transport.  Pass in the 'Product' transport object to put the VariantInventory OneToMany collection on.
   * 
   * @param Product_FillVariantInventoryCollection $parameters
   * @access public
   */
  public function Product_FillVariantInventoryCollection(Product_FillVariantInventoryCollection $parameters)
  {
    return $this->__soapCall('Product_FillVariantInventoryCollection', array($parameters));
  }

  /**
   * Fills the ProductPicture OneToMany Collection on a Product transport.  Pass in the 'Product' transport object to put the ProductPicture OneToMany collection on.
   * 
   * @param Product_FillProductPictureCollection $parameters
   * @access public
   */
  public function Product_FillProductPictureCollection(Product_FillProductPictureCollection $parameters)
  {
    return $this->__soapCall('Product_FillProductPictureCollection', array($parameters));
  }

  /**
   * Fills the Product AssociativeEntity Collection on a Product transport.  Pass in the 'Product' transport object to put the Product AssociativeEntity collection on.
   * 
   * @param Product_FillProductChildCollection $parameters
   * @access public
   */
  public function Product_FillProductChildCollection(Product_FillProductChildCollection $parameters)
  {
    return $this->__soapCall('Product_FillProductChildCollection', array($parameters));
  }

  /**
   * Fills the ShippingRateAdjustments OneToMany Collection on a Product transport.  Pass in the 'Product' transport object to put the ShippingRateAdjustments OneToMany collection on.
   * 
   * @param Product_FillShippingRateAdjustmentsCollection $parameters
   * @access public
   */
  public function Product_FillShippingRateAdjustmentsCollection(Product_FillShippingRateAdjustmentsCollection $parameters)
  {
    return $this->__soapCall('Product_FillShippingRateAdjustmentsCollection', array($parameters));
  }

  /**
   * Fills the VariantPackage OneToMany Collection on a Product transport.  Pass in the 'Product' transport object to put the VariantPackage OneToMany collection on.
   * 
   * @param Product_FillVariantPackageCollection $parameters
   * @access public
   */
  public function Product_FillVariantPackageCollection(Product_FillVariantPackageCollection $parameters)
  {
    return $this->__soapCall('Product_FillVariantPackageCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'ProductList' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ProductList_Clone $parameters
   * @access public
   */
  public function ProductList_Clone(ProductList_Clone $parameters)
  {
    return $this->__soapCall('ProductList_Clone', array($parameters));
  }

  /**
   * Deletes the 'ProductList' item from the database with the key passed in.
   * 
   * @param ProductList_Delete $parameters
   * @access public
   */
  public function ProductList_Delete(ProductList_Delete $parameters)
  {
    return $this->__soapCall('ProductList_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ProductList' exists with the key passed in.
   * 
   * @param ProductList_Exists $parameters
   * @access public
   */
  public function ProductList_Exists(ProductList_Exists $parameters)
  {
    return $this->__soapCall('ProductList_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ProductList' object given the primary key of that row in the database.
   * 
   * @param ProductList_GetByKey $parameters
   * @access public
   */
  public function ProductList_GetByKey(ProductList_GetByKey $parameters)
  {
    return $this->__soapCall('ProductList_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ProductList' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductList_Save $parameters
   * @access public
   */
  public function ProductList_Save(ProductList_Save $parameters)
  {
    return $this->__soapCall('ProductList_Save', array($parameters));
  }

  /**
   * Saves the 'ProductList' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ProductList_SaveAndGet $parameters
   * @access public
   */
  public function ProductList_SaveAndGet(ProductList_SaveAndGet $parameters)
  {
    return $this->__soapCall('ProductList_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ProductList' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ProductList_Validate $parameters
   * @access public
   */
  public function ProductList_Validate(ProductList_Validate $parameters)
  {
    return $this->__soapCall('ProductList_Validate', array($parameters));
  }

  /**
   * Fills the ProductListItems OneToMany Collection on a ProductList transport.  Pass in the 'ProductList' transport object to put the ProductListItems OneToMany collection on.
   * 
   * @param ProductList_FillProductListItemsCollection $parameters
   * @access public
   */
  public function ProductList_FillProductListItemsCollection(ProductList_FillProductListItemsCollection $parameters)
  {
    return $this->__soapCall('ProductList_FillProductListItemsCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'ProductListItems' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ProductListItems_Clone $parameters
   * @access public
   */
  public function ProductListItems_Clone(ProductListItems_Clone $parameters)
  {
    return $this->__soapCall('ProductListItems_Clone', array($parameters));
  }

  /**
   * Deletes the 'ProductListItems' item from the database with the key passed in.
   * 
   * @param ProductListItems_Delete $parameters
   * @access public
   */
  public function ProductListItems_Delete(ProductListItems_Delete $parameters)
  {
    return $this->__soapCall('ProductListItems_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ProductListItems' exists with the key passed in.
   * 
   * @param ProductListItems_Exists $parameters
   * @access public
   */
  public function ProductListItems_Exists(ProductListItems_Exists $parameters)
  {
    return $this->__soapCall('ProductListItems_Exists', array($parameters));
  }

  /**
   * Deletes the 'Customer' item from the database with the key passed in.
   * 
   * @param Customer_Delete $parameters
   * @access public
   */
  public function Customer_Delete(Customer_Delete $parameters)
  {
    return $this->__soapCall('Customer_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Customer' exists with the key passed in.
   * 
   * @param Customer_Exists $parameters
   * @access public
   */
  public function Customer_Exists(Customer_Exists $parameters)
  {
    return $this->__soapCall('Customer_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Customer' object given the primary key of that row in the database.
   * 
   * @param Customer_GetByKey $parameters
   * @access public
   */
  public function Customer_GetByKey(Customer_GetByKey $parameters)
  {
    return $this->__soapCall('Customer_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Customer' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Customer_Save $parameters
   * @access public
   */
  public function Customer_Save(Customer_Save $parameters)
  {
    return $this->__soapCall('Customer_Save', array($parameters));
  }

  /**
   * Saves the 'Customer' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Customer_SaveAndGet $parameters
   * @access public
   */
  public function Customer_SaveAndGet(Customer_SaveAndGet $parameters)
  {
    return $this->__soapCall('Customer_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Customer' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Customer_Validate $parameters
   * @access public
   */
  public function Customer_Validate(Customer_Validate $parameters)
  {
    return $this->__soapCall('Customer_Validate', array($parameters));
  }

  /**
   * Fills the CustomerPaymentMethod OneToMany Collection on a Customer transport.  Pass in the 'Customer' transport object to put the CustomerPaymentMethod OneToMany collection on.
   * 
   * @param Customer_FillCustomerPaymentMethodCollection $parameters
   * @access public
   */
  public function Customer_FillCustomerPaymentMethodCollection(Customer_FillCustomerPaymentMethodCollection $parameters)
  {
    return $this->__soapCall('Customer_FillCustomerPaymentMethodCollection', array($parameters));
  }

  /**
   * Fills the Address OneToMany Collection on a Customer transport.  Pass in the 'Customer' transport object to put the Address OneToMany collection on.
   * 
   * @param Customer_FillAddressCollection $parameters
   * @access public
   */
  public function Customer_FillAddressCollection(Customer_FillAddressCollection $parameters)
  {
    return $this->__soapCall('Customer_FillAddressCollection', array($parameters));
  }

  /**
   * Fills the EmailLog OneToMany Collection on a Customer transport.  Pass in the 'Customer' transport object to put the EmailLog OneToMany collection on.
   * 
   * @param Customer_FillEmailLogCollection $parameters
   * @access public
   */
  public function Customer_FillEmailLogCollection(Customer_FillEmailLogCollection $parameters)
  {
    return $this->__soapCall('Customer_FillEmailLogCollection', array($parameters));
  }

  /**
   * Fills the DripSeriesWhoToContact OneToMany Collection on a Customer transport.  Pass in the 'Customer' transport object to put the DripSeriesWhoToContact OneToMany collection on.
   * 
   * @param Customer_FillDripSeriesWhoToContactCollection $parameters
   * @access public
   */
  public function Customer_FillDripSeriesWhoToContactCollection(Customer_FillDripSeriesWhoToContactCollection $parameters)
  {
    return $this->__soapCall('Customer_FillDripSeriesWhoToContactCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'CustomerPaymentField' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CustomerPaymentField_Clone $parameters
   * @access public
   */
  public function CustomerPaymentField_Clone(CustomerPaymentField_Clone $parameters)
  {
    return $this->__soapCall('CustomerPaymentField_Clone', array($parameters));
  }

  /**
   * Deletes the 'CustomerPaymentField' item from the database with the key passed in.
   * 
   * @param CustomerPaymentField_Delete $parameters
   * @access public
   */
  public function CustomerPaymentField_Delete(CustomerPaymentField_Delete $parameters)
  {
    return $this->__soapCall('CustomerPaymentField_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CustomerPaymentField' exists with the key passed in.
   * 
   * @param CustomerPaymentField_Exists $parameters
   * @access public
   */
  public function CustomerPaymentField_Exists(CustomerPaymentField_Exists $parameters)
  {
    return $this->__soapCall('CustomerPaymentField_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CustomerPaymentField' object given the primary key of that row in the database.
   * 
   * @param CustomerPaymentField_GetByKey $parameters
   * @access public
   */
  public function CustomerPaymentField_GetByKey(CustomerPaymentField_GetByKey $parameters)
  {
    return $this->__soapCall('CustomerPaymentField_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CustomerPaymentField' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomerPaymentField_Save $parameters
   * @access public
   */
  public function CustomerPaymentField_Save(CustomerPaymentField_Save $parameters)
  {
    return $this->__soapCall('CustomerPaymentField_Save', array($parameters));
  }

  /**
   * Saves the 'CustomerPaymentField' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomerPaymentField_SaveAndGet $parameters
   * @access public
   */
  public function CustomerPaymentField_SaveAndGet(CustomerPaymentField_SaveAndGet $parameters)
  {
    return $this->__soapCall('CustomerPaymentField_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CustomerPaymentField' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CustomerPaymentField_Validate $parameters
   * @access public
   */
  public function CustomerPaymentField_Validate(CustomerPaymentField_Validate $parameters)
  {
    return $this->__soapCall('CustomerPaymentField_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'CustomerPaymentMethod' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CustomerPaymentMethod_Clone $parameters
   * @access public
   */
  public function CustomerPaymentMethod_Clone(CustomerPaymentMethod_Clone $parameters)
  {
    return $this->__soapCall('CustomerPaymentMethod_Clone', array($parameters));
  }

  /**
   * Deletes the 'CustomerPaymentMethod' item from the database with the key passed in.
   * 
   * @param CustomerPaymentMethod_Delete $parameters
   * @access public
   */
  public function CustomerPaymentMethod_Delete(CustomerPaymentMethod_Delete $parameters)
  {
    return $this->__soapCall('CustomerPaymentMethod_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CustomerPaymentMethod' exists with the key passed in.
   * 
   * @param CustomerPaymentMethod_Exists $parameters
   * @access public
   */
  public function CustomerPaymentMethod_Exists(CustomerPaymentMethod_Exists $parameters)
  {
    return $this->__soapCall('CustomerPaymentMethod_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CustomerPaymentMethod' object given the primary key of that row in the database.
   * 
   * @param CustomerPaymentMethod_GetByKey $parameters
   * @access public
   */
  public function CustomerPaymentMethod_GetByKey(CustomerPaymentMethod_GetByKey $parameters)
  {
    return $this->__soapCall('CustomerPaymentMethod_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CustomerPaymentMethod' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomerPaymentMethod_Save $parameters
   * @access public
   */
  public function CustomerPaymentMethod_Save(CustomerPaymentMethod_Save $parameters)
  {
    return $this->__soapCall('CustomerPaymentMethod_Save', array($parameters));
  }

  /**
   * Saves the 'CustomerPaymentMethod' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomerPaymentMethod_SaveAndGet $parameters
   * @access public
   */
  public function CustomerPaymentMethod_SaveAndGet(CustomerPaymentMethod_SaveAndGet $parameters)
  {
    return $this->__soapCall('CustomerPaymentMethod_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CustomerPaymentMethod' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CustomerPaymentMethod_Validate $parameters
   * @access public
   */
  public function CustomerPaymentMethod_Validate(CustomerPaymentMethod_Validate $parameters)
  {
    return $this->__soapCall('CustomerPaymentMethod_Validate', array($parameters));
  }

  /**
   * Fills the CustomerPaymentField OneToMany Collection on a CustomerPaymentMethod transport.  Pass in the 'CustomerPaymentMethod' transport object to put the CustomerPaymentField OneToMany collection on.
   * 
   * @param CustomerPaymentMethod_FillCustomerPaymentFieldCollection $parameters
   * @access public
   */
  public function CustomerPaymentMethod_FillCustomerPaymentFieldCollection(CustomerPaymentMethod_FillCustomerPaymentFieldCollection $parameters)
  {
    return $this->__soapCall('CustomerPaymentMethod_FillCustomerPaymentFieldCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'CustomerType' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CustomerType_Clone $parameters
   * @access public
   */
  public function CustomerType_Clone(CustomerType_Clone $parameters)
  {
    return $this->__soapCall('CustomerType_Clone', array($parameters));
  }

  /**
   * Deletes the 'CustomerType' item from the database with the key passed in.
   * 
   * @param CustomerType_Delete $parameters
   * @access public
   */
  public function CustomerType_Delete(CustomerType_Delete $parameters)
  {
    return $this->__soapCall('CustomerType_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CustomerType' exists with the key passed in.
   * 
   * @param CustomerType_Exists $parameters
   * @access public
   */
  public function CustomerType_Exists(CustomerType_Exists $parameters)
  {
    return $this->__soapCall('CustomerType_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CustomerType' object given the primary key of that row in the database.
   * 
   * @param CustomerType_GetByKey $parameters
   * @access public
   */
  public function CustomerType_GetByKey(CustomerType_GetByKey $parameters)
  {
    return $this->__soapCall('CustomerType_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CustomerType' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomerType_Save $parameters
   * @access public
   */
  public function CustomerType_Save(CustomerType_Save $parameters)
  {
    return $this->__soapCall('CustomerType_Save', array($parameters));
  }

  /**
   * Saves the 'CustomerType' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomerType_SaveAndGet $parameters
   * @access public
   */
  public function CustomerType_SaveAndGet(CustomerType_SaveAndGet $parameters)
  {
    return $this->__soapCall('CustomerType_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CustomerType' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CustomerType_Validate $parameters
   * @access public
   */
  public function CustomerType_Validate(CustomerType_Validate $parameters)
  {
    return $this->__soapCall('CustomerType_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'CustomField' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CustomField_Clone $parameters
   * @access public
   */
  public function CustomField_Clone(CustomField_Clone $parameters)
  {
    return $this->__soapCall('CustomField_Clone', array($parameters));
  }

  /**
   * Deletes the 'CustomField' item from the database with the key passed in.
   * 
   * @param CustomField_Delete $parameters
   * @access public
   */
  public function CustomField_Delete(CustomField_Delete $parameters)
  {
    return $this->__soapCall('CustomField_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CustomField' exists with the key passed in.
   * 
   * @param CustomField_Exists $parameters
   * @access public
   */
  public function CustomField_Exists(CustomField_Exists $parameters)
  {
    return $this->__soapCall('CustomField_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CustomField' object given the primary key of that row in the database.
   * 
   * @param CustomField_GetByKey $parameters
   * @access public
   */
  public function CustomField_GetByKey(CustomField_GetByKey $parameters)
  {
    return $this->__soapCall('CustomField_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CustomField' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomField_Save $parameters
   * @access public
   */
  public function CustomField_Save(CustomField_Save $parameters)
  {
    return $this->__soapCall('CustomField_Save', array($parameters));
  }

  /**
   * Saves the 'CustomField' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomField_SaveAndGet $parameters
   * @access public
   */
  public function CustomField_SaveAndGet(CustomField_SaveAndGet $parameters)
  {
    return $this->__soapCall('CustomField_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CustomField' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CustomField_Validate $parameters
   * @access public
   */
  public function CustomField_Validate(CustomField_Validate $parameters)
  {
    return $this->__soapCall('CustomField_Validate', array($parameters));
  }

  /**
   * Fills the CustomFieldValue OneToMany Collection on a CustomField transport.  Pass in the 'CustomField' transport object to put the CustomFieldValue OneToMany collection on.
   * 
   * @param CustomField_FillCustomFieldValueCollection $parameters
   * @access public
   */
  public function CustomField_FillCustomFieldValueCollection(CustomField_FillCustomFieldValueCollection $parameters)
  {
    return $this->__soapCall('CustomField_FillCustomFieldValueCollection', array($parameters));
  }

  /**
   * Fills the CustomFieldListItem OneToMany Collection on a CustomField transport.  Pass in the 'CustomField' transport object to put the CustomFieldListItem OneToMany collection on.
   * 
   * @param CustomField_FillCustomFieldListItemCollection $parameters
   * @access public
   */
  public function CustomField_FillCustomFieldListItemCollection(CustomField_FillCustomFieldListItemCollection $parameters)
  {
    return $this->__soapCall('CustomField_FillCustomFieldListItemCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'CustomFieldValue' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CustomFieldValue_Clone $parameters
   * @access public
   */
  public function CustomFieldValue_Clone(CustomFieldValue_Clone $parameters)
  {
    return $this->__soapCall('CustomFieldValue_Clone', array($parameters));
  }

  /**
   * Deletes the 'CustomFieldValue' item from the database with the key passed in.
   * 
   * @param CustomFieldValue_Delete $parameters
   * @access public
   */
  public function CustomFieldValue_Delete(CustomFieldValue_Delete $parameters)
  {
    return $this->__soapCall('CustomFieldValue_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CustomFieldValue' exists with the key passed in.
   * 
   * @param CustomFieldValue_Exists $parameters
   * @access public
   */
  public function CustomFieldValue_Exists(CustomFieldValue_Exists $parameters)
  {
    return $this->__soapCall('CustomFieldValue_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CustomFieldValue' object given the primary key of that row in the database.
   * 
   * @param CustomFieldValue_GetByKey $parameters
   * @access public
   */
  public function CustomFieldValue_GetByKey(CustomFieldValue_GetByKey $parameters)
  {
    return $this->__soapCall('CustomFieldValue_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CustomFieldValue' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomFieldValue_Save $parameters
   * @access public
   */
  public function CustomFieldValue_Save(CustomFieldValue_Save $parameters)
  {
    return $this->__soapCall('CustomFieldValue_Save', array($parameters));
  }

  /**
   * Saves the 'CustomFieldValue' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomFieldValue_SaveAndGet $parameters
   * @access public
   */
  public function CustomFieldValue_SaveAndGet(CustomFieldValue_SaveAndGet $parameters)
  {
    return $this->__soapCall('CustomFieldValue_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CustomFieldValue' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CustomFieldValue_Validate $parameters
   * @access public
   */
  public function CustomFieldValue_Validate(CustomFieldValue_Validate $parameters)
  {
    return $this->__soapCall('CustomFieldValue_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'CustomFieldListItem' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CustomFieldListItem_Clone $parameters
   * @access public
   */
  public function CustomFieldListItem_Clone(CustomFieldListItem_Clone $parameters)
  {
    return $this->__soapCall('CustomFieldListItem_Clone', array($parameters));
  }

  /**
   * Deletes the 'CustomFieldListItem' item from the database with the key passed in.
   * 
   * @param CustomFieldListItem_Delete $parameters
   * @access public
   */
  public function CustomFieldListItem_Delete(CustomFieldListItem_Delete $parameters)
  {
    return $this->__soapCall('CustomFieldListItem_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CustomFieldListItem' exists with the key passed in.
   * 
   * @param CustomFieldListItem_Exists $parameters
   * @access public
   */
  public function CustomFieldListItem_Exists(CustomFieldListItem_Exists $parameters)
  {
    return $this->__soapCall('CustomFieldListItem_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CustomFieldListItem' object given the primary key of that row in the database.
   * 
   * @param CustomFieldListItem_GetByKey $parameters
   * @access public
   */
  public function CustomFieldListItem_GetByKey(CustomFieldListItem_GetByKey $parameters)
  {
    return $this->__soapCall('CustomFieldListItem_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CustomFieldListItem' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomFieldListItem_Save $parameters
   * @access public
   */
  public function CustomFieldListItem_Save(CustomFieldListItem_Save $parameters)
  {
    return $this->__soapCall('CustomFieldListItem_Save', array($parameters));
  }

  /**
   * Saves the 'CustomFieldListItem' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CustomFieldListItem_SaveAndGet $parameters
   * @access public
   */
  public function CustomFieldListItem_SaveAndGet(CustomFieldListItem_SaveAndGet $parameters)
  {
    return $this->__soapCall('CustomFieldListItem_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CustomFieldListItem' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CustomFieldListItem_Validate $parameters
   * @access public
   */
  public function CustomFieldListItem_Validate(CustomFieldListItem_Validate $parameters)
  {
    return $this->__soapCall('CustomFieldListItem_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'DiscountMethods' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param DiscountMethods_Clone $parameters
   * @access public
   */
  public function DiscountMethods_Clone(DiscountMethods_Clone $parameters)
  {
    return $this->__soapCall('DiscountMethods_Clone', array($parameters));
  }

  /**
   * Deletes the 'DiscountMethods' item from the database with the key passed in.
   * 
   * @param DiscountMethods_Delete $parameters
   * @access public
   */
  public function DiscountMethods_Delete(DiscountMethods_Delete $parameters)
  {
    return $this->__soapCall('DiscountMethods_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'DiscountMethods' exists with the key passed in.
   * 
   * @param DiscountMethods_Exists $parameters
   * @access public
   */
  public function DiscountMethods_Exists(DiscountMethods_Exists $parameters)
  {
    return $this->__soapCall('DiscountMethods_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'DiscountMethods' object given the primary key of that row in the database.
   * 
   * @param DiscountMethods_GetByKey $parameters
   * @access public
   */
  public function DiscountMethods_GetByKey(DiscountMethods_GetByKey $parameters)
  {
    return $this->__soapCall('DiscountMethods_GetByKey', array($parameters));
  }

  /**
   * Saves the 'DiscountMethods' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DiscountMethods_Save $parameters
   * @access public
   */
  public function DiscountMethods_Save(DiscountMethods_Save $parameters)
  {
    return $this->__soapCall('DiscountMethods_Save', array($parameters));
  }

  /**
   * Saves the 'DiscountMethods' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DiscountMethods_SaveAndGet $parameters
   * @access public
   */
  public function DiscountMethods_SaveAndGet(DiscountMethods_SaveAndGet $parameters)
  {
    return $this->__soapCall('DiscountMethods_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'DiscountMethods' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param DiscountMethods_Validate $parameters
   * @access public
   */
  public function DiscountMethods_Validate(DiscountMethods_Validate $parameters)
  {
    return $this->__soapCall('DiscountMethods_Validate', array($parameters));
  }

  /**
   * Fills the DiscountRules OneToMany Collection on a DiscountMethods transport.  Pass in the 'DiscountMethods' transport object to put the DiscountRules OneToMany collection on.
   * 
   * @param DiscountMethods_FillDiscountRulesCollection $parameters
   * @access public
   */
  public function DiscountMethods_FillDiscountRulesCollection(DiscountMethods_FillDiscountRulesCollection $parameters)
  {
    return $this->__soapCall('DiscountMethods_FillDiscountRulesCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'DiscountRules' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param DiscountRules_Clone $parameters
   * @access public
   */
  public function DiscountRules_Clone(DiscountRules_Clone $parameters)
  {
    return $this->__soapCall('DiscountRules_Clone', array($parameters));
  }

  /**
   * Deletes the 'DiscountRules' item from the database with the key passed in.
   * 
   * @param DiscountRules_Delete $parameters
   * @access public
   */
  public function DiscountRules_Delete(DiscountRules_Delete $parameters)
  {
    return $this->__soapCall('DiscountRules_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'DiscountRules' exists with the key passed in.
   * 
   * @param DiscountRules_Exists $parameters
   * @access public
   */
  public function DiscountRules_Exists(DiscountRules_Exists $parameters)
  {
    return $this->__soapCall('DiscountRules_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'DiscountRules' object given the primary key of that row in the database.
   * 
   * @param DiscountRules_GetByKey $parameters
   * @access public
   */
  public function DiscountRules_GetByKey(DiscountRules_GetByKey $parameters)
  {
    return $this->__soapCall('DiscountRules_GetByKey', array($parameters));
  }

  /**
   * Saves the 'DiscountRules' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DiscountRules_Save $parameters
   * @access public
   */
  public function DiscountRules_Save(DiscountRules_Save $parameters)
  {
    return $this->__soapCall('DiscountRules_Save', array($parameters));
  }

  /**
   * Saves the 'DiscountRules' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DiscountRules_SaveAndGet $parameters
   * @access public
   */
  public function DiscountRules_SaveAndGet(DiscountRules_SaveAndGet $parameters)
  {
    return $this->__soapCall('DiscountRules_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'DiscountRules' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param DiscountRules_Validate $parameters
   * @access public
   */
  public function DiscountRules_Validate(DiscountRules_Validate $parameters)
  {
    return $this->__soapCall('DiscountRules_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'DripSeries' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param DripSeries_Clone $parameters
   * @access public
   */
  public function DripSeries_Clone(DripSeries_Clone $parameters)
  {
    return $this->__soapCall('DripSeries_Clone', array($parameters));
  }

  /**
   * Deletes the 'DripSeries' item from the database with the key passed in.
   * 
   * @param DripSeries_Delete $parameters
   * @access public
   */
  public function DripSeries_Delete(DripSeries_Delete $parameters)
  {
    return $this->__soapCall('DripSeries_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'DripSeries' exists with the key passed in.
   * 
   * @param DripSeries_Exists $parameters
   * @access public
   */
  public function DripSeries_Exists(DripSeries_Exists $parameters)
  {
    return $this->__soapCall('DripSeries_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'DripSeries' object given the primary key of that row in the database.
   * 
   * @param DripSeries_GetByKey $parameters
   * @access public
   */
  public function DripSeries_GetByKey(DripSeries_GetByKey $parameters)
  {
    return $this->__soapCall('DripSeries_GetByKey', array($parameters));
  }

  /**
   * Saves the 'DripSeries' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DripSeries_Save $parameters
   * @access public
   */
  public function DripSeries_Save(DripSeries_Save $parameters)
  {
    return $this->__soapCall('DripSeries_Save', array($parameters));
  }

  /**
   * Saves the 'DripSeries' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DripSeries_SaveAndGet $parameters
   * @access public
   */
  public function DripSeries_SaveAndGet(DripSeries_SaveAndGet $parameters)
  {
    return $this->__soapCall('DripSeries_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'DripSeries' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param DripSeries_Validate $parameters
   * @access public
   */
  public function DripSeries_Validate(DripSeries_Validate $parameters)
  {
    return $this->__soapCall('DripSeries_Validate', array($parameters));
  }

  /**
   * Fills the DripSeriesWhoToContact OneToMany Collection on a DripSeries transport.  Pass in the 'DripSeries' transport object to put the DripSeriesWhoToContact OneToMany collection on.
   * 
   * @param DripSeries_FillDripSeriesWhoToContactCollection $parameters
   * @access public
   */
  public function DripSeries_FillDripSeriesWhoToContactCollection(DripSeries_FillDripSeriesWhoToContactCollection $parameters)
  {
    return $this->__soapCall('DripSeries_FillDripSeriesWhoToContactCollection', array($parameters));
  }

  /**
   * Fills the DripSeriesWhatShouldHappen OneToMany Collection on a DripSeries transport.  Pass in the 'DripSeries' transport object to put the DripSeriesWhatShouldHappen OneToMany collection on.
   * 
   * @param DripSeries_FillDripSeriesWhatShouldHappenCollection $parameters
   * @access public
   */
  public function DripSeries_FillDripSeriesWhatShouldHappenCollection(DripSeries_FillDripSeriesWhatShouldHappenCollection $parameters)
  {
    return $this->__soapCall('DripSeries_FillDripSeriesWhatShouldHappenCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'DripSeriesWhatShouldHappen' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param DripSeriesWhatShouldHappen_Clone $parameters
   * @access public
   */
  public function DripSeriesWhatShouldHappen_Clone(DripSeriesWhatShouldHappen_Clone $parameters)
  {
    return $this->__soapCall('DripSeriesWhatShouldHappen_Clone', array($parameters));
  }

  /**
   * Deletes the 'DripSeriesWhatShouldHappen' item from the database with the key passed in.
   * 
   * @param DripSeriesWhatShouldHappen_Delete $parameters
   * @access public
   */
  public function DripSeriesWhatShouldHappen_Delete(DripSeriesWhatShouldHappen_Delete $parameters)
  {
    return $this->__soapCall('DripSeriesWhatShouldHappen_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'DripSeriesWhatShouldHappen' exists with the key passed in.
   * 
   * @param DripSeriesWhatShouldHappen_Exists $parameters
   * @access public
   */
  public function DripSeriesWhatShouldHappen_Exists(DripSeriesWhatShouldHappen_Exists $parameters)
  {
    return $this->__soapCall('DripSeriesWhatShouldHappen_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'DripSeriesWhatShouldHappen' object given the primary key of that row in the database.
   * 
   * @param DripSeriesWhatShouldHappen_GetByKey $parameters
   * @access public
   */
  public function DripSeriesWhatShouldHappen_GetByKey(DripSeriesWhatShouldHappen_GetByKey $parameters)
  {
    return $this->__soapCall('DripSeriesWhatShouldHappen_GetByKey', array($parameters));
  }

  /**
   * Saves the 'DripSeriesWhatShouldHappen' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DripSeriesWhatShouldHappen_Save $parameters
   * @access public
   */
  public function DripSeriesWhatShouldHappen_Save(DripSeriesWhatShouldHappen_Save $parameters)
  {
    return $this->__soapCall('DripSeriesWhatShouldHappen_Save', array($parameters));
  }

  /**
   * Saves the 'DripSeriesWhatShouldHappen' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DripSeriesWhatShouldHappen_SaveAndGet $parameters
   * @access public
   */
  public function DripSeriesWhatShouldHappen_SaveAndGet(DripSeriesWhatShouldHappen_SaveAndGet $parameters)
  {
    return $this->__soapCall('DripSeriesWhatShouldHappen_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'DripSeriesWhatShouldHappen' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param DripSeriesWhatShouldHappen_Validate $parameters
   * @access public
   */
  public function DripSeriesWhatShouldHappen_Validate(DripSeriesWhatShouldHappen_Validate $parameters)
  {
    return $this->__soapCall('DripSeriesWhatShouldHappen_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'DripSeriesWhoToContact' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param DripSeriesWhoToContact_Clone $parameters
   * @access public
   */
  public function DripSeriesWhoToContact_Clone(DripSeriesWhoToContact_Clone $parameters)
  {
    return $this->__soapCall('DripSeriesWhoToContact_Clone', array($parameters));
  }

  /**
   * Deletes the 'DripSeriesWhoToContact' item from the database with the key passed in.
   * 
   * @param DripSeriesWhoToContact_Delete $parameters
   * @access public
   */
  public function DripSeriesWhoToContact_Delete(DripSeriesWhoToContact_Delete $parameters)
  {
    return $this->__soapCall('DripSeriesWhoToContact_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'DripSeriesWhoToContact' exists with the key passed in.
   * 
   * @param DripSeriesWhoToContact_Exists $parameters
   * @access public
   */
  public function DripSeriesWhoToContact_Exists(DripSeriesWhoToContact_Exists $parameters)
  {
    return $this->__soapCall('DripSeriesWhoToContact_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'DripSeriesWhoToContact' object given the primary key of that row in the database.
   * 
   * @param DripSeriesWhoToContact_GetByKey $parameters
   * @access public
   */
  public function DripSeriesWhoToContact_GetByKey(DripSeriesWhoToContact_GetByKey $parameters)
  {
    return $this->__soapCall('DripSeriesWhoToContact_GetByKey', array($parameters));
  }

  /**
   * Saves the 'DripSeriesWhoToContact' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DripSeriesWhoToContact_Save $parameters
   * @access public
   */
  public function DripSeriesWhoToContact_Save(DripSeriesWhoToContact_Save $parameters)
  {
    return $this->__soapCall('DripSeriesWhoToContact_Save', array($parameters));
  }

  /**
   * Saves the 'DripSeriesWhoToContact' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param DripSeriesWhoToContact_SaveAndGet $parameters
   * @access public
   */
  public function DripSeriesWhoToContact_SaveAndGet(DripSeriesWhoToContact_SaveAndGet $parameters)
  {
    return $this->__soapCall('DripSeriesWhoToContact_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'DripSeriesWhoToContact' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param DripSeriesWhoToContact_Validate $parameters
   * @access public
   */
  public function DripSeriesWhoToContact_Validate(DripSeriesWhoToContact_Validate $parameters)
  {
    return $this->__soapCall('DripSeriesWhoToContact_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'EmailLog' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param EmailLog_Clone $parameters
   * @access public
   */
  public function EmailLog_Clone(EmailLog_Clone $parameters)
  {
    return $this->__soapCall('EmailLog_Clone', array($parameters));
  }

  /**
   * Deletes the 'EmailLog' item from the database with the key passed in.
   * 
   * @param EmailLog_Delete $parameters
   * @access public
   */
  public function EmailLog_Delete(EmailLog_Delete $parameters)
  {
    return $this->__soapCall('EmailLog_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'EmailLog' exists with the key passed in.
   * 
   * @param EmailLog_Exists $parameters
   * @access public
   */
  public function EmailLog_Exists(EmailLog_Exists $parameters)
  {
    return $this->__soapCall('EmailLog_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'EmailLog' object given the primary key of that row in the database.
   * 
   * @param EmailLog_GetByKey $parameters
   * @access public
   */
  public function EmailLog_GetByKey(EmailLog_GetByKey $parameters)
  {
    return $this->__soapCall('EmailLog_GetByKey', array($parameters));
  }

  /**
   * Saves the 'EmailLog' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param EmailLog_Save $parameters
   * @access public
   */
  public function EmailLog_Save(EmailLog_Save $parameters)
  {
    return $this->__soapCall('EmailLog_Save', array($parameters));
  }

  /**
   * Saves the 'EmailLog' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param EmailLog_SaveAndGet $parameters
   * @access public
   */
  public function EmailLog_SaveAndGet(EmailLog_SaveAndGet $parameters)
  {
    return $this->__soapCall('EmailLog_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'EmailLog' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param EmailLog_Validate $parameters
   * @access public
   */
  public function EmailLog_Validate(EmailLog_Validate $parameters)
  {
    return $this->__soapCall('EmailLog_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'GiftCertificate' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param GiftCertificate_Clone $parameters
   * @access public
   */
  public function GiftCertificate_Clone(GiftCertificate_Clone $parameters)
  {
    return $this->__soapCall('GiftCertificate_Clone', array($parameters));
  }

  /**
   * Deletes the 'GiftCertificate' item from the database with the key passed in.
   * 
   * @param GiftCertificate_Delete $parameters
   * @access public
   */
  public function GiftCertificate_Delete(GiftCertificate_Delete $parameters)
  {
    return $this->__soapCall('GiftCertificate_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'GiftCertificate' exists with the key passed in.
   * 
   * @param GiftCertificate_Exists $parameters
   * @access public
   */
  public function GiftCertificate_Exists(GiftCertificate_Exists $parameters)
  {
    return $this->__soapCall('GiftCertificate_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'GiftCertificate' object given the primary key of that row in the database.
   * 
   * @param GiftCertificate_GetByKey $parameters
   * @access public
   */
  public function GiftCertificate_GetByKey(GiftCertificate_GetByKey $parameters)
  {
    return $this->__soapCall('GiftCertificate_GetByKey', array($parameters));
  }

  /**
   * Saves the 'GiftCertificate' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param GiftCertificate_Save $parameters
   * @access public
   */
  public function GiftCertificate_Save(GiftCertificate_Save $parameters)
  {
    return $this->__soapCall('GiftCertificate_Save', array($parameters));
  }

  /**
   * Saves the 'GiftCertificate' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param GiftCertificate_SaveAndGet $parameters
   * @access public
   */
  public function GiftCertificate_SaveAndGet(GiftCertificate_SaveAndGet $parameters)
  {
    return $this->__soapCall('GiftCertificate_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'GiftCertificate' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param GiftCertificate_Validate $parameters
   * @access public
   */
  public function GiftCertificate_Validate(GiftCertificate_Validate $parameters)
  {
    return $this->__soapCall('GiftCertificate_Validate', array($parameters));
  }

  /**
   * Fills the GiftCertificateTransactionHistory OneToMany Collection on a GiftCertificate transport.  Pass in the 'GiftCertificate' transport object to put the GiftCertificateTransactionHistory OneToMany collection on.
   * 
   * @param GiftCertificate_FillGiftCertificateTransactionHistoryCollection $parameters
   * @access public
   */
  public function GiftCertificate_FillGiftCertificateTransactionHistoryCollection(GiftCertificate_FillGiftCertificateTransactionHistoryCollection $parameters)
  {
    return $this->__soapCall('GiftCertificate_FillGiftCertificateTransactionHistoryCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'GiftCertificateBatch' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param GiftCertificateBatch_Clone $parameters
   * @access public
   */
  public function GiftCertificateBatch_Clone(GiftCertificateBatch_Clone $parameters)
  {
    return $this->__soapCall('GiftCertificateBatch_Clone', array($parameters));
  }

  /**
   * Deletes the 'GiftCertificateBatch' item from the database with the key passed in.
   * 
   * @param GiftCertificateBatch_Delete $parameters
   * @access public
   */
  public function GiftCertificateBatch_Delete(GiftCertificateBatch_Delete $parameters)
  {
    return $this->__soapCall('GiftCertificateBatch_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'GiftCertificateBatch' exists with the key passed in.
   * 
   * @param GiftCertificateBatch_Exists $parameters
   * @access public
   */
  public function GiftCertificateBatch_Exists(GiftCertificateBatch_Exists $parameters)
  {
    return $this->__soapCall('GiftCertificateBatch_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'GiftCertificateBatch' object given the primary key of that row in the database.
   * 
   * @param GiftCertificateBatch_GetByKey $parameters
   * @access public
   */
  public function GiftCertificateBatch_GetByKey(GiftCertificateBatch_GetByKey $parameters)
  {
    return $this->__soapCall('GiftCertificateBatch_GetByKey', array($parameters));
  }

  /**
   * Saves the 'GiftCertificateBatch' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param GiftCertificateBatch_Save $parameters
   * @access public
   */
  public function GiftCertificateBatch_Save(GiftCertificateBatch_Save $parameters)
  {
    return $this->__soapCall('GiftCertificateBatch_Save', array($parameters));
  }

  /**
   * Saves the 'GiftCertificateBatch' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param GiftCertificateBatch_SaveAndGet $parameters
   * @access public
   */
  public function GiftCertificateBatch_SaveAndGet(GiftCertificateBatch_SaveAndGet $parameters)
  {
    return $this->__soapCall('GiftCertificateBatch_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'GiftCertificateBatch' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param GiftCertificateBatch_Validate $parameters
   * @access public
   */
  public function GiftCertificateBatch_Validate(GiftCertificateBatch_Validate $parameters)
  {
    return $this->__soapCall('GiftCertificateBatch_Validate', array($parameters));
  }

  /**
   * Fills the GiftCertificate OneToMany Collection on a GiftCertificateBatch transport.  Pass in the 'GiftCertificateBatch' transport object to put the GiftCertificate OneToMany collection on.
   * 
   * @param GiftCertificateBatch_FillGiftCertificateCollection $parameters
   * @access public
   */
  public function GiftCertificateBatch_FillGiftCertificateCollection(GiftCertificateBatch_FillGiftCertificateCollection $parameters)
  {
    return $this->__soapCall('GiftCertificateBatch_FillGiftCertificateCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'GiftCertificateTransactionHistory' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param GiftCertificateTransactionHistory_Clone $parameters
   * @access public
   */
  public function GiftCertificateTransactionHistory_Clone(GiftCertificateTransactionHistory_Clone $parameters)
  {
    return $this->__soapCall('GiftCertificateTransactionHistory_Clone', array($parameters));
  }

  /**
   * Deletes the 'GiftCertificateTransactionHistory' item from the database with the key passed in.
   * 
   * @param GiftCertificateTransactionHistory_Delete $parameters
   * @access public
   */
  public function GiftCertificateTransactionHistory_Delete(GiftCertificateTransactionHistory_Delete $parameters)
  {
    return $this->__soapCall('GiftCertificateTransactionHistory_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'GiftCertificateTransactionHistory' exists with the key passed in.
   * 
   * @param GiftCertificateTransactionHistory_Exists $parameters
   * @access public
   */
  public function GiftCertificateTransactionHistory_Exists(GiftCertificateTransactionHistory_Exists $parameters)
  {
    return $this->__soapCall('GiftCertificateTransactionHistory_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'GiftCertificateTransactionHistory' object given the primary key of that row in the database.
   * 
   * @param GiftCertificateTransactionHistory_GetByKey $parameters
   * @access public
   */
  public function GiftCertificateTransactionHistory_GetByKey(GiftCertificateTransactionHistory_GetByKey $parameters)
  {
    return $this->__soapCall('GiftCertificateTransactionHistory_GetByKey', array($parameters));
  }

  /**
   * Saves the 'GiftCertificateTransactionHistory' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param GiftCertificateTransactionHistory_Save $parameters
   * @access public
   */
  public function GiftCertificateTransactionHistory_Save(GiftCertificateTransactionHistory_Save $parameters)
  {
    return $this->__soapCall('GiftCertificateTransactionHistory_Save', array($parameters));
  }

  /**
   * Saves the 'GiftCertificateTransactionHistory' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param GiftCertificateTransactionHistory_SaveAndGet $parameters
   * @access public
   */
  public function GiftCertificateTransactionHistory_SaveAndGet(GiftCertificateTransactionHistory_SaveAndGet $parameters)
  {
    return $this->__soapCall('GiftCertificateTransactionHistory_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'GiftCertificateTransactionHistory' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param GiftCertificateTransactionHistory_Validate $parameters
   * @access public
   */
  public function GiftCertificateTransactionHistory_Validate(GiftCertificateTransactionHistory_Validate $parameters)
  {
    return $this->__soapCall('GiftCertificateTransactionHistory_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'GiftCertificateType' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param GiftCertificateType_Clone $parameters
   * @access public
   */
  public function GiftCertificateType_Clone(GiftCertificateType_Clone $parameters)
  {
    return $this->__soapCall('GiftCertificateType_Clone', array($parameters));
  }

  /**
   * Deletes the 'GiftCertificateType' item from the database with the key passed in.
   * 
   * @param GiftCertificateType_Delete $parameters
   * @access public
   */
  public function GiftCertificateType_Delete(GiftCertificateType_Delete $parameters)
  {
    return $this->__soapCall('GiftCertificateType_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'GiftCertificateType' exists with the key passed in.
   * 
   * @param GiftCertificateType_Exists $parameters
   * @access public
   */
  public function GiftCertificateType_Exists(GiftCertificateType_Exists $parameters)
  {
    return $this->__soapCall('GiftCertificateType_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'GiftCertificateType' object given the primary key of that row in the database.
   * 
   * @param GiftCertificateType_GetByKey $parameters
   * @access public
   */
  public function GiftCertificateType_GetByKey(GiftCertificateType_GetByKey $parameters)
  {
    return $this->__soapCall('GiftCertificateType_GetByKey', array($parameters));
  }

  /**
   * Saves the 'GiftCertificateType' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param GiftCertificateType_Save $parameters
   * @access public
   */
  public function GiftCertificateType_Save(GiftCertificateType_Save $parameters)
  {
    return $this->__soapCall('GiftCertificateType_Save', array($parameters));
  }

  /**
   * Displays a response of 'Hello World' Ensures the most basic application is working.
   * 
   * @param TestHelloWorld $parameters
   * @access public
   */
  public function TestHelloWorld(TestHelloWorld $parameters)
  {
    return $this->__soapCall('TestHelloWorld', array($parameters));
  }

  /**
   * Gets a Test Transport Class, just to make sure everything is serializing correctly.
   * 
   * @param TestTransport $parameters
   * @access public
   */
  public function TestTransport(TestTransport $parameters)
  {
    return $this->__soapCall('TestTransport', array($parameters));
  }

  /**
   * Test Price Collection Serialization Speeds
   * 
   * @param TestPricingCollectionAsTransport $parameters
   * @access public
   */
  public function TestPricingCollectionAsTransport(TestPricingCollectionAsTransport $parameters)
  {
    return $this->__soapCall('TestPricingCollectionAsTransport', array($parameters));
  }

  /**
   * Test Price Collection Serialization Speeds
   * 
   * @param TestPricingCollectionAsTransportReturned $parameters
   * @access public
   */
  public function TestPricingCollectionAsTransportReturned(TestPricingCollectionAsTransportReturned $parameters)
  {
    return $this->__soapCall('TestPricingCollectionAsTransportReturned', array($parameters));
  }

  /**
   * Test Price Collection Serialization Speeds
   * 
   * @param TestPricingCollectionAsTransportNoReturn $parameters
   * @access public
   */
  public function TestPricingCollectionAsTransportNoReturn(TestPricingCollectionAsTransportNoReturn $parameters)
  {
    return $this->__soapCall('TestPricingCollectionAsTransportNoReturn', array($parameters));
  }

  /**
   * Test Dataset Serialization Speeds
   * 
   * @param TestDataSetAsTransportReturned $parameters
   * @access public
   */
  public function TestDataSetAsTransportReturned(TestDataSetAsTransportReturned $parameters)
  {
    return $this->__soapCall('TestDataSetAsTransportReturned', array($parameters));
  }

  /**
   * Test Dataset Serialization Speeds
   * 
   * @param TestDataSetAsTransport $parameters
   * @access public
   */
  public function TestDataSetAsTransport(TestDataSetAsTransport $parameters)
  {
    return $this->__soapCall('TestDataSetAsTransport', array($parameters));
  }

  /**
   * Returns an unsaved new 'ActiveInStore' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param ActiveInStore_Clone $parameters
   * @access public
   */
  public function ActiveInStore_Clone(ActiveInStore_Clone $parameters)
  {
    return $this->__soapCall('ActiveInStore_Clone', array($parameters));
  }

  /**
   * Deletes the 'ActiveInStore' item from the database with the key passed in.
   * 
   * @param ActiveInStore_Delete $parameters
   * @access public
   */
  public function ActiveInStore_Delete(ActiveInStore_Delete $parameters)
  {
    return $this->__soapCall('ActiveInStore_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'ActiveInStore' exists with the key passed in.
   * 
   * @param ActiveInStore_Exists $parameters
   * @access public
   */
  public function ActiveInStore_Exists(ActiveInStore_Exists $parameters)
  {
    return $this->__soapCall('ActiveInStore_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'ActiveInStore' object given the primary key of that row in the database.
   * 
   * @param ActiveInStore_GetByKey $parameters
   * @access public
   */
  public function ActiveInStore_GetByKey(ActiveInStore_GetByKey $parameters)
  {
    return $this->__soapCall('ActiveInStore_GetByKey', array($parameters));
  }

  /**
   * Saves the 'ActiveInStore' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ActiveInStore_Save $parameters
   * @access public
   */
  public function ActiveInStore_Save(ActiveInStore_Save $parameters)
  {
    return $this->__soapCall('ActiveInStore_Save', array($parameters));
  }

  /**
   * Saves the 'ActiveInStore' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param ActiveInStore_SaveAndGet $parameters
   * @access public
   */
  public function ActiveInStore_SaveAndGet(ActiveInStore_SaveAndGet $parameters)
  {
    return $this->__soapCall('ActiveInStore_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'ActiveInStore' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param ActiveInStore_Validate $parameters
   * @access public
   */
  public function ActiveInStore_Validate(ActiveInStore_Validate $parameters)
  {
    return $this->__soapCall('ActiveInStore_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'AdCode' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param AdCode_Clone $parameters
   * @access public
   */
  public function AdCode_Clone(AdCode_Clone $parameters)
  {
    return $this->__soapCall('AdCode_Clone', array($parameters));
  }

  /**
   * Deletes the 'AdCode' item from the database with the key passed in.
   * 
   * @param AdCode_Delete $parameters
   * @access public
   */
  public function AdCode_Delete(AdCode_Delete $parameters)
  {
    return $this->__soapCall('AdCode_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'AdCode' exists with the key passed in.
   * 
   * @param AdCode_Exists $parameters
   * @access public
   */
  public function AdCode_Exists(AdCode_Exists $parameters)
  {
    return $this->__soapCall('AdCode_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'AdCode' object given the primary key of that row in the database.
   * 
   * @param AdCode_GetByKey $parameters
   * @access public
   */
  public function AdCode_GetByKey(AdCode_GetByKey $parameters)
  {
    return $this->__soapCall('AdCode_GetByKey', array($parameters));
  }

  /**
   * Saves the 'AdCode' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AdCode_Save $parameters
   * @access public
   */
  public function AdCode_Save(AdCode_Save $parameters)
  {
    return $this->__soapCall('AdCode_Save', array($parameters));
  }

  /**
   * Saves the 'AdCode' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AdCode_SaveAndGet $parameters
   * @access public
   */
  public function AdCode_SaveAndGet(AdCode_SaveAndGet $parameters)
  {
    return $this->__soapCall('AdCode_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'AdCode' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param AdCode_Validate $parameters
   * @access public
   */
  public function AdCode_Validate(AdCode_Validate $parameters)
  {
    return $this->__soapCall('AdCode_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Address' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Address_Clone $parameters
   * @access public
   */
  public function Address_Clone(Address_Clone $parameters)
  {
    return $this->__soapCall('Address_Clone', array($parameters));
  }

  /**
   * Deletes the 'Address' item from the database with the key passed in.
   * 
   * @param Address_Delete $parameters
   * @access public
   */
  public function Address_Delete(Address_Delete $parameters)
  {
    return $this->__soapCall('Address_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Address' exists with the key passed in.
   * 
   * @param Address_Exists $parameters
   * @access public
   */
  public function Address_Exists(Address_Exists $parameters)
  {
    return $this->__soapCall('Address_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Address' object given the primary key of that row in the database.
   * 
   * @param Address_GetByKey $parameters
   * @access public
   */
  public function Address_GetByKey(Address_GetByKey $parameters)
  {
    return $this->__soapCall('Address_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Address' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Address_Save $parameters
   * @access public
   */
  public function Address_Save(Address_Save $parameters)
  {
    return $this->__soapCall('Address_Save', array($parameters));
  }

  /**
   * Saves the 'Address' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Address_SaveAndGet $parameters
   * @access public
   */
  public function Address_SaveAndGet(Address_SaveAndGet $parameters)
  {
    return $this->__soapCall('Address_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Address' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Address_Validate $parameters
   * @access public
   */
  public function Address_Validate(Address_Validate $parameters)
  {
    return $this->__soapCall('Address_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Affiliate' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Affiliate_Clone $parameters
   * @access public
   */
  public function Affiliate_Clone(Affiliate_Clone $parameters)
  {
    return $this->__soapCall('Affiliate_Clone', array($parameters));
  }

  /**
   * Deletes the 'Affiliate' item from the database with the key passed in.
   * 
   * @param Affiliate_Delete $parameters
   * @access public
   */
  public function Affiliate_Delete(Affiliate_Delete $parameters)
  {
    return $this->__soapCall('Affiliate_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Affiliate' exists with the key passed in.
   * 
   * @param Affiliate_Exists $parameters
   * @access public
   */
  public function Affiliate_Exists(Affiliate_Exists $parameters)
  {
    return $this->__soapCall('Affiliate_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Affiliate' object given the primary key of that row in the database.
   * 
   * @param Affiliate_GetByKey $parameters
   * @access public
   */
  public function Affiliate_GetByKey(Affiliate_GetByKey $parameters)
  {
    return $this->__soapCall('Affiliate_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Affiliate' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Affiliate_Save $parameters
   * @access public
   */
  public function Affiliate_Save(Affiliate_Save $parameters)
  {
    return $this->__soapCall('Affiliate_Save', array($parameters));
  }

  /**
   * Saves the 'Affiliate' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Affiliate_SaveAndGet $parameters
   * @access public
   */
  public function Affiliate_SaveAndGet(Affiliate_SaveAndGet $parameters)
  {
    return $this->__soapCall('Affiliate_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Affiliate' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Affiliate_Validate $parameters
   * @access public
   */
  public function Affiliate_Validate(Affiliate_Validate $parameters)
  {
    return $this->__soapCall('Affiliate_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'AffiliateStatus' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param AffiliateStatus_Clone $parameters
   * @access public
   */
  public function AffiliateStatus_Clone(AffiliateStatus_Clone $parameters)
  {
    return $this->__soapCall('AffiliateStatus_Clone', array($parameters));
  }

  /**
   * Deletes the 'AffiliateStatus' item from the database with the key passed in.
   * 
   * @param AffiliateStatus_Delete $parameters
   * @access public
   */
  public function AffiliateStatus_Delete(AffiliateStatus_Delete $parameters)
  {
    return $this->__soapCall('AffiliateStatus_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'AffiliateStatus' exists with the key passed in.
   * 
   * @param AffiliateStatus_Exists $parameters
   * @access public
   */
  public function AffiliateStatus_Exists(AffiliateStatus_Exists $parameters)
  {
    return $this->__soapCall('AffiliateStatus_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'AffiliateStatus' object given the primary key of that row in the database.
   * 
   * @param AffiliateStatus_GetByKey $parameters
   * @access public
   */
  public function AffiliateStatus_GetByKey(AffiliateStatus_GetByKey $parameters)
  {
    return $this->__soapCall('AffiliateStatus_GetByKey', array($parameters));
  }

  /**
   * Saves the 'AffiliateStatus' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AffiliateStatus_Save $parameters
   * @access public
   */
  public function AffiliateStatus_Save(AffiliateStatus_Save $parameters)
  {
    return $this->__soapCall('AffiliateStatus_Save', array($parameters));
  }

  /**
   * Saves the 'AffiliateStatus' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AffiliateStatus_SaveAndGet $parameters
   * @access public
   */
  public function AffiliateStatus_SaveAndGet(AffiliateStatus_SaveAndGet $parameters)
  {
    return $this->__soapCall('AffiliateStatus_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'AffiliateStatus' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param AffiliateStatus_Validate $parameters
   * @access public
   */
  public function AffiliateStatus_Validate(AffiliateStatus_Validate $parameters)
  {
    return $this->__soapCall('AffiliateStatus_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'AnalyticAction' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param AnalyticAction_Clone $parameters
   * @access public
   */
  public function AnalyticAction_Clone(AnalyticAction_Clone $parameters)
  {
    return $this->__soapCall('AnalyticAction_Clone', array($parameters));
  }

  /**
   * Deletes the 'AnalyticAction' item from the database with the key passed in.
   * 
   * @param AnalyticAction_Delete $parameters
   * @access public
   */
  public function AnalyticAction_Delete(AnalyticAction_Delete $parameters)
  {
    return $this->__soapCall('AnalyticAction_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'AnalyticAction' exists with the key passed in.
   * 
   * @param AnalyticAction_Exists $parameters
   * @access public
   */
  public function AnalyticAction_Exists(AnalyticAction_Exists $parameters)
  {
    return $this->__soapCall('AnalyticAction_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'AnalyticAction' object given the primary key of that row in the database.
   * 
   * @param AnalyticAction_GetByKey $parameters
   * @access public
   */
  public function AnalyticAction_GetByKey(AnalyticAction_GetByKey $parameters)
  {
    return $this->__soapCall('AnalyticAction_GetByKey', array($parameters));
  }

  /**
   * Saves the 'AnalyticAction' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AnalyticAction_Save $parameters
   * @access public
   */
  public function AnalyticAction_Save(AnalyticAction_Save $parameters)
  {
    return $this->__soapCall('AnalyticAction_Save', array($parameters));
  }

  /**
   * Saves the 'AnalyticAction' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AnalyticAction_SaveAndGet $parameters
   * @access public
   */
  public function AnalyticAction_SaveAndGet(AnalyticAction_SaveAndGet $parameters)
  {
    return $this->__soapCall('AnalyticAction_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'AnalyticAction' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param AnalyticAction_Validate $parameters
   * @access public
   */
  public function AnalyticAction_Validate(AnalyticAction_Validate $parameters)
  {
    return $this->__soapCall('AnalyticAction_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'AnalyticCondition' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param AnalyticCondition_Clone $parameters
   * @access public
   */
  public function AnalyticCondition_Clone(AnalyticCondition_Clone $parameters)
  {
    return $this->__soapCall('AnalyticCondition_Clone', array($parameters));
  }

  /**
   * Deletes the 'AnalyticCondition' item from the database with the key passed in.
   * 
   * @param AnalyticCondition_Delete $parameters
   * @access public
   */
  public function AnalyticCondition_Delete(AnalyticCondition_Delete $parameters)
  {
    return $this->__soapCall('AnalyticCondition_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'AnalyticCondition' exists with the key passed in.
   * 
   * @param AnalyticCondition_Exists $parameters
   * @access public
   */
  public function AnalyticCondition_Exists(AnalyticCondition_Exists $parameters)
  {
    return $this->__soapCall('AnalyticCondition_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'AnalyticCondition' object given the primary key of that row in the database.
   * 
   * @param AnalyticCondition_GetByKey $parameters
   * @access public
   */
  public function AnalyticCondition_GetByKey(AnalyticCondition_GetByKey $parameters)
  {
    return $this->__soapCall('AnalyticCondition_GetByKey', array($parameters));
  }

  /**
   * Saves the 'AnalyticCondition' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AnalyticCondition_Save $parameters
   * @access public
   */
  public function AnalyticCondition_Save(AnalyticCondition_Save $parameters)
  {
    return $this->__soapCall('AnalyticCondition_Save', array($parameters));
  }

  /**
   * Saves the 'AnalyticCondition' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AnalyticCondition_SaveAndGet $parameters
   * @access public
   */
  public function AnalyticCondition_SaveAndGet(AnalyticCondition_SaveAndGet $parameters)
  {
    return $this->__soapCall('AnalyticCondition_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'AnalyticCondition' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param AnalyticCondition_Validate $parameters
   * @access public
   */
  public function AnalyticCondition_Validate(AnalyticCondition_Validate $parameters)
  {
    return $this->__soapCall('AnalyticCondition_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'AnalyticRule' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param AnalyticRule_Clone $parameters
   * @access public
   */
  public function AnalyticRule_Clone(AnalyticRule_Clone $parameters)
  {
    return $this->__soapCall('AnalyticRule_Clone', array($parameters));
  }

  /**
   * Deletes the 'AnalyticRule' item from the database with the key passed in.
   * 
   * @param AnalyticRule_Delete $parameters
   * @access public
   */
  public function AnalyticRule_Delete(AnalyticRule_Delete $parameters)
  {
    return $this->__soapCall('AnalyticRule_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'AnalyticRule' exists with the key passed in.
   * 
   * @param AnalyticRule_Exists $parameters
   * @access public
   */
  public function AnalyticRule_Exists(AnalyticRule_Exists $parameters)
  {
    return $this->__soapCall('AnalyticRule_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'AnalyticRule' object given the primary key of that row in the database.
   * 
   * @param AnalyticRule_GetByKey $parameters
   * @access public
   */
  public function AnalyticRule_GetByKey(AnalyticRule_GetByKey $parameters)
  {
    return $this->__soapCall('AnalyticRule_GetByKey', array($parameters));
  }

  /**
   * Saves the 'AnalyticRule' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AnalyticRule_Save $parameters
   * @access public
   */
  public function AnalyticRule_Save(AnalyticRule_Save $parameters)
  {
    return $this->__soapCall('AnalyticRule_Save', array($parameters));
  }

  /**
   * Saves the 'AnalyticRule' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AnalyticRule_SaveAndGet $parameters
   * @access public
   */
  public function AnalyticRule_SaveAndGet(AnalyticRule_SaveAndGet $parameters)
  {
    return $this->__soapCall('AnalyticRule_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'AnalyticRule' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param AnalyticRule_Validate $parameters
   * @access public
   */
  public function AnalyticRule_Validate(AnalyticRule_Validate $parameters)
  {
    return $this->__soapCall('AnalyticRule_Validate', array($parameters));
  }

  /**
   * Fills the AnalyticAction OneToMany Collection on a AnalyticRule transport.  Pass in the 'AnalyticRule' transport object to put the AnalyticAction OneToMany collection on.
   * 
   * @param AnalyticRule_FillAnalyticActionCollection $parameters
   * @access public
   */
  public function AnalyticRule_FillAnalyticActionCollection(AnalyticRule_FillAnalyticActionCollection $parameters)
  {
    return $this->__soapCall('AnalyticRule_FillAnalyticActionCollection', array($parameters));
  }

  /**
   * Fills the AnalyticCondition OneToMany Collection on a AnalyticRule transport.  Pass in the 'AnalyticRule' transport object to put the AnalyticCondition OneToMany collection on.
   * 
   * @param AnalyticRule_FillAnalyticConditionCollection $parameters
   * @access public
   */
  public function AnalyticRule_FillAnalyticConditionCollection(AnalyticRule_FillAnalyticConditionCollection $parameters)
  {
    return $this->__soapCall('AnalyticRule_FillAnalyticConditionCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'Attribute' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Attribute_Clone $parameters
   * @access public
   */
  public function Attribute_Clone(Attribute_Clone $parameters)
  {
    return $this->__soapCall('Attribute_Clone', array($parameters));
  }

  /**
   * Deletes the 'Attribute' item from the database with the key passed in.
   * 
   * @param Attribute_Delete $parameters
   * @access public
   */
  public function Attribute_Delete(Attribute_Delete $parameters)
  {
    return $this->__soapCall('Attribute_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Attribute' exists with the key passed in.
   * 
   * @param Attribute_Exists $parameters
   * @access public
   */
  public function Attribute_Exists(Attribute_Exists $parameters)
  {
    return $this->__soapCall('Attribute_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Attribute' object given the primary key of that row in the database.
   * 
   * @param Attribute_GetByKey $parameters
   * @access public
   */
  public function Attribute_GetByKey(Attribute_GetByKey $parameters)
  {
    return $this->__soapCall('Attribute_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Attribute' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Attribute_Save $parameters
   * @access public
   */
  public function Attribute_Save(Attribute_Save $parameters)
  {
    return $this->__soapCall('Attribute_Save', array($parameters));
  }

  /**
   * Saves the 'Attribute' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Attribute_SaveAndGet $parameters
   * @access public
   */
  public function Attribute_SaveAndGet(Attribute_SaveAndGet $parameters)
  {
    return $this->__soapCall('Attribute_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Attribute' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Attribute_Validate $parameters
   * @access public
   */
  public function Attribute_Validate(Attribute_Validate $parameters)
  {
    return $this->__soapCall('Attribute_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'AttributeGroup' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param AttributeGroup_Clone $parameters
   * @access public
   */
  public function AttributeGroup_Clone(AttributeGroup_Clone $parameters)
  {
    return $this->__soapCall('AttributeGroup_Clone', array($parameters));
  }

  /**
   * Deletes the 'AttributeGroup' item from the database with the key passed in.
   * 
   * @param AttributeGroup_Delete $parameters
   * @access public
   */
  public function AttributeGroup_Delete(AttributeGroup_Delete $parameters)
  {
    return $this->__soapCall('AttributeGroup_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'AttributeGroup' exists with the key passed in.
   * 
   * @param AttributeGroup_Exists $parameters
   * @access public
   */
  public function AttributeGroup_Exists(AttributeGroup_Exists $parameters)
  {
    return $this->__soapCall('AttributeGroup_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'AttributeGroup' object given the primary key of that row in the database.
   * 
   * @param AttributeGroup_GetByKey $parameters
   * @access public
   */
  public function AttributeGroup_GetByKey(AttributeGroup_GetByKey $parameters)
  {
    return $this->__soapCall('AttributeGroup_GetByKey', array($parameters));
  }

  /**
   * Saves the 'AttributeGroup' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AttributeGroup_Save $parameters
   * @access public
   */
  public function AttributeGroup_Save(AttributeGroup_Save $parameters)
  {
    return $this->__soapCall('AttributeGroup_Save', array($parameters));
  }

  /**
   * Saves the 'AttributeGroup' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param AttributeGroup_SaveAndGet $parameters
   * @access public
   */
  public function AttributeGroup_SaveAndGet(AttributeGroup_SaveAndGet $parameters)
  {
    return $this->__soapCall('AttributeGroup_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'AttributeGroup' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param AttributeGroup_Validate $parameters
   * @access public
   */
  public function AttributeGroup_Validate(AttributeGroup_Validate $parameters)
  {
    return $this->__soapCall('AttributeGroup_Validate', array($parameters));
  }

  /**
   * Fills the Attribute OneToMany Collection on a AttributeGroup transport.  Pass in the 'AttributeGroup' transport object to put the Attribute OneToMany collection on.
   * 
   * @param AttributeGroup_FillAttributeCollection $parameters
   * @access public
   */
  public function AttributeGroup_FillAttributeCollection(AttributeGroup_FillAttributeCollection $parameters)
  {
    return $this->__soapCall('AttributeGroup_FillAttributeCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'Cart' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Cart_Clone $parameters
   * @access public
   */
  public function Cart_Clone(Cart_Clone $parameters)
  {
    return $this->__soapCall('Cart_Clone', array($parameters));
  }

  /**
   * Deletes the 'Cart' item from the database with the key passed in.
   * 
   * @param Cart_Delete $parameters
   * @access public
   */
  public function Cart_Delete(Cart_Delete $parameters)
  {
    return $this->__soapCall('Cart_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Cart' exists with the key passed in.
   * 
   * @param Cart_Exists $parameters
   * @access public
   */
  public function Cart_Exists(Cart_Exists $parameters)
  {
    return $this->__soapCall('Cart_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Cart' object given the primary key of that row in the database.
   * 
   * @param Cart_GetByKey $parameters
   * @access public
   */
  public function Cart_GetByKey(Cart_GetByKey $parameters)
  {
    return $this->__soapCall('Cart_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Cart' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Cart_Save $parameters
   * @access public
   */
  public function Cart_Save(Cart_Save $parameters)
  {
    return $this->__soapCall('Cart_Save', array($parameters));
  }

  /**
   * Saves the 'Cart' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Cart_SaveAndGet $parameters
   * @access public
   */
  public function Cart_SaveAndGet(Cart_SaveAndGet $parameters)
  {
    return $this->__soapCall('Cart_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Cart' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Cart_Validate $parameters
   * @access public
   */
  public function Cart_Validate(Cart_Validate $parameters)
  {
    return $this->__soapCall('Cart_Validate', array($parameters));
  }

  /**
   * Fills the CartVariant OneToMany Collection on a Cart transport.  Pass in the 'Cart' transport object to put the CartVariant OneToMany collection on.
   * 
   * @param Cart_FillCartVariantCollection $parameters
   * @access public
   */
  public function Cart_FillCartVariantCollection(Cart_FillCartVariantCollection $parameters)
  {
    return $this->__soapCall('Cart_FillCartVariantCollection', array($parameters));
  }

  /**
   * Fills the Cart Recursive Collection on a Cart transport.  Pass in the 'Cart' transport object to put the Cart Recursive collection on.
   * 
   * @param Cart_FillCartChildCollection $parameters
   * @access public
   */
  public function Cart_FillCartChildCollection(Cart_FillCartChildCollection $parameters)
  {
    return $this->__soapCall('Cart_FillCartChildCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'CreditCard' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CreditCard_Clone $parameters
   * @access public
   */
  public function CreditCard_Clone(CreditCard_Clone $parameters)
  {
    return $this->__soapCall('CreditCard_Clone', array($parameters));
  }

  /**
   * Deletes the 'CreditCard' item from the database with the key passed in.
   * 
   * @param CreditCard_Delete $parameters
   * @access public
   */
  public function CreditCard_Delete(CreditCard_Delete $parameters)
  {
    return $this->__soapCall('CreditCard_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CreditCard' exists with the key passed in.
   * 
   * @param CreditCard_Exists $parameters
   * @access public
   */
  public function CreditCard_Exists(CreditCard_Exists $parameters)
  {
    return $this->__soapCall('CreditCard_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CreditCard' object given the primary key of that row in the database.
   * 
   * @param CreditCard_GetByKey $parameters
   * @access public
   */
  public function CreditCard_GetByKey(CreditCard_GetByKey $parameters)
  {
    return $this->__soapCall('CreditCard_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CreditCard' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CreditCard_Save $parameters
   * @access public
   */
  public function CreditCard_Save(CreditCard_Save $parameters)
  {
    return $this->__soapCall('CreditCard_Save', array($parameters));
  }

  /**
   * Saves the 'CreditCard' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CreditCard_SaveAndGet $parameters
   * @access public
   */
  public function CreditCard_SaveAndGet(CreditCard_SaveAndGet $parameters)
  {
    return $this->__soapCall('CreditCard_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CreditCard' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CreditCard_Validate $parameters
   * @access public
   */
  public function CreditCard_Validate(CreditCard_Validate $parameters)
  {
    return $this->__soapCall('CreditCard_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'CartInfo' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CartInfo_Clone $parameters
   * @access public
   */
  public function CartInfo_Clone(CartInfo_Clone $parameters)
  {
    return $this->__soapCall('CartInfo_Clone', array($parameters));
  }

  /**
   * Deletes the 'CartInfo' item from the database with the key passed in.
   * 
   * @param CartInfo_Delete $parameters
   * @access public
   */
  public function CartInfo_Delete(CartInfo_Delete $parameters)
  {
    return $this->__soapCall('CartInfo_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CartInfo' exists with the key passed in.
   * 
   * @param CartInfo_Exists $parameters
   * @access public
   */
  public function CartInfo_Exists(CartInfo_Exists $parameters)
  {
    return $this->__soapCall('CartInfo_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CartInfo' object given the primary key of that row in the database.
   * 
   * @param CartInfo_GetByKey $parameters
   * @access public
   */
  public function CartInfo_GetByKey(CartInfo_GetByKey $parameters)
  {
    return $this->__soapCall('CartInfo_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CartInfo' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CartInfo_Save $parameters
   * @access public
   */
  public function CartInfo_Save(CartInfo_Save $parameters)
  {
    return $this->__soapCall('CartInfo_Save', array($parameters));
  }

  /**
   * Saves the 'CartInfo' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CartInfo_SaveAndGet $parameters
   * @access public
   */
  public function CartInfo_SaveAndGet(CartInfo_SaveAndGet $parameters)
  {
    return $this->__soapCall('CartInfo_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CartInfo' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CartInfo_Validate $parameters
   * @access public
   */
  public function CartInfo_Validate(CartInfo_Validate $parameters)
  {
    return $this->__soapCall('CartInfo_Validate', array($parameters));
  }

  /**
   * Fills the Cart OneToMany Collection on a CartInfo transport.  Pass in the 'CartInfo' transport object to put the Cart OneToMany collection on.
   * 
   * @param CartInfo_FillCartCollection $parameters
   * @access public
   */
  public function CartInfo_FillCartCollection(CartInfo_FillCartCollection $parameters)
  {
    return $this->__soapCall('CartInfo_FillCartCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'CartVariant' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param CartVariant_Clone $parameters
   * @access public
   */
  public function CartVariant_Clone(CartVariant_Clone $parameters)
  {
    return $this->__soapCall('CartVariant_Clone', array($parameters));
  }

  /**
   * Deletes the 'CartVariant' item from the database with the key passed in.
   * 
   * @param CartVariant_Delete $parameters
   * @access public
   */
  public function CartVariant_Delete(CartVariant_Delete $parameters)
  {
    return $this->__soapCall('CartVariant_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'CartVariant' exists with the key passed in.
   * 
   * @param CartVariant_Exists $parameters
   * @access public
   */
  public function CartVariant_Exists(CartVariant_Exists $parameters)
  {
    return $this->__soapCall('CartVariant_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'CartVariant' object given the primary key of that row in the database.
   * 
   * @param CartVariant_GetByKey $parameters
   * @access public
   */
  public function CartVariant_GetByKey(CartVariant_GetByKey $parameters)
  {
    return $this->__soapCall('CartVariant_GetByKey', array($parameters));
  }

  /**
   * Saves the 'CartVariant' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CartVariant_Save $parameters
   * @access public
   */
  public function CartVariant_Save(CartVariant_Save $parameters)
  {
    return $this->__soapCall('CartVariant_Save', array($parameters));
  }

  /**
   * Saves the 'CartVariant' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param CartVariant_SaveAndGet $parameters
   * @access public
   */
  public function CartVariant_SaveAndGet(CartVariant_SaveAndGet $parameters)
  {
    return $this->__soapCall('CartVariant_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'CartVariant' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param CartVariant_Validate $parameters
   * @access public
   */
  public function CartVariant_Validate(CartVariant_Validate $parameters)
  {
    return $this->__soapCall('CartVariant_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Category' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Category_Clone $parameters
   * @access public
   */
  public function Category_Clone(Category_Clone $parameters)
  {
    return $this->__soapCall('Category_Clone', array($parameters));
  }

  /**
   * Deletes the 'Category' item from the database with the key passed in.
   * 
   * @param Category_Delete $parameters
   * @access public
   */
  public function Category_Delete(Category_Delete $parameters)
  {
    return $this->__soapCall('Category_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Category' exists with the key passed in.
   * 
   * @param Category_Exists $parameters
   * @access public
   */
  public function Category_Exists(Category_Exists $parameters)
  {
    return $this->__soapCall('Category_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Category' object given the primary key of that row in the database.
   * 
   * @param Category_GetByKey $parameters
   * @access public
   */
  public function Category_GetByKey(Category_GetByKey $parameters)
  {
    return $this->__soapCall('Category_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Category' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Category_Save $parameters
   * @access public
   */
  public function Category_Save(Category_Save $parameters)
  {
    return $this->__soapCall('Category_Save', array($parameters));
  }

  /**
   * Saves the 'Category' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Category_SaveAndGet $parameters
   * @access public
   */
  public function Category_SaveAndGet(Category_SaveAndGet $parameters)
  {
    return $this->__soapCall('Category_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Category' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Category_Validate $parameters
   * @access public
   */
  public function Category_Validate(Category_Validate $parameters)
  {
    return $this->__soapCall('Category_Validate', array($parameters));
  }

  /**
   * Fills the Category Recursive Collection on a Category transport.  Pass in the 'Category' transport object to put the Category Recursive collection on.
   * 
   * @param Category_FillCategoryCollection $parameters
   * @access public
   */
  public function Category_FillCategoryCollection(Category_FillCategoryCollection $parameters)
  {
    return $this->__soapCall('Category_FillCategoryCollection', array($parameters));
  }

  /**
   * Fills the Product OneToMany Collection on a Category transport.  Pass in the 'Category' transport object to put the Product OneToMany collection on.
   * 
   * @param Category_FillProductCollection $parameters
   * @access public
   */
  public function Category_FillProductCollection(Category_FillProductCollection $parameters)
  {
    return $this->__soapCall('Category_FillProductCollection', array($parameters));
  }

  /**
   * Returns an unsaved new 'Country' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Country_Clone $parameters
   * @access public
   */
  public function Country_Clone(Country_Clone $parameters)
  {
    return $this->__soapCall('Country_Clone', array($parameters));
  }

  /**
   * Deletes the 'Country' item from the database with the key passed in.
   * 
   * @param Country_Delete $parameters
   * @access public
   */
  public function Country_Delete(Country_Delete $parameters)
  {
    return $this->__soapCall('Country_Delete', array($parameters));
  }

  /**
   * Checks to see if a 'Country' exists with the key passed in.
   * 
   * @param Country_Exists $parameters
   * @access public
   */
  public function Country_Exists(Country_Exists $parameters)
  {
    return $this->__soapCall('Country_Exists', array($parameters));
  }

  /**
   * Gets a transport for a single 'Country' object given the primary key of that row in the database.
   * 
   * @param Country_GetByKey $parameters
   * @access public
   */
  public function Country_GetByKey(Country_GetByKey $parameters)
  {
    return $this->__soapCall('Country_GetByKey', array($parameters));
  }

  /**
   * Saves the 'Country' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Country_Save $parameters
   * @access public
   */
  public function Country_Save(Country_Save $parameters)
  {
    return $this->__soapCall('Country_Save', array($parameters));
  }

  /**
   * Saves the 'Country' transport object to the database.  Pass in the transport object and it will be saved transactionally along with any collections on it.  Returns the object again in case anything changed on it.
   * 
   * @param Country_SaveAndGet $parameters
   * @access public
   */
  public function Country_SaveAndGet(Country_SaveAndGet $parameters)
  {
    return $this->__soapCall('Country_SaveAndGet', array($parameters));
  }

  /**
   * Validates the 'Country' transport object against all business and database rules.  Pass in the transport object and any errors will be returned in a delimited string message, run this before posting to catch common mistakes. If passed, 'Ok' will be returned.
   * 
   * @param Country_Validate $parameters
   * @access public
   */
  public function Country_Validate(Country_Validate $parameters)
  {
    return $this->__soapCall('Country_Validate', array($parameters));
  }

  /**
   * Returns an unsaved new 'Customer' transport object with collections wiped out, primary keys wiped out and everything else cloned.  Call the save method seperately if needed.
   * 
   * @param Customer_Clone $parameters
   * @access public
   */
  public function Customer_Clone(Customer_Clone $parameters)
  {
    return $this->__soapCall('Customer_Clone', array($parameters));
  }

}

}
