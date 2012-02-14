<?php

if (!class_exists("ProductReviewTrans", false)) 
{
class ProductReviewTrans
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
   * @var DataInt32 $ProductReviewID
   * @access public
   */
  public $ProductReviewID;

  /**
   * 
   * @var DataInt32 $ProductID
   * @access public
   */
  public $ProductID;

  /**
   * 
   * @var string $Title
   * @access public
   */
  public $Title;

  /**
   * 
   * @var string $ReviewBody
   * @access public
   */
  public $ReviewBody;

  /**
   * 
   * @var string $ReviewPros
   * @access public
   */
  public $ReviewPros;

  /**
   * 
   * @var string $ReviewCons
   * @access public
   */
  public $ReviewCons;

  /**
   * 
   * @var DataDecimal $OverallRating
   * @access public
   */
  public $OverallRating;

  /**
   * 
   * @var DataInt32 $CustomerID
   * @access public
   */
  public $CustomerID;

  /**
   * 
   * @var DataInt32 $ApprovedByUserID
   * @access public
   */
  public $ApprovedByUserID;

  /**
   * 
   * @var DataDateTime $ApprovedDate
   * @access public
   */
  public $ApprovedDate;

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
   * @var base64Binary $DateTimeStamp
   * @access public
   */
  public $DateTimeStamp;

  /**
   * 
   * @var string $AuthorDisplayName
   * @access public
   */
  public $AuthorDisplayName;

  /**
   * 
   * @var string $AuthorEmail
   * @access public
   */
  public $AuthorEmail;

  /**
   * 
   * @var string $AuthorWebsite
   * @access public
   */
  public $AuthorWebsite;

  /**
   * 
   * @var DataInt32 $ProductRatingDimensionGroupID
   * @access public
   */
  public $ProductRatingDimensionGroupID;

  /**
   * 
   * @var string $AuthorLocation
   * @access public
   */
  public $AuthorLocation;

  /**
   * 
   * @var ProductReviewApprovalStatus $ApprovalStatus
   * @access public
   */
  public $ApprovalStatus;

  /**
   * 
   * @var DataInt32 $ReviewWrittenFromStoreID
   * @access public
   */
  public $ReviewWrittenFromStoreID;

  /**
   * 
   * @var array $ProductRatingColTrans
   * @access public
   */
  public $ProductRatingColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ProductReviewID
   * @param DataInt32 $ProductID
   * @param string $Title
   * @param string $ReviewBody
   * @param string $ReviewPros
   * @param string $ReviewCons
   * @param DataDecimal $OverallRating
   * @param DataInt32 $CustomerID
   * @param DataInt32 $ApprovedByUserID
   * @param DataDateTime $ApprovedDate
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param base64Binary $DateTimeStamp
   * @param string $AuthorDisplayName
   * @param string $AuthorEmail
   * @param string $AuthorWebsite
   * @param DataInt32 $ProductRatingDimensionGroupID
   * @param string $AuthorLocation
   * @param ProductReviewApprovalStatus $ApprovalStatus
   * @param DataInt32 $ReviewWrittenFromStoreID
   * @param array $ProductRatingColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ProductReviewID, $ProductID, $Title, $ReviewBody, $ReviewPros, $ReviewCons, $OverallRating, $CustomerID, $ApprovedByUserID, $ApprovedDate, $EnterDate, $EnteredBy, $EditDate, $EditedBy, $DateTimeStamp, $AuthorDisplayName, $AuthorEmail, $AuthorWebsite, $ProductRatingDimensionGroupID, $AuthorLocation, $ApprovalStatus, $ReviewWrittenFromStoreID, $ProductRatingColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ProductReviewID = $ProductReviewID;
    $this->ProductID = $ProductID;
    $this->Title = $Title;
    $this->ReviewBody = $ReviewBody;
    $this->ReviewPros = $ReviewPros;
    $this->ReviewCons = $ReviewCons;
    $this->OverallRating = $OverallRating;
    $this->CustomerID = $CustomerID;
    $this->ApprovedByUserID = $ApprovedByUserID;
    $this->ApprovedDate = $ApprovedDate;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->AuthorDisplayName = $AuthorDisplayName;
    $this->AuthorEmail = $AuthorEmail;
    $this->AuthorWebsite = $AuthorWebsite;
    $this->ProductRatingDimensionGroupID = $ProductRatingDimensionGroupID;
    $this->AuthorLocation = $AuthorLocation;
    $this->ApprovalStatus = $ApprovalStatus;
    $this->ReviewWrittenFromStoreID = $ReviewWrittenFromStoreID;
    $this->ProductRatingColTrans = $ProductRatingColTrans;
  }

}

}
