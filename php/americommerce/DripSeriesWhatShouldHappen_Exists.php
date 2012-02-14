<?php

if (!class_exists("DripSeriesWhatShouldHappen_Exists", false)) 
{
class DripSeriesWhatShouldHappen_Exists
{

  /**
   * 
   * @var int $piWhatShouldHappenID
   * @access public
   */
  public $piWhatShouldHappenID;

  /**
   * 
   * @param int $piWhatShouldHappenID
   * @access public
   */
  public function __construct($piWhatShouldHappenID)
  {
    $this->piWhatShouldHappenID = $piWhatShouldHappenID;
  }

}

}
