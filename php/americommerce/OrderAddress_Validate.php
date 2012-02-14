<?php

if (!class_exists("OrderAddress_Validate", false)) 
{
class OrderAddress_Validate
{

  /**
   * 
   * @var OrderAddressTrans $poOrderAddressTrans
   * @access public
   */
  public $poOrderAddressTrans;

  /**
   * 
   * @param OrderAddressTrans $poOrderAddressTrans
   * @access public
   */
  public function __construct($poOrderAddressTrans)
  {
    $this->poOrderAddressTrans = $poOrderAddressTrans;
  }

}

}
