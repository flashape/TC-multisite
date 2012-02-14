<?php

if (!class_exists("Regions_ExistsResponse", false)) 
{
class Regions_ExistsResponse
{

  /**
   * 
   * @var boolean $Regions_ExistsResult
   * @access public
   */
  public $Regions_ExistsResult;

  /**
   * 
   * @param boolean $Regions_ExistsResult
   * @access public
   */
  public function __construct($Regions_ExistsResult)
  {
    $this->Regions_ExistsResult = $Regions_ExistsResult;
  }

}

}
