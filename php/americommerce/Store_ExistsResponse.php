<?php

if (!class_exists("Store_ExistsResponse", false)) 
{
class Store_ExistsResponse
{

  /**
   * 
   * @var boolean $Store_ExistsResult
   * @access public
   */
  public $Store_ExistsResult;

  /**
   * 
   * @param boolean $Store_ExistsResult
   * @access public
   */
  public function __construct($Store_ExistsResult)
  {
    $this->Store_ExistsResult = $Store_ExistsResult;
  }

}

}
