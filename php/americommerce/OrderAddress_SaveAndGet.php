<?php

if (!class_exists("OrderAddress_SaveAndGet", false)) 
{
class OrderAddress_SaveAndGet
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
