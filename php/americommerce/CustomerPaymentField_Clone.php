<?php

if (!class_exists("CustomerPaymentField_Clone", false)) 
{
class CustomerPaymentField_Clone
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
