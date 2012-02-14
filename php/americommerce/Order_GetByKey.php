<?php

if (!class_exists("Order_GetByKey", false)) 
{
class Order_GetByKey
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
