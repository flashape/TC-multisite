<?php

if (!class_exists("Customer_ExistsResponse", false)) 
{
class Customer_ExistsResponse
{

  /**
   * 
   * @var boolean $Customer_ExistsResult
   * @access public
   */
  public $Customer_ExistsResult;

  /**
   * 
   * @param boolean $Customer_ExistsResult
   * @access public
   */
  public function __construct($Customer_ExistsResult)
  {
    $this->Customer_ExistsResult = $Customer_ExistsResult;
  }

}

}
