<?php

if (!class_exists("DripSeriesTrans", false)) 
{
class DripSeriesTrans
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
   * @var DataInt32 $DripSeriesID
   * @access public
   */
  public $DripSeriesID;

  /**
   * 
   * @var string $DripSeriesName
   * @access public
   */
  public $DripSeriesName;

  /**
   * 
   * @var boolean $Active
   * @access public
   */
  public $Active;

  /**
   * 
   * @var array $DripSeriesWhoToContactColTrans
   * @access public
   */
  public $DripSeriesWhoToContactColTrans;

  /**
   * 
   * @var array $DripSeriesWhatShouldHappenColTrans
   * @access public
   */
  public $DripSeriesWhatShouldHappenColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $DripSeriesID
   * @param string $DripSeriesName
   * @param boolean $Active
   * @param array $DripSeriesWhoToContactColTrans
   * @param array $DripSeriesWhatShouldHappenColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $DripSeriesID, $DripSeriesName, $Active, $DripSeriesWhoToContactColTrans, $DripSeriesWhatShouldHappenColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->DripSeriesID = $DripSeriesID;
    $this->DripSeriesName = $DripSeriesName;
    $this->Active = $Active;
    $this->DripSeriesWhoToContactColTrans = $DripSeriesWhoToContactColTrans;
    $this->DripSeriesWhatShouldHappenColTrans = $DripSeriesWhatShouldHappenColTrans;
  }

}

}
