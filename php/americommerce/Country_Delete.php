<?php

if (!class_exists("Country_Delete", false)) 
{
class Country_Delete
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
