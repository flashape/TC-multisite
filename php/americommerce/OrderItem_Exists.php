<?php

if (!class_exists("OrderItem_Exists", false)) 
{
class OrderItem_Exists
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
