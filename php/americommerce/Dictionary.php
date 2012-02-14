<?php

if (!class_exists("Dictionary", false)) 
{
class Dictionary
{

  /**
   * 
   * @var Items $Items
   * @access public
   */
  public $Items;

  /**
   * 
   * @param Items $Items
   * @access public
   */
  public function __construct($Items)
  {
    $this->Items = $Items;
  }

}

}
