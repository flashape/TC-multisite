<?php

if (!class_exists("DiscountRules_SaveAndGetResponse", false)) 
{
class DiscountRules_SaveAndGetResponse
{

  /**
   * 
   * @var DiscountRulesTrans $DiscountRules_SaveAndGetResult
   * @access public
   */
  public $DiscountRules_SaveAndGetResult;

  /**
   * 
   * @param DiscountRulesTrans $DiscountRules_SaveAndGetResult
   * @access public
   */
  public function __construct($DiscountRules_SaveAndGetResult)
  {
    $this->DiscountRules_SaveAndGetResult = $DiscountRules_SaveAndGetResult;
  }

}

}
