<?php

if (!class_exists("PriceCalculation_SaveAndGet", false)) 
{
class PriceCalculation_SaveAndGet
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
