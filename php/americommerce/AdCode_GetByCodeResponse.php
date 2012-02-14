<?php

if (!class_exists("AdCode_GetByCodeResponse", false)) 
{
class AdCode_GetByCodeResponse
{

  /**
   * 
   * @var AdCodeTrans $AdCode_GetByCodeResult
   * @access public
   */
  public $AdCode_GetByCodeResult;

  /**
   * 
   * @param AdCodeTrans $AdCode_GetByCodeResult
   * @access public
   */
  public function __construct($AdCode_GetByCodeResult)
  {
    $this->AdCode_GetByCodeResult = $AdCode_GetByCodeResult;
  }

}

}
