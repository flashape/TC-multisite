<?php

if (!class_exists("Customer_FillEmailLogCollectionResponse", false)) 
{
class Customer_FillEmailLogCollectionResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_FillEmailLogCollectionResult
   * @access public
   */
  public $Customer_FillEmailLogCollectionResult;

  /**
   * 
   * @param CustomerTrans $Customer_FillEmailLogCollectionResult
   * @access public
   */
  public function __construct($Customer_FillEmailLogCollectionResult)
  {
    $this->Customer_FillEmailLogCollectionResult = $Customer_FillEmailLogCollectionResult;
  }

}

}
