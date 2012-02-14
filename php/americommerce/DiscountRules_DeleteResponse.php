<?php

if (!class_exists("DiscountRules_DeleteResponse", false)) 
{
class DiscountRules_DeleteResponse
{

  /**
   * 
   * @var boolean $DiscountRules_DeleteResult
   * @access public
   */
  public $DiscountRules_DeleteResult;

  /**
   * 
   * @param boolean $DiscountRules_DeleteResult
   * @access public
   */
  public function __construct($DiscountRules_DeleteResult)
  {
    $this->DiscountRules_DeleteResult = $DiscountRules_DeleteResult;
  }

}

}
