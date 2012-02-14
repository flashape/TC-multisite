<?php

if (!class_exists("Country_Exists", false)) 
{
class Country_Exists
{

  /**
   * 
   * @var int $picountryID
   * @access public
   */
  public $picountryID;

  /**
   * 
   * @param int $picountryID
   * @access public
   */
  public function __construct($picountryID)
  {
    $this->picountryID = $picountryID;
  }

}

}
