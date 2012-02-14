<?php

if (!class_exists("DiscountRules_Validate", false)) 
{
class DiscountRules_Validate
{

  /**
   * 
   * @var DiscountRulesTrans $poDiscountRulesTrans
   * @access public
   */
  public $poDiscountRulesTrans;

  /**
   * 
   * @param DiscountRulesTrans $poDiscountRulesTrans
   * @access public
   */
  public function __construct($poDiscountRulesTrans)
  {
    $this->poDiscountRulesTrans = $poDiscountRulesTrans;
  }

}

}
