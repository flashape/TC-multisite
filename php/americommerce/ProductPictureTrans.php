<?php

if (!class_exists("ProductPictureTrans", false)) 
{
class ProductPictureTrans
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
   * @var DataInt32 $ProductPictureID
   * @access public
   */
  public $ProductPictureID;

  /**
   * 
   * @var DataInt32 $ItemID
   * @access public
   */
  public $ItemID;

  /**
   * 
   * @var string $ImageFile
   * @access public
   */
  public $ImageFile;

  /**
   * 
   * @var string $AltDesc
   * @access public
   */
  public $AltDesc;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var boolean $IsPrimary
   * @access public
   */
  public $IsPrimary;

  /**
   * 
   * @var boolean $Hide
   * @access public
   */
  public $Hide;

  /**
   * 
   * @var string $ThumbFile
   * @access public
   */
  public $ThumbFile;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @var string $FlashPath
   * @access public
   */
  public $FlashPath;

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
   * @var boolean $IsVideoScreenShot
   * @access public
   */
  public $IsVideoScreenShot;

  /**
   * 
   * @var string $VideoContent
   * @access public
   */
  public $VideoContent;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ProductPictureID
   * @param DataInt32 $ItemID
   * @param string $ImageFile
   * @param string $AltDesc
   * @param string $Description
   * @param boolean $IsPrimary
   * @param boolean $Hide
   * @param string $ThumbFile
   * @param DataInt32 $SortOrder
   * @param string $FlashPath
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $IsVideoScreenShot
   * @param string $VideoContent
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ProductPictureID, $ItemID, $ImageFile, $AltDesc, $Description, $IsPrimary, $Hide, $ThumbFile, $SortOrder, $FlashPath, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $IsVideoScreenShot, $VideoContent)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ProductPictureID = $ProductPictureID;
    $this->ItemID = $ItemID;
    $this->ImageFile = $ImageFile;
    $this->AltDesc = $AltDesc;
    $this->Description = $Description;
    $this->IsPrimary = $IsPrimary;
    $this->Hide = $Hide;
    $this->ThumbFile = $ThumbFile;
    $this->SortOrder = $SortOrder;
    $this->FlashPath = $FlashPath;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->IsVideoScreenShot = $IsVideoScreenShot;
    $this->VideoContent = $VideoContent;
  }

}

}
