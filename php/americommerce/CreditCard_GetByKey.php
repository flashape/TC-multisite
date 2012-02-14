<?php

if (!class_exists("CreditCard_GetByKey", false)) 
{
class CreditCard_GetByKey
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
