<?php

if (!class_exists("Customer_Clone", false)) 
{
class Customer_Clone
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
