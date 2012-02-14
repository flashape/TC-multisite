<?php

if (!class_exists("CreditCard_Clone", false)) 
{
class CreditCard_Clone
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
