<?php

if (!class_exists("Customer_GetByKey", false)) 
{
class Customer_GetByKey
{

  /**
   * 
   * @var int $picustomerID
   * @access public
   */
  public $picustomerID;

  /**
   * 
   * @param int $picustomerID
   * @access public
   */
  public function __construct($picustomerID)
  {
    $this->picustomerID = $picustomerID;
  }

}

}
