<?php

if (!class_exists("Customer_RemoveFromDripSeries", false)) 
{
class Customer_RemoveFromDripSeries
{

  /**
   * 
   * @var int $piCustomerID
   * @access public
   */
  public $piCustomerID;

  /**
   * 
   * @var int $piDripSeriesID
   * @access public
   */
  public $piDripSeriesID;

  /**
   * 
   * @param int $piCustomerID
   * @param int $piDripSeriesID
   * @access public
   */
  public function __construct($piCustomerID, $piDripSeriesID)
  {
    $this->piCustomerID = $piCustomerID;
    $this->piDripSeriesID = $piDripSeriesID;
  }

}

}
