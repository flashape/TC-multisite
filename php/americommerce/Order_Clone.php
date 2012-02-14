<?php

if (!class_exists("Order_Clone", false)) 
{
class Order_Clone
{

  /**
   * 
   * @var int $piorderID
   * @access public
   */
  public $piorderID;

  /**
   * 
   * @param int $piorderID
   * @access public
   */
  public function __construct($piorderID)
  {
    $this->piorderID = $piorderID;
  }

}

}
