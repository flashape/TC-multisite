<?php

if (!class_exists("CreditCard_Delete", false)) 
{
class CreditCard_Delete
{

  /**
   * 
   * @var int $picardID
   * @access public
   */
  public $picardID;

  /**
   * 
   * @param int $picardID
   * @access public
   */
  public function __construct($picardID)
  {
    $this->picardID = $picardID;
  }

}

}
