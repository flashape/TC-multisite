<?php

if (!class_exists("Theme_SaveAndGet", false)) 
{
class Theme_SaveAndGet
{

  /**
   * 
   * @var ThemeTrans $poThemeTrans
   * @access public
   */
  public $poThemeTrans;

  /**
   * 
   * @param ThemeTrans $poThemeTrans
   * @access public
   */
  public function __construct($poThemeTrans)
  {
    $this->poThemeTrans = $poThemeTrans;
  }

}

}
