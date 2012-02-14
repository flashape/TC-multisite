<?php

if (!class_exists("ActivePaymentMethodTrans", false)) 
{
class ActivePaymentMethodTrans
{

  /**
   * 
   * @var int $PaymentMethodID
   * @access public
   */
  public $PaymentMethodID;

  /**
   * 
   * @var string $PaymentMethodName
   * @access public
   */
  public $PaymentMethodName;

  /**
   * 
   * @var string $PaymentType
   * @access public
   */
  public $PaymentType;

  /**
   * 
   * @var string $PaymentTypeName
   * @access public
   */
  public $PaymentTypeName;

  /**
   * 
   * @var int $Sort
   * @access public
   */
  public $Sort;

  /**
   * 
   * @param int $PaymentMethodID
   * @param string $PaymentMethodName
   * @param string $PaymentType
   * @param string $PaymentTypeName
   * @param int $Sort
   * @access public
   */
  public function __construct($PaymentMethodID, $PaymentMethodName, $PaymentType, $PaymentTypeName, $Sort)
  {
    $this->PaymentMethodID = $PaymentMethodID;
    $this->PaymentMethodName = $PaymentMethodName;
    $this->PaymentType = $PaymentType;
    $this->PaymentTypeName = $PaymentTypeName;
    $this->Sort = $Sort;
  }

}

}
