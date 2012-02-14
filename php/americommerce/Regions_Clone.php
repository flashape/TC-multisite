<?php

if (!class_exists("Regions_Clone", false)) 
{
class Regions_Clone
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
