<?php

if (!class_exists("Address_SaveResponse", false)) 
{
class Address_SaveResponse
{

  /**
   * 
   * @var boolean $Address_SaveResult
   * @access public
   */
  public $Address_SaveResult;

  /**
   * 
   * @param boolean $Address_SaveResult
   * @access public
   */
  public function __construct($Address_SaveResult)
  {
    $this->Address_SaveResult = $Address_SaveResult;
  }

}

}
