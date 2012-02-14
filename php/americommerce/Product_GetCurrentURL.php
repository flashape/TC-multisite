<?php

if (!class_exists("Product_GetCurrentURL", false)) 
{
class Product_GetCurrentURL
{

  /**
   * 
   * @var int $piProductID
   * @access public
   */
  public $piProductID;

  /**
   * 
   * @param int $piProductID
   * @access public
   */
  public function __construct($piProductID)
  {
    $this->piProductID = $piProductID;
  }

}

}
