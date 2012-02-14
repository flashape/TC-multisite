<?php

if (!class_exists("Cart_SetShipping", false)) 
{
class Cart_SetShipping
{

  /**
   * 
   * @var int $piSessionID
   * @access public
   */
  public $piSessionID;

  /**
   * 
   * @var string $psShippingRateIdentifier
   * @access public
   */
  public $psShippingRateIdentifier;

  /**
   * 
   * @param int $piSessionID
   * @param string $psShippingRateIdentifier
   * @access public
   */
  public function __construct($piSessionID, $psShippingRateIdentifier)
  {
    $this->piSessionID = $piSessionID;
    $this->psShippingRateIdentifier = $psShippingRateIdentifier;
  }

}

}
