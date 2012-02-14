<?php

if (!class_exists("AdCode_SaveAndGetResponse", false)) 
{
class AdCode_SaveAndGetResponse
{

  /**
   * 
   * @var AdCodeTrans $AdCode_SaveAndGetResult
   * @access public
   */
  public $AdCode_SaveAndGetResult;

  /**
   * 
   * @param AdCodeTrans $AdCode_SaveAndGetResult
   * @access public
   */
  public function __construct($AdCode_SaveAndGetResult)
  {
    $this->AdCode_SaveAndGetResult = $AdCode_SaveAndGetResult;
  }

}

}
