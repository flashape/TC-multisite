<?php

if (!class_exists("DiscountMethods_SaveAndGetResponse", false)) 
{
class DiscountMethods_SaveAndGetResponse
{

  /**
   * 
   * @var DiscountMethodsTrans $DiscountMethods_SaveAndGetResult
   * @access public
   */
  public $DiscountMethods_SaveAndGetResult;

  /**
   * 
   * @param DiscountMethodsTrans $DiscountMethods_SaveAndGetResult
   * @access public
   */
  public function __construct($DiscountMethods_SaveAndGetResult)
  {
    $this->DiscountMethods_SaveAndGetResult = $DiscountMethods_SaveAndGetResult;
  }

}

}
