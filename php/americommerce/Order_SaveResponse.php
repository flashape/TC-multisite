<?php

if (!class_exists("Order_SaveResponse", false)) 
{
class Order_SaveResponse
{

  /**
   * 
   * @var boolean $Order_SaveResult
   * @access public
   */
  public $Order_SaveResult;

  /**
   * 
   * @param boolean $Order_SaveResult
   * @access public
   */
  public function __construct($Order_SaveResult)
  {
    $this->Order_SaveResult = $Order_SaveResult;
  }

}

}
