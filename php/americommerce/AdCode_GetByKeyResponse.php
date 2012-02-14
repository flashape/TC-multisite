<?php

if (!class_exists("AdCode_GetByKeyResponse", false)) 
{
class AdCode_GetByKeyResponse
{

  /**
   * 
   * @var AdCodeTrans $AdCode_GetByKeyResult
   * @access public
   */
  public $AdCode_GetByKeyResult;

  /**
   * 
   * @param AdCodeTrans $AdCode_GetByKeyResult
   * @access public
   */
  public function __construct($AdCode_GetByKeyResult)
  {
    $this->AdCode_GetByKeyResult = $AdCode_GetByKeyResult;
  }

}

}
