<?php

if (!class_exists("ShippingProvider_GetByKey", false)) 
{
class ShippingProvider_GetByKey
{

  /**
   * 
   * @var int $piproviderID
   * @access public
   */
  public $piproviderID;

  /**
   * 
   * @param int $piproviderID
   * @access public
   */
  public function __construct($piproviderID)
  {
    $this->piproviderID = $piproviderID;
  }

}

}
