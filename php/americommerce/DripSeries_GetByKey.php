<?php

if (!class_exists("DripSeries_GetByKey", false)) 
{
class DripSeries_GetByKey
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
