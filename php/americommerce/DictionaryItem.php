<?php

if (!class_exists("DictionaryItem", false)) 
{
class DictionaryItem
{

  /**
   * 
   * @var anyType $Key
   * @access public
   */
  public $Key;

  /**
   * 
   * @var anyType $Value
   * @access public
   */
  public $Value;

  /**
   * 
   * @param anyType $Key
   * @param anyType $Value
   * @access public
   */
  public function __construct($Key, $Value)
  {
    $this->Key = $Key;
    $this->Value = $Value;
  }

}

}
