<?php

if (!class_exists("OrderItem_GetByKey", false)) 
{
class OrderItem_GetByKey
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
