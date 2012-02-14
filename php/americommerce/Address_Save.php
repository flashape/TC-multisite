<?php

if (!class_exists("Address_Save", false)) 
{
class Address_Save
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
