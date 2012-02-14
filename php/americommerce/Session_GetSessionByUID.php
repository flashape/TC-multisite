<?php

if (!class_exists("Session_GetSessionByUID", false)) 
{
class Session_GetSessionByUID
{

  /**
   * 
   * @var string $psUID
   * @access public
   */
  public $psUID;

  /**
   * 
   * @param string $psUID
   * @access public
   */
  public function __construct($psUID)
  {
    $this->psUID = $psUID;
  }

}

}
