<?php

if (!class_exists("Store_DeleteResponse", false)) 
{
class Store_DeleteResponse
{

  /**
   * 
   * @var boolean $Store_DeleteResult
   * @access public
   */
  public $Store_DeleteResult;

  /**
   * 
   * @param boolean $Store_DeleteResult
   * @access public
   */
  public function __construct($Store_DeleteResult)
  {
    $this->Store_DeleteResult = $Store_DeleteResult;
  }

}

}
