<?php

if (!class_exists("DripSeries_SaveAndGetResponse", false)) 
{
class DripSeries_SaveAndGetResponse
{

  /**
   * 
   * @var DripSeriesTrans $DripSeries_SaveAndGetResult
   * @access public
   */
  public $DripSeries_SaveAndGetResult;

  /**
   * 
   * @param DripSeriesTrans $DripSeries_SaveAndGetResult
   * @access public
   */
  public function __construct($DripSeries_SaveAndGetResult)
  {
    $this->DripSeries_SaveAndGetResult = $DripSeries_SaveAndGetResult;
  }

}

}
