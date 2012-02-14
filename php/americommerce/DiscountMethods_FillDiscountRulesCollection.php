<?php

if (!class_exists("DiscountMethods_FillDiscountRulesCollection", false)) 
{
class DiscountMethods_FillDiscountRulesCollection
{

  /**
   * 
   * @var DiscountMethodsTrans $poDiscountMethodsTrans
   * @access public
   */
  public $poDiscountMethodsTrans;

  /**
   * 
   * @param DiscountMethodsTrans $poDiscountMethodsTrans
   * @access public
   */
  public function __construct($poDiscountMethodsTrans)
  {
    $this->poDiscountMethodsTrans = $poDiscountMethodsTrans;
  }

}

}
