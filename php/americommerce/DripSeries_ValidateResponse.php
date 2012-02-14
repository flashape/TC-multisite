<?php

if (!class_exists("DripSeries_ValidateResponse", false)) 
{
class DripSeries_ValidateResponse
{

  /**
   * 
   * @var string $DripSeries_ValidateResult
   * @access public
   */
  public $DripSeries_ValidateResult;

  /**
   * 
   * @param string $DripSeries_ValidateResult
   * @access public
   */
  public function __construct($DripSeries_ValidateResult)
  {
    $this->DripSeries_ValidateResult = $DripSeries_ValidateResult;
  }

}

}
