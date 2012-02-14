<?php

if (!class_exists("TaxRates_Delete", false)) 
{
class TaxRates_Delete
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
