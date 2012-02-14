<?php

if (!class_exists("Cart_GetShipping", false)) 
{
class Cart_GetShipping
{

  /**
   * 
   * @var int $piSessionID
   * @access public
   */
  public $piSessionID;

  /**
   * 
   * @var string $psCity
   * @access public
   */
  public $psCity;

  /**
   * 
   * @var string $psStateCode
   * @access public
   */
  public $psStateCode;

  /**
   * 
   * @var string $psPostalCode
   * @access public
   */
  public $psPostalCode;

  /**
   * 
   * @var string $psCountryCode
   * @access public
   */
  public $psCountryCode;

  /**
   * 
   * @param int $piSessionID
   * @param string $psCity
   * @param string $psStateCode
   * @param string $psPostalCode
   * @param string $psCountryCode
   * @access public
   */
  public function __construct($piSessionID, $psCity, $psStateCode, $psPostalCode, $psCountryCode)
  {
    $this->piSessionID = $piSessionID;
    $this->psCity = $psCity;
    $this->psStateCode = $psStateCode;
    $this->psPostalCode = $psPostalCode;
    $this->psCountryCode = $psCountryCode;
  }

}

}
