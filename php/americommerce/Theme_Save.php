<?php

if (!class_exists("Theme_Save", false)) 
{
class Theme_Save
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
