<?php

if (!class_exists("Attribute_Validate", false)) 
{
class Attribute_Validate
{

  /**
   * 
   * @var AttributeTrans $poAttributeTrans
   * @access public
   */
  public $poAttributeTrans;

  /**
   * 
   * @param AttributeTrans $poAttributeTrans
   * @access public
   */
  public function __construct($poAttributeTrans)
  {
    $this->poAttributeTrans = $poAttributeTrans;
  }

}

}
