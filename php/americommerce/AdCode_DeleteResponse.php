<?php

if (!class_exists("AdCode_DeleteResponse", false)) 
{
class AdCode_DeleteResponse
{

  /**
   * 
   * @var boolean $AdCode_DeleteResult
   * @access public
   */
  public $AdCode_DeleteResult;

  /**
   * 
   * @param boolean $AdCode_DeleteResult
   * @access public
   */
  public function __construct($AdCode_DeleteResult)
  {
    $this->AdCode_DeleteResult = $AdCode_DeleteResult;
  }

}

}
