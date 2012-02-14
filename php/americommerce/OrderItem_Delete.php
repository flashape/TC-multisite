<?php

if (!class_exists("OrderItem_Delete", false)) 
{
class OrderItem_Delete
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
