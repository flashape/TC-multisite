<?php

if (!class_exists("Customer_FillCustomerPaymentMethodCollectionResponse", false)) 
{
class Customer_FillCustomerPaymentMethodCollectionResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_FillCustomerPaymentMethodCollectionResult
   * @access public
   */
  public $Customer_FillCustomerPaymentMethodCollectionResult;

  /**
   * 
   * @param CustomerTrans $Customer_FillCustomerPaymentMethodCollectionResult
   * @access public
   */
  public function __construct($Customer_FillCustomerPaymentMethodCollectionResult)
  {
    $this->Customer_FillCustomerPaymentMethodCollectionResult = $Customer_FillCustomerPaymentMethodCollectionResult;
  }

}

}
