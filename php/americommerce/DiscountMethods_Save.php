<?php

if (!class_exists("DiscountMethods_Save", false)) 
{
class DiscountMethods_Save
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
