<?php

if (!class_exists("DiscountMethods_SaveAndGet", false)) 
{
class DiscountMethods_SaveAndGet
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
