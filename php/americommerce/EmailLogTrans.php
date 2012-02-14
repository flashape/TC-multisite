<?php

if (!class_exists("EmailLogTrans", false)) 
{
class EmailLogTrans
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
   * @var DataInt32 $CustomerID
   * @access public
   */
  public $CustomerID;

  /**
   * 
   * @var string $EmailTo
   * @access public
   */
  public $EmailTo;

  /**
   * 
   * @var string $EmailFrom
   * @access public
   */
  public $EmailFrom;

  /**
   * 
   * @var string $EmailBody
   * @access public
   */
  public $EmailBody;

  /**
   * 
   * @var string $EmailFormat
   * @access public
   */
  public $EmailFormat;

  /**
   * 
   * @var DataDateTime $SentDate
   * @access public
   */
  public $SentDate;

  /**
   * 
   * @var string $EmailSubject
   * @access public
   */
  public $EmailSubject;

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
   * @var DataInt32 $EmailID
   * @access public
   */
  public $EmailID;

  /**
   * 
   * @var DataInt32 $DripSeriesContactStatusID
   * @access public
   */
  public $DripSeriesContactStatusID;

  /**
   * 
   * @var DataInt32 $DripSeriesActionID
   * @access public
   */
  public $DripSeriesActionID;

  /**
   * 
   * @var string $Attachment
   * @access public
   */
  public $Attachment;

  /**
   * 
   * @var string $EmailArea
   * @access public
   */
  public $EmailArea;

  /**
   * 
   * @var DataInt32 $EntityID
   * @access public
   */
  public $EntityID;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ID
   * @param DataInt32 $CustomerID
   * @param string $EmailTo
   * @param string $EmailFrom
   * @param string $EmailBody
   * @param string $EmailFormat
   * @param DataDateTime $SentDate
   * @param string $EmailSubject
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $EmailID
   * @param DataInt32 $DripSeriesContactStatusID
   * @param DataInt32 $DripSeriesActionID
   * @param string $Attachment
   * @param string $EmailArea
   * @param DataInt32 $EntityID
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $CustomerID, $EmailTo, $EmailFrom, $EmailBody, $EmailFormat, $SentDate, $EmailSubject, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $EmailID, $DripSeriesContactStatusID, $DripSeriesActionID, $Attachment, $EmailArea, $EntityID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->CustomerID = $CustomerID;
    $this->EmailTo = $EmailTo;
    $this->EmailFrom = $EmailFrom;
    $this->EmailBody = $EmailBody;
    $this->EmailFormat = $EmailFormat;
    $this->SentDate = $SentDate;
    $this->EmailSubject = $EmailSubject;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->EmailID = $EmailID;
    $this->DripSeriesContactStatusID = $DripSeriesContactStatusID;
    $this->DripSeriesActionID = $DripSeriesActionID;
    $this->Attachment = $Attachment;
    $this->EmailArea = $EmailArea;
    $this->EntityID = $EntityID;
  }

}

}
