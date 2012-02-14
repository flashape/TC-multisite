<?php

if (!class_exists("ActiveInStore_SaveResponse", false)) 
{
class ActiveInStore_SaveResponse
{

  /**
   * 
   * @var boolean $ActiveInStore_SaveResult
   * @access public
   */
  public $ActiveInStore_SaveResult;

  /**
   * 
   * @param boolean $ActiveInStore_SaveResult
   * @access public
   */
  public function __construct($ActiveInStore_SaveResult)
  {
    $this->ActiveInStore_SaveResult = $ActiveInStore_SaveResult;
  }

}

}
