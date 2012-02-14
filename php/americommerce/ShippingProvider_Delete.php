<?php

if (!class_exists("ShippingProvider_Delete", false)) 
{
class ShippingProvider_Delete
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
