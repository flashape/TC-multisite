<?php

if (!class_exists("Theme_GetByKey", false)) 
{
class Theme_GetByKey
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
