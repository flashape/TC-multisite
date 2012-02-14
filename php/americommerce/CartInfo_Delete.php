<?php

if (!class_exists("CartInfo_Delete", false)) 
{
class CartInfo_Delete
{

  /**
   * 
   * @var int $piCartInfoID
   * @access public
   */
  public $piCartInfoID;

  /**
   * 
   * @param int $piCartInfoID
   * @access public
   */
  public function __construct($piCartInfoID)
  {
    $this->piCartInfoID = $piCartInfoID;
  }

}

}
