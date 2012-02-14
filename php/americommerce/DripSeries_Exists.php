<?php

if (!class_exists("DripSeries_Exists", false)) 
{
class DripSeries_Exists
{

  /**
   * 
   * @var int $piDripSeriesID
   * @access public
   */
  public $piDripSeriesID;

  /**
   * 
   * @param int $piDripSeriesID
   * @access public
   */
  public function __construct($piDripSeriesID)
  {
    $this->piDripSeriesID = $piDripSeriesID;
  }

}

}
