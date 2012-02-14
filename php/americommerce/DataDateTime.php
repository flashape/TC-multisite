<?php

if (!class_exists("DataDateTime", false)) 
{
class DataDateTime
{

  /**
   * 
   * @var dateTime $Value
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
   * @param dateTime $Value
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
