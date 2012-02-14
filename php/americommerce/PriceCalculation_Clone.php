<?php

if (!class_exists("PriceCalculation_Clone", false)) 
{
class PriceCalculation_Clone
{

  /**
   * 
   * @var int $piPriceCalculationID
   * @access public
   */
  public $piPriceCalculationID;

  /**
   * 
   * @param int $piPriceCalculationID
   * @access public
   */
  public function __construct($piPriceCalculationID)
  {
    $this->piPriceCalculationID = $piPriceCalculationID;
  }

}

}
