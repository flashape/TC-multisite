<?php

if (!class_exists("Regions_SaveResponse", false)) 
{
class Regions_SaveResponse
{

  /**
   * 
   * @var boolean $Regions_SaveResult
   * @access public
   */
  public $Regions_SaveResult;

  /**
   * 
   * @param boolean $Regions_SaveResult
   * @access public
   */
  public function __construct($Regions_SaveResult)
  {
    $this->Regions_SaveResult = $Regions_SaveResult;
  }

}

}
