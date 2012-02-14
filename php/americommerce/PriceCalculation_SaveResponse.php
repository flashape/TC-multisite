<?php

if (!class_exists("PriceCalculation_SaveResponse", false)) 
{
class PriceCalculation_SaveResponse
{

  /**
   * 
   * @var boolean $PriceCalculation_SaveResult
   * @access public
   */
  public $PriceCalculation_SaveResult;

  /**
   * 
   * @param boolean $PriceCalculation_SaveResult
   * @access public
   */
  public function __construct($PriceCalculation_SaveResult)
  {
    $this->PriceCalculation_SaveResult = $PriceCalculation_SaveResult;
  }

}

}
