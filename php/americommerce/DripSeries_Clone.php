<?php

if (!class_exists("DripSeries_Clone", false)) 
{
class DripSeries_Clone
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
