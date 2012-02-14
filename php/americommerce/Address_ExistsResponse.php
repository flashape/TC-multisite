<?php

if (!class_exists("Address_ExistsResponse", false)) 
{
class Address_ExistsResponse
{

  /**
   * 
   * @var boolean $Address_ExistsResult
   * @access public
   */
  public $Address_ExistsResult;

  /**
   * 
   * @param boolean $Address_ExistsResult
   * @access public
   */
  public function __construct($Address_ExistsResult)
  {
    $this->Address_ExistsResult = $Address_ExistsResult;
  }

}

}
