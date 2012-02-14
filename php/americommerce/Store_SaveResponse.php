<?php

if (!class_exists("Store_SaveResponse", false)) 
{
class Store_SaveResponse
{

  /**
   * 
   * @var boolean $Store_SaveResult
   * @access public
   */
  public $Store_SaveResult;

  /**
   * 
   * @param boolean $Store_SaveResult
   * @access public
   */
  public function __construct($Store_SaveResult)
  {
    $this->Store_SaveResult = $Store_SaveResult;
  }

}

}
