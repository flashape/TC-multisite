<?php

if (!class_exists("Country_ExistsResponse", false)) 
{
class Country_ExistsResponse
{

  /**
   * 
   * @var boolean $Country_ExistsResult
   * @access public
   */
  public $Country_ExistsResult;

  /**
   * 
   * @param boolean $Country_ExistsResult
   * @access public
   */
  public function __construct($Country_ExistsResult)
  {
    $this->Country_ExistsResult = $Country_ExistsResult;
  }

}

}
