<?php

if (!class_exists("Country_GetByKey", false)) 
{
class Country_GetByKey
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
