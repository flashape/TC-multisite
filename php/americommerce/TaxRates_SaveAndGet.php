<?php

if (!class_exists("TaxRates_SaveAndGet", false)) 
{
class TaxRates_SaveAndGet
{

  /**
   * 
   * @var TaxRatesTrans $poTaxRatesTrans
   * @access public
   */
  public $poTaxRatesTrans;

  /**
   * 
   * @param TaxRatesTrans $poTaxRatesTrans
   * @access public
   */
  public function __construct($poTaxRatesTrans)
  {
    $this->poTaxRatesTrans = $poTaxRatesTrans;
  }

}

}
