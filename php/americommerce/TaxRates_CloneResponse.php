<?php

if (!class_exists("TaxRates_CloneResponse", false)) 
{
class TaxRates_CloneResponse
{

  /**
   * 
   * @var TaxRatesTrans $TaxRates_CloneResult
   * @access public
   */
  public $TaxRates_CloneResult;

  /**
   * 
   * @param TaxRatesTrans $TaxRates_CloneResult
   * @access public
   */
  public function __construct($TaxRates_CloneResult)
  {
    $this->TaxRates_CloneResult = $TaxRates_CloneResult;
  }

}

}
