<?php

if (!class_exists("Manufacturer_Clone", false)) 
{
class Manufacturer_Clone
{

  /**
   * 
   * @var int $piMfgID
   * @access public
   */
  public $piMfgID;

  /**
   * 
   * @param int $piMfgID
   * @access public
   */
  public function __construct($piMfgID)
  {
    $this->piMfgID = $piMfgID;
  }

}

}
