<?php

if (!class_exists("TaxRates_Exists", false)) 
{
class TaxRates_Exists
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
