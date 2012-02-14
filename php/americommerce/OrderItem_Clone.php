<?php

if (!class_exists("OrderItem_Clone", false)) 
{
class OrderItem_Clone
{

  /**
   * 
   * @var int $piorderItemsID
   * @access public
   */
  public $piorderItemsID;

  /**
   * 
   * @param int $piorderItemsID
   * @access public
   */
  public function __construct($piorderItemsID)
  {
    $this->piorderItemsID = $piorderItemsID;
  }

}

}
