<?php

if (!class_exists("PriceCalculation_Delete", false)) 
{
class PriceCalculation_Delete
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
