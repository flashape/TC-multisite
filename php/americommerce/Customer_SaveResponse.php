<?php

if (!class_exists("Customer_SaveResponse", false)) 
{
class Customer_SaveResponse
{

  /**
   * 
   * @var boolean $Customer_SaveResult
   * @access public
   */
  public $Customer_SaveResult;

  /**
   * 
   * @param boolean $Customer_SaveResult
   * @access public
   */
  public function __construct($Customer_SaveResult)
  {
    $this->Customer_SaveResult = $Customer_SaveResult;
  }

}

}
