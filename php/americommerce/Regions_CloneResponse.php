<?php

if (!class_exists("Regions_CloneResponse", false)) 
{
class Regions_CloneResponse
{

  /**
   * 
   * @var RegionsTrans $Regions_CloneResult
   * @access public
   */
  public $Regions_CloneResult;

  /**
   * 
   * @param RegionsTrans $Regions_CloneResult
   * @access public
   */
  public function __construct($Regions_CloneResult)
  {
    $this->Regions_CloneResult = $Regions_CloneResult;
  }

}

}
