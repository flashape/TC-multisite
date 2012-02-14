<?php

if (!class_exists("BackgroundProcess_GetCountResponse", false)) 
{
class BackgroundProcess_GetCountResponse
{

  /**
   * 
   * @var int $BackgroundProcess_GetCountResult
   * @access public
   */
  public $BackgroundProcess_GetCountResult;

  /**
   * 
   * @param int $BackgroundProcess_GetCountResult
   * @access public
   */
  public function __construct($BackgroundProcess_GetCountResult)
  {
    $this->BackgroundProcess_GetCountResult = $BackgroundProcess_GetCountResult;
  }

}

}
