<?php

if (!class_exists("WeightUnit_Save", false)) 
{
class WeightUnit_Save
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
