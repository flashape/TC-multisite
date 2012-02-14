<?php

if (!class_exists("Country_SaveResponse", false)) 
{
class Country_SaveResponse
{

  /**
   * 
   * @var boolean $Country_SaveResult
   * @access public
   */
  public $Country_SaveResult;

  /**
   * 
   * @param boolean $Country_SaveResult
   * @access public
   */
  public function __construct($Country_SaveResult)
  {
    $this->Country_SaveResult = $Country_SaveResult;
  }

}

}
