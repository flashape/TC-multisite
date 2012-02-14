<?php

if (!class_exists("DiscountMethods_Validate", false)) 
{
class DiscountMethods_Validate
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
