<?php

if (!class_exists("Theme_Validate", false)) 
{
class Theme_Validate
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
