<?php

if (!class_exists("Theme_DeleteResponse", false)) 
{
class Theme_DeleteResponse
{

  /**
   * 
   * @var boolean $Theme_DeleteResult
   * @access public
   */
  public $Theme_DeleteResult;

  /**
   * 
   * @param boolean $Theme_DeleteResult
   * @access public
   */
  public function __construct($Theme_DeleteResult)
  {
    $this->Theme_DeleteResult = $Theme_DeleteResult;
  }

}

}
