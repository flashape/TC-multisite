<?php

if (!class_exists("TaxRates_Clone", false)) 
{
class TaxRates_Clone
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
