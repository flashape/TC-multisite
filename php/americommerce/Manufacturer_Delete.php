<?php

if (!class_exists("Manufacturer_Delete", false)) 
{
class Manufacturer_Delete
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
