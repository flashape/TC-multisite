<?php

if (!class_exists("Cache_ResetResponse", false)) 
{
class Cache_ResetResponse
{

  /**
   * 
   * @var string $Cache_ResetResult
   * @access public
   */
  public $Cache_ResetResult;

  /**
   * 
   * @param string $Cache_ResetResult
   * @access public
   */
  public function __construct($Cache_ResetResult)
  {
    $this->Cache_ResetResult = $Cache_ResetResult;
  }

}

}
