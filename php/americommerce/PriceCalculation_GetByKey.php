<?php

if (!class_exists("PriceCalculation_GetByKey", false)) 
{
class PriceCalculation_GetByKey
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
