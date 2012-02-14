<?php

if (!class_exists("ThemeStyleTrans", false)) 
{
class ThemeStyleTrans
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
   * @var DataInt32 $Id
   * @access public
   */
  public $Id;

  /**
   * 
   * @var DataInt32 $ThemeID
   * @access public
   */
  public $ThemeID;

  /**
   * 
   * @var string $Layoutbody
   * @access public
   */
  public $Layoutbody;

  /**
   * 
   * @var string $LayoutLayout
   * @access public
   */
  public $LayoutLayout;

  /**
   * 
   * @var string $LayoutLayoutTop
   * @access public
   */
  public $LayoutLayoutTop;

  /**
   * 
   * @var string $LayoutLayoutMiddle
   * @access public
   */
  public $LayoutLayoutMiddle;

  /**
   * 
   * @var string $LayoutLayoutLeftColumn
   * @access public
   */
  public $LayoutLayoutLeftColumn;

  /**
   * 
   * @var string $LayoutLayoutRightColumn
   * @access public
   */
  public $LayoutLayoutRightColumn;

  /**
   * 
   * @var string $LayoutLayoutContent
   * @access public
   */
  public $LayoutLayoutContent;

  /**
   * 
   * @var string $LayoutLayoutMiddleBody
   * @access public
   */
  public $LayoutLayoutMiddleBody;

  /**
   * 
   * @var string $LayoutLayoutBottom
   * @access public
   */
  public $LayoutLayoutBottom;

  /**
   * 
   * @var string $LayoutErrorText
   * @access public
   */
  public $LayoutErrorText;

  /**
   * 
   * @var string $ControlsControlHeader
   * @access public
   */
  public $ControlsControlHeader;

  /**
   * 
   * @var string $ControlsControlLink0a
   * @access public
   */
  public $ControlsControlLink0a;

  /**
   * 
   * @var string $ControlsControlLink0a00hover
   * @access public
   */
  public $ControlsControlLink0a00hover;

  /**
   * 
   * @var string $ControlsControlText
   * @access public
   */
  public $ControlsControlText;

  /**
   * 
   * @var string $ControlsControlInput
   * @access public
   */
  public $ControlsControlInput;

  /**
   * 
   * @var string $ProductProductDetailsCategoryTrail
   * @access public
   */
  public $ProductProductDetailsCategoryTrail;

  /**
   * 
   * @var string $ProductProductDetailsCategoryTrail0a
   * @access public
   */
  public $ProductProductDetailsCategoryTrail0a;

  /**
   * 
   * @var string $ProductProductDetailsHeader
   * @access public
   */
  public $ProductProductDetailsHeader;

  /**
   * 
   * @var string $ProductProductDetailsPhoto
   * @access public
   */
  public $ProductProductDetailsPhoto;

  /**
   * 
   * @var string $ProductProductDetailsManufacturerName
   * @access public
   */
  public $ProductProductDetailsManufacturerName;

  /**
   * 
   * @var string $ProductProductDetailsProductName
   * @access public
   */
  public $ProductProductDetailsProductName;

  /**
   * 
   * @var string $ProductProductDetailsPricing
   * @access public
   */
  public $ProductProductDetailsPricing;

  /**
   * 
   * @var string $ProductProductDetailsRetail
   * @access public
   */
  public $ProductProductDetailsRetail;

  /**
   * 
   * @var string $ProductProductDetailsPrice
   * @access public
   */
  public $ProductProductDetailsPrice;

  /**
   * 
   * @var string $ProductProductDetailsQuantity
   * @access public
   */
  public $ProductProductDetailsQuantity;

  /**
   * 
   * @var string $ProductProductDetailsQuantityTextBox
   * @access public
   */
  public $ProductProductDetailsQuantityTextBox;

  /**
   * 
   * @var string $ProductProductDetailsAddToCartButton
   * @access public
   */
  public $ProductProductDetailsAddToCartButton;

  /**
   * 
   * @var string $ProductProductDetailsBullets
   * @access public
   */
  public $ProductProductDetailsBullets;

  /**
   * 
   * @var string $ProductProductDetailsVariations
   * @access public
   */
  public $ProductProductDetailsVariations;

  /**
   * 
   * @var string $ProductRelatedProductsPhoto
   * @access public
   */
  public $ProductRelatedProductsPhoto;

  /**
   * 
   * @var string $ProductRelatedProductsManufacturerName
   * @access public
   */
  public $ProductRelatedProductsManufacturerName;

  /**
   * 
   * @var string $ProductRelatedProductsProductName
   * @access public
   */
  public $ProductRelatedProductsProductName;

  /**
   * 
   * @var string $ProductRelatedProductsPricing
   * @access public
   */
  public $ProductRelatedProductsPricing;

  /**
   * 
   * @var string $ProductRelatedProductsRetail
   * @access public
   */
  public $ProductRelatedProductsRetail;

  /**
   * 
   * @var string $ProductRelatedProductsPrice
   * @access public
   */
  public $ProductRelatedProductsPrice;

  /**
   * 
   * @var string $CatalogCatalogCategoryTrail
   * @access public
   */
  public $CatalogCatalogCategoryTrail;

  /**
   * 
   * @var string $CatalogCatalogProductName0a
   * @access public
   */
  public $CatalogCatalogProductName0a;

  /**
   * 
   * @var string $CategoryCategoryCategoryTrail
   * @access public
   */
  public $CategoryCategoryCategoryTrail;

  /**
   * 
   * @var string $CategoryCategoryCategoryTrail0a
   * @access public
   */
  public $CategoryCategoryCategoryTrail0a;

  /**
   * 
   * @var string $CategoryCategoryPageNavigation
   * @access public
   */
  public $CategoryCategoryPageNavigation;

  /**
   * 
   * @var string $CategoryCategoryJumpHeader
   * @access public
   */
  public $CategoryCategoryJumpHeader;

  /**
   * 
   * @var string $CategoryCategoryCategoryName
   * @access public
   */
  public $CategoryCategoryCategoryName;

  /**
   * 
   * @var string $CategoryCategoryChildCategoryHeader
   * @access public
   */
  public $CategoryCategoryChildCategoryHeader;

  /**
   * 
   * @var string $CategoryCategoryChildCategoriesLink0a
   * @access public
   */
  public $CategoryCategoryChildCategoriesLink0a;

  /**
   * 
   * @var string $CategoryCategoryCategoryThumbnail
   * @access public
   */
  public $CategoryCategoryCategoryThumbnail;

  /**
   * 
   * @var string $CategoryCategoryProductThumbnail
   * @access public
   */
  public $CategoryCategoryProductThumbnail;

  /**
   * 
   * @var string $CategoryCategoryProductDetails
   * @access public
   */
  public $CategoryCategoryProductDetails;

  /**
   * 
   * @var string $CategoryCategoryProductNameLink0a
   * @access public
   */
  public $CategoryCategoryProductNameLink0a;

  /**
   * 
   * @var string $CategoryCategoryProductShortDescription
   * @access public
   */
  public $CategoryCategoryProductShortDescription;

  /**
   * 
   * @var string $CategoryCategoryProductLongDescription
   * @access public
   */
  public $CategoryCategoryProductLongDescription;

  /**
   * 
   * @var string $CategoryCategoryProductMoreInfoLink0a
   * @access public
   */
  public $CategoryCategoryProductMoreInfoLink0a;

  /**
   * 
   * @var string $CategoryCategoryProductPrice
   * @access public
   */
  public $CategoryCategoryProductPrice;

  /**
   * 
   * @var string $CategoryCategoryProductSalePrice
   * @access public
   */
  public $CategoryCategoryProductSalePrice;

  /**
   * 
   * @var string $CategoryCategoryProductSeperator
   * @access public
   */
  public $CategoryCategoryProductSeperator;

  /**
   * 
   * @var string $ShoppingCartShoppingCart
   * @access public
   */
  public $ShoppingCartShoppingCart;

  /**
   * 
   * @var string $ShoppingCartShoppingCartHeader
   * @access public
   */
  public $ShoppingCartShoppingCartHeader;

  /**
   * 
   * @var string $ShoppingCartShoppingCartThumbnail
   * @access public
   */
  public $ShoppingCartShoppingCartThumbnail;

  /**
   * 
   * @var string $ShoppingCartShoppingCartItemNr
   * @access public
   */
  public $ShoppingCartShoppingCartItemNr;

  /**
   * 
   * @var string $ShoppingCartShoppingCartVariations
   * @access public
   */
  public $ShoppingCartShoppingCartVariations;

  /**
   * 
   * @var string $ShoppingCartShoppingCartPersonalize
   * @access public
   */
  public $ShoppingCartShoppingCartPersonalize;

  /**
   * 
   * @var string $ShoppingCartShoppingCartPrice
   * @access public
   */
  public $ShoppingCartShoppingCartPrice;

  /**
   * 
   * @var string $ShoppingCartShoppingCartTotals
   * @access public
   */
  public $ShoppingCartShoppingCartTotals;

  /**
   * 
   * @var string $ShoppingCartShoppingCartDiscount
   * @access public
   */
  public $ShoppingCartShoppingCartDiscount;

  /**
   * 
   * @var string $ShoppingCartShoppingCartDiscountPrice
   * @access public
   */
  public $ShoppingCartShoppingCartDiscountPrice;

  /**
   * 
   * @var string $ShoppingCartShoppingCart0a
   * @access public
   */
  public $ShoppingCartShoppingCart0a;

  /**
   * 
   * @var string $ShoppingCartShoppingCart0a00hover
   * @access public
   */
  public $ShoppingCartShoppingCart0a00hover;

  /**
   * 
   * @var string $Layouta
   * @access public
   */
  public $Layouta;

  /**
   * 
   * @var string $Layouta00hover
   * @access public
   */
  public $Layouta00hover;

  /**
   * 
   * @var string $Layouta00visited
   * @access public
   */
  public $Layouta00visited;

  /**
   * 
   * @var string $LayoutHR
   * @access public
   */
  public $LayoutHR;

  /**
   * 
   * @var string $LayoutHorizontalNav
   * @access public
   */
  public $LayoutHorizontalNav;

  /**
   * 
   * @var string $LayoutHorizontalNavSeperator
   * @access public
   */
  public $LayoutHorizontalNavSeperator;

  /**
   * 
   * @var string $LayoutHorizontalNavItem0a
   * @access public
   */
  public $LayoutHorizontalNavItem0a;

  /**
   * 
   * @var string $LayoutHorizontalNavItem0a00hover
   * @access public
   */
  public $LayoutHorizontalNavItem0a00hover;

  /**
   * 
   * @var string $ProductProductDetailsAvailability
   * @access public
   */
  public $ProductProductDetailsAvailability;

  /**
   * 
   * @var string $CatalogCatalogCategoryTrail0a
   * @access public
   */
  public $CatalogCatalogCategoryTrail0a;

  /**
   * 
   * @var string $CatalogCatalogCategoryTrail0a00hover
   * @access public
   */
  public $CatalogCatalogCategoryTrail0a00hover;

  /**
   * 
   * @var string $CheckOutCheckOutHeader
   * @access public
   */
  public $CheckOutCheckOutHeader;

  /**
   * 
   * @var string $CheckOutCheckOutText
   * @access public
   */
  public $CheckOutCheckOutText;

  /**
   * 
   * @var string $CheckOutCheckOutSubHeader
   * @access public
   */
  public $CheckOutCheckOutSubHeader;

  /**
   * 
   * @var string $CheckOutOrderDetailsShippingHeader
   * @access public
   */
  public $CheckOutOrderDetailsShippingHeader;

  /**
   * 
   * @var string $CheckOutOrderDetailsSectionSubHeader
   * @access public
   */
  public $CheckOutOrderDetailsSectionSubHeader;

  /**
   * 
   * @var string $CheckOutOrderDetailsOrderItems
   * @access public
   */
  public $CheckOutOrderDetailsOrderItems;

  /**
   * 
   * @var string $CheckOutOrderDetailsItemName
   * @access public
   */
  public $CheckOutOrderDetailsItemName;

  /**
   * 
   * @var string $CheckOutOrderDetailsItemPrice
   * @access public
   */
  public $CheckOutOrderDetailsItemPrice;

  /**
   * 
   * @var string $CheckOutOrderDetailsItemQuantity
   * @access public
   */
  public $CheckOutOrderDetailsItemQuantity;

  /**
   * 
   * @var string $CheckOutOrderDetailsSummaryHeader
   * @access public
   */
  public $CheckOutOrderDetailsSummaryHeader;

  /**
   * 
   * @var string $CheckOutOrderDetailsSummaryText
   * @access public
   */
  public $CheckOutOrderDetailsSummaryText;

  /**
   * 
   * @var string $CheckOutOrderDetailsTotal
   * @access public
   */
  public $CheckOutOrderDetailsTotal;

  /**
   * 
   * @var string $CheckOutOrderDetailsDiscount
   * @access public
   */
  public $CheckOutOrderDetailsDiscount;

  /**
   * 
   * @var string $CheckOutAddressBookAddresses
   * @access public
   */
  public $CheckOutAddressBookAddresses;

  /**
   * 
   * @var string $CheckOutAddressBookEditor
   * @access public
   */
  public $CheckOutAddressBookEditor;

  /**
   * 
   * @var string $CheckOutCardFieldHeaders
   * @access public
   */
  public $CheckOutCardFieldHeaders;

  /**
   * 
   * @var string $CheckOutOrderHistoryHeader
   * @access public
   */
  public $CheckOutOrderHistoryHeader;

  /**
   * 
   * @var string $CheckOutOrderHistoryItem
   * @access public
   */
  public $CheckOutOrderHistoryItem;

  /**
   * 
   * @var string $CheckOutOrderHistoryAltItem
   * @access public
   */
  public $CheckOutOrderHistoryAltItem;

  /**
   * 
   * @var string $ControlsControl
   * @access public
   */
  public $ControlsControl;

  /**
   * 
   * @var string $ControlsControlLinkSeperator
   * @access public
   */
  public $ControlsControlLinkSeperator;

  /**
   * 
   * @var string $CatalogCatalogProductPrice
   * @access public
   */
  public $CatalogCatalogProductPrice;

  /**
   * 
   * @var string $CategoryCategoryProductAvailability
   * @access public
   */
  public $CategoryCategoryProductAvailability;

  /**
   * 
   * @var string $CategoryCategoryProductQuantityTextbox
   * @access public
   */
  public $CategoryCategoryProductQuantityTextbox;

  /**
   * 
   * @var string $ControlsControlItem
   * @access public
   */
  public $ControlsControlItem;

  /**
   * 
   * @var string $CategoryCategoryChildCategories
   * @access public
   */
  public $CategoryCategoryChildCategories;

  /**
   * 
   * @var string $CheckOutViewOrderHeader
   * @access public
   */
  public $CheckOutViewOrderHeader;

  /**
   * 
   * @var string $CheckOutViewOrderItem
   * @access public
   */
  public $CheckOutViewOrderItem;

  /**
   * 
   * @var string $CheckOutViewOrderPricingText
   * @access public
   */
  public $CheckOutViewOrderPricingText;

  /**
   * 
   * @var string $CheckOutViewOrderPricing
   * @access public
   */
  public $CheckOutViewOrderPricing;

  /**
   * 
   * @var string $ProductProductDetailsItemNr
   * @access public
   */
  public $ProductProductDetailsItemNr;

  /**
   * 
   * @var string $ProductRelatedProductsItemNr
   * @access public
   */
  public $ProductRelatedProductsItemNr;

  /**
   * 
   * @var string $ProductRelatedProductsMfgName
   * @access public
   */
  public $ProductRelatedProductsMfgName;

  /**
   * 
   * @var string $CategoryCategoryProductItemNr
   * @access public
   */
  public $CategoryCategoryProductItemNr;

  /**
   * 
   * @var string $CategoryCategoryProductMfgName
   * @access public
   */
  public $CategoryCategoryProductMfgName;

  /**
   * 
   * @var string $ShoppingCartShoppingCartMfgName
   * @access public
   */
  public $ShoppingCartShoppingCartMfgName;

  /**
   * 
   * @var string $CheckOutOrderDetailsItemNr
   * @access public
   */
  public $CheckOutOrderDetailsItemNr;

  /**
   * 
   * @var string $CategoryCategoryChildCategoriesShortDesc
   * @access public
   */
  public $CategoryCategoryChildCategoriesShortDesc;

  /**
   * 
   * @var string $CategoryCategoryCategoryHeader
   * @access public
   */
  public $CategoryCategoryCategoryHeader;

  /**
   * 
   * @var string $CategoryCategoryCategoryFooter
   * @access public
   */
  public $CategoryCategoryCategoryFooter;

  /**
   * 
   * @var string $Layouth1
   * @access public
   */
  public $Layouth1;

  /**
   * 
   * @var string $Layouth2
   * @access public
   */
  public $Layouth2;

  /**
   * 
   * @var string $Layouth3
   * @access public
   */
  public $Layouth3;

  /**
   * 
   * @var string $Layouth4
   * @access public
   */
  public $Layouth4;

  /**
   * 
   * @var string $Layoutp
   * @access public
   */
  public $Layoutp;

  /**
   * 
   * @var string $ShoppingCartShoppingCartCouponCode
   * @access public
   */
  public $ShoppingCartShoppingCartCouponCode;

  /**
   * 
   * @var string $CatalogCatalogProductMfgName0a
   * @access public
   */
  public $CatalogCatalogProductMfgName0a;

  /**
   * 
   * @var string $LayoutRequestTime
   * @access public
   */
  public $LayoutRequestTime;

  /**
   * 
   * @var string $ProductProductDetailsAddToCart
   * @access public
   */
  public $ProductProductDetailsAddToCart;

  /**
   * 
   * @var string $ProductRelatedProductsAddToCart
   * @access public
   */
  public $ProductRelatedProductsAddToCart;

  /**
   * 
   * @var string $CatalogCatalogProductRetail
   * @access public
   */
  public $CatalogCatalogProductRetail;

  /**
   * 
   * @var string $CategoryCategoryProductRetail
   * @access public
   */
  public $CategoryCategoryProductRetail;

  /**
   * 
   * @var string $CategoryCategoryProductAddToCart
   * @access public
   */
  public $CategoryCategoryProductAddToCart;

  /**
   * 
   * @var string $CategoryCategoryProductMfgName0a
   * @access public
   */
  public $CategoryCategoryProductMfgName0a;

  /**
   * 
   * @var string $ProductProductDetailsQuantityPriceTable
   * @access public
   */
  public $ProductProductDetailsQuantityPriceTable;

  /**
   * 
   * @var string $ProductProductDetailsQuantityPriceQuantity
   * @access public
   */
  public $ProductProductDetailsQuantityPriceQuantity;

  /**
   * 
   * @var string $ProductProductDetailsQuantityPricePrice
   * @access public
   */
  public $ProductProductDetailsQuantityPricePrice;

  /**
   * 
   * @var string $ProductProductDetailsQuantityPriceQuantityLabel
   * @access public
   */
  public $ProductProductDetailsQuantityPriceQuantityLabel;

  /**
   * 
   * @var string $ProductProductDetailsQuantityPricePriceLabel
   * @access public
   */
  public $ProductProductDetailsQuantityPricePriceLabel;

  /**
   * 
   * @var string $ProductProductDetailsAttributes
   * @access public
   */
  public $ProductProductDetailsAttributes;

  /**
   * 
   * @var string $ProductProductDetailsPhotoArea
   * @access public
   */
  public $ProductProductDetailsPhotoArea;

  /**
   * 
   * @var string $ProductProductDetailsRelatedProductQuantityPriceTable
   * @access public
   */
  public $ProductProductDetailsRelatedProductQuantityPriceTable;

  /**
   * 
   * @var string $ProductProductDetailsRelatedProductQuantityPriceQuantityLabel
   * @access public
   */
  public $ProductProductDetailsRelatedProductQuantityPriceQuantityLabel;

  /**
   * 
   * @var string $ProductProductDetailsRelatedProductQuantityPriceQuantity
   * @access public
   */
  public $ProductProductDetailsRelatedProductQuantityPriceQuantity;

  /**
   * 
   * @var string $ProductProductDetailsRelatedProductQuantityPricePriceLabel
   * @access public
   */
  public $ProductProductDetailsRelatedProductQuantityPricePriceLabel;

  /**
   * 
   * @var string $ProductProductDetailsRelatedProductQuantityPricePrice
   * @access public
   */
  public $ProductProductDetailsRelatedProductQuantityPricePrice;

  /**
   * 
   * @var string $CustomCSS
   * @access public
   */
  public $CustomCSS;

  /**
   * 
   * @var string $LayoutShopCartLine
   * @access public
   */
  public $LayoutShopCartLine;

  /**
   * 
   * @var string $ProductProductDetailsPicZoom
   * @access public
   */
  public $ProductProductDetailsPicZoom;

  /**
   * 
   * @var string $CatalogPicturePopupClose
   * @access public
   */
  public $CatalogPicturePopupClose;

  /**
   * 
   * @var string $ProductProductDetailsThumbPhoto
   * @access public
   */
  public $ProductProductDetailsThumbPhoto;

  /**
   * 
   * @var string $ProductProductDetailsPicCaption
   * @access public
   */
  public $ProductProductDetailsPicCaption;

  /**
   * 
   * @var string $ProductProductDetailsVariantMatrix
   * @access public
   */
  public $ProductProductDetailsVariantMatrix;

  /**
   * 
   * @var string $ProductProductDetailsVariantMatrixAddToCartButton
   * @access public
   */
  public $ProductProductDetailsVariantMatrixAddToCartButton;

  /**
   * 
   * @var string $ProductProductDetailsVariantMatrixHelpText
   * @access public
   */
  public $ProductProductDetailsVariantMatrixHelpText;

  /**
   * 
   * @var string $ProductProductDetailsVariantMatrixHeaderRow
   * @access public
   */
  public $ProductProductDetailsVariantMatrixHeaderRow;

  /**
   * 
   * @var string $ProductProductDetailsVariantMatrixLeftColumn
   * @access public
   */
  public $ProductProductDetailsVariantMatrixLeftColumn;

  /**
   * 
   * @var string $ProductProductDetailsVariantMatrixQuantityBox
   * @access public
   */
  public $ProductProductDetailsVariantMatrixQuantityBox;

  /**
   * 
   * @var string $ProductProductDetailsVariantMatrixUnavailableQuantityBox
   * @access public
   */
  public $ProductProductDetailsVariantMatrixUnavailableQuantityBox;

  /**
   * 
   * @var string $ProductProductDetailsTabs
   * @access public
   */
  public $ProductProductDetailsTabs;

  /**
   * 
   * @var string $CatalogPicturePopupPhotoArea
   * @access public
   */
  public $CatalogPicturePopupPhotoArea;

  /**
   * 
   * @var string $CatalogPicturePopupCaption
   * @access public
   */
  public $CatalogPicturePopupCaption;

  /**
   * 
   * @var string $ProductProductDetailsQuantityInStock
   * @access public
   */
  public $ProductProductDetailsQuantityInStock;

  /**
   * 
   * @var string $ProductProductDetailsQuantityInStockLabel
   * @access public
   */
  public $ProductProductDetailsQuantityInStockLabel;

  /**
   * 
   * @var string $ProductProductDetailsQuantityInStockQuantity
   * @access public
   */
  public $ProductProductDetailsQuantityInStockQuantity;

  /**
   * 
   * @var string $CategoryCategoryWasPrice
   * @access public
   */
  public $CategoryCategoryWasPrice;

  /**
   * 
   * @var string $ProductProductDetailsWasPrice
   * @access public
   */
  public $ProductProductDetailsWasPrice;

  /**
   * 
   * @var string $CategoryCategoryWasPriceLabel
   * @access public
   */
  public $CategoryCategoryWasPriceLabel;

  /**
   * 
   * @var string $ProductProductDetailsWasPriceLabel
   * @access public
   */
  public $ProductProductDetailsWasPriceLabel;

  /**
   * 
   * @var string $CategoryCategoryProductSeeOptionsLink0a
   * @access public
   */
  public $CategoryCategoryProductSeeOptionsLink0a;

  /**
   * 
   * @var string $CatalogPicturePopupInstruction
   * @access public
   */
  public $CatalogPicturePopupInstruction;

  /**
   * 
   * @var string $ProductProductGroup
   * @access public
   */
  public $ProductProductGroup;

  /**
   * 
   * @var string $ProductProductGroupHeader
   * @access public
   */
  public $ProductProductGroupHeader;

  /**
   * 
   * @var string $ProductProductGroupItem
   * @access public
   */
  public $ProductProductGroupItem;

  /**
   * 
   * @var string $ProductProductGroupAlternatingItem
   * @access public
   */
  public $ProductProductGroupAlternatingItem;

  /**
   * 
   * @var string $ProductProductGroupAddToCart
   * @access public
   */
  public $ProductProductGroupAddToCart;

  /**
   * 
   * @var string $CategoryCategoryPageNavigation0a
   * @access public
   */
  public $CategoryCategoryPageNavigation0a;

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
   * @var string $CategoryCategoryProductThumbnailArea
   * @access public
   */
  public $CategoryCategoryProductThumbnailArea;

  /**
   * 
   * @var string $ProductProductGroupItemPrice
   * @access public
   */
  public $ProductProductGroupItemPrice;

  /**
   * 
   * @var string $ProductProductGroupItemWasPrice
   * @access public
   */
  public $ProductProductGroupItemWasPrice;

  /**
   * 
   * @var string $ProductProductGroupAlternatingItemPrice
   * @access public
   */
  public $ProductProductGroupAlternatingItemPrice;

  /**
   * 
   * @var string $ProductProductGroupAlternatingItemWasPrice
   * @access public
   */
  public $ProductProductGroupAlternatingItemWasPrice;

  /**
   * 
   * @var string $CategoryCategoryProductFlags
   * @access public
   */
  public $CategoryCategoryProductFlags;

  /**
   * 
   * @var string $ProductProductDetailsQuantityPriceWasPrice
   * @access public
   */
  public $ProductProductDetailsQuantityPriceWasPrice;

  /**
   * 
   * @var string $CatalogCatalogNavPrevious
   * @access public
   */
  public $CatalogCatalogNavPrevious;

  /**
   * 
   * @var string $CatalogCatalogNavNext
   * @access public
   */
  public $CatalogCatalogNavNext;

  /**
   * 
   * @var string $CatalogCatalogNavIndex
   * @access public
   */
  public $CatalogCatalogNavIndex;

  /**
   * 
   * @var string $CatalogCatalogItemPriceArea
   * @access public
   */
  public $CatalogCatalogItemPriceArea;

  /**
   * 
   * @var string $CatalogCatalogItemQuantityBox
   * @access public
   */
  public $CatalogCatalogItemQuantityBox;

  /**
   * 
   * @var string $CatalogCatalogProductName
   * @access public
   */
  public $CatalogCatalogProductName;

  /**
   * 
   * @var string $CatalogCatalogProductMfgName
   * @access public
   */
  public $CatalogCatalogProductMfgName;

  /**
   * 
   * @var string $CatalogCatalogNavArea
   * @access public
   */
  public $CatalogCatalogNavArea;

  /**
   * 
   * @var string $CatalogCatalogNavBorder
   * @access public
   */
  public $CatalogCatalogNavBorder;

  /**
   * 
   * @var string $CatalogCatalogAddToCartButton
   * @access public
   */
  public $CatalogCatalogAddToCartButton;

  /**
   * 
   * @var string $ShoppingCartShoppingCartShippingInfo
   * @access public
   */
  public $ShoppingCartShoppingCartShippingInfo;

  /**
   * 
   * @var string $LayoutHorizontalNavItem
   * @access public
   */
  public $LayoutHorizontalNavItem;

  /**
   * 
   * @var string $ProductProductDetailsSalePrice
   * @access public
   */
  public $ProductProductDetailsSalePrice;

  /**
   * 
   * @var string $ProductProductDetailsSalePriceLabel
   * @access public
   */
  public $ProductProductDetailsSalePriceLabel;

  /**
   * 
   * @var string $ProductProductDetailsRetailPriceLabel
   * @access public
   */
  public $ProductProductDetailsRetailPriceLabel;

  /**
   * 
   * @var string $ProductProductDetailsPriceLabel
   * @access public
   */
  public $ProductProductDetailsPriceLabel;

  /**
   * 
   * @var string $ProductProductDetailsPriceArea
   * @access public
   */
  public $ProductProductDetailsPriceArea;

  /**
   * 
   * @var string $ProductProductDetailsRetailPriceArea
   * @access public
   */
  public $ProductProductDetailsRetailPriceArea;

  /**
   * 
   * @var string $ProductProductDetailsSalePriceArea
   * @access public
   */
  public $ProductProductDetailsSalePriceArea;

  /**
   * 
   * @var string $ProductProductDetailsWasPriceArea
   * @access public
   */
  public $ProductProductDetailsWasPriceArea;

  /**
   * 
   * @var string $CategoryCategoryProductPriceArea
   * @access public
   */
  public $CategoryCategoryProductPriceArea;

  /**
   * 
   * @var string $CategoryCategoryProductPriceLabel
   * @access public
   */
  public $CategoryCategoryProductPriceLabel;

  /**
   * 
   * @var string $CategoryCategoryProductRetailPriceArea
   * @access public
   */
  public $CategoryCategoryProductRetailPriceArea;

  /**
   * 
   * @var string $CategoryCategoryProductRetailPriceLabel
   * @access public
   */
  public $CategoryCategoryProductRetailPriceLabel;

  /**
   * 
   * @var string $CategoryCategoryProductRetailPrice
   * @access public
   */
  public $CategoryCategoryProductRetailPrice;

  /**
   * 
   * @var string $CategoryCategoryProductSalePriceArea
   * @access public
   */
  public $CategoryCategoryProductSalePriceArea;

  /**
   * 
   * @var string $CategoryCategoryProductSalePriceLabel
   * @access public
   */
  public $CategoryCategoryProductSalePriceLabel;

  /**
   * 
   * @var string $CategoryCategoryWasPriceArea
   * @access public
   */
  public $CategoryCategoryWasPriceArea;

  /**
   * 
   * @var string $CategoryCategoryProductPricing
   * @access public
   */
  public $CategoryCategoryProductPricing;

  /**
   * 
   * @var string $CatalogCatalogProductPriceLabel
   * @access public
   */
  public $CatalogCatalogProductPriceLabel;

  /**
   * 
   * @var string $CatalogCatalogProductRetailPriceArea
   * @access public
   */
  public $CatalogCatalogProductRetailPriceArea;

  /**
   * 
   * @var string $CatalogCatalogProductRetailPrice
   * @access public
   */
  public $CatalogCatalogProductRetailPrice;

  /**
   * 
   * @var string $CatalogCatalogProductRetailPriceLabel
   * @access public
   */
  public $CatalogCatalogProductRetailPriceLabel;

  /**
   * 
   * @var string $CatalogCatalogProductWasPriceArea
   * @access public
   */
  public $CatalogCatalogProductWasPriceArea;

  /**
   * 
   * @var string $CatalogCatalogProductWasPrice
   * @access public
   */
  public $CatalogCatalogProductWasPrice;

  /**
   * 
   * @var string $CatalogCatalogProductWasPriceLabel
   * @access public
   */
  public $CatalogCatalogProductWasPriceLabel;

  /**
   * 
   * @var string $CatalogCatalogProductSalePriceArea
   * @access public
   */
  public $CatalogCatalogProductSalePriceArea;

  /**
   * 
   * @var string $CatalogCatalogProductSalePrice
   * @access public
   */
  public $CatalogCatalogProductSalePrice;

  /**
   * 
   * @var string $CatalogCatalogProductSalePriceLabel
   * @access public
   */
  public $CatalogCatalogProductSalePriceLabel;

  /**
   * 
   * @var string $ControlsControlFooter
   * @access public
   */
  public $ControlsControlFooter;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationHeader
   * @access public
   */
  public $ShippingEstimationShippingEstimationHeader;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationBody
   * @access public
   */
  public $ShippingEstimationShippingEstimationBody;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationHelpText
   * @access public
   */
  public $ShippingEstimationShippingEstimationHelpText;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationItemInfo
   * @access public
   */
  public $ShippingEstimationShippingEstimationItemInfo;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationItemName
   * @access public
   */
  public $ShippingEstimationShippingEstimationItemName;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationForm
   * @access public
   */
  public $ShippingEstimationShippingEstimationForm;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationFormLabel
   * @access public
   */
  public $ShippingEstimationShippingEstimationFormLabel;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationFormInput
   * @access public
   */
  public $ShippingEstimationShippingEstimationFormInput;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationRateTable
   * @access public
   */
  public $ShippingEstimationShippingEstimationRateTable;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationRateName
   * @access public
   */
  public $ShippingEstimationShippingEstimationRateName;

  /**
   * 
   * @var string $ShippingEstimationShippingEstimationRate
   * @access public
   */
  public $ShippingEstimationShippingEstimationRate;

  /**
   * 
   * @var string $ProductProductDetailsShippingEstimationLink
   * @access public
   */
  public $ProductProductDetailsShippingEstimationLink;

  /**
   * 
   * @var string $CategoryCategoryPageNavigation0a0span
   * @access public
   */
  public $CategoryCategoryPageNavigation0a0span;

  /**
   * 
   * @var string $CategoryProductListPagingPageLabel
   * @access public
   */
  public $CategoryProductListPagingPageLabel;

  /**
   * 
   * @var string $CategoryProductListPagingCurrentPageBox
   * @access public
   */
  public $CategoryProductListPagingCurrentPageBox;

  /**
   * 
   * @var string $CategoryProductListPagingTotalPagesLabel
   * @access public
   */
  public $CategoryProductListPagingTotalPagesLabel;

  /**
   * 
   * @var string $ControlsControlLink
   * @access public
   */
  public $ControlsControlLink;

  /**
   * 
   * @var string $Layouttd
   * @access public
   */
  public $Layouttd;

  /**
   * 
   * @var string $Layoutdiv
   * @access public
   */
  public $Layoutdiv;

  /**
   * 
   * @var string $Layoutspan
   * @access public
   */
  public $Layoutspan;

  /**
   * 
   * @var string $ProductProductDetailsReviewDisplay
   * @access public
   */
  public $ProductProductDetailsReviewDisplay;

  /**
   * 
   * @var string $ProductProductDetailsReviewRatingStars
   * @access public
   */
  public $ProductProductDetailsReviewRatingStars;

  /**
   * 
   * @var string $ProductProductDetailsReviewRatingCount
   * @access public
   */
  public $ProductProductDetailsReviewRatingCount;

  /**
   * 
   * @var string $CategoryCategoryProductRating
   * @access public
   */
  public $CategoryCategoryProductRating;

  /**
   * 
   * @var string $CategoryCategoryProductRatingText
   * @access public
   */
  public $CategoryCategoryProductRatingText;

  /**
   * 
   * @var string $CategoryCategoryProductRatingArea
   * @access public
   */
  public $CategoryCategoryProductRatingArea;

  /**
   * 
   * @var string $CheckOutShowHideOrdersLink
   * @access public
   */
  public $CheckOutShowHideOrdersLink;

  /**
   * 
   * @var string $CheckOutShowHideOrdersLink0a
   * @access public
   */
  public $CheckOutShowHideOrdersLink0a;

  /**
   * 
   * @var string $WriteReviewProductReviewFieldLabel
   * @access public
   */
  public $WriteReviewProductReviewFieldLabel;

  /**
   * 
   * @var string $WriteReviewProductReviewFieldInput
   * @access public
   */
  public $WriteReviewProductReviewFieldInput;

  /**
   * 
   * @var string $WriteReviewProductReviewFieldInput0input
   * @access public
   */
  public $WriteReviewProductReviewFieldInput0input;

  /**
   * 
   * @var string $ProductReviewsReviewPageNavBorder
   * @access public
   */
  public $ProductReviewsReviewPageNavBorder;

  /**
   * 
   * @var string $ProductReviewsReviewPageNavigation
   * @access public
   */
  public $ProductReviewsReviewPageNavigation;

  /**
   * 
   * @var string $ProductReviewsReviewItem
   * @access public
   */
  public $ProductReviewsReviewItem;

  /**
   * 
   * @var string $ProductReviewsReviewItemTitle
   * @access public
   */
  public $ProductReviewsReviewItemTitle;

  /**
   * 
   * @var string $ProductReviewsReviewItemBody
   * @access public
   */
  public $ProductReviewsReviewItemBody;

  /**
   * 
   * @var string $ProductReviewsReviewItemRatings
   * @access public
   */
  public $ProductReviewsReviewItemRatings;

  /**
   * 
   * @var string $ProductReviewsReviewItemDimensionName
   * @access public
   */
  public $ProductReviewsReviewItemDimensionName;

  /**
   * 
   * @var string $ProductReviewsReviewItemMeta
   * @access public
   */
  public $ProductReviewsReviewItemMeta;

  /**
   * 
   * @var string $ProductReviewsReviewItemProsArea
   * @access public
   */
  public $ProductReviewsReviewItemProsArea;

  /**
   * 
   * @var string $ProductReviewsReviewItemPros
   * @access public
   */
  public $ProductReviewsReviewItemPros;

  /**
   * 
   * @var string $ProductReviewsReviewItemProsHeader
   * @access public
   */
  public $ProductReviewsReviewItemProsHeader;

  /**
   * 
   * @var string $ProductReviewsReviewItemConsArea
   * @access public
   */
  public $ProductReviewsReviewItemConsArea;

  /**
   * 
   * @var string $ProductReviewsReviewItemCons
   * @access public
   */
  public $ProductReviewsReviewItemCons;

  /**
   * 
   * @var string $ProductReviewsReviewItemConsHeader
   * @access public
   */
  public $ProductReviewsReviewItemConsHeader;

  /**
   * 
   * @var string $ProductReviewsReviewProduct
   * @access public
   */
  public $ProductReviewsReviewProduct;

  /**
   * 
   * @var string $ProductReviewsReviewItemSeparator
   * @access public
   */
  public $ProductReviewsReviewItemSeparator;

  /**
   * 
   * @var string $ProductReviewsReviewItemPros0ul
   * @access public
   */
  public $ProductReviewsReviewItemPros0ul;

  /**
   * 
   * @var string $ProductReviewsReviewItemPros0ul0li
   * @access public
   */
  public $ProductReviewsReviewItemPros0ul0li;

  /**
   * 
   * @var string $ProductReviewsReviewItemCons0ul
   * @access public
   */
  public $ProductReviewsReviewItemCons0ul;

  /**
   * 
   * @var string $ProductReviewsReviewItemCons0ul0li
   * @access public
   */
  public $ProductReviewsReviewItemCons0ul0li;

  /**
   * 
   * @var string $ShoppingCartShoppingCartClear
   * @access public
   */
  public $ShoppingCartShoppingCartClear;

  /**
   * 
   * @var string $ShoppingCartShoppingCartSave
   * @access public
   */
  public $ShoppingCartShoppingCartSave;

  /**
   * 
   * @var string $ShoppingCartShoppingCartEmail
   * @access public
   */
  public $ShoppingCartShoppingCartEmail;

  /**
   * 
   * @var string $CustomCSSAfterBaseStyles
   * @access public
   */
  public $CustomCSSAfterBaseStyles;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $Id
   * @param DataInt32 $ThemeID
   * @param string $Layoutbody
   * @param string $LayoutLayout
   * @param string $LayoutLayoutTop
   * @param string $LayoutLayoutMiddle
   * @param string $LayoutLayoutLeftColumn
   * @param string $LayoutLayoutRightColumn
   * @param string $LayoutLayoutContent
   * @param string $LayoutLayoutMiddleBody
   * @param string $LayoutLayoutBottom
   * @param string $LayoutErrorText
   * @param string $ControlsControlHeader
   * @param string $ControlsControlLink0a
   * @param string $ControlsControlLink0a00hover
   * @param string $ControlsControlText
   * @param string $ControlsControlInput
   * @param string $ProductProductDetailsCategoryTrail
   * @param string $ProductProductDetailsCategoryTrail0a
   * @param string $ProductProductDetailsHeader
   * @param string $ProductProductDetailsPhoto
   * @param string $ProductProductDetailsManufacturerName
   * @param string $ProductProductDetailsProductName
   * @param string $ProductProductDetailsPricing
   * @param string $ProductProductDetailsRetail
   * @param string $ProductProductDetailsPrice
   * @param string $ProductProductDetailsQuantity
   * @param string $ProductProductDetailsQuantityTextBox
   * @param string $ProductProductDetailsAddToCartButton
   * @param string $ProductProductDetailsBullets
   * @param string $ProductProductDetailsVariations
   * @param string $ProductRelatedProductsPhoto
   * @param string $ProductRelatedProductsManufacturerName
   * @param string $ProductRelatedProductsProductName
   * @param string $ProductRelatedProductsPricing
   * @param string $ProductRelatedProductsRetail
   * @param string $ProductRelatedProductsPrice
   * @param string $CatalogCatalogCategoryTrail
   * @param string $CatalogCatalogProductName0a
   * @param string $CategoryCategoryCategoryTrail
   * @param string $CategoryCategoryCategoryTrail0a
   * @param string $CategoryCategoryPageNavigation
   * @param string $CategoryCategoryJumpHeader
   * @param string $CategoryCategoryCategoryName
   * @param string $CategoryCategoryChildCategoryHeader
   * @param string $CategoryCategoryChildCategoriesLink0a
   * @param string $CategoryCategoryCategoryThumbnail
   * @param string $CategoryCategoryProductThumbnail
   * @param string $CategoryCategoryProductDetails
   * @param string $CategoryCategoryProductNameLink0a
   * @param string $CategoryCategoryProductShortDescription
   * @param string $CategoryCategoryProductLongDescription
   * @param string $CategoryCategoryProductMoreInfoLink0a
   * @param string $CategoryCategoryProductPrice
   * @param string $CategoryCategoryProductSalePrice
   * @param string $CategoryCategoryProductSeperator
   * @param string $ShoppingCartShoppingCart
   * @param string $ShoppingCartShoppingCartHeader
   * @param string $ShoppingCartShoppingCartThumbnail
   * @param string $ShoppingCartShoppingCartItemNr
   * @param string $ShoppingCartShoppingCartVariations
   * @param string $ShoppingCartShoppingCartPersonalize
   * @param string $ShoppingCartShoppingCartPrice
   * @param string $ShoppingCartShoppingCartTotals
   * @param string $ShoppingCartShoppingCartDiscount
   * @param string $ShoppingCartShoppingCartDiscountPrice
   * @param string $ShoppingCartShoppingCart0a
   * @param string $ShoppingCartShoppingCart0a00hover
   * @param string $Layouta
   * @param string $Layouta00hover
   * @param string $Layouta00visited
   * @param string $LayoutHR
   * @param string $LayoutHorizontalNav
   * @param string $LayoutHorizontalNavSeperator
   * @param string $LayoutHorizontalNavItem0a
   * @param string $LayoutHorizontalNavItem0a00hover
   * @param string $ProductProductDetailsAvailability
   * @param string $CatalogCatalogCategoryTrail0a
   * @param string $CatalogCatalogCategoryTrail0a00hover
   * @param string $CheckOutCheckOutHeader
   * @param string $CheckOutCheckOutText
   * @param string $CheckOutCheckOutSubHeader
   * @param string $CheckOutOrderDetailsShippingHeader
   * @param string $CheckOutOrderDetailsSectionSubHeader
   * @param string $CheckOutOrderDetailsOrderItems
   * @param string $CheckOutOrderDetailsItemName
   * @param string $CheckOutOrderDetailsItemPrice
   * @param string $CheckOutOrderDetailsItemQuantity
   * @param string $CheckOutOrderDetailsSummaryHeader
   * @param string $CheckOutOrderDetailsSummaryText
   * @param string $CheckOutOrderDetailsTotal
   * @param string $CheckOutOrderDetailsDiscount
   * @param string $CheckOutAddressBookAddresses
   * @param string $CheckOutAddressBookEditor
   * @param string $CheckOutCardFieldHeaders
   * @param string $CheckOutOrderHistoryHeader
   * @param string $CheckOutOrderHistoryItem
   * @param string $CheckOutOrderHistoryAltItem
   * @param string $ControlsControl
   * @param string $ControlsControlLinkSeperator
   * @param string $CatalogCatalogProductPrice
   * @param string $CategoryCategoryProductAvailability
   * @param string $CategoryCategoryProductQuantityTextbox
   * @param string $ControlsControlItem
   * @param string $CategoryCategoryChildCategories
   * @param string $CheckOutViewOrderHeader
   * @param string $CheckOutViewOrderItem
   * @param string $CheckOutViewOrderPricingText
   * @param string $CheckOutViewOrderPricing
   * @param string $ProductProductDetailsItemNr
   * @param string $ProductRelatedProductsItemNr
   * @param string $ProductRelatedProductsMfgName
   * @param string $CategoryCategoryProductItemNr
   * @param string $CategoryCategoryProductMfgName
   * @param string $ShoppingCartShoppingCartMfgName
   * @param string $CheckOutOrderDetailsItemNr
   * @param string $CategoryCategoryChildCategoriesShortDesc
   * @param string $CategoryCategoryCategoryHeader
   * @param string $CategoryCategoryCategoryFooter
   * @param string $Layouth1
   * @param string $Layouth2
   * @param string $Layouth3
   * @param string $Layouth4
   * @param string $Layoutp
   * @param string $ShoppingCartShoppingCartCouponCode
   * @param string $CatalogCatalogProductMfgName0a
   * @param string $LayoutRequestTime
   * @param string $ProductProductDetailsAddToCart
   * @param string $ProductRelatedProductsAddToCart
   * @param string $CatalogCatalogProductRetail
   * @param string $CategoryCategoryProductRetail
   * @param string $CategoryCategoryProductAddToCart
   * @param string $CategoryCategoryProductMfgName0a
   * @param string $ProductProductDetailsQuantityPriceTable
   * @param string $ProductProductDetailsQuantityPriceQuantity
   * @param string $ProductProductDetailsQuantityPricePrice
   * @param string $ProductProductDetailsQuantityPriceQuantityLabel
   * @param string $ProductProductDetailsQuantityPricePriceLabel
   * @param string $ProductProductDetailsAttributes
   * @param string $ProductProductDetailsPhotoArea
   * @param string $ProductProductDetailsRelatedProductQuantityPriceTable
   * @param string $ProductProductDetailsRelatedProductQuantityPriceQuantityLabel
   * @param string $ProductProductDetailsRelatedProductQuantityPriceQuantity
   * @param string $ProductProductDetailsRelatedProductQuantityPricePriceLabel
   * @param string $ProductProductDetailsRelatedProductQuantityPricePrice
   * @param string $CustomCSS
   * @param string $LayoutShopCartLine
   * @param string $ProductProductDetailsPicZoom
   * @param string $CatalogPicturePopupClose
   * @param string $ProductProductDetailsThumbPhoto
   * @param string $ProductProductDetailsPicCaption
   * @param string $ProductProductDetailsVariantMatrix
   * @param string $ProductProductDetailsVariantMatrixAddToCartButton
   * @param string $ProductProductDetailsVariantMatrixHelpText
   * @param string $ProductProductDetailsVariantMatrixHeaderRow
   * @param string $ProductProductDetailsVariantMatrixLeftColumn
   * @param string $ProductProductDetailsVariantMatrixQuantityBox
   * @param string $ProductProductDetailsVariantMatrixUnavailableQuantityBox
   * @param string $ProductProductDetailsTabs
   * @param string $CatalogPicturePopupPhotoArea
   * @param string $CatalogPicturePopupCaption
   * @param string $ProductProductDetailsQuantityInStock
   * @param string $ProductProductDetailsQuantityInStockLabel
   * @param string $ProductProductDetailsQuantityInStockQuantity
   * @param string $CategoryCategoryWasPrice
   * @param string $ProductProductDetailsWasPrice
   * @param string $CategoryCategoryWasPriceLabel
   * @param string $ProductProductDetailsWasPriceLabel
   * @param string $CategoryCategoryProductSeeOptionsLink0a
   * @param string $CatalogPicturePopupInstruction
   * @param string $ProductProductGroup
   * @param string $ProductProductGroupHeader
   * @param string $ProductProductGroupItem
   * @param string $ProductProductGroupAlternatingItem
   * @param string $ProductProductGroupAddToCart
   * @param string $CategoryCategoryPageNavigation0a
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $CategoryCategoryProductThumbnailArea
   * @param string $ProductProductGroupItemPrice
   * @param string $ProductProductGroupItemWasPrice
   * @param string $ProductProductGroupAlternatingItemPrice
   * @param string $ProductProductGroupAlternatingItemWasPrice
   * @param string $CategoryCategoryProductFlags
   * @param string $ProductProductDetailsQuantityPriceWasPrice
   * @param string $CatalogCatalogNavPrevious
   * @param string $CatalogCatalogNavNext
   * @param string $CatalogCatalogNavIndex
   * @param string $CatalogCatalogItemPriceArea
   * @param string $CatalogCatalogItemQuantityBox
   * @param string $CatalogCatalogProductName
   * @param string $CatalogCatalogProductMfgName
   * @param string $CatalogCatalogNavArea
   * @param string $CatalogCatalogNavBorder
   * @param string $CatalogCatalogAddToCartButton
   * @param string $ShoppingCartShoppingCartShippingInfo
   * @param string $LayoutHorizontalNavItem
   * @param string $ProductProductDetailsSalePrice
   * @param string $ProductProductDetailsSalePriceLabel
   * @param string $ProductProductDetailsRetailPriceLabel
   * @param string $ProductProductDetailsPriceLabel
   * @param string $ProductProductDetailsPriceArea
   * @param string $ProductProductDetailsRetailPriceArea
   * @param string $ProductProductDetailsSalePriceArea
   * @param string $ProductProductDetailsWasPriceArea
   * @param string $CategoryCategoryProductPriceArea
   * @param string $CategoryCategoryProductPriceLabel
   * @param string $CategoryCategoryProductRetailPriceArea
   * @param string $CategoryCategoryProductRetailPriceLabel
   * @param string $CategoryCategoryProductRetailPrice
   * @param string $CategoryCategoryProductSalePriceArea
   * @param string $CategoryCategoryProductSalePriceLabel
   * @param string $CategoryCategoryWasPriceArea
   * @param string $CategoryCategoryProductPricing
   * @param string $CatalogCatalogProductPriceLabel
   * @param string $CatalogCatalogProductRetailPriceArea
   * @param string $CatalogCatalogProductRetailPrice
   * @param string $CatalogCatalogProductRetailPriceLabel
   * @param string $CatalogCatalogProductWasPriceArea
   * @param string $CatalogCatalogProductWasPrice
   * @param string $CatalogCatalogProductWasPriceLabel
   * @param string $CatalogCatalogProductSalePriceArea
   * @param string $CatalogCatalogProductSalePrice
   * @param string $CatalogCatalogProductSalePriceLabel
   * @param string $ControlsControlFooter
   * @param string $ShippingEstimationShippingEstimationHeader
   * @param string $ShippingEstimationShippingEstimationBody
   * @param string $ShippingEstimationShippingEstimationHelpText
   * @param string $ShippingEstimationShippingEstimationItemInfo
   * @param string $ShippingEstimationShippingEstimationItemName
   * @param string $ShippingEstimationShippingEstimationForm
   * @param string $ShippingEstimationShippingEstimationFormLabel
   * @param string $ShippingEstimationShippingEstimationFormInput
   * @param string $ShippingEstimationShippingEstimationRateTable
   * @param string $ShippingEstimationShippingEstimationRateName
   * @param string $ShippingEstimationShippingEstimationRate
   * @param string $ProductProductDetailsShippingEstimationLink
   * @param string $CategoryCategoryPageNavigation0a0span
   * @param string $CategoryProductListPagingPageLabel
   * @param string $CategoryProductListPagingCurrentPageBox
   * @param string $CategoryProductListPagingTotalPagesLabel
   * @param string $ControlsControlLink
   * @param string $Layouttd
   * @param string $Layoutdiv
   * @param string $Layoutspan
   * @param string $ProductProductDetailsReviewDisplay
   * @param string $ProductProductDetailsReviewRatingStars
   * @param string $ProductProductDetailsReviewRatingCount
   * @param string $CategoryCategoryProductRating
   * @param string $CategoryCategoryProductRatingText
   * @param string $CategoryCategoryProductRatingArea
   * @param string $CheckOutShowHideOrdersLink
   * @param string $CheckOutShowHideOrdersLink0a
   * @param string $WriteReviewProductReviewFieldLabel
   * @param string $WriteReviewProductReviewFieldInput
   * @param string $WriteReviewProductReviewFieldInput0input
   * @param string $ProductReviewsReviewPageNavBorder
   * @param string $ProductReviewsReviewPageNavigation
   * @param string $ProductReviewsReviewItem
   * @param string $ProductReviewsReviewItemTitle
   * @param string $ProductReviewsReviewItemBody
   * @param string $ProductReviewsReviewItemRatings
   * @param string $ProductReviewsReviewItemDimensionName
   * @param string $ProductReviewsReviewItemMeta
   * @param string $ProductReviewsReviewItemProsArea
   * @param string $ProductReviewsReviewItemPros
   * @param string $ProductReviewsReviewItemProsHeader
   * @param string $ProductReviewsReviewItemConsArea
   * @param string $ProductReviewsReviewItemCons
   * @param string $ProductReviewsReviewItemConsHeader
   * @param string $ProductReviewsReviewProduct
   * @param string $ProductReviewsReviewItemSeparator
   * @param string $ProductReviewsReviewItemPros0ul
   * @param string $ProductReviewsReviewItemPros0ul0li
   * @param string $ProductReviewsReviewItemCons0ul
   * @param string $ProductReviewsReviewItemCons0ul0li
   * @param string $ShoppingCartShoppingCartClear
   * @param string $ShoppingCartShoppingCartSave
   * @param string $ShoppingCartShoppingCartEmail
   * @param string $CustomCSSAfterBaseStyles
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $Id, $ThemeID, $Layoutbody, $LayoutLayout, $LayoutLayoutTop, $LayoutLayoutMiddle, $LayoutLayoutLeftColumn, $LayoutLayoutRightColumn, $LayoutLayoutContent, $LayoutLayoutMiddleBody, $LayoutLayoutBottom, $LayoutErrorText, $ControlsControlHeader, $ControlsControlLink0a, $ControlsControlLink0a00hover, $ControlsControlText, $ControlsControlInput, $ProductProductDetailsCategoryTrail, $ProductProductDetailsCategoryTrail0a, $ProductProductDetailsHeader, $ProductProductDetailsPhoto, $ProductProductDetailsManufacturerName, $ProductProductDetailsProductName, $ProductProductDetailsPricing, $ProductProductDetailsRetail, $ProductProductDetailsPrice, $ProductProductDetailsQuantity, $ProductProductDetailsQuantityTextBox, $ProductProductDetailsAddToCartButton, $ProductProductDetailsBullets, $ProductProductDetailsVariations, $ProductRelatedProductsPhoto, $ProductRelatedProductsManufacturerName, $ProductRelatedProductsProductName, $ProductRelatedProductsPricing, $ProductRelatedProductsRetail, $ProductRelatedProductsPrice, $CatalogCatalogCategoryTrail, $CatalogCatalogProductName0a, $CategoryCategoryCategoryTrail, $CategoryCategoryCategoryTrail0a, $CategoryCategoryPageNavigation, $CategoryCategoryJumpHeader, $CategoryCategoryCategoryName, $CategoryCategoryChildCategoryHeader, $CategoryCategoryChildCategoriesLink0a, $CategoryCategoryCategoryThumbnail, $CategoryCategoryProductThumbnail, $CategoryCategoryProductDetails, $CategoryCategoryProductNameLink0a, $CategoryCategoryProductShortDescription, $CategoryCategoryProductLongDescription, $CategoryCategoryProductMoreInfoLink0a, $CategoryCategoryProductPrice, $CategoryCategoryProductSalePrice, $CategoryCategoryProductSeperator, $ShoppingCartShoppingCart, $ShoppingCartShoppingCartHeader, $ShoppingCartShoppingCartThumbnail, $ShoppingCartShoppingCartItemNr, $ShoppingCartShoppingCartVariations, $ShoppingCartShoppingCartPersonalize, $ShoppingCartShoppingCartPrice, $ShoppingCartShoppingCartTotals, $ShoppingCartShoppingCartDiscount, $ShoppingCartShoppingCartDiscountPrice, $ShoppingCartShoppingCart0a, $ShoppingCartShoppingCart0a00hover, $Layouta, $Layouta00hover, $Layouta00visited, $LayoutHR, $LayoutHorizontalNav, $LayoutHorizontalNavSeperator, $LayoutHorizontalNavItem0a, $LayoutHorizontalNavItem0a00hover, $ProductProductDetailsAvailability, $CatalogCatalogCategoryTrail0a, $CatalogCatalogCategoryTrail0a00hover, $CheckOutCheckOutHeader, $CheckOutCheckOutText, $CheckOutCheckOutSubHeader, $CheckOutOrderDetailsShippingHeader, $CheckOutOrderDetailsSectionSubHeader, $CheckOutOrderDetailsOrderItems, $CheckOutOrderDetailsItemName, $CheckOutOrderDetailsItemPrice, $CheckOutOrderDetailsItemQuantity, $CheckOutOrderDetailsSummaryHeader, $CheckOutOrderDetailsSummaryText, $CheckOutOrderDetailsTotal, $CheckOutOrderDetailsDiscount, $CheckOutAddressBookAddresses, $CheckOutAddressBookEditor, $CheckOutCardFieldHeaders, $CheckOutOrderHistoryHeader, $CheckOutOrderHistoryItem, $CheckOutOrderHistoryAltItem, $ControlsControl, $ControlsControlLinkSeperator, $CatalogCatalogProductPrice, $CategoryCategoryProductAvailability, $CategoryCategoryProductQuantityTextbox, $ControlsControlItem, $CategoryCategoryChildCategories, $CheckOutViewOrderHeader, $CheckOutViewOrderItem, $CheckOutViewOrderPricingText, $CheckOutViewOrderPricing, $ProductProductDetailsItemNr, $ProductRelatedProductsItemNr, $ProductRelatedProductsMfgName, $CategoryCategoryProductItemNr, $CategoryCategoryProductMfgName, $ShoppingCartShoppingCartMfgName, $CheckOutOrderDetailsItemNr, $CategoryCategoryChildCategoriesShortDesc, $CategoryCategoryCategoryHeader, $CategoryCategoryCategoryFooter, $Layouth1, $Layouth2, $Layouth3, $Layouth4, $Layoutp, $ShoppingCartShoppingCartCouponCode, $CatalogCatalogProductMfgName0a, $LayoutRequestTime, $ProductProductDetailsAddToCart, $ProductRelatedProductsAddToCart, $CatalogCatalogProductRetail, $CategoryCategoryProductRetail, $CategoryCategoryProductAddToCart, $CategoryCategoryProductMfgName0a, $ProductProductDetailsQuantityPriceTable, $ProductProductDetailsQuantityPriceQuantity, $ProductProductDetailsQuantityPricePrice, $ProductProductDetailsQuantityPriceQuantityLabel, $ProductProductDetailsQuantityPricePriceLabel, $ProductProductDetailsAttributes, $ProductProductDetailsPhotoArea, $ProductProductDetailsRelatedProductQuantityPriceTable, $ProductProductDetailsRelatedProductQuantityPriceQuantityLabel, $ProductProductDetailsRelatedProductQuantityPriceQuantity, $ProductProductDetailsRelatedProductQuantityPricePriceLabel, $ProductProductDetailsRelatedProductQuantityPricePrice, $CustomCSS, $LayoutShopCartLine, $ProductProductDetailsPicZoom, $CatalogPicturePopupClose, $ProductProductDetailsThumbPhoto, $ProductProductDetailsPicCaption, $ProductProductDetailsVariantMatrix, $ProductProductDetailsVariantMatrixAddToCartButton, $ProductProductDetailsVariantMatrixHelpText, $ProductProductDetailsVariantMatrixHeaderRow, $ProductProductDetailsVariantMatrixLeftColumn, $ProductProductDetailsVariantMatrixQuantityBox, $ProductProductDetailsVariantMatrixUnavailableQuantityBox, $ProductProductDetailsTabs, $CatalogPicturePopupPhotoArea, $CatalogPicturePopupCaption, $ProductProductDetailsQuantityInStock, $ProductProductDetailsQuantityInStockLabel, $ProductProductDetailsQuantityInStockQuantity, $CategoryCategoryWasPrice, $ProductProductDetailsWasPrice, $CategoryCategoryWasPriceLabel, $ProductProductDetailsWasPriceLabel, $CategoryCategoryProductSeeOptionsLink0a, $CatalogPicturePopupInstruction, $ProductProductGroup, $ProductProductGroupHeader, $ProductProductGroupItem, $ProductProductGroupAlternatingItem, $ProductProductGroupAddToCart, $CategoryCategoryPageNavigation0a, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $CategoryCategoryProductThumbnailArea, $ProductProductGroupItemPrice, $ProductProductGroupItemWasPrice, $ProductProductGroupAlternatingItemPrice, $ProductProductGroupAlternatingItemWasPrice, $CategoryCategoryProductFlags, $ProductProductDetailsQuantityPriceWasPrice, $CatalogCatalogNavPrevious, $CatalogCatalogNavNext, $CatalogCatalogNavIndex, $CatalogCatalogItemPriceArea, $CatalogCatalogItemQuantityBox, $CatalogCatalogProductName, $CatalogCatalogProductMfgName, $CatalogCatalogNavArea, $CatalogCatalogNavBorder, $CatalogCatalogAddToCartButton, $ShoppingCartShoppingCartShippingInfo, $LayoutHorizontalNavItem, $ProductProductDetailsSalePrice, $ProductProductDetailsSalePriceLabel, $ProductProductDetailsRetailPriceLabel, $ProductProductDetailsPriceLabel, $ProductProductDetailsPriceArea, $ProductProductDetailsRetailPriceArea, $ProductProductDetailsSalePriceArea, $ProductProductDetailsWasPriceArea, $CategoryCategoryProductPriceArea, $CategoryCategoryProductPriceLabel, $CategoryCategoryProductRetailPriceArea, $CategoryCategoryProductRetailPriceLabel, $CategoryCategoryProductRetailPrice, $CategoryCategoryProductSalePriceArea, $CategoryCategoryProductSalePriceLabel, $CategoryCategoryWasPriceArea, $CategoryCategoryProductPricing, $CatalogCatalogProductPriceLabel, $CatalogCatalogProductRetailPriceArea, $CatalogCatalogProductRetailPrice, $CatalogCatalogProductRetailPriceLabel, $CatalogCatalogProductWasPriceArea, $CatalogCatalogProductWasPrice, $CatalogCatalogProductWasPriceLabel, $CatalogCatalogProductSalePriceArea, $CatalogCatalogProductSalePrice, $CatalogCatalogProductSalePriceLabel, $ControlsControlFooter, $ShippingEstimationShippingEstimationHeader, $ShippingEstimationShippingEstimationBody, $ShippingEstimationShippingEstimationHelpText, $ShippingEstimationShippingEstimationItemInfo, $ShippingEstimationShippingEstimationItemName, $ShippingEstimationShippingEstimationForm, $ShippingEstimationShippingEstimationFormLabel, $ShippingEstimationShippingEstimationFormInput, $ShippingEstimationShippingEstimationRateTable, $ShippingEstimationShippingEstimationRateName, $ShippingEstimationShippingEstimationRate, $ProductProductDetailsShippingEstimationLink, $CategoryCategoryPageNavigation0a0span, $CategoryProductListPagingPageLabel, $CategoryProductListPagingCurrentPageBox, $CategoryProductListPagingTotalPagesLabel, $ControlsControlLink, $Layouttd, $Layoutdiv, $Layoutspan, $ProductProductDetailsReviewDisplay, $ProductProductDetailsReviewRatingStars, $ProductProductDetailsReviewRatingCount, $CategoryCategoryProductRating, $CategoryCategoryProductRatingText, $CategoryCategoryProductRatingArea, $CheckOutShowHideOrdersLink, $CheckOutShowHideOrdersLink0a, $WriteReviewProductReviewFieldLabel, $WriteReviewProductReviewFieldInput, $WriteReviewProductReviewFieldInput0input, $ProductReviewsReviewPageNavBorder, $ProductReviewsReviewPageNavigation, $ProductReviewsReviewItem, $ProductReviewsReviewItemTitle, $ProductReviewsReviewItemBody, $ProductReviewsReviewItemRatings, $ProductReviewsReviewItemDimensionName, $ProductReviewsReviewItemMeta, $ProductReviewsReviewItemProsArea, $ProductReviewsReviewItemPros, $ProductReviewsReviewItemProsHeader, $ProductReviewsReviewItemConsArea, $ProductReviewsReviewItemCons, $ProductReviewsReviewItemConsHeader, $ProductReviewsReviewProduct, $ProductReviewsReviewItemSeparator, $ProductReviewsReviewItemPros0ul, $ProductReviewsReviewItemPros0ul0li, $ProductReviewsReviewItemCons0ul, $ProductReviewsReviewItemCons0ul0li, $ShoppingCartShoppingCartClear, $ShoppingCartShoppingCartSave, $ShoppingCartShoppingCartEmail, $CustomCSSAfterBaseStyles)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->Id = $Id;
    $this->ThemeID = $ThemeID;
    $this->Layoutbody = $Layoutbody;
    $this->LayoutLayout = $LayoutLayout;
    $this->LayoutLayoutTop = $LayoutLayoutTop;
    $this->LayoutLayoutMiddle = $LayoutLayoutMiddle;
    $this->LayoutLayoutLeftColumn = $LayoutLayoutLeftColumn;
    $this->LayoutLayoutRightColumn = $LayoutLayoutRightColumn;
    $this->LayoutLayoutContent = $LayoutLayoutContent;
    $this->LayoutLayoutMiddleBody = $LayoutLayoutMiddleBody;
    $this->LayoutLayoutBottom = $LayoutLayoutBottom;
    $this->LayoutErrorText = $LayoutErrorText;
    $this->ControlsControlHeader = $ControlsControlHeader;
    $this->ControlsControlLink0a = $ControlsControlLink0a;
    $this->ControlsControlLink0a00hover = $ControlsControlLink0a00hover;
    $this->ControlsControlText = $ControlsControlText;
    $this->ControlsControlInput = $ControlsControlInput;
    $this->ProductProductDetailsCategoryTrail = $ProductProductDetailsCategoryTrail;
    $this->ProductProductDetailsCategoryTrail0a = $ProductProductDetailsCategoryTrail0a;
    $this->ProductProductDetailsHeader = $ProductProductDetailsHeader;
    $this->ProductProductDetailsPhoto = $ProductProductDetailsPhoto;
    $this->ProductProductDetailsManufacturerName = $ProductProductDetailsManufacturerName;
    $this->ProductProductDetailsProductName = $ProductProductDetailsProductName;
    $this->ProductProductDetailsPricing = $ProductProductDetailsPricing;
    $this->ProductProductDetailsRetail = $ProductProductDetailsRetail;
    $this->ProductProductDetailsPrice = $ProductProductDetailsPrice;
    $this->ProductProductDetailsQuantity = $ProductProductDetailsQuantity;
    $this->ProductProductDetailsQuantityTextBox = $ProductProductDetailsQuantityTextBox;
    $this->ProductProductDetailsAddToCartButton = $ProductProductDetailsAddToCartButton;
    $this->ProductProductDetailsBullets = $ProductProductDetailsBullets;
    $this->ProductProductDetailsVariations = $ProductProductDetailsVariations;
    $this->ProductRelatedProductsPhoto = $ProductRelatedProductsPhoto;
    $this->ProductRelatedProductsManufacturerName = $ProductRelatedProductsManufacturerName;
    $this->ProductRelatedProductsProductName = $ProductRelatedProductsProductName;
    $this->ProductRelatedProductsPricing = $ProductRelatedProductsPricing;
    $this->ProductRelatedProductsRetail = $ProductRelatedProductsRetail;
    $this->ProductRelatedProductsPrice = $ProductRelatedProductsPrice;
    $this->CatalogCatalogCategoryTrail = $CatalogCatalogCategoryTrail;
    $this->CatalogCatalogProductName0a = $CatalogCatalogProductName0a;
    $this->CategoryCategoryCategoryTrail = $CategoryCategoryCategoryTrail;
    $this->CategoryCategoryCategoryTrail0a = $CategoryCategoryCategoryTrail0a;
    $this->CategoryCategoryPageNavigation = $CategoryCategoryPageNavigation;
    $this->CategoryCategoryJumpHeader = $CategoryCategoryJumpHeader;
    $this->CategoryCategoryCategoryName = $CategoryCategoryCategoryName;
    $this->CategoryCategoryChildCategoryHeader = $CategoryCategoryChildCategoryHeader;
    $this->CategoryCategoryChildCategoriesLink0a = $CategoryCategoryChildCategoriesLink0a;
    $this->CategoryCategoryCategoryThumbnail = $CategoryCategoryCategoryThumbnail;
    $this->CategoryCategoryProductThumbnail = $CategoryCategoryProductThumbnail;
    $this->CategoryCategoryProductDetails = $CategoryCategoryProductDetails;
    $this->CategoryCategoryProductNameLink0a = $CategoryCategoryProductNameLink0a;
    $this->CategoryCategoryProductShortDescription = $CategoryCategoryProductShortDescription;
    $this->CategoryCategoryProductLongDescription = $CategoryCategoryProductLongDescription;
    $this->CategoryCategoryProductMoreInfoLink0a = $CategoryCategoryProductMoreInfoLink0a;
    $this->CategoryCategoryProductPrice = $CategoryCategoryProductPrice;
    $this->CategoryCategoryProductSalePrice = $CategoryCategoryProductSalePrice;
    $this->CategoryCategoryProductSeperator = $CategoryCategoryProductSeperator;
    $this->ShoppingCartShoppingCart = $ShoppingCartShoppingCart;
    $this->ShoppingCartShoppingCartHeader = $ShoppingCartShoppingCartHeader;
    $this->ShoppingCartShoppingCartThumbnail = $ShoppingCartShoppingCartThumbnail;
    $this->ShoppingCartShoppingCartItemNr = $ShoppingCartShoppingCartItemNr;
    $this->ShoppingCartShoppingCartVariations = $ShoppingCartShoppingCartVariations;
    $this->ShoppingCartShoppingCartPersonalize = $ShoppingCartShoppingCartPersonalize;
    $this->ShoppingCartShoppingCartPrice = $ShoppingCartShoppingCartPrice;
    $this->ShoppingCartShoppingCartTotals = $ShoppingCartShoppingCartTotals;
    $this->ShoppingCartShoppingCartDiscount = $ShoppingCartShoppingCartDiscount;
    $this->ShoppingCartShoppingCartDiscountPrice = $ShoppingCartShoppingCartDiscountPrice;
    $this->ShoppingCartShoppingCart0a = $ShoppingCartShoppingCart0a;
    $this->ShoppingCartShoppingCart0a00hover = $ShoppingCartShoppingCart0a00hover;
    $this->Layouta = $Layouta;
    $this->Layouta00hover = $Layouta00hover;
    $this->Layouta00visited = $Layouta00visited;
    $this->LayoutHR = $LayoutHR;
    $this->LayoutHorizontalNav = $LayoutHorizontalNav;
    $this->LayoutHorizontalNavSeperator = $LayoutHorizontalNavSeperator;
    $this->LayoutHorizontalNavItem0a = $LayoutHorizontalNavItem0a;
    $this->LayoutHorizontalNavItem0a00hover = $LayoutHorizontalNavItem0a00hover;
    $this->ProductProductDetailsAvailability = $ProductProductDetailsAvailability;
    $this->CatalogCatalogCategoryTrail0a = $CatalogCatalogCategoryTrail0a;
    $this->CatalogCatalogCategoryTrail0a00hover = $CatalogCatalogCategoryTrail0a00hover;
    $this->CheckOutCheckOutHeader = $CheckOutCheckOutHeader;
    $this->CheckOutCheckOutText = $CheckOutCheckOutText;
    $this->CheckOutCheckOutSubHeader = $CheckOutCheckOutSubHeader;
    $this->CheckOutOrderDetailsShippingHeader = $CheckOutOrderDetailsShippingHeader;
    $this->CheckOutOrderDetailsSectionSubHeader = $CheckOutOrderDetailsSectionSubHeader;
    $this->CheckOutOrderDetailsOrderItems = $CheckOutOrderDetailsOrderItems;
    $this->CheckOutOrderDetailsItemName = $CheckOutOrderDetailsItemName;
    $this->CheckOutOrderDetailsItemPrice = $CheckOutOrderDetailsItemPrice;
    $this->CheckOutOrderDetailsItemQuantity = $CheckOutOrderDetailsItemQuantity;
    $this->CheckOutOrderDetailsSummaryHeader = $CheckOutOrderDetailsSummaryHeader;
    $this->CheckOutOrderDetailsSummaryText = $CheckOutOrderDetailsSummaryText;
    $this->CheckOutOrderDetailsTotal = $CheckOutOrderDetailsTotal;
    $this->CheckOutOrderDetailsDiscount = $CheckOutOrderDetailsDiscount;
    $this->CheckOutAddressBookAddresses = $CheckOutAddressBookAddresses;
    $this->CheckOutAddressBookEditor = $CheckOutAddressBookEditor;
    $this->CheckOutCardFieldHeaders = $CheckOutCardFieldHeaders;
    $this->CheckOutOrderHistoryHeader = $CheckOutOrderHistoryHeader;
    $this->CheckOutOrderHistoryItem = $CheckOutOrderHistoryItem;
    $this->CheckOutOrderHistoryAltItem = $CheckOutOrderHistoryAltItem;
    $this->ControlsControl = $ControlsControl;
    $this->ControlsControlLinkSeperator = $ControlsControlLinkSeperator;
    $this->CatalogCatalogProductPrice = $CatalogCatalogProductPrice;
    $this->CategoryCategoryProductAvailability = $CategoryCategoryProductAvailability;
    $this->CategoryCategoryProductQuantityTextbox = $CategoryCategoryProductQuantityTextbox;
    $this->ControlsControlItem = $ControlsControlItem;
    $this->CategoryCategoryChildCategories = $CategoryCategoryChildCategories;
    $this->CheckOutViewOrderHeader = $CheckOutViewOrderHeader;
    $this->CheckOutViewOrderItem = $CheckOutViewOrderItem;
    $this->CheckOutViewOrderPricingText = $CheckOutViewOrderPricingText;
    $this->CheckOutViewOrderPricing = $CheckOutViewOrderPricing;
    $this->ProductProductDetailsItemNr = $ProductProductDetailsItemNr;
    $this->ProductRelatedProductsItemNr = $ProductRelatedProductsItemNr;
    $this->ProductRelatedProductsMfgName = $ProductRelatedProductsMfgName;
    $this->CategoryCategoryProductItemNr = $CategoryCategoryProductItemNr;
    $this->CategoryCategoryProductMfgName = $CategoryCategoryProductMfgName;
    $this->ShoppingCartShoppingCartMfgName = $ShoppingCartShoppingCartMfgName;
    $this->CheckOutOrderDetailsItemNr = $CheckOutOrderDetailsItemNr;
    $this->CategoryCategoryChildCategoriesShortDesc = $CategoryCategoryChildCategoriesShortDesc;
    $this->CategoryCategoryCategoryHeader = $CategoryCategoryCategoryHeader;
    $this->CategoryCategoryCategoryFooter = $CategoryCategoryCategoryFooter;
    $this->Layouth1 = $Layouth1;
    $this->Layouth2 = $Layouth2;
    $this->Layouth3 = $Layouth3;
    $this->Layouth4 = $Layouth4;
    $this->Layoutp = $Layoutp;
    $this->ShoppingCartShoppingCartCouponCode = $ShoppingCartShoppingCartCouponCode;
    $this->CatalogCatalogProductMfgName0a = $CatalogCatalogProductMfgName0a;
    $this->LayoutRequestTime = $LayoutRequestTime;
    $this->ProductProductDetailsAddToCart = $ProductProductDetailsAddToCart;
    $this->ProductRelatedProductsAddToCart = $ProductRelatedProductsAddToCart;
    $this->CatalogCatalogProductRetail = $CatalogCatalogProductRetail;
    $this->CategoryCategoryProductRetail = $CategoryCategoryProductRetail;
    $this->CategoryCategoryProductAddToCart = $CategoryCategoryProductAddToCart;
    $this->CategoryCategoryProductMfgName0a = $CategoryCategoryProductMfgName0a;
    $this->ProductProductDetailsQuantityPriceTable = $ProductProductDetailsQuantityPriceTable;
    $this->ProductProductDetailsQuantityPriceQuantity = $ProductProductDetailsQuantityPriceQuantity;
    $this->ProductProductDetailsQuantityPricePrice = $ProductProductDetailsQuantityPricePrice;
    $this->ProductProductDetailsQuantityPriceQuantityLabel = $ProductProductDetailsQuantityPriceQuantityLabel;
    $this->ProductProductDetailsQuantityPricePriceLabel = $ProductProductDetailsQuantityPricePriceLabel;
    $this->ProductProductDetailsAttributes = $ProductProductDetailsAttributes;
    $this->ProductProductDetailsPhotoArea = $ProductProductDetailsPhotoArea;
    $this->ProductProductDetailsRelatedProductQuantityPriceTable = $ProductProductDetailsRelatedProductQuantityPriceTable;
    $this->ProductProductDetailsRelatedProductQuantityPriceQuantityLabel = $ProductProductDetailsRelatedProductQuantityPriceQuantityLabel;
    $this->ProductProductDetailsRelatedProductQuantityPriceQuantity = $ProductProductDetailsRelatedProductQuantityPriceQuantity;
    $this->ProductProductDetailsRelatedProductQuantityPricePriceLabel = $ProductProductDetailsRelatedProductQuantityPricePriceLabel;
    $this->ProductProductDetailsRelatedProductQuantityPricePrice = $ProductProductDetailsRelatedProductQuantityPricePrice;
    $this->CustomCSS = $CustomCSS;
    $this->LayoutShopCartLine = $LayoutShopCartLine;
    $this->ProductProductDetailsPicZoom = $ProductProductDetailsPicZoom;
    $this->CatalogPicturePopupClose = $CatalogPicturePopupClose;
    $this->ProductProductDetailsThumbPhoto = $ProductProductDetailsThumbPhoto;
    $this->ProductProductDetailsPicCaption = $ProductProductDetailsPicCaption;
    $this->ProductProductDetailsVariantMatrix = $ProductProductDetailsVariantMatrix;
    $this->ProductProductDetailsVariantMatrixAddToCartButton = $ProductProductDetailsVariantMatrixAddToCartButton;
    $this->ProductProductDetailsVariantMatrixHelpText = $ProductProductDetailsVariantMatrixHelpText;
    $this->ProductProductDetailsVariantMatrixHeaderRow = $ProductProductDetailsVariantMatrixHeaderRow;
    $this->ProductProductDetailsVariantMatrixLeftColumn = $ProductProductDetailsVariantMatrixLeftColumn;
    $this->ProductProductDetailsVariantMatrixQuantityBox = $ProductProductDetailsVariantMatrixQuantityBox;
    $this->ProductProductDetailsVariantMatrixUnavailableQuantityBox = $ProductProductDetailsVariantMatrixUnavailableQuantityBox;
    $this->ProductProductDetailsTabs = $ProductProductDetailsTabs;
    $this->CatalogPicturePopupPhotoArea = $CatalogPicturePopupPhotoArea;
    $this->CatalogPicturePopupCaption = $CatalogPicturePopupCaption;
    $this->ProductProductDetailsQuantityInStock = $ProductProductDetailsQuantityInStock;
    $this->ProductProductDetailsQuantityInStockLabel = $ProductProductDetailsQuantityInStockLabel;
    $this->ProductProductDetailsQuantityInStockQuantity = $ProductProductDetailsQuantityInStockQuantity;
    $this->CategoryCategoryWasPrice = $CategoryCategoryWasPrice;
    $this->ProductProductDetailsWasPrice = $ProductProductDetailsWasPrice;
    $this->CategoryCategoryWasPriceLabel = $CategoryCategoryWasPriceLabel;
    $this->ProductProductDetailsWasPriceLabel = $ProductProductDetailsWasPriceLabel;
    $this->CategoryCategoryProductSeeOptionsLink0a = $CategoryCategoryProductSeeOptionsLink0a;
    $this->CatalogPicturePopupInstruction = $CatalogPicturePopupInstruction;
    $this->ProductProductGroup = $ProductProductGroup;
    $this->ProductProductGroupHeader = $ProductProductGroupHeader;
    $this->ProductProductGroupItem = $ProductProductGroupItem;
    $this->ProductProductGroupAlternatingItem = $ProductProductGroupAlternatingItem;
    $this->ProductProductGroupAddToCart = $ProductProductGroupAddToCart;
    $this->CategoryCategoryPageNavigation0a = $CategoryCategoryPageNavigation0a;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->CategoryCategoryProductThumbnailArea = $CategoryCategoryProductThumbnailArea;
    $this->ProductProductGroupItemPrice = $ProductProductGroupItemPrice;
    $this->ProductProductGroupItemWasPrice = $ProductProductGroupItemWasPrice;
    $this->ProductProductGroupAlternatingItemPrice = $ProductProductGroupAlternatingItemPrice;
    $this->ProductProductGroupAlternatingItemWasPrice = $ProductProductGroupAlternatingItemWasPrice;
    $this->CategoryCategoryProductFlags = $CategoryCategoryProductFlags;
    $this->ProductProductDetailsQuantityPriceWasPrice = $ProductProductDetailsQuantityPriceWasPrice;
    $this->CatalogCatalogNavPrevious = $CatalogCatalogNavPrevious;
    $this->CatalogCatalogNavNext = $CatalogCatalogNavNext;
    $this->CatalogCatalogNavIndex = $CatalogCatalogNavIndex;
    $this->CatalogCatalogItemPriceArea = $CatalogCatalogItemPriceArea;
    $this->CatalogCatalogItemQuantityBox = $CatalogCatalogItemQuantityBox;
    $this->CatalogCatalogProductName = $CatalogCatalogProductName;
    $this->CatalogCatalogProductMfgName = $CatalogCatalogProductMfgName;
    $this->CatalogCatalogNavArea = $CatalogCatalogNavArea;
    $this->CatalogCatalogNavBorder = $CatalogCatalogNavBorder;
    $this->CatalogCatalogAddToCartButton = $CatalogCatalogAddToCartButton;
    $this->ShoppingCartShoppingCartShippingInfo = $ShoppingCartShoppingCartShippingInfo;
    $this->LayoutHorizontalNavItem = $LayoutHorizontalNavItem;
    $this->ProductProductDetailsSalePrice = $ProductProductDetailsSalePrice;
    $this->ProductProductDetailsSalePriceLabel = $ProductProductDetailsSalePriceLabel;
    $this->ProductProductDetailsRetailPriceLabel = $ProductProductDetailsRetailPriceLabel;
    $this->ProductProductDetailsPriceLabel = $ProductProductDetailsPriceLabel;
    $this->ProductProductDetailsPriceArea = $ProductProductDetailsPriceArea;
    $this->ProductProductDetailsRetailPriceArea = $ProductProductDetailsRetailPriceArea;
    $this->ProductProductDetailsSalePriceArea = $ProductProductDetailsSalePriceArea;
    $this->ProductProductDetailsWasPriceArea = $ProductProductDetailsWasPriceArea;
    $this->CategoryCategoryProductPriceArea = $CategoryCategoryProductPriceArea;
    $this->CategoryCategoryProductPriceLabel = $CategoryCategoryProductPriceLabel;
    $this->CategoryCategoryProductRetailPriceArea = $CategoryCategoryProductRetailPriceArea;
    $this->CategoryCategoryProductRetailPriceLabel = $CategoryCategoryProductRetailPriceLabel;
    $this->CategoryCategoryProductRetailPrice = $CategoryCategoryProductRetailPrice;
    $this->CategoryCategoryProductSalePriceArea = $CategoryCategoryProductSalePriceArea;
    $this->CategoryCategoryProductSalePriceLabel = $CategoryCategoryProductSalePriceLabel;
    $this->CategoryCategoryWasPriceArea = $CategoryCategoryWasPriceArea;
    $this->CategoryCategoryProductPricing = $CategoryCategoryProductPricing;
    $this->CatalogCatalogProductPriceLabel = $CatalogCatalogProductPriceLabel;
    $this->CatalogCatalogProductRetailPriceArea = $CatalogCatalogProductRetailPriceArea;
    $this->CatalogCatalogProductRetailPrice = $CatalogCatalogProductRetailPrice;
    $this->CatalogCatalogProductRetailPriceLabel = $CatalogCatalogProductRetailPriceLabel;
    $this->CatalogCatalogProductWasPriceArea = $CatalogCatalogProductWasPriceArea;
    $this->CatalogCatalogProductWasPrice = $CatalogCatalogProductWasPrice;
    $this->CatalogCatalogProductWasPriceLabel = $CatalogCatalogProductWasPriceLabel;
    $this->CatalogCatalogProductSalePriceArea = $CatalogCatalogProductSalePriceArea;
    $this->CatalogCatalogProductSalePrice = $CatalogCatalogProductSalePrice;
    $this->CatalogCatalogProductSalePriceLabel = $CatalogCatalogProductSalePriceLabel;
    $this->ControlsControlFooter = $ControlsControlFooter;
    $this->ShippingEstimationShippingEstimationHeader = $ShippingEstimationShippingEstimationHeader;
    $this->ShippingEstimationShippingEstimationBody = $ShippingEstimationShippingEstimationBody;
    $this->ShippingEstimationShippingEstimationHelpText = $ShippingEstimationShippingEstimationHelpText;
    $this->ShippingEstimationShippingEstimationItemInfo = $ShippingEstimationShippingEstimationItemInfo;
    $this->ShippingEstimationShippingEstimationItemName = $ShippingEstimationShippingEstimationItemName;
    $this->ShippingEstimationShippingEstimationForm = $ShippingEstimationShippingEstimationForm;
    $this->ShippingEstimationShippingEstimationFormLabel = $ShippingEstimationShippingEstimationFormLabel;
    $this->ShippingEstimationShippingEstimationFormInput = $ShippingEstimationShippingEstimationFormInput;
    $this->ShippingEstimationShippingEstimationRateTable = $ShippingEstimationShippingEstimationRateTable;
    $this->ShippingEstimationShippingEstimationRateName = $ShippingEstimationShippingEstimationRateName;
    $this->ShippingEstimationShippingEstimationRate = $ShippingEstimationShippingEstimationRate;
    $this->ProductProductDetailsShippingEstimationLink = $ProductProductDetailsShippingEstimationLink;
    $this->CategoryCategoryPageNavigation0a0span = $CategoryCategoryPageNavigation0a0span;
    $this->CategoryProductListPagingPageLabel = $CategoryProductListPagingPageLabel;
    $this->CategoryProductListPagingCurrentPageBox = $CategoryProductListPagingCurrentPageBox;
    $this->CategoryProductListPagingTotalPagesLabel = $CategoryProductListPagingTotalPagesLabel;
    $this->ControlsControlLink = $ControlsControlLink;
    $this->Layouttd = $Layouttd;
    $this->Layoutdiv = $Layoutdiv;
    $this->Layoutspan = $Layoutspan;
    $this->ProductProductDetailsReviewDisplay = $ProductProductDetailsReviewDisplay;
    $this->ProductProductDetailsReviewRatingStars = $ProductProductDetailsReviewRatingStars;
    $this->ProductProductDetailsReviewRatingCount = $ProductProductDetailsReviewRatingCount;
    $this->CategoryCategoryProductRating = $CategoryCategoryProductRating;
    $this->CategoryCategoryProductRatingText = $CategoryCategoryProductRatingText;
    $this->CategoryCategoryProductRatingArea = $CategoryCategoryProductRatingArea;
    $this->CheckOutShowHideOrdersLink = $CheckOutShowHideOrdersLink;
    $this->CheckOutShowHideOrdersLink0a = $CheckOutShowHideOrdersLink0a;
    $this->WriteReviewProductReviewFieldLabel = $WriteReviewProductReviewFieldLabel;
    $this->WriteReviewProductReviewFieldInput = $WriteReviewProductReviewFieldInput;
    $this->WriteReviewProductReviewFieldInput0input = $WriteReviewProductReviewFieldInput0input;
    $this->ProductReviewsReviewPageNavBorder = $ProductReviewsReviewPageNavBorder;
    $this->ProductReviewsReviewPageNavigation = $ProductReviewsReviewPageNavigation;
    $this->ProductReviewsReviewItem = $ProductReviewsReviewItem;
    $this->ProductReviewsReviewItemTitle = $ProductReviewsReviewItemTitle;
    $this->ProductReviewsReviewItemBody = $ProductReviewsReviewItemBody;
    $this->ProductReviewsReviewItemRatings = $ProductReviewsReviewItemRatings;
    $this->ProductReviewsReviewItemDimensionName = $ProductReviewsReviewItemDimensionName;
    $this->ProductReviewsReviewItemMeta = $ProductReviewsReviewItemMeta;
    $this->ProductReviewsReviewItemProsArea = $ProductReviewsReviewItemProsArea;
    $this->ProductReviewsReviewItemPros = $ProductReviewsReviewItemPros;
    $this->ProductReviewsReviewItemProsHeader = $ProductReviewsReviewItemProsHeader;
    $this->ProductReviewsReviewItemConsArea = $ProductReviewsReviewItemConsArea;
    $this->ProductReviewsReviewItemCons = $ProductReviewsReviewItemCons;
    $this->ProductReviewsReviewItemConsHeader = $ProductReviewsReviewItemConsHeader;
    $this->ProductReviewsReviewProduct = $ProductReviewsReviewProduct;
    $this->ProductReviewsReviewItemSeparator = $ProductReviewsReviewItemSeparator;
    $this->ProductReviewsReviewItemPros0ul = $ProductReviewsReviewItemPros0ul;
    $this->ProductReviewsReviewItemPros0ul0li = $ProductReviewsReviewItemPros0ul0li;
    $this->ProductReviewsReviewItemCons0ul = $ProductReviewsReviewItemCons0ul;
    $this->ProductReviewsReviewItemCons0ul0li = $ProductReviewsReviewItemCons0ul0li;
    $this->ShoppingCartShoppingCartClear = $ShoppingCartShoppingCartClear;
    $this->ShoppingCartShoppingCartSave = $ShoppingCartShoppingCartSave;
    $this->ShoppingCartShoppingCartEmail = $ShoppingCartShoppingCartEmail;
    $this->CustomCSSAfterBaseStyles = $CustomCSSAfterBaseStyles;
  }

}

}
