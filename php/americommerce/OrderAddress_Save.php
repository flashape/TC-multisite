<?php

if (!class_exists("OrderAddress_Save", false)) 
{
class OrderAddress_Save
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
