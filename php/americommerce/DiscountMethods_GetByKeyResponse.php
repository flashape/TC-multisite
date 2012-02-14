<?php

if (!class_exists("DiscountMethods_GetByKeyResponse", false)) 
{
class DiscountMethods_GetByKeyResponse
{

  /**
   * 
   * @var DiscountMethodsTrans $DiscountMethods_GetByKeyResult
   * @access public
   */
  public $DiscountMethods_GetByKeyResult;

  /**
   * 
   * @param DiscountMethodsTrans $DiscountMethods_GetByKeyResult
   * @access public
   */
  public function __construct($DiscountMethods_GetByKeyResult)
  {
    $this->DiscountMethods_GetByKeyResult = $DiscountMethods_GetByKeyResult;
  }

}

}
