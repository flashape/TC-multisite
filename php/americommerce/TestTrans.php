<?php

if (!class_exists("TestTrans", false)) 
{
class TestTrans
{

  /**
   * 
   * @var array $PricingCol
   * @access public
   */
  public $PricingCol;

  /**
   * 
   * @var array $ArrayList
   * @access public
   */
  public $ArrayList;

  /**
   * 
   * @var array $KeyedCollectionBase
   * @access public
   */
  public $KeyedCollectionBase;

  /**
   * 
   * @param array $PricingCol
   * @param array $ArrayList
   * @param array $KeyedCollectionBase
   * @access public
   */
  public function __construct($PricingCol, $ArrayList, $KeyedCollectionBase)
  {
    $this->PricingCol = $PricingCol;
    $this->ArrayList = $ArrayList;
    $this->KeyedCollectionBase = $KeyedCollectionBase;
  }

}

}
