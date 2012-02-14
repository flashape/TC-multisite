<?php

if (!class_exists("CustomerPaymentField_Exists", false)) 
{
class CustomerPaymentField_Exists
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
