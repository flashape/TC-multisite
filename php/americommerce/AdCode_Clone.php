<?php

if (!class_exists("AdCode_Clone", false)) 
{
class AdCode_Clone
{

  /**
   * 
   * @var int $piadCodeID
   * @access public
   */
  public $piadCodeID;

  /**
   * 
   * @param int $piadCodeID
   * @access public
   */
  public function __construct($piadCodeID)
  {
    $this->piadCodeID = $piadCodeID;
  }

}

}
