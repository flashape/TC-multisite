<?php

if (!class_exists("DripSeries_ExistsResponse", false)) 
{
class DripSeries_ExistsResponse
{

  /**
   * 
   * @var boolean $DripSeries_ExistsResult
   * @access public
   */
  public $DripSeries_ExistsResult;

  /**
   * 
   * @param boolean $DripSeries_ExistsResult
   * @access public
   */
  public function __construct($DripSeries_ExistsResult)
  {
    $this->DripSeries_ExistsResult = $DripSeries_ExistsResult;
  }

}

}
