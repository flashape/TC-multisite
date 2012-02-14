<?php

if (!class_exists("PriceCalculation_CloneResponse", false)) 
{
class PriceCalculation_CloneResponse
{

  /**
   * 
   * @var PriceCalculationTrans $PriceCalculation_CloneResult
   * @access public
   */
  public $PriceCalculation_CloneResult;

  /**
   * 
   * @param PriceCalculationTrans $PriceCalculation_CloneResult
   * @access public
   */
  public function __construct($PriceCalculation_CloneResult)
  {
    $this->PriceCalculation_CloneResult = $PriceCalculation_CloneResult;
  }

}

}
