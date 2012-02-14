<?php

if (!class_exists("CustomerType_DeleteResponse", false)) 
{
class CustomerType_DeleteResponse
{

  /**
   * 
   * @var boolean $CustomerType_DeleteResult
   * @access public
   */
  public $CustomerType_DeleteResult;

  /**
   * 
   * @param boolean $CustomerType_DeleteResult
   * @access public
   */
  public function __construct($CustomerType_DeleteResult)
  {
    $this->CustomerType_DeleteResult = $CustomerType_DeleteResult;
  }

}

}
