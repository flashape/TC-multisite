<?php

if (!class_exists("Customer_Exists", false)) 
{
class Customer_Exists
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
