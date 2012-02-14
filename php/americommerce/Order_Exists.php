<?php

if (!class_exists("Order_Exists", false)) 
{
class Order_Exists
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
