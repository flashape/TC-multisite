<?php

if (!class_exists("Theme_SaveResponse", false)) 
{
class Theme_SaveResponse
{

  /**
   * 
   * @var boolean $Theme_SaveResult
   * @access public
   */
  public $Theme_SaveResult;

  /**
   * 
   * @param boolean $Theme_SaveResult
   * @access public
   */
  public function __construct($Theme_SaveResult)
  {
    $this->Theme_SaveResult = $Theme_SaveResult;
  }

}

}
