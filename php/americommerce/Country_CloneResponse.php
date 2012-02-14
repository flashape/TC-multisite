<?php

if (!class_exists("Country_CloneResponse", false)) 
{
class Country_CloneResponse
{

  /**
   * 
   * @var CountryTrans $Country_CloneResult
   * @access public
   */
  public $Country_CloneResult;

  /**
   * 
   * @param CountryTrans $Country_CloneResult
   * @access public
   */
  public function __construct($Country_CloneResult)
  {
    $this->Country_CloneResult = $Country_CloneResult;
  }

}

}
