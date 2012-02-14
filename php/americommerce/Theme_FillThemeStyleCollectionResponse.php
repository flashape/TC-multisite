<?php

if (!class_exists("Theme_FillThemeStyleCollectionResponse", false)) 
{
class Theme_FillThemeStyleCollectionResponse
{

  /**
   * 
   * @var ThemeTrans $Theme_FillThemeStyleCollectionResult
   * @access public
   */
  public $Theme_FillThemeStyleCollectionResult;

  /**
   * 
   * @param ThemeTrans $Theme_FillThemeStyleCollectionResult
   * @access public
   */
  public function __construct($Theme_FillThemeStyleCollectionResult)
  {
    $this->Theme_FillThemeStyleCollectionResult = $Theme_FillThemeStyleCollectionResult;
  }

}

}
