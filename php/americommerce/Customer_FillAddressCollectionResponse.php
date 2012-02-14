<?php

if (!class_exists("Customer_FillAddressCollectionResponse", false)) 
{
class Customer_FillAddressCollectionResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_FillAddressCollectionResult
   * @access public
   */
  public $Customer_FillAddressCollectionResult;

  /**
   * 
   * @param CustomerTrans $Customer_FillAddressCollectionResult
   * @access public
   */
  public function __construct($Customer_FillAddressCollectionResult)
  {
    $this->Customer_FillAddressCollectionResult = $Customer_FillAddressCollectionResult;
  }

}

}
