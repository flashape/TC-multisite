<?php

if (!class_exists("DiscountRules_GetByKeyResponse", false)) 
{
class DiscountRules_GetByKeyResponse
{

  /**
   * 
   * @var DiscountRulesTrans $DiscountRules_GetByKeyResult
   * @access public
   */
  public $DiscountRules_GetByKeyResult;

  /**
   * 
   * @param DiscountRulesTrans $DiscountRules_GetByKeyResult
   * @access public
   */
  public function __construct($DiscountRules_GetByKeyResult)
  {
    $this->DiscountRules_GetByKeyResult = $DiscountRules_GetByKeyResult;
  }

}

}
