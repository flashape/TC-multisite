<?php

if (!class_exists("Address_SaveAndGet", false)) 
{
class Address_SaveAndGet
{

  /**
   * 
   * @var AddressTrans $poAddressTrans
   * @access public
   */
  public $poAddressTrans;

  /**
   * 
   * @param AddressTrans $poAddressTrans
   * @access public
   */
  public function __construct($poAddressTrans)
  {
    $this->poAddressTrans = $poAddressTrans;
  }

}

}
