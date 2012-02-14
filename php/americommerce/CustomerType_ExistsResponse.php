<?php

if (!class_exists("CustomerType_ExistsResponse", false)) 
{
class CustomerType_ExistsResponse
{

  /**
   * 
   * @var boolean $CustomerType_ExistsResult
   * @access public
   */
  public $CustomerType_ExistsResult;

  /**
   * 
   * @param boolean $CustomerType_ExistsResult
   * @access public
   */
  public function __construct($CustomerType_ExistsResult)
  {
    $this->CustomerType_ExistsResult = $CustomerType_ExistsResult;
  }

}

}
