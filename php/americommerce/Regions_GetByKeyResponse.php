<?php

if (!class_exists("Regions_GetByKeyResponse", false)) 
{
class Regions_GetByKeyResponse
{

  /**
   * 
   * @var RegionsTrans $Regions_GetByKeyResult
   * @access public
   */
  public $Regions_GetByKeyResult;

  /**
   * 
   * @param RegionsTrans $Regions_GetByKeyResult
   * @access public
   */
  public function __construct($Regions_GetByKeyResult)
  {
    $this->Regions_GetByKeyResult = $Regions_GetByKeyResult;
  }

}

}
