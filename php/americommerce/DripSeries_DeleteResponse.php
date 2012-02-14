<?php

if (!class_exists("DripSeries_DeleteResponse", false)) 
{
class DripSeries_DeleteResponse
{

  /**
   * 
   * @var boolean $DripSeries_DeleteResult
   * @access public
   */
  public $DripSeries_DeleteResult;

  /**
   * 
   * @param boolean $DripSeries_DeleteResult
   * @access public
   */
  public function __construct($DripSeries_DeleteResult)
  {
    $this->DripSeries_DeleteResult = $DripSeries_DeleteResult;
  }

}

}
