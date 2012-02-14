<?php

if (!class_exists("PriceCalculation_FillPriceRuleCollection", false)) 
{
class PriceCalculation_FillPriceRuleCollection
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
