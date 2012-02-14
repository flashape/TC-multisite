<?php

if (!class_exists("DripSeriesWhatShouldHappenTrans", false)) 
{
class DripSeriesWhatShouldHappenTrans
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
   * @var DataInt32 $WhatShouldHappenID
   * @access public
   */
  public $WhatShouldHappenID;

  /**
   * 
   * @var DataInt32 $DripSeriesID
   * @access public
   */
  public $DripSeriesID;

  /**
   * 
   * @var string $StepName
   * @access public
   */
  public $StepName;

  /**
   * 
   * @var DripSeriesWhatToDo $WhatsHappening
   * @access public
   */
  public $WhatsHappening;

  /**
   * 
   * @var DataInt32 $WhenValue
   * @access public
   */
  public $WhenValue;

  /**
   * 
   * @var DripSeriesTimeInterval $WhenInterval
   * @access public
   */
  public $WhenInterval;

  /**
   * 
   * @var DripSeriesWhenToDo $WhenIsItHappening
   * @access public
   */
  public $WhenIsItHappening;

  /**
   * 
   * @var DataInt32 $EmailTemplateID
   * @access public
   */
  public $EmailTemplateID;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $WhatShouldHappenID
   * @param DataInt32 $DripSeriesID
   * @param string $StepName
   * @param DripSeriesWhatToDo $WhatsHappening
   * @param DataInt32 $WhenValue
   * @param DripSeriesTimeInterval $WhenInterval
   * @param DripSeriesWhenToDo $WhenIsItHappening
   * @param DataInt32 $EmailTemplateID
   * @param DataInt32 $SortOrder
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $WhatShouldHappenID, $DripSeriesID, $StepName, $WhatsHappening, $WhenValue, $WhenInterval, $WhenIsItHappening, $EmailTemplateID, $SortOrder)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->WhatShouldHappenID = $WhatShouldHappenID;
    $this->DripSeriesID = $DripSeriesID;
    $this->StepName = $StepName;
    $this->WhatsHappening = $WhatsHappening;
    $this->WhenValue = $WhenValue;
    $this->WhenInterval = $WhenInterval;
    $this->WhenIsItHappening = $WhenIsItHappening;
    $this->EmailTemplateID = $EmailTemplateID;
    $this->SortOrder = $SortOrder;
  }

}

}
