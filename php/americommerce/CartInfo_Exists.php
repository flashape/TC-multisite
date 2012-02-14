<?php

if (!class_exists("CartInfo_Exists", false)) 
{
class CartInfo_Exists
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
