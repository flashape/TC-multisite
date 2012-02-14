<?php

if (!class_exists("TaxRates_SaveResponse", false)) 
{
class TaxRates_SaveResponse
{

  /**
   * 
   * @var boolean $TaxRates_SaveResult
   * @access public
   */
  public $TaxRates_SaveResult;

  /**
   * 
   * @param boolean $TaxRates_SaveResult
   * @access public
   */
  public function __construct($TaxRates_SaveResult)
  {
    $this->TaxRates_SaveResult = $TaxRates_SaveResult;
  }

}

}
