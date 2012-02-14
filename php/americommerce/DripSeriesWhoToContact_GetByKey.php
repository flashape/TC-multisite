<?php

if (!class_exists("DripSeriesWhoToContact_GetByKey", false)) 
{
class DripSeriesWhoToContact_GetByKey
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
