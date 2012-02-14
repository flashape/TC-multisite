<?php

if (!class_exists("Customer_GetTopByCustomResponse", false)) 
{
class Customer_GetTopByCustomResponse
{

  /**
   * 
   * @var array $Customer_GetTopByCustomResult
   * @access public
   */
  public $Customer_GetTopByCustomResult;

  /**
   * 
   * @param array $Customer_GetTopByCustomResult
   * @access public
   */
  public function __construct($Customer_GetTopByCustomResult)
  {
    $this->Customer_GetTopByCustomResult = $Customer_GetTopByCustomResult;
  }

}

}
