<?php

if (!class_exists("PriceCalculation_Save", false)) 
{
class PriceCalculation_Save
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
