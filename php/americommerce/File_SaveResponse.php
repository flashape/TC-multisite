<?php

if (!class_exists("File_SaveResponse", false)) 
{
class File_SaveResponse
{

  /**
   * 
   * @var boolean $File_SaveResult
   * @access public
   */
  public $File_SaveResult;

  /**
   * 
   * @param boolean $File_SaveResult
   * @access public
   */
  public function __construct($File_SaveResult)
  {
    $this->File_SaveResult = $File_SaveResult;
  }

}

}
