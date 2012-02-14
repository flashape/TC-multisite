<?php

if (!class_exists("State_SaveAndGet", false)) 
{
class State_SaveAndGet
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
