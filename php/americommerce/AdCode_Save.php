<?php

if (!class_exists("AdCode_Save", false)) 
{
class AdCode_Save
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
