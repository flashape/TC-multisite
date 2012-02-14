<?php

if (!class_exists("State_Validate", false)) 
{
class State_Validate
{

  /**
   * 
   * @var StateTrans $poStateTrans
   * @access public
   */
  public $poStateTrans;

  /**
   * 
   * @param StateTrans $poStateTrans
   * @access public
   */
  public function __construct($poStateTrans)
  {
    $this->poStateTrans = $poStateTrans;
  }

}

}
