<?php

if (!class_exists("Country_Clone", false)) 
{
class Country_Clone
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
