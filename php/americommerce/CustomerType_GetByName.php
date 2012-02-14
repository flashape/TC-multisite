<?php

if (!class_exists("CustomerType_GetByName", false)) 
{
class CustomerType_GetByName
{

  /**
   * 
   * @var string $psCustomerTypeName
   * @access public
   */
  public $psCustomerTypeName;

  /**
   * 
   * @param string $psCustomerTypeName
   * @access public
   */
  public function __construct($psCustomerTypeName)
  {
    $this->psCustomerTypeName = $psCustomerTypeName;
  }

}

}
