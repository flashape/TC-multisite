<?php

if (!class_exists("AdCode_CloneResponse", false)) 
{
class AdCode_CloneResponse
{

  /**
   * 
   * @var AdCodeTrans $AdCode_CloneResult
   * @access public
   */
  public $AdCode_CloneResult;

  /**
   * 
   * @param AdCodeTrans $AdCode_CloneResult
   * @access public
   */
  public function __construct($AdCode_CloneResult)
  {
    $this->AdCode_CloneResult = $AdCode_CloneResult;
  }

}

}
