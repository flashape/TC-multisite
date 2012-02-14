<?php

if (!class_exists("Items", false)) 
{
class Items
{

  /**
   * 
   * @var DictionaryItem $Item
   * @access public
   */
  public $Item;

  /**
   * 
   * @param DictionaryItem $Item
   * @access public
   */
  public function __construct($Item)
  {
    $this->Item = $Item;
  }

}

}
