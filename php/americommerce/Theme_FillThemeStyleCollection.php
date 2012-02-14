<?php

if (!class_exists("Theme_FillThemeStyleCollection", false)) 
{
class Theme_FillThemeStyleCollection
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
