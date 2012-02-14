<?php

if (!class_exists("PriceCalculation_ExistsResponse", false)) 
{
class PriceCalculation_ExistsResponse
{

  /**
   * 
   * @var boolean $PriceCalculation_ExistsResult
   * @access public
   */
  public $PriceCalculation_ExistsResult;

  /**
   * 
   * @param boolean $PriceCalculation_ExistsResult
   * @access public
   */
  public function __construct($PriceCalculation_ExistsResult)
  {
    $this->PriceCalculation_ExistsResult = $PriceCalculation_ExistsResult;
  }

}

}
