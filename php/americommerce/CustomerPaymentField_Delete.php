<?php

if (!class_exists("CustomerPaymentField_Delete", false)) 
{
class CustomerPaymentField_Delete
{

  /**
   * 
   * @var int $picustomerPaymentFieldID
   * @access public
   */
  public $picustomerPaymentFieldID;

  /**
   * 
   * @param int $picustomerPaymentFieldID
   * @access public
   */
  public function __construct($picustomerPaymentFieldID)
  {
    $this->picustomerPaymentFieldID = $picustomerPaymentFieldID;
  }

}

}
