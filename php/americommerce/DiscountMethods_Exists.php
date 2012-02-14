<?php

if (!class_exists("DiscountMethods_Exists", false)) 
{
class DiscountMethods_Exists
{

  /**
   * 
   * @var int $pidiscountMethodID
   * @access public
   */
  public $pidiscountMethodID;

  /**
   * 
   * @param int $pidiscountMethodID
   * @access public
   */
  public function __construct($pidiscountMethodID)
  {
    $this->pidiscountMethodID = $pidiscountMethodID;
  }

}

}
