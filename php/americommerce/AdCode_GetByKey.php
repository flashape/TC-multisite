<?php

if (!class_exists("AdCode_GetByKey", false)) 
{
class AdCode_GetByKey
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
