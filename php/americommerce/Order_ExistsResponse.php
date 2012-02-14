<?php

if (!class_exists("Order_ExistsResponse", false)) 
{
class Order_ExistsResponse
{

  /**
   * 
   * @var boolean $Order_ExistsResult
   * @access public
   */
  public $Order_ExistsResult;

  /**
   * 
   * @param boolean $Order_ExistsResult
   * @access public
   */
  public function __construct($Order_ExistsResult)
  {
    $this->Order_ExistsResult = $Order_ExistsResult;
  }

}

}
