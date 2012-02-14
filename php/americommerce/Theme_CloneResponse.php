<?php

if (!class_exists("Theme_CloneResponse", false)) 
{
class Theme_CloneResponse
{

  /**
   * 
   * @var ThemeTrans $Theme_CloneResult
   * @access public
   */
  public $Theme_CloneResult;

  /**
   * 
   * @param ThemeTrans $Theme_CloneResult
   * @access public
   */
  public function __construct($Theme_CloneResult)
  {
    $this->Theme_CloneResult = $Theme_CloneResult;
  }

}

}
