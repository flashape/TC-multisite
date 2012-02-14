<?php

if (!class_exists("Category_Delete", false)) 
{
class Category_Delete
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
