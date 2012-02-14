<?php

if (!class_exists("Country_Save", false)) 
{
class Country_Save
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
