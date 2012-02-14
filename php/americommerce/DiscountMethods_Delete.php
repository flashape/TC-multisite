<?php

if (!class_exists("DiscountMethods_Delete", false)) 
{
class DiscountMethods_Delete
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
