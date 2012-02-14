<?php

if (!class_exists("Regions_DeleteResponse", false)) 
{
class Regions_DeleteResponse
{

  /**
   * 
   * @var boolean $Regions_DeleteResult
   * @access public
   */
  public $Regions_DeleteResult;

  /**
   * 
   * @param boolean $Regions_DeleteResult
   * @access public
   */
  public function __construct($Regions_DeleteResult)
  {
    $this->Regions_DeleteResult = $Regions_DeleteResult;
  }

}

}
