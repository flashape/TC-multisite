<?php

if (!class_exists("Customer_DeleteResponse", false)) 
{
class Customer_DeleteResponse
{

  /**
   * 
   * @var boolean $Customer_DeleteResult
   * @access public
   */
  public $Customer_DeleteResult;

  /**
   * 
   * @param boolean $Customer_DeleteResult
   * @access public
   */
  public function __construct($Customer_DeleteResult)
  {
    $this->Customer_DeleteResult = $Customer_DeleteResult;
  }

}

}
