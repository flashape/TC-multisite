<?php

if (!class_exists("ThemeTrans", false)) 
{
class ThemeTrans
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
   * @var DataInt32 $ThemeID
   * @access public
   */
  public $ThemeID;

  /**
   * 
   * @var string $ThemeName
   * @access public
   */
  public $ThemeName;

  /**
   * 
   * @var string $LeftColumnHTML
   * @access public
   */
  public $LeftColumnHTML;

  /**
   * 
   * @var string $RightColumnHTML
   * @access public
   */
  public $RightColumnHTML;

  /**
   * 
   * @var string $HeaderControl
   * @access public
   */
  public $HeaderControl;

  /**
   * 
   * @var string $FooterControl
   * @access public
   */
  public $FooterControl;

  /**
   * 
   * @var string $StyleSheet
   * @access public
   */
  public $StyleSheet;

  /**
   * 
   * @var string $TopHtml
   * @access public
   */
  public $TopHtml;

  /**
   * 
   * @var string $LeftHtml
   * @access public
   */
  public $LeftHtml;

  /**
   * 
   * @var string $RightHtml
   * @access public
   */
  public $RightHtml;

  /**
   * 
   * @var string $BottomHtml
   * @access public
   */
  public $BottomHtml;

  /**
   * 
   * @var boolean $stockTheme
   * @access public
   */
  public $stockTheme;

  /**
   * 
   * @var string $screenshot
   * @access public
   */
  public $screenshot;

  /**
   * 
   * @var boolean $UseTabs
   * @access public
   */
  public $UseTabs;

  /**
   * 
   * @var string $ButtonPath
   * @access public
   */
  public $ButtonPath;

  /**
   * 
   * @var string $Javascript
   * @access public
   */
  public $Javascript;

  /**
   * 
   * @var boolean $ProductListPaging
   * @access public
   */
  public $ProductListPaging;

  /**
   * 
   * @var boolean $OnePageCheckOut
   * @access public
   */
  public $OnePageCheckOut;

  /**
   * 
   * @var string $LayoutWidth
   * @access public
   */
  public $LayoutWidth;

  /**
   * 
   * @var string $LayoutLeftColumnWidth
   * @access public
   */
  public $LayoutLeftColumnWidth;

  /**
   * 
   * @var string $LayoutContentWidth
   * @access public
   */
  public $LayoutContentWidth;

  /**
   * 
   * @var string $LayoutRightColumnWidth
   * @access public
   */
  public $LayoutRightColumnWidth;

  /**
   * 
   * @var DataInt32 $ProductListPageSize
   * @access public
   */
  public $ProductListPageSize;

  /**
   * 
   * @var ProductListPagingType $ProductListPagingType
   * @access public
   */
  public $ProductListPagingType;

  /**
   * 
   * @var boolean $ShowProductListSortBy
   * @access public
   */
  public $ShowProductListSortBy;

  /**
   * 
   * @var CategoryLayoutDirection $CategoryLayoutDirection
   * @access public
   */
  public $CategoryLayoutDirection;

  /**
   * 
   * @var DataInt32 $CategoryProductsPerRow
   * @access public
   */
  public $CategoryProductsPerRow;

  /**
   * 
   * @var string $CategoryProductListNavigationLabel
   * @access public
   */
  public $CategoryProductListNavigationLabel;

  /**
   * 
   * @var boolean $ShoppingCartShippingCalculation
   * @access public
   */
  public $ShoppingCartShippingCalculation;

  /**
   * 
   * @var ShoppingCartShippingCalculationType $ShoppingCartShippingCalculationType
   * @access public
   */
  public $ShoppingCartShippingCalculationType;

  /**
   * 
   * @var string $CouponCodeLabel
   * @access public
   */
  public $CouponCodeLabel;

  /**
   * 
   * @var boolean $CategoryImageRoleDownToProduct
   * @access public
   */
  public $CategoryImageRoleDownToProduct;

  /**
   * 
   * @var string $RetailLabel
   * @access public
   */
  public $RetailLabel;

  /**
   * 
   * @var string $PriceLabel
   * @access public
   */
  public $PriceLabel;

  /**
   * 
   * @var boolean $UseWishlist
   * @access public
   */
  public $UseWishlist;

  /**
   * 
   * @var boolean $SearchPageUseCategories
   * @access public
   */
  public $SearchPageUseCategories;

  /**
   * 
   * @var AddToCartRedirectEnm $AddToCartRedirect
   * @access public
   */
  public $AddToCartRedirect;

  /**
   * 
   * @var ContinueShoppingOptionsEnm $ContinueShoppingOptions
   * @access public
   */
  public $ContinueShoppingOptions;

  /**
   * 
   * @var boolean $QuantityPriceLayoutVertical
   * @access public
   */
  public $QuantityPriceLayoutVertical;

  /**
   * 
   * @var DataInt32 $ThumbWidth
   * @access public
   */
  public $ThumbWidth;

  /**
   * 
   * @var DataInt32 $ThumbHeight
   * @access public
   */
  public $ThumbHeight;

  /**
   * 
   * @var string $ThumbDisplaySource
   * @access public
   */
  public $ThumbDisplaySource;

  /**
   * 
   * @var boolean $ResizeThumb
   * @access public
   */
  public $ResizeThumb;

  /**
   * 
   * @var boolean $EnlargeThumbSource
   * @access public
   */
  public $EnlargeThumbSource;

  /**
   * 
   * @var DataInt32 $ProductThumbWidth
   * @access public
   */
  public $ProductThumbWidth;

  /**
   * 
   * @var DataInt32 $ProductThumbHeight
   * @access public
   */
  public $ProductThumbHeight;

  /**
   * 
   * @var DataInt32 $ProductThumbCol
   * @access public
   */
  public $ProductThumbCol;

  /**
   * 
   * @var DataInt32 $ProductThumbRow
   * @access public
   */
  public $ProductThumbRow;

  /**
   * 
   * @var boolean $ProductUseStoredThumb
   * @access public
   */
  public $ProductUseStoredThumb;

  /**
   * 
   * @var DataInt32 $ProductPicWidth
   * @access public
   */
  public $ProductPicWidth;

  /**
   * 
   * @var DataInt32 $ProductPicHeight
   * @access public
   */
  public $ProductPicHeight;

  /**
   * 
   * @var DataInt32 $ShoppingCartPicWidth
   * @access public
   */
  public $ShoppingCartPicWidth;

  /**
   * 
   * @var DataInt32 $ShoppingCartPicHeight
   * @access public
   */
  public $ShoppingCartPicHeight;

  /**
   * 
   * @var boolean $ShowRelatedItemsTab
   * @access public
   */
  public $ShowRelatedItemsTab;

  /**
   * 
   * @var DataInt32 $PicturePopupPageWidth
   * @access public
   */
  public $PicturePopupPageWidth;

  /**
   * 
   * @var DataInt32 $PicturePopupPageHeight
   * @access public
   */
  public $PicturePopupPageHeight;

  /**
   * 
   * @var DataInt32 $PicturePopupPicWidth
   * @access public
   */
  public $PicturePopupPicWidth;

  /**
   * 
   * @var DataInt32 $PicturePopupPicHeight
   * @access public
   */
  public $PicturePopupPicHeight;

  /**
   * 
   * @var boolean $PicturePopupEnlargePic
   * @access public
   */
  public $PicturePopupEnlargePic;

  /**
   * 
   * @var boolean $PicturePopupSizeProp
   * @access public
   */
  public $PicturePopupSizeProp;

  /**
   * 
   * @var boolean $ShowQuantityInStock
   * @access public
   */
  public $ShowQuantityInStock;

  /**
   * 
   * @var string $QuantityInStockLabel
   * @access public
   */
  public $QuantityInStockLabel;

  /**
   * 
   * @var string $WasLabel
   * @access public
   */
  public $WasLabel;

  /**
   * 
   * @var string $NowLabel
   * @access public
   */
  public $NowLabel;

  /**
   * 
   * @var DataInt32 $RelatedThumbWidth
   * @access public
   */
  public $RelatedThumbWidth;

  /**
   * 
   * @var DataInt32 $RelatedThumbHeight
   * @access public
   */
  public $RelatedThumbHeight;

  /**
   * 
   * @var string $RelatedThumbDisplaySource
   * @access public
   */
  public $RelatedThumbDisplaySource;

  /**
   * 
   * @var boolean $RelatedResizeThumb
   * @access public
   */
  public $RelatedResizeThumb;

  /**
   * 
   * @var boolean $RelatedEnlargeThumbSource
   * @access public
   */
  public $RelatedEnlargeThumbSource;

  /**
   * 
   * @var boolean $RelatedResizeProp
   * @access public
   */
  public $RelatedResizeProp;

  /**
   * 
   * @var boolean $ThumbSizeProp
   * @access public
   */
  public $ThumbSizeProp;

  /**
   * 
   * @var boolean $ProductSizeProp
   * @access public
   */
  public $ProductSizeProp;

  /**
   * 
   * @var boolean $ProductPicHoverReset
   * @access public
   */
  public $ProductPicHoverReset;

  /**
   * 
   * @var boolean $ShoppingCartSizeProp
   * @access public
   */
  public $ShoppingCartSizeProp;

  /**
   * 
   * @var boolean $ProductEnlargePic
   * @access public
   */
  public $ProductEnlargePic;

  /**
   * 
   * @var boolean $ProductDetailsShowVariantMatrix
   * @access public
   */
  public $ProductDetailsShowVariantMatrix;

  /**
   * 
   * @var string $ProductDetailsVariantMatrixHelpText
   * @access public
   */
  public $ProductDetailsVariantMatrixHelpText;

  /**
   * 
   * @var string $HiddenPriceText
   * @access public
   */
  public $HiddenPriceText;

  /**
   * 
   * @var DataInt32 $PicturePopupFlashPageWidth
   * @access public
   */
  public $PicturePopupFlashPageWidth;

  /**
   * 
   * @var DataInt32 $PicturePopupFlashPageHeight
   * @access public
   */
  public $PicturePopupFlashPageHeight;

  /**
   * 
   * @var DataInt32 $PicturePopupFlashPicHeight
   * @access public
   */
  public $PicturePopupFlashPicHeight;

  /**
   * 
   * @var string $PicturePopupInstruction
   * @access public
   */
  public $PicturePopupInstruction;

  /**
   * 
   * @var DataInt32 $PicturePopupFlashPicWidth
   * @access public
   */
  public $PicturePopupFlashPicWidth;

  /**
   * 
   * @var boolean $ShowETADate
   * @access public
   */
  public $ShowETADate;

  /**
   * 
   * @var boolean $HideCategoryHeaderOnShowAll
   * @access public
   */
  public $HideCategoryHeaderOnShowAll;

  /**
   * 
   * @var boolean $HideSubcategoriesOnShowAll
   * @access public
   */
  public $HideSubcategoriesOnShowAll;

  /**
   * 
   * @var boolean $HideCategoryHeaderOnSort
   * @access public
   */
  public $HideCategoryHeaderOnSort;

  /**
   * 
   * @var boolean $HideSubcategoriesOnSort
   * @access public
   */
  public $HideSubcategoriesOnSort;

  /**
   * 
   * @var string $DefaultProductImage
   * @access public
   */
  public $DefaultProductImage;

  /**
   * 
   * @var boolean $HideProductGroupHeaders
   * @access public
   */
  public $HideProductGroupHeaders;

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
   * @var VariantMatrixDisplayDirection $ProductDetailsVariantMatrixDisplayDirection
   * @access public
   */
  public $ProductDetailsVariantMatrixDisplayDirection;

  /**
   * 
   * @var string $HeaderControlHome
   * @access public
   */
  public $HeaderControlHome;

  /**
   * 
   * @var string $FooterControlHome
   * @access public
   */
  public $FooterControlHome;

  /**
   * 
   * @var boolean $AllowOrderGifting
   * @access public
   */
  public $AllowOrderGifting;

  /**
   * 
   * @var boolean $ShowManufacturerInCart
   * @access public
   */
  public $ShowManufacturerInCart;

  /**
   * 
   * @var boolean $AllowPublicOrderComments
   * @access public
   */
  public $AllowPublicOrderComments;

  /**
   * 
   * @var DataInt32 $CatalogPageSize
   * @access public
   */
  public $CatalogPageSize;

  /**
   * 
   * @var boolean $ShowManufacturerOnInvoice
   * @access public
   */
  public $ShowManufacturerOnInvoice;

  /**
   * 
   * @var boolean $UseCategoryDefaultProductPicture
   * @access public
   */
  public $UseCategoryDefaultProductPicture;

  /**
   * 
   * @var boolean $EnableSocialBookmarking
   * @access public
   */
  public $EnableSocialBookmarking;

  /**
   * 
   * @var string $ProductZoomInnerText
   * @access public
   */
  public $ProductZoomInnerText;

  /**
   * 
   * @var string $ProductResetInnerText
   * @access public
   */
  public $ProductResetInnerText;

  /**
   * 
   * @var boolean $ProductVariantOptionShowSwatch
   * @access public
   */
  public $ProductVariantOptionShowSwatch;

  /**
   * 
   * @var boolean $EnableProductShippingEstimation
   * @access public
   */
  public $EnableProductShippingEstimation;

  /**
   * 
   * @var boolean $ShowManufacturerTextOnly
   * @access public
   */
  public $ShowManufacturerTextOnly;

  /**
   * 
   * @var boolean $ProductListUseImagePageNav
   * @access public
   */
  public $ProductListUseImagePageNav;

  /**
   * 
   * @var string $ProductListNextPageImageUrl
   * @access public
   */
  public $ProductListNextPageImageUrl;

  /**
   * 
   * @var string $ProductListPrevPageImageUrl
   * @access public
   */
  public $ProductListPrevPageImageUrl;

  /**
   * 
   * @var string $CustomTemplate
   * @access public
   */
  public $CustomTemplate;

  /**
   * 
   * @var string $DoctypeOverride
   * @access public
   */
  public $DoctypeOverride;

  /**
   * 
   * @var string $HtmlTagAttributes
   * @access public
   */
  public $HtmlTagAttributes;

  /**
   * 
   * @var string $BodyTagAttributes
   * @access public
   */
  public $BodyTagAttributes;

  /**
   * 
   * @var string $ProductDetailsRelatedName
   * @access public
   */
  public $ProductDetailsRelatedName;

  /**
   * 
   * @var string $ProductDetailsLongDescName1
   * @access public
   */
  public $ProductDetailsLongDescName1;

  /**
   * 
   * @var string $ProductDetailsLongDescName2
   * @access public
   */
  public $ProductDetailsLongDescName2;

  /**
   * 
   * @var string $ProductDetailsLongDescName3
   * @access public
   */
  public $ProductDetailsLongDescName3;

  /**
   * 
   * @var string $ProductDetailsLongDescName4
   * @access public
   */
  public $ProductDetailsLongDescName4;

  /**
   * 
   * @var string $ProductDetailsLongDescName5
   * @access public
   */
  public $ProductDetailsLongDescName5;

  /**
   * 
   * @var AfterUpsellRedirectToEnm $AfterUpsellRedirectTo
   * @access public
   */
  public $AfterUpsellRedirectTo;

  /**
   * 
   * @var string $ReviewRatingOnImage
   * @access public
   */
  public $ReviewRatingOnImage;

  /**
   * 
   * @var string $ReviewRatingOffImage
   * @access public
   */
  public $ReviewRatingOffImage;

  /**
   * 
   * @var string $ReviewRatingHoverImage
   * @access public
   */
  public $ReviewRatingHoverImage;

  /**
   * 
   * @var string $ReviewRatingHalfOnImage
   * @access public
   */
  public $ReviewRatingHalfOnImage;

  /**
   * 
   * @var DataInt32 $ReviewPageSize
   * @access public
   */
  public $ReviewPageSize;

  /**
   * 
   * @var string $ReviewPageNavigationLabel
   * @access public
   */
  public $ReviewPageNavigationLabel;

  /**
   * 
   * @var string $ProductListDefaultSort
   * @access public
   */
  public $ProductListDefaultSort;

  /**
   * 
   * @var boolean $WriteReviewHideProsCons
   * @access public
   */
  public $WriteReviewHideProsCons;

  /**
   * 
   * @var DataInt32 $ProductListNumberedPageLinksShownCount
   * @access public
   */
  public $ProductListNumberedPageLinksShownCount;

  /**
   * 
   * @var DataInt32 $ProductListNumberedPageLinksStartEndCount
   * @access public
   */
  public $ProductListNumberedPageLinksStartEndCount;

  /**
   * 
   * @var string $AddThisUsername
   * @access public
   */
  public $AddThisUsername;

  /**
   * 
   * @var string $AddThisCustomSnippet
   * @access public
   */
  public $AddThisCustomSnippet;

  /**
   * 
   * @var DataInt32 $EmailToAFriendEmailTemplateID
   * @access public
   */
  public $EmailToAFriendEmailTemplateID;

  /**
   * 
   * @var string $EmailToAFriendButtonPath
   * @access public
   */
  public $EmailToAFriendButtonPath;

  /**
   * 
   * @var DataInt32 $EmailToAFriendPopUpHeight
   * @access public
   */
  public $EmailToAFriendPopUpHeight;

  /**
   * 
   * @var DataInt32 $EmailToAFriendPopUpWidth
   * @access public
   */
  public $EmailToAFriendPopUpWidth;

  /**
   * 
   * @var string $EmailToAFriendOutlineType
   * @access public
   */
  public $EmailToAFriendOutlineType;

  /**
   * 
   * @var boolean $ProductDetailsThumbnailHoverSwapsMainPhoto
   * @access public
   */
  public $ProductDetailsThumbnailHoverSwapsMainPhoto;

  /**
   * 
   * @var PicturePopupType $ProductDetailsPicturePopupType
   * @access public
   */
  public $ProductDetailsPicturePopupType;

  /**
   * 
   * @var ShowUpsellsWhen $ShowUpsellsWhen
   * @access public
   */
  public $ShowUpsellsWhen;

  /**
   * 
   * @var boolean $ShowPriceAfterDiscounts
   * @access public
   */
  public $ShowPriceAfterDiscounts;

  /**
   * 
   * @var boolean $ShowPoweredByLink
   * @access public
   */
  public $ShowPoweredByLink;

  /**
   * 
   * @var ThemeType $ThemeType
   * @access public
   */
  public $ThemeType;

  /**
   * 
   * @var string $FacebookTabSplashImage
   * @access public
   */
  public $FacebookTabSplashImage;

  /**
   * 
   * @var string $FacebookApplicationId
   * @access public
   */
  public $FacebookApplicationId;

  /**
   * 
   * @var array $ThemeStyleColTrans
   * @access public
   */
  public $ThemeStyleColTrans;

  /**
   * 
   * @var array $ThemeLayoutControlColTrans
   * @access public
   */
  public $ThemeLayoutControlColTrans;

  /**
   * 
   * @var array $ThemePageColTrans
   * @access public
   */
  public $ThemePageColTrans;

  /**
   * 
   * @var array $ThemeAssetBundleColTrans
   * @access public
   */
  public $ThemeAssetBundleColTrans;

  /**
   * 
   * @var array $ThemeSettingColTrans
   * @access public
   */
  public $ThemeSettingColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ThemeID
   * @param string $ThemeName
   * @param string $LeftColumnHTML
   * @param string $RightColumnHTML
   * @param string $HeaderControl
   * @param string $FooterControl
   * @param string $StyleSheet
   * @param string $TopHtml
   * @param string $LeftHtml
   * @param string $RightHtml
   * @param string $BottomHtml
   * @param boolean $stockTheme
   * @param string $screenshot
   * @param boolean $UseTabs
   * @param string $ButtonPath
   * @param string $Javascript
   * @param boolean $ProductListPaging
   * @param boolean $OnePageCheckOut
   * @param string $LayoutWidth
   * @param string $LayoutLeftColumnWidth
   * @param string $LayoutContentWidth
   * @param string $LayoutRightColumnWidth
   * @param DataInt32 $ProductListPageSize
   * @param ProductListPagingType $ProductListPagingType
   * @param boolean $ShowProductListSortBy
   * @param CategoryLayoutDirection $CategoryLayoutDirection
   * @param DataInt32 $CategoryProductsPerRow
   * @param string $CategoryProductListNavigationLabel
   * @param boolean $ShoppingCartShippingCalculation
   * @param ShoppingCartShippingCalculationType $ShoppingCartShippingCalculationType
   * @param string $CouponCodeLabel
   * @param boolean $CategoryImageRoleDownToProduct
   * @param string $RetailLabel
   * @param string $PriceLabel
   * @param boolean $UseWishlist
   * @param boolean $SearchPageUseCategories
   * @param AddToCartRedirectEnm $AddToCartRedirect
   * @param ContinueShoppingOptionsEnm $ContinueShoppingOptions
   * @param boolean $QuantityPriceLayoutVertical
   * @param DataInt32 $ThumbWidth
   * @param DataInt32 $ThumbHeight
   * @param string $ThumbDisplaySource
   * @param boolean $ResizeThumb
   * @param boolean $EnlargeThumbSource
   * @param DataInt32 $ProductThumbWidth
   * @param DataInt32 $ProductThumbHeight
   * @param DataInt32 $ProductThumbCol
   * @param DataInt32 $ProductThumbRow
   * @param boolean $ProductUseStoredThumb
   * @param DataInt32 $ProductPicWidth
   * @param DataInt32 $ProductPicHeight
   * @param DataInt32 $ShoppingCartPicWidth
   * @param DataInt32 $ShoppingCartPicHeight
   * @param boolean $ShowRelatedItemsTab
   * @param DataInt32 $PicturePopupPageWidth
   * @param DataInt32 $PicturePopupPageHeight
   * @param DataInt32 $PicturePopupPicWidth
   * @param DataInt32 $PicturePopupPicHeight
   * @param boolean $PicturePopupEnlargePic
   * @param boolean $PicturePopupSizeProp
   * @param boolean $ShowQuantityInStock
   * @param string $QuantityInStockLabel
   * @param string $WasLabel
   * @param string $NowLabel
   * @param DataInt32 $RelatedThumbWidth
   * @param DataInt32 $RelatedThumbHeight
   * @param string $RelatedThumbDisplaySource
   * @param boolean $RelatedResizeThumb
   * @param boolean $RelatedEnlargeThumbSource
   * @param boolean $RelatedResizeProp
   * @param boolean $ThumbSizeProp
   * @param boolean $ProductSizeProp
   * @param boolean $ProductPicHoverReset
   * @param boolean $ShoppingCartSizeProp
   * @param boolean $ProductEnlargePic
   * @param boolean $ProductDetailsShowVariantMatrix
   * @param string $ProductDetailsVariantMatrixHelpText
   * @param string $HiddenPriceText
   * @param DataInt32 $PicturePopupFlashPageWidth
   * @param DataInt32 $PicturePopupFlashPageHeight
   * @param DataInt32 $PicturePopupFlashPicHeight
   * @param string $PicturePopupInstruction
   * @param DataInt32 $PicturePopupFlashPicWidth
   * @param boolean $ShowETADate
   * @param boolean $HideCategoryHeaderOnShowAll
   * @param boolean $HideSubcategoriesOnShowAll
   * @param boolean $HideCategoryHeaderOnSort
   * @param boolean $HideSubcategoriesOnSort
   * @param string $DefaultProductImage
   * @param boolean $HideProductGroupHeaders
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param VariantMatrixDisplayDirection $ProductDetailsVariantMatrixDisplayDirection
   * @param string $HeaderControlHome
   * @param string $FooterControlHome
   * @param boolean $AllowOrderGifting
   * @param boolean $ShowManufacturerInCart
   * @param boolean $AllowPublicOrderComments
   * @param DataInt32 $CatalogPageSize
   * @param boolean $ShowManufacturerOnInvoice
   * @param boolean $UseCategoryDefaultProductPicture
   * @param boolean $EnableSocialBookmarking
   * @param string $ProductZoomInnerText
   * @param string $ProductResetInnerText
   * @param boolean $ProductVariantOptionShowSwatch
   * @param boolean $EnableProductShippingEstimation
   * @param boolean $ShowManufacturerTextOnly
   * @param boolean $ProductListUseImagePageNav
   * @param string $ProductListNextPageImageUrl
   * @param string $ProductListPrevPageImageUrl
   * @param string $CustomTemplate
   * @param string $DoctypeOverride
   * @param string $HtmlTagAttributes
   * @param string $BodyTagAttributes
   * @param string $ProductDetailsRelatedName
   * @param string $ProductDetailsLongDescName1
   * @param string $ProductDetailsLongDescName2
   * @param string $ProductDetailsLongDescName3
   * @param string $ProductDetailsLongDescName4
   * @param string $ProductDetailsLongDescName5
   * @param AfterUpsellRedirectToEnm $AfterUpsellRedirectTo
   * @param string $ReviewRatingOnImage
   * @param string $ReviewRatingOffImage
   * @param string $ReviewRatingHoverImage
   * @param string $ReviewRatingHalfOnImage
   * @param DataInt32 $ReviewPageSize
   * @param string $ReviewPageNavigationLabel
   * @param string $ProductListDefaultSort
   * @param boolean $WriteReviewHideProsCons
   * @param DataInt32 $ProductListNumberedPageLinksShownCount
   * @param DataInt32 $ProductListNumberedPageLinksStartEndCount
   * @param string $AddThisUsername
   * @param string $AddThisCustomSnippet
   * @param DataInt32 $EmailToAFriendEmailTemplateID
   * @param string $EmailToAFriendButtonPath
   * @param DataInt32 $EmailToAFriendPopUpHeight
   * @param DataInt32 $EmailToAFriendPopUpWidth
   * @param string $EmailToAFriendOutlineType
   * @param boolean $ProductDetailsThumbnailHoverSwapsMainPhoto
   * @param PicturePopupType $ProductDetailsPicturePopupType
   * @param ShowUpsellsWhen $ShowUpsellsWhen
   * @param boolean $ShowPriceAfterDiscounts
   * @param boolean $ShowPoweredByLink
   * @param ThemeType $ThemeType
   * @param string $FacebookTabSplashImage
   * @param string $FacebookApplicationId
   * @param array $ThemeStyleColTrans
   * @param array $ThemeLayoutControlColTrans
   * @param array $ThemePageColTrans
   * @param array $ThemeAssetBundleColTrans
   * @param array $ThemeSettingColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ThemeID, $ThemeName, $LeftColumnHTML, $RightColumnHTML, $HeaderControl, $FooterControl, $StyleSheet, $TopHtml, $LeftHtml, $RightHtml, $BottomHtml, $stockTheme, $screenshot, $UseTabs, $ButtonPath, $Javascript, $ProductListPaging, $OnePageCheckOut, $LayoutWidth, $LayoutLeftColumnWidth, $LayoutContentWidth, $LayoutRightColumnWidth, $ProductListPageSize, $ProductListPagingType, $ShowProductListSortBy, $CategoryLayoutDirection, $CategoryProductsPerRow, $CategoryProductListNavigationLabel, $ShoppingCartShippingCalculation, $ShoppingCartShippingCalculationType, $CouponCodeLabel, $CategoryImageRoleDownToProduct, $RetailLabel, $PriceLabel, $UseWishlist, $SearchPageUseCategories, $AddToCartRedirect, $ContinueShoppingOptions, $QuantityPriceLayoutVertical, $ThumbWidth, $ThumbHeight, $ThumbDisplaySource, $ResizeThumb, $EnlargeThumbSource, $ProductThumbWidth, $ProductThumbHeight, $ProductThumbCol, $ProductThumbRow, $ProductUseStoredThumb, $ProductPicWidth, $ProductPicHeight, $ShoppingCartPicWidth, $ShoppingCartPicHeight, $ShowRelatedItemsTab, $PicturePopupPageWidth, $PicturePopupPageHeight, $PicturePopupPicWidth, $PicturePopupPicHeight, $PicturePopupEnlargePic, $PicturePopupSizeProp, $ShowQuantityInStock, $QuantityInStockLabel, $WasLabel, $NowLabel, $RelatedThumbWidth, $RelatedThumbHeight, $RelatedThumbDisplaySource, $RelatedResizeThumb, $RelatedEnlargeThumbSource, $RelatedResizeProp, $ThumbSizeProp, $ProductSizeProp, $ProductPicHoverReset, $ShoppingCartSizeProp, $ProductEnlargePic, $ProductDetailsShowVariantMatrix, $ProductDetailsVariantMatrixHelpText, $HiddenPriceText, $PicturePopupFlashPageWidth, $PicturePopupFlashPageHeight, $PicturePopupFlashPicHeight, $PicturePopupInstruction, $PicturePopupFlashPicWidth, $ShowETADate, $HideCategoryHeaderOnShowAll, $HideSubcategoriesOnShowAll, $HideCategoryHeaderOnSort, $HideSubcategoriesOnSort, $DefaultProductImage, $HideProductGroupHeaders, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $ProductDetailsVariantMatrixDisplayDirection, $HeaderControlHome, $FooterControlHome, $AllowOrderGifting, $ShowManufacturerInCart, $AllowPublicOrderComments, $CatalogPageSize, $ShowManufacturerOnInvoice, $UseCategoryDefaultProductPicture, $EnableSocialBookmarking, $ProductZoomInnerText, $ProductResetInnerText, $ProductVariantOptionShowSwatch, $EnableProductShippingEstimation, $ShowManufacturerTextOnly, $ProductListUseImagePageNav, $ProductListNextPageImageUrl, $ProductListPrevPageImageUrl, $CustomTemplate, $DoctypeOverride, $HtmlTagAttributes, $BodyTagAttributes, $ProductDetailsRelatedName, $ProductDetailsLongDescName1, $ProductDetailsLongDescName2, $ProductDetailsLongDescName3, $ProductDetailsLongDescName4, $ProductDetailsLongDescName5, $AfterUpsellRedirectTo, $ReviewRatingOnImage, $ReviewRatingOffImage, $ReviewRatingHoverImage, $ReviewRatingHalfOnImage, $ReviewPageSize, $ReviewPageNavigationLabel, $ProductListDefaultSort, $WriteReviewHideProsCons, $ProductListNumberedPageLinksShownCount, $ProductListNumberedPageLinksStartEndCount, $AddThisUsername, $AddThisCustomSnippet, $EmailToAFriendEmailTemplateID, $EmailToAFriendButtonPath, $EmailToAFriendPopUpHeight, $EmailToAFriendPopUpWidth, $EmailToAFriendOutlineType, $ProductDetailsThumbnailHoverSwapsMainPhoto, $ProductDetailsPicturePopupType, $ShowUpsellsWhen, $ShowPriceAfterDiscounts, $ShowPoweredByLink, $ThemeType, $FacebookTabSplashImage, $FacebookApplicationId, $ThemeStyleColTrans, $ThemeLayoutControlColTrans, $ThemePageColTrans, $ThemeAssetBundleColTrans, $ThemeSettingColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ThemeID = $ThemeID;
    $this->ThemeName = $ThemeName;
    $this->LeftColumnHTML = $LeftColumnHTML;
    $this->RightColumnHTML = $RightColumnHTML;
    $this->HeaderControl = $HeaderControl;
    $this->FooterControl = $FooterControl;
    $this->StyleSheet = $StyleSheet;
    $this->TopHtml = $TopHtml;
    $this->LeftHtml = $LeftHtml;
    $this->RightHtml = $RightHtml;
    $this->BottomHtml = $BottomHtml;
    $this->stockTheme = $stockTheme;
    $this->screenshot = $screenshot;
    $this->UseTabs = $UseTabs;
    $this->ButtonPath = $ButtonPath;
    $this->Javascript = $Javascript;
    $this->ProductListPaging = $ProductListPaging;
    $this->OnePageCheckOut = $OnePageCheckOut;
    $this->LayoutWidth = $LayoutWidth;
    $this->LayoutLeftColumnWidth = $LayoutLeftColumnWidth;
    $this->LayoutContentWidth = $LayoutContentWidth;
    $this->LayoutRightColumnWidth = $LayoutRightColumnWidth;
    $this->ProductListPageSize = $ProductListPageSize;
    $this->ProductListPagingType = $ProductListPagingType;
    $this->ShowProductListSortBy = $ShowProductListSortBy;
    $this->CategoryLayoutDirection = $CategoryLayoutDirection;
    $this->CategoryProductsPerRow = $CategoryProductsPerRow;
    $this->CategoryProductListNavigationLabel = $CategoryProductListNavigationLabel;
    $this->ShoppingCartShippingCalculation = $ShoppingCartShippingCalculation;
    $this->ShoppingCartShippingCalculationType = $ShoppingCartShippingCalculationType;
    $this->CouponCodeLabel = $CouponCodeLabel;
    $this->CategoryImageRoleDownToProduct = $CategoryImageRoleDownToProduct;
    $this->RetailLabel = $RetailLabel;
    $this->PriceLabel = $PriceLabel;
    $this->UseWishlist = $UseWishlist;
    $this->SearchPageUseCategories = $SearchPageUseCategories;
    $this->AddToCartRedirect = $AddToCartRedirect;
    $this->ContinueShoppingOptions = $ContinueShoppingOptions;
    $this->QuantityPriceLayoutVertical = $QuantityPriceLayoutVertical;
    $this->ThumbWidth = $ThumbWidth;
    $this->ThumbHeight = $ThumbHeight;
    $this->ThumbDisplaySource = $ThumbDisplaySource;
    $this->ResizeThumb = $ResizeThumb;
    $this->EnlargeThumbSource = $EnlargeThumbSource;
    $this->ProductThumbWidth = $ProductThumbWidth;
    $this->ProductThumbHeight = $ProductThumbHeight;
    $this->ProductThumbCol = $ProductThumbCol;
    $this->ProductThumbRow = $ProductThumbRow;
    $this->ProductUseStoredThumb = $ProductUseStoredThumb;
    $this->ProductPicWidth = $ProductPicWidth;
    $this->ProductPicHeight = $ProductPicHeight;
    $this->ShoppingCartPicWidth = $ShoppingCartPicWidth;
    $this->ShoppingCartPicHeight = $ShoppingCartPicHeight;
    $this->ShowRelatedItemsTab = $ShowRelatedItemsTab;
    $this->PicturePopupPageWidth = $PicturePopupPageWidth;
    $this->PicturePopupPageHeight = $PicturePopupPageHeight;
    $this->PicturePopupPicWidth = $PicturePopupPicWidth;
    $this->PicturePopupPicHeight = $PicturePopupPicHeight;
    $this->PicturePopupEnlargePic = $PicturePopupEnlargePic;
    $this->PicturePopupSizeProp = $PicturePopupSizeProp;
    $this->ShowQuantityInStock = $ShowQuantityInStock;
    $this->QuantityInStockLabel = $QuantityInStockLabel;
    $this->WasLabel = $WasLabel;
    $this->NowLabel = $NowLabel;
    $this->RelatedThumbWidth = $RelatedThumbWidth;
    $this->RelatedThumbHeight = $RelatedThumbHeight;
    $this->RelatedThumbDisplaySource = $RelatedThumbDisplaySource;
    $this->RelatedResizeThumb = $RelatedResizeThumb;
    $this->RelatedEnlargeThumbSource = $RelatedEnlargeThumbSource;
    $this->RelatedResizeProp = $RelatedResizeProp;
    $this->ThumbSizeProp = $ThumbSizeProp;
    $this->ProductSizeProp = $ProductSizeProp;
    $this->ProductPicHoverReset = $ProductPicHoverReset;
    $this->ShoppingCartSizeProp = $ShoppingCartSizeProp;
    $this->ProductEnlargePic = $ProductEnlargePic;
    $this->ProductDetailsShowVariantMatrix = $ProductDetailsShowVariantMatrix;
    $this->ProductDetailsVariantMatrixHelpText = $ProductDetailsVariantMatrixHelpText;
    $this->HiddenPriceText = $HiddenPriceText;
    $this->PicturePopupFlashPageWidth = $PicturePopupFlashPageWidth;
    $this->PicturePopupFlashPageHeight = $PicturePopupFlashPageHeight;
    $this->PicturePopupFlashPicHeight = $PicturePopupFlashPicHeight;
    $this->PicturePopupInstruction = $PicturePopupInstruction;
    $this->PicturePopupFlashPicWidth = $PicturePopupFlashPicWidth;
    $this->ShowETADate = $ShowETADate;
    $this->HideCategoryHeaderOnShowAll = $HideCategoryHeaderOnShowAll;
    $this->HideSubcategoriesOnShowAll = $HideSubcategoriesOnShowAll;
    $this->HideCategoryHeaderOnSort = $HideCategoryHeaderOnSort;
    $this->HideSubcategoriesOnSort = $HideSubcategoriesOnSort;
    $this->DefaultProductImage = $DefaultProductImage;
    $this->HideProductGroupHeaders = $HideProductGroupHeaders;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->ProductDetailsVariantMatrixDisplayDirection = $ProductDetailsVariantMatrixDisplayDirection;
    $this->HeaderControlHome = $HeaderControlHome;
    $this->FooterControlHome = $FooterControlHome;
    $this->AllowOrderGifting = $AllowOrderGifting;
    $this->ShowManufacturerInCart = $ShowManufacturerInCart;
    $this->AllowPublicOrderComments = $AllowPublicOrderComments;
    $this->CatalogPageSize = $CatalogPageSize;
    $this->ShowManufacturerOnInvoice = $ShowManufacturerOnInvoice;
    $this->UseCategoryDefaultProductPicture = $UseCategoryDefaultProductPicture;
    $this->EnableSocialBookmarking = $EnableSocialBookmarking;
    $this->ProductZoomInnerText = $ProductZoomInnerText;
    $this->ProductResetInnerText = $ProductResetInnerText;
    $this->ProductVariantOptionShowSwatch = $ProductVariantOptionShowSwatch;
    $this->EnableProductShippingEstimation = $EnableProductShippingEstimation;
    $this->ShowManufacturerTextOnly = $ShowManufacturerTextOnly;
    $this->ProductListUseImagePageNav = $ProductListUseImagePageNav;
    $this->ProductListNextPageImageUrl = $ProductListNextPageImageUrl;
    $this->ProductListPrevPageImageUrl = $ProductListPrevPageImageUrl;
    $this->CustomTemplate = $CustomTemplate;
    $this->DoctypeOverride = $DoctypeOverride;
    $this->HtmlTagAttributes = $HtmlTagAttributes;
    $this->BodyTagAttributes = $BodyTagAttributes;
    $this->ProductDetailsRelatedName = $ProductDetailsRelatedName;
    $this->ProductDetailsLongDescName1 = $ProductDetailsLongDescName1;
    $this->ProductDetailsLongDescName2 = $ProductDetailsLongDescName2;
    $this->ProductDetailsLongDescName3 = $ProductDetailsLongDescName3;
    $this->ProductDetailsLongDescName4 = $ProductDetailsLongDescName4;
    $this->ProductDetailsLongDescName5 = $ProductDetailsLongDescName5;
    $this->AfterUpsellRedirectTo = $AfterUpsellRedirectTo;
    $this->ReviewRatingOnImage = $ReviewRatingOnImage;
    $this->ReviewRatingOffImage = $ReviewRatingOffImage;
    $this->ReviewRatingHoverImage = $ReviewRatingHoverImage;
    $this->ReviewRatingHalfOnImage = $ReviewRatingHalfOnImage;
    $this->ReviewPageSize = $ReviewPageSize;
    $this->ReviewPageNavigationLabel = $ReviewPageNavigationLabel;
    $this->ProductListDefaultSort = $ProductListDefaultSort;
    $this->WriteReviewHideProsCons = $WriteReviewHideProsCons;
    $this->ProductListNumberedPageLinksShownCount = $ProductListNumberedPageLinksShownCount;
    $this->ProductListNumberedPageLinksStartEndCount = $ProductListNumberedPageLinksStartEndCount;
    $this->AddThisUsername = $AddThisUsername;
    $this->AddThisCustomSnippet = $AddThisCustomSnippet;
    $this->EmailToAFriendEmailTemplateID = $EmailToAFriendEmailTemplateID;
    $this->EmailToAFriendButtonPath = $EmailToAFriendButtonPath;
    $this->EmailToAFriendPopUpHeight = $EmailToAFriendPopUpHeight;
    $this->EmailToAFriendPopUpWidth = $EmailToAFriendPopUpWidth;
    $this->EmailToAFriendOutlineType = $EmailToAFriendOutlineType;
    $this->ProductDetailsThumbnailHoverSwapsMainPhoto = $ProductDetailsThumbnailHoverSwapsMainPhoto;
    $this->ProductDetailsPicturePopupType = $ProductDetailsPicturePopupType;
    $this->ShowUpsellsWhen = $ShowUpsellsWhen;
    $this->ShowPriceAfterDiscounts = $ShowPriceAfterDiscounts;
    $this->ShowPoweredByLink = $ShowPoweredByLink;
    $this->ThemeType = $ThemeType;
    $this->FacebookTabSplashImage = $FacebookTabSplashImage;
    $this->FacebookApplicationId = $FacebookApplicationId;
    $this->ThemeStyleColTrans = $ThemeStyleColTrans;
    $this->ThemeLayoutControlColTrans = $ThemeLayoutControlColTrans;
    $this->ThemePageColTrans = $ThemePageColTrans;
    $this->ThemeAssetBundleColTrans = $ThemeAssetBundleColTrans;
    $this->ThemeSettingColTrans = $ThemeSettingColTrans;
  }

}

}
