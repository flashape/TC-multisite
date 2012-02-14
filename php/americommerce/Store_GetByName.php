<?php

if (!class_exists("Store_GetByName", false)) 
{
class Store_GetByName
{

  /**
   * 
   * @var string $psStoreName
   * @access public
   */
  public $psStoreName;

  /**
   * 
   * @param string $psStoreName
   * @access public
   */
  public function __construct($psStoreName)
  {
    $this->psStoreName = $psStoreName;
  }

}

}
