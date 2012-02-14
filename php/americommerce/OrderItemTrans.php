<?php

if (!class_exists("OrderItemTrans", false)) 
{
class OrderItemTrans
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
   * @var DataInt32 $orderItemsID
   * @access public
   */
  public $orderItemsID;

  /**
   * 
   * @var DataInt32 $orderID
   * @access public
   */
  public $orderID;

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
   * @var string $itemName
   * @access public
   */
  public $itemName;

  /**
   * 
   * @var string $variations
   * @access public
   */
  public $variations;

  /**
   * 
   * @var string $customizations
   * @access public
   */
  public $customizations;

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
   * @var DataInt32 $quantity
   * @access public
   */
  public $quantity;

  /**
   * 
   * @var string $eProductPassword
   * @access public
   */
  public $eProductPassword;

  /**
   * 
   * @var DataInt32 $delivered
   * @access public
   */
  public $delivered;

  /**
   * 
   * @var guid $orderItemsUID
   * @access public
   */
  public $orderItemsUID;

  /**
   * 
   * @var DataInt32 $eProductDeliveryLinkAction
   * @access public
   */
  public $eProductDeliveryLinkAction;

  /**
   * 
   * @var boolean $IsDiscountItem
   * @access public
   */
  public $IsDiscountItem;

  /**
   * 
   * @var DataMoney $Weight
   * @access public
   */
  public $Weight;

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
   * @var string $ItemThumb
   * @access public
   */
  public $ItemThumb;

  /**
   * 
   * @var string $ItemUrl
   * @access public
   */
  public $ItemUrl;

  /**
   * 
   * @var DataInt32 $PersonalizeID
   * @access public
   */
  public $PersonalizeID;

  /**
   * 
   * @var string $PersonalizeIDs
   * @access public
   */
  public $PersonalizeIDs;

  /**
   * 
   * @var string $PersonalizeString
   * @access public
   */
  public $PersonalizeString;

  /**
   * 
   * @var string $PersonalizeStrings
   * @access public
   */
  public $PersonalizeStrings;

  /**
   * 
   * @var boolean $IsTaxable
   * @access public
   */
  public $IsTaxable;

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
   * @var boolean $OwnBox
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
   * @var DataInt32 $RemovedFromInventoryQuantity
   * @access public
   */
  public $RemovedFromInventoryQuantity;

  /**
   * 
   * @var DataInt32 $OrderedQuantity
   * @access public
   */
  public $OrderedQuantity;

  /**
   * 
   * @var DataInt32 $VariantInventoryID
   * @access public
   */
  public $VariantInventoryID;

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
   * @var DataInt32 $ParentProductID
   * @access public
   */
  public $ParentProductID;

  /**
   * 
   * @var DataInt32 $ParentOrderItemID
   * @access public
   */
  public $ParentOrderItemID;

  /**
   * 
   * @var boolean $BindQuantityToParent
   * @access public
   */
  public $BindQuantityToParent;

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
   * @var string $ManufacturerPartNumber
   * @access public
   */
  public $ManufacturerPartNumber;

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
   * @var string $TaxCode
   * @access public
   */
  public $TaxCode;

  /**
   * 
   * @var string $ItemNrFull
   * @access public
   */
  public $ItemNrFull;

  /**
   * 
   * @var boolean $ExludeChildrenFromDisplay
   * @access public
   */
  public $ExludeChildrenFromDisplay;

  /**
   * 
   * @var boolean $IsRequired
   * @access public
   */
  public $IsRequired;

  /**
   * 
   * @var DataInt32 $RequiredChildQty
   * @access public
   */
  public $RequiredChildQty;

  /**
   * 
   * @var boolean $OverridePrice
   * @access public
   */
  public $OverridePrice;

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
   * @var DataInt32 $ShippingAddressID
   * @access public
   */
  public $ShippingAddressID;

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
   * @var string $eProductCustomUrl
   * @access public
   */
  public $eProductCustomUrl;

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
   * @var string $RMANumber
   * @access public
   */
  public $RMANumber;

  /**
   * 
   * @var array $OrderShippingOrderItemsColTrans
   * @access public
   */
  public $OrderShippingOrderItemsColTrans;

  /**
   * 
   * @var OrderShippingOrderItemsTrans $OrderShippingOrderItemsTrans
   * @access public
   */
  public $OrderShippingOrderItemsTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $orderItemsID
   * @param DataInt32 $orderID
   * @param DataInt32 $itemID
   * @param string $itemNr
   * @param string $itemName
   * @param string $variations
   * @param string $customizations
   * @param DataMoney $price
   * @param DataMoney $cost
   * @param DataInt32 $quantity
   * @param string $eProductPassword
   * @param DataInt32 $delivered
   * @param guid $orderItemsUID
   * @param DataInt32 $eProductDeliveryLinkAction
   * @param boolean $IsDiscountItem
   * @param DataMoney $Weight
   * @param string $VariantGroupIDs
   * @param string $VariantIDs
   * @param string $ItemThumb
   * @param string $ItemUrl
   * @param DataInt32 $PersonalizeID
   * @param string $PersonalizeIDs
   * @param string $PersonalizeString
   * @param string $PersonalizeStrings
   * @param boolean $IsTaxable
   * @param DataInt32 $CallForShippingFlag
   * @param DataInt32 $WeightUnitID
   * @param boolean $NonShippingItem
   * @param boolean $OwnBox
   * @param DataInt32 $WarehouseID
   * @param DataInt32 $RemovedFromInventoryQuantity
   * @param DataInt32 $OrderedQuantity
   * @param DataInt32 $VariantInventoryID
   * @param boolean $LimitShippingMethod
   * @param boolean $CallForShippingWholeOrder
   * @param boolean $BreakOutShipping
   * @param string $ShippingClassificationCode
   * @param DataInt32 $ParentProductID
   * @param DataInt32 $ParentOrderItemID
   * @param boolean $BindQuantityToParent
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $DropShip
   * @param string $ManufacturerName
   * @param string $ManufacturerPartNumber
   * @param DataMoney $AdjustLineSubTotalBy
   * @param DataMoney $SizeHeight
   * @param DataMoney $SizeLength
   * @param DataMoney $SizeWidth
   * @param DataInt32 $SizeUnitID
   * @param string $TaxCode
   * @param string $ItemNrFull
   * @param boolean $ExludeChildrenFromDisplay
   * @param boolean $IsRequired
   * @param DataInt32 $RequiredChildQty
   * @param boolean $OverridePrice
   * @param DataInt32 $FromWishListCartID
   * @param DataInt32 $WishListPurchasedQuantity
   * @param string $AdminComments
   * @param boolean $DoNotDiscount
   * @param string $LineItemNote
   * @param DataInt32 $ShippingAddressID
   * @param string $GiftMessage
   * @param DataDateTime $DeliveryDate
   * @param string $eProductCustomUrl
   * @param DataMoney $DiscountAmount
   * @param DataMoney $DiscountPercentage
   * @param string $EProductSerialNumber
   * @param string $RMANumber
   * @param array $OrderShippingOrderItemsColTrans
   * @param OrderShippingOrderItemsTrans $OrderShippingOrderItemsTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $orderItemsID, $orderID, $itemID, $itemNr, $itemName, $variations, $customizations, $price, $cost, $quantity, $eProductPassword, $delivered, $orderItemsUID, $eProductDeliveryLinkAction, $IsDiscountItem, $Weight, $VariantGroupIDs, $VariantIDs, $ItemThumb, $ItemUrl, $PersonalizeID, $PersonalizeIDs, $PersonalizeString, $PersonalizeStrings, $IsTaxable, $CallForShippingFlag, $WeightUnitID, $NonShippingItem, $OwnBox, $WarehouseID, $RemovedFromInventoryQuantity, $OrderedQuantity, $VariantInventoryID, $LimitShippingMethod, $CallForShippingWholeOrder, $BreakOutShipping, $ShippingClassificationCode, $ParentProductID, $ParentOrderItemID, $BindQuantityToParent, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DropShip, $ManufacturerName, $ManufacturerPartNumber, $AdjustLineSubTotalBy, $SizeHeight, $SizeLength, $SizeWidth, $SizeUnitID, $TaxCode, $ItemNrFull, $ExludeChildrenFromDisplay, $IsRequired, $RequiredChildQty, $OverridePrice, $FromWishListCartID, $WishListPurchasedQuantity, $AdminComments, $DoNotDiscount, $LineItemNote, $ShippingAddressID, $GiftMessage, $DeliveryDate, $eProductCustomUrl, $DiscountAmount, $DiscountPercentage, $EProductSerialNumber, $RMANumber, $OrderShippingOrderItemsColTrans, $OrderShippingOrderItemsTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->orderItemsID = $orderItemsID;
    $this->orderID = $orderID;
    $this->itemID = $itemID;
    $this->itemNr = $itemNr;
    $this->itemName = $itemName;
    $this->variations = $variations;
    $this->customizations = $customizations;
    $this->price = $price;
    $this->cost = $cost;
    $this->quantity = $quantity;
    $this->eProductPassword = $eProductPassword;
    $this->delivered = $delivered;
    $this->orderItemsUID = $orderItemsUID;
    $this->eProductDeliveryLinkAction = $eProductDeliveryLinkAction;
    $this->IsDiscountItem = $IsDiscountItem;
    $this->Weight = $Weight;
    $this->VariantGroupIDs = $VariantGroupIDs;
    $this->VariantIDs = $VariantIDs;
    $this->ItemThumb = $ItemThumb;
    $this->ItemUrl = $ItemUrl;
    $this->PersonalizeID = $PersonalizeID;
    $this->PersonalizeIDs = $PersonalizeIDs;
    $this->PersonalizeString = $PersonalizeString;
    $this->PersonalizeStrings = $PersonalizeStrings;
    $this->IsTaxable = $IsTaxable;
    $this->CallForShippingFlag = $CallForShippingFlag;
    $this->WeightUnitID = $WeightUnitID;
    $this->NonShippingItem = $NonShippingItem;
    $this->OwnBox = $OwnBox;
    $this->WarehouseID = $WarehouseID;
    $this->RemovedFromInventoryQuantity = $RemovedFromInventoryQuantity;
    $this->OrderedQuantity = $OrderedQuantity;
    $this->VariantInventoryID = $VariantInventoryID;
    $this->LimitShippingMethod = $LimitShippingMethod;
    $this->CallForShippingWholeOrder = $CallForShippingWholeOrder;
    $this->BreakOutShipping = $BreakOutShipping;
    $this->ShippingClassificationCode = $ShippingClassificationCode;
    $this->ParentProductID = $ParentProductID;
    $this->ParentOrderItemID = $ParentOrderItemID;
    $this->BindQuantityToParent = $BindQuantityToParent;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DropShip = $DropShip;
    $this->ManufacturerName = $ManufacturerName;
    $this->ManufacturerPartNumber = $ManufacturerPartNumber;
    $this->AdjustLineSubTotalBy = $AdjustLineSubTotalBy;
    $this->SizeHeight = $SizeHeight;
    $this->SizeLength = $SizeLength;
    $this->SizeWidth = $SizeWidth;
    $this->SizeUnitID = $SizeUnitID;
    $this->TaxCode = $TaxCode;
    $this->ItemNrFull = $ItemNrFull;
    $this->ExludeChildrenFromDisplay = $ExludeChildrenFromDisplay;
    $this->IsRequired = $IsRequired;
    $this->RequiredChildQty = $RequiredChildQty;
    $this->OverridePrice = $OverridePrice;
    $this->FromWishListCartID = $FromWishListCartID;
    $this->WishListPurchasedQuantity = $WishListPurchasedQuantity;
    $this->AdminComments = $AdminComments;
    $this->DoNotDiscount = $DoNotDiscount;
    $this->LineItemNote = $LineItemNote;
    $this->ShippingAddressID = $ShippingAddressID;
    $this->GiftMessage = $GiftMessage;
    $this->DeliveryDate = $DeliveryDate;
    $this->eProductCustomUrl = $eProductCustomUrl;
    $this->DiscountAmount = $DiscountAmount;
    $this->DiscountPercentage = $DiscountPercentage;
    $this->EProductSerialNumber = $EProductSerialNumber;
    $this->RMANumber = $RMANumber;
    $this->OrderShippingOrderItemsColTrans = $OrderShippingOrderItemsColTrans;
    $this->OrderShippingOrderItemsTrans = $OrderShippingOrderItemsTrans;
  }

}

}
