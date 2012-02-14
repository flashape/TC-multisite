<?php

if (!class_exists("Regions_Validate", false)) 
{
class Regions_Validate
{

  /**
   * 
   * @var RegionsTrans $poRegionsTrans
   * @access public
   */
  public $poRegionsTrans;

  /**
   * 
   * @param RegionsTrans $poRegionsTrans
   * @access public
   */
  public function __construct($poRegionsTrans)
  {
    $this->poRegionsTrans = $poRegionsTrans;
  }

}

}
