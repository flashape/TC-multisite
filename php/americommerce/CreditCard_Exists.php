<?php

if (!class_exists("CreditCard_Exists", false)) 
{
class CreditCard_Exists
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
