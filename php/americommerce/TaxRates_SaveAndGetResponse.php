<?php

if (!class_exists("TaxRates_SaveAndGetResponse", false)) 
{
class TaxRates_SaveAndGetResponse
{

  /**
   * 
   * @var TaxRatesTrans $TaxRates_SaveAndGetResult
   * @access public
   */
  public $TaxRates_SaveAndGetResult;

  /**
   * 
   * @param TaxRatesTrans $TaxRates_SaveAndGetResult
   * @access public
   */
  public function __construct($TaxRates_SaveAndGetResult)
  {
    $this->TaxRates_SaveAndGetResult = $TaxRates_SaveAndGetResult;
  }

}

}
