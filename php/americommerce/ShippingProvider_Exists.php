<?php

if (!class_exists("ShippingProvider_Exists", false)) 
{
class ShippingProvider_Exists
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
