<?php

if (!class_exists("WeightUnit_SaveResponse", false)) 
{
class WeightUnit_SaveResponse
{

  /**
   * 
   * @var boolean $WeightUnit_SaveResult
   * @access public
   */
  public $WeightUnit_SaveResult;

  /**
   * 
   * @param boolean $WeightUnit_SaveResult
   * @access public
   */
  public function __construct($WeightUnit_SaveResult)
  {
    $this->WeightUnit_SaveResult = $WeightUnit_SaveResult;
  }

}

}
