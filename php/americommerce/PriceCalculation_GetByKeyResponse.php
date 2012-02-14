<?php

if (!class_exists("PriceCalculation_GetByKeyResponse", false)) 
{
class PriceCalculation_GetByKeyResponse
{

  /**
   * 
   * @var PriceCalculationTrans $PriceCalculation_GetByKeyResult
   * @access public
   */
  public $PriceCalculation_GetByKeyResult;

  /**
   * 
   * @param PriceCalculationTrans $PriceCalculation_GetByKeyResult
   * @access public
   */
  public function __construct($PriceCalculation_GetByKeyResult)
  {
    $this->PriceCalculation_GetByKeyResult = $PriceCalculation_GetByKeyResult;
  }

}

}
