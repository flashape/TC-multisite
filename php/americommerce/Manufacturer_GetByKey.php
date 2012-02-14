<?php

if (!class_exists("Manufacturer_GetByKey", false)) 
{
class Manufacturer_GetByKey
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
