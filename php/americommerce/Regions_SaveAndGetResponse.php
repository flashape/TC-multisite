<?php

if (!class_exists("Regions_SaveAndGetResponse", false)) 
{
class Regions_SaveAndGetResponse
{

  /**
   * 
   * @var RegionsTrans $Regions_SaveAndGetResult
   * @access public
   */
  public $Regions_SaveAndGetResult;

  /**
   * 
   * @param RegionsTrans $Regions_SaveAndGetResult
   * @access public
   */
  public function __construct($Regions_SaveAndGetResult)
  {
    $this->Regions_SaveAndGetResult = $Regions_SaveAndGetResult;
  }

}

}
