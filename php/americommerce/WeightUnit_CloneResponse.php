<?php

if (!class_exists("WeightUnit_CloneResponse", false)) 
{
class WeightUnit_CloneResponse
{

  /**
   * 
   * @var WeightUnitTrans $WeightUnit_CloneResult
   * @access public
   */
  public $WeightUnit_CloneResult;

  /**
   * 
   * @param WeightUnitTrans $WeightUnit_CloneResult
   * @access public
   */
  public function __construct($WeightUnit_CloneResult)
  {
    $this->WeightUnit_CloneResult = $WeightUnit_CloneResult;
  }

}

}
