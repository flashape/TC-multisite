<?php

if (!class_exists("DripSeries_Delete", false)) 
{
class DripSeries_Delete
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
