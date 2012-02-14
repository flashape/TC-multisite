<?php

if (!class_exists("Theme_SaveAndGetResponse", false)) 
{
class Theme_SaveAndGetResponse
{

  /**
   * 
   * @var ThemeTrans $Theme_SaveAndGetResult
   * @access public
   */
  public $Theme_SaveAndGetResult;

  /**
   * 
   * @param ThemeTrans $Theme_SaveAndGetResult
   * @access public
   */
  public function __construct($Theme_SaveAndGetResult)
  {
    $this->Theme_SaveAndGetResult = $Theme_SaveAndGetResult;
  }

}

}
