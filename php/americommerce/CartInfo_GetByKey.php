<?php

if (!class_exists("CartInfo_GetByKey", false)) 
{
class CartInfo_GetByKey
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
