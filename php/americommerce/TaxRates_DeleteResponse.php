<?php

if (!class_exists("TaxRates_DeleteResponse", false)) 
{
class TaxRates_DeleteResponse
{

  /**
   * 
   * @var boolean $TaxRates_DeleteResult
   * @access public
   */
  public $TaxRates_DeleteResult;

  /**
   * 
   * @param boolean $TaxRates_DeleteResult
   * @access public
   */
  public function __construct($TaxRates_DeleteResult)
  {
    $this->TaxRates_DeleteResult = $TaxRates_DeleteResult;
  }

}

}
