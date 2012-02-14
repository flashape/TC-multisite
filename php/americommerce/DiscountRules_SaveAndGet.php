<?php

if (!class_exists("DiscountRules_SaveAndGet", false)) 
{
class DiscountRules_SaveAndGet
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
