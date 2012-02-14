<?php

if (!class_exists("Customer_RemoveFromDripSeriesResponse", false)) 
{
class Customer_RemoveFromDripSeriesResponse
{

  /**
   * 
   * @var boolean $Customer_RemoveFromDripSeriesResult
   * @access public
   */
  public $Customer_RemoveFromDripSeriesResult;

  /**
   * 
   * @param boolean $Customer_RemoveFromDripSeriesResult
   * @access public
   */
  public function __construct($Customer_RemoveFromDripSeriesResult)
  {
    $this->Customer_RemoveFromDripSeriesResult = $Customer_RemoveFromDripSeriesResult;
  }

}

}
