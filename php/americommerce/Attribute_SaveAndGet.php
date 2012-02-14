<?php

if (!class_exists("Attribute_SaveAndGet", false)) 
{
class Attribute_SaveAndGet
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
