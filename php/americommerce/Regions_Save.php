<?php

if (!class_exists("Regions_Save", false)) 
{
class Regions_Save
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
