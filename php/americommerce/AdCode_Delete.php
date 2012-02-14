<?php

if (!class_exists("AdCode_Delete", false)) 
{
class AdCode_Delete
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
