<?php

if (!class_exists("WeightUnit_GetByKeyResponse", false)) 
{
class WeightUnit_GetByKeyResponse
{

  /**
   * 
   * @var WeightUnitTrans $WeightUnit_GetByKeyResult
   * @access public
   */
  public $WeightUnit_GetByKeyResult;

  /**
   * 
   * @param WeightUnitTrans $WeightUnit_GetByKeyResult
   * @access public
   */
  public function __construct($WeightUnit_GetByKeyResult)
  {
    $this->WeightUnit_GetByKeyResult = $WeightUnit_GetByKeyResult;
  }

}

}
