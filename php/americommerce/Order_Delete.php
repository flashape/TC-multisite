<?php

if (!class_exists("Order_Delete", false)) 
{
class Order_Delete
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
