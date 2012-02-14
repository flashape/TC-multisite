<?php

if (!class_exists("Theme_Exists", false)) 
{
class Theme_Exists
{

  /**
   * 
   * @var int $piThemeID
   * @access public
   */
  public $piThemeID;

  /**
   * 
   * @param int $piThemeID
   * @access public
   */
  public function __construct($piThemeID)
  {
    $this->piThemeID = $piThemeID;
  }

}

}
