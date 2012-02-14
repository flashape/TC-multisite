<?php

if (!class_exists("Country_SaveAndGet", false)) 
{
class Country_SaveAndGet
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
