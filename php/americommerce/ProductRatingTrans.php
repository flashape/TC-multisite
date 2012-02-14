<?php

if (!class_exists("ProductRatingTrans", false)) 
{
class ProductRatingTrans
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
   * @var DataInt32 $ProductRatingID
   * @access public
   */
  public $ProductRatingID;

  /**
   * 
   * @var DataInt32 $ProductReviewID
   * @access public
   */
  public $ProductReviewID;

  /**
   * 
   * @var DataInt32 $ProductRatingDimensionID
   * @access public
   */
  public $ProductRatingDimensionID;

  /**
   * 
   * @var DataDecimal $Score
   * @access public
   */
  public $Score;

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
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ProductRatingID
   * @param DataInt32 $ProductReviewID
   * @param DataInt32 $ProductRatingDimensionID
   * @param DataDecimal $Score
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ProductRatingID, $ProductReviewID, $ProductRatingDimensionID, $Score, $EnterDate, $EnteredBy, $EditDate, $EditedBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ProductRatingID = $ProductRatingID;
    $this->ProductReviewID = $ProductReviewID;
    $this->ProductRatingDimensionID = $ProductRatingDimensionID;
    $this->Score = $Score;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
