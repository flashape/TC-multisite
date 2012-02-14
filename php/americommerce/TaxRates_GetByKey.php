<?php

if (!class_exists("TaxRates_GetByKey", false)) 
{
class TaxRates_GetByKey
{

  /**
   * 
   * @var int $pitaxRateID
   * @access public
   */
  public $pitaxRateID;

  /**
   * 
   * @param int $pitaxRateID
   * @access public
   */
  public function __construct($pitaxRateID)
  {
    $this->pitaxRateID = $pitaxRateID;
  }

}

}
