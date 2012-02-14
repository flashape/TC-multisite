<?php

if (!class_exists("Attribute_Save", false)) 
{
class Attribute_Save
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
