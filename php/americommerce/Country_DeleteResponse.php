<?php

if (!class_exists("Country_DeleteResponse", false)) 
{
class Country_DeleteResponse
{

  /**
   * 
   * @var boolean $Country_DeleteResult
   * @access public
   */
  public $Country_DeleteResult;

  /**
   * 
   * @param boolean $Country_DeleteResult
   * @access public
   */
  public function __construct($Country_DeleteResult)
  {
    $this->Country_DeleteResult = $Country_DeleteResult;
  }

}

}
