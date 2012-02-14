<?php

if (!class_exists("Customer_GetByCustomResponse", false)) 
{
class Customer_GetByCustomResponse
{

  /**
   * 
   * @var array $Customer_GetByCustomResult
   * @access public
   */
  public $Customer_GetByCustomResult;

  /**
   * 
   * @param array $Customer_GetByCustomResult
   * @access public
   */
  public function __construct($Customer_GetByCustomResult)
  {
    $this->Customer_GetByCustomResult = $Customer_GetByCustomResult;
  }

}

}
