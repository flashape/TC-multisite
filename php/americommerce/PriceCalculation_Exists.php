<?php

if (!class_exists("PriceCalculation_Exists", false)) 
{
class PriceCalculation_Exists
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
