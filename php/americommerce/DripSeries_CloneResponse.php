<?php

if (!class_exists("DripSeries_CloneResponse", false)) 
{
class DripSeries_CloneResponse
{

  /**
   * 
   * @var DripSeriesTrans $DripSeries_CloneResult
   * @access public
   */
  public $DripSeries_CloneResult;

  /**
   * 
   * @param DripSeriesTrans $DripSeries_CloneResult
   * @access public
   */
  public function __construct($DripSeries_CloneResult)
  {
    $this->DripSeries_CloneResult = $DripSeries_CloneResult;
  }

}

}
