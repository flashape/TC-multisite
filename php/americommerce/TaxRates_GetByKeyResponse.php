<?php

if (!class_exists("TaxRates_GetByKeyResponse", false)) 
{
class TaxRates_GetByKeyResponse
{

  /**
   * 
   * @var TaxRatesTrans $TaxRates_GetByKeyResult
   * @access public
   */
  public $TaxRates_GetByKeyResult;

  /**
   * 
   * @param TaxRatesTrans $TaxRates_GetByKeyResult
   * @access public
   */
  public function __construct($TaxRates_GetByKeyResult)
  {
    $this->TaxRates_GetByKeyResult = $TaxRates_GetByKeyResult;
  }

}

}
