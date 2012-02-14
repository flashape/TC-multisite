<?php

if (!class_exists("Customer_AddToDripSeriesResponse", false)) 
{
class Customer_AddToDripSeriesResponse
{

  /**
   * 
   * @var boolean $Customer_AddToDripSeriesResult
   * @access public
   */
  public $Customer_AddToDripSeriesResult;

  /**
   * 
   * @param boolean $Customer_AddToDripSeriesResult
   * @access public
   */
  public function __construct($Customer_AddToDripSeriesResult)
  {
    $this->Customer_AddToDripSeriesResult = $Customer_AddToDripSeriesResult;
  }

}

}
