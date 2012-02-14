<?php

if (!class_exists("DiscountMethods_DeleteResponse", false)) 
{
class DiscountMethods_DeleteResponse
{

  /**
   * 
   * @var boolean $DiscountMethods_DeleteResult
   * @access public
   */
  public $DiscountMethods_DeleteResult;

  /**
   * 
   * @param boolean $DiscountMethods_DeleteResult
   * @access public
   */
  public function __construct($DiscountMethods_DeleteResult)
  {
    $this->DiscountMethods_DeleteResult = $DiscountMethods_DeleteResult;
  }

}

}
