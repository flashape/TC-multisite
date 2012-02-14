<?php

if (!class_exists("Country_Validate", false)) 
{
class Country_Validate
{

  /**
   * 
   * @var CountryTrans $poCountryTrans
   * @access public
   */
  public $poCountryTrans;

  /**
   * 
   * @param CountryTrans $poCountryTrans
   * @access public
   */
  public function __construct($poCountryTrans)
  {
    $this->poCountryTrans = $poCountryTrans;
  }

}

}
