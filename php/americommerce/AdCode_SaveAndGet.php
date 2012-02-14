<?php

if (!class_exists("AdCode_SaveAndGet", false)) 
{
class AdCode_SaveAndGet
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
