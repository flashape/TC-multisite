<?php

if (!class_exists("Country_GetByNameOrCountryCodeResponse", false)) 
{
class Country_GetByNameOrCountryCodeResponse
{

  /**
   * 
   * @var CountryTrans $Country_GetByNameOrCountryCodeResult
   * @access public
   */
  public $Country_GetByNameOrCountryCodeResult;

  /**
   * 
   * @param CountryTrans $Country_GetByNameOrCountryCodeResult
   * @access public
   */
  public function __construct($Country_GetByNameOrCountryCodeResult)
  {
    $this->Country_GetByNameOrCountryCodeResult = $Country_GetByNameOrCountryCodeResult;
  }

}

}
