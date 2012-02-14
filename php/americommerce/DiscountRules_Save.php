<?php

if (!class_exists("DiscountRules_Save", false)) 
{
class DiscountRules_Save
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
