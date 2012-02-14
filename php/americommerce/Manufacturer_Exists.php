<?php

if (!class_exists("Manufacturer_Exists", false)) 
{
class Manufacturer_Exists
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
