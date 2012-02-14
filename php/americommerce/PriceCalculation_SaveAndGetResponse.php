<?php

if (!class_exists("PriceCalculation_SaveAndGetResponse", false)) 
{
class PriceCalculation_SaveAndGetResponse
{

  /**
   * 
   * @var PriceCalculationTrans $PriceCalculation_SaveAndGetResult
   * @access public
   */
  public $PriceCalculation_SaveAndGetResult;

  /**
   * 
   * @param PriceCalculationTrans $PriceCalculation_SaveAndGetResult
   * @access public
   */
  public function __construct($PriceCalculation_SaveAndGetResult)
  {
    $this->PriceCalculation_SaveAndGetResult = $PriceCalculation_SaveAndGetResult;
  }

}

}
