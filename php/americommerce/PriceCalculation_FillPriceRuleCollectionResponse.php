<?php

if (!class_exists("PriceCalculation_FillPriceRuleCollectionResponse", false)) 
{
class PriceCalculation_FillPriceRuleCollectionResponse
{

  /**
   * 
   * @var PriceCalculationTrans $PriceCalculation_FillPriceRuleCollectionResult
   * @access public
   */
  public $PriceCalculation_FillPriceRuleCollectionResult;

  /**
   * 
   * @param PriceCalculationTrans $PriceCalculation_FillPriceRuleCollectionResult
   * @access public
   */
  public function __construct($PriceCalculation_FillPriceRuleCollectionResult)
  {
    $this->PriceCalculation_FillPriceRuleCollectionResult = $PriceCalculation_FillPriceRuleCollectionResult;
  }

}

}
