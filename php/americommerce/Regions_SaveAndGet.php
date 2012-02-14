<?php

if (!class_exists("Regions_SaveAndGet", false)) 
{
class Regions_SaveAndGet
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
