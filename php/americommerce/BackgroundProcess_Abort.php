<?php

if (!class_exists("BackgroundProcess_Abort", false)) 
{
class BackgroundProcess_Abort
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
