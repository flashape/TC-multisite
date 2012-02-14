<?php

if (!class_exists("Theme_Clone", false)) 
{
class Theme_Clone
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
