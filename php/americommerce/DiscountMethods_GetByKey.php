<?php

if (!class_exists("DiscountMethods_GetByKey", false)) 
{
class DiscountMethods_GetByKey
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
