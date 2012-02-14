<?php

if (!class_exists("Country_SaveAndGetResponse", false)) 
{
class Country_SaveAndGetResponse
{

  /**
   * 
   * @var CountryTrans $Country_SaveAndGetResult
   * @access public
   */
  public $Country_SaveAndGetResult;

  /**
   * 
   * @param CountryTrans $Country_SaveAndGetResult
   * @access public
   */
  public function __construct($Country_SaveAndGetResult)
  {
    $this->Country_SaveAndGetResult = $Country_SaveAndGetResult;
  }

}

}
