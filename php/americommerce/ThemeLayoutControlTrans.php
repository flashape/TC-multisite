<?php

if (!class_exists("ThemeLayoutControlTrans", false)) 
{
class ThemeLayoutControlTrans
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
   * @var string $ControlName
   * @access public
   */
  public $ControlName;

  /**
   * 
   * @var string $PagePosition
   * @access public
   */
  public $PagePosition;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @var string $Location
   * @access public
   */
  public $Location;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var string $Width
   * @access public
   */
  public $Width;

  /**
   * 
   * @var string $Display
   * @access public
   */
  public $Display;

  /**
   * 
   * @var string $Style
   * @access public
   */
  public $Style;

  /**
   * 
   * @var string $Content
   * @access public
   */
  public $Content;

  /**
   * 
   * @var string $HeaderText
   * @access public
   */
  public $HeaderText;

  /**
   * 
   * @var string $HeaderImage
   * @access public
   */
  public $HeaderImage;

  /**
   * 
   * @var string $LeftImage
   * @access public
   */
  public $LeftImage;

  /**
   * 
   * @var string $ControlsControl
   * @access public
   */
  public $ControlsControl;

  /**
   * 
   * @var string $ControlsControlHeader
   * @access public
   */
  public $ControlsControlHeader;

  /**
   * 
   * @var string $ControlsControlText
   * @access public
   */
  public $ControlsControlText;

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
   * @var string $ControlsControlLinkSeperator
   * @access public
   */
  public $ControlsControlLinkSeperator;

  /**
   * 
   * @var string $ControlsControlInput
   * @access public
   */
  public $ControlsControlInput;

  /**
   * 
   * @var string $ControlsControlItem
   * @access public
   */
  public $ControlsControlItem;

  /**
   * 
   * @var DataInt32 $LinkListID
   * @access public
   */
  public $LinkListID;

  /**
   * 
   * @var string $LinkListDisplay
   * @access public
   */
  public $LinkListDisplay;

  /**
   * 
   * @var string $CustomControlPath
   * @access public
   */
  public $CustomControlPath;

  /**
   * 
   * @var string $ExternalUrl
   * @access public
   */
  public $ExternalUrl;

  /**
   * 
   * @var string $FeaturedItemsBuyMoreLink
   * @access public
   */
  public $FeaturedItemsBuyMoreLink;

  /**
   * 
   * @var string $FeaturedItemsPriceAlignment
   * @access public
   */
  public $FeaturedItemsPriceAlignment;

  /**
   * 
   * @var boolean $FeaturedItemsDisplayThumbOnSeparateLine
   * @access public
   */
  public $FeaturedItemsDisplayThumbOnSeparateLine;

  /**
   * 
   * @var string $RssNewsFeedFeedPath
   * @access public
   */
  public $RssNewsFeedFeedPath;

  /**
   * 
   * @var DataInt32 $RssNewsFeedNumberToDisplay
   * @access public
   */
  public $RssNewsFeedNumberToDisplay;

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
   * @var boolean $CacheControl
   * @access public
   */
  public $CacheControl;

  /**
   * 
   * @var DataInt32 $CacheTime
   * @access public
   */
  public $CacheTime;

  /**
   * 
   * @var string $CustomContent
   * @access public
   */
  public $CustomContent;

  /**
   * 
   * @var boolean $IsHidden
   * @access public
   */
  public $IsHidden;

  /**
   * 
   * @var string $ControlNickname
   * @access public
   */
  public $ControlNickname;

  /**
   * 
   * @var DataInt32 $QuickOrderEntryNumberToDisplay
   * @access public
   */
  public $QuickOrderEntryNumberToDisplay;

  /**
   * 
   * @var string $ControlsControlFooter
   * @access public
   */
  public $ControlsControlFooter;

  /**
   * 
   * @var string $TreeNavigationSource
   * @access public
   */
  public $TreeNavigationSource;

  /**
   * 
   * @var DataInt32 $TreeNavigationRootCategoryID
   * @access public
   */
  public $TreeNavigationRootCategoryID;

  /**
   * 
   * @var DataInt32 $TreeNavigationRootLinkGroupID
   * @access public
   */
  public $TreeNavigationRootLinkGroupID;

  /**
   * 
   * @var DataInt32 $TreeNavigationMaxLevels
   * @access public
   */
  public $TreeNavigationMaxLevels;

  /**
   * 
   * @var DataInt32 $TreeNavigationRootLinkGroupStoreID
   * @access public
   */
  public $TreeNavigationRootLinkGroupStoreID;

  /**
   * 
   * @var string $TreeNavigationNode
   * @access public
   */
  public $TreeNavigationNode;

  /**
   * 
   * @var string $TreeNavigationNodeHover
   * @access public
   */
  public $TreeNavigationNodeHover;

  /**
   * 
   * @var string $TreeNavigationNodeSelected
   * @access public
   */
  public $TreeNavigationNodeSelected;

  /**
   * 
   * @var string $TreeNavigationRootNode
   * @access public
   */
  public $TreeNavigationRootNode;

  /**
   * 
   * @var string $TreeNavigationLeafNode
   * @access public
   */
  public $TreeNavigationLeafNode;

  /**
   * 
   * @var string $TreeNavigationIsland
   * @access public
   */
  public $TreeNavigationIsland;

  /**
   * 
   * @var string $TreeNavigationRootImageUrl
   * @access public
   */
  public $TreeNavigationRootImageUrl;

  /**
   * 
   * @var string $TreeNavigationLeafImageUrl
   * @access public
   */
  public $TreeNavigationLeafImageUrl;

  /**
   * 
   * @var string $TreeNavigationExpandedImageUrl
   * @access public
   */
  public $TreeNavigationExpandedImageUrl;

  /**
   * 
   * @var string $TreeNavigationCollapsedImageUrl
   * @access public
   */
  public $TreeNavigationCollapsedImageUrl;

  /**
   * 
   * @var boolean $TreeNavigationHideExpander
   * @access public
   */
  public $TreeNavigationHideExpander;

  /**
   * 
   * @var boolean $TreeNavigationEnableLevelStyles
   * @access public
   */
  public $TreeNavigationEnableLevelStyles;

  /**
   * 
   * @var string $TreeNavigationSelectedImageUrl
   * @access public
   */
  public $TreeNavigationSelectedImageUrl;

  /**
   * 
   * @var DataInt32 $TreeNavigationAutoExpandLevels
   * @access public
   */
  public $TreeNavigationAutoExpandLevels;

  /**
   * 
   * @var boolean $DoNotRenderInPlace
   * @access public
   */
  public $DoNotRenderInPlace;

  /**
   * 
   * @var string $ControlsControlLink
   * @access public
   */
  public $ControlsControlLink;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewTitle
   * @access public
   */
  public $ProductReviewsListingProductReviewTitle;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewRatings
   * @access public
   */
  public $ProductReviewsListingProductReviewRatings;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewDimensionName
   * @access public
   */
  public $ProductReviewsListingProductReviewDimensionName;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewBody
   * @access public
   */
  public $ProductReviewsListingProductReviewBody;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewProsArea
   * @access public
   */
  public $ProductReviewsListingProductReviewProsArea;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewProsHeader
   * @access public
   */
  public $ProductReviewsListingProductReviewProsHeader;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewPros
   * @access public
   */
  public $ProductReviewsListingProductReviewPros;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewConsArea
   * @access public
   */
  public $ProductReviewsListingProductReviewConsArea;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewConsHeader
   * @access public
   */
  public $ProductReviewsListingProductReviewConsHeader;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewCons
   * @access public
   */
  public $ProductReviewsListingProductReviewCons;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewSummary
   * @access public
   */
  public $ProductReviewsListingProductReviewSummary;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewWriteLink
   * @access public
   */
  public $ProductReviewsListingProductReviewWriteLink;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewPros0ul
   * @access public
   */
  public $ProductReviewsListingProductReviewPros0ul;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewPros0li
   * @access public
   */
  public $ProductReviewsListingProductReviewPros0li;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewCons0ul
   * @access public
   */
  public $ProductReviewsListingProductReviewCons0ul;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewCons0li
   * @access public
   */
  public $ProductReviewsListingProductReviewCons0li;

  /**
   * 
   * @var string $ProductReviewsListingProductReviewAllReviewsLink
   * @access public
   */
  public $ProductReviewsListingProductReviewAllReviewsLink;

  /**
   * 
   * @var DataInt32 $ProductReviewsListingProductReviewDisplayCount
   * @access public
   */
  public $ProductReviewsListingProductReviewDisplayCount;

  /**
   * 
   * @var DataInt32 $RepeaterProductListID
   * @access public
   */
  public $RepeaterProductListID;

  /**
   * 
   * @var DataInt32 $RepeaterDisplayCount
   * @access public
   */
  public $RepeaterDisplayCount;

  /**
   * 
   * @var DataInt32 $RepeaterRepeatCount
   * @access public
   */
  public $RepeaterRepeatCount;

  /**
   * 
   * @var DataInt32 $RepeaterItemHeight
   * @access public
   */
  public $RepeaterItemHeight;

  /**
   * 
   * @var string $RepeaterItemBorderStyle
   * @access public
   */
  public $RepeaterItemBorderStyle;

  /**
   * 
   * @var DataInt32 $RepeaterItemBorderWidth
   * @access public
   */
  public $RepeaterItemBorderWidth;

  /**
   * 
   * @var string $RepeaterProductPictureThumbSource
   * @access public
   */
  public $RepeaterProductPictureThumbSource;

  /**
   * 
   * @var DataInt32 $RepeaterProductPictureThumbHeight
   * @access public
   */
  public $RepeaterProductPictureThumbHeight;

  /**
   * 
   * @var DataInt32 $RepeaterProductPictureThumbWidth
   * @access public
   */
  public $RepeaterProductPictureThumbWidth;

  /**
   * 
   * @var boolean $RepeaterProductPictureEnlargeThumbSource
   * @access public
   */
  public $RepeaterProductPictureEnlargeThumbSource;

  /**
   * 
   * @var boolean $RepeaterResizeThumb
   * @access public
   */
  public $RepeaterResizeThumb;

  /**
   * 
   * @var boolean $RepeaterSizeProportional
   * @access public
   */
  public $RepeaterSizeProportional;

  /**
   * 
   * @var boolean $RepeaterShowHiddenProducts
   * @access public
   */
  public $RepeaterShowHiddenProducts;

  /**
   * 
   * @var boolean $RepeaterDisplayOnlySubcategories
   * @access public
   */
  public $RepeaterDisplayOnlySubcategories;

  /**
   * 
   * @var string $RepeaterItemBorderColor
   * @access public
   */
  public $RepeaterItemBorderColor;

  /**
   * 
   * @var DataInt32 $CarouselScrollBy
   * @access public
   */
  public $CarouselScrollBy;

  /**
   * 
   * @var string $CarouselCarouselNextButton
   * @access public
   */
  public $CarouselCarouselNextButton;

  /**
   * 
   * @var string $CarouselCarouselPrevButton
   * @access public
   */
  public $CarouselCarouselPrevButton;

  /**
   * 
   * @var string $CarouselCarouselNextButtonUrl
   * @access public
   */
  public $CarouselCarouselNextButtonUrl;

  /**
   * 
   * @var string $CarouselCarouselNextButtonDisabledUrl
   * @access public
   */
  public $CarouselCarouselNextButtonDisabledUrl;

  /**
   * 
   * @var string $CarouselCarouselPrevButtonUrl
   * @access public
   */
  public $CarouselCarouselPrevButtonUrl;

  /**
   * 
   * @var string $CarouselCarouselPrevButtonDisabledUrl
   * @access public
   */
  public $CarouselCarouselPrevButtonDisabledUrl;

  /**
   * 
   * @var string $CarouselCarouselOrientation
   * @access public
   */
  public $CarouselCarouselOrientation;

  /**
   * 
   * @var string $ExcludedIDs
   * @access public
   */
  public $ExcludedIDs;

  /**
   * 
   * @var string $BrowseByCategoryBrowseCategoryIcon
   * @access public
   */
  public $BrowseByCategoryBrowseCategoryIcon;

  /**
   * 
   * @var string $BrowseByAttributeBrowseByAttributeFilterButtonArea
   * @access public
   */
  public $BrowseByAttributeBrowseByAttributeFilterButtonArea;

  /**
   * 
   * @var string $Identifier
   * @access public
   */
  public $Identifier;

  /**
   * 
   * @var DataInt32 $ThemePageSettingsID
   * @access public
   */
  public $ThemePageSettingsID;

  /**
   * 
   * @var DataInt32 $ThemeLayoutControlID
   * @access public
   */
  public $ThemeLayoutControlID;

  /**
   * 
   * @var array $ThemeLayoutControlSettingsValueColTrans
   * @access public
   */
  public $ThemeLayoutControlSettingsValueColTrans;

  /**
   * 
   * @var array $ThemeLayoutControlStyleColTrans
   * @access public
   */
  public $ThemeLayoutControlStyleColTrans;

  /**
   * 
   * @var array $ThemeLayoutControlColTrans
   * @access public
   */
  public $ThemeLayoutControlColTrans;

  /**
   * 
   * @var array $ThemeLayoutControlSettingColTrans
   * @access public
   */
  public $ThemeLayoutControlSettingColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $Id
   * @param DataInt32 $ThemeID
   * @param string $ControlName
   * @param string $PagePosition
   * @param DataInt32 $SortOrder
   * @param string $Location
   * @param DataInt32 $StoreID
   * @param string $Width
   * @param string $Display
   * @param string $Style
   * @param string $Content
   * @param string $HeaderText
   * @param string $HeaderImage
   * @param string $LeftImage
   * @param string $ControlsControl
   * @param string $ControlsControlHeader
   * @param string $ControlsControlText
   * @param string $ControlsControlLink0a
   * @param string $ControlsControlLink0a00hover
   * @param string $ControlsControlLinkSeperator
   * @param string $ControlsControlInput
   * @param string $ControlsControlItem
   * @param DataInt32 $LinkListID
   * @param string $LinkListDisplay
   * @param string $CustomControlPath
   * @param string $ExternalUrl
   * @param string $FeaturedItemsBuyMoreLink
   * @param string $FeaturedItemsPriceAlignment
   * @param boolean $FeaturedItemsDisplayThumbOnSeparateLine
   * @param string $RssNewsFeedFeedPath
   * @param DataInt32 $RssNewsFeedNumberToDisplay
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $CacheControl
   * @param DataInt32 $CacheTime
   * @param string $CustomContent
   * @param boolean $IsHidden
   * @param string $ControlNickname
   * @param DataInt32 $QuickOrderEntryNumberToDisplay
   * @param string $ControlsControlFooter
   * @param string $TreeNavigationSource
   * @param DataInt32 $TreeNavigationRootCategoryID
   * @param DataInt32 $TreeNavigationRootLinkGroupID
   * @param DataInt32 $TreeNavigationMaxLevels
   * @param DataInt32 $TreeNavigationRootLinkGroupStoreID
   * @param string $TreeNavigationNode
   * @param string $TreeNavigationNodeHover
   * @param string $TreeNavigationNodeSelected
   * @param string $TreeNavigationRootNode
   * @param string $TreeNavigationLeafNode
   * @param string $TreeNavigationIsland
   * @param string $TreeNavigationRootImageUrl
   * @param string $TreeNavigationLeafImageUrl
   * @param string $TreeNavigationExpandedImageUrl
   * @param string $TreeNavigationCollapsedImageUrl
   * @param boolean $TreeNavigationHideExpander
   * @param boolean $TreeNavigationEnableLevelStyles
   * @param string $TreeNavigationSelectedImageUrl
   * @param DataInt32 $TreeNavigationAutoExpandLevels
   * @param boolean $DoNotRenderInPlace
   * @param string $ControlsControlLink
   * @param string $ProductReviewsListingProductReviewTitle
   * @param string $ProductReviewsListingProductReviewRatings
   * @param string $ProductReviewsListingProductReviewDimensionName
   * @param string $ProductReviewsListingProductReviewBody
   * @param string $ProductReviewsListingProductReviewProsArea
   * @param string $ProductReviewsListingProductReviewProsHeader
   * @param string $ProductReviewsListingProductReviewPros
   * @param string $ProductReviewsListingProductReviewConsArea
   * @param string $ProductReviewsListingProductReviewConsHeader
   * @param string $ProductReviewsListingProductReviewCons
   * @param string $ProductReviewsListingProductReviewSummary
   * @param string $ProductReviewsListingProductReviewWriteLink
   * @param string $ProductReviewsListingProductReviewPros0ul
   * @param string $ProductReviewsListingProductReviewPros0li
   * @param string $ProductReviewsListingProductReviewCons0ul
   * @param string $ProductReviewsListingProductReviewCons0li
   * @param string $ProductReviewsListingProductReviewAllReviewsLink
   * @param DataInt32 $ProductReviewsListingProductReviewDisplayCount
   * @param DataInt32 $RepeaterProductListID
   * @param DataInt32 $RepeaterDisplayCount
   * @param DataInt32 $RepeaterRepeatCount
   * @param DataInt32 $RepeaterItemHeight
   * @param string $RepeaterItemBorderStyle
   * @param DataInt32 $RepeaterItemBorderWidth
   * @param string $RepeaterProductPictureThumbSource
   * @param DataInt32 $RepeaterProductPictureThumbHeight
   * @param DataInt32 $RepeaterProductPictureThumbWidth
   * @param boolean $RepeaterProductPictureEnlargeThumbSource
   * @param boolean $RepeaterResizeThumb
   * @param boolean $RepeaterSizeProportional
   * @param boolean $RepeaterShowHiddenProducts
   * @param boolean $RepeaterDisplayOnlySubcategories
   * @param string $RepeaterItemBorderColor
   * @param DataInt32 $CarouselScrollBy
   * @param string $CarouselCarouselNextButton
   * @param string $CarouselCarouselPrevButton
   * @param string $CarouselCarouselNextButtonUrl
   * @param string $CarouselCarouselNextButtonDisabledUrl
   * @param string $CarouselCarouselPrevButtonUrl
   * @param string $CarouselCarouselPrevButtonDisabledUrl
   * @param string $CarouselCarouselOrientation
   * @param string $ExcludedIDs
   * @param string $BrowseByCategoryBrowseCategoryIcon
   * @param string $BrowseByAttributeBrowseByAttributeFilterButtonArea
   * @param string $Identifier
   * @param DataInt32 $ThemePageSettingsID
   * @param DataInt32 $ThemeLayoutControlID
   * @param array $ThemeLayoutControlSettingsValueColTrans
   * @param array $ThemeLayoutControlStyleColTrans
   * @param array $ThemeLayoutControlColTrans
   * @param array $ThemeLayoutControlSettingColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $Id, $ThemeID, $ControlName, $PagePosition, $SortOrder, $Location, $StoreID, $Width, $Display, $Style, $Content, $HeaderText, $HeaderImage, $LeftImage, $ControlsControl, $ControlsControlHeader, $ControlsControlText, $ControlsControlLink0a, $ControlsControlLink0a00hover, $ControlsControlLinkSeperator, $ControlsControlInput, $ControlsControlItem, $LinkListID, $LinkListDisplay, $CustomControlPath, $ExternalUrl, $FeaturedItemsBuyMoreLink, $FeaturedItemsPriceAlignment, $FeaturedItemsDisplayThumbOnSeparateLine, $RssNewsFeedFeedPath, $RssNewsFeedNumberToDisplay, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $CacheControl, $CacheTime, $CustomContent, $IsHidden, $ControlNickname, $QuickOrderEntryNumberToDisplay, $ControlsControlFooter, $TreeNavigationSource, $TreeNavigationRootCategoryID, $TreeNavigationRootLinkGroupID, $TreeNavigationMaxLevels, $TreeNavigationRootLinkGroupStoreID, $TreeNavigationNode, $TreeNavigationNodeHover, $TreeNavigationNodeSelected, $TreeNavigationRootNode, $TreeNavigationLeafNode, $TreeNavigationIsland, $TreeNavigationRootImageUrl, $TreeNavigationLeafImageUrl, $TreeNavigationExpandedImageUrl, $TreeNavigationCollapsedImageUrl, $TreeNavigationHideExpander, $TreeNavigationEnableLevelStyles, $TreeNavigationSelectedImageUrl, $TreeNavigationAutoExpandLevels, $DoNotRenderInPlace, $ControlsControlLink, $ProductReviewsListingProductReviewTitle, $ProductReviewsListingProductReviewRatings, $ProductReviewsListingProductReviewDimensionName, $ProductReviewsListingProductReviewBody, $ProductReviewsListingProductReviewProsArea, $ProductReviewsListingProductReviewProsHeader, $ProductReviewsListingProductReviewPros, $ProductReviewsListingProductReviewConsArea, $ProductReviewsListingProductReviewConsHeader, $ProductReviewsListingProductReviewCons, $ProductReviewsListingProductReviewSummary, $ProductReviewsListingProductReviewWriteLink, $ProductReviewsListingProductReviewPros0ul, $ProductReviewsListingProductReviewPros0li, $ProductReviewsListingProductReviewCons0ul, $ProductReviewsListingProductReviewCons0li, $ProductReviewsListingProductReviewAllReviewsLink, $ProductReviewsListingProductReviewDisplayCount, $RepeaterProductListID, $RepeaterDisplayCount, $RepeaterRepeatCount, $RepeaterItemHeight, $RepeaterItemBorderStyle, $RepeaterItemBorderWidth, $RepeaterProductPictureThumbSource, $RepeaterProductPictureThumbHeight, $RepeaterProductPictureThumbWidth, $RepeaterProductPictureEnlargeThumbSource, $RepeaterResizeThumb, $RepeaterSizeProportional, $RepeaterShowHiddenProducts, $RepeaterDisplayOnlySubcategories, $RepeaterItemBorderColor, $CarouselScrollBy, $CarouselCarouselNextButton, $CarouselCarouselPrevButton, $CarouselCarouselNextButtonUrl, $CarouselCarouselNextButtonDisabledUrl, $CarouselCarouselPrevButtonUrl, $CarouselCarouselPrevButtonDisabledUrl, $CarouselCarouselOrientation, $ExcludedIDs, $BrowseByCategoryBrowseCategoryIcon, $BrowseByAttributeBrowseByAttributeFilterButtonArea, $Identifier, $ThemePageSettingsID, $ThemeLayoutControlID, $ThemeLayoutControlSettingsValueColTrans, $ThemeLayoutControlStyleColTrans, $ThemeLayoutControlColTrans, $ThemeLayoutControlSettingColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->Id = $Id;
    $this->ThemeID = $ThemeID;
    $this->ControlName = $ControlName;
    $this->PagePosition = $PagePosition;
    $this->SortOrder = $SortOrder;
    $this->Location = $Location;
    $this->StoreID = $StoreID;
    $this->Width = $Width;
    $this->Display = $Display;
    $this->Style = $Style;
    $this->Content = $Content;
    $this->HeaderText = $HeaderText;
    $this->HeaderImage = $HeaderImage;
    $this->LeftImage = $LeftImage;
    $this->ControlsControl = $ControlsControl;
    $this->ControlsControlHeader = $ControlsControlHeader;
    $this->ControlsControlText = $ControlsControlText;
    $this->ControlsControlLink0a = $ControlsControlLink0a;
    $this->ControlsControlLink0a00hover = $ControlsControlLink0a00hover;
    $this->ControlsControlLinkSeperator = $ControlsControlLinkSeperator;
    $this->ControlsControlInput = $ControlsControlInput;
    $this->ControlsControlItem = $ControlsControlItem;
    $this->LinkListID = $LinkListID;
    $this->LinkListDisplay = $LinkListDisplay;
    $this->CustomControlPath = $CustomControlPath;
    $this->ExternalUrl = $ExternalUrl;
    $this->FeaturedItemsBuyMoreLink = $FeaturedItemsBuyMoreLink;
    $this->FeaturedItemsPriceAlignment = $FeaturedItemsPriceAlignment;
    $this->FeaturedItemsDisplayThumbOnSeparateLine = $FeaturedItemsDisplayThumbOnSeparateLine;
    $this->RssNewsFeedFeedPath = $RssNewsFeedFeedPath;
    $this->RssNewsFeedNumberToDisplay = $RssNewsFeedNumberToDisplay;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->CacheControl = $CacheControl;
    $this->CacheTime = $CacheTime;
    $this->CustomContent = $CustomContent;
    $this->IsHidden = $IsHidden;
    $this->ControlNickname = $ControlNickname;
    $this->QuickOrderEntryNumberToDisplay = $QuickOrderEntryNumberToDisplay;
    $this->ControlsControlFooter = $ControlsControlFooter;
    $this->TreeNavigationSource = $TreeNavigationSource;
    $this->TreeNavigationRootCategoryID = $TreeNavigationRootCategoryID;
    $this->TreeNavigationRootLinkGroupID = $TreeNavigationRootLinkGroupID;
    $this->TreeNavigationMaxLevels = $TreeNavigationMaxLevels;
    $this->TreeNavigationRootLinkGroupStoreID = $TreeNavigationRootLinkGroupStoreID;
    $this->TreeNavigationNode = $TreeNavigationNode;
    $this->TreeNavigationNodeHover = $TreeNavigationNodeHover;
    $this->TreeNavigationNodeSelected = $TreeNavigationNodeSelected;
    $this->TreeNavigationRootNode = $TreeNavigationRootNode;
    $this->TreeNavigationLeafNode = $TreeNavigationLeafNode;
    $this->TreeNavigationIsland = $TreeNavigationIsland;
    $this->TreeNavigationRootImageUrl = $TreeNavigationRootImageUrl;
    $this->TreeNavigationLeafImageUrl = $TreeNavigationLeafImageUrl;
    $this->TreeNavigationExpandedImageUrl = $TreeNavigationExpandedImageUrl;
    $this->TreeNavigationCollapsedImageUrl = $TreeNavigationCollapsedImageUrl;
    $this->TreeNavigationHideExpander = $TreeNavigationHideExpander;
    $this->TreeNavigationEnableLevelStyles = $TreeNavigationEnableLevelStyles;
    $this->TreeNavigationSelectedImageUrl = $TreeNavigationSelectedImageUrl;
    $this->TreeNavigationAutoExpandLevels = $TreeNavigationAutoExpandLevels;
    $this->DoNotRenderInPlace = $DoNotRenderInPlace;
    $this->ControlsControlLink = $ControlsControlLink;
    $this->ProductReviewsListingProductReviewTitle = $ProductReviewsListingProductReviewTitle;
    $this->ProductReviewsListingProductReviewRatings = $ProductReviewsListingProductReviewRatings;
    $this->ProductReviewsListingProductReviewDimensionName = $ProductReviewsListingProductReviewDimensionName;
    $this->ProductReviewsListingProductReviewBody = $ProductReviewsListingProductReviewBody;
    $this->ProductReviewsListingProductReviewProsArea = $ProductReviewsListingProductReviewProsArea;
    $this->ProductReviewsListingProductReviewProsHeader = $ProductReviewsListingProductReviewProsHeader;
    $this->ProductReviewsListingProductReviewPros = $ProductReviewsListingProductReviewPros;
    $this->ProductReviewsListingProductReviewConsArea = $ProductReviewsListingProductReviewConsArea;
    $this->ProductReviewsListingProductReviewConsHeader = $ProductReviewsListingProductReviewConsHeader;
    $this->ProductReviewsListingProductReviewCons = $ProductReviewsListingProductReviewCons;
    $this->ProductReviewsListingProductReviewSummary = $ProductReviewsListingProductReviewSummary;
    $this->ProductReviewsListingProductReviewWriteLink = $ProductReviewsListingProductReviewWriteLink;
    $this->ProductReviewsListingProductReviewPros0ul = $ProductReviewsListingProductReviewPros0ul;
    $this->ProductReviewsListingProductReviewPros0li = $ProductReviewsListingProductReviewPros0li;
    $this->ProductReviewsListingProductReviewCons0ul = $ProductReviewsListingProductReviewCons0ul;
    $this->ProductReviewsListingProductReviewCons0li = $ProductReviewsListingProductReviewCons0li;
    $this->ProductReviewsListingProductReviewAllReviewsLink = $ProductReviewsListingProductReviewAllReviewsLink;
    $this->ProductReviewsListingProductReviewDisplayCount = $ProductReviewsListingProductReviewDisplayCount;
    $this->RepeaterProductListID = $RepeaterProductListID;
    $this->RepeaterDisplayCount = $RepeaterDisplayCount;
    $this->RepeaterRepeatCount = $RepeaterRepeatCount;
    $this->RepeaterItemHeight = $RepeaterItemHeight;
    $this->RepeaterItemBorderStyle = $RepeaterItemBorderStyle;
    $this->RepeaterItemBorderWidth = $RepeaterItemBorderWidth;
    $this->RepeaterProductPictureThumbSource = $RepeaterProductPictureThumbSource;
    $this->RepeaterProductPictureThumbHeight = $RepeaterProductPictureThumbHeight;
    $this->RepeaterProductPictureThumbWidth = $RepeaterProductPictureThumbWidth;
    $this->RepeaterProductPictureEnlargeThumbSource = $RepeaterProductPictureEnlargeThumbSource;
    $this->RepeaterResizeThumb = $RepeaterResizeThumb;
    $this->RepeaterSizeProportional = $RepeaterSizeProportional;
    $this->RepeaterShowHiddenProducts = $RepeaterShowHiddenProducts;
    $this->RepeaterDisplayOnlySubcategories = $RepeaterDisplayOnlySubcategories;
    $this->RepeaterItemBorderColor = $RepeaterItemBorderColor;
    $this->CarouselScrollBy = $CarouselScrollBy;
    $this->CarouselCarouselNextButton = $CarouselCarouselNextButton;
    $this->CarouselCarouselPrevButton = $CarouselCarouselPrevButton;
    $this->CarouselCarouselNextButtonUrl = $CarouselCarouselNextButtonUrl;
    $this->CarouselCarouselNextButtonDisabledUrl = $CarouselCarouselNextButtonDisabledUrl;
    $this->CarouselCarouselPrevButtonUrl = $CarouselCarouselPrevButtonUrl;
    $this->CarouselCarouselPrevButtonDisabledUrl = $CarouselCarouselPrevButtonDisabledUrl;
    $this->CarouselCarouselOrientation = $CarouselCarouselOrientation;
    $this->ExcludedIDs = $ExcludedIDs;
    $this->BrowseByCategoryBrowseCategoryIcon = $BrowseByCategoryBrowseCategoryIcon;
    $this->BrowseByAttributeBrowseByAttributeFilterButtonArea = $BrowseByAttributeBrowseByAttributeFilterButtonArea;
    $this->Identifier = $Identifier;
    $this->ThemePageSettingsID = $ThemePageSettingsID;
    $this->ThemeLayoutControlID = $ThemeLayoutControlID;
    $this->ThemeLayoutControlSettingsValueColTrans = $ThemeLayoutControlSettingsValueColTrans;
    $this->ThemeLayoutControlStyleColTrans = $ThemeLayoutControlStyleColTrans;
    $this->ThemeLayoutControlColTrans = $ThemeLayoutControlColTrans;
    $this->ThemeLayoutControlSettingColTrans = $ThemeLayoutControlSettingColTrans;
  }

}

}
