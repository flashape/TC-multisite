<?php

if (!class_exists("TaxRates_Validate", false)) 
{
class TaxRates_Validate
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
