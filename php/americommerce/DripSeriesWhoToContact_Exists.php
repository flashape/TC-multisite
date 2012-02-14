<?php

if (!class_exists("DripSeriesWhoToContact_Exists", false)) 
{
class DripSeriesWhoToContact_Exists
{

  /**
   * 
   * @var int $piWhoToContactID
   * @access public
   */
  public $piWhoToContactID;

  /**
   * 
   * @param int $piWhoToContactID
   * @access public
   */
  public function __construct($piWhoToContactID)
  {
    $this->piWhoToContactID = $piWhoToContactID;
  }

}

}
