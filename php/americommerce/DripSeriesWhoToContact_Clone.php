<?php

if (!class_exists("DripSeriesWhoToContact_Clone", false)) 
{
class DripSeriesWhoToContact_Clone
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
