<?php

if (!class_exists("TestPricingCollectionAsTransportNoReturn", false)) 
{
class TestPricingCollectionAsTransportNoReturn
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
