<?php

if (!class_exists("Customer_Delete", false)) 
{
class Customer_Delete
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
