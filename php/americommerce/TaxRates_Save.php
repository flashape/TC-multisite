<?php

if (!class_exists("TaxRates_Save", false)) 
{
class TaxRates_Save
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
