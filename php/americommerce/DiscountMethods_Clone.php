<?php

if (!class_exists("DiscountMethods_Clone", false)) 
{
class DiscountMethods_Clone
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
