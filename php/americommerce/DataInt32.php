<?php

if (!class_exists("DataInt32", false)) 
{
class DataInt32
{

  /**
   * 
   * @var int $Value
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
   * @param int $Value
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
