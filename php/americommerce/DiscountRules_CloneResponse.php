<?php

if (!class_exists("DiscountRules_CloneResponse", false)) 
{
class DiscountRules_CloneResponse
{

  /**
   * 
   * @var DiscountRulesTrans $DiscountRules_CloneResult
   * @access public
   */
  public $DiscountRules_CloneResult;

  /**
   * 
   * @param DiscountRulesTrans $DiscountRules_CloneResult
   * @access public
   */
  public function __construct($DiscountRules_CloneResult)
  {
    $this->DiscountRules_CloneResult = $DiscountRules_CloneResult;
  }

}

}
