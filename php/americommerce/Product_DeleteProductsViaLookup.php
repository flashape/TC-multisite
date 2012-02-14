<?php

if (!class_exists("Product_DeleteProductsViaLookup", false)) 
{
class Product_DeleteProductsViaLookup
{

  /**
   * 
   * @var array $psItemLookups
   * @access public
   */
  public $psItemLookups;

  /**
   * 
   * @var string $psLookupKey
   * @access public
   */
  public $psLookupKey;

  /**
   * 
   * @param array $psItemLookups
   * @param string $psLookupKey
   * @access public
   */
  public function __construct($psItemLookups, $psLookupKey)
  {
    $this->psItemLookups = $psItemLookups;
    $this->psLookupKey = $psLookupKey;
  }

}

}
