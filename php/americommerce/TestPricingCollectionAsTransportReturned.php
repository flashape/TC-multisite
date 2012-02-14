<?php

if (!class_exists("TestPricingCollectionAsTransportReturned", false)) 
{
class TestPricingCollectionAsTransportReturned
{

  /**
   * 
   * @var array $poTransIn
   * @access public
   */
  public $poTransIn;

  /**
   * 
   * @param array $poTransIn
   * @access public
   */
  public function __construct($poTransIn)
  {
    $this->poTransIn = $poTransIn;
  }

}

}
