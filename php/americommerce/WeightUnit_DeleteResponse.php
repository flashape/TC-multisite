<?php

if (!class_exists("WeightUnit_DeleteResponse", false)) 
{
class WeightUnit_DeleteResponse
{

  /**
   * 
   * @var boolean $WeightUnit_DeleteResult
   * @access public
   */
  public $WeightUnit_DeleteResult;

  /**
   * 
   * @param boolean $WeightUnit_DeleteResult
   * @access public
   */
  public function __construct($WeightUnit_DeleteResult)
  {
    $this->WeightUnit_DeleteResult = $WeightUnit_DeleteResult;
  }

}

}
