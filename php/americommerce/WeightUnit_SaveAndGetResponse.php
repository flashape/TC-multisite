<?php

if (!class_exists("WeightUnit_SaveAndGetResponse", false)) 
{
class WeightUnit_SaveAndGetResponse
{

  /**
   * 
   * @var WeightUnitTrans $WeightUnit_SaveAndGetResult
   * @access public
   */
  public $WeightUnit_SaveAndGetResult;

  /**
   * 
   * @param WeightUnitTrans $WeightUnit_SaveAndGetResult
   * @access public
   */
  public function __construct($WeightUnit_SaveAndGetResult)
  {
    $this->WeightUnit_SaveAndGetResult = $WeightUnit_SaveAndGetResult;
  }

}

}
