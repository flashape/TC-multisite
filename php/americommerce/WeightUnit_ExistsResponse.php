<?php

if (!class_exists("WeightUnit_ExistsResponse", false)) 
{
class WeightUnit_ExistsResponse
{

  /**
   * 
   * @var boolean $WeightUnit_ExistsResult
   * @access public
   */
  public $WeightUnit_ExistsResult;

  /**
   * 
   * @param boolean $WeightUnit_ExistsResult
   * @access public
   */
  public function __construct($WeightUnit_ExistsResult)
  {
    $this->WeightUnit_ExistsResult = $WeightUnit_ExistsResult;
  }

}

}
