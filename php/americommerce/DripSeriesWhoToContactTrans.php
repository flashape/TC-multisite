<?php

if (!class_exists("DripSeriesWhoToContactTrans", false)) 
{
class DripSeriesWhoToContactTrans
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
   * @var DataInt32 $WhoToContactID
   * @access public
   */
  public $WhoToContactID;

  /**
   * 
   * @var DataInt32 $DripSeriesID
   * @access public
   */
  public $DripSeriesID;

  /**
   * 
   * @var DataInt32 $CustomerID
   * @access public
   */
  public $CustomerID;

  /**
   * 
   * @var DataDateTime $SeriesStartedOn
   * @access public
   */
  public $SeriesStartedOn;

  /**
   * 
   * @var DataDateTime $SeriesCompletedOn
   * @access public
   */
  public $SeriesCompletedOn;

  /**
   * 
   * @var DataDateTime $LastEmailSentOn
   * @access public
   */
  public $LastEmailSentOn;

  /**
   * 
   * @var DataInt32 $EmailCountSentViaDrip
   * @access public
   */
  public $EmailCountSentViaDrip;

  /**
   * 
   * @var DataInt32 $SubscriptionContextID
   * @access public
   */
  public $SubscriptionContextID;

  /**
   * 
   * @var DataInt32 $OrderContextID
   * @access public
   */
  public $OrderContextID;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $WhoToContactID
   * @param DataInt32 $DripSeriesID
   * @param DataInt32 $CustomerID
   * @param DataDateTime $SeriesStartedOn
   * @param DataDateTime $SeriesCompletedOn
   * @param DataDateTime $LastEmailSentOn
   * @param DataInt32 $EmailCountSentViaDrip
   * @param DataInt32 $SubscriptionContextID
   * @param DataInt32 $OrderContextID
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $WhoToContactID, $DripSeriesID, $CustomerID, $SeriesStartedOn, $SeriesCompletedOn, $LastEmailSentOn, $EmailCountSentViaDrip, $SubscriptionContextID, $OrderContextID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->WhoToContactID = $WhoToContactID;
    $this->DripSeriesID = $DripSeriesID;
    $this->CustomerID = $CustomerID;
    $this->SeriesStartedOn = $SeriesStartedOn;
    $this->SeriesCompletedOn = $SeriesCompletedOn;
    $this->LastEmailSentOn = $LastEmailSentOn;
    $this->EmailCountSentViaDrip = $EmailCountSentViaDrip;
    $this->SubscriptionContextID = $SubscriptionContextID;
    $this->OrderContextID = $OrderContextID;
  }

}

}
