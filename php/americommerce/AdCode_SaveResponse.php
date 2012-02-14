<?php

if (!class_exists("AdCode_SaveResponse", false)) 
{
class AdCode_SaveResponse
{

  /**
   * 
   * @var boolean $AdCode_SaveResult
   * @access public
   */
  public $AdCode_SaveResult;

  /**
   * 
   * @param boolean $AdCode_SaveResult
   * @access public
   */
  public function __construct($AdCode_SaveResult)
  {
    $this->AdCode_SaveResult = $AdCode_SaveResult;
  }

}

}
