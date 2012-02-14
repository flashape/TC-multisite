<?php

if (!class_exists("State_Save", false)) 
{
class State_Save
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
