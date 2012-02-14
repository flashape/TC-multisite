<?php

if (!class_exists("DripSeriesWhatShouldHappen_GetByKey", false)) 
{
class DripSeriesWhatShouldHappen_GetByKey
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
