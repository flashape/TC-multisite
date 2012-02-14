<?php

if (!class_exists("DripSeries_GetByKeyResponse", false)) 
{
class DripSeries_GetByKeyResponse
{

  /**
   * 
   * @var DripSeriesTrans $DripSeries_GetByKeyResult
   * @access public
   */
  public $DripSeries_GetByKeyResult;

  /**
   * 
   * @param DripSeriesTrans $DripSeries_GetByKeyResult
   * @access public
   */
  public function __construct($DripSeries_GetByKeyResult)
  {
    $this->DripSeries_GetByKeyResult = $DripSeries_GetByKeyResult;
  }

}

}
