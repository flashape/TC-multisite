<?php

if (!class_exists("Theme_GetAllResponse", false)) 
{
class Theme_GetAllResponse
{

  /**
   * 
   * @var array $Theme_GetAllResult
   * @access public
   */
  public $Theme_GetAllResult;

  /**
   * 
   * @param array $Theme_GetAllResult
   * @access public
   */
  public function __construct($Theme_GetAllResult)
  {
    $this->Theme_GetAllResult = $Theme_GetAllResult;
  }

}

}
