<?php

if (!class_exists("CartTrans", false)) 
{
class CartTrans
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
   * @var DataInt32 $ID
   * @access public
   */
  public $ID;

  /**
   * 
   * @var string $UID
   * @access public
   */
  public $UID;

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
   * @var DataInt32 $quantity
   * @access public
   */
  public $quantity;

  /**
   * 
   * @var DataMoney $price
   * @access public
   */
  public $price;

  /**
   * 
   * @var DataMoney $cost
   * @access public
   */
  public $cost;

  /**
   * 
   * @var DataInt32 $personalizeID
   * @access public
   */
  public $personalizeID;

  /**
   * 
   * @var string $personalizeString
   * @access public
   */
  public $personalizeString;

  /**
   * 
   * @var DataInt32 $complete
   * @access public
   */
  public $complete;

  /**
   * 
   * @var DataInt32 $discountItem
   * @access public
   */
  public $discountItem;

  /**
   * 
   * @var DataInt32 $shippingAddressID
   * @access public
   */
  public $shippingAddressID;

  /**
   * 
   * @var DataMoney $weight
   * @access public
   */
  public $weight;

  /**
   * 
   * @var DataInt32 $callForPricingFlag
   * @access public
   */
  public $callForPricingFlag;

  /**
   * 
   * @var DataDateTime $dateStamp
   * @access public
   */
  public $dateStamp;

  /**
   * 
   * @var string $itemThumb
   * @access public
   */
  public $itemThumb;

  /**
   * 
   * @var string $itemURL
   * @access public
   */
  public $itemURL;

  /**
   * 
   * @var boolean $noTaxFlag
   * @access public
   */
  public $noTaxFlag;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var boolean $OverridePrice
   * @access public
   */
  public $OverridePrice;

  /**
   * 
   * @var string $VariantGroupIDs
   * @access public
   */
  public $VariantGroupIDs;

  /**
   * 
   * @var string $VariantIDs
   * @access public
   */
  public $VariantIDs;

  /**
   * 
   * @var string $PersonalizeIDs
   * @access public
   */
  public $PersonalizeIDs;

  /**
   * 
   * @var string $PersonalizeStrings
   * @access public
   */
  public $PersonalizeStrings;

  /**
   * 
   * @var DataInt32 $SessionID
   * @access public
   */
  public $SessionID;

  /**
   * 
   * @var string $ItemName
   * @access public
   */
  public $ItemName;

  /**
   * 
   * @var DataInt32 $CallForShippingFlag
   * @access public
   */
  public $CallForShippingFlag;

  /**
   * 
   * @var DataInt32 $WeightUnitID
   * @access public
   */
  public $WeightUnitID;

  /**
   * 
   * @var boolean $NonShippingItem
   * @access public
   */
  public $NonShippingItem;

  /**
   * 
   * @var DataInt32 $OwnBox
   * @access public
   */
  public $OwnBox;

  /**
   * 
   * @var DataInt32 $WarehouseID
   * @access public
   */
  public $WarehouseID;

  /**
   * 
   * @var DataInt32 $CustomerID
   * @access public
   */
  public $CustomerID;

  /**
   * 
   * @var DataInt32 $OrderedQuantity
   * @access public
   */
  public $OrderedQuantity;

  /**
   * 
   * @var DataInt32 $OrderRemovedFromInventoryQuantity
   * @access public
   */
  public $OrderRemovedFromInventoryQuantity;

  /**
   * 
   * @var string $eProductDeliveryLinkAction
   * @access public
   */
  public $eProductDeliveryLinkAction;

  /**
   * 
   * @var DataInt32 $Delivered
   * @access public
   */
  public $Delivered;

  /**
   * 
   * @var DataInt32 $ParentProductID
   * @access public
   */
  public $ParentProductID;

  /**
   * 
   * @var DataInt32 $ParentCartID
   * @access public
   */
  public $ParentCartID;

  /**
   * 
   * @var boolean $BindQuantityToParentProduct
   * @access public
   */
  public $BindQuantityToParentProduct;

  /**
   * 
   * @var DataMoney $NonUpsellPrice
   * @access public
   */
  public $NonUpsellPrice;

  /**
   * 
   * @var boolean $NonUpsellNonShippingItem
   * @access public
   */
  public $NonUpsellNonShippingItem;

  /**
   * 
   * @var string $MfgItemNr
   * @access public
   */
  public $MfgItemNr;

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
   * @var boolean $IsRequired
   * @access public
   */
  public $IsRequired;

  /**
   * 
   * @var string $VariationStrings
   * @access public
   */
  public $VariationStrings;

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
   * @var DataDateTime $EnterDate
   * @access public
   */
  public $EnterDate;

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
   * @var boolean $DropShip
   * @access public
   */
  public $DropShip;

  /**
   * 
   * @var string $ManufacturerName
   * @access public
   */
  public $ManufacturerName;

  /**
   * 
   * @var DataMoney $AdjustLineSubTotalBy
   * @access public
   */
  public $AdjustLineSubTotalBy;

  /**
   * 
   * @var DataMoney $SizeHeight
   * @access public
   */
  public $SizeHeight;

  /**
   * 
   * @var DataMoney $SizeLength
   * @access public
   */
  public $SizeLength;

  /**
   * 
   * @var DataMoney $SizeWidth
   * @access public
   */
  public $SizeWidth;

  /**
   * 
   * @var DataInt32 $SizeUnitID
   * @access public
   */
  public $SizeUnitID;

  /**
   * 
   * @var DataInt32 $RequiredChildQty
   * @access public
   */
  public $RequiredChildQty;

  /**
   * 
   * @var DataInt32 $VariantInventoryID
   * @access public
   */
  public $VariantInventoryID;

  /**
   * 
   * @var string $TaxCode
   * @access public
   */
  public $TaxCode;

  /**
   * 
   * @var DataInt32 $OrderItemsID
   * @access public
   */
  public $OrderItemsID;

  /**
   * 
   * @var string $ItemNrFull
   * @access public
   */
  public $ItemNrFull;

  /**
   * 
   * @var string $PayPalToken
   * @access public
   */
  public $PayPalToken;

  /**
   * 
   * @var string $PayPalPayerID
   * @access public
   */
  public $PayPalPayerID;

  /**
   * 
   * @var boolean $ExcludeChildrenFromDisplay
   * @access public
   */
  public $ExcludeChildrenFromDisplay;

  /**
   * 
   * @var DataInt32 $CartInfoID
   * @access public
   */
  public $CartInfoID;

  /**
   * 
   * @var DataInt32 $FromWishListCartID
   * @access public
   */
  public $FromWishListCartID;

  /**
   * 
   * @var DataInt32 $WishListPurchasedQuantity
   * @access public
   */
  public $WishListPurchasedQuantity;

  /**
   * 
   * @var string $AdminComments
   * @access public
   */
  public $AdminComments;

  /**
   * 
   * @var boolean $DoNotDiscount
   * @access public
   */
  public $DoNotDiscount;

  /**
   * 
   * @var string $LineItemNote
   * @access public
   */
  public $LineItemNote;

  /**
   * 
   * @var DataMoney $HandlingFee
   * @access public
   */
  public $HandlingFee;

  /**
   * 
   * @var string $GiftMessage
   * @access public
   */
  public $GiftMessage;

  /**
   * 
   * @var DataDateTime $DeliveryDate
   * @access public
   */
  public $DeliveryDate;

  /**
   * 
   * @var DataInt32 $PriceDerivedFromPriceCalculationID
   * @access public
   */
  public $PriceDerivedFromPriceCalculationID;

  /**
   * 
   * @var DataInt32 $PriceDerivedFromCustomerTypeID
   * @access public
   */
  public $PriceDerivedFromCustomerTypeID;

  /**
   * 
   * @var boolean $PriceDerivedIncludesTax
   * @access public
   */
  public $PriceDerivedIncludesTax;

  /**
   * 
   * @var DataInt32 $PriceDerivedFromQuantity
   * @access public
   */
  public $PriceDerivedFromQuantity;

  /**
   * 
   * @var DataMoney $DiscountAmount
   * @access public
   */
  public $DiscountAmount;

  /**
   * 
   * @var DataMoney $DiscountPercentage
   * @access public
   */
  public $DiscountPercentage;

  /**
   * 
   * @var string $EProductSerialNumber
   * @access public
   */
  public $EProductSerialNumber;

  /**
   * 
   * @var array $CartVariantColTrans
   * @access public
   */
  public $CartVariantColTrans;

  /**
   * 
   * @var array $CartChildColTrans
   * @access public
   */
  public $CartChildColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ID
   * @param string $UID
   * @param DataInt32 $itemID
   * @param string $itemNr
   * @param DataInt32 $quantity
   * @param DataMoney $price
   * @param DataMoney $cost
   * @param DataInt32 $personalizeID
   * @param string $personalizeString
   * @param DataInt32 $complete
   * @param DataInt32 $discountItem
   * @param DataInt32 $shippingAddressID
   * @param DataMoney $weight
   * @param DataInt32 $callForPricingFlag
   * @param DataDateTime $dateStamp
   * @param string $itemThumb
   * @param string $itemURL
   * @param boolean $noTaxFlag
   * @param DataInt32 $StoreID
   * @param boolean $OverridePrice
   * @param string $VariantGroupIDs
   * @param string $VariantIDs
   * @param string $PersonalizeIDs
   * @param string $PersonalizeStrings
   * @param DataInt32 $SessionID
   * @param string $ItemName
   * @param DataInt32 $CallForShippingFlag
   * @param DataInt32 $WeightUnitID
   * @param boolean $NonShippingItem
   * @param DataInt32 $OwnBox
   * @param DataInt32 $WarehouseID
   * @param DataInt32 $CustomerID
   * @param DataInt32 $OrderedQuantity
   * @param DataInt32 $OrderRemovedFromInventoryQuantity
   * @param string $eProductDeliveryLinkAction
   * @param DataInt32 $Delivered
   * @param DataInt32 $ParentProductID
   * @param DataInt32 $ParentCartID
   * @param boolean $BindQuantityToParentProduct
   * @param DataMoney $NonUpsellPrice
   * @param boolean $NonUpsellNonShippingItem
   * @param string $MfgItemNr
   * @param boolean $LimitShippingMethod
   * @param boolean $CallForShippingWholeOrder
   * @param boolean $BreakOutShipping
   * @param string $ShippingClassificationCode
   * @param boolean $IsRequired
   * @param string $VariationStrings
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $DropShip
   * @param string $ManufacturerName
   * @param DataMoney $AdjustLineSubTotalBy
   * @param DataMoney $SizeHeight
   * @param DataMoney $SizeLength
   * @param DataMoney $SizeWidth
   * @param DataInt32 $SizeUnitID
   * @param DataInt32 $RequiredChildQty
   * @param DataInt32 $VariantInventoryID
   * @param string $TaxCode
   * @param DataInt32 $OrderItemsID
   * @param string $ItemNrFull
   * @param string $PayPalToken
   * @param string $PayPalPayerID
   * @param boolean $ExcludeChildrenFromDisplay
   * @param DataInt32 $CartInfoID
   * @param DataInt32 $FromWishListCartID
   * @param DataInt32 $WishListPurchasedQuantity
   * @param string $AdminComments
   * @param boolean $DoNotDiscount
   * @param string $LineItemNote
   * @param DataMoney $HandlingFee
   * @param string $GiftMessage
   * @param DataDateTime $DeliveryDate
   * @param DataInt32 $PriceDerivedFromPriceCalculationID
   * @param DataInt32 $PriceDerivedFromCustomerTypeID
   * @param boolean $PriceDerivedIncludesTax
   * @param DataInt32 $PriceDerivedFromQuantity
   * @param DataMoney $DiscountAmount
   * @param DataMoney $DiscountPercentage
   * @param string $EProductSerialNumber
   * @param array $CartVariantColTrans
   * @param array $CartChildColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $UID, $itemID, $itemNr, $quantity, $price, $cost, $personalizeID, $personalizeString, $complete, $discountItem, $shippingAddressID, $weight, $callForPricingFlag, $dateStamp, $itemThumb, $itemURL, $noTaxFlag, $StoreID, $OverridePrice, $VariantGroupIDs, $VariantIDs, $PersonalizeIDs, $PersonalizeStrings, $SessionID, $ItemName, $CallForShippingFlag, $WeightUnitID, $NonShippingItem, $OwnBox, $WarehouseID, $CustomerID, $OrderedQuantity, $OrderRemovedFromInventoryQuantity, $eProductDeliveryLinkAction, $Delivered, $ParentProductID, $ParentCartID, $BindQuantityToParentProduct, $NonUpsellPrice, $NonUpsellNonShippingItem, $MfgItemNr, $LimitShippingMethod, $CallForShippingWholeOrder, $BreakOutShipping, $ShippingClassificationCode, $IsRequired, $VariationStrings, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DropShip, $ManufacturerName, $AdjustLineSubTotalBy, $SizeHeight, $SizeLength, $SizeWidth, $SizeUnitID, $RequiredChildQty, $VariantInventoryID, $TaxCode, $OrderItemsID, $ItemNrFull, $PayPalToken, $PayPalPayerID, $ExcludeChildrenFromDisplay, $CartInfoID, $FromWishListCartID, $WishListPurchasedQuantity, $AdminComments, $DoNotDiscount, $LineItemNote, $HandlingFee, $GiftMessage, $DeliveryDate, $PriceDerivedFromPriceCalculationID, $PriceDerivedFromCustomerTypeID, $PriceDerivedIncludesTax, $PriceDerivedFromQuantity, $DiscountAmount, $DiscountPercentage, $EProductSerialNumber, $CartVariantColTrans, $CartChildColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->UID = $UID;
    $this->itemID = $itemID;
    $this->itemNr = $itemNr;
    $this->quantity = $quantity;
    $this->price = $price;
    $this->cost = $cost;
    $this->personalizeID = $personalizeID;
    $this->personalizeString = $personalizeString;
    $this->complete = $complete;
    $this->discountItem = $discountItem;
    $this->shippingAddressID = $shippingAddressID;
    $this->weight = $weight;
    $this->callForPricingFlag = $callForPricingFlag;
    $this->dateStamp = $dateStamp;
    $this->itemThumb = $itemThumb;
    $this->itemURL = $itemURL;
    $this->noTaxFlag = $noTaxFlag;
    $this->StoreID = $StoreID;
    $this->OverridePrice = $OverridePrice;
    $this->VariantGroupIDs = $VariantGroupIDs;
    $this->VariantIDs = $VariantIDs;
    $this->PersonalizeIDs = $PersonalizeIDs;
    $this->PersonalizeStrings = $PersonalizeStrings;
    $this->SessionID = $SessionID;
    $this->ItemName = $ItemName;
    $this->CallForShippingFlag = $CallForShippingFlag;
    $this->WeightUnitID = $WeightUnitID;
    $this->NonShippingItem = $NonShippingItem;
    $this->OwnBox = $OwnBox;
    $this->WarehouseID = $WarehouseID;
    $this->CustomerID = $CustomerID;
    $this->OrderedQuantity = $OrderedQuantity;
    $this->OrderRemovedFromInventoryQuantity = $OrderRemovedFromInventoryQuantity;
    $this->eProductDeliveryLinkAction = $eProductDeliveryLinkAction;
    $this->Delivered = $Delivered;
    $this->ParentProductID = $ParentProductID;
    $this->ParentCartID = $ParentCartID;
    $this->BindQuantityToParentProduct = $BindQuantityToParentProduct;
    $this->NonUpsellPrice = $NonUpsellPrice;
    $this->NonUpsellNonShippingItem = $NonUpsellNonShippingItem;
    $this->MfgItemNr = $MfgItemNr;
    $this->LimitShippingMethod = $LimitShippingMethod;
    $this->CallForShippingWholeOrder = $CallForShippingWholeOrder;
    $this->BreakOutShipping = $BreakOutShipping;
    $this->ShippingClassificationCode = $ShippingClassificationCode;
    $this->IsRequired = $IsRequired;
    $this->VariationStrings = $VariationStrings;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DropShip = $DropShip;
    $this->ManufacturerName = $ManufacturerName;
    $this->AdjustLineSubTotalBy = $AdjustLineSubTotalBy;
    $this->SizeHeight = $SizeHeight;
    $this->SizeLength = $SizeLength;
    $this->SizeWidth = $SizeWidth;
    $this->SizeUnitID = $SizeUnitID;
    $this->RequiredChildQty = $RequiredChildQty;
    $this->VariantInventoryID = $VariantInventoryID;
    $this->TaxCode = $TaxCode;
    $this->OrderItemsID = $OrderItemsID;
    $this->ItemNrFull = $ItemNrFull;
    $this->PayPalToken = $PayPalToken;
    $this->PayPalPayerID = $PayPalPayerID;
    $this->ExcludeChildrenFromDisplay = $ExcludeChildrenFromDisplay;
    $this->CartInfoID = $CartInfoID;
    $this->FromWishListCartID = $FromWishListCartID;
    $this->WishListPurchasedQuantity = $WishListPurchasedQuantity;
    $this->AdminComments = $AdminComments;
    $this->DoNotDiscount = $DoNotDiscount;
    $this->LineItemNote = $LineItemNote;
    $this->HandlingFee = $HandlingFee;
    $this->GiftMessage = $GiftMessage;
    $this->DeliveryDate = $DeliveryDate;
    $this->PriceDerivedFromPriceCalculationID = $PriceDerivedFromPriceCalculationID;
    $this->PriceDerivedFromCustomerTypeID = $PriceDerivedFromCustomerTypeID;
    $this->PriceDerivedIncludesTax = $PriceDerivedIncludesTax;
    $this->PriceDerivedFromQuantity = $PriceDerivedFromQuantity;
    $this->DiscountAmount = $DiscountAmount;
    $this->DiscountPercentage = $DiscountPercentage;
    $this->EProductSerialNumber = $EProductSerialNumber;
    $this->CartVariantColTrans = $CartVariantColTrans;
    $this->CartChildColTrans = $CartChildColTrans;
  }

}

}
