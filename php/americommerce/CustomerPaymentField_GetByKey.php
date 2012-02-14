<?php

if (!class_exists("CustomerPaymentField_GetByKey", false)) 
{
class CustomerPaymentField_GetByKey
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
