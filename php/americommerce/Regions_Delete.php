<?php

if (!class_exists("Regions_Delete", false)) 
{
class Regions_Delete
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
