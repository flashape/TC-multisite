<?php

if (!class_exists("CustomerType_SaveResponse", false)) 
{
class CustomerType_SaveResponse
{

  /**
   * 
   * @var boolean $CustomerType_SaveResult
   * @access public
   */
  public $CustomerType_SaveResult;

  /**
   * 
   * @param boolean $CustomerType_SaveResult
   * @access public
   */
  public function __construct($CustomerType_SaveResult)
  {
    $this->CustomerType_SaveResult = $CustomerType_SaveResult;
  }

}

}
