<?php

if (!class_exists("DiscountMethods_ExistsResponse", false)) 
{
class DiscountMethods_ExistsResponse
{

  /**
   * 
   * @var boolean $DiscountMethods_ExistsResult
   * @access public
   */
  public $DiscountMethods_ExistsResult;

  /**
   * 
   * @param boolean $DiscountMethods_ExistsResult
   * @access public
   */
  public function __construct($DiscountMethods_ExistsResult)
  {
    $this->DiscountMethods_ExistsResult = $DiscountMethods_ExistsResult;
  }

}

}
