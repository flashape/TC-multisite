<?php

if (!class_exists("Theme_GetByNameResponse", false)) 
{
class Theme_GetByNameResponse
{

  /**
   * 
   * @var ThemeTrans $Theme_GetByNameResult
   * @access public
   */
  public $Theme_GetByNameResult;

  /**
   * 
   * @param ThemeTrans $Theme_GetByNameResult
   * @access public
   */
  public function __construct($Theme_GetByNameResult)
  {
    $this->Theme_GetByNameResult = $Theme_GetByNameResult;
  }

}

}
