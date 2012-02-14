<?php

if (!class_exists("Order_DeleteResponse", false)) 
{
class Order_DeleteResponse
{

  /**
   * 
   * @var boolean $Order_DeleteResult
   * @access public
   */
  public $Order_DeleteResult;

  /**
   * 
   * @param boolean $Order_DeleteResult
   * @access public
   */
  public function __construct($Order_DeleteResult)
  {
    $this->Order_DeleteResult = $Order_DeleteResult;
  }

}

}
