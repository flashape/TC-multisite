<?php

if (!class_exists("Theme_Delete", false)) 
{
class Theme_Delete
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
