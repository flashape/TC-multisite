<?php

if (!class_exists("DiscountRules_SaveResponse", false)) 
{
class DiscountRules_SaveResponse
{

  /**
   * 
   * @var boolean $DiscountRules_SaveResult
   * @access public
   */
  public $DiscountRules_SaveResult;

  /**
   * 
   * @param boolean $DiscountRules_SaveResult
   * @access public
   */
  public function __construct($DiscountRules_SaveResult)
  {
    $this->DiscountRules_SaveResult = $DiscountRules_SaveResult;
  }

}

}
