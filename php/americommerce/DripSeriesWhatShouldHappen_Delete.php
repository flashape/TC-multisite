<?php

if (!class_exists("DripSeriesWhatShouldHappen_Delete", false)) 
{
class DripSeriesWhatShouldHappen_Delete
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
