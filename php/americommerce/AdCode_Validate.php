<?php

if (!class_exists("AdCode_Validate", false)) 
{
class AdCode_Validate
{

  /**
   * 
   * @var AdCodeTrans $poAdCodeTrans
   * @access public
   */
  public $poAdCodeTrans;

  /**
   * 
   * @param AdCodeTrans $poAdCodeTrans
   * @access public
   */
  public function __construct($poAdCodeTrans)
  {
    $this->poAdCodeTrans = $poAdCodeTrans;
  }

}

}
