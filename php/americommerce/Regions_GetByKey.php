<?php

if (!class_exists("Regions_GetByKey", false)) 
{
class Regions_GetByKey
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
