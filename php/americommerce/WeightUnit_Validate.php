<?php

if (!class_exists("WeightUnit_Validate", false)) 
{
class WeightUnit_Validate
{

  /**
   * 
   * @var WeightUnitTrans $poWeightUnitTrans
   * @access public
   */
  public $poWeightUnitTrans;

  /**
   * 
   * @param WeightUnitTrans $poWeightUnitTrans
   * @access public
   */
  public function __construct($poWeightUnitTrans)
  {
    $this->poWeightUnitTrans = $poWeightUnitTrans;
  }

}

}
