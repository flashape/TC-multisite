<?php

if (!class_exists("Product_UpdateBasicInventoryViaDataSet", false)) 
{
class Product_UpdateBasicInventoryViaDataSet
{

  /**
   * 
   * @var pdsUpdateViaDataSet $pdsUpdateViaDataSet
   * @access public
   */
  public $pdsUpdateViaDataSet;

  /**
   * 
   * @param pdsUpdateViaDataSet $pdsUpdateViaDataSet
   * @access public
   */
  public function __construct($pdsUpdateViaDataSet)
  {
    $this->pdsUpdateViaDataSet = $pdsUpdateViaDataSet;
  }

}

}
