<?php

if (!class_exists("PriceCalculation_Validate", false)) 
{
class PriceCalculation_Validate
{

  /**
   * 
   * @var PriceCalculationTrans $poPriceCalculationTrans
   * @access public
   */
  public $poPriceCalculationTrans;

  /**
   * 
   * @param PriceCalculationTrans $poPriceCalculationTrans
   * @access public
   */
  public function __construct($poPriceCalculationTrans)
  {
    $this->poPriceCalculationTrans = $poPriceCalculationTrans;
  }

}

}
