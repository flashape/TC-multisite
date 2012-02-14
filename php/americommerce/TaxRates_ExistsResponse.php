<?php

if (!class_exists("TaxRates_ExistsResponse", false)) 
{
class TaxRates_ExistsResponse
{

  /**
   * 
   * @var boolean $TaxRates_ExistsResult
   * @access public
   */
  public $TaxRates_ExistsResult;

  /**
   * 
   * @param boolean $TaxRates_ExistsResult
   * @access public
   */
  public function __construct($TaxRates_ExistsResult)
  {
    $this->TaxRates_ExistsResult = $TaxRates_ExistsResult;
  }

}

}
