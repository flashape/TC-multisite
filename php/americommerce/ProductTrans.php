<?php

if (!class_exists("ProductTrans", false)) 
{
class ProductTrans
{

  /**
   * 
   * @var boolean $IsNew
   * @access public
   */
  public $IsNew;

  /**
   * 
   * @var boolean $MarkedToDelete
   * @access public
   */
  public $MarkedToDelete;

  /**
   * 
   * @var boolean $MarkedToDetach
   * @access public
   */
  public $MarkedToDetach;

  /**
   * 
   * @var Dictionary $AdditionalData
   * @access public
   */
  public $AdditionalData;

  /**
   * 
   * @var DataInt32 $itemID
   * @access public
   */
  public $itemID;

  /**
   * 
   * @var string $itemNr
   * @access public
   */
  public $itemNr;

  /**
   * 
   * @var DataInt32 $supplierID
   * @access public
   */
  public $supplierID;

  /**
   * 
   * @var DataInt32 $mfgID
   * @access public
   */
  public $mfgID;

  /**
   * 
   * @var string $mfgPartNr
   * @access public
   */
  public $mfgPartNr;

  /**
   * 
   * @var DataInt32 $catID
   * @access public
   */
  public $catID;

  /**
   * 
   * @var DataInt32 $productStatusID
   * @access public
   */
  public $productStatusID;

  /**
   * 
   * @var string $itemName
   * @access public
   */
  public $itemName;

  /**
   * 
   * @var string $bullets
   * @access public
   */
  public $bullets;

  /**
   * 
   * @var string $shortDesc
   * @access public
   */
  public $shortDesc;

  /**
   * 
   * @var string $itemImage
   * @access public
   */
  public $itemImage;

  /**
   * 
   * @var string $imageString
   * @access public
   */
  public $imageString;

  /**
   * 
   * @var string $itemThumb
   * @access public
   */
  public $itemThumb;

  /**
   * 
   * @var string $thumbString
   * @access public
   */
  public $thumbString;

  /**
   * 
   * @var string $longDesc2
   * @access public
   */
  public $longDesc2;

  /**
   * 
   * @var string $longDesc3
   * @access public
   */
  public $longDesc3;

  /**
   * 
   * @var string $longDesc4
   * @access public
   */
  public $longDesc4;

  /**
   * 
   * @var string $longDesc5
   * @access public
   */
  public $longDesc5;

  /**
   * 
   * @var string $sizeHeight
   * @access public
   */
  public $sizeHeight;

  /**
   * 
   * @var string $sizeLength
   * @access public
   */
  public $sizeLength;

  /**
   * 
   * @var string $sizeWidth
   * @access public
   */
  public $sizeWidth;

  /**
   * 
   * @var DataInt32 $sizeUnitID
   * @access public
   */
  public $sizeUnitID;

  /**
   * 
   * @var DataMoney $weight
   * @access public
   */
  public $weight;

  /**
   * 
   * @var DataInt32 $weightUnitID
   * @access public
   */
  public $weightUnitID;

  /**
   * 
   * @var DataMoney $cost
   * @access public
   */
  public $cost;

  /**
   * 
   * @var boolean $markupxcost
   * @access public
   */
  public $markupxcost;

  /**
   * 
   * @var DataMoney $markup
   * @access public
   */
  public $markup;

  /**
   * 
   * @var DataMoney $price
   * @access public
   */
  public $price;

  /**
   * 
   * @var DataMoney $retail
   * @access public
   */
  public $retail;

  /**
   * 
   * @var int $minQuant
   * @access public
   */
  public $minQuant;

  /**
   * 
   * @var int $maxQuant
   * @access public
   */
  public $maxQuant;

  /**
   * 
   * @var DataInt32 $homepageFlag
   * @access public
   */
  public $homepageFlag;

  /**
   * 
   * @var DataInt32 $stock
   * @access public
   */
  public $stock;

  /**
   * 
   * @var string $keywords
   * @access public
   */
  public $keywords;

  /**
   * 
   * @var DataInt32 $noTaxFlag
   * @access public
   */
  public $noTaxFlag;

  /**
   * 
   * @var DataInt32 $ownBox
   * @access public
   */
  public $ownBox;

  /**
   * 
   * @var DataInt32 $hide
   * @access public
   */
  public $hide;

  /**
   * 
   * @var DataInt32 $sort
   * @access public
   */
  public $sort;

  /**
   * 
   * @var DataInt32 $eProductType
   * @access public
   */
  public $eProductType;

  /**
   * 
   * @var string $eProductURL
   * @access public
   */
  public $eProductURL;

  /**
   * 
   * @var string $eProductPassword
   * @access public
   */
  public $eProductPassword;

  /**
   * 
   * @var DataInt32 $eProductRandomExpireDays
   * @access public
   */
  public $eProductRandomExpireDays;

  /**
   * 
   * @var string $eProductEmail
   * @access public
   */
  public $eProductEmail;

  /**
   * 
   * @var DataInt32 $eProductMultipleDelivery
   * @access public
   */
  public $eProductMultipleDelivery;

  /**
   * 
   * @var DataInt32 $warehouseID
   * @access public
   */
  public $warehouseID;

  /**
   * 
   * @var DataInt32 $callForShippingFlag
   * @access public
   */
  public $callForShippingFlag;

  /**
   * 
   * @var string $QBListID
   * @access public
   */
  public $QBListID;

  /**
   * 
   * @var string $otherCategories
   * @access public
   */
  public $otherCategories;

  /**
   * 
   * @var DataInt32 $callForPricingFlag
   * @access public
   */
  public $callForPricingFlag;

  /**
   * 
   * @var DataInt32 $rateAdjustmentTypeID
   * @access public
   */
  public $rateAdjustmentTypeID;

  /**
   * 
   * @var boolean $QBIsGroup
   * @access public
   */
  public $QBIsGroup;

  /**
   * 
   * @var string $InactiveStores
   * @access public
   */
  public $InactiveStores;

  /**
   * 
   * @var string $metaDesc
   * @access public
   */
  public $metaDesc;

  /**
   * 
   * @var string $pageTitle
   * @access public
   */
  public $pageTitle;

  /**
   * 
   * @var boolean $useTabs
   * @access public
   */
  public $useTabs;

  /**
   * 
   * @var string $relatedName
   * @access public
   */
  public $relatedName;

  /**
   * 
   * @var boolean $useTabsThemeOverride
   * @access public
   */
  public $useTabsThemeOverride;

  /**
   * 
   * @var string $longDescName1
   * @access public
   */
  public $longDescName1;

  /**
   * 
   * @var string $longDescName2
   * @access public
   */
  public $longDescName2;

  /**
   * 
   * @var string $longDescName3
   * @access public
   */
  public $longDescName3;

  /**
   * 
   * @var string $longDescName4
   * @access public
   */
  public $longDescName4;

  /**
   * 
   * @var string $longDescName5
   * @access public
   */
  public $longDescName5;

  /**
   * 
   * @var string $longDesc1
   * @access public
   */
  public $longDesc1;

  /**
   * 
   * @var boolean $NonShippingItem
   * @access public
   */
  public $NonShippingItem;

  /**
   * 
   * @var DataInt32 $eProductDeliveryLinkAction
   * @access public
   */
  public $eProductDeliveryLinkAction;

  /**
   * 
   * @var boolean $UseVariantInventory
   * @access public
   */
  public $UseVariantInventory;

  /**
   * 
   * @var string $StaticManufacturerName
   * @access public
   */
  public $StaticManufacturerName;

  /**
   * 
   * @var string $StaticAttributeList
   * @access public
   */
  public $StaticAttributeList;

  /**
   * 
   * @var string $StaticCategoryList
   * @access public
   */
  public $StaticCategoryList;

  /**
   * 
   * @var boolean $IsFeaturedItem
   * @access public
   */
  public $IsFeaturedItem;

  /**
   * 
   * @var string $LongDesc1ExternalUrl
   * @access public
   */
  public $LongDesc1ExternalUrl;

  /**
   * 
   * @var string $LongDesc2ExternalUrl
   * @access public
   */
  public $LongDesc2ExternalUrl;

  /**
   * 
   * @var string $LongDesc3ExternalUrl
   * @access public
   */
  public $LongDesc3ExternalUrl;

  /**
   * 
   * @var string $LongDesc4ExternalUrl
   * @access public
   */
  public $LongDesc4ExternalUrl;

  /**
   * 
   * @var string $LongDesc5ExternalUrl
   * @access public
   */
  public $LongDesc5ExternalUrl;

  /**
   * 
   * @var string $BulletsExternalUrl
   * @access public
   */
  public $BulletsExternalUrl;

  /**
   * 
   * @var boolean $CustomFlag1
   * @access public
   */
  public $CustomFlag1;

  /**
   * 
   * @var boolean $CustomFlag2
   * @access public
   */
  public $CustomFlag2;

  /**
   * 
   * @var boolean $CustomFlag3
   * @access public
   */
  public $CustomFlag3;

  /**
   * 
   * @var boolean $CustomFlag4
   * @access public
   */
  public $CustomFlag4;

  /**
   * 
   * @var boolean $CustomFlag5
   * @access public
   */
  public $CustomFlag5;

  /**
   * 
   * @var string $EnteredBy
   * @access public
   */
  public $EnteredBy;

  /**
   * 
   * @var base64Binary $DateTimeStamp
   * @access public
   */
  public $DateTimeStamp;

  /**
   * 
   * @var DataDateTime $EnterDate
   * @access public
   */
  public $EnterDate;

  /**
   * 
   * @var DataDateTime $EditDate
   * @access public
   */
  public $EditDate;

  /**
   * 
   * @var string $EditedBy
   * @access public
   */
  public $EditedBy;

  /**
   * 
   * @var string $ReWriteUrl
   * @access public
   */
  public $ReWriteUrl;

  /**
   * 
   * @var boolean $IsKit
   * @access public
   */
  public $IsKit;

  /**
   * 
   * @var boolean $IsChildProduct
   * @access public
   */
  public $IsChildProduct;

  /**
   * 
   * @var boolean $NonInventory
   * @access public
   */
  public $NonInventory;

  /**
   * 
   * @var boolean $Discontinued
   * @access public
   */
  public $Discontinued;

  /**
   * 
   * @var DataDateTime $ETADate
   * @access public
   */
  public $ETADate;

  /**
   * 
   * @var DataInt32 $OnOrderQuantity
   * @access public
   */
  public $OnOrderQuantity;

  /**
   * 
   * @var string $StaticChildList
   * @access public
   */
  public $StaticChildList;

  /**
   * 
   * @var DataInt32 $AvailableRegionID
   * @access public
   */
  public $AvailableRegionID;

  /**
   * 
   * @var boolean $LimitShippingMethod
   * @access public
   */
  public $LimitShippingMethod;

  /**
   * 
   * @var boolean $CallForShippingWholeOrder
   * @access public
   */
  public $CallForShippingWholeOrder;

  /**
   * 
   * @var boolean $BreakOutShipping
   * @access public
   */
  public $BreakOutShipping;

  /**
   * 
   * @var string $ShippingClassificationCode
   * @access public
   */
  public $ShippingClassificationCode;

  /**
   * 
   * @var boolean $ExcludeParentFromDisplay
   * @access public
   */
  public $ExcludeParentFromDisplay;

  /**
   * 
   * @var boolean $DropShip
   * @access public
   */
  public $DropShip;

  /**
   * 
   * @var string $NoPriceMask
   * @access public
   */
  public $NoPriceMask;

  /**
   * 
   * @var DataInt32 $StartingQuantity
   * @access public
   */
  public $StartingQuantity;

  /**
   * 
   * @var string $TaxCode
   * @access public
   */
  public $TaxCode;

  /**
   * 
   * @var boolean $UseMapPricing
   * @access public
   */
  public $UseMapPricing;

  /**
   * 
   * @var string $LastItemNr
   * @access public
   */
  public $LastItemNr;

  /**
   * 
   * @var boolean $HasVisibleVariants
   * @access public
   */
  public $HasVisibleVariants;

  /**
   * 
   * @var DataInt32 $OverrideProductRatingDimensionGroupID
   * @access public
   */
  public $OverrideProductRatingDimensionGroupID;

  /**
   * 
   * @var DataDecimal $AverageReviewRating
   * @access public
   */
  public $AverageReviewRating;

  /**
   * 
   * @var DataInt32 $ReviewCount
   * @access public
   */
  public $ReviewCount;

  /**
   * 
   * @var boolean $ExcludeChildrenFromDisplay
   * @access public
   */
  public $ExcludeChildrenFromDisplay;

  /**
   * 
   * @var boolean $PricingFromParent
   * @access public
   */
  public $PricingFromParent;

  /**
   * 
   * @var DataInt32 $LowStockWarningAt
   * @access public
   */
  public $LowStockWarningAt;

  /**
   * 
   * @var boolean $LowStockWarningEnabled
   * @access public
   */
  public $LowStockWarningEnabled;

  /**
   * 
   * @var boolean $DoNotDiscount
   * @access public
   */
  public $DoNotDiscount;

  /**
   * 
   * @var string $HeadTags
   * @access public
   */
  public $HeadTags;

  /**
   * 
   * @var DataMoney $HandlingFee
   * @access public
   */
  public $HandlingFee;

  /**
   * 
   * @var string $CustomUpsellPageURL
   * @access public
   */
  public $CustomUpsellPageURL;

  /**
   * 
   * @var string $EProductSerialNumberFilePath
   * @access public
   */
  public $EProductSerialNumberFilePath;

  /**
   * 
   * @var boolean $HideVariantSurcharges
   * @access public
   */
  public $HideVariantSurcharges;

  /**
   * 
   * @var DataInt32 $MultiplesOfQuant
   * @access public
   */
  public $MultiplesOfQuant;

  /**
   * 
   * @var array $ProductVariantColTrans
   * @access public
   */
  public $ProductVariantColTrans;

  /**
   * 
   * @var array $PersonalizeColTrans
   * @access public
   */
  public $PersonalizeColTrans;

  /**
   * 
   * @var array $ProductColTrans
   * @access public
   */
  public $ProductColTrans;

  /**
   * 
   * @var array $CategoryColTrans
   * @access public
   */
  public $CategoryColTrans;

  /**
   * 
   * @var array $InactiveInStoreColTrans
   * @access public
   */
  public $InactiveInStoreColTrans;

  /**
   * 
   * @var array $ProductPricingColTrans
   * @access public
   */
  public $ProductPricingColTrans;

  /**
   * 
   * @var array $AttributeColTrans
   * @access public
   */
  public $AttributeColTrans;

  /**
   * 
   * @var array $VariantInventoryColTrans
   * @access public
   */
  public $VariantInventoryColTrans;

  /**
   * 
   * @var array $ProductPictureColTrans
   * @access public
   */
  public $ProductPictureColTrans;

  /**
   * 
   * @var array $ProductChildColTrans
   * @access public
   */
  public $ProductChildColTrans;

  /**
   * 
   * @var array $ShippingRateAdjustmentsColTrans
   * @access public
   */
  public $ShippingRateAdjustmentsColTrans;

  /**
   * 
   * @var array $VariantPackageColTrans
   * @access public
   */
  public $VariantPackageColTrans;

  /**
   * 
   * @var RelatedProductsTrans $RelatedProductsTrans
   * @access public
   */
  public $RelatedProductsTrans;

  /**
   * 
   * @var ProductGroupRelationsTrans $ProductGroupRelationsTrans
   * @access public
   */
  public $ProductGroupRelationsTrans;

  /**
   * 
   * @var boolean $ValidateCustomFields
   * @access public
   */
  public $ValidateCustomFields;

  /**
   * 
   * @var ProductGroupType $ProductGroupType
   * @access public
   */
  public $ProductGroupType;

  /**
   * 
   * @var Dictionary $CustomFields
   * @access public
   */
  public $CustomFields;

  /**
   * 
   * @var array $LastItemNrList
   * @access public
   */
  public $LastItemNrList;

  /**
   * 
   * @var boolean $UpdateReviewCountOnPost
   * @access public
   */
  public $UpdateReviewCountOnPost;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $itemID
   * @param string $itemNr
   * @param DataInt32 $supplierID
   * @param DataInt32 $mfgID
   * @param string $mfgPartNr
   * @param DataInt32 $catID
   * @param DataInt32 $productStatusID
   * @param string $itemName
   * @param string $bullets
   * @param string $shortDesc
   * @param string $itemImage
   * @param string $imageString
   * @param string $itemThumb
   * @param string $thumbString
   * @param string $longDesc2
   * @param string $longDesc3
   * @param string $longDesc4
   * @param string $longDesc5
   * @param string $sizeHeight
   * @param string $sizeLength
   * @param string $sizeWidth
   * @param DataInt32 $sizeUnitID
   * @param DataMoney $weight
   * @param DataInt32 $weightUnitID
   * @param DataMoney $cost
   * @param boolean $markupxcost
   * @param DataMoney $markup
   * @param DataMoney $price
   * @param DataMoney $retail
   * @param int $minQuant
   * @param int $maxQuant
   * @param DataInt32 $homepageFlag
   * @param DataInt32 $stock
   * @param string $keywords
   * @param DataInt32 $noTaxFlag
   * @param DataInt32 $ownBox
   * @param DataInt32 $hide
   * @param DataInt32 $sort
   * @param DataInt32 $eProductType
   * @param string $eProductURL
   * @param string $eProductPassword
   * @param DataInt32 $eProductRandomExpireDays
   * @param string $eProductEmail
   * @param DataInt32 $eProductMultipleDelivery
   * @param DataInt32 $warehouseID
   * @param DataInt32 $callForShippingFlag
   * @param string $QBListID
   * @param string $otherCategories
   * @param DataInt32 $callForPricingFlag
   * @param DataInt32 $rateAdjustmentTypeID
   * @param boolean $QBIsGroup
   * @param string $InactiveStores
   * @param string $metaDesc
   * @param string $pageTitle
   * @param boolean $useTabs
   * @param string $relatedName
   * @param boolean $useTabsThemeOverride
   * @param string $longDescName1
   * @param string $longDescName2
   * @param string $longDescName3
   * @param string $longDescName4
   * @param string $longDescName5
   * @param string $longDesc1
   * @param boolean $NonShippingItem
   * @param DataInt32 $eProductDeliveryLinkAction
   * @param boolean $UseVariantInventory
   * @param string $StaticManufacturerName
   * @param string $StaticAttributeList
   * @param string $StaticCategoryList
   * @param boolean $IsFeaturedItem
   * @param string $LongDesc1ExternalUrl
   * @param string $LongDesc2ExternalUrl
   * @param string $LongDesc3ExternalUrl
   * @param string $LongDesc4ExternalUrl
   * @param string $LongDesc5ExternalUrl
   * @param string $BulletsExternalUrl
   * @param boolean $CustomFlag1
   * @param boolean $CustomFlag2
   * @param boolean $CustomFlag3
   * @param boolean $CustomFlag4
   * @param boolean $CustomFlag5
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataDateTime $EnterDate
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param string $ReWriteUrl
   * @param boolean $IsKit
   * @param boolean $IsChildProduct
   * @param boolean $NonInventory
   * @param boolean $Discontinued
   * @param DataDateTime $ETADate
   * @param DataInt32 $OnOrderQuantity
   * @param string $StaticChildList
   * @param DataInt32 $AvailableRegionID
   * @param boolean $LimitShippingMethod
   * @param boolean $CallForShippingWholeOrder
   * @param boolean $BreakOutShipping
   * @param string $ShippingClassificationCode
   * @param boolean $ExcludeParentFromDisplay
   * @param boolean $DropShip
   * @param string $NoPriceMask
   * @param DataInt32 $StartingQuantity
   * @param string $TaxCode
   * @param boolean $UseMapPricing
   * @param string $LastItemNr
   * @param boolean $HasVisibleVariants
   * @param DataInt32 $OverrideProductRatingDimensionGroupID
   * @param DataDecimal $AverageReviewRating
   * @param DataInt32 $ReviewCount
   * @param boolean $ExcludeChildrenFromDisplay
   * @param boolean $PricingFromParent
   * @param DataInt32 $LowStockWarningAt
   * @param boolean $LowStockWarningEnabled
   * @param boolean $DoNotDiscount
   * @param string $HeadTags
   * @param DataMoney $HandlingFee
   * @param string $CustomUpsellPageURL
   * @param string $EProductSerialNumberFilePath
   * @param boolean $HideVariantSurcharges
   * @param DataInt32 $MultiplesOfQuant
   * @param array $ProductVariantColTrans
   * @param array $PersonalizeColTrans
   * @param array $ProductColTrans
   * @param array $CategoryColTrans
   * @param array $InactiveInStoreColTrans
   * @param array $ProductPricingColTrans
   * @param array $AttributeColTrans
   * @param array $VariantInventoryColTrans
   * @param array $ProductPictureColTrans
   * @param array $ProductChildColTrans
   * @param array $ShippingRateAdjustmentsColTrans
   * @param array $VariantPackageColTrans
   * @param RelatedProductsTrans $RelatedProductsTrans
   * @param ProductGroupRelationsTrans $ProductGroupRelationsTrans
   * @param boolean $ValidateCustomFields
   * @param ProductGroupType $ProductGroupType
   * @param Dictionary $CustomFields
   * @param array $LastItemNrList
   * @param boolean $UpdateReviewCountOnPost
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $itemID, $itemNr, $supplierID, $mfgID, $mfgPartNr, $catID, $productStatusID, $itemName, $bullets, $shortDesc, $itemImage, $imageString, $itemThumb, $thumbString, $longDesc2, $longDesc3, $longDesc4, $longDesc5, $sizeHeight, $sizeLength, $sizeWidth, $sizeUnitID, $weight, $weightUnitID, $cost, $markupxcost, $markup, $price, $retail, $minQuant, $maxQuant, $homepageFlag, $stock, $keywords, $noTaxFlag, $ownBox, $hide, $sort, $eProductType, $eProductURL, $eProductPassword, $eProductRandomExpireDays, $eProductEmail, $eProductMultipleDelivery, $warehouseID, $callForShippingFlag, $QBListID, $otherCategories, $callForPricingFlag, $rateAdjustmentTypeID, $QBIsGroup, $InactiveStores, $metaDesc, $pageTitle, $useTabs, $relatedName, $useTabsThemeOverride, $longDescName1, $longDescName2, $longDescName3, $longDescName4, $longDescName5, $longDesc1, $NonShippingItem, $eProductDeliveryLinkAction, $UseVariantInventory, $StaticManufacturerName, $StaticAttributeList, $StaticCategoryList, $IsFeaturedItem, $LongDesc1ExternalUrl, $LongDesc2ExternalUrl, $LongDesc3ExternalUrl, $LongDesc4ExternalUrl, $LongDesc5ExternalUrl, $BulletsExternalUrl, $CustomFlag1, $CustomFlag2, $CustomFlag3, $CustomFlag4, $CustomFlag5, $EnteredBy, $DateTimeStamp, $EnterDate, $EditDate, $EditedBy, $ReWriteUrl, $IsKit, $IsChildProduct, $NonInventory, $Discontinued, $ETADate, $OnOrderQuantity, $StaticChildList, $AvailableRegionID, $LimitShippingMethod, $CallForShippingWholeOrder, $BreakOutShipping, $ShippingClassificationCode, $ExcludeParentFromDisplay, $DropShip, $NoPriceMask, $StartingQuantity, $TaxCode, $UseMapPricing, $LastItemNr, $HasVisibleVariants, $OverrideProductRatingDimensionGroupID, $AverageReviewRating, $ReviewCount, $ExcludeChildrenFromDisplay, $PricingFromParent, $LowStockWarningAt, $LowStockWarningEnabled, $DoNotDiscount, $HeadTags, $HandlingFee, $CustomUpsellPageURL, $EProductSerialNumberFilePath, $HideVariantSurcharges, $MultiplesOfQuant, $ProductVariantColTrans, $PersonalizeColTrans, $ProductColTrans, $CategoryColTrans, $InactiveInStoreColTrans, $ProductPricingColTrans, $AttributeColTrans, $VariantInventoryColTrans, $ProductPictureColTrans, $ProductChildColTrans, $ShippingRateAdjustmentsColTrans, $VariantPackageColTrans, $RelatedProductsTrans, $ProductGroupRelationsTrans, $ValidateCustomFields, $ProductGroupType, $CustomFields, $LastItemNrList, $UpdateReviewCountOnPost)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->itemID = $itemID;
    $this->itemNr = $itemNr;
    $this->supplierID = $supplierID;
    $this->mfgID = $mfgID;
    $this->mfgPartNr = $mfgPartNr;
    $this->catID = $catID;
    $this->productStatusID = $productStatusID;
    $this->itemName = $itemName;
    $this->bullets = $bullets;
    $this->shortDesc = $shortDesc;
    $this->itemImage = $itemImage;
    $this->imageString = $imageString;
    $this->itemThumb = $itemThumb;
    $this->thumbString = $thumbString;
    $this->longDesc2 = $longDesc2;
    $this->longDesc3 = $longDesc3;
    $this->longDesc4 = $longDesc4;
    $this->longDesc5 = $longDesc5;
    $this->sizeHeight = $sizeHeight;
    $this->sizeLength = $sizeLength;
    $this->sizeWidth = $sizeWidth;
    $this->sizeUnitID = $sizeUnitID;
    $this->weight = $weight;
    $this->weightUnitID = $weightUnitID;
    $this->cost = $cost;
    $this->markupxcost = $markupxcost;
    $this->markup = $markup;
    $this->price = $price;
    $this->retail = $retail;
    $this->minQuant = $minQuant;
    $this->maxQuant = $maxQuant;
    $this->homepageFlag = $homepageFlag;
    $this->stock = $stock;
    $this->keywords = $keywords;
    $this->noTaxFlag = $noTaxFlag;
    $this->ownBox = $ownBox;
    $this->hide = $hide;
    $this->sort = $sort;
    $this->eProductType = $eProductType;
    $this->eProductURL = $eProductURL;
    $this->eProductPassword = $eProductPassword;
    $this->eProductRandomExpireDays = $eProductRandomExpireDays;
    $this->eProductEmail = $eProductEmail;
    $this->eProductMultipleDelivery = $eProductMultipleDelivery;
    $this->warehouseID = $warehouseID;
    $this->callForShippingFlag = $callForShippingFlag;
    $this->QBListID = $QBListID;
    $this->otherCategories = $otherCategories;
    $this->callForPricingFlag = $callForPricingFlag;
    $this->rateAdjustmentTypeID = $rateAdjustmentTypeID;
    $this->QBIsGroup = $QBIsGroup;
    $this->InactiveStores = $InactiveStores;
    $this->metaDesc = $metaDesc;
    $this->pageTitle = $pageTitle;
    $this->useTabs = $useTabs;
    $this->relatedName = $relatedName;
    $this->useTabsThemeOverride = $useTabsThemeOverride;
    $this->longDescName1 = $longDescName1;
    $this->longDescName2 = $longDescName2;
    $this->longDescName3 = $longDescName3;
    $this->longDescName4 = $longDescName4;
    $this->longDescName5 = $longDescName5;
    $this->longDesc1 = $longDesc1;
    $this->NonShippingItem = $NonShippingItem;
    $this->eProductDeliveryLinkAction = $eProductDeliveryLinkAction;
    $this->UseVariantInventory = $UseVariantInventory;
    $this->StaticManufacturerName = $StaticManufacturerName;
    $this->StaticAttributeList = $StaticAttributeList;
    $this->StaticCategoryList = $StaticCategoryList;
    $this->IsFeaturedItem = $IsFeaturedItem;
    $this->LongDesc1ExternalUrl = $LongDesc1ExternalUrl;
    $this->LongDesc2ExternalUrl = $LongDesc2ExternalUrl;
    $this->LongDesc3ExternalUrl = $LongDesc3ExternalUrl;
    $this->LongDesc4ExternalUrl = $LongDesc4ExternalUrl;
    $this->LongDesc5ExternalUrl = $LongDesc5ExternalUrl;
    $this->BulletsExternalUrl = $BulletsExternalUrl;
    $this->CustomFlag1 = $CustomFlag1;
    $this->CustomFlag2 = $CustomFlag2;
    $this->CustomFlag3 = $CustomFlag3;
    $this->CustomFlag4 = $CustomFlag4;
    $this->CustomFlag5 = $CustomFlag5;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->EnterDate = $EnterDate;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->ReWriteUrl = $ReWriteUrl;
    $this->IsKit = $IsKit;
    $this->IsChildProduct = $IsChildProduct;
    $this->NonInventory = $NonInventory;
    $this->Discontinued = $Discontinued;
    $this->ETADate = $ETADate;
    $this->OnOrderQuantity = $OnOrderQuantity;
    $this->StaticChildList = $StaticChildList;
    $this->AvailableRegionID = $AvailableRegionID;
    $this->LimitShippingMethod = $LimitShippingMethod;
    $this->CallForShippingWholeOrder = $CallForShippingWholeOrder;
    $this->BreakOutShipping = $BreakOutShipping;
    $this->ShippingClassificationCode = $ShippingClassificationCode;
    $this->ExcludeParentFromDisplay = $ExcludeParentFromDisplay;
    $this->DropShip = $DropShip;
    $this->NoPriceMask = $NoPriceMask;
    $this->StartingQuantity = $StartingQuantity;
    $this->TaxCode = $TaxCode;
    $this->UseMapPricing = $UseMapPricing;
    $this->LastItemNr = $LastItemNr;
    $this->HasVisibleVariants = $HasVisibleVariants;
    $this->OverrideProductRatingDimensionGroupID = $OverrideProductRatingDimensionGroupID;
    $this->AverageReviewRating = $AverageReviewRating;
    $this->ReviewCount = $ReviewCount;
    $this->ExcludeChildrenFromDisplay = $ExcludeChildrenFromDisplay;
    $this->PricingFromParent = $PricingFromParent;
    $this->LowStockWarningAt = $LowStockWarningAt;
    $this->LowStockWarningEnabled = $LowStockWarningEnabled;
    $this->DoNotDiscount = $DoNotDiscount;
    $this->HeadTags = $HeadTags;
    $this->HandlingFee = $HandlingFee;
    $this->CustomUpsellPageURL = $CustomUpsellPageURL;
    $this->EProductSerialNumberFilePath = $EProductSerialNumberFilePath;
    $this->HideVariantSurcharges = $HideVariantSurcharges;
    $this->MultiplesOfQuant = $MultiplesOfQuant;
    $this->ProductVariantColTrans = $ProductVariantColTrans;
    $this->PersonalizeColTrans = $PersonalizeColTrans;
    $this->ProductColTrans = $ProductColTrans;
    $this->CategoryColTrans = $CategoryColTrans;
    $this->InactiveInStoreColTrans = $InactiveInStoreColTrans;
    $this->ProductPricingColTrans = $ProductPricingColTrans;
    $this->AttributeColTrans = $AttributeColTrans;
    $this->VariantInventoryColTrans = $VariantInventoryColTrans;
    $this->ProductPictureColTrans = $ProductPictureColTrans;
    $this->ProductChildColTrans = $ProductChildColTrans;
    $this->ShippingRateAdjustmentsColTrans = $ShippingRateAdjustmentsColTrans;
    $this->VariantPackageColTrans = $VariantPackageColTrans;
    $this->RelatedProductsTrans = $RelatedProductsTrans;
    $this->ProductGroupRelationsTrans = $ProductGroupRelationsTrans;
    $this->ValidateCustomFields = $ValidateCustomFields;
    $this->ProductGroupType = $ProductGroupType;
    $this->CustomFields = $CustomFields;
    $this->LastItemNrList = $LastItemNrList;
    $this->UpdateReviewCountOnPost = $UpdateReviewCountOnPost;
  }

}

}
