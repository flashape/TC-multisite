<?php

if (!class_exists("AdCode_ExistsResponse", false)) 
{
class AdCode_ExistsResponse
{

  /**
   * 
   * @var boolean $AdCode_ExistsResult
   * @access public
   */
  public $AdCode_ExistsResult;

  /**
   * 
   * @param boolean $AdCode_ExistsResult
   * @access public
   */
  public function __construct($AdCode_ExistsResult)
  {
    $this->AdCode_ExistsResult = $AdCode_ExistsResult;
  }

}

}
