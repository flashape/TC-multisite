<?php

if (!class_exists("ShippingRule_DeleteResponse", false)) 
{
class ShippingRule_DeleteResponse
{

  /**
   * 
   * @var boolean $ShippingRule_DeleteResult
   * @access public
   */
  public $ShippingRule_DeleteResult;

  /**
   * 
   * @param boolean $ShippingRule_DeleteResult
   * @access public
   */
  public function __construct($ShippingRule_DeleteResult)
  {
    $this->ShippingRule_DeleteResult = $ShippingRule_DeleteResult;
  }

}

}
