<?php

if (!class_exists("BackgroundProcess_IsRunningResponse", false)) 
{
class BackgroundProcess_IsRunningResponse
{

  /**
   * 
   * @var boolean $BackgroundProcess_IsRunningResult
   * @access public
   */
  public $BackgroundProcess_IsRunningResult;

  /**
   * 
   * @param boolean $BackgroundProcess_IsRunningResult
   * @access public
   */
  public function __construct($BackgroundProcess_IsRunningResult)
  {
    $this->BackgroundProcess_IsRunningResult = $BackgroundProcess_IsRunningResult;
  }

}

}
