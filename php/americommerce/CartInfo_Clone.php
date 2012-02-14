<?php

if (!class_exists("CartInfo_Clone", false)) 
{
class CartInfo_Clone
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
