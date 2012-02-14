<?php

if (!class_exists("Regions_Exists", false)) 
{
class Regions_Exists
{

  /**
   * 
   * @var int $piregionID
   * @access public
   */
  public $piregionID;

  /**
   * 
   * @param int $piregionID
   * @access public
   */
  public function __construct($piregionID)
  {
    $this->piregionID = $piregionID;
  }

}

}
