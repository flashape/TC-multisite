<?php

if (!class_exists("TestPricingCollectionAsTransport", false)) 
{
class TestPricingCollectionAsTransport
{

  /**
   * 
   * @var int $piItemNumber
   * @access public
   */
  public $piItemNumber;

  /**
   * 
   * @param int $piItemNumber
   * @access public
   */
  public function __construct($piItemNumber)
  {
    $this->piItemNumber = $piItemNumber;
  }

}

}
