<?php

if (!class_exists("DripSeriesWhoToContact_Delete", false)) 
{
class DripSeriesWhoToContact_Delete
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
