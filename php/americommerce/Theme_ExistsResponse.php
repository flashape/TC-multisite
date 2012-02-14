<?php

if (!class_exists("Theme_ExistsResponse", false)) 
{
class Theme_ExistsResponse
{

  /**
   * 
   * @var boolean $Theme_ExistsResult
   * @access public
   */
  public $Theme_ExistsResult;

  /**
   * 
   * @param boolean $Theme_ExistsResult
   * @access public
   */
  public function __construct($Theme_ExistsResult)
  {
    $this->Theme_ExistsResult = $Theme_ExistsResult;
  }

}

}
