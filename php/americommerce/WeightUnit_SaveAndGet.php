<?php

if (!class_exists("WeightUnit_SaveAndGet", false)) 
{
class WeightUnit_SaveAndGet
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
