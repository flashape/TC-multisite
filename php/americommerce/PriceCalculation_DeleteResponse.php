<?php

if (!class_exists("PriceCalculation_DeleteResponse", false)) 
{
class PriceCalculation_DeleteResponse
{

  /**
   * 
   * @var boolean $PriceCalculation_DeleteResult
   * @access public
   */
  public $PriceCalculation_DeleteResult;

  /**
   * 
   * @param boolean $PriceCalculation_DeleteResult
   * @access public
   */
  public function __construct($PriceCalculation_DeleteResult)
  {
    $this->PriceCalculation_DeleteResult = $PriceCalculation_DeleteResult;
  }

}

}
