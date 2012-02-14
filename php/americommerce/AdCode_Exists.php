<?php

if (!class_exists("AdCode_Exists", false)) 
{
class AdCode_Exists
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
