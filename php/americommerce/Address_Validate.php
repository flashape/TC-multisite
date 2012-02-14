<?php

if (!class_exists("Address_Validate", false)) 
{
class Address_Validate
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
