<?php

if (!class_exists("DataMoney", false)) 
{
class DataMoney
{

  /**
   * 
   * @var float $Value
   * @access public
   */
  public $Value;

  /**
   * 
   * @var boolean $IsNull
   * @access public
   */
  public $IsNull;

  /**
   * 
   * @param float $Value
   * @param boolean $IsNull
   * @access public
   */
  public function __construct($Value, $IsNull)
  {
    $this->Value = $Value;
    $this->IsNull = $IsNull;
  }

}

}
