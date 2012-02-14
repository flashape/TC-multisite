<?php

if (!class_exists("ActiveInStore_ExistsResponse", false)) 
{
class ActiveInStore_ExistsResponse
{

  /**
   * 
   * @var boolean $ActiveInStore_ExistsResult
   * @access public
   */
  public $ActiveInStore_ExistsResult;

  /**
   * 
   * @param boolean $ActiveInStore_ExistsResult
   * @access public
   */
  public function __construct($ActiveInStore_ExistsResult)
  {
    $this->ActiveInStore_ExistsResult = $ActiveInStore_ExistsResult;
  }

}

}
