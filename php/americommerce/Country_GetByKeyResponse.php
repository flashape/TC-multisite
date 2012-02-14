<?php

if (!class_exists("Country_GetByKeyResponse", false)) 
{
class Country_GetByKeyResponse
{

  /**
   * 
   * @var CountryTrans $Country_GetByKeyResult
   * @access public
   */
  public $Country_GetByKeyResult;

  /**
   * 
   * @param CountryTrans $Country_GetByKeyResult
   * @access public
   */
  public function __construct($Country_GetByKeyResult)
  {
    $this->Country_GetByKeyResult = $Country_GetByKeyResult;
  }

}

}
