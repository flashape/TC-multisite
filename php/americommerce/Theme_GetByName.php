<?php

if (!class_exists("Theme_GetByName", false)) 
{
class Theme_GetByName
{

  /**
   * 
   * @var string $psThemeName
   * @access public
   */
  public $psThemeName;

  /**
   * 
   * @param string $psThemeName
   * @access public
   */
  public function __construct($psThemeName)
  {
    $this->psThemeName = $psThemeName;
  }

}

}
