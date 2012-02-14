<?php

if (!class_exists("Category_Clone", false)) 
{
class Category_Clone
{

  /**
   * 
   * @var int $picatID
   * @access public
   */
  public $picatID;

  /**
   * 
   * @param int $picatID
   * @access public
   */
  public function __construct($picatID)
  {
    $this->picatID = $picatID;
  }

}

}
