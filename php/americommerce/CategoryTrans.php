<?php

if (!class_exists("CategoryTrans", false)) 
{
class CategoryTrans
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
   * @var DataInt32 $catID
   * @access public
   */
  public $catID;

  /**
   * 
   * @var string $catName
   * @access public
   */
  public $catName;

  /**
   * 
   * @var string $shortDesc
   * @access public
   */
  public $shortDesc;

  /**
   * 
   * @var DataInt32 $sortOrder
   * @access public
   */
  public $sortOrder;

  /**
   * 
   * @var boolean $hideFlag
   * @access public
   */
  public $hideFlag;

  /**
   * 
   * @var DataInt32 $belongsTo
   * @access public
   */
  public $belongsTo;

  /**
   * 
   * @var DataInt32 $maxQuant
   * @access public
   */
  public $maxQuant;

  /**
   * 
   * @var string $catThumb
   * @access public
   */
  public $catThumb;

  /**
   * 
   * @var string $activeStores
   * @access public
   */
  public $activeStores;

  /**
   * 
   * @var string $pageTitle
   * @access public
   */
  public $pageTitle;

  /**
   * 
   * @var string $keywords
   * @access public
   */
  public $keywords;

  /**
   * 
   * @var string $metadesc
   * @access public
   */
  public $metadesc;

  /**
   * 
   * @var string $lookupAbsoluteCategoryPath
   * @access public
   */
  public $lookupAbsoluteCategoryPath;

  /**
   * 
   * @var string $CategoryFooter
   * @access public
   */
  public $CategoryFooter;

  /**
   * 
   * @var string $CategoryHeader
   * @access public
   */
  public $CategoryHeader;

  /**
   * 
   * @var DataInt32 $NodeIndex
   * @access public
   */
  public $NodeIndex;

  /**
   * 
   * @var DataInt32 $RightChildIndex
   * @access public
   */
  public $RightChildIndex;

  /**
   * 
   * @var string $CatImage
   * @access public
   */
  public $CatImage;

  /**
   * 
   * @var string $ExternalContentUrl
   * @access public
   */
  public $ExternalContentUrl;

  /**
   * 
   * @var boolean $DisplayCategoryContents
   * @access public
   */
  public $DisplayCategoryContents;

  /**
   * 
   * @var boolean $DisplayProductInSub
   * @access public
   */
  public $DisplayProductInSub;

  /**
   * 
   * @var string $ReWriteUrl
   * @access public
   */
  public $ReWriteUrl;

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
   * @var string $DefaultProductPicture
   * @access public
   */
  public $DefaultProductPicture;

  /**
   * 
   * @var string $AlternateThumbnail
   * @access public
   */
  public $AlternateThumbnail;

  /**
   * 
   * @var DataInt32 $OverrideProductRatingDimensionGroupID
   * @access public
   */
  public $OverrideProductRatingDimensionGroupID;

  /**
   * 
   * @var DataInt32 $SubcatCountVisible
   * @access public
   */
  public $SubcatCountVisible;

  /**
   * 
   * @var DataInt32 $SubcatCountTotal
   * @access public
   */
  public $SubcatCountTotal;

  /**
   * 
   * @var string $HeadTags
   * @access public
   */
  public $HeadTags;

  /**
   * 
   * @var array $CategoryColTrans
   * @access public
   */
  public $CategoryColTrans;

  /**
   * 
   * @var array $ProductColTrans
   * @access public
   */
  public $ProductColTrans;

  /**
   * 
   * @var ProductCategoriesTrans $ProductCategoriesTrans
   * @access public
   */
  public $ProductCategoriesTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $catID
   * @param string $catName
   * @param string $shortDesc
   * @param DataInt32 $sortOrder
   * @param boolean $hideFlag
   * @param DataInt32 $belongsTo
   * @param DataInt32 $maxQuant
   * @param string $catThumb
   * @param string $activeStores
   * @param string $pageTitle
   * @param string $keywords
   * @param string $metadesc
   * @param string $lookupAbsoluteCategoryPath
   * @param string $CategoryFooter
   * @param string $CategoryHeader
   * @param DataInt32 $NodeIndex
   * @param DataInt32 $RightChildIndex
   * @param string $CatImage
   * @param string $ExternalContentUrl
   * @param boolean $DisplayCategoryContents
   * @param boolean $DisplayProductInSub
   * @param string $ReWriteUrl
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $DefaultProductPicture
   * @param string $AlternateThumbnail
   * @param DataInt32 $OverrideProductRatingDimensionGroupID
   * @param DataInt32 $SubcatCountVisible
   * @param DataInt32 $SubcatCountTotal
   * @param string $HeadTags
   * @param array $CategoryColTrans
   * @param array $ProductColTrans
   * @param ProductCategoriesTrans $ProductCategoriesTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $catID, $catName, $shortDesc, $sortOrder, $hideFlag, $belongsTo, $maxQuant, $catThumb, $activeStores, $pageTitle, $keywords, $metadesc, $lookupAbsoluteCategoryPath, $CategoryFooter, $CategoryHeader, $NodeIndex, $RightChildIndex, $CatImage, $ExternalContentUrl, $DisplayCategoryContents, $DisplayProductInSub, $ReWriteUrl, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DefaultProductPicture, $AlternateThumbnail, $OverrideProductRatingDimensionGroupID, $SubcatCountVisible, $SubcatCountTotal, $HeadTags, $CategoryColTrans, $ProductColTrans, $ProductCategoriesTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->catID = $catID;
    $this->catName = $catName;
    $this->shortDesc = $shortDesc;
    $this->sortOrder = $sortOrder;
    $this->hideFlag = $hideFlag;
    $this->belongsTo = $belongsTo;
    $this->maxQuant = $maxQuant;
    $this->catThumb = $catThumb;
    $this->activeStores = $activeStores;
    $this->pageTitle = $pageTitle;
    $this->keywords = $keywords;
    $this->metadesc = $metadesc;
    $this->lookupAbsoluteCategoryPath = $lookupAbsoluteCategoryPath;
    $this->CategoryFooter = $CategoryFooter;
    $this->CategoryHeader = $CategoryHeader;
    $this->NodeIndex = $NodeIndex;
    $this->RightChildIndex = $RightChildIndex;
    $this->CatImage = $CatImage;
    $this->ExternalContentUrl = $ExternalContentUrl;
    $this->DisplayCategoryContents = $DisplayCategoryContents;
    $this->DisplayProductInSub = $DisplayProductInSub;
    $this->ReWriteUrl = $ReWriteUrl;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DefaultProductPicture = $DefaultProductPicture;
    $this->AlternateThumbnail = $AlternateThumbnail;
    $this->OverrideProductRatingDimensionGroupID = $OverrideProductRatingDimensionGroupID;
    $this->SubcatCountVisible = $SubcatCountVisible;
    $this->SubcatCountTotal = $SubcatCountTotal;
    $this->HeadTags = $HeadTags;
    $this->CategoryColTrans = $CategoryColTrans;
    $this->ProductColTrans = $ProductColTrans;
    $this->ProductCategoriesTrans = $ProductCategoriesTrans;
  }

}

}
