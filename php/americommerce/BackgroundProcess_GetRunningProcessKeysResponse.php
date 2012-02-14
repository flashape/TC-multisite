<?php

if (!class_exists("BackgroundProcess_GetRunningProcessKeysResponse", false)) 
{
class BackgroundProcess_GetRunningProcessKeysResponse
{

  /**
   * 
   * @var string $BackgroundProcess_GetRunningProcessKeysResult
   * @access public
   */
  public $BackgroundProcess_GetRunningProcessKeysResult;

  /**
   * 
   * @param string $BackgroundProcess_GetRunningProcessKeysResult
   * @access public
   */
  public function __construct($BackgroundProcess_GetRunningProcessKeysResult)
  {
    $this->BackgroundProcess_GetRunningProcessKeysResult = $BackgroundProcess_GetRunningProcessKeysResult;
  }

}

}
