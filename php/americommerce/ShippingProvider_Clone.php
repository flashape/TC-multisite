<?php

if (!class_exists("ShippingProvider_Clone", false)) 
{
class ShippingProvider_Clone
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
