<?php

if (!class_exists("Customer_GetCountResponse", false)) 
{
class Customer_GetCountResponse
{

  /**
   * 
   * @var int $Customer_GetCountResult
   * @access public
   */
  public $Customer_GetCountResult;

  /**
   * 
   * @param int $Customer_GetCountResult
   * @access public
   */
  public function __construct($Customer_GetCountResult)
  {
    $this->Customer_GetCountResult = $Customer_GetCountResult;
  }

}

}
