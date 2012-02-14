<?php

if (!class_exists("Theme_GetByKeyResponse", false)) 
{
class Theme_GetByKeyResponse
{

  /**
   * 
   * @var ThemeTrans $Theme_GetByKeyResult
   * @access public
   */
  public $Theme_GetByKeyResult;

  /**
   * 
   * @param ThemeTrans $Theme_GetByKeyResult
   * @access public
   */
  public function __construct($Theme_GetByKeyResult)
  {
    $this->Theme_GetByKeyResult = $Theme_GetByKeyResult;
  }

}

}
