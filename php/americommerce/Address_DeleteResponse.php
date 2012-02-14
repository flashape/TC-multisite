<?php

if (!class_exists("Address_DeleteResponse", false)) 
{
class Address_DeleteResponse
{

  /**
   * 
   * @var boolean $Address_DeleteResult
   * @access public
   */
  public $Address_DeleteResult;

  /**
   * 
   * @param boolean $Address_DeleteResult
   * @access public
   */
  public function __construct($Address_DeleteResult)
  {
    $this->Address_DeleteResult = $Address_DeleteResult;
  }

}

}
