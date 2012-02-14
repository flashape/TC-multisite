<?php

if (!class_exists("DiscountMethods_SaveResponse", false)) 
{
class DiscountMethods_SaveResponse
{

  /**
   * 
   * @var boolean $DiscountMethods_SaveResult
   * @access public
   */
  public $DiscountMethods_SaveResult;

  /**
   * 
   * @param boolean $DiscountMethods_SaveResult
   * @access public
   */
  public function __construct($DiscountMethods_SaveResult)
  {
    $this->DiscountMethods_SaveResult = $DiscountMethods_SaveResult;
  }

}

}
