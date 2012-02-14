<?php

if (!class_exists("DripSeries_SaveResponse", false)) 
{
class DripSeries_SaveResponse
{

  /**
   * 
   * @var boolean $DripSeries_SaveResult
   * @access public
   */
  public $DripSeries_SaveResult;

  /**
   * 
   * @param boolean $DripSeries_SaveResult
   * @access public
   */
  public function __construct($DripSeries_SaveResult)
  {
    $this->DripSeries_SaveResult = $DripSeries_SaveResult;
  }

}

}
