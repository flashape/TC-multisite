<?php

if (!class_exists("BackgroundProcess_IsRunning", false)) 
{
class BackgroundProcess_IsRunning
{

  /**
   * 
   * @var string $psProcessKey
   * @access public
   */
  public $psProcessKey;

  /**
   * 
   * @param string $psProcessKey
   * @access public
   */
  public function __construct($psProcessKey)
  {
    $this->psProcessKey = $psProcessKey;
  }

}

}
